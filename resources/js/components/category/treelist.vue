<template>
  <div id="app">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
    <div class="test">
      <button @click='loadata'>加载后台数据</button>
      <button @click='arrToJsonObj'>重组后台数据</button>
      <button @click='showdata'>输出后台数据看看</button>
    <button @click="addNode">Add Node</button>
    </div>
    <vue-tree-list
      @click="onClick($event)"
      @dblclick="dblclick($event)"
      @change-name="onChangeName($event)"
      @delete-node="onDel($event)"
      @add-node="onAddNode($event)"
      :model="data"
      default-tree-node-name="父节点"
      default-leaf-node-name="子节点"
      v-bind:default-expanded="false" style="background-color: red:width:auto">
      <span class="icon" slot="addTreeNodeIcon">📂</span>
      <span class="icon" slot="addLeafNodeIcon">＋</span>
      <span class="icon" slot="editNodeIcon">✍</span>
      <span class="icon" slot="delNodeIcon">✂️</span>
      <span class="icon" slot="leafNodeIcon">🍃</span>
      <span class="icon" slot="treeNodeIcon">🌲</span>
    </vue-tree-list>
    <button @click="getNewTree">Get new tree</button>
    <pre>
      {{newTree}}
    </pre>
                </div>
            </div>
        </div>      
    </div>
  </div>
</template>

<script>
  import { VueTreeList, Tree, TreeNode } from 'vue-tree-list'
  export default {
    components: {
      VueTreeList
    },
    data () {
      return {
        newTree: {},
        data: new Tree([
          {
            'name': 'Node 1',
            'id': 1,
            'pid': 0,
            dragDisabled: true,
            // addTreeNodeDisabled: true,
            // addLeafNodeDisabled: true,
            // editNodeDisabled: true,
            // delNodeDisabled: true,
            'children': [
              {
                'name': 'Node 1-2',
                'id': 2,
                'isLeaf': true,
                'pid': 1
              }
            ]
          },
          {
            'name': 'Node 2',
            'id': 3,
            'pid': 0,
            'disabled': true
          },
          {
            'name': 'Node 3',
            'id': 4,
            'pid': 0
          }
        ]),
      categories:null,//接收后台返回的数据
      categoriesjson:null,
      testdata:'tsetdata.............'
      }

    },
    methods: {
      onDel (node) {
        console.log(node.id)
        console.log('删除节点');
        confirm('删除节点'+node.name+'???')
        // node.remove()
      },

      onChangeName (params) {
        console.log('节点变化监听');
        // console.log(params)
      },

      onAddNode (params) {
        console.log('添加节点单事件');
        // return false;
        // console.log(params)
      },

      addLeaf (params) {
        console.log('添加子子节点事件');
        // console.log(params)
      },

      onClick (params) {
        console.log('鼠标单击节点单事件');
        console.log(params.id+'---PID'+params.pid)
      },
      dblclick(){
        console.log('dblclick***************')
      },

      addNode () {
        console.log('addNode事件');
        var node = new TreeNode({ name: 'new node', isLeaf: false })
        if (!this.data.children) this.data.children = []
        this.data.addChildren(node)
      },

      getNewTree () {
        var vm = this
        function _dfs (oldNode) {
          var newNode = {}
          for (var k in oldNode) {
            if (k !== 'children' && k !== 'parent') {
              newNode[k] = oldNode[k]
            }
          }

          if (oldNode.children && oldNode.children.length > 0) {
            newNode.children = []
            for (var i = 0, len = oldNode.children.length; i < len; i++) {
              newNode.children.push(_dfs(oldNode.children[i]))
            }
          }
          return newNode
        }

        vm.newTree = _dfs(vm.data)
      },
      // *************************************************自定义方法
    toggleChildren: function(item) {
       item.expanded = !item.expanded;
       },
    loadata: function() {
      // alert('laod data!') 
      axios.get('api/catetree')
      // axios.get('api/user?page='+2)
        .then(({data}) => (
            this.categories=data
            // console.log(data)
            ))
        .catch(err=>console.log(err))
        .then(
          console.log('#加载列表完成........!!!！')

          )
        // swalt.fire({
        //   icon: 'success',
        //   title: 'Users loaded successfully!'
        // })
     },

    arrToJsonObj:function(){
      //重组数据，把普通数据根据id重组为嵌套json,返回嵌套数组对象,
      var tempArr=this.categories;//原数组data
      var newArr = null;//新data
        function findobj(arr,id){
                // console.log(arr);
          if(id==0){
            return arr[0];
          }
                // console.log(id+']]]]]]]]]');
          for(var k=0;k<arr.length;k++) {  
              if(arr[k].id==id){
                console.log(arr[k]);
                console.log('>>>>>>');

                return arr[k];
              };  
          }; 

        }
      for(var i = 0; i<this.categories.length;i++){
        var tempObj=null;
        // console.log(this.categories[i]);
        var nextId=parseInt(i+1)
        // var this.categories[i].children=[];
        if(nextId==this.categories.length){
          // console.log(nextId);
          nextId=0;
          }
        // console.log(this.categories[nextId].pid+'<<<>>>'+this.categories[i].id)

        if(this.categories[nextId].pid==this.categories[i].id){
          console.log('current id='+i+'()'+this.categories[nextId].pid+'---going')

          this.categories[i].children=[];
          this.categories[i].children.push(this.categories[nextId]);
          this.categories[i].isLeaf=false;
        }else{

          console.log(this.categories[nextId].pid+'*********'+nextId)
          tempObj=findobj(tempArr,0);
          console.log(tempObj.name+'===============222');
          // if(!tempObj.children){            
          // tempObj.children=[];
          // }
          // console.log(JSON.stringify(tempObj));
          if(nextId){
          tempObj.children.push(this.categories[nextId]);
          tempObj.isLeaf=false;

          }
      // console.log(JSON.stringify(this.categories[0]));

        }



      }
      console.log('重组数据完成。。。。。。。。。。。')
      this.categories[0].isLeaf=false;

      return this.categoriesjson=this.categories[0];

    },
    showdata:function(){
      // console.log(JSON.stringify(this.categories[0]))
      // console.log(JSON.stringify(this.categories[0].children))
      // console.log('切换数据。。。。。。。。。。。')
      // console.log(this.data)
      // console.log(this.testdata)
      // var JSONdata=JSON.stringify(this.data)
      // console.log(JSONdata)
      // this.data=(this.categories[0])
      // this.data=(this.categories[0])
      // JSON.parse(this.categories[0]);
      // // ***************
      // console.log(this.data)//root
      // console.log(this.data.children)//Array(3)
      // this.data.children=this.categories[0].children//OK,但功能不正常，需要使用new方法

      // this.data=new Tree(this.categories[0].children);//OK,但不是一个root树
      // this.data=new Tree(this.categories[0]);//不加综括号不能正常显示
      this.data=new Tree([this.categories[0]]);//OK,


    }
      
    }
  }
</script>

<style scoped="scoped">
  .vtl {
    .vtl-drag-disabled {
      background-color: #d0cfcf;
/*      &:hover {
        background-color: #d0cfcf;
      }*/
    }
    .vtl-disabled {
      background-color: #d0cfcf;
    }
  }
  .icon {
    width: 100px;
/*    &:hover {
      cursor: pointer;
    }*/
  }
</style>

