<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Words link 
                        <a href="#" @click="addlink()" class="btn btn-primary">加链接不区分符号(操作DOM)</a>
                        <a href="#" @click="setlink()" class="btn btn-success">只给单词加链接(replace全局正则替换)</a>
                        <a href="#" @click="jqaddlink()" class="btn btn-warning">给网址加链接</a>
                    </div>
                    <div class="card-body">
                    <div id="article" class="article">                        
                            <span>The English word , Easter ? is just a word</span>
                            <span>which parallels the German word Ostern</span>                      
                        The English word Easter is just a word, which parallels the German word Ostern, is of uncertain origin. One view, expounded by the Venerable Bede in the 8th century, was that it derived from Eostre, or Eostrae, the Anglo-Saxon goddess of spring and fertility. This view presumes—as does the view associating the origin of Christmas on December 25 with pagan 
                    </div> 
                    <div id="article2" class="article">   
                        They're adorable to be sure, but we're betting these two Kermode bear siblings are a handful (hang in there, mama bear!). We're featuring them in honor of Siblings Day, an annual celebration of the bond between children who share one or more parents in common. 
                    </div> 
                    <hr>
                    <div>  
                        <div class="jqlinktxt" id="jqlinktxtid">
                             <div class="message">this is a good example,点击上面的“给网址加链接”,看看后面的网址是不是加上了对应的链接,需要改进正则匹配分号，最后一个链接未完整匹配处理：!http://www.example.com ,第二个http://www.baidu.com,第3个http://www.163.com,.?,第4个https://blog.csdn.net/liehuo123/article/details/91039749,,第5个https://item.taobao.com/item.htm?spm=a21c9.8840246.pinzhi.3.71a4d0adBhHy2X&id=533156973801,</div>    
                        </div>
                    </div>
                    <!-- <div>link test <a href="#" :dblclick="showtip(33)" :mouseover="showtip(33)">888</a></div> -->
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
</template>
<style scoped>
</style>
<script>

export default {
        data() {
            return {
                article:'',                  
                dictsrc:'http://www.iciba.com/'
            }
        },
        methods: {           
            searchDic(){
                alert('eeeeeeeeeeeeee')
          
                },           
            FindWord(article) {  
                return article.match(/\b\w+\b/g);//正则匹配单词
            },
            setlink() {//只给单词加链接,使用replace方法接合正则全局匹配
                if($('.article').length){
                    var Otext=$('.article').html();
                    var reg = /(\b\w+\b)+/g;   //正则匹配单词
                    var src=this.dictsrc;//链接站点地址
                    // var rep='<a href="'+src+'$1" target="_blank">$1</a>';//拼接A标签链接,点击链接直接新窗口打开到词典站点
                    var rep='<a href="#">$1</a>';//拼接A标签链接,
                      Otext = Otext.replace(reg,rep);  //全局替换
                    document.getElementById('article').innerHTML = Otext;
                    alert('Links added to the correspondent Words!');
                    // this.showtip('xx');
                }
                //给所有A标签加上点击事件

               var divitem = document.getElementById("article");                
               var itemA = divitem.getElementsByTagName("a");
                // console.log(itemA)
                   for(var i = 0; i<itemA.length; i++){
                　　　　itemA[i].index = i; //给每个元素加一个属性索引值
                　　　　itemA[i].onclick = function(){
                // 　　　　　　alert("下标索引值为："+this.index+"\n"+"文本内容是："+this.innerHTML); 
                        axios.get('api/dict?word='+this.innerHTML)
                              .then((response) =>{
                                console.log(response.data)
                              })
                　　　　}
                   }

            },  
            addlink(){//加链接不区分符号,以空格分隔,此方法会给所有内容加上链接，不够智能
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
        },
        created() {
            console.log('Component created.............')
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