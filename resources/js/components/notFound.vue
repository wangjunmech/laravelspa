<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">404页面错误</div>

                    <!-- <img :src="imgurl" alt="无图片显示"> -->
                    <img src="/logos/404.jpg" alt="无图片显示">



                    <div class="card-body">
                        The page you are looking for is not found!
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
