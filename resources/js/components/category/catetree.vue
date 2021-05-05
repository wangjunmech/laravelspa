<template>
  <div id="app">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h3>自定义无限级分类</h3>
                      <p>待改进:1.同级目录下的名称不能相同，所有级别目录下的名称不能相同可选，自定义背景颜色，拖拽。
                    </p>
                    </div> 
                    <div class="card-body">
                      <catemenu :node="root" :indentRatio="indentRatio" :overbg="overbg">

                      </catemenu>
                  
                    </div>                   
                </div> 
            </div>
        </div>      
    </div>
  </div>
</template>

<script>

  // import the component
  import catemenu from './catemenu'
  export default {
    // register the component
    components: { catemenu },
    provide(){
      return {
        root:this.root
      }
    },

    data() {
      return {
        root:{
          "id": 0,
          "isShow": false,
          "name": "root",
          "children": [
            {
              "id": 1,
              "isShow": false,
              "name": "Node 1",
              "pid": 0,
              "children": [
                {
                  "id": 2,
                  "isShow": false,
                  "name": "Node 1-2",
                  "pid": 1
                },
                {
                  "id": 3,
                  "isShow": false,
                  "name": "a2",
                  "pid": 1,
                  "children": [
                    {
                      "id": 4,
                      "isShow": false,
                      "name": "a3",
                      "pid": 3,
                      "children": [
                        {
                          "id": 5,
                          "isShow": false,
                          "name": "a4",
                          "pid": 4
                        }
                      ]
                    },
                    {
                      "id": 6,
                      "isShow": false,
                      "name": "a31",
                      "pid": 3,
                      "children": [
                        {
                          "id": 7,
                          "isShow": false,
                          "name": "new leaf",
                          "pid": 6
                        }
                      ]
                    }
                  ]
                }
              ]
            },
            {
              "id": 8,
              "isShow": false,
              "name": "Node 2",
              "pid": 0,
            },
            {
              "id": 9,
              "isShow": false,
              "name": "Node 3",
              "pid": 0
            }
          ]
        },
        indentRatio:40,//缩进宽度
        overbg:"#acf",//鼠标经过背景颜色
          
      }
    },
    methods:{
      toggle:function(idname){
        if(document.getElementById(idname).style.display=="none"){
            document.getElementById(idname).style.display="inline";
        }else{
          document.getElementById(idname).style.display="none"
        }
      },
      showselected:function(){
        alert(this.value);
      },
      addNodeAction:function(){
        console.log('***********')

      }
    }
  }
</script>
<style scoped="scoped">
  .treeselect{
    border: 1px solid red;
  }
</style>