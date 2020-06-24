<template>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h3>上下随意位置</h3>第二次拖动元素时元素位置跳回原来的上下位置需要改进</div>
        <div class="card-body">
            <div class="dragArea">
            <div class="line" v-dragable id='1'>dragBox<span v-textRed>1</span></div>
            <div class="line" v-dragable id='2'>dragBox 2</div>
            <div class="line" v-dragable id='3'>dragBox 3</div>
            <div class="line" v-dragable id='4'>dragBox 4</div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
// clientY 指的是距离可视页面左上角的距离
// pageY   指的是距离可视页面左上角的距离(不受页面滚动影响)
// screenY 指的是距离屏幕左上角的距离
// layerY  指的是找到它或它父级元素中最近具有定位的左上角距离
// offsetY 指的是距离它自己左上角的距离

    export default {
        name: "dragable",
        data(){
            return {
              position:999,
              xxx:0,
              yyy:0,
            };
        },
        set(x,y){
            this.data.xxx=x;
            this.data.yyy=y;
            },
        changeBg(){
            console.log(this.x+this.y+']]]]]]]')
        },
        //注册局部组件指令
        directives: {
            dragable: function(dragBox,bindings,vnode) { 
                dragBox.onmousedown = e => {
                    console.log(dragBox)
                    // console.log(bindings)
                    // console.log('id===='+dragBox.id)
                    e.cancelBubble=true;
                    e.stopPropagation=true;
                    var dragArea = document.getElementsByClassName('dragArea')[0];//可拖动范围的元素
                    // console.log(dragArea.offsetLeft);
                    //算出鼠标相对元素的位置
                    let disX = e.clientX-dragBox.offsetLeft+dragArea.offsetLeft;
                    // *****************************//
                    let elToArea = dragBox.offsetTop-dragArea.offsetTop;
                    let disY = e.clientY-dragBox.offsetTop+dragArea.offsetTop+elToArea;
                    //解决第二次拖拽移动时元素跳回原位置开始的问题
                    if(dragBox.style.top){
                        console.log(dragBox.style.top+'++++++++++')
                        disY = disY-(parseInt(dragBox.style.top.split('px')[0]))
                    }
                    document.onmousemove = e => {
                        //避免拖拽时文本被选中              
                        window.getSelection? window.getSelection().removeAllRanges():document.selection.empty();
                        // console.log('zIndex'+dragBox.style.zIndex);
                        // 拖拽时元素显示在最前面
                        dragBox.style.zIndex=1;

                      e.cancelBubble=true;
                      e.stopPropagation=true;

                        //用鼠标的位置减去鼠标相对元素的位置，得到元素的位置
                        let left = e.clientX - disX;
                        let top = e.clientY - disY;
                        //左右移动当前元素
                        // dragBox.style.left = left + "px";
                        // console.log(top+'***************')
                        //上下移动当前元素
                        // console.log(dragBox.getComputedStyle('height'));
                        console.log(vnode);

                        top=Math.ceil(top/20)*20;//按行高度拖拽
                        dragBox.style.top = top + "px";
                        // console.log(dragBox)
                        // console.log("=============")
                        console.log(bindings.def)
                        console.log(dragBox.position)
                        // bindings.value.set(left,top)
                        // bindings.value.changeBg();
                    };
                    document.onmouseup = e => {
                        //拖拽完元素显示归位
                        dragBox.style.zIndex=0;                
                        document.onmousemove = null;
                        document.onmouseup = null;
                    };
                };
                dragBox.onmouseover = e => {
                    //鼠标经过样式
                    dragBox.style.backgroundColor="lightgreen"
                }
                dragBox.onmouseout = e => {
                    //鼠标移出取消元素样式
                    dragBox.style.backgroundColor=""
                }
            }
        }
    };
    </script>
    <style scoped>
    .dragArea {
        width: 100%;
        height: 500px;
        background-color: CadetBlue;
        padding: 0px;
    }
    .drag_box {
        width: 150px;
        height: 90px;
        border: 1px solid #666;
        background-color: #ccc;
        /* 使用定位，脱离文档流 */
        /*position: absolute;*/
        position: relative;
        top: 100px;
        left: 100px;
        /* 鼠标移入变成拖拽手势 */
        cursor: move;
        z-index: 3000;
    }
    .line{
        position: relative;
        width: 100%;
        height: 20px;
        background-color: pink;
        border-top:1px dashed red;
    }


    </style>
