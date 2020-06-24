<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Js & vue dependances</h3></div>
                    <div class="card-body">
                        <a href="https://www.npmjs.com" class="list-group-item list-group-item-secondary" target="_blank">JS包管理：NPM</a>                      
                        <a href="https://sweetalert2.github.io/#examples" class="list-group-item list-group-item-warning" target="_blank">弹窗插件: sweetalert2 </a>                     
                        <a href="https://github.com/MohammadYounes/AlertifyJS" class="list-group-item list-group-item-danger" target="_blank">替换默认弹窗插件: AlertifyJS ，安装后在app.js中引入window.alertify=require('alertifyjs');
但显示位置不正确</a>

                        <a href="https://www.npmjs.com/package/vform" class="list-group-item list-group-item-dark" target="_blank">Laravel & Vue表单验证: vform </a>
                        <li class="list-group-item list-group-item-primary">
                        <a href="https://randomcodetips.com/vue-html-to-paper/"  target="_blank">打印页面：Vue HTML to Paper </a>                 
                            <router-link to="/users" class="ml-5">
                              <span>
                              <i class="fa fa-users nav-icon"></i>
                              打印示例：users list</span>
                            </router-link>
                            </li>


                        <a href="https://laravel-vue-pagination.now.sh/" class="list-group-item list-group-item-secondary" target="_blank">分页插件:gilbitron /
laravel-vue-pagination </a>    
                        <a href="http://vegetable.zhuyuntao.cn/Recorder/start.html" class="list-group-item list-group-item-warning" target="_blank">录音插件：js-audio-recorder </a>    
                        <a href="https://clipboardjs.com/" class="list-group-item list-group-item-danger" target="_blank">剪贴板插件：clipboardjs </a>    
                        <a href="https://github.com/TalAter/annyang" class="list-group-item list-group-item-dark" target="_blank">语音识别： annyang </a>    
                        <a href="https://github.com/riophae/vue-treeselect" class="list-group-item list-group-item-primary" target="_blank">树形选择： riophae /vue-treeselect </a>    
                        <a href="https://github.com/halower/vue-tree" class="list-group-item list-group-item-primary" target="_blank">树形分类：  halower / vue-tree </a>   
                        <a href="https://github.com/ParadeTo/vue-tree-list" class="list-group-item list-group-item-primary" target="_blank">树形文件夹管理：   ParadeTo / vue-tree-list </a>  
                        <a href="https://github.com/linmasahiro/vue-scheduler-lite/tree/master/src" class="list-group-item list-group-item-primary" target="_blank">日程计划插件 </a>                        
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
