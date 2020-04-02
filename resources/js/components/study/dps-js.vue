<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Js & vue dependances</h3></div>
                    <div class="card-body">
                        <a href="https://www.npmjs.com" class="list-group-item list-group-item-secondary" target="_blank">JS包管理：NPM</a>                      
                        <a href="https://sweetalert2.github.io/#examples" class="list-group-item list-group-item-warning" target="_blank">弹窗插件: sweetalert2 </a>
                        <a href="http://image.intervention.io/getting_started/installation" class="list-group-item list-group-item-danger" target="_blank">图像处理：intervention/image</a>
                        <a href="https://www.npmjs.com/package/vform" class="list-group-item list-group-item-dark" target="_blank">Laravel & Vue表单验证: vform </a>
                        <a href="" class="list-group-item list-group-item-primary" target="_blank">XXXX： XXXX/image</a> 
                        <a href=" " class="list-group-item list-group-item-secondary" target="_blank">XXXX </a>    
                        <a href=" " class="list-group-item list-group-item-warning" target="_blank">XXXX </a>    
                        <a href=" " class="list-group-item list-group-item-danger" target="_blank">XXXX </a>    
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
