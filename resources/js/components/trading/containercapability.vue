<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Container capability 集装箱装箱能力计算器&nbsp;&nbsp;&nbsp;&nbsp;                              
                    <span class="icon" @click="contselect">📂点击弹出窗口测试</span>
</div>
                    <div class="card-body">
                        <div>
                            <p>选择集装箱型号尺寸：</p> </br>
                            <div class="containerdiv">
                                <div class="conttype" @click="addbd($event)">20GP <p>6m*2.35m*2.39m</p></div>
                                <div class="conttype" @click="addbd($event)">40GP <p>12m*2.35m*2.39m</p></div>
                                <div class="conttype" @click="addbd($event)">40HQ <p>12m*2.35m*2.7m</p></div>
                            </div>
                                <hr>
                                <p class="tipinfo" v-if="!containertype">请从上面的类型中选择一种</p>

                                <p v-if="containertype">已选择的container类型为：{{containertype}}</p>
                                
                                <hr>
                                <p>输入纸箱尺寸，单位CM：</p>
                                  Length<input type="text" name="l" placeholder="长" v-model='boxlength' @blur='chkinput($event)'>
                                  Width<input type="text" name="w" placeholder="宽" v-model='boxwidth' @blur='chkinput($event)'>
                                  Height<input type="text" name="h" placeholder="高" v-model='boxheigth' @blur='chkinput($event)'>
                                <hr>
                                <p class="tipinfo" v-if="!sizefilled">请输入纸箱的长宽高尺寸，单位为mm</p>

                                <p v-if="boxlength||boxwidth||boxheigth">已输入的纸箱尺寸为：{{sizetxt}}</p>
                                <div class="btn"  @click="calculate">Calculate</div>
                                <hr>                                
                                <hr>
                                <p>密码和名字测试：</p>
                                  姓<input type="text" name="fname" placeholder="姓" v-model='fnamedata' >
                                  名<input type="text" name="name" placeholder="名" v-model='namedata' >
                                  密码<input type="text" name="pass" placeholder="密码" v-model='passdata' >
                                 
                                <hr>
                                <div id="watch-example">
                                    <p>
                                    Ask a yes/no question:
                                    <input v-model="question">
                                    </p>
                                    <p>{{ answer }}</p>
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
            return {
                containertype:'',
                boxlength:'',
                boxwidth:'',
                boxheigth:'', 
                fnamedata:'',
                namedata:'',
                passdata:'',  
                passchk:'0000',  
                question: '',
                answer: 'I cannot give you an answer until you ask a question!'      
            }
        },
        computed:{
            sizetxt(){
            return this.boxlength+'*'+this.boxwidth+'*'+this.boxheigth;
            },
            sizefilled(){
                // if(this.boxlength<=0||this.boxwidth<=0||this.boxheigth<=0){
                //     alert('输入不能小于0');
                // }//这里验证不行，要在光标移出输入框后验证
                if(this.boxlength&&this.boxwidth&&this.boxheigth)
                return true;
            else
                return false;
            }
        },
        watch: {
        // 如果 `question` 发生改变，这个函数就会运行
        question: function (newQuestion, oldQuestion) {
        this.answer = 'Waiting for you to stop typing...'
        this.getAnswer()
        }
        },
        methods: {
          contselect () {
            alert('contselect');

          },
          calculate () {
            alert('calculate');

          },
          //选择container尺寸后把值设定到data中并更改已选元素的样式
          addbd (e) {
            //如果再先则需要取消已待定元素的样式
            var items = document.getElementsByClassName('conttype');
            
            // alert(items.length);
            for (let i = 0; i < items.length; i++) {
              // 遍历操作
              items[i].style.border="";
            }
            // alert('addbd');
            // console.log(e.target);
            var containerblock='';
            if(e.target.className=="conttype"){
                containerblock=e.target;//如果当前节点的样式名对上了则用当前节点
                // console.log("AAAAAAAAAAAAAAAAA");
                // console.log(containerblock.firstChild.data);
            }else{
                containerblock=e.target.parentNode;//如果当前节点的样式名对不上的话说明点击到了子节点，把子节点的父节点赋给变量
                // console.log(containerblock.firstChild.data);
            }
            containerblock.style.border="2px solid red";//给变量指向的节点设置格式
            this.containertype=containerblock.firstChild.data;//给data设置值


          },
          chkinput(e){

            // console.log(e.target.value);
            e.preventDefault();//阻止冒泡事件
            //先检查是否为数字
            function numchk(input) { 
                　　var re = /^[0-9]+.?[0-9]*/;//判断字符串是否为数字//判断正整数/[1−9]+[0−9]∗]∗/ 
                　　if (!re.test(input)) { 
                        alert('请输入数字');
                        return false; 
                　　}else{
                    return true;
                    }
                }
            if(!numchk(e.target.value)){
                e.target.style.background="red";
                return;
            };

            //再判断是否大于0
            if(e.target.value<=0){
                alert('输入必须大于0');
                e.target.style.background="red";
            }else{
                e.target.style.background="#0e5";


            }

          },

      
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped="scoped">
    .cont {
        font-size: 10px;
    }    
    .c1{
        background-color: #0ca;
    }   
    .c2{
        background-color: #ddd;
    }  
    .c3{
        background-color: #bc8;
    }
    .c4{
        background-color: #df0;
    }
    .containerdiv{
        display: inline-block;
        align-content: center;
        width:auto;
        height:100px;
        border:2px solid #000;
        position:relative;
        text-align:center;
        line-height: auto;
        padding: 20px;
    }

    .conttype{
        display: inline-block;
        background-color: pink;
    }

.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 30;
  -moz-border-radius: 30;
  border-radius: 20px;
  -webkit-box-shadow: 0px 4px 3px #00659c;
  -moz-box-shadow: 0px 4px 3px #00659c;
  box-shadow: 0px 4px 3px #00659c;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 0px 8px 0px 8px;
  /*border: dotted #ad2e00 2px;*/
  text-decoration: none;
}

.btn:hover {
  background: #a1d2f0;
  background-image: -webkit-linear-gradient(top, #a1d2f0, #3498db);
  background-image: -moz-linear-gradient(top, #a1d2f0, #3498db);
  background-image: -ms-linear-gradient(top, #a1d2f0, #3498db);
  background-image: -o-linear-gradient(top, #a1d2f0, #3498db);
  background-image: linear-gradient(to bottom, #a1d2f0, #3498db);
  text-decoration: none;
}

.tipinfo{
    color: red;
    background-color: yellow;
}

</style>