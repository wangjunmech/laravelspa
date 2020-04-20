<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Words link 55
                        <a href="#" @click="addlink()" class="btn btn-primary">加链接不区分符号(操作DOM)</a>
                        <a href="#" @click="setlink()" class="btn btn-success">只给单词加链接(replace全局正则替换)</a>
                        <a href="#" @click="jqaddlink()" class="btn btn-warning">给网址加链接</a>
                        <i class="fa fa-bullhorn" @mouseover="sound('http://res.iciba.com/resource/amp3/1/0/12/a0/12a032ce9179c32a6c7ab397b9d871fa.mp3')" style="cursor: pointer;"></i>
                    </div>

                    <div class="card-body">
                    <div class="card-body">第二个按钮点击给文本加链接,再点链接下载声音文件,如果已经有声音文件则点击播放</div>
                    <div id="meaningbox" class="meaningbox" style="background-color: #ddf;width: 302px;border: 1px solid red;position: absolute;">
                        <div id="dragbar" class="dragbar" style="background-color: #f06;width: 300px;min-height: 30px;">
                            <div class="close" style="background-color: #ccc;width: 30px;height: 30px;text-align: center;line-height: 30px;cursor: pointer;" @click="hideBox()">X</div>
                        </div>
                        <div id="minfo" class="minfo" style="background-color: #dff;width: 300px;min-height: 30px;">The meaning box
                            
                        </div>

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name='articleinput' v-model='article'>
                    
                    </div>
                    <div id="article" class="article" v-text="article">>                        
                        
 The economic effects of the coronavirus could push around half a billion people into poverty, examsxined Oxfam said this week.

  
                    </div> 
                    <div id="article2" class="article">   
                        They're adorable to be sure, but we're betting these two Kermode bear siblings are a handful (hang in there, mama bear!). We're featuring them in honor of Siblings Day, an annual celebration of the bond between children who share one or more parents in common. 
                    </div> 
                    <hr>
                    <div>  
                        <div class="jqlinktxt" id="jqlinktxtid">
                             <div class="message">在线绘本故事http://www.magickeys.com/books/invis-allig/page5.html#pictop,this is a good example,点击上面的“给网址加链接”,看看后面的网址是不是加上了对应的链接,需要改进正则匹配分号，最后一个链接未完整匹配处理：!http://www.example.com ,第二个http://www.baidu.com,第3个http://www.163.com,.?,第4个https://blog.csdn.net/liehuo123/article/details/91039749,,第5个https://item.taobao.com/item.htm?spm=a21c9.8840246.pinzhi.3.71a4d0adBhHy2X&id=533156973801,</div>    
                        </div>
                    </div>
                    <!-- <div>link test <a href="#" :dblclick="showtip(33)" :mouseover="showtip(33)">888</a></div> -->
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
</template>


<script>

