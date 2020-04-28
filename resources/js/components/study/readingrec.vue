<template>
    <div class="container">
      <div class="">
        <div class="card">
          <div class="card-header">
            <h1 class="text-center">Reading Records</h1>     
          </div>
          <div class="card-body" style="text-align:center">
            <div id='loadblock' v-show="loadingStatus"
              style="position: absolute; z-index: 2; left:0; right:0; top:0; bottom:0; margin:auto;" 
              >
                <div class="loading">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                </div>
                <div class="tj">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <div style="position: relative;" class="card-body"> 
                <div> 
                <table class="table table-hover" style="table-layout: fixed;word-break:break-all; word-wrap:break-all;">
                  <thead>
                    <tr>
                      <th style="width:60px">ID</th>
                      <th>Title</th>
                      <th class="md-col-2">New words</th>
                      <th style="width:60px">New words num</th>
                      <th>Created_at</th>
                      <th>Review</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="article in data.data" :key="article.id">
                      <td>{{article.id}}</td>
                      <td>{{article.articletitle}}</td>
                      <td>{{article.newwords}}</td>
                      <td>{{numstrwords(article.newwords)}}</td>
                      <td><span class="tag tag-success">{{article.created_at}}</span></td>
                      <td>
                        <a href="#" @click="fillmodal(article.id,article.articletitle,article.article,article.newwords)" data-toggle="modal" index="article.id" data-target="#exampleModal"> 
                        <i class="fa fa-eye fa-2x blue" title="read again!"></i>
                        </a>&nbsp;&nbsp;&nbsp;
                        <a href="#" @click="rewords(article.newwords)" data-toggle="modal" index="article.id" data-target="#exampleModal"> 
                        <i class="fa fa-asterisk" title="Review words!"></i>
                        </a>

                    </td>
                    </tr>

                  </tbody>
                </table>
                </div>           
                </div>
              <div class="m-auto mt-2">
                <pagination :data="data" @pagination-change-page="getResults" :limit="limit" align="center" >
                  <span slot="prev-nav">&lt;&lt; Previous</span>
                  <span slot="next-nav">Next &gt;&gt;</span>
                </pagination>
              </div>
              </div>




            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" ><strong id="modaltitle"> Modal title</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div id='modalbody' class="modal-body" style="text-align: left"></div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Modal -->



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
                loadingStatus:false,
                limit:10,
                data:{},
                form:new Form({
                        articletitle:'',
                        article:"",
                        newwords:[],
                    }),
                }
        },
        methods: {          
            getResults(page=1){
              this.loadingStatus=true;
              var flag=this;
            // console.log('读取阅读列表')   
                axios.get('api/articles?page=' + page)
                .then(response => { 
                    console.log(response);
                    this.loadingStatus=false;
                    this.data=response.data;
                })   
                .catch(function(error){
                    if(error.response){
                        // console.log(error.response.data);
                        // console.log(error.response.status);
                        // console.log(error.response.data);
                    }else if(error.request) {
                        console.log(error.request); 
                    }else{
                        console.log('Error', error.message);
                    }

                })
              },
            numstrwords(str){
                // console.log(str);
                var str = '"'+str+'"';//为啥要加引号才能解析？？？
                var strarr = new Array();
                strarr = str.split(";");
                return strarr.length;
            },
            randomColor(){
                // 随机颜色编号生成
                // console.log(Math.random()+"==Math.random()")
                // var num = 0.4008158021943309;
                // console.log(num.toString(16)+"==Math.random().toString(16)")
                // var hex = "0.669bdd4a25083"
                // console.log(hex.substr(2, 3)+"==Math.random().toString(16).substr(2, 3)")
                var code='#' + Math.random().toString(16).substr(3, 3).toUpperCase();
                // return "background-color:"+code;
                return code;
            },
            fillmodal(id,title,article,newwords){
                //在modal中显示文章
                // console.log(id);
                // console.log(title);
                // console.log(article);
                var mtit = document.getElementById('modaltitle');
                var mbody = document.getElementById('modalbody');
                mtit.innerText=id+'. '+title;

                //把生词字符串转为数组，再替换到文章内容中。
                var wordsArr = newwords.split(";");
                console.log(wordsArr);
                var nar='';
                for(var i=0;i<wordsArr.length;i++){
                    // console.log('>>>>>>>>');
                    var finder = wordsArr[i];
                    var replace = '<font color="red"><b>'+wordsArr[i]+"</b></font>";
                     nar=article.split(finder).join(replace);
                     article=nar;
                }
                // mbody.innerText=nar;
                mbody.innerHTML =article;

            },
            rewords(newwords){
                //在modal中显示生词
                // console.log(id);
                // console.log(title);
                // console.log(article);
                var mtit = document.getElementById('modaltitle');
                var mbody = document.getElementById('modalbody');
                mtit.innerText="复习生词";

                //把生词字符串转为数组，再替换到文章内容中。
                var wordsArr = newwords.split(";");
                // console.log(wordsArr);
                
                var html='';
                for(var i=0;i<wordsArr.length;i++){
                    var c=this.randomColor();
                    // console.log('>>>>>>>>');
                    var finder = wordsArr[i];
                    html += '<div class="newwords" onmouseover="this.style.opacity=0.5;"  onmouseout="this.style.opacity=1;" style="background-color:'+c+';padding: 10px;border-radius:30px;display:inline-block;margin:10px;"><h3><a href="http://www.iciba.com/'+wordsArr[i]+'" target="_blank" onmouseover="this.style.color=\'yellow\'" onmouseout="this.style.color=\'purple\'" style=" text-decoration: none;">'+wordsArr[i]+"</a></h3></div>";


                }
                mbody.innerHTML=html;

            },
            formatnewwords(){

            },
            readinglist(){
                // console.log('读取阅读列表')   
                this.form.get('api/articles')
                .then((response) => { 
                    console.log(response);
                    this.loadingStatus=false;
                    this.data=response;
                })   
                .catch(function(error){
                    if(error.response){
                        // console.log(error.response.data);
                        // console.log(error.response.status);
                        // console.log(error.response.data);
                    }else if(error.request) {
                        console.log(error.request); 
                    }else{
                        console.log('Error', error.message);
                    }

                })
            },
 
 
        },
        mounted() {
            this.loadingStatus=true;
            // this.readinglist();
            this.getResults()
             
        },
        created() {
            console.log('Component created.............')

            // // #################----监听触发父组件中的搜索事件----####################
            eventHandler.$on('searching',()=>{
                // console.log('搜索用户表'+kwords);
              let kwords=this.$parent.searchStr;
                axios.get('api/articles?k='+kwords)
                .then((response)=>{
                  alert('搜索文章待完善')
                  console.log('搜索文章后返回****************')
                  // console.log(response.data);
                  this.data=response;                  
                })
                .then(()=>{
                  // console.log((JSON.stringify(this.users.data) ));
                  console.log('没有搜索到返回提示****************')
                  if(this.data.data==''){
                    swalt.fire(
                      ' Search Result Empty',
                      'Nothing found!!!',
                      'warning'
                              )
                  }
                })
                .catch(()=>{})
            })
        }
    }

</script>
<style scoped="scoped">
a {
    text-decoration: none;
}
/*正常的未被访问过的链接*/
a:link {
    text-decoration: none;
}
/*已经访问过的链接*/
a:visited {
    text-decoration: none;
}
/*鼠标划过(停留)的链接*/
a:hover {
    text-decoration: none;
    color: red;
}
/* 正在点击的链接，鼠标在元素上按下还没有松开*/
a:active {
    text-decoration: none;
}
/* 获得焦点的时候 鼠标松开时显示的颜色*/
a:focus {
    text-decoration: none;
}


@media (min-width: 1600px) {
    .container{
        max-width: 1800px;
    }
}
</style>