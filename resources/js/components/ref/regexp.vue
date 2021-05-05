<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>正则表达示参考RegExp refernces / <a href="https://www.sojson.com/simple_json.html">Json在线解析格式化</a></h2></div>
                    <div class="card-body">
                        <div class="p">
                            <a href="https://www.sojson.com/regex/generate">sojson.com</a></br>
                            <a href="http://www.5idev.com/p-php_regular_syntax_1.shtml">5idiv.com</a></br>
                            <a href="https://regexr.com/">regexr.com</a></br>
                            <a href="https://regex101.com/">regex101.com/</a></br>
                            <a href="http://www.regexlab.com/zh/deelx/syntax.htm">regexlab.com</a></br>
                            <a href="https://www.runoob.com/regexp/regexp-metachar.html">正则语法</a></br>
                        </div>

                        <hr>

            
            <h1>正则表达式 - <span class="color_h1">元字符</span></h1>

下表包含了元字符的完整列表以及它们在正则表达式上下文中的行为：

<table class="reference notranslate">
<tbody><tr>
    <th width="20%">字符</th>
    <th width="80%">描述</th>
</tr>
<tr>
    <td>\</td>
    <td>将下一个字符标记为一个特殊字符、或一个原义字符、或一个 向后引用、或一个八进制转义符。例如，'n' 匹配字符 "n"。'\n' 匹配一个换行符。序列 '\\' 匹配 "\" 而 "\(" 则匹配 "("。</td>
</tr>
<tr>
    <td>^</td>
    <td>匹配输入字符串的开始位置。如果设置了 RegExp 对象的 Multiline 属性，^ 也匹配 '\n' 或 '\r' 之后的位置。</td>
</tr>
<tr>
    <td>$</td>
    <td>匹配输入字符串的结束位置。如果设置了RegExp 对象的 Multiline 属性，$ 也匹配 '\n' 或 '\r' 之前的位置。</td>
</tr>
<tr>
    <td>*</td>
    <td>匹配前面的子表达式零次或多次。例如，zo* 能匹配 "z" 以及 "zoo"。* 等价于{0,}。</td>
</tr>
<tr>
    <td>+</td>
    <td>匹配前面的子表达式一次或多次。例如，'zo+' 能匹配 "zo" 以及 "zoo"，但不能匹配 "z"。+ 等价于 {1,}。</td>
</tr>
<tr>
    <td>?</td>
    <td>匹配前面的子表达式零次或一次。例如，"do(es)?" 可以匹配 "do" 或 "does" 。? 等价于 {0,1}。</td>
</tr>
<tr>
    <td>{n}</td>
    <td>n 是一个非负整数。匹配确定的 n 次。例如，'o{2}' 不能匹配 "Bob" 中的 'o'，但是能匹配 "food" 中的两个 o。</td>
</tr>
<tr>
    <td>{n,}</td>
    <td>n 是一个非负整数。至少匹配n 次。例如，'o{2,}' 不能匹配 "Bob" 中的 'o'，但能匹配 "foooood" 中的所有 o。'o{1,}' 等价于 'o+'。'o{0,}' 则等价于 'o*'。</td>
</tr>
<tr>
    <td>{n,m}</td>
    <td>m 和 n 均为非负整数，其中n &lt;= m。最少匹配 n 次且最多匹配 m 次。例如，"o{1,3}" 将匹配 "fooooood" 中的前三个 o。'o{0,1}' 等价于 'o?'。请注意在逗号和两个数之间不能有空格。</td>
</tr>
<tr>
    <td>?</td>
    <td>当该字符紧跟在任何一个其他限制符 (*, +, ?, {n}, {n,}, {n,m}) 后面时，匹配模式是非贪婪的。非贪婪模式尽可能少的匹配所搜索的字符串，而默认的贪婪模式则尽可能多的匹配所搜索的字符串。例如，对于字符串 "oooo"，'o+?' 将匹配单个 "o"，而 'o+' 将匹配所有 'o'。</td>
</tr>
<tr>
    <td>.</td>
    <td>匹配除换行符（\n、\r）之外的任何单个字符。要匹配包括 '\n' 在内的任何字符，请使用像"<strong>(.|\n)</strong>"的模式。</td>
</tr>
<tr>
    <td>(pattern)</td>
    <td>匹配 pattern 并获取这一匹配。所获取的匹配可以从产生的 Matches 集合得到，在VBScript 中使用 SubMatches 集合，在JScript 中则使用 $0…$9 属性。要匹配圆括号字符，请使用 '\(' 或 '\)'。</td>
</tr>
<tr>
    <td>(?:pattern)</td>
    <td>匹配 pattern 但不获取匹配结果，也就是说这是一个非获取匹配，不进行存储供以后使用。这在使用 "或" 字符 (|) 来组合一个模式的各个部分是很有用。例如， 'industr(?:y|ies) 就是一个比 'industry|industries' 更简略的表达式。</td>
</tr>
<tr>
    <td>(?=pattern)</td>
    <td>正向肯定预查（look ahead positive assert），在任何匹配pattern的字符串开始处匹配查找字符串。这是一个非获取匹配，也就是说，该匹配不需要获取供以后使用。例如，"Windows(?=95|98|NT|2000)"能匹配"Windows2000"中的"Windows"，但不能匹配"Windows3.1"中的"Windows"。预查不消耗字符，也就是说，在一个匹配发生后，在最后一次匹配之后立即开始下一次匹配的搜索，而不是从包含预查的字符之后开始。</td>
</tr>
<tr>
    <td>(?!pattern)</td>
    <td>正向否定预查(negative assert)，在任何不匹配pattern的字符串开始处匹配查找字符串。这是一个非获取匹配，也就是说，该匹配不需要获取供以后使用。例如"Windows(?!95|98|NT|2000)"能匹配"Windows3.1"中的"Windows"，但不能匹配"Windows2000"中的"Windows"。预查不消耗字符，也就是说，在一个匹配发生后，在最后一次匹配之后立即开始下一次匹配的搜索，而不是从包含预查的字符之后开始。</td>
</tr>
<tr>
<td>(?&lt;=pattern)</td>
<td>反向(look behind)肯定预查，与正向肯定预查类似，只是方向相反。例如，"<code>(?&lt;=95|98|NT|2000)Windows</code>"能匹配"<code>2000Windows</code>"中的"<code>Windows</code>"，但不能匹配"<code>3.1Windows</code>"中的"<code>Windows</code>"。</td>
</tr>
<tr>
<td>(?&lt;!pattern)</td>
<td>反向否定预查，与正向否定预查类似，只是方向相反。例如"<code>(?&lt;!95|98|NT|2000)Windows</code>"能匹配"<code>3.1Windows</code>"中的"<code>Windows</code>"，但不能匹配"<code>2000Windows</code>"中的"<code>Windows</code>"。</td>
</tr>
<tr>
    <td>x|y</td>
    <td>匹配 x 或 y。例如，'z|food' 能匹配 "z" 或 "food"。'(z|f)ood' 则匹配 "zood" 或 "food"。</td>
</tr>
<tr>
    <td>[xyz]</td>
    <td>字符集合。匹配所包含的任意一个字符。例如， '[abc]' 可以匹配 "plain" 中的 'a'。</td>
</tr>
<tr>
    <td>[^xyz]</td>
    <td>负值字符集合。匹配未包含的任意字符。例如， '[^abc]' 可以匹配 "plain" 中的'p'、'l'、'i'、'n'。</td>
</tr>
<tr>
    <td>[a-z]</td>
    <td>字符范围。匹配指定范围内的任意字符。例如，'[a-z]' 可以匹配 'a' 到 'z' 范围内的任意小写字母字符。</td>
</tr>
<tr>
    <td>[^a-z]</td>
    <td>负值字符范围。匹配任何不在指定范围内的任意字符。例如，'[^a-z]' 可以匹配任何不在 'a' 到 'z' 范围内的任意字符。</td>
</tr>
<tr>
    <td>\b</td>
    <td>匹配一个单词边界，也就是指单词和空格间的位置。例如， 'er\b' 可以匹配"never" 中的 'er'，但不能匹配 "verb" 中的 'er'。</td>
</tr>
<tr>
    <td>\B</td>
    <td>匹配非单词边界。'er\B' 能匹配 "verb" 中的 'er'，但不能匹配 "never" 中的 'er'。</td>
</tr>
<tr>
    <td>\cx</td>
    <td>匹配由 x 指明的控制字符。例如， \cM 匹配一个 Control-M 或回车符。x 的值必须为 A-Z 或 a-z 之一。否则，将 c 视为一个原义的 'c' 字符。</td>
</tr>
<tr>
    <td>\d</td>
    <td>匹配一个数字字符。等价于 [0-9]。</td>
</tr>
<tr>
    <td>\D</td>
    <td>匹配一个非数字字符。等价于 [^0-9]。</td>
</tr>
<tr>
    <td>\f</td>
    <td>匹配一个换页符。等价于 \x0c 和 \cL。</td>
</tr>
<tr>
    <td>\n</td>
    <td>匹配一个换行符。等价于 \x0a 和 \cJ。</td>
</tr>
<tr>
    <td>\r</td>
    <td>匹配一个回车符。等价于 \x0d 和 \cM。</td>
</tr>
<tr>
    <td>\s</td>
    <td>匹配任何空白字符，包括空格、制表符、换页符等等。等价于 [ \f\n\r\t\v]。</td>
</tr>
<tr>
    <td>\S</td>
    <td>匹配任何非空白字符。等价于 [^ \f\n\r\t\v]。</td>
</tr>
<tr>
    <td>\t</td>
    <td>匹配一个制表符。等价于 \x09 和 \cI。</td>
</tr>
<tr>
    <td>\v</td>
    <td>匹配一个垂直制表符。等价于 \x0b 和 \cK。</td>
</tr>
<tr>
    <td>\w</td>
    <td>匹配字母、数字、下划线。等价于'[A-Za-z0-9_]'。</td>
</tr>
<tr>
    <td>\W</td>
    <td>匹配非字母、数字、下划线。等价于 '[^A-Za-z0-9_]'。</td>
</tr>
<tr>
    <td>\xn</td>
    <td>匹配 n，其中 n 为十六进制转义值。十六进制转义值必须为确定的两个数字长。例如，'\x41' 匹配 "A"。'\x041' 则等价于 '\x04' &amp; "1"。正则表达式中可以使用 ASCII 编码。</td>
</tr>
<tr>
    <td>\num</td>
    <td>匹配 num，其中 num 是一个正整数。对所获取的匹配的引用。例如，'(.)\1' 匹配两个连续的相同字符。</td>
</tr>
<tr>
    <td>\n</td>
    <td>标识一个八进制转义值或一个向后引用。如果 \n 之前至少 n 个获取的子表达式，则 n 为向后引用。否则，如果 n 为八进制数字 (0-7)，则 n 为一个八进制转义值。</td>
</tr>
<tr>
    <td>\nm</td>
    <td>标识一个八进制转义值或一个向后引用。如果 \nm 之前至少有 nm 个获得子表达式，则 nm 为向后引用。如果 \nm 之前至少有 n 个获取，则 n 为一个后跟文字 m 的向后引用。如果前面的条件都不满足，若 n 和 m 均为八进制数字 (0-7)，则 \nm 将匹配八进制转义值 nm。</td>
</tr>
<tr>
    <td>\nml</td>
    <td>如果 n 为八进制数字 (0-3)，且 m 和 l 均为八进制数字 (0-7)，则匹配八进制转义值 nml。</td>
</tr>
<tr>
    <td>\un</td>
    <td>匹配 n，其中 n 是一个用四个十六进制数字表示的 Unicode 字符。例如， \u00A9 匹配版权符号 (?)。</td>
</tr>
</tbody></table>            <!-- 其他扩展 -->
                        
            
                        <hr>
<h1>正则表达式 - 修饰符（标记）</h1>
                        <table class="reference">
    <tbody><tr><th>修饰符</th><th>含义</th><th>描述</th></tr>
    <tr><td><span class="imp">i</span></td><td>ignore - 不区分大小写</td><td>将匹配设置为不区分大小写，搜索时不区分大小写: A 和 a 没有区别。</td></tr>
    <tr><td><span class="imp">g</span></td><td>global - 全局匹配 </td><td>查找所有的匹配项。</td></tr>
    <tr><td><span class="imp">m</span></td><td>multi line - 多行匹配</td><td>使边界字符 <span class="marked">^</span> 和 <span class="marked">$</span> 匹配每一行的开头和结尾，记住是多行，而不是整个字符串的开头和结尾。</td></tr>
    <tr><td><span class="imp">s</span></td><td>特殊字符圆点 <span class="marked">.</span> 中包含换行符 <span class="marked">\n</span></td><td>默认情况下的圆点 <span class="marked">.</span> 是 匹配除换行符 <span class="marked">\n</span> 之外的任何字符，加上 <span class="marked">s</span> 修饰符之后, <span class="marked">.</span> 中包含换行符 \n。</td></tr>
  </tbody></table>
                        <hr>

                        <div class="article-body">
        
            <div class="article-intro" id="content">
            
            <h1>正则表达式 - <span class="color_h1">运算符优先级</span></h1>

<p>正则表达式从左到右进行计算，并遵循优先级顺序，这与算术表达式非常类似。</p>
<p>相同优先级的从左到右进行运算，不同优先级的运算先高后低。下表从最高到最低说明了各种正则表达式运算符的优先级顺序：</p>

<table class="reference notranslate">
<tbody><tr>
    <th width="20%">运算符</th>
    <th width="80%">描述</th>
</tr>
<tr>
    <td>\</td>
    <td>转义符</td>
</tr>
<tr>
    <td>(), (?:), (?=), []</td>
    <td>圆括号和方括号</td>
</tr>
<tr>
    <td>*, +, ?, {n}, {n,}, {n,m}</td>
    <td>限定符</td>
</tr>
<tr>
    <td>^, $, \任何元字符、任何字符</td>
    <td>定位点和序列（即：位置和顺序）</td>
</tr>
<tr>
    <td>|</td>
    <td>
    替换，"或"操作<br>
    字符具有高于替换运算符的优先级，使得"m|food"匹配"m"或"food"。若要匹配"mood"或"food"，请使用括号创建子表达式，从而产生"(m|f)ood"。
    </td>
</tr>
</tbody></table>            <!-- 其他扩展 -->
                        
            </div>
            
        </div>
                        <hr>

                        <div class="article-intro" id="content">
            
            <h1>正则表达式 - <span class="color_h1">匹配规则</span></h1>

<h2 class="tutheader">基本模式匹配</h2>
<p>一切从最基本的开始。模式，是正则表达式最基本的元素，它们是一组描述字符串特征的字符。模式可以很简单，由普通的字符串组成，也可以非常复杂，往往用特殊的字符表示一个范围内的字符、重复出现，或表示上下文。例如：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">^</span><span class="pln">once</span></pre>
<p>这个模式包含一个特殊的字符^，表示该模式只匹配那些以once开头的字符串。例如该模式与字符串"once upon a time"匹配，与"There once was a man from NewYork"不匹配。正如如^符号表示开头一样，$符号用来匹配那些以给定模式结尾的字符串。</p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">bucket$</span></pre>
<p>这个模式与"Who kept all of this cash in a bucket"匹配，与"buckets"不匹配。字符 <span class="marked">^</span> 和 <span class="marked">$</span> 同时使用时，表示精确匹配（字符串与模式一样）。例如：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">^</span><span class="pln">bucket$</span></pre>
<p>只匹配字符串"bucket"。如果一个模式不包括^和$，那么它与任何包含该模式的字符串匹配。例如：模式</p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">once</span></pre>
<p>与字符串</p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">There</span><span class="pln"> once was a man </span><span class="kwd">from</span><span class="pln"> </span><span class="typ">NewYork</span><span class="pln">
</span><span class="typ">Who</span><span class="pln"> kept all of his cash </span><span class="kwd">in</span><span class="pln"> a bucket</span><span class="pun">.</span></pre>
<p>是匹配的。</p>
<p>在该模式中的字母(o-n-c-e)是字面的字符，也就是说，他们表示该字母本身，数字也是一样的。其他一些稍微复杂的字符，如标点符号和白字符（空格、制表符等），要用到转义序列。所有的转义序列都用反斜杠(\)打头。制表符的转义序列是 <span class="marked">\t</span>。所以如果我们要检测一个字符串是否以制表符开头，可以用这个模式：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">^</span><span class="pln">\t </span></pre>
<p>类似的，用\n表示"新行"，\r表示回车。其他的特殊符号，可以用在前面加上反斜杠，如反斜杠本身用\\表示，句号.用\.表示，以此类推。</p>

<h2 class="tutheader">字符簇</h2>
<p>在INTERNET的程序中，正则表达式通常用来验证用户的输入。当用户提交一个FORM以后，要判断输入的电话号码、地址、EMAIL地址、信用卡号码等是否有效，用普通的基于字面的字符是不够的。</p>
<p>所以要用一种更自由的描述我们要的模式的办法，它就是字符簇。要建立一个表示所有元音字符的字符簇，就把所有的元音字符放在一个方括号里：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="typ">AaEeIiOoUu</span><span class="pun">]</span></pre>
<p>这个模式与任何元音字符匹配，但只能表示一个字符。用连字号可以表示一个字符的范围，如：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">a</span><span class="pun">-</span><span class="pln">z</span><span class="pun">]</span><span class="pln"> </span><span class="com">//匹配所有的小写字母 </span><span class="pln">
</span><span class="pun">[</span><span class="pln">A</span><span class="pun">-</span><span class="pln">Z</span><span class="pun">]</span><span class="pln"> </span><span class="com">//匹配所有的大写字母 </span><span class="pln">
</span><span class="pun">[</span><span class="pln">a</span><span class="pun">-</span><span class="pln">zA</span><span class="pun">-</span><span class="pln">Z</span><span class="pun">]</span><span class="pln"> </span><span class="com">//匹配所有的字母 </span><span class="pln">
</span><span class="pun">[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]</span><span class="pln"> </span><span class="com">//匹配所有的数字 </span><span class="pln">
</span><span class="pun">[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pln">\.\-</span><span class="pun">]</span><span class="pln"> </span><span class="com">//匹配所有的数字，句号和减号 </span><span class="pln">
</span><span class="pun">[</span><span class="pln"> \f\r\t\n</span><span class="pun">]</span><span class="pln"> </span><span class="com">//匹配所有的白字符</span></pre>
<p>同样的，这些也只表示一个字符，这是一个非常重要的。如果要匹配一个由一个小写字母和一位数字组成的字符串，比如"z2"、"t6"或"g7"，但不是"ab2"、"r2d3" 或"b52"的话，用这个模式：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">^[</span><span class="pln">a</span><span class="pun">-</span><span class="pln">z</span><span class="pun">][</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]</span><span class="pln">$</span></pre>
<p>尽管[a-z]代表26个字母的范围，但在这里它只能与第一个字符是小写字母的字符串匹配。</p>
<p>前面曾经提到^表示字符串的开头，但它还有另外一个含义。当在一组方括号里使用 <span class="marked">^</span> 时，它表示"<strong>非</strong>"或"<strong>排除</strong>"的意思，常常用来剔除某个字符。还用前面的例子，我们要求第一个字符不能是数字：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">^[^</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">][</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]</span><span class="pln">$</span></pre>
<p>这个模式与"&amp;5"、"g7"及"-2"是匹配的，但与"12"、"66"是不匹配的。下面是几个排除特定字符的例子：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">[^</span><span class="pln">a</span><span class="pun">-</span><span class="pln">z</span><span class="pun">]</span><span class="pln"> </span><span class="com">//除了小写字母以外的所有字符 </span><span class="pln">
</span><span class="pun">[^</span><span class="pln">\\\/\^</span><span class="pun">]</span><span class="pln"> </span><span class="com">//除了(\)(/)(^)之外的所有字符 </span><span class="pln">
</span><span class="pun">[^</span><span class="pln">\"\'</span><span class="pun">]</span><span class="pln"> </span><span class="com">//除了双引号(")和单引号(')之外的所有字符</span></pre>
<p>特殊字符 <span class="marked">.</span>(点，句号)在正则表达式中用来表示除了"新行"之外的所有字符。所以模式 <span class="marked">^.5$</span> 与任何两个字符的、以数字5结尾和以其他非"新行"字符开头的字符串匹配。模式 <span class="marked">.</span> 可以匹配任何字符串，除了空串和只包括一个<strong>"新行"</strong>的字符串。</p>
<p>PHP的正则表达式有一些内置的通用字符簇，列表如下：</p>
<table class="reference notranslate">
<tbody><tr>
    <th width="20%">字符簇</th>
    <th width="80%">描述</th>
</tr>
<tr>
    <td>[[:alpha:]]</td>
    <td>任何字母</td>
</tr>
<tr>
    <td>[[:digit:]]</td>
    <td>任何数字</td>
</tr>
<tr>
    <td>[[:alnum:]]</td>
    <td>任何字母和数字</td>
</tr>
<tr>
    <td>[[:space:]]</td>
    <td>任何空白字符</td>
</tr>
<tr>
    <td>[[:upper:]]</td>
    <td>任何大写字母</td>
</tr>
<tr>
    <td>[[:lower:]]</td>
    <td>任何小写字母</td>
</tr>
<tr>
    <td>[[:punct:]]</td>
    <td>任何标点符号</td>
</tr>
<tr>
    <td>[[:xdigit:]]</td>
    <td>任何16进制的数字，相当于[0-9a-fA-F]</td>
</tr>
</tbody></table>
<br>

<h2 class="tutheader">确定重复出现</h2>
<p>到现在为止，你已经知道如何去匹配一个字母或数字，但更多的情况下，可能要匹配一个单词或一组数字。一个单词有若干个字母组成，一组数字有若干个单数组成。跟在字符或字符簇后面的花括号({})用来确定前面的内容的重复出现的次数。</p>
<table class="reference notranslate">
<tbody><tr>
    <th width="20%">字符簇</th>
    <th width="80%">描述</th>
</tr>
<tr>
    <td>^[a-zA-Z_]$</td>
    <td>所有的字母和下划线</td>
</tr>
<tr>
    <td>^[[:alpha:]]{3}$</td>
    <td>所有的3个字母的单词</td>
</tr>
<tr>
    <td>^a$</td>
    <td>字母a</td>
</tr>
<tr>
    <td>^a{4}$</td>
    <td>aaaa</td>
</tr>
<tr>
    <td>^a{2,4}$</td>
    <td>aa,aaa或aaaa</td>
</tr>
<tr>
    <td>^a{1,3}$</td>
    <td>a,aa或aaa</td>
</tr>
<tr>
    <td>^a{2,}$</td>
    <td>包含多于两个a的字符串</td>
</tr>
<tr>
    <td>^a{2,}</td>
    <td>如：aardvark和aaab，但apple不行</td>
</tr>
<tr>
    <td>a{2,}</td>
    <td>如：baad和aaa，但Nantucket不行</td>
</tr>
<tr>
    <td>\t{2}</td>
    <td>两个制表符</td>
</tr>
<tr>
    <td>.{2}</td>
    <td>所有的两个字符</td>
</tr>
</tbody></table>
<p>这些例子描述了花括号的三种不同的用法。一个数字 <span class="marked">{x} </span>的意思是<strong>前面的字符或字符簇只出现x次</strong> ；一个数字加逗号 <span class="marked">{x,}</span> 的意思是<strong>前面的内容出现x或更多的次数</strong> ；两个数字用逗号分隔的数字 <span class="marked">{x,y}</span> 表示 <strong>前面的内容至少出现x次，但不超过y次</strong>。我们可以把模式扩展到更多的单词或数字：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">^[</span><span class="pln">a</span><span class="pun">-</span><span class="pln">zA</span><span class="pun">-</span><span class="pln">Z0</span><span class="pun">-</span><span class="lit">9</span><span class="pln">_</span><span class="pun">]{</span><span class="lit">1</span><span class="pun">,}</span><span class="pln">$      </span><span class="com">// 所有包含一个以上的字母、数字或下划线的字符串 </span><span class="pln">
</span><span class="pun">^[</span><span class="lit">1</span><span class="pun">-</span><span class="lit">9</span><span class="pun">][</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]{</span><span class="lit">0</span><span class="pun">,}</span><span class="pln">$        </span><span class="com">// 所有的正整数 </span><span class="pln">
</span><span class="pun">^</span><span class="pln">\-</span><span class="pun">{</span><span class="lit">0</span><span class="pun">,</span><span class="lit">1</span><span class="pun">}[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]{</span><span class="lit">1</span><span class="pun">,}</span><span class="pln">$      </span><span class="com">// 所有的整数 </span><span class="pln">
</span><span class="pun">^[-]?[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]+</span><span class="pln">\.</span><span class="pun">?[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]+</span><span class="pln">$   </span><span class="com">// 所有的浮点数</span></pre>
<p>最后一个例子不太好理解，是吗？这么看吧：以一个可选的负号 (<span class="marked">[-]?</span>) 开头 (<span class="marked">^</span>)、跟着1个或更多的数字(<span class="marked">[0-9]+</span>)、和一个小数点(<span class="marked">\.</span>)再跟上1个或多个数字<span class="marked">([0-9]+</span>)，并且后面没有其他任何东西(<span class="marked">$</span>)。下面你将知道能够使用的更为简单的方法。</p>
<p>特殊字符 <span class="marked">?</span> 与 <span class="marked">{0,1}</span> 是相等的，它们都代表着： <strong>0个或1个前面的内容</strong> 或 <strong>前面的内容是可选的</strong> 。所以刚才的例子可以简化为：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">^</span><span class="pln">\-</span><span class="pun">?[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]{</span><span class="lit">1</span><span class="pun">,}</span><span class="pln">\.</span><span class="pun">?[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]{</span><span class="lit">1</span><span class="pun">,}</span><span class="pln">$</span></pre>
<p>特殊字符 <span class="marked">*</span> 与 <span class="marked">{0,}</span> 是相等的，它们都代表着 <strong>0 个或多个前面的内容</strong> 。最后，字符 <span class="marked">+</span> 与 <span class="marked">{1,}</span> 是相等的，表示 <strong>1 个或多个前面的内容</strong> ，所以上面的4个例子可以写成：</p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">^[</span><span class="pln">a</span><span class="pun">-</span><span class="pln">zA</span><span class="pun">-</span><span class="pln">Z0</span><span class="pun">-</span><span class="lit">9</span><span class="pln">_</span><span class="pun">]+</span><span class="pln">$      </span><span class="com">// 所有包含一个以上的字母、数字或下划线的字符串 </span><span class="pln">
</span><span class="pun">^[</span><span class="lit">1</span><span class="pun">-</span><span class="lit">9</span><span class="pun">][</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]*</span><span class="pln">$        </span><span class="com">// 所有的正整数 </span><span class="pln">
</span><span class="pun">^</span><span class="pln">\-</span><span class="pun">?[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]+</span><span class="pln">$          </span><span class="com">// 所有的整数 </span><span class="pln">
</span><span class="pun">^[-]?[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]+(</span><span class="pln">\.</span><span class="pun">[</span><span class="lit">0</span><span class="pun">-</span><span class="lit">9</span><span class="pun">]+)?</span><span class="pln">$ </span><span class="com">// 所有的浮点数</span></pre>
<p>当然这并不能从技术上降低正则表达式的复杂性，但可以使它们更容易阅读。</p>           <!-- 其他扩展 -->
                        
            </div>
                        <hr>
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
                                <td>搜索结果站点匹配斜杠</td>
                                <td>\w+.\w+\.{1}+\w+\/</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            
                            </tbody>
                        </table>
                        
                    </div>
                    <hr>
                    <div>
                        <h3>在SublimeText中使用正则匹配文件名</h3>
                        <H4>CMD中使用cd到相应目录中用dir列出目录中的所有文件，把文件名复制到SublimeText中</H4>
                        <p>匹配<b>任意字符用包括非打印字符<font color="red" style="background-color: yellow;">/.*/</font>不起作用</b>要使用正则表达示<font color="red" style="background-color: yellow;">/2021\/03\/[\s\S]{28}/</font>, <font color="red">[\s\S]{28}</font>代表匹配28个任意字符</p>
                        <p><font color="red" style="background-color: yellow;border:1px solid blue">2021/03/29  09:10         2,460,275 </font>34000095700_chassis_lower_part_12.pdf</p>

                        <pre>
                            <code>
<font color="red" style="background-color: yellow;border:1px solid blue">2021/03/29  09:10         2,460,275 </font>34000095700_chassis_lower_part_12.pdf
<font color="red" style="background-color: yellow;border:1px solid blue">2021/03/29  09:10         2,123,708 </font>34000095800_chassis_upper_part_m_11.pdf
<font color="red" style="background-color: yellow;border:1px solid blue">2021/03/29  09:10           420,924 </font>34000095900_clip_piercer_supp_04.pdf
<font color="red" style="background-color: yellow;border:1px solid blue">2021/03/29  09:10           564,566 </font>34000096100_sliding_protection_08.pdf
<font color="red" style="background-color: yellow;border:1px solid blue">2021/03/29  09:10           930,140 </font>34000096500_seat_gasket_holder_05.pdf
<font color="red" style="background-color: yellow;border:1px solid blue">2021/03/29  09:10           673,277 </font>34000097000_lateral_guide_02.pdf
                            </code>
                        </pre>

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
