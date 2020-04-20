<template>
    <div class="container">

        <div style="text-align:center">
            <div><h1 class="text-center">Reading Note</h1></div>
            <div>
                 </div>
                    <div class="alert alert-success" role="alert">
                    <strong>Put article here</strong>
                    </div>



        <form @submit.prevent="savearticle()" @keydown="form.onKeydown($event)">
            <input type="text" name="articletitle" v-model="form.articletitle" class="form-control input" placeholder="在这里输入文章标题..."  :class="{ 'is-invalid': form.errors.has('articletitle') }">
            <has-error :form="form" field="articletitle"></has-error>

            <textarea class="form-control input" v-model="form.article" rows="5" placeholder="在这里输入文章内容..." ></textarea>
<!--             <a href="#" @click.slef.once="addlink" class="" ><button class="btn btn-success btn-block">Add links</button></a>
 -->  <!--           <button @click.slef.once.prevent="addlink" class="btn btn-success">Add links</button> -->
           <button id='addlink' @click.stop.prevent="addlink()" class="btn btn-success">Add links</button>


            <input type="range" id='range' min="0" max="100" value="1" @change="changeFont"/>
            <div v-html="form.article" id="articleshow" style="white-space: pre-wrap;" class="article" role="alert"></div>

            <button type="submit" class="btn btn-primary">Save Article</button>

        </form>

        </div>
<!-- 消息弹窗 -->

       <div id="meaningbox" class="meaningbox" style="background-color: #ddf;width: 302px;border: 1px solid red;position: absolute;">
            <div id="dragbar" class="dragbar" style="background-color: #f06;width: 300px;min-height: 30px;">
                <div class="close" style="background-color: #ccc;width: 30px;height: 30px;text-align: center;line-height: 30px;cursor: pointer;" @click="hideBox()">X</div>
            </div>
            <div id="minfo" class="minfo" style="background-color: #dff;width: 300px;min-height: 30px;">The meaning box
                
            </div>

        </div>
<!-- end消息弹窗 -->

    

    </div>
        
