<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>Html refernces </h2><a href="http://kindeditor.net/demo.php">kindeditor在线粘贴复制页面获取html代码</a></div>
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
                        <div>
                            <div>
                                                
                                <div>
                                <h1>HTML标签分类&nbsp;分类信息可能不完整，<a href="https://www.w3school.com.cn/tags/html_ref_byfunc.asp">更多标签请参考W3School参考手册</a></h1>
                                <h2 >块级元素（block level element）</h2>
                                <p>
                                <strong>可容纳内联元素和块状元素，宽度和高度起作用</strong><br>
                                总是独占一行，表现为另起一行开始，而且其后的元素也必须另起一行显示</p>
                                <p>宽度(width)、高度(height)、内边距(padding)和外边距(margin)都可控制</p>
                                <p>宽度没有设置时，默认为100%</p>
                                <p>可以包含某些块级元素和内联元素</p>
                                <table>
                                <thead>
                                <tr>
                                <th>标签名</th>
                                <th>标签作用</th>
                                <th>主要属性</th>
                                <th>说明</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>address</td>
                                <td>定义文档或文章的作者/拥有者的联系信息</td>
                                <td></td>
                                <td>类似于 acronym标签，H5不支持</td>
                                </tr>
                                <tr>
                                <td>article</td>
                                <td>定义文章</td>
                                <td></td>
                                <td>H5新增元素</td>
                                </tr>
                                <tr>
                                <td>aside</td>
                                <td>定义其所处内容之外的内容<br>可用作文章的侧栏</td>
                                <td></td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>audio</td>
                                <td>声音内容</td>
                                <td>autoplay : 音频就绪后自动播放<br>controls : 向用户显示控件<br>loop : 结束后重新播放<br>muted : 静音播放<br>preload : 加载页面时加载，预备播放，与autoplay属性冲突<br>src : 音频地址</td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>blockquote</td>
                                <td>定义块引用</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>center</td>
                                <td>居中对齐块</td>
                                <td></td>
                                <td>不推荐使用</td>
                                </tr>
                                <tr>
                                <td>dir</td>
                                <td>目录列表</td>
                                <td></td>
                                <td>不推荐使用</td>
                                </tr>
                                <tr>
                                <td>div</td>
                                <td>定义节</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>dl</td>
                                <td>定义列表</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>fieldset</td>
                                <td>定义围绕表单中元素的边框</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>footer</td>
                                <td>定义文档或节的页脚</td>
                                <td></td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>form</td>
                                <td>定义供用户输入的 HTML 表单</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>hr</td>
                                <td>水平分隔线</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>h1 - h6</td>
                                <td>定义 HTML 标题</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>header</td>
                                <td>定义 section 或 page 的页眉</td>
                                <td></td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>iframe</td>
                                <td>定义内联框架</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>nav</td>
                                <td>定义导航链接</td>
                                <td></td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>noframes</td>
                                <td>不支持框架的用户的替代内容</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>noscript</td>
                                <td>不支持客户端脚本的用户的替代内容</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>section</td>
                                <td>定义文档中的节（section、区段）。比如章节、页眉、页脚或文档中的其他部分</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>ol</td>
                                <td>排序列表</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>ul</td>
                                <td>非排序列表</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>p</td>
                                <td>段落</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>pre</td>
                                <td>格式化文本</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>table</td>
                                <td>表格</td>
                                <td></td>
                                <td></td>
                                </tr>
                                </tbody>
                                </table>
                                <h2>内联元素（inline element）</h2>
                                <p><br>
                                <strong>只能容纳文本或其它内联元素，宽度和高度不起作用</strong><br>
                                内联元素允许其他内联元素与其位于同一行</p>
                                <p>宽度(width)、高度(height)、内边距的top/bottom(padding-top/padding-bottom)和外边距的top/bottom(margin-top/margin-bottom)都不可改变</p>
                                <p>宽高就是内容的高度，不可以改变</p>
                                <p>只能内联元素，不能包含块级元素</p>
                                <table>
                                <thead>
                                <tr>
                                <th>标签名</th>
                                <th>作用</th>
                                <th>属性</th>
                                <th>说明</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>a</td>
                                <td>锚点<br>定义超链接，用于从一张页面链接到另一张页面</td>
                                <td>href : 指向链接目标<br>target : 打开链接的方式<br>- _blank  打开新标签页<br>- _parent  覆盖父页面<br>- _self  当前标签页<br>- _top  覆盖当前页面<br>- <em>framename</em></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>abbr</td>
                                <td>缩写<br>通过对缩写进行标记，能够为浏览器、拼写检查和搜索引擎提供有用的信息</td>
                                <td></td>
                                <td>类似于 acronym标签，H5不支持</td>
                                </tr>
                                <tr>
                                <td>b</td>
                                <td>粗体字</td>
                                <td></td>
                                <td>不推荐</td>
                                </tr>
                                <tr>
                                <td>bdo</td>
                                <td>覆盖默认的文本方向，设置文字方向</td>
                                <td>dir : 定义文字方向<br>- ltr  left to right<br>- rtl  left to right<br>- auto</td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>big</td>
                                <td>大号字体</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>br</td>
                                <td>换行</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>cite</td>
                                <td>定义引用</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>code</td>
                                <td>定义计算机代码</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>dfn</td>
                                <td>定义项目</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>em</td>
                                <td>强调文本</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>img</td>
                                <td>图片</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>input</td>
                                <td>定义输入控件</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>meter</td>
                                <td>度量</td>
                                <td>high : 被视作高的值的范围<br>low : 被视作低的值的范围<br>max : 范围的最大值<br>min : 范围的最小值<br>optimum : 度量的优化值<br>value : 度量的当前值</td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>progress</td>
                                <td>标示任务的进度（进程）</td>
                                <td>max : 总值<br>value : 当前值</td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>span</td>
                                <td>常用内联容器，定义文本内区块</td>
                                <td></td>
                                <td></td>
                                </tr>
                                </tbody>
                                </table>
                                <h2>其他元素</h2>
                                <p>由于有一些元素需要一些其他文件的支持，无法测试其分类</p>
                                <table>
                                <thead>
                                <tr>
                                <th>标签名</th>
                                <th>作用</th>
                                <th>属性</th>
                                <th>说明</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>area</td>
                                <td>带有可点击区域的图像映射<br>嵌套在 <code>&lt;map&gt;</code> 标签中</td>
                                <td>coords : 定义可点击区域的坐标<br>shape : 定义区域的相状<br>- default<br>- rect  矩形(左上角右下角坐标)<br>- circle  圆形(圆心坐标半径长度)<br>- poly  多边形(多边形各项顶点的坐标值)</td>
                                <td><code>&lt;img&gt;</code> 标签中的 usemap 属性与 <code>map </code>标签 name 属性相关联</td>
                                </tr>
                                <tr>
                                <td>applet</td>
                                <td>定义嵌入的 applet</td>
                                <td>code : 指向java applet的文件名</td>
                                <td>使用object代替，H5不支持</td>
                                </tr>
                                <tr>
                                <td>base</td>
                                <td>为页面上的所有链接规定默认地址或默认目标</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>basefont</td>
                                <td>定义基准字体</td>
                                <td></td>
                                <td>没有浏览器支持，不推荐使用</td>
                                </tr>
                                <tr>
                                <td>canvas</td>
                                <td>定义图形，比如图表和其他图像</td>
                                <td></td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>bdi</td>
                                <td>设置一段文本，使其脱离其父元素的文本方向设置</td>
                                <td>dir : 定义文本方向<br>- ltr  left to right<br>- rtl  left to right<br>- auto</td>
                                <td>H5新增,Firefox、Google支持</td>
                                </tr>
                                <tr>
                                <td>button</td>
                                <td>定义按钮</td>
                                <td></td>
                                <td>H5新增了一些属性</td>
                                </tr>
                                <tr>
                                <td>caption</td>
                                <td>定义表格标题</td>
                                <td></td>
                                <td>紧随 table 标签之后</td>
                                </tr>
                                <tr>
                                <td>datalist</td>
                                <td>定义选项列表</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>dialog</td>
                                <td>定义对话框或窗口</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>embed</td>
                                <td>定义嵌入的内容，比如插件</td>
                                <td></td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>figure</td>
                                <td>规定独立的流内容</td>
                                <td></td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>figcaption</td>
                                <td>定义 figure元素的标题</td>
                                <td></td>
                                <td>H5新增</td>
                                </tr>
                                <tr>
                                <td>frame</td>
                                <td>frameset 中的一个特定的窗口（框架）</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>frameset</td>
                                <td>定义框架集</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>legend</td>
                                <td>定义 fieldset 元素的标题</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>map</td>
                                <td>定义图像映射</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>mark</td>
                                <td>定义有记号的文本</td>
                                <td></td>
                                <td>H5新增</td>
                                </tr>
                                </tbody>
                                </table>

                                </div>
                                <div id="MySignature" style="display: block;">☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄☄<br>
                                </div>
             
                            </div>
                        </div>
                        
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