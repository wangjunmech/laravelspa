<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">正则表达示参考RegExp refernces / <a href="https://www.sojson.com/simple_json.html">Json在线解析格式化</a></div>
                    <div class="card-body">
                        <div class="p">
                            <a href="https://www.sojson.com/regex/generate">sojson.com</a>
                            <a href="http://www.5idev.com/p-php_regular_syntax_1.shtml">5idiv.com</a>
                            <a href="https://regexr.com/">regexr.com</a>
                            <a href="https://regex101.com/">regex101.com/</a>
                        </div>

                        <hr>
                        <table>
                            <thead>
                            <tr>
                                <th>类别</th>
                                <th>正则表达示</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>中文字符</td>
                                <td>[\u4e00-\u9fa5]</td>
                            </tr>
                            <tr>
                                <td>双字节字符</td>
                                <td>[^\x00-\xff]</td>
                            </tr>
                            <tr>
                                <td>空白行</td>
                                <td>\s</td>
                            </tr>
                            <tr>
                                <td>Email地址</td>
                                <td>\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}</td>
                            </tr>
                            <tr>
                                <td>网址URL</td>
                                <td>^((https|http|ftp|rtsp|mms)?:\/\/)[^\s]+</td>
                            </tr>
                            <tr>
                                <td>手机（国内</td>
                                <td>0?(13|14|15|18|17)[0-9]{9}</td>
                            </tr>
                            <tr>
                                <td>电话号码（国内）</td>
                                <td>[0-9-()（）]{7,18}</td>
                            </tr>
                            <tr>
                                <td>负浮点数</td>
                                <td>-([1-9]\d*.\d*|0\.\d*[1-9]\d*)</td>
                            </tr>
                            <tr>
                                <td>正浮点数</td>
                                <td>[1-9]\d*.\d*|0\.\d*[1-9]\d*</td>
                            </tr>
                            <tr>
                                <td>匹配整数</td>
                                <td>-?[1-9]\d*</td>
                            </tr>
                            <tr>
                                <td>QQ号</td>
                                <td>[1-9]([0-9]{4,10})</td>
                            </tr>
                            <tr>
                                <td>邮政编码</td>
                                <td>\d{6}</td>
                            </tr>
                            <tr>
                                <td>IP地址</td>
                                <td>(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)</td>
                            </tr>
                            <tr>
                                <td>身份证号</td>
                                <td>\d{17}[\d|x]|\d{15}</td>
                            </tr>
                            <tr>
                                <td>格式日期</td>
                                <td>\d{4}(\-|\/|.)\d{1,2}\1\d{1,2}</td>
                            </tr>
                            <tr>
                                <td>正整数</td>
                                <td>[1-9]\d*</td>
                            </tr>
                            <tr>
                                <td>负整数</td>
                                <td>-[1-9]\d*</td>
                            </tr>
                            <tr>
                                <td>用户名</td>
                                <td>[A-Za-z0-9_\-\u4e00-\u9fa5]+</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
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
