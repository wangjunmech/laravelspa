<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>Cursor & focus  <a href="https://convertio.co/zh/png-cur/">在线转换光标1</a><a href="https://anyconv.com/png-to-cur-converter/">在线转换光标2</a></h2></div>
                    <div class="card-body">
                        <div>
                            <p>
                                <label>input测试:</label>
                                <input type="text" style="width:300px" @click="cursorCatch($event);" @keyup="cursorCatch($event);"  value="123456789abcdefghijklmnopqrstuvwxyz"/>
                                <span>Cursor pos:</span>
                                <span class='outputpos'></span>
                              </p>
                              <p>
                                <label>textarea测试:</label>
                                <textarea rows="5" style="width:300px" @click="cursorCatch($event);" @keyup="cursorCatch($event);">123456789abcdefghijklmnopqrstuvwxyz</textarea>
                                <span>Cursor pos:</span>
                                <span class='outputpos'></span>
                              </p>
                              <div>
                                <label>contenteditable可编辑div测试</label>
                                <div contenteditable="true" class="edit-div" @click="cursorCatch($event);" @keyup="cursorCatch($event);">123456789abcdefghijklmnopqrstuvwxyz</div>
                                <span>Cursor pos:</span>
                                <span class='outputpos'></span>
                              </div>
                        </div>
                        <hr>
                        <div>
                            <p>CSS里的cursor属性能接受很多种光标样式属性，而且，如果使用url()表达式，你还能用自己的图片自定义光标图案样式：</p>
                            <pre>
