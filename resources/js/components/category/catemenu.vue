<template>
  <div class="tree">
    <div 
    class="node" 
    :id="node.id" 
    @mouseenter="cursoron" 
    @mouseleave="cursoroff" 
    :style="{'margin-left':depthLev * indentRatio + 'px'}" 
    @click="showinfo($event)"
          draggable="true"
          @dragstart="handleDragStart($event, node)"
          @dragover.prevent="handleDragOver($event, node)"
          @dragleave.prevent="handleDragLeave($event, node)"
          @dragenter="handleDragEnter($event, node)" 
          @dragend="handleDragEnd($event, node)"

    >

      <span v-if="hasChildren" @click="toggleNode">
          <slot name="folded">
            <span >
              <span class="cursorpointer" v-if="!node.isShow">▼</span>
            </span>

          </slot>
          <slot name="expanded">
            <span class="cursorpointer" v-if="node.isShow">►</span>
          </slot> 
      </span> 
      <span class="cursorpointer" v-else>▷</span>


      <slot name="NodeName">
        <input type="text" v-model="node.name" @click="monitorInput"  @blur="blurInput" @change="updateName" onfocus="this.select();" style="background:none;outline:none;border:0px solid;" >

      </slot>
      <span>id={{node.id}} pid={{node.pid}}</span>
        <span class="tool" v-if="showTool">        
          <span class="cursorpointer" @click="addNewNode($event)" title="addNewNode" style="color:blue;font-size: auto;" id="node.id"><slot name="addNewNode">✚</slot></span>
          <span class="cursorpointer" @click="updateName($event)" title="editNode" style="color:orange;font-size: auto"><slot name="editNode">✎</slot></span>
          <span class="cursorpointer" @click="delNode($event)" title="delNode" style="color:red;font-size: auto"><slot name="delNode">❌</slot></span>
        </span>
    </div>
    <div class="dragmargin"></div>


    <catemenu 
    v-if="node.isShow"
    v-for="child in node.children" 
    :key="child.id"
    :node="child"
    :depthLev="depthLev+1"
    :indentRatio="indentRatio"
    :id="node.id"
    :pid="node.pid"
    @addNode="addNodeAction($event)"


    >
            <span slot="addNewNode">添加子项</span>
            <span slot="editNode">编辑</span>
            <span slot="delNode">删除</span>

    </catemenu>

  </div>
