<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Other dependances</h3>alert||success||info||warning||danger</div>
                    <div class="card-body">
                        <a href="https://jsfiddle.net/boilerplate/vue" class="list-group-item list-group-item-warning" target="_blank">Js代码测试,Vue在线演示 </a>                      
                        <a href="https://github.com/vuejs/awesome-vue#table" class="list-group-item list-group-item-dark" target="_blank">Awesome-vue 生态链</a>                        
                        <a href="https://adminlte.io" class="list-group-item list-group-item-secondary" target="_blank">AdminLTE模板</a>                      
                        <a href="https://getbootstrap.com/" class="list-group-item list-group-item-warning" target="_blank">BootStrap模板 </a>
                        <a href="https://tailwindcss.com/" class="list-group-item list-group-item-danger" target="_blank"> Tailwind CSS</a>
                        <a href="http://jsonplaceholder.typicode.com/" class="list-group-item list-group-item-dark" target="_blank">JSONPlaceholder</a>
                        <a href="http://httpbin.org" class="list-group-item list-group-item-primary" target="_blank">Httpbin</a>  
                        <a href="https://undraw.co/illustrations " class="list-group-item list-group-item-secondary" target="_blank">undraw Open source SVG </a>    
                        <a href="https://icons.getbootstrap.com/ " class="list-group-item list-group-item-warning" target="_blank">Bootstrap icons</a>    
                        <a href="https://www.flaticon.com/" class="list-group-item list-group-item-danger" target="_blank">Flaticon 在线矢量图标 </a>    
                        <a href="http://vue-table-component.spatie.be/" class="list-group-item bg-red" target="_blank"> vue-table-component </a> 
                        <a href="https://github.com/gilbitron/laravel-vue-pagination" class="list-group-item bg-yellow" target="_blank"> 分页 laravel-vue-pagination  </a> 
                        <a href="" class="list-group-item bg-aqua" target="_blank">0000</a> 
                        <a href="" class="list-group-item bg-blue" target="_blank"> 0000 </a> 
                        <a href="" class="list-group-item bg-light-blue" target="_blank"> 0000 </a> 
                        <a href="" class="list-group-item bg-green" target="_blank"> 0000 </a>
                        <a href="" class="list-group-item bg-navy" target="_blank"> 0000 </a>
                        <a href="" class="list-group-item bg-teal" target="_blank"> 0000 </a>
                        <a href="" class="list-group-item bg-olive" target="_blank"> 0000 </a>
                        <a href="" class="list-group-item bg-red" target="_blank"> 0000 </a>
                        <a href="" class="list-group-item bg-lime" target="_blank"> 0000 </a>
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
