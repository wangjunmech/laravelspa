<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">CSS refernces</div>
                    <div class="card-body">
                        <div>
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
                        <div>
                            <div class="generator" id="box">
                                  <div class="generator__shape generator__shape--8v" id="shape" style="border-radius: 100%;"></div>
                                  <span class="generator__handle generator__handle--8v generator__handle--second" id="leftBottom" style="top: 0%;"></span>
                                  <span class="generator__handle generator__handle--8v generator__handle--third" id="topRight" style="left: 0%;"></span>
                                  <span class="generator__handle generator__handle--8v generator__handle--fourth" id="rightBottom" style="top: 0%;"></span>
                                  <span class="generator__handle generator__handle--8v generator__handle--fourth" id="bottomRight" style="left: 0%;"></span>
                                  <span class="generator__handle generator__handle--8v" id="left" style="top: 100%;"></span>
                                  <span class="generator__handle generator__handle--8v" id="top" style="left: 100%;"></span>
                                  <span class="generator__handle generator__handle--8v generator__handle--third" id="right" style="top: 100%;"></span>
                                  <span class="generator__handle generator__handle--8v generator__handle--second" id="bottom" style="left: 100%;"></span>

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
        margin: 5px;
        padding: 5px;
        text-decoration: none;
    }
    .items:hover{
        background-color: pink;
    }
    .generator {
    width: 50vmin;
    height: 50vmin;
    background-color: pink;
    border-radius: 100% 100% 100% 100% / 100% 100% 100% 100% ;
    background-image:-webkit-gradient(linear,0% 0%, 0% 100%, from(#999999), to(#333333), color-stop(0.5,#336600));
    }
</style>