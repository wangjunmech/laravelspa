<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> <h2>CSS refernces</h2>
                        <h3>全局础样式设置可写在入口文件\resources\views\layouts\master.blade.php或样式文件\resources\sass\app.scss</h3></div>
                    <div class="card-body">
                        <div>
                        <a href="https://fontawesome.dashgame.com/" class="items">FontAwesome图标集</a>
                        <a href="http://www.divcss5.com/css3-style/" class="items">DIVCSS5首页 > CSS3教程</a>
                            
                        <router-link to="/btnstyle" class="items">
                          按钮样式
                        </router-link>          
                        <router-link to="/divpos" class="items">
                          Div对齐
                        </router-link>           
                        <router-link to="/divbreak" class="items">
                          Div换行
                        </router-link>           
                        <router-link to="/colorname" class="items">
                          网页颜色名称
                        </router-link>           
                        <router-link to="/gradient" class="items">
                          CSS3常用的几种颜色渐变模式gradient
                        </router-link>          
                          <a href="http://tools.jb51.net/static/colorpicker/"  class="items">颜色值在线转换</a>
                          <a href="https://9elements.github.io/fancy-border-radius/full-control.html#100.100.100.100-0.0.0.0-."  class="items">在线拖动边框倒角</a>
                        </div>
                        <router-link id="text-shadow/2"  to="/animation" class="items">过渡动画</router-link>    
                        <div class="generator" id="box"></div>

                        
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
                imgurl:'/logos/404.jpg'
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped="scoped">

    .items{
        border: 1px solid brown;
        border-radius: 5px;
        font-size: 20px;
        margin: 15px;
        padding: 5px;
        text-decoration: none;
        white-space:nowrap;
        line-height: 40px;
    }
    .items:hover{
        background-color: pink;
    }
    .generator {
    width: 50px;
    height: 50px;
    background-color: pink;
    border-radius: 100% 100% 100% 100% / 100% 100% 100% 100% ;
    background-image:-webkit-gradient(linear,0% 0%, 0% 100%, from(#999999), to(#333333), color-stop(0.5,#336600));
    }



@keyframes text-shadow-2{
  from{text-shadow:0 0 white}
  to{text-shadow:0 0 rgba(255,255,255,0), -45px -45px 0 red, -30px -30px 0 orange, -15px -15px 0 yellow, 0 0 0 green, 15px 15px 0 blue, 30px 30px 0 indigo, 45px 45px 0 violet}
}
#text-shadow\/2:hover { animation: text-shadow-2 1s infinite alternate;text-shadow:0 0 white}
</style>