body {
    cursor: url('some-cursor.ico'), default;
}
                            </pre>
                            <p><h3>Cursor Style 光标样式，鼠标移到上面看看效果</h3></p>
                            <p>
                                <span class="cursorNode" @mouseover="cursorNode($event)">auto</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">default</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">hand</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">text</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">crosshair</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">move</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">help</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">wait</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">not-allowed</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">no-drop</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">w-resize</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">s-resize</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">n-resize</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">e-resize</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">ne-resize</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">sw-resize</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">se-resize</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">nw-resize</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">pointer</span>
                                <span class="cursorNode" @mouseover="cursorNode($event)">progress</span>
                                <!-- <img src="./../../wjcursor.png" alt=""> -->
                                <!-- <img src="./../wjcursor.png" alt=""> -->
                                <!-- 'url("./Cursors/wjcursor.cur"),pointer' -->
                

                                <span class="cursorNode" @mouseover="urlcursor($event)" style="backgroundColor: red">url(自定义光标样式，函数赋值)</span>

                            </p>
                            <img :src="img404url" alt="111">
                            <img :src="cursorUrl1" alt="222">              
                            <img src="/Cursors/wjcursor.png" alt="1">
                            <img src="/../Cursors/wjcursor.png" alt="2">
                            <img src="/../../Cursors/wjcursor.png" alt="3">
                            <img src="/../../../Cursors/wjcursor.png" alt="4">
                            <img src="/../../../../Cursors/wjcursor.png" alt="5">
                            <img src="/../../../../../Cursors/wjcursor.png" alt="6">
                            <img src="/../../../../../../Cursors/wjcursor.png" alt="7">
                            <img src="/../../../../../../../Cursors/wjcursor.png" alt="8">
                            <img src="/../../../../../../../../Cursors/wjcursor.png" alt="9">
                            <span>cur格式</span>
                            <img src="/../../../../../../../../Cursors/wjcursor.cur" alt="9">
                            <p >              
                                <span v-text="img404url"></span></p>


                        </div>
                        <div>
                        <h1>js获取光标位置</h1>
                            <h2 id="1概念和原理">
                                1.概念和原理
                            </h2>
                            <p>
                                DOM中并没有直接获取光标位置的方法，那么我们只能间接来获取光标位置。DOM支持获取光标选中的范围，我们可以以此为切入点，来获取或定位光标的位置。当选取范围起始点和结束点一样时，就是光标插入的位置。
                            </p>
                            <h3 id="11-术语">
                                1.1 术语
                            </h3>
                            <p>
                                anchor(瞄点)：选区起点。
                            </p>
                            <p>
                                focus(焦点)：选区终点。
                            </p>
                            <p>
                                range(范围)：选区范围，包含整个节点或节点的一部分。
                            </p>
                            <h3 id="12-selection">
                                1.2 Selection
                            </h3>
                            <p>
                                Selection:Selection对象表示用户选择的文本范围或插入符号的位置。
                            </p>
                            <blockquote>
                                <p>
                                    经过实验发现Selection选取的节点范围都是块级节点。input和texteare并不能作为Selection的节点
                                </p>
                            </blockquote>
                            <p>
                                Selection对象存在于window对象上，可以通过window.getSelection()获取示例。
                            </p>
                            <p>
                                <strong>属性：</strong>
                            </p>
                            <p>
                                anchorNode:选区起点的节点。
                            </p>
                            <p>
                                anchorOffset:选区的起点位置。
                            </p>
                            <p>
                                focusNode:选区终点的节点。
                            </p>
                            <p>
                                focusOffset:选区的终点位置。
                            </p>
                            <p>
                                isCollapsed:起点和终点是否重叠。
                            </p>
                            <p>
                                rangeCount:选区包含的range数目。
                            </p>
                            <p>
                                <strong>方法</strong>
                            </p>
                            <p>
                                getRangeAt(index):获取指定的选取范围。
                            </p>
                            <p>
                                addRange(range):将一个范围添加到Selection对象中。
                            </p>
                            <p>
                                removeRange():移出指定的范围。
                            </p>
                            <p>
                                removeAllRanges():移出所有range对象。
                            </p>
                            <p>
                                collapse(parentNode,offset):将光标移动到parentNode节点的offset位置。
                            </p>
                            <p>
                                collapseToStart():取消当前选区，并把光标定位在原选区的最开始处，如果此时光标所处的位置是可编辑的，且它获得了焦点，则光标会在原地闪烁。
                            </p>
                            <p>
                                collapseToEnd():取消当前选区，并将光标定位到原选取的最末位。如果此时光标所处的位置是可编辑的，且它获得了焦点，则光标会在原地闪烁。
                            </p>
                            <p>
                                extend(node,offset):将终点位置移动到node节点的offset位置。
                            </p>
                            <p>
                                modify(alter,direction,granularity):通过alter方式(move/extend)来改变光标位置，移动方向为direction(left/right)，移动单位为granularity。
                            </p>
                            <p>
                                containsNode(aNode,aPartlyContained):判断aNode是否包含在Selection中。aPartlyContained为false表示全包含，为true表示只要部分包含即可。
                            </p>
                            <p>
                                toString():放回当前Selection对象的字符串。
                            </p>
                            <h3 id="13-range">
                                1.3 Range
                            </h3>
                            <p>
                                Range对象表示一个Selection的选择范围，一个Selection可以包含多个Range。
                            </p>
                            <p>
                                <strong>获取对象</strong>
                            </p>
                            <p>
                                document.createRange():创建一个Range。
                            </p>
                            <p>
                                selection.getRangeAt(index):获取指定的Range。
                            </p>
                            <p>
                                <strong>属性</strong>
                            </p>
                            <p>
                                collapsed:判断起始位置是否重合。
                            </p>
                            <p>
                                endContaniner:range终点节点。
                            </p>
                            <p>
                                endOffset:range的终点位置。
                            </p>
                            <p>
                                startContaniner:ranstartge起点节点。
                            </p>
                            <p>
                                startOffset:range的起点位置。
                            </p>
                            <p>
                                commonAncestorContainer:包含起始点的节点。
                            </p>
                            <p>
                                <strong>方法</strong>
                            </p>
                            <p>
                                setStart(startNode,startOffset):设置范围在startNode的起始位置为startOffset。
                            </p>
                            <p>
                                setEnd(endNode,endOffset):设置范围在endNode的起始位置为endOffset。
                            </p>
                            <p>
                                selectNode(referenceNode):设置range的节点为referenceNode。
                            </p>
                            <p>
                                selectNodeContents(referenceNode):设置range的内容为referenceNode。
                            </p>
                            <p>
                                collapse(toStart):向边界点折叠range，即是设置光标位置，toStart默认为false，表示光标定位在节点末尾。true表示光标定位在节点起点。
                            </p>
                            <p>
                                cloneContents():克隆一个range的内容片段。
                            </p>
                            <p>
                                deleteContents():删除range的内容片段。
                            </p>
                            <p>
                                extractContents():将range的内容从文档树移动到文档片段中。
                            </p>
                            <p>
                                insertNode(newNode):在range的其实位置插入新的节点。
                            </p>
                            <p>
                                surroundContents(newNode):将range对象的内容移动到新的节点中。
                            </p>
                            <p>
                                cloneRange():克隆一个range对象。
                            </p>
                            <p>
                                detach():释放当前range。
                            </p>
                            <h3 id="14-inputtextarea">
                                1.4 input/textarea
                            </h3>
                            <p>
                                在html5中，可输入性表单元素（input/textarea）都存在以下属性。不支持IE6/7。
                            </p>
                            <ul>
                                <li>
                                    selectionDirection:forward | backward | none,选区方向
                                </li>
                                <li>
                                    selectionEnd:选区终点位置
                                </li>
                                <li>
                                    selectionStart:选区起点位置
                                </li>
                            </ul>
                            <p>
                                setSelectionRange(selectionStart, selectionEnd, [selectionDirection]):设置获取焦点的输入性元素的选区范围。
                            </p>
                            <h2 id="2获取光标位置">
                                2.获取光标位置
                            </h2>
                            <h3 id="21-可编辑div获取光标位置">
                                2.1 可编辑div获取光标位置
                            </h3>
                            <pre class="prettyprint"><span class="hljs-comment">//获取当前光标位置</span> <span class="hljs-keyword">const</span> getCursortPosition = <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">(element)</span> {</span> <span class="hljs-keyword">var</span> caretOffset = <span class="hljs-number">0</span>; <span class="hljs-keyword">var</span> doc = element.ownerDocument || element.document; <span class="hljs-keyword">var</span> win = doc.defaultView || doc.parentWindow; <span class="hljs-keyword">var</span> sel; <span class="hljs-keyword">if</span> (<span class="hljs-keyword">typeof</span> win.getSelection != <span class="hljs-string">"undefined"</span>) {<span class="hljs-comment">//谷歌、火狐</span> sel = win.getSelection(); <span class="hljs-keyword">if</span> (sel.rangeCount &gt; <span class="hljs-number">0</span>) {<span class="hljs-comment">//选中的区域</span> <span class="hljs-keyword">var</span> range = win.getSelection().getRangeAt(<span class="hljs-number">0</span>); <span class="hljs-keyword">var</span> preCaretRange = range.cloneRange();<span class="hljs-comment">//克隆一个选中区域</span> preCaretRange.selectNodeContents(element);<span class="hljs-comment">//设置选中区域的节点内容为当前节点</span> preCaretRange.setEnd(range.endContainer, range.endOffset); <span class="hljs-comment">//重置选中区域的结束位置</span> caretOffset = preCaretRange.toString().length;
                                }
                              } <span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> ((sel = doc.selection) &amp;&amp; sel.type != <span class="hljs-string">"Control"</span>) {<span class="hljs-comment">//IE</span> <span class="hljs-keyword">var</span> textRange = sel.createRange(); <span class="hljs-keyword">var</span> preCaretTextRange = doc.body.createTextRange();
                                preCaretTextRange.moveToElementText(element);
                                preCaretTextRange.setEndPoint(<span class="hljs-string">"EndToEnd"</span>, textRange);
                                caretOffset = preCaretTextRange.text.length;
                              } <span class="hljs-keyword">return</span> caretOffset;
                            }
                            获取光标的位置是先通过获取鼠标的选取范围，然后克隆该选取范围，修改克隆范围的结束位置，这样克隆的范围就只剩下起点到结束点的内容，光标之后的内容被截取扔掉了。所以可以通过剩余内容的长度来确定光标位置。之所以要克隆一个选取范围出来，是为了避免修改光标结束位置时影响到原先内容。</pre>
                            <h3 id="22-inputtextarea获取光标位置">
                                2.2 input/textarea获取光标位置
                            </h3>
                            <pre class="prettyprint"><span class="hljs-comment">//输入框获取光标</span> <span class="hljs-keyword">const</span> getPosition = <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">(element)</span> {</span> <span class="hljs-keyword">let</span> cursorPos = <span class="hljs-number">0</span>; <span class="hljs-keyword">if</span> (document.selection) {<span class="hljs-comment">//IE</span> <span class="hljs-keyword">var</span> selectRange = document.selection.createRange();
                                    selectRange.moveStart(<span class="hljs-string">'character'</span>, -element.value.length);
                                    cursorPos = selectRange.text.length;
                                } <span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (element.selectionStart || element.selectionStart == <span class="hljs-string">'0'</span>) {
                                    cursorPos = element.selectionStart;
                                } <span class="hljs-keyword">return</span> cursorPos;
                            }
                            </pre>
                            <h2 id="3设置光标位置">
                                3.设置光标位置
                            </h2>
                            <h3 id="31-可编辑div设置光标位置">
                                3.1 可编辑div设置光标位置
                            </h3>
                            <pre class="prettyprint"><span class="hljs-comment">//设置光标位置</span> <span class="hljs-keyword">const</span> setCaretPosition = <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">(element, pos)</span> {</span> <span class="hljs-keyword">var</span> range, selection; <span class="hljs-keyword">if</span> (document.createRange)<span class="hljs-comment">//Firefox, Chrome, Opera, Safari, IE 9+</span> {
                                range = document.createRange();<span class="hljs-comment">//创建一个选中区域</span> range.selectNodeContents(element);<span class="hljs-comment">//选中节点的内容</span> <span class="hljs-keyword">if</span>(element.innerHTML.length &gt; <span class="hljs-number">0</span>) {
                                  range.setStart(element.childNodes[<span class="hljs-number">0</span>], pos); <span class="hljs-comment">//设置光标起始为指定位置</span> }
                                range.collapse(<span class="hljs-literal">true</span>); <span class="hljs-comment">//设置选中区域为一个点</span> selection = window.getSelection();<span class="hljs-comment">//获取当前选中区域</span> selection.removeAllRanges();<span class="hljs-comment">//移出所有的选中范围</span> selection.addRange(range);<span class="hljs-comment">//添加新建的范围</span> } <span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (document.selection)<span class="hljs-comment">//IE 8 and lower</span> {
                                range = document.body.createTextRange();<span class="hljs-comment">//Create a range (a range is a like the selection but invisible)</span> range.moveToElementText(element);<span class="hljs-comment">//Select the entire contents of the element with the range</span> range.collapse(<span class="hljs-literal">false</span>);<span class="hljs-comment">//collapse the range to the end point. false means collapse to end rather than the start</span> range.select();<span class="hljs-comment">//Select the range (make it the visible selection</span> }
                            }
                            </pre>
                            <h3 id="32-inputtextarea获取光标位置">
                                3.2 input/textarea获取光标位置
                            </h3>
                            <pre class="prettyprint"><span class="hljs-comment">// 设置光标位置</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">setCaretPosition</span><span class="hljs-params">(textDom, pos)</span>{</span> <span class="hljs-keyword">if</span>(textDom.setSelectionRange) { <span class="hljs-comment">// IE Support</span> textDom.focus();
                                    textDom.setSelectionRange(pos, pos);
                                }<span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (textDom.createTextRange) { <span class="hljs-comment">// Firefox support</span> <span class="hljs-keyword">var</span> range = textDom.createTextRange();
                                    range.collapse(<span class="hljs-literal">true</span>);
                                    range.moveEnd(<span class="hljs-string">'character'</span>, pos);
                                    range.moveStart(<span class="hljs-string">'character'</span>, pos);
                                    range.select();
                                }
                            }</pre>