</template>
<script>
function SlyarErrors() { 
return true; 
} 
window.onerror = SlyarErrors;
export default {
  name: 'catemenu',
  inject: ['root'],
  props:{
      node:Object,
      depthLev:{
        type:Number,
        default:0,

      },
      indentRatio:{
        type:Number,
        default:40,
      },
      id:null,
      pid:null,
  },
  data () {
    return {
    show:false,
    name:'NewNode',
    showTool:false,
    children:[],
    childrenFlag:false,
    oldName:null,
    } 
  },
  computed:{
    hasChildren(){
      if(this.childrenFlag){
        return true;
      }else{        
      return this.node.children;
      }
    }
  },
  watch:{

  },
  methods:{
    dragIselection:function(ele){
      var sele
      if(ele.tagName=="DIV"){
        sele=ele.firstChild;
        // console.log('selected===>DIV')
      }
      if(ele.className=='cursorpointer'){
        sele = ele.parentNode.parentNode.parentNode;
      }

      if(ele.tagName=="SPAN"){
        sele=ele.parentNode;
        // console.log('selected===>node')
      }else{
        sele=ele;
      }
      return sele;
    },
    cursoron: function(item) {
      // console.log('this.overcolor');
      // console.log(this.$el);
      // console.log(this.$el.getAttribute('overbg'));
      //鼠标经过背景色设置
      this.showTool=true;
      this.$el.firstChild.style.background="#ace";
       },
    cursoroff: function(item) {
      //鼠标经过背景色设置为空
      this.showTool=false;
      this.$el.firstChild.style.background="";
       },
    toggleNode: function(item) {
      //折叠指示符控制
      // this.show=!this.show;

      this.node.isShow=!this.node.isShow;
       },
    showinfo:function(event){
      // console.log(event.target)
      var el = event.currentTarget;
      console.log(el.pid)
      // console.log(this.id+'--PID='+this.pid)

    },
    monitorInput:function(e){
      // 聚焦输入框时给oldName设置值
      this.oldName = e.target.value;

    },
    blurInput:function(e){
      // unfocus输入框时给oldName设置为空
      this.oldName = null;
    },
    checkName:function(obj,name){  
      // console.log(JSON.stringify(obj));
      if(!obj.children){
        console.log('没有子项！')
        return true;
      }
      var checkarr = obj.children;
      var flag=true;
      for(var n=0;n<checkarr.length;n++){
        console.log(checkarr[n].name);
        if(name == checkarr[n].name){
          flag = false;
        }
      }
      return flag;      
    },
    updateName:function(){
      console.log("updateName**************")
      // console.log(this.$el);
      // console.log(this.$el.parentNode.innerHTML);//获得附节点中的html
      // console.log(this.$parent.node.id);//获得父节点的ID
      // console.log(this.node.name)//当前节点名称
      var newName = window.prompt("修改名称",this.node.name);
      if(newName==null) return;    
      console.log(this.node.name+'*****Old Name')//当前节点名称
      console.log(newName+'+++++New Name')//修改目标名称
      //检查当前目录下是否有同名项目
      if(!newName){return}


      //如果新名称与现有名称不同则说明修改
      if(newName!=this.node.name){
        //检查当前修改项目的兄弟项目是否有同名项
        var checkObj=this.$parent.node;
        if(!this.checkName(checkObj,newName)){
                alert('修改失败：当前项目下已存在同名项目!');
                return;
              }  

        if(!window.confirm("确定修改名称为"+newName+'吗？')) return;//如果没点确认则返回
        this.node.name=newName;//修改名称
        console.log('..........完成执行修改')

      }
   



      // if(this.oldName){
      // var newName = window.prompt("确认修改名称为",this.node.name)       
      //   if(!newName){
      //     // 如果提示框点击取消改回原来的名字
      //     this.node.name=this.oldName;
      //   }
      // }else{
      //   if(newName){
      //       this.node.name=newName;
      //       alert()
      //       }
      // }
      // console.log(this.node.name+'====NodeName')
    },
    addNewNode: function(item) {
        // console.log('添加子节点..')
        // console.log(this.node.id+'当前ID')//获取当前节点的id
                     
        // console.log(arrtest.constructor);//function Array()
        // console.log(this.root.constructor);//function Object()
        // console.log(Object.keys(this.root));//Array(4) [ "id", "isShow", "name", "children" ]

        // function searchObjById(object, val) {
        //   // @在树节点中搜索指定id的对象并返回对象的name
        //   // @object 树对象this.root
        //   // @val 查找对象的id
        //   if(object.id==val){
        //     // console.log('in root obj........')
        //     // console.log(object.name+'<<>>')
        //     return object.name;
        //   }else if(object.children){
        //     object.children.forEach(v=>{  
        //     // console.log('in children obj........')
        //     searchObjById(v,val)
        //     });
        //   }
        // }
        // // searchObjById(this.root,'2')//测试在树节点中搜索指定id的对象

        //**设置提示框输入
        var newName = window.prompt("给当前项目："+this.node.name+' 添加子项目,请输入子项目名称：');


        var checkObj = this.node; 
        if(!newName){return}
        if(!this.checkName(checkObj,newName)){
          alert('创建项目失败：当前项目下已存在同名项目!');
          return;
        }

        var arrtemp=[];//声明数组用于存放所有树节点的ID
        // 递归把所有树节点的id先放入数组中
        function collectIdToArr(object){
          arrtemp.push(object.id);
          if(object.children){          
              object.children.forEach(v=>{ 
              collectIdToArr(v,)
              });
            }
            return arrtemp;           
        }  
        console.log(collectIdToArr(this.root)) //所有id的数组
        var idArr = collectIdToArr(this.root);
        var maxId = Math.max.apply(Math,idArr)//查找树节点中最大的id
        var availableArr = [];//声明空数组用于存放被删除的ID以备回收使用于后面创建节点
        for(let m=0;m<maxId;m++){
          console.log(m+'*****'+idArr[m])
          console.log(idArr.indexOf(m))
          if(idArr.indexOf(m)==-1){
            availableArr.push(m);
          }
        }
        // console.log(availableArr)//被删除的id数组
        console.log(availableArr[0]+'====')//被删除的id数组的第一个元素
        if(availableArr[0]){
            var latestId = availableArr[0];
            console.log('有可用ID')
          }else{
            var latestId = parseInt(maxId+1);
            console.log('连续ID无空隙')
          }
        //设置新添加节点对象
        var newNodeObj={
          "id": latestId,
          "isShow": true,
          "name": newName,
          "pid": this.node.id,
        }
        if(!this.node.children){
          // 如果当前节点无children数组则创建空数组
          this.node['children']=[];
        }
        this.node.isShow=true;//打开当前节点的折叠显示
        this.childrenFlag=true;//重新触发computed中hasChildren的计算，添加children后更新显示实心三角符
        this.node.children.push(newNodeObj); //把新节点对象添加到树对象中 

        // ******查找设置新添加节点的样式,需要用$nextTick方法

        this.$nextTick(() => {

            // console.log(latestId+'............');
            // var newNodeToBeMarked = document.getElementById(latestId);//找不到最新的节点ID
            // console.log(newNodeToBeMarked)
            // newNodeToBeMarked.style.background='red';
              function blink(latestId,c1,c2){
                var params = [latestId,c1,c2];
                // console.log(params);
                var colorflag=0;
                var test=setInterval(function(){
                  // console.log('...xxx...'+latestId)
                  var id = params[0];
                  var c1 = params[1];
                  var c2 = params[2];
                  var latestNode = document.getElementById(latestId);//找不到最新的节点ID
                  // console.log(latestNode);
                  // var color=window.getComputedStyle(latestNode)['background-color']; 
                  // console.log(color);//获取计算后的背景颜色
                  if(colorflag){
                  latestNode.style.background=c1;
                  colorflag=!colorflag;
                  }else{
                  latestNode.style.background=c2;
                  colorflag=!colorflag;
                  }
                 },
                 500,
                 params
                 );
               setTimeout(function(){
                clearInterval(test);
               },10000)
              }
              blink(latestId,'#acd','#fcd');
        });
        console.log(JSON.stringify(this.root)); 
      },

      delNode: function() {
                console.log(JSON.stringify(this.root)); 
                // console.log(JSON.stringify(this.node)); 
                // console.log(this.node.pid);
                var currentId=this.node.id; 
                var parentId=this.node.pid; 
                // console.log('currentId='+currentId);
                // console.log('parentId='+parentId);
                // console.log(this.node);
                if(this.node.children){
                  var conf=confirm('删除节点 '+this.node.name+' 将删除其所有子节点！确认要删除吗?');

                }else{
                  var conf=confirm('确认要删除节点 '+this.node.name+'？');
                }
                if(!conf){
                  return;
                }




            function DelById(object, val) {
              // @在树节点中搜索指定id的对象并返回对象的name
              // @object 树对象this.root
              // @val 查找对象的id
                // console.log('in root obj........')
                // console.log(object.children);
                // console.log(object.children.length+'***');
                var num = object.children.length;  
                for (var i = 0;i < num; i++){
                     if (object.children[i].id==val){
                         object.children.splice(i,1);
                         return object;
                     }else if(object.children[i].children){
                         return DelById(object.children[i],val)
                         }
                  }
                  //操作删除DOM
                  var currentDOM = document.getElementById(val);
                  // console.log(currentDOM);
                  currentDOM.parentNode.parentNode.removeChild(currentDOM.parentNode);
                }
              
            
            if(currentId == 0){
              console.log('当前为根节点不能删除！');
              return;
            }
            var newRoot = DelById(this.root,currentId)//测试在树节点中搜索指定id的对象
            // console.log(JSON.stringify(newRoot));
            // console.log('**************>>>>');
            // console.log(JSON.stringify(this.root));

            

        },
        // ***********拖动拖拽

          handleDragStart(e,item){
            this.dragging = item;

          },
          handleDragEnd(e,item){
            this.dragging = null
          },
          //首先把div变成可以放置的元素，即重写dragenter/dragover
          handleDragOver(e) {
            e.preventDefault()
            var overitem;
            overitem=this.dragIselection(e.target);
            overitem.style.background="pink"
          },
          handleDragLeave(e) {
            e.preventDefault()
            e.dataTransfer.dropEffect = 'move'// e.dataTransfer.dropEffect="move";//在dragenter中针对放置目标来设置!
            var overitem;
            overitem=this.dragIselection(e.target);
            overitem.style.background=""
          },
          handleDragEnter(e,item){
            e.dataTransfer.effectAllowed = "move"//为需要移动的元素设置dragstart事件
            if(item === this.dragging){
              return
            }
            const newItems = [...this.items];//扩展运算符拷贝数组和对象使用示例
            console.log(newItems)
            const src = newItems.indexOf(this.dragging)
            const dst = newItems.indexOf(item)

            newItems.splice(dst, 0, ...newItems.splice(src, 1))

            this.items = newItems
          },
  },

}
</script>
<style scoped="scoped">
  .cursorpointer{
    cursor: pointer;

  }
  .node{
    border-top: dashed 1px red;
  }
  .dragmargin{
    width:100%;
    height: 5px;
    background-color: lightgreen;
  }
</style>
