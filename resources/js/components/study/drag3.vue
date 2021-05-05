<template>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h3>上下拖拽轮换位置</h3></div>
        <div class="card-body">
            <div class="dgframe">              
              <!-- <div class="dgitem" style="" v-drag="{set:set}"></div> -->
              <!-- <div class="dgitem" style="" v-drag="{set:set}"></div> -->
              <dragcard></dragcard>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import dragcard from "./dragcard.vue"
export default {
  components:{
    dragcard,
  },
  name: "drag3",
  provide(){
    return {
    items: this.items,
    }
  },
  data() {
      return {
        items: [
          { id: 1,num: 11, color: '#ffddff'},
          { id: 2,num: 22, color: '#ffaa66'},
          { id: 3,num: 33, color: '#ffbbdd'},
          { id: 4,num: 44, color: '#ccddee'},
          { id: 5,num: 55, color: '#aaaadd'}
        ],
    
      };
  },
  methods:{
    set(x,y){
      this.data.x=x;
      this.data.y=y;
      
      }
  },
  
  }
</script>
<style scoped="scoped">
  .dgitem{
    background-color: lightblue;
    position:absolute;
    width:100px;
    height:100px;
    border:1px solid red;
  }
  .dgframe{
    width: 800px;
    height: 500px;
    background-color: green;
  }
</style>