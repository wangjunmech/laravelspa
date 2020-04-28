
<template>
  <!-- 参考： https://www.cnblogs.com/lljun/p/11535807.html 
  安装：npm i js-audio-recorder
-->
  <div class="form-control">
    <h1 @click="startRec" class="btn btn-success" >开始录音</h1>
    <h1 @click="pauseRec" class="btn btn-warning">暂停录音</h1>
    <h1 @click="resume" class="btn btn-success">继续录音</h1>
    <h1 @click="endRec" class="btn btn-danger">结束录音</h1>
    <h1 @click="playRec" class="btn btn-success">录音播放</h1>
    <h1 @click="downRec" class="btn btn-success">录音下载</h1>
    <div id='indicator'>
          <div>duration: <span id='duration' v-text="duration"></span></div>
          <div>fileSize: <span id='fileSize' v-text="fileSize"></span></div>
          <div>vol: <span id='vol' v-text="vol"></span></div>  
    </div>
    <div id='Vindicator'>
      <div v-for="count in indicatorNum" :id="count" class="vb"></div>
    </div>

    <hr>

    <button type="button" class="btn" @mousedown.prevent="mouseStart" @mouseup.prevent="mouseEnd" v-model='btntext' v-text="btntext" :class="{'btn-danger':!isActive,'btn-primary':isActive,}"></button>
  </div>

</template>

<script>
import Recorder from 'js-audio-recorder'
let recorder = new Recorder({
      sampleBits: 16,         // 采样位数，支持 8 或 16，默认是16
      sampleRate: 8000,      // 采样率，支持 11025、16000、22050、24000、44100、48000，根据浏览器默认值，我的chrome是48000
      numChannels: 1,         // 声道，支持 1 或 2， 默认是1
      compiling: false,       // 是否边录边转换，默认是false
})
export default {
  data(){
        return{
          btntext:'按下录音样式测试',
          isActive:false,
          duration:'xxx',
          fileSize:'',
          vol:'',
          info:"test info",
          indicatorNum:100,
        }
   },

  methods: {
     mouseStart (e) {
      this.testCustFun('按住说话');//测试自定义函数
      console.log('按住说话')
      this.btntext='录音中'
      this.isActive=true;//绑定样式
      e.target.style.cursor='wait';//修改光标样式

    },
    mouseEnd (e) {
      e.target.style.cursor='pointer';//修改光标样式

      console.log('释放停止...........')
      this.isActive=false;//绑定样式
      this.btntext='开始录音'

    },
    startRec () {
      console.log('开始录音')

      console.log(this.info)
      recorder.start()// 开始录音
      var _duration=this.duration;
      var _fileSize=this.fileSize;
      var _vol=this.vol;
      recorder.onprogress = function(params) {
          // _duration= params.duration;
          // _fileSize= params.fileSize;
          // _vol= params.vol;
      // console.log('********************')  
      var d=document.getElementById('duration'); 
      d.textContent=params.duration;
      var f=document.getElementById('fileSize'); 
      f.textContent=params.fileSize;
      var v=document.getElementById('vol'); 
      var vnum=parseInt(params.vol);
      if(vnum>100){vnum=100}
      v.textContent=parseInt(params.vol);
            for(var i=1;i<=vnum;i++){
                setStyle(i);    
            } 
            setTimeout(function(){ 
              for(var j=100;j>vnum;j--)
              document.getElementById(j).style.backgroundColor = null;               
               }, 10);
          // // console.log('录音时长(秒)', params.duration);
          // console.log('录音大小(字节)', params.fileSize);
          // console.log('录音音量百分比(%)', params.vol);
          // console.log('当前录音的总数据([DataView, DataView...])', params.data);

            function greenToRed(num){
            //var 百分之一 = (单色值范围) / 50;  单颜色的变化范围只在50%之内
            var one = (255+255) / 100;  
            var r=0;
            var g=0;
            var b=0;
         
            if ( num < 50 ) { 
                // 比例小于50的时候红色是越来越多的,直到红色为255时(红+绿)变为黄色.
                r = one * num;
                g=255;
            }
            if ( num >= 50 ) {
                // 比例大于50的时候绿色是越来越少的,直到0 变为纯红
                g =  255 - ( (num - 50 ) * one) ;
                r = 255;
            }
            r = parseInt(r);// 取整
            g = parseInt(g);// 取整
            b = parseInt(b);// 取整
         
            //console.log("#"+r.toString(16,2)+g.toString(16,2)+b.toString(16,2));
            //return "#"+r.toString(16,2)+g.toString(16,2)+b.toString(16,2);
            //console.log("rgb("+r+","+g+","+b+")" );
            return "rgb("+r+","+g+","+b+")";        
            }
            function setStyle(index){
            // var num2=parseInt(num)*10;
            var vblock = document.getElementById(index); 
            vblock.style.backgroundColor = greenToRed(index);             
            }

      }
    },
    pauseRec () {
      console.log('暂停录音')
        this.testCustFun('暂停录音');//测试自定义函数

      recorder.pause()// 开始录音

    },
    resume () {
      console.log('继续录音')
      recorder.resume()// 继续录音
    },
    endRec () {
      console.log('结束录音')
      recorder.stop() // 结束录音


    },
    playRec () {
      console.log('录音播放')
      recorder.play() // 录音播放
    },
    downRec () {
      console.log('录音下载')
      recorder.downloadWAV() // 录音下载
    }, 
    // greenToRed(num){
    // //var 百分之一 = (单色值范围) / 50;  单颜色的变化范围只在50%之内
    // var one = (255+255) / 100;  
    // var r=0;
    // var g=0;
    // var b=0;
 
    // if ( num < 50 ) { 
    //     // 比例小于50的时候红色是越来越多的,直到红色为255时(红+绿)变为黄色.
    //     r = one * num;
    //     g=255;
    // }
    // if ( num >= 50 ) {
    //     // 比例大于50的时候绿色是越来越少的,直到0 变为纯红
    //     g =  255 - ( (num - 50 ) * one) ;
    //     r = 255;
    // }
    // r = parseInt(r);// 取整
    // g = parseInt(g);// 取整
    // b = parseInt(b);// 取整
 
    // //console.log("#"+r.toString(16,2)+g.toString(16,2)+b.toString(16,2));
    // //return "#"+r.toString(16,2)+g.toString(16,2)+b.toString(16,2);
    // //console.log("rgb("+r+","+g+","+b+")" );
    // return "rgb("+r+","+g+","+b+")";        
    // },
    // setStyle(i){
    // // var num2=parseInt(num)*10;
    // var vblock = document.getElementById(i); 
    // vblock.style.backgroundColor = this.greenToRed(i) ; 
    
    // }

  },
  mounted(){
        // this.setStyle();
        // for(var i=1;i<=100;i++){
                // this.setStyle(i);
                // this.setStyle(10);
                // this.setStyle(50);
                // this.setStyle(100);
              // }

  }
}
</script>
<style scoped="scoped">

#indicator{
  background-color: pink;
  width: 300px;
  height: auto;
}  
#Vindicator{
  background-color: green;
  width: 500px;
  height: 30px;
  padding: none;
  line-height: 30px;
}  
.vb{
  margin:none;
  display: inline-block;
  /*background-color: red;*/
  width: 5px;
  height: 30px;
}  
</style>
