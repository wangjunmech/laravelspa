<template>
<div class="timeboard">
  <div class="outer">    
    <div class="left" ><button @click = "switchView($event)">年\月</button></div>
    <div class="right" ref="workbox"><div class="xdetail" v-for="kx in xArr()">{{kx}}</div></div>
  </div>
  <div class="ybox">    
    <div class="ybar" >
      <div class="ydetail" v-for="ky in yArr()" >{{ky}}</div>
    </div>
    <div class="work">
        <transition-group tag="div" class="box">
          <div class="item" v-for="(item,index) in items" :key="item.key" :style="{
          background:item.color,
          color:'blue',
        }"
            draggable="true"
            @dragstart="handleDragStart($event, item)"
            @dragover.prevent="handleDragOver($event, item)"
            @dragenter="handleDragEnter($event, item)" 
            @dragend="handleDragEnd($event, item)"
            :title="item.pnumber"
            @click="showWidth"
             >
            {{item.key}}
          </div>
        <!-- <div class="target"  @dragover='onDragover' @drop='onDrop'></div> -->
        </transition-group>
      
    </div>
  </div>
  <div class="footer" style="clear:both">{{xItem}}</div>

</div>
</template>
<script>
export default {
  name: 'timeboard',
  inject: ['items'],//父组件注入数据
  data () {
  return {
    items:this.items,
    dragging: null,
    sHeader:['年\\月','月\\日','周\\日','日\\时'],
    sYear:[2015,2016,2017,2018,2019],
    sMon:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    sW:['Mon','Tue','Wed','Thur','Fri','Sat','Sun'],
    sDay:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
    sHour:[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23],
    currentHeader:0,
    workAreaWidth:null,
    cellNum:12,
  }
  },
  computed:{
    xItem:function () {
      var xel=document.getElementsByClassName('right')[0];
      console.log(xel)
    },
    menuWidthUpdate:function () {  
    this.$nextTick(function (){    
      var w = (Math.round(this.$refs.workbox.clientWidth/cellNum))+'px';
      var cEl= document.getElementsByClassName('xdetail')
      console.log(cEl.length)
      for(let i=0;i<cEl.length;i++){
        cEl[i].style.width=w;
      };
      console.log(w);
      console.log('xxx')
      return w;
    })
    this.$nextTick(()=>{
      this.$forceUpdate()
    })
  },

  },
  watch:{
      workAreaWidth(val){
        this.workAreaWidth = val
      }
    },
  methods:{
    showWidth(){
      this.divResize();
        var res
        this.$nextTick(function () {
          res = this.$refs.workbox.clientWidth;
          // res = this.$refs.companyStyle.$el.clientWidth + 'px';
          // console.log(res)
          // console.log(this.workAreaWidth+'获取div宽度==========')        
        })
      },
    divResize(){
      var w = Math.round(this.$refs.workbox.clientWidth/this.cellNum);
      w=w-1;
      w=w+'px';
      this.workAreaWidth=w;

      var cEl= document.getElementsByClassName('xdetail')
      console.log(cEl.length)
      for(let i=0;i<cEl.length;i++){
        cEl[i].style.width=this.workAreaWidth;
        cEl[i].style.backgroundColor='blue';
      };
    },
    xArr(data=this.sMon) {
      if(this.currentHeader==1){
        this.cellNum=30;
        return this.sDay;
      }
      if(this.currentHeader==2){
        this.cellNum=30;
        return this.sDay;
      }
      if(this.currentHeader==3){
        this.cellNum=24;
        return this.sHour;
      }
      return data
    },
    yArr(data=this.sYear) {
      if(this.currentHeader==1){
        return this.sMon;
      }
      if(this.currentHeader==2){
        return this.sW;
      }
      if(this.currentHeader==3){
        return this.sDay;
      }
      return data
    },
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
      const newItems = [...this.items];//扩展运算符拷贝数组和对象使用示例
      console.log(newItems)
      const src = newItems.indexOf(this.dragging)
      const dst = newItems.indexOf(item)

      newItems.splice(dst, 0, ...newItems.splice(src, 1))

      this.items = newItems
    },
    switchView(e){
      console.log(e.target.innerText)
      var headerNum = this.sHeader.length;
      this.cellNum = headerNum;
      var k=this.currentHeader+1;
      if(k==headerNum){
        k=0;
        this.currentHeader=k
      }else{
        this.currentHeader=k
      }
      e.target.innerText=this.sHeader[k]

    }
  },
  mounted() {
    this.workAreaWidth = this.$refs.workbox.clientWidth
    let that = this
    this.divResize();      

    // window.onresize = () => {
    //   //监听浏览器窗口变化
    //   console.log("****浏览器窗口变化"+window.innerWidth)//窗口宽度
    //   console.log(that.$refs.workbox.clientWidth)//日程区div宽度

    //   return (() => {
    //     that.workAreaWidth = that.$refs.workbox.clientWidth
    //   })()
    //   this.divResize();      

    // this.$forceUpdate()
    // }

  },
  updated(){

  }

}
</script>
 
<style scoped>

  .timeboard{
    /*position: inherit;*/
    width: 100%;
/*    min-width:400px;
*/    /*max-width:500px;*/
    height: auto;
    position: relative;
    word-break:break-all;
    border:1px dashed green;
    overflow:hidden;
    background-color: #daf;
  }


  .xbar{
    position: inherit;
    float: right;
    background-color: pink;
    width: 100%;
    height: 20px;
  }
  .xdetail{
    position: relative;
    display: inline-block;
    border-left: .5px solid red;
  }
  .ybar{
    background-color: red;
    width: 60px;
    min-height: 20px;
    height: 100%;
    float: left;
  }
  .work{
    min-height: 20px;
    line-height: 20px;
    background-color: #cdc;

  }
  .item {
    margin-top: 10px;
    transition: all linear .3s;
    display: inline-block;
    float: left;
    width:auto;
    height:20;
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
  .outer{
        display: table;
        width: 100%;
    }
  .left,.right{
        display:table-cell;
        line-height: 20px;
    }
  .left{
        width:60px;
        height: 20px;
        background-color: deepskyblue;
    }
  .right{
        background-color: darkorchid;
    }



</style>