<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>VPS,VPN,VPC参考网站</h3>
       
                    </div>
                    <div class="card-body">
                        <a href="https://www.digitalocean.com/" class="items">digitalocean</a>
                        <a href="https://www.henghost.com" class="items">恒创云</a>
       

                        
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
            }
        },
        methods: {
            test(){

            }
        },
        mounted() {


        },
        created() {
            // console.log('Component Created.')
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
        background-color: #0d6;
    }
</style>