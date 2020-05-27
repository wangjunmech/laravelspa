<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Memorandum</h3></div>
                    <div class="card-body">
                        <a href="/api/mv" class="item" target="_blank">邮箱验证，客户端信息获取</a>
                        <a href="/vrecorder2" class="item" target="_blank">录音机</a> 
                        <a href="/artyomjs" class="item" target="_blank">语音识别，仅Chrome支持</a> 
                        <a href="/filehandler" class="item" target="_blank">文件操作，文件名操作</a> 
                        <a href="#" class="item" target="_blank">memorandum</a> 
                        <a href="#" class="item" target="_blank">memorandum</a> 
                        <a href="#" class="item" target="_blank">memorandum</a>            
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
                file:'test.jpg'
            }
        },
        methods:{
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
            setBg(){
                var div = document.getElementsByClassName('card-body')[0];
                var alinks = div.getElementsByTagName('a');
                for(var i=0;i<alinks.length;i++){
                    // alinks[i].style.backgroundColor="pink";
                    alinks[i].style.backgroundColor=this.randomColor();

                }
                console.log(alinks.length);

            }

        },
        mounted() {
            this.setBg();
            console.log('Component mounted.')
        }
    }
</script>
<style scoped="scoped">
    .item{
        height: 50px;
        line-height: 40px;
        border: 2px solid green;
        border-radius: 3px;
        padding: 10px;
        position: relative;

    }
    .item:hover{
        color: red;
        text-decoration: none;
        font-weight: 900;
        opacity:.8;
        background-color: none;
        border: 2px solid red;

    }


</style>