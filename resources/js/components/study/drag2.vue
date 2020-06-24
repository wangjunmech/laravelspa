<template>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h3>左右拖动轮换位置</h3>基础</div>
        <div class="card-body">
          <transition-group tag="div" class="container">
            <div class="item" v-for="(item,index) in items" :key="item.id" :style="{background:item.color,width:'80px',height:'80px'}"
              draggable="true"
              @dragstart="handleDragStart($event, item)"
              @dragover.prevent="handleDragOver($event, item)"
              @dragenter="handleDragEnter($event, item)"
              @dragend="handleDragEnd($event, item)" >
              {{item.num}}
            </div>

          </transition-group>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
 name: 'drag2',
 data () {
  return {
   items: [
    { id: 1,num: 1, color: '#ffddff'},
    { id: 2,num: 2, color: '#ffaa66'},
    { id: 3,num: 3, color: '#ffbbdd'},
    { id: 4,num: 4, color: '#ccddee'},
    { id: 5,num: 5, color: '#aaaadd'}
   ],
    
    dragging: null
  }
 },
 methods:{
  handleDragStart(e,item){
    this.dragging = item;
  },
  handleDragEnd(e,item){
    this.dragging = null
    console.log(this.items)
  },
  //首先把div变成可以放置的元素，即重写dragenter/dragover
  handleDragOver(e) {
    e.dataTransfer.dropEffect = 'move'// e.dataTransfer.dropEffect="move";//在dragenter中针对放置目标来设置!
  },
  handleDragEnter(e,item){
    e.dataTransfer.effectAllowed = "move"//为需要移动的元素设置dragstart事件
    if(item === this.dragging){
      return
    }
    const newItems = [...this.items]
    console.log(newItems)
    const src = newItems.indexOf(this.dragging)
    const dst = newItems.indexOf(item)
 
    newItems.splice(dst, 0, ...newItems.splice(src, 1))
 
    this.items = newItems
  }
 }
}
</script>
 
<style scoped>
  .container{
    width: 800px;
    height: 300px;
    position: relative;
    left: 0;
    /*flex-direction: column;*/
    /*flex-direction:row;*/
    background-color: lightgreen;
    padding: 0;

  }
  .item {
   margin-top: 10px;
   transition: all linear .3s;
   display:inline-block;
   margin: 10px;
   border: 1px dashed blue;
  }

</style>