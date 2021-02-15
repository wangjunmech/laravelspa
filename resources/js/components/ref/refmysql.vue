<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Mysql refernces(使用子路由,app.js下引入子组件并在routes = []中的path:'/refmysql'下配置子组件注意不要再加/了。在refmysql.vue中添加router-view标签)</div>
                    <div class="card-body">
                        <router-link to="/refmysql/issue" class="items" @click.native="switchView($event)">
                          参考网站
                        </router-link>   
                        <router-link to="/refmysql/schema" class="items" @click.native="switchView($event)">
                          Schema
                        </router-link>  
                        <router-link to="/refmysql/sql" class="items" @click.native="switchView($event)">
SQL                        </router-link>  

                        <router-link to="/refmysql/tablesAndKeys" class="items" @click.native="switchView($event)">
Tables & Keys                        </router-link>  

                        <router-link to="/refmysql/sqlBasic" class="items" @click.native="switchView($event)">
Sql Basics                        </router-link>  

                        <router-link to="/refmysql/installtowin" class="items" @click.native="switchView($event)">
Mysql Windows Installation                        </router-link>  

                        <router-link to="/refmysql/installtomac" class="items" @click.native="switchView($event)">
Mysql Mac Installation                        </router-link>  

                        <router-link to="/refmysql/createtable" class="items" @click.native="switchView($event)">
Creating Tables                        </router-link>  

                        <router-link to="/refmysql/insertdata" class="items" @click.native="switchView($event)">
Inserting Data                        </router-link>  

                        <router-link to="/refmysql/constraints" class="items" @click.native="switchView($event)">
Constraints                        </router-link>  

                        <router-link to="/refmysql/updatedel" class="items" @click.native="switchView($event)">
Update & Delete                        </router-link>  

                        <router-link to="/refmysql/query" class="items" @click.native="switchView($event)">
Basic Queries                        </router-link>  

                        <router-link to="/refmysql/companydatabase" class="items" @click.native="switchView($event)">
♈Company Database Intro                        </router-link>  

                        <router-link to="/refmysql/createcompanydatabase" class="items" @click.native="switchView($event)">
Creating Company Database                        </router-link>  

                        <router-link to="/refmysql/morequeries" class="items" @click.native="switchView($event)">
More Basic Queries                        </router-link>  

                        <router-link to="/refmysql/functions" class="items" @click.native="switchView($event)">
Functions                        </router-link>  

                        <router-link to="/refmysql/wildcards" class="items" @click.native="switchView($event)">
Wildcards                        </router-link>  

                        <router-link to="/refmysql/union" class="items" @click.native="switchView($event)">
Union                        </router-link>  

                        <router-link to="/refmysql/joins" class="items" @click.native="switchView($event)">
Joins                        </router-link>  

                        <router-link to="/refmysql/nestedquery" class="items" @click.native="switchView($event)">
Nested Queries                        </router-link>  

                        <router-link to="/refmysql/ondel" class="items" @click.native="switchView($event)">
On Delete                        </router-link>  

                        <router-link to="/refmysql/triger" class="items" @click.native="switchView($event)">
Triggers                        </router-link>  

                        <router-link to="/refmysql/diagrams" class="items" @click.native="switchView($event)">
Er Diagrams Intro                        </router-link>  

                        <router-link to="/refmysql/design" class="items" @click.native="switchView($event)">
Designing An Er Diagram                        </router-link>  

                        <router-link to="/refmysql/mapping" class="items" @click.native="switchView($event)">
Er Diagram Mapping                        </router-link>  



                        <router-view v-if="routerviewon"></router-view>
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
                routerviewon:true,
                clickeditem:null,
            }
        },
        methods:{
            switchView(e){
                // alert(e.target);
                // console.log(e);
                // alert(this.routerviewon);
                if(this.clickeditem==e.target){
                    if(this.routerviewon==true)
                    alert("隐藏routerview");
                    // else
                    // alert("显示routerview");

                    this.routerviewon=!this.routerviewon;
                }else{
                    this.routerviewon=true;
                }
                this.clickeditem=e.target;
            },

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped="scoped">
    .card-body{
        line-height: 30px;
        word-break:normal; 
        word-break:keep-all; 
        padding: 50px;

    }
    .items{
        border: 1px solid brown;
        border-radius: 5px;
        margin: 15px;
        padding: 5px;
        text-decoration: none;
        white-space:nowrap;
    }
    .items:hover{
        background-color: pink;
    }
</style>