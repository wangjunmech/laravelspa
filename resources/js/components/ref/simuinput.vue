<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>JS模拟输入，事件冒泡，jQuery对象和DOM对象的互相转换</h2></div>
                    <div class="card-body">
                        <div class="autoinput">
                            <input type="text" class="testsimuInput" @click="simuInput($event)" placeholder="testsimuInput"><br>
                            <input type="text" class="testsimuInput" @click="simuInput($event)" placeholder="testsimuInput"><br>
                            <input type="text" @click="pramtest($event,'888')" placeholder="事件+参数">

                        </div>
                        <hr>    
                        <div id="content">
                            <!--点击obj4的时候会分别显示： obj4、 obj3、 obj1；.self会监视事件是否是直接作用到obj2上，若不是，则冒泡跳过该元素，-->
                            <p>事件冒泡顺序与.self修饰符.stop修饰符</p>
                             <div id="obj1" @click="doc" class="d1">
                              obj1
                              <div id="obj2" @click.self="doc" class="d2">
                               obj2====@click.self="doc"
                               <!--只有点击obj2才可以出发其点击事件。-->
                               <div id="obj3" @click.stop="doc" class="d3">
                                obj3====@click.stop="doc"
                                <div id="obj4" @click="doc" class="d4">
                                 obj4
                                 <div id="obj5" @click="doc" class="d5">
                                  obj5  
                                 </div>
                                </div>
                               </div>
                              </div>
                             </div>
                             <p>事件冒泡无修饰符，点击obj55会从obj11开始到obj55</p>
                             <div id="obj11" @click="doc" class="d1">
                              obj11
                              <div id="obj22" @click="doc" class="d2">
                               obj22
                               <!--只有点击obj2才可以出发其点击事件。-->
                               <div id="obj33" @click="doc" class="d3">
                                obj33
                                <div id="obj44" @click="doc" class="d4">
                                 obj44
                                 <div id="obj55" @click="doc" class="d5">
                                  obj55  
                                 </div>
                                </div>
                               </div>
                              </div>
                             </div>
                        </div>
                        <hr>    
                        <div> 
                            <p><h3>dom对象转换成jquery对象:只需要用$()把dom对象包装起来，方法为$(dom对象);</h3></p>
                            <p><h3>jquery对象转换成dom对象:[index]和get(index)从Jq对象中取出，var obj = $cr[0]; 或 var obj=$cr.get(0);。</h3></p>
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
                cursorUrl:'./../logos/404.jpg',
                id: '',
            }
        },
        methods:{     
            // ************************
            simuInput(e){
                var text = "模拟输入的字符";//模拟输入的字符
                var obj = e.target;//模拟输入到当前对象
                var oldtxt = "";
                var delay = 200;
                //********模拟按键按下，做成一个jQuery插件simulateKeyPress，调用方式$('').simulateKeyPress(参数)。
                jQuery.fn.simulateKeyPress = function(character) {
                  // console.log(character+'<<>>')
                  jQuery(this).trigger({ type: 'keypress', which: character.charCodeAt(0) });

                };
                //********模拟输入到对象中
                $(obj).keypress(function(e) {
                    //监听keypress事件
                    var txt = String.fromCharCode( e.which );
                    oldtxt=oldtxt+txt;
                    $(this).val(oldtxt);//设置值
                    // this.remove();//删除DOM
                });

                //********循环模拟输入
                for(var i=0;i<text.length;i++){
                    //循环延迟执行函数
                    (function (t, data) {   // 注意这里是形参
                        setTimeout(function () {
                            console.log(`参数：${data}定时循环执行第 ${t} 次，输出字符：${text[t]}`);
                            $(obj).simulateKeyPress(text[t]);
                        }, delay*t); //延迟时间根据次数累加上去所以要用时间乘上次数
                    })(i,text)// 调用函数传入实参次数与要输入的字符
                    console.log(text.length*delay+'====延迟所需要的总时间ms')
                }
                //********延时提示
                setTimeout(function(){
                    alert('模拟输入完成!')
                    console.log('模拟输入完成**********')
                },(text.length+1)*delay);

            },
            pramtest: function (e,n) {
                alert('事件参数：'+n)
            },
            doc: function () {
                this.id= event.currentTarget.id;
                alert(this.id)
            }


        },

        mounted() {
        }
    }
</script>
<style scoped="scoped">
    .testsimuInput{
        width: 300px;
        padding:10px;
        border-radius: 5px;
        -moz-box-shadow:-1px 5px 15px #333333, 1px 0px 20px #FF1212, 2px 2px 5px #333333; -webkit-box-shadow:-1px 5px 15px #333333, 1px 0px 20px #FF1212, 2px 2px 5px #333333; box-shadow:-1px 5px 15px #333333, 1px 0px 20px #FF1212, 2px 2px 5px #333333;
    }
    .edit-div{
        background-color: pink;
        border: 1px solid red;
    }
    .outputpos{
        color:red;
        font-size: 20px;
    }
    .cursorNode{
        background-color:#008080;
        color:#ada;
        margin:10px;
        font-weight: 800;
        font-size: 20px;
        padding:10px;
        line-height: 50px;
    }
    .d1{
        padding: 15px;
        border: 1px solid black;
        background-color: pink;
    }
    .d2{
        padding: 15px;
        border: 1px solid black;
        background-color: gold;
    }
    .d3{
        padding: 15px;
        border: 1px solid black;
        background-color: lightblue;
    }
    .d4{
        padding: 15px;
        border: 1px solid black;
        background-color: orange;
    }
    .d5{
        padding: 15px;
        border: 1px solid black;
        background-color: lightgreen;
    }

</style>