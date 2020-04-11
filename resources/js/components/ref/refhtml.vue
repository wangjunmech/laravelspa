<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Html refernces</div>
                    <div class="card-body">
                        <table>
                            <thead>
                            <tr>
                                <th>Link</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><router-link to="/input/accept" class="nav-link"><p>文件域文件类型的accept属性</p></router-link> </td>
                                <td>\<input id=\'file\' type=\"file\" class=\"inputfile\" @change=\"addsssImg\" ref=\"inputer\" multiple
                                   accept=\"image/*
                                   "\/\></td>
                            </tr>
                            <tr>
                                <td><router-link to="/btnstyle" class="nav-link"><p>按钮CSS样式</p></router-link> </td>
                                <td>各种按钮CSS样式</td>
                            </tr>
                            </tbody>
                        </table>
                        
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
