<template>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h3>模拟手机图标布局，拖拽换轮换位置</h3></div>
        <div class="card-body">
          <transition-group tag="div" class="box">
            <div class="item" v-for="(item,index) in items" :key="item.key" :style="{background:item.color}"
              draggable="true"
              @dragstart="handleDragStart($event, item)"
              @dragover.prevent="handleDragOver($event, item)"
              @dragenter="handleDragEnter($event, item)" 
              @dragend="handleDragEnd($event, item)" >
              {{item.key}}
            </div>
          <!-- <div class="target"  @dragover='onDragover' @drop='onDrop'></div> -->
          </transition-group>
        </div>
      </div>
    </div>
  </div>
</div>
</template>
<script>
export default {
 name: 'drag4',
 data () {
  return {
   items: [
    { key: 1, color: '#fdf'},
    { key: 2, color: '#ada'},
    { key: 3, color: '#cdc'},
    { key: 4, color: '#afc'},
    { key: 5, color: '#bdb'},
    { key: 6, color: '#ddf'},
    { key: 7, color: '#cda'},
    { key: 8, color: '#adc'},
    { key: 9, color: '#bfc'},
    { key: 10, color: '#fdb'},
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
  },
  //首先把div变成可以放置的元素，即重写dragenter/dragover
  handleDragOver(e) {
    e.preventDefault()
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

  .box{
    /*position: inherit;*/
    width: 360px;
/*    min-width:400px;
*/    /*max-width:500px;*/
    height: auto;
    position: relative;
    word-break:break-all;
    border:1px dashed green;
    padding: 20px;
    overflow:hidden;/*当子元素有浮动时，父元素高度自适应需要添加此属性*/
/*当子元素设置浮动后，父元素的高度就不会自动适应浮动的子元素了，为了让父元素的高度能自动适应浮动的子元素，方法有很多，我常用以下3种：
1.给父元素设置overflow:hidden，同时height不设置或者100%或者auto;
2、父级元素内中的最下面新增一个标签，设置clear:both；
3：用伪类:after（这和第二条很类似，但是我觉得比第二条好，因为伪类只产生了CSS样式，并不会影响DOM结构,其实我个人，比较推荐这种写法）
  ul:after{
    content:"";
    display: block;
    clear:both;
  }
  li{
  　　float:left;
  }
*/
  }
  .item {
    margin-top: 10px;
    transition: all linear .3s;
    display: inline-block;
    float: left;
    width:100px;
    height:100px;
    border:1px solid red;
    margin: 2px;
    border-radius: 5px;
    display:flex;
    justify-content:center;
    align-items:center;
  }
  .target{
    width: auto;
    height: 50px; 
    background-color: red;
    position: inherit;

  }

</style>