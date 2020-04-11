<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">CSS refernces</div>
                    <div class="card-body">
                        <router-link to="/btnstyle" class="items">
                          按钮样式
                        </router-link>          
                        <router-link to="/divpos" class="items">
                          Div对齐
                        </router-link>          
                            

                        
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
</style>