export default {
        data() {
            return {
                article:' but we\'re betting these two Kermode bear siblings are a handful (hang in there, mama bear!). We\'re featuring them in honor of Siblings Day, an annual celebration of the bond between children who share one or more parents in common',                  
                dictsrc:'http://www.iciba.com/',
                click:0,
                // showMbox:0,
                meaningHtml:'',
            }
        },

        methods: {
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
            setlink() {//只给单词加链接,使用replace方法接合正则全局匹配
                if(this.click) return;//只能点击一次，第二次直接返回
                this.click++;
                if($('.article').length){
                    var Otext=$('.article').html();
                    var reg = /(\b\w+\b)+/g;   //正则匹配单词
                    var src=this.dictsrc;//链接站点地址
                    // var rep='<a href="'+src+'$1" target="_blank">$1</a>';//拼接A标签链接,点击链接直接新窗口打开到词典站点
                    var rep='<a href="#" title=$1>$1</a>';//拼接A标签链接,
                      Otext = Otext.replace(reg,rep);  //全局替换
                    document.getElementById('article').innerHTML = Otext;
                    // alert('Links added to the correspondent Words!');
                    swalt.fire({
                              icon: 'success',
                              title: 'Links added successfully!'
                            });
                    // this.showtip('xx');
                }

                //给所有A标签加上点击事件,单击和双击冲突解决，使用延时方法***************
            var divitem = document.getElementById("article");                
            var itemA = divitem.getElementsByTagName("a");
            var clickFlag = null;//是否点击标识（定时器编号)解决单击和双击冲突
                // console.log(itemA)
                   for(var i = 0; i<itemA.length; i++){
                　　　　itemA[i].index = i; //给每个元素加一个属性索引值
                    //给所有A标签加上****单击事件****
                　　　　itemA[i].onclick = function(){
                    // alert(clickFlag)
                        this.style.cursor = 'wait';//鼠标指针在当前单词上显示等待
                        var clickword=this;
                            if(clickFlag<300) {//取消上次延时未执行的方法
                                clickFlag = clearTimeout(clickFlag);
                                // alert(555)
                                // console.log("555")
                              }  
                              var words = this.innerHTML;                             
                              clickFlag = setTimeout(function() {
                                // click 事件的处理,发送请求查询单词
                                axios.get('api/dict?word='+words)
                                      .then((response) =>{
                                        // alert(response.data)
                                        console.log(response.data)
                                        var soundpath=response.data[0];
                                        new Audio(soundpath).play();
                                        var meaningHtml=response.data[1];
                                        // alert($("#minfo").text());
                                        $("#minfo").html(meaningHtml);
                                        $("#minfo").css('overflow-y','scroll');
                                        clickword.style.cursor = 'default';//鼠标指针恢复
                                      })

                              }, 300);

                              //延时300毫秒执行避免与双击事件冲突
                // 　　　　　　alert("下标索引值为："+this.index+"\n"+"文本内容是："+this.innerHTML); 
                            return false;//阻止默认事件防止点击时页面滚动

                　　　　}
                    //给所有A标签加上****双击事件****,弹出提示
                    // var showMbox=this.showMbox;
                    itemA[i].ondblclick = function(e){
                          if(clickFlag) {//取消上次延时未执行的方法
                            clickFlag = clearTimeout(clickFlag);
                          }
                        // 请求内容

                          // $("#meaningbox").hide();
                        $("#meaningbox").show();
                        var e = event || window.event;
                        var scrollX = document.documentElement.scrollLeft || document.body.scrollLeft;
                        var scrollY = document.documentElement.scrollTop || document.body.scrollTop;
                        var x = e.pageX || e.clientX + scrollX;
                        var y = e.pageY || e.clientY + scrollY;
                        // alert('x: ' + x + '\ny: ' + y);
                        $("#meaningbox").css("top",(parseInt(y)-70)+'px');
                        $("#meaningbox").css("left",(parseInt(x)-300)+'px');
                        // $("#meaningbox").css("top",y+'px');
                        return false;//阻止默认事件防止点击时页面滚动

                    }


                   }

            },  
            addlink(){//加链接不区分符号,以空格分隔,此方法会给所有内容加上链接，不够智能
                if(this.click) return;//只能点击一次，第二次直接返回
                this.click++;
                // var sentences = document.getElementsByTagName('span');//处理span中的内容
                var sentences = document.getElementsByClassName('article');//处理类名为*的div中的内容
                var num = sentences.length;//看看有几段文本
                // alert(str.length);
                for(let i = 0;i<num;i++){
                    var tempS = '';
                    var wordsArr = sentences[i].innerHTML.split(' ');
                    // console.log(wordsArr);
                    for(let j = 0;j<wordsArr.length;j++){
                        wordsArr[j] = wordsArr[j].link(this.dictsrc+wordsArr[j]);
                        var tag = this.parseDom(wordsArr[j]);
                        tag[0].target = '_blank';
                        var newstr = this.nodeToString(tag[0]);
                        // console.log(newstr);
                        tempS += newstr +' '; 
                    }
                    sentences[i].innerHTML = tempS;
                }



            },
            jqaddlink(){//给网址加链接
                    if($('.jqlinktxt').length){
                    var textR=$('.jqlinktxt').html();
                    var reg = /(http:\/\/|https:\/\/)((\w|=|\?|\.|\/|&|-)+)/g;
                    var imgSRC=$('.jqlinktxt img').attr('src');
                    if(reg.exec(imgSRC)){
                        return false
                    }else{
                      textR = textR.replace(reg, "<a href='$1$2' target='_blank'>$1$2</a>");
                    }
                    document.getElementById('jqlinktxtid').innerHTML = textR;
                    alert('Links added to the correspondent url!');
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
            } 

        },
        mounted() {
            console.log('Component mounted.............') 
            //获取元素
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
        },
        created() {
            console.log('Component created.............');
            console.log(sessionStorage);


        }
    }

</script>
<style scoped="scoped">
    .article{
        display: inline-block;
        margin: 5px;
        font-size: 20px;
        font-style: bold;
        padding: 10px;
        border-radius: 10px;
    }

</style>