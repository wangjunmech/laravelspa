<template>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h3>模拟手机图标布局，拖拽交换位置</h3></div>
        <div class="card-body">
          <div class="box">

              <div class="item" 
              v-for="(item,$index) in items" 
                @dragstart="dragstart($index,$event)"
                @dragenter="dragenter($event)"
                @dragleave="dragleave($event)"
                @dragend="dragend($event)" 
                @drop="drop($index,$event)" 
                @dragover="dragover($event)" 
                draggable="true"
                :style="{background:item.color}"
                :id="item.key"
                >
                {{item.key}}
              </div>
              <div class="big_box" @drop="drop($event)" @dragover="allowDrop($event)"></div>
          </div>　
        </div>
      </div>
    </div>
  </div>
</div>
</template>
<script>
export default {
 name: 'drag5',
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
    newList:[],
    draggingIndex:null,
    targetIndex:null, 
    dragOverItem:null,   
    tempColor:null,   
    tempBorder:null, 
    tColor:null,   
    tBorder:null,   
  }
 },
watch:{
   // 评论提到的首次加载  数组触发
   'items':{
        immediate: true, // immediate选项可以开启首次赋值监听
        handler(newVal, oldVal) {
            console.log(newVal, oldVal)
            console.log("触发数组更改")
        }
    },
},
methods:{
      dragstart:function(index,e){
        var that = this;
        console.log("开始拖拽",index);
        console.log(e)
        that.draggingIndex = index;
        this.tColor=e.target.style.backgroundColor;  
        this.tBorder=e.target.style.border;  
        e.target.style.backgroundColor = 'lightgreen';
        e.target.style.border = '3px dashed blue';       
      },
      dragenter:function(e){
        this.dragOverItem=e.target; 
        console.log(this.dragOverItem.id+'==========')
        // console.log('this.dragOverItem.style.backgroundColor:')
        // console.log(this.dragOverItem.style.backgroundColor)
        if(this.dragOverItem.style.backgroundColor!== undefined){
          this.tempColor=this.dragOverItem.style.backgroundColor;  
          this.dragOverItem.style.backgroundColor = 'yellow';
          this.tempBorder=this.dragOverItem.style.border;  
          this.dragOverItem.style.border = '3px dashed red';
        }
      },
      dragleave:function(e){
        e.target.style.backgroundColor=this.tempColor;  
        e.target.style.border=this.tempBorder;  
      },
      dragover:function(e){  //必须添加dragover事件，不然drop事件也无效
        e.preventDefault(); 
        // console.log(e.target)
  

      },
      dragend:function(e){
        console.log("结束拖拽",e.currentTarget);
        setTimeout(()=>{
          e.target.style.backgroundColor=this.tColor;
          e.target.style.border=this.tBorder;
          this.$forceUpdate();
        },1000 ); 


      },
      drop:function(index,e){
        var that = this;
        //阻止默认行为
        e.preventDefault();
        //阻止默认行为
        e.stopPropagation();
        console.log("拖放到目标",index);
        that.targetIndex = index;
        var mindex=this.draggingIndex;//被拖拽的元素
        let newArr=[]
        // setTimeout("changeBgBack()",3000 );  
        //   function changeBgBack(){  
        //     e.target.style.backgroundColor=this.tempColor;  
        //     e.target.style.border=this.tempBorder;
        //     this.$forceUpdate();//强制更新DOM渲染   
        //   }         
        setTimeout(()=>{
            e.target.style.backgroundColor=this.tempColor;  
            e.target.style.border=this.tempBorder;
            this.$forceUpdate();
        },1000 );  
        // console.log(this.draggingIndex+'<<>>'+index)
// //使用$set只能第一次拖拽交换位置时更新DOM,第二次不能更新DOM
//           this.$set( this.items , this.items[index] , this.items[mindex])
//           this.$set( this.items , this.items[mindex] , temp)

          var temp=this.items[index];
          this.items[index]=this.items[mindex]
          this.items[mindex]=temp;
          newArr = this.items;
          this.$forceUpdate();//强制更新DOM渲染  
        // console.log(JSON.stringify(this.items));
      },
      allowDrop:function(e){
        e.preventDefault();  
      },
      getSquareList:function(){
        var that = this;
        for(var i=0;i<4;i++){
          (function(i){
            var obj = {
              index:i,              
            }
            that.items.push(obj);
          }(i))
        }
      }
      
    },
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
    width:60px;
    height:60px;
    border:1px solid red;
    margin: 2px;
    border-radius: 15px;
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