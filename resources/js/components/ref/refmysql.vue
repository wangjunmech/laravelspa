<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Mysql refernces(使用子路由,app.js下引入子组件并在routes = []中的path:'/refmysql'下配置子组件注意不要再加/了。在refmysql.vue中添加router-view标签)</div>
                    <div class="card-body">
                        <router-link to="/refmysql/schema" class="items">
                          Schema
                        </router-link>  
                        <router-link to="/refmysql/issue" class="items">
                          issue
                        </router-link>   
                        <router-view></router-view>

                            

                        
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