</template>
<style scoped>
</style>
<script>

    export default {
        data() {
            return {

            fontsize:20,
            dictsrc:'http://www.iciba.com/',
            click:0,
            showMbox:0,
            meaningHtml:'', 
            // articleTit:'', 
            form:new Form({
                    articletitle:'',
                    article:"",
                    newwords:[],
                }),
            }
        },
        methods: {
            randomColor(){
                // 随机颜色编号生成
                // console.log(Math.random()+"==Math.random()")
                // var num = 0.4008158021943309;
                // console.log(num.toString(16)+"==Math.random().toString(16)")
                // var hex = "0.669bdd4a25083"
                // console.log(hex.substr(2, 3)+"==Math.random().toString(16).substr(2, 3)")
                var code='#' + Math.random().toString(16).substr(3, 3).toUpperCase();
                return "background-color:"+code;
            },
            changeFont(){
                // var num = document.getElementById("range").value;
                var num = $("#range").val(); 
                var fs=$("#articleshow").css('fontSize');
                var newfs = 14+num/2;
                fs=Math.floor(newfs)
                console.log(fs);

                $("#articleshow").css('fontSize',fs+'px'); 
            },
            savearticle(){
                // alert('保存阅读')   
                console.log('xxxxxxxx*****************************');      
                this.form.post('api/dict')
                .then(({ data }) => { 
                    console.log(data)
                    alert('保存阅读完成！')
                     this.$router.go(0)
                     })
                .catch(function(error){
                    alert('保存阅读错误！')
                     this.$router.go(0)
                    if(error.response){
                        console.log(error.response.data);
                        console.log(error.response.status);
                        console.log(error.response.data);
                    }else if(error.request) {
                        console.log(error.request); 
                    }else{
                        console.log('Error', error.message);
                    }

                })
            },
        
            sound(url){
                // alert(url);
                new Audio(url).play();
            },  
            FindWord(article) {  
                return article.match(/\b\w+\b/g);//正则匹配单词
            },
            hideBox(){
                document.getElementById("meaningbox").style.display="none"
            },
            addlink(){//匹配加链接
                // alert('addlink')
                document.getElementById("addlink").style.display="none";
                var jq=$('#articleshow').html();
                // console.log(jq);
                // if(this.click) return;//只能点击一次，第二次直接返回
                this.click++;
                var Otext=document.getElementById("articleshow");
                // alert((Otext.innerHTML).length)
                if((Otext.innerHTML).length){
                    var Otext=Otext.innerHTML;
                    var reg = /(\b\w+\b)+/g;   //正则匹配单词
                    var src=this.dictsrc;//链接站点地址
                    // var rep='<a href="'+src+'$1" target="_blank">$1</a>';//拼接A标签链接,点击链接直接新窗口打开到词典站点
                    var rep='<a href="#" title=$1>$1</a>';//拼接A标签链接,
                      Otext = Otext.replace(reg,rep);  //全局替换
                    document.getElementById('articleshow').innerHTML = Otext;
                    alert('Links added to the correspondent Words!');
                
                    // this.showtip('xx');
                }

                //给所有A标签加上点击事件,单击和双击冲突解决，使用延时方法***************
            var divitem = document.getElementById("articleshow");                
            var itemA = divitem.getElementsByTagName("a");
            var clickFlag = null;//是否点击标识（定时器编号)解决单击和双击冲突
            var newwords=this.form.newwords;
                // console.log(itemA)
                   for(var i = 0; i<itemA.length; i++){
                　　　　itemA[i].index = i; //给每个元素加一个属性索引值
                    //给所有A标签加上****单击事件****
                　　　　itemA[i].onclick = function(e){
                            this.style.color="red";
                        // alert(clickFlag)                            
                            this.style.cursor = 'wait';//鼠标指针在当前单词上显示等待
                            var clickword=this;
                            if(clickFlag<300) {//取消上次延时未执行的方法
                                clickFlag = clearTimeout(clickFlag);
                              }  
                              var words = this.innerHTML;
                              // 放入生词前先检查生词是否已经在数组中
                            function in_array(str, arrayToSearch) {
                                    for (var s = 0; s < arrayToSearch.length; s++) {
                                        var thisEntry = arrayToSearch[s].toString();
                                        if (thisEntry == str) {
                                            return true;
                                        }
                                    }
                                    return false;
                                };
                            if(!in_array(words,newwords)){
                              newwords.push(words);  
                            }

                              // console.log(newwords);
                              var wordschecking = this;                           
                              clickFlag = setTimeout(function() {

                                // click 事件的处理,axios发送请求查询单词
                                axios.get('api/dict?word='+words)
                                    .then((response) =>{
                                        // alert(response.data)
                                        // console.log(response.data)
                                        var soundpath=response.data[0];
                                        new Audio(soundpath).play();
                                        var meaningHtml=response.data[1];
                                        // alert($("#minfo").text());
                                        $("#minfo").html(meaningHtml);//设置弹窗内容
                                        $("#minfo").css('overflow-y','scroll');//设置弹窗滚动条
                                        clickword.style.cursor = 'default';//鼠标指针恢复
                                      })
                                    .catch(function(error){
                                        clickword.style.cursor = 'default';//鼠标指针恢复
                                        if(error.response){
                                            console.log(error.response.data);
                                            console.log(error.response.status);
                                            console.log(error.response.data);
                                        }else if(error.request) {
                                            console.log(error.request); 
                                        }else{
                                            console.log('Error', error.message);
                                        }

                                    })




                              }, 300);
                        //延时300毫秒执行避免与双击事件冲突
            // 　　　　　alert("下标索引值为："+this.index+"\n"+"文本内容是："+this.innerHTML); 



                        // $("#meaningbox").hide();//隐藏弹窗
                        // 弹窗显示与位置
                        $("#meaningbox").show();
                        var e = event || window.event;
                        var scrollX = document.documentElement.scrollLeft || document.body.scrollLeft;
                        var scrollY = document.documentElement.scrollTop || document.body.scrollTop;
                        var x = e.pageX || e.clientX + scrollX;
                        var y = e.pageY || e.clientY + scrollY;
                        // alert('x: ' + x + '\ny: ' + y);
                        var adjY=(parseInt(y)-200);
                        var adjX=(parseInt(x)-550);//离左边距离,
                        if(adjX<300){adjX=300};//限制弹窗左边位置影响显示
                        $("#meaningbox").css("top",adjY+'px');
                        $("#meaningbox").css("left",adjX+'px');
                        return false;//阻止默认事件防止点击时页面滚动

                　　　　}
                    //给所有A标签加上****双击事件****,弹出提示
                    // var showMbox=this.showMbox;
                    itemA[i].ondblclick = function(e){
                          if(clickFlag) {//取消上次延时未执行的方法
                            clickFlag = clearTimeout(clickFlag);
                          }
                        // 请求内容
                        alert('不要激动,要有耐心！！！dblclick！')
                        // $("#meaningbox").css("top",y+'px');
                        return false;//阻止默认事件防止点击时页面滚动
                    }


                   }

            },            
            parseDom(arg){
            　　 var objE = document.createElement("div");
            　　 objE.innerHTML = arg;
            　　 return objE.childNodes;
            },
            nodeToString ( node ) { 
            //DOM转字符串 to string,
               var tmpNode = document.createElement( "div" ); 
               tmpNode.appendChild( node.cloneNode( true ) ); 
               var str = tmpNode.innerHTML; 
               tmpNode = node = null; // prevent memory leaks in IE 
               return str; 
            },
            showtip(str){
                alert('str');
            },
        },


        mounted() {

            //获取拖动元素
            var dv = document.getElementById('meaningbox');
            var dragbar = document.getElementById('dragbar');
            var x = 0;
            var y = 0;
            var l = 0;
            var t = 0;
            var isDown = false;
            //鼠标按下事件
            dragbar.onmousedown = function(e) {
                //获取x坐标和y坐标
                x = e.clientX;
                y = e.clientY;

                //获取左部和顶部的偏移量
                l = dv.offsetLeft;
                t = dv.offsetTop;
                //开关打开
                isDown = true;
                //设置样式  
                dv.style.cursor = 'move';
                return false;
            }
            dragbar.onmousemove = function(e) {                
                // dv.style.cursor = 'pointer';             
                dv.style.cursor = 'move';
                return false;
            }
            dragbar.onmouseout = function(e) {                
                // dv.style.cursor = 'pointer';             
                dv.style.cursor = 'default';
                return false;
            }
            //鼠标移动
            window.onmousemove = function(e) {
                if (isDown == false) {
                    return;
                }
                //获取x和y
                var nx = e.clientX;
                var ny = e.clientY;
                //计算移动后的左偏移量和顶部的偏移量
                var nl = nx - (x - l);
                var nt = ny - (y - t);

                dv.style.left = nl + 'px';
                dv.style.top = nt + 'px';
            }
            //鼠标抬起事件
            dragbar.onmouseup = function() {
                //开关关闭
                isDown = false;
                dv.style.cursor = 'default';
            }  

            $("#meaningbox").hide();//隐藏弹窗
    


             
        },
        created() {
            console.log('Component created.............')
        }
    }

</script>
<style scoped="scoped">

    input[type="range"] {
        -webkit-box-shadow: 0 1px 0 0px #424242, 0 1px 0 #060607 inset, 0px 2px 10px 0px black inset, 1px 0px 2px rgba(0, 0, 0, 0.4) inset, 0 0px 1px rgba(0, 0, 0, 0.6) inset;
        margin-top: 20px;
        background-color: #272728;
        border-radius: 50px;
        display: block;
        /*width: 400px;*/
        -webkit-appearance: none;
        height:50px;
        width: 100%;
    }
    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        cursor: default;
        /*top: -5px;*/
        height: 50px;
        width: 50px;
        /*background-color: red;*/
        /*transform: translateY(-4px);*/
        background: none repeat scroll 0 0 red;
        border-radius: 50px;
        -webkit-box-shadow: 0 -1px 1px black inset;
    }
.article{
    color: red;
    background-color: #ddf;
    margin-bottom: 20px;
    padding: 10px;
    text-align: left;
}
.input{
    margin-top: 20px;
}
.article a{text-decoration: none;}
/*a:visited {text-decoration: none;}*/
/*a:active {text-decoration: none;}*/
.article a:hover {text-decoration: none;

color: red;}
</style>