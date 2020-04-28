<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Js & vue dependances</h3></div>
                    <div class="card-body">
                        <a href="https://www.npmjs.com" class="list-group-item list-group-item-secondary" target="_blank">JS包管理：NPM</a>                      
                        <a href="https://sweetalert2.github.io/#examples" class="list-group-item list-group-item-warning" target="_blank">弹窗插件: sweetalert2 </a>

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
                        <a href=" " class="list-group-item list-group-item-dark" target="_blank">XXXX </a>    
                        <a href=" " class="list-group-item list-group-item-primary" target="_blank">XXXX </a>                        
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
