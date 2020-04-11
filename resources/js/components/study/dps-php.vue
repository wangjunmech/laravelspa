<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>PHP dependances</h3></div>
                    <div class="card-body">
                        <a href="https://packagist.org" class="list-group-item list-group-item-secondary" target="_blank">PHP包管理：packagist</a>                      
                        <a href="http://image.intervention.io/getting_started/installation" class="list-group-item list-group-item-danger" target="_blank">图像处理：intervention/image</a>
                        <a href="https://parsedown.org/" class="list-group-item list-group-item-dark" target="_blank">Markdown Parser</a>
                        <a href="https://packagist.org/packages/laravel/passport" class="list-group-item list-group-item-primary" target="_blank">用户认证：laravel/passport</a>                        
                        <a href="https://github.com/JosephSilber/bouncer" class="list-group-item list-group-item-danger" target="_blank">权限控制： JosephSilber/bouncer </a>
                        <a href="https://github.com/Zizaco/entrust" class="list-group-item list-group-item-dark" target="_blank">权限控制：Zizaco/entrust</a>                        
                        <a href="https://github.com/kodeine/laravel-acl" class="list-group-item list-group-item-primary" target="_blank">权限控制： kodeine/laravel-acl</a> 
                        <a href="https://github.com/paquettg/php-html-parser" class="list-group-item list-group-item-secondary" target="_blank">HTML DOM解析：paquettg /
php-html-parser </a>                      
                        <a href=" " class="list-group-item list-group-item-danger" target="_blank">XXXX</a>
                        <a href=" " class="list-group-item list-group-item-dark" target="_blank">XXXX</a>
                        <a href=" " class="list-group-item list-group-item-primary" target="_blank">XXXX</a>  
                        <a href=" " class="list-group-item list-group-item-secondary" target="_blank">XXXX </a>    
                        <a href=" " class="list-group-item list-group-item-warning" target="_blank">XXXX </a>    
                        <a href=" " class="list-group-item list-group-item-danger" target="_blank">XXXX </a>    
                        <a href=" " class="list-group-item list-group-item-dark" target="_blank">XXXX </a>                         
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
