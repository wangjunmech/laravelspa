<template>
  <div id="app">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h3>Drag使用</h3>
                    </div> 
                    <div class="card-body">
                      <treebrowser :node="root" :indentRatio="indentRatio" />

                  
                    </div>                   
                </div> 

            </div>
        </div>      
    </div>
  </div>
</template>

<script>

  // import the component
  import treebrowser from './treebrowser'
  export default {
    // register the component
    components: { treebrowser },
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
        indentRatio:20
          
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