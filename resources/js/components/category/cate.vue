<template>
  <div id="app">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                  <h3>vue-treeselect is a multi-select component with nested options support for Vue.js.</h3>
                  <treeselect v-model="value" :multiple="true" :options="options" class="treeselect"/>
                  <button class="btn btn-primary" @click="showselected">alert result</button>
                  <hr>
                  <h3>example of tree</h3>
                  <div class="showtree">
                    <div v-for = "folder in folders">
                      <span @click="toggle(folder.name)" style="cursor:pointer;">
                        <span v-if="folder.pages">+</span>
                        <span v-else="f">*</span>
                        {{folder.name}}
                      </span>
                      <div v-show="false" :id="folder.name">
                        <div v-if="folder.pages">                
                        <div v-for = "page in folder.pages" style="margin-left: 20px;">
                          <span>-{{page.name}}</span>
                        </div>          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>      
    </div>
  </div>
</template>

<script>
  // import the component
  import Treeselect from '@riophae/vue-treeselect'
  // import the styles
  import '@riophae/vue-treeselect/dist/vue-treeselect.css'

  export default {
    // register the component
    components: { Treeselect },
    data() {
      return {
        // define the default value
        value: null,
        // define options
        options: [ {
          id: 'groups',
          label: 'groups',
            children: [ {
              id: 'team-i',
              label: 'Team I 👥',
              children: [ {
                id: 'person-a',
                label: 'Person A 👱',
              }, {
                id: 'person-b',
                label: 'Person B 🧔',
              } ],
            }, {
              id: 'team-ii',
              label: 'Team II 👥',
              children: [ {
                id: 'person-c',
                label: 'Person C 👳',
              }, {
                id: 'person-d',
                label: 'Person D 👧',
              } ],
            }, {
              id: 'person-e',
              label: 'Person E 👩',
            } ],
          // children: [ {
          //   id: 'aa',
          //   label: 'aa',
          // }, {
          //   id: 'ab',
          //   label: 'ab',
          // } ],
        }, {
          id: 'fruits',
          label: 'fruits',
          children: [ {
              id: 'apple',
              label: 'Apple 🍎',
              isNew: true,
            }, {
              id: 'grapes',
              label: 'Grapes 🍇',
            }, {
              id: 'pear',
              label: 'Pear 🍐',
            }, {
              id: 'strawberry',
              label: 'Strawberry 🍓',
            }, {
              id: 'watermelon',
              label: 'Watermelon 🍉',
            } ],
        }, {
          id: 'items',
          label: 'items',
          children: [ {
              id: 'team-i',
              label: 'team-i 👥',
              isNew: true,
            }, {
              id: 'person-a',
              label: 'person-a 👩',
            }, {
              id: 'person-b',
              label: 'person-b 👱',
            }, {
              id: 'company',
              label: 'company 🏢',
            }, 
            ],

        } ],
        folders:[
        {name:"Search Engine",pages:[{name:'Google'},{name:'Yahoo'},{name:'Ask'},]},
        {name:"SNS",pages:[{name:'Facebook'},{name:'Twitter'},{name:'Wechat'},]},
        {name:"Shopping",pages:[{name:'Amazon'},{name:'ebay'},{name:'Digital'},]},
        {name:"Other"},
        ],

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
    }
  }
</script>
<style scoped="scoped">
  .treeselect{
    border: 1px solid red;
  }
</style>