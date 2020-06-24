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
                                <td>\<input id='file' type="file" class="inputfile" @change="addsssImg" ref="inputer" multiple
                                   accept="image/*
                                   "/></td>
                            </tr>
                            <tr>
                                <td><router-link to="/btnstyle" class="nav-link"><p>按钮CSS样式</p></router-link> </td>
                                <td>各种按钮CSS样式</td>
                            </tr>
                            <tr>
                                <td><router-link to="#" class="nav-link"><p>Unicode字符图标</p></router-link> </td>
                                <td>
                                    <a href="http://www.htmleaf.com/ziliaoku/qianduanjiaocheng/20141225979.html" target="_blank">⚠如何使用Unicode字符图标✍</a>⚜&nbsp;&nbsp;
                                    <a href="https://www.htmlsymbols.xyz/" target="_blank">HTML symbols</a>⚜&nbsp;&nbsp;
                                    <a href="http://www.zaposphere.com/html-icons-reference-unicode-character-list/" target="_blank">html-icons-reference-unicode-character-list</a>✍&nbsp;&nbsp;
                                    <a href="https://www.webnots.com/unicode-emoji-symbols-list/" target="_blank">unicode-emoji-symbols-list</a>✍&nbsp;&nbsp;
                                    <a href="http://www.unicode.org/emoji/charts/emoji-list.html" target="_blank">unicode-emoji-list</a>✍&nbsp;&nbsp;
                                    <a href="https://www.unicode.org/emoji/charts-12.0/full-emoji-list.html" target="_blank">unicode-emoji & flags</a>✍&nbsp;&nbsp;
                                    
                                </td>
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
<style scoped="scoped">
    a{
        background: pink;
    }
    
</style>