<!---->
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
                img404url:'./../logos/404.jpg',
                cursorUrl1:'/../Cursors/wjcursor.png',  //图片和当前文件在相同路径                

            }
        },
        methods:{
            cursorCatch(e){
                console.log('Fun=cursorCatch.......');
                    var eleP = e.target.parentNode; //获取父级元素
                    var pos = 0;
                    if (e.target.nodeName == "DIV") {
                        console.log('Div.......')
                    pos = getDivPosition(e.target);
                    } else {
                        console.log('Input Or.......')
                    pos = getPosition(e.target);
                    }
                    console.log((eleP.childNodes)[6]);

                    var spanEle = (eleP.childNodes)[6];
                    spanEle.innerText = pos;

                    //input/textarea获取光标位置
                    function getPosition(element) {
                        let cursorPos = 0;
                        if (document.selection) {//IE
                            var selectRange = document.selection.createRange();
                            selectRange.moveStart('character', -element.value.length);
                            cursorPos = selectRange.text.length;
                        } else if (element.selectionStart || element.selectionStart == '0') {
                            cursorPos = element.selectionStart;
                        }
                        return cursorPos;
                    }

                    //可编辑div获取光标位置
                     function getDivPosition(element) {
                      var caretOffset = 0;
                      var doc = element.ownerDocument || element.document;
                      var win = doc.defaultView || doc.parentWindow;
                      var sel;
                      if (typeof win.getSelection != "undefined") {//谷歌、火狐
                        sel = win.getSelection();
                        if (sel.rangeCount > 0) {//选中的区域
                          var range = win.getSelection().getRangeAt(0);
                          var preCaretRange = range.cloneRange();//克隆一个选中区域
                          preCaretRange.selectNodeContents(element);//设置选中区域的节点内容为当前节点
                          preCaretRange.setEnd(range.endContainer, range.endOffset);  //重置选中区域的结束位置
                          caretOffset = preCaretRange.toString().length;
                        }
                      } else if ((sel = doc.selection) && sel.type != "Control") {//IE
                        var textRange = sel.createRange();
                        var preCaretTextRange = doc.body.createTextRange();
                        preCaretTextRange.moveToElementText(element);
                        preCaretTextRange.setEndPoint("EndToEnd", textRange);
                        caretOffset = preCaretTextRange.text.length;
                      }
                      return caretOffset;
                    }
                },
                cursorNode(e){
                    // console.log(e.target.innerText)
                    e.target.style.cursor=e.target.innerText;

                },
                urlcursor(e){
                // e.target.style.cursor='url("/../../Cursors/wjcursor.cur"),pointer';//OK
                // e.target.style.cursor='url("/../Cursors/wjcursor.cur"),pointer';//OK
                // e.target.style.cursor='url("/Cursors/wjcursor.cur"),pointer';//OK
                // e.target.style.cursor='url("./../../Cursors/wjcursor.cur"),pointer';//OK
                // e.target.style.cursor='url("./../Cursors/wjcursor.cur"),pointer';//OK
                e.target.style.cursor='url("./Cursors/wjcursor.cur"),pointer';//OK
                // e.target.style.cursor='crosshair';//OK
                },

        },

        mounted() {
        }
    }
</script>
<style scoped="scoped">
    .edit-div{
        background-color: pink;
        border: 1px solid red;
    }
    .outputpos{
        color:red;
        font-size: 20px;
    }
    .cursorNode{
        background-color:#008080;
        color:#ada;
        margin:10px;
        font-weight: 800;
        font-size: 20px;
        padding:10px;
        line-height: 50px;
    }
</style>