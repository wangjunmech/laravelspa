<template>
  <div id="app">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h3>Order Items 排序示例与乱序</h3>

                    </div> 
                    <div class="card-body">
                      <div>
                        <button class="btn btn-warning" @click="descItems()">                          
                        <span><i class="fa fa-arrow-circle-down"></i></span>
                        </button>

                        <button class="btn btn-warning" @click="ascItems()">                     
                        <span><i class="fa fa-arrow-circle-up"></i></span>
                        </button>
                        <button class="btn btn-danger" @click="shuffleItems()">                          
                        <span>乱序</span>
                        </button>

                      </div>
                      <!-- ****单层div用js设置透明度时div中的内容也会跟着变化。 解决方案如下-->
                      <!-- <div class="setbg" v-for="(item,index) in items" :key="index" :ccode="item.color" style="color:black;background-color: green">{{item.lowername}}{{item.color}}</div> -->
                      <!-- **** 用一个外层div套两个重叠的DIV，第一个DIV中的内容透明度会变化，放到底层，不想变透明度的文本放在顶层并把透明度设为全透明，第二个DIV中的Z-index要比第一个的大-->
                      <div v-for="(item,index) in items" style="">
                        <div class="setbg" :key="index" :ccode="item.color" style="position:absolute;background:green;z-index: 1;width: 100%;">👪</div>
                        <div class="setbg" style="opacity: 1;z-index: 2;position:relative;text-indent: 30px">{{item.lowername}}{{item.color}}</div>
                      </div>


                    <div>
                      <div>
                        <hr>
                        <h2>DIV重叠</h2>
                          <div >
                            <div style="position:absolute;font-size:120px;background:green;z-index: 1;width: 100%;">A</div>
                            <div style="position:relative;font-size:120px;opacity: 1;z-index: 2;">B</div>
                          </div> 

                          <div style="position:relative">
                             <div style="position:absolute;left:0;top:0;font-size: 120px">1</div>
                             <div style="position:absolute;left:0;top:0;font-size: 120px">0</div>
                          </div>  
                          <h2>22</h2>                        
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

  export default {
    data(){
    return{
        items:[
            {no: 0, lowername: "零", uppername: "零",color: 0.3},
            {no: 1, lowername: "一", uppername: "壹",color: 0.35},
            {no: 2, lowername: "二", uppername: "贰",color: 0.4},
            {no: 3, lowername: "三", uppername: "叁",color: 0.45},
            {no: 4, lowername: "四", uppername: "肆",color: 0.5},
            {no: 5, lowername: "五", uppername: "伍",color: 0.55},
            {no: 6, lowername: "六", uppername: "陆",color: 0.6},
            {no: 7, lowername: "七", uppername: "柒",color: 0.65},
            {no: 8, lowername: "八", uppername: "捌",color: 0.7},
            {no: 9, lowername: "九", uppername: "玖",color: 0.75},
            {no: 10, lowername: "十", uppername: "拾",color: 0.8},
            {no: 11, lowername: "十一", uppername: "拾壹",color: 0.85},
            {no: 12, lowername: "十二", uppername: "拾贰",color: 0.9},
            {no: 13, lowername: "十三", uppername: "拾叁",color: 0.95},
        ],
        testarr:[1,2,3,4,5,6,7,8]
        }
    },
    computed:{


    },
    methods:{
      //设置背景
        setbg(){
          var doms = document.getElementsByClassName('setbg');
          // console.log(doms[0].getAttribute('ccode'));

          for(var i=0;i<doms.length;i++){ 
            var num = doms[i].getAttribute('ccode');//获取自定义透明度值
            // doms[i].style.opacity=0.5;//设置有效
            doms[i].style.opacity=num;  //设置透明度                   
            // doms[i].style.backgroundColor=rgba(0, 255, 0, num);  //设置透明度      
            // var c= rgba(0, 255, 0, num);          
            // doms[i].style.background=c;  //设置透明度                   
          }


        },
        //打乱顺序
        shuffleItems(){
          var oarr=this.items;
          var testedarr;
          testedarr = this.shuffle2(oarr);
          this.items=testedarr; 
          this.$nextTick(() => {
              this.setbg();
          });

        },
        //打乱数组函数
        shuffle(arr) {
          console.log('shuffle================')
            for (let i=arr.length-1; i>=0; i--) {
                let rIndex = Math.floor(Math.random()*(i+1));
                // 打印交换值
                let temp = arr[rIndex];
                arr[rIndex] = arr[i];
                arr[i] = temp;
            }
            return arr;
        },
        // 打乱数组函数
        shuffle2(arr) {
          function getRandomInt(min, max) { 
            return Math.floor(Math.random() * (max - min + 1) + min) // +1是保证可以取到上限值
          }
          console.log('shuffle2================')
            let _arr = arr.slice()   // 下面会讲到slice的特别之处
            for (let i = 0; i < _arr.length; i++) {
              let j = getRandomInt(0, i)
              let t = _arr[i]
              _arr[i] = _arr[j]
              _arr[j] = t
            }
            return _arr
        },
        // 打乱数组函数
        shuffle3(arr) {
          console.log('shuffle3================')
          var temparr = arr.slice();
          temparr = arr.sort(function(){ 
            // console.log(Math.random() - 0.8);
            return Math.random() - 0.8
          });
          return temparr;
        },
        //降序排列
        descItems(){
          //使用sort方法排序
           this.items=this.items.sort((a,b)=>{
                return b.no - a.no
            })
                     this.$nextTick(() => {
              this.setbg();
          });
        },
        //升序排列
        ascItems(){


          //使用sort方法排序
           this.items=this.items.sort((a,b)=>{
                return a.no - b.no
            })
                     this.$nextTick(() => {
              this.setbg();
          });
        },

    }
  }
</script>
<style scoped="scoped">
  .treeselect{
    border: 1px solid red;
  }
</style>