<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">CSS3常用的几种颜色渐变模式</div>
                    <div class="card-body">
                        <div class="box">  
                            <div id="content">
                        <p><strong><font color="#ff0000">一、线性渐变：linear-gradient<br></font></strong></p>
<p><strong>语法：</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;linear-gradient&gt; = linear-gradient([ [ &lt;angle&gt; | to &lt;side-or-corner] ,]? &lt;color-start&gt;[, &lt;color-end&gt;]+)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;side-or-corner&gt; = [left | right] || [top | bottom]<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;color-start|end&gt; = &lt;color&gt;[ &lt;length&gt;|&lt;percentage&gt;]?<br></p>
<p><strong>下述值用来表示渐变的方向，可以使用角度或者关键字来设置：</strong><br></p>
<p>&nbsp;&nbsp;&nbsp; &lt;angle&gt;：用角度值指定渐变的方向（或角度）。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to left：设置渐变为从右到左。相当于: 270deg<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to right：设置渐变从左到右。相当于: 90deg<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to top：设置渐变从下到上。相当于: 0deg<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to bottom：设置渐变从上到下。相当于: 180deg。这是默认值，等同于留空不写。<br></p>
<p>&nbsp;&nbsp;&nbsp; &lt;color-start|end&gt; 用于指定渐变的起止颜色：<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;color&gt;：指定颜色。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;length&gt;：用长度值指定起止色位置。不允许负值<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;percentage&gt;：用百分比指定起止色位置。<br></p>
<p><strong>示例：</strong></p>
<div>
<div>
    <div>
    <div>
            <div class='ediv' id='LinearStartToEnd'></div>
            <div class='ediv' id='LinearPercentage'></div>
            <div class='ediv' id='LinearAnglePercentage'></div>
            <div class='ediv' id='LinearAngle'></div>
            <div class='ediv' id='LinearTopRight'></div>
            <div class='ediv' id='LinearStartToEnd'></div>
            <div class='ediv' id='LinearPercentage'></div>
            <div class='ediv' id='LinearAnglePercentage'></div>
            <div class='ediv' id='LinearAngle'></div>
            <div class='ediv' id='LinearTopRight'></div>
            <p></p>


    </div><p></p>
<table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div><div>18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div><div>24</div><div>25</div><div>26</div></td><td><div class="container"><div><code>div {&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>width</code><code>: </code><code >200px</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>height</code><code>: </code><code >100px</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>margin</code><code>: </code><code >10px</code> <code >5px</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>border</code><code>: </code><code >1px</code> <code >solid</code> <code >#ddd000</code><code>;&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#LinearStartToEnd {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>background</code><code>: linear-gradient(</code><code >#ff0000</code><code>, </code><code >#00ff00</code><code>);&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#LinearPercentage {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>background</code><code>: linear-gradient(</code><code >#0000ff</code><code>, </code><code >#ff0000</code> <code >52%</code><code>, </code><code >#00ff00</code><code>);&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#LinearAnglePercentage {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>background</code><code>: linear-gradient(</code><code >90</code><code>deg, </code><code >#ff0000</code> <code >20%</code><code>, </code><code >#00ff00</code> <code >50%</code><code>, </code><code >#000000</code> <code >80%</code><code>);&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#LinearAngle {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>background</code><code>: linear-gradient(</code><code >30</code><code>deg, </code><code >#ffff00</code> <code >30%</code><code>, </code><code >#ff0000</code><code>, </code><code >#00ff00</code><code>);&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#LinearTopRight {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>background</code><code>: linear-gradient(to </code><code >right</code> <code >top</code><code>, </code><code >#00ff00</code><code>, </code><code >#ff0000</code> <code >50%</code><code>, </code><code >#0000ff</code><code>);&nbsp; </code></div><div><code>}</code></div></div></td></tr></tbody></table></div></div>
</div>
<p><strong><font color="#ff0000">二、径向渐变：radial-gradient</font></strong><br></p>
<p><strong>语法：<br></strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; &lt;position&gt; = [ &lt;length&gt;① | &lt;percentage&gt;① | left | center① | right ]? [ &lt;length&gt;② | &lt;percentage&gt;② | top | center② | bottom ]?<br>&nbsp;&nbsp;&nbsp;&nbsp; &lt;shape&gt; = circle | ellipse<br>&nbsp;&nbsp;&nbsp;&nbsp; &lt;size&gt; = &lt;extent-keyword&gt;|[&lt;circle-size&gt;||&lt;ellipse-size&gt;]<br>&nbsp;&nbsp;&nbsp;&nbsp; &lt;extent-keyword&gt; = closest-side | closest-corner | farthest-side | farthest-corner<br>&nbsp;&nbsp;&nbsp;&nbsp; &lt;circle-size&gt; = &lt;length&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp; &lt;ellipse-size&gt; = [ &lt;length&gt;| &lt;percentage&gt; ]{2}<br>&nbsp;&nbsp;&nbsp;&nbsp; &lt;shape-size&gt; = &lt;length&gt;| &lt;percentage&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp; &lt;radial-gradient&gt; = radial-gradient([ [ &lt;shape&gt;|| &lt;size&gt; ] [ at &lt;position&gt; ]? , | at &lt;position&gt; , ]?&lt;color-start&gt;[[ , &lt;color-end&gt;]]+)<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;position&gt; 确定圆心的位置。如果提供2个参数，第一个表示横坐标，第二个表示纵坐标；如果只提供一个，第二值默认为50%，即center<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;length&gt;①：用长度值指定径向渐变圆心的横坐标值。可以为负值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;percentage&gt;①：用百分比指定径向渐变圆心的横坐标值。可以为负值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;length&gt;②：用长度值指定径向渐变圆心的纵坐标值。可以为负值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;percentage&gt;②：用百分比指定径向渐变圆心的纵坐标值。可以为负值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; center①：设置中间为径向渐变圆心的横坐标值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; center②：设置中间为径向渐变圆心的纵坐标值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; left：设置左边为径向渐变圆心的横坐标值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; right：设置右边为径向渐变圆心的横坐标值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; top：设置顶部为径向渐变圆心的纵坐标值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; bottom：设置底部为径向渐变圆心的纵坐标值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;shape&gt; 确定圆的类型<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; circle：指定圆形的径向渐变<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ellipse：指定椭圆形的径向渐变。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;extent-keyword&gt; circle | ellipse 都接受该值作为 size。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; closest-side：指定径向渐变的半径长度为从圆心到离圆心最近的边。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; closest-corner：指定径向渐变的半径长度为从圆心到离圆心最近的角。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; farthest-side：指定径向渐变的半径长度为从圆心到离圆心最远的边。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; farthest-corner：指定径向渐变的半径长度为从圆心到离圆心最远的角。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;circle-size&gt; circle 接受该值作为 size。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;length&gt;：用长度值指定正圆径向渐变的半径长度。不允许负值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;ellipse-size&gt; ellipse 接受该值作为 size。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;length&gt;：用长度值指定椭圆径向渐变的横向或纵向半径长度。不允许负值。<br></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;percentage&gt;：用百分比指定椭圆径向渐变的横向或纵向半径长度。不允许负值。<br></p>
<p><strong>示例：</strong></p>
<div>
    <div class='ediv' id='RadialCenterCircle'></div>
    <div class='ediv' id='RadialClosestSide'></div>
    <div class='ediv' id='RadialFarthestSide'></div>
    <div class='ediv' id='RadialRightTop'></div>
    <div class='ediv' id='RadialRadiusCenter'></div>
    <div class='ediv' id='RadialGroup'></div>
</div><br>
<div>
<div style="display: block;clear:both"><div><table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div><div>18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div><div>24</div><div>25</div><div>26</div></td><td><div class="container"><div><code >#RadialCenterCircle {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code >float:left;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code >background: radial-gradient(circle at center, #ff0000, #ffff00, #00ffff);&nbsp; </code></div><div><code >}&nbsp; </code></div><div><code >#RadialClosestSide {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code >float:left;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code >background: radial-gradient(circle closest-side, #ff0000, #00ff00, #ffff00);&nbsp; </code></div><div><code >}&nbsp; </code></div><div><code >#RadialFarthestSide {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code >float:left;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code >background: radial-gradient(farthest-side, #ff0000 20%, #ffff00 60%, #00ff00 80%);&nbsp; </code></div><div><code >}&nbsp; </code></div><div><code >#RadialRightTop {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code >float:left;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code >background: radial-gradient(at right top, #ff0000, #ffff00, #00ff00);&nbsp; </code></div><div><code >}&nbsp; </code></div><div><code >#RadialRadiusCenter {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code >float:left;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code >background: radial-gradient(farthest-side at top right, #ff0000, #ffff00, #01fefe);&nbsp; </code></div><div><code >}&nbsp; </code></div><div><code >#RadialGroup {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code >float:left;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code >background:&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code >radial-gradient(farthest-side at top right, #ff0000, #ffff00, #009f00, transparent),&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code >radial-gradient(60px at top left, #ff0000, #ffff00, #00ff0e);&nbsp; </code></div><div><code >}</code></div></div></td></tr></tbody></table></div></div></div>
<p><strong><font color="#ff0000">三、重复的线性渐变：repeating-linear-gradient</font></strong><br></p>
<p>语法和参数类似线性渐变，这里不在赘述。详情请参考CSS手册。<br></p>
<p><strong>示例：</strong></p>
<div>
    <div class='ediv' id='RepeatingLinearPercentage'></div>
    <div class='ediv' id='RepeatingLinearRight'></div>
    <div class='ediv' id='RepeatingLinearAngle'></div>
    <div class='ediv' id='RepeatingLinearBottomLeft'></div>

</div><p></p><div>
<div><div style="display: block;clear:both"><table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div></td><td><div class="container"><div><code>#RepeatingLinearPercentage{&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background</code><code>: repeating-linear-gradient(</code><code >#ff0000</code><code>, </code><code >#00ff00</code> <code >10%</code><code>, </code><code >#000000</code> <code >15%</code><code>);&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#RepeatingLinearRight {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background</code><code>: repeating-linear-gradient(to </code><code >right</code><code>, </code><code >#ff0000</code><code>, </code><code >#00ff00</code> <code >10%</code><code>, </code><code >#000000</code> <code >15%</code><code>);&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#RepeatingLinearAngle {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background</code><code>: repeating-linear-gradient(</code><code >45</code><code>deg, </code><code >#ff0000</code><code>, </code><code >#00ff00</code> <code >10%</code><code>, </code><code >#0000ff</code> <code >15%</code><code>);&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#RepeatingLinearBottomLeft {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background</code><code>: repeating-linear-gradient(to </code><code >bottom</code> <code >left</code><code>, </code><code >#00ffff</code><code>, </code><code >#ff0000</code> <code >10%</code><code>, </code><code >#00ff00</code> <code >15%</code><code>);&nbsp; </code></div><div><code>}</code></div></div></td></tr></tbody></table></div></div>
</div>
<p><strong><font color="#ff0000">四、重复的径向渐变：repeating-radial-gradient</font></strong><br></p>
<p>语法和参数类似径向渐变，这里不在赘述。详情请参考CSS手册。<br></p>
<p><strong>示例：</strong><br></p>
<div>

    <div class='ediv' id='RepeatingRadialCircle'></div>
    <div class='ediv' id='RepeatingRadialTopLeft'></div>
    <div class='ediv' id='RepeatingRadialClosestCorner'></div>
</div><br><div><div>
    <!-- div强制换行的办法 style="display: block;clear:both"-->
<div><div style="display: block;clear:both"><table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div></td><td><div class="container"><div><code>#RepeatingRadialCircle {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background</code><code>: repeating-radial-gradient(</code><code >circle</code><code>, </code><code >#ff0000</code> <code >0</code><code>, </code><code >#00ff00</code> <code >10%</code><code>, </code><code >#0000ff</code> <code >15%</code><code>);&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#RepeatingRadialTopLeft {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background</code><code>: repeating-radial-gradient(at </code><code >top</code> <code >left</code><code>, </code><code >#ff0000</code><code>, </code><code >#00ff00</code> <code >10%</code><code>, </code><code >#0de0f0</code> <code >15%</code><code>, </code><code >#ffff00</code> <code >20%</code><code>, </code><code >#000000</code> <code >25%</code><code>);&nbsp; </code></div><div><code>}&nbsp; </code></div><div><code>#RepeatingRadialClosestCorner {&nbsp; </code></div><div><code>&nbsp;&nbsp;</code><code>float</code><code>:</code><code >left</code><code>;&nbsp; </code></div><div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background</code><code>: repeating-radial-gradient(</code><code >circle</code> <code>closest-corner at </code><code >20px</code> <code >50px</code><code>, </code><code >#00ff00</code><code>, </code><code >#ff0000</code> <code >10%</code><code>, </code><code >#00ffff</code> <code >20%</code><code>, </code><code >#ffff00</code> <code >30%</code><code>, </code><code >#ff00ff</code> <code >40%</code><code>);&nbsp; </code></div><div><code>}</code></div></div></td></tr></tbody></table></div></div>
</div>
<p><strong>完整的例子：</strong></p>

<div>
    <!-- 指定线性渐变起止色 --> 
<div class='ediv' id="LinearStartToEnd"></div> 
<!-- 指定线性渐变起止色位置 --> 
<div class='ediv' id="LinearPercentage"></div> 
<!-- 指定线性渐变颜色渐变方向和起止色位置 --> 
<div class='ediv' id="LinearAnglePercentage"></div> 
<!-- 指定线性渐变颜色渐变方向 --> 
<div class='ediv' id="LinearAngle"></div> 
<!-- 设置渐变从右上到左下 --> 
<div class='ediv' id="LinearTopRight"></div> 
   
<!-- 浮动Div换行，此处指定Div宽高和边界，是为了覆盖前面定义的Div统一CSS样式， 
 可以尝试去掉指定的Div宽高和边界，看看效果 --> 
<div style="width:0; height:0; border:none; clear:both"></div> 
<!-- 以中心点为圆心的圆形径向渐变 --> 
<div class='ediv' id="RadialCenterCircle"></div> 
<!-- 径向渐变半径长度：圆心到离圆心最近边的长度 --> 
<div class='ediv' id="RadialClosestSide"></div> 
<!-- 径向渐变半径长度：圆心到离圆心最远边的长度 --> 
<div class='ediv' id="RadialFarthestSide"></div> 
<!-- 左边为径向渐变圆心的横坐标值,顶边为径向渐变圆心的纵坐标值 --> 
<div class='ediv' id="RadialRightTop"></div> 
<!-- 同时指定径向渐变的圆心和半径 --> 
<div class='ediv' id="RadialRadiusCenter"></div> 
<!-- 径向渐变组合 --> 
<div class='ediv' id="RadialGroup"></div> 
   
<div style="width:0; height:0; border:none; clear:both"></div> 
<!-- 指定颜色起止色位置的重复线性渐变 --> 
<div class='ediv' id="RepeatingLinearPercentage"></div> 
<!-- 从左到右渐变的重复线性渐变 --> 
<div class='ediv' id="RepeatingLinearRight"></div> 
<!-- 渐变角度为45度的重复线性渐变 --> 
<div class='ediv' id="RepeatingLinearAngle"></div> 
<!-- 从左下到右上的重复线性渐变 --> 
<div class='ediv' id="RepeatingLinearBottomLeft"></div> 
   
<div style="width:0; height:0; border:none; clear:both"></div> 
<!-- 圆形重复径向渐变 --> 
<div class='ediv' id="RepeatingRadialCircle"></div> 
<!-- 渐变方向为左上到右下的重复径向渐变 --> 
<div class='ediv' id="RepeatingRadialTopLeft"></div> 
<!-- 重复径向渐变：渐变半径长度为从圆心到离圆心最近的角的距离 --> 
<div class='ediv' id="RepeatingRadialClosestCorner"></div>  
</div>
<div>
<div><div id="highlighter_617031" class="syntaxhighlighter  xhtml">
<table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><div>1</div>
    <div>2</div>
<div>3</div>
<div>4</div>
<div>5</div>
<div>6</div>
<div>7</div>
<div>8</div>
<div>9</div>
<div>10</div>
<div>11</div>
<div>12</div>
<div>13</div>
<div>14</div>
<div>15</div>
<div>16</div>
<div>17</div>
<div>18</div>
<div>19</div>
<div>20</div>
<div>21</div>
<div>22</div>
<div>23</div>
<div>24</div>
<div>25</div>
<div>26</div>
<div>27</div>
<div>28</div>
<div>29</div>
<div>30</div>
<div>31</div>
<div>32</div>
<div>33</div>
<div>34</div>
<div>35</div>
<div>36</div>
<div>37</div>
<div>38</div>
<div>39</div>
<div>40</div>
<div>41</div>
<div>42</div>
<div>43</div>
<div>44</div>
<div>45</div>
<div>46</div>
<div>47</div>
<div>48</div>
<div>49</div>
<div>50</div>
<div>51</div>
<div>52</div>
<div>53</div>
<div>54</div>
<div>55</div>
<div>56</div>
<div>57</div>
<div>58</div>
<div>59</div>
<div>60</div>
<div>61</div>
<div>62</div>
<div>63</div>
<div>64</div>
<div>65</div>
<div>66</div>
<div>67</div>
<div>68</div>
<div>69</div>
<div>70</div>
<div>71</div>
<div>72</div>
<div>73</div>
<div>74</div>
<div>75</div>
<div>76</div>
<div>77</div>
<div>78</div>
<div>79</div>
<div>80</div>
<div>81</div>
<div>82</div>
<div>83</div>
<div>84</div>
<div>85</div>
<div>86</div>
<div>87</div>
<div>88</div>
<div>89</div>
<div>90</div>
<div>91</div>
<div>92</div>
<div>93</div>
<div>94</div>
<div>95</div>
<div>96</div>
<div>97</div>
<div>98</div>
<div>99</div>
<div>100</div>
<div>101</div>
<div>102</div>
<div>103</div>
<div>104</div>
<div>105</div>
<div>106</div>
<div>107</div>
<div>108</div>
<div>109</div>
<div>110</div>
<div>111</div>
<div>112</div>
<div>113</div>
<div>114</div>
<div>115</div>
<div>116</div>
<div>117</div>
<div>118</div>
<div>119</div>
<div>120</div>
<div>121</div>
<div>122</div>
<div>123</div>
<div>124</div>
<div>125</div>
<div>126</div>
<div>127</div>
<div>128</div>
<div>129</div>
<div>130</div>
<div>131</div>
<div>132</div>
<div>133</div>
<div>134</div>
<div>135</div>
<div>136</div>
<div>137</div>
<div>138</div>
<div>139</div>
<div>140</div>
</td><td><div><div><code>&lt;!DOCTYPE html&gt;&nbsp; </code></div>
    <div><code>&lt;</code><code>html</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;</code><code>head</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;</code><code>meta</code> <code>charset</code><code>=</code><code>"utf-8"</code> <code>/&gt;&nbsp; </code></div>
<div><code>&lt;</code><code>title</code><code>&gt;ImageCSS3&lt;/</code><code>title</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;</code><code>style</code><code>&gt;&nbsp; </code></div>
<div><code>div {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>width: 200px;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>height: 100px;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>margin: 10px 5px;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>border: 1px solid #ddd000;&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#LinearStartToEnd {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>background: linear-gradient(#ff0000, #00ff00);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#LinearPercentage {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>background: linear-gradient(#0000ff, #ff0000 52%, #00ff00);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#LinearAnglePercentage {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>background: linear-gradient(90deg, #ff0000 20%, #00ff00 50%, #000000 80%);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#LinearAngle {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>background: linear-gradient(30deg, #ffff00 30%, #ff0000, #00ff00);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#LinearTopRight {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>background: linear-gradient(to right top, #00ff00, #ff0000 50%, #0000ff);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code>&nbsp;</div>
<div><code>#RadialCenterCircle {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: radial-gradient(circle at center, #ff0000, #ffff00, #00ffff);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RadialClosestSide {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: radial-gradient(circle closest-side, #ff0000, #00ff00, #ffff00);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RadialFarthestSide {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: radial-gradient(farthest-side, #ff0000 20%, #ffff00 60%, #00ff00 80%);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RadialRightTop {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: radial-gradient(at right top, #ff0000, #ffff00, #00ff00);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RadialRadiusCenter {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: radial-gradient(farthest-side at top right, #ff0000, #ffff00, #01fefe);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RadialGroup {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background:&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code>radial-gradient(farthest-side at top right, #ff0000, #ffff00, #009f00, transparent),&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code>radial-gradient(60px at top left, #ff0000, #ffff00, #00ff0e);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code>&nbsp;</div>
<div><code>#RepeatingLinearPercentage{&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: repeating-linear-gradient(#ff0000, #00ff00 10%, #000000 15%);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RepeatingLinearRight {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: repeating-linear-gradient(to right, #ff0000, #00ff00 10%, #000000 15%);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RepeatingLinearAngle {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: repeating-linear-gradient(45deg, #ff0000, #00ff00 10%, #0000ff 15%);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RepeatingLinearBottomLeft {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: repeating-linear-gradient(to bottom left, #00ffff, #ff0000 10%, #00ff00 15%);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code>&nbsp;</div>
<div><code>#RepeatingRadialCircle {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: repeating-radial-gradient(circle, #ff0000 0, #00ff00 10%, #0000ff 15%);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RepeatingRadialTopLeft {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: repeating-radial-gradient(at top left, #ff0000, #00ff00 10%, #0de0f0 15%, #ffff00 20%, #000000 25%);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>#RepeatingRadialClosestCorner {&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code><code>float:left;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;&nbsp;&nbsp;</code><code>background: repeating-radial-gradient(circle closest-corner at 20px 50px, #00ff00, #ff0000 10%, #00ffff 20%, #ffff00 30%, #ff00ff 40%);&nbsp; </code></div>
<div><code>}&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code>&nbsp;</div>
<div><code>&lt;/</code><code>style</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;/</code><code>head</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;</code><code>body</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 指定线性渐变起止色 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"LinearStartToEnd"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 指定线性渐变起止色位置 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"LinearPercentage"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 指定线性渐变颜色渐变方向和起止色位置 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"LinearAnglePercentage"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 指定线性渐变颜色渐变方向 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"LinearAngle"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 设置渐变从右上到左下 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"LinearTopRight"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code>&nbsp;</div>
<div><code>&lt;!-- 浮动Div换行，此处指定Div宽高和边界，是为了覆盖前面定义的Div统一CSS样式，&nbsp; </code></div>
<div><code>&nbsp;</code><code>可以尝试去掉指定的Div宽高和边界，看看效果 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>style</code><code>=</code><code>"width:0; height:0; border:none; clear:both"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 以中心点为圆心的圆形径向渐变 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RadialCenterCircle"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 径向渐变半径长度：圆心到离圆心最近边的长度 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RadialClosestSide"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 径向渐变半径长度：圆心到离圆心最远边的长度 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RadialFarthestSide"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 左边为径向渐变圆心的横坐标值,顶边为径向渐变圆心的纵坐标值 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RadialRightTop"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 同时指定径向渐变的圆心和半径 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RadialRadiusCenter"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 径向渐变组合 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RadialGroup"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>style</code><code>=</code><code>"width:0; height:0; border:none; clear:both"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 指定颜色起止色位置的重复线性渐变 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RepeatingLinearPercentage"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 从左到右渐变的重复线性渐变 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RepeatingLinearRight"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 渐变角度为45度的重复线性渐变 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RepeatingLinearAngle"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 从左下到右上的重复线性渐变 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RepeatingLinearBottomLeft"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>style</code><code>=</code><code>"width:0; height:0; border:none; clear:both"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 圆形重复径向渐变 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RepeatingRadialCircle"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 渐变方向为左上到右下的重复径向渐变 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RepeatingRadialTopLeft"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;!-- 重复径向渐变：渐变半径长度为从圆心到离圆心最近的角的距离 --&gt;</code>&nbsp;</div>
<div><code>&lt;</code><code>div</code> <code>id</code><code>=</code><code>"RepeatingRadialClosestCorner"</code><code>&gt;&lt;/</code><code>div</code><code>&gt;&nbsp; </code></div>
<div><code>&nbsp;&nbsp;</code>&nbsp;</div>
<div><code>&lt;/</code><code>body</code><code>&gt;&nbsp; </code></div>
<div><code>&lt;/</code><code>html</code><code>&gt;</code></div>
</div>
</td></tr></tbody></table></div>
</div>
</div>

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
<style>
    .box{

    }

    /*垂直居中 */
.dib_vm {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}

/*垂直 */
.dib_v {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}

/*两端左右对齐 */
.dib_lr {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}
/*左到右*/
/*left to right*/
.ltor{
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
     -webkit-box-direction: normal;
     -webkit-box-orient: horizontal;
     -moz-flex-direction: row;
     -webkit-flex-direction: row;
     flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}

/*CSS3常用的几种颜色渐变模式*/
.ediv{    
    float: left;
    width: 70px; 
    height: 100px; 
    margin: 10px 5px; 
    border: 1px solid #ddd000; 
} 

/*一、线性渐变：linear-gradient*/
#LinearStartToEnd { 
  background: linear-gradient(#ff0000, #00ff00); 
} 
#LinearPercentage { 
  background: linear-gradient(#0000ff, #ff0000 52%, #00ff00); 
} 
#LinearAnglePercentage { 
  background: linear-gradient(90deg, #ff0000 20%, #00ff00 50%, #000000 80%); 
} 
#LinearAngle { 
  background: linear-gradient(30deg, #ffff00 30%, #ff0000, #00ff00); 
} 
#LinearTopRight { 
  background: linear-gradient(to right top, #00ff00, #ff0000 50%, #0000ff); 
}


#LinearStartToEnd { 
  background: linear-gradient(#ff0000, #00ff00); 
} 
#LinearPercentage { 
  background: linear-gradient(#0000ff, #ff0000 52%, #00ff00); 
} 
#LinearAnglePercentage { 
  background: linear-gradient(90deg, #ff0000 20%, #00ff00 50%, #000000 80%); 
} 
#LinearAngle { 
  background: linear-gradient(30deg, #ffff00 30%, #ff0000, #00ff00); 
} 
#LinearTopRight { 
  background: linear-gradient(to right top, #00ff00, #ff0000 50%, #0000ff); 
}

/*二径向渐变*/
#RadialCenterCircle { 
    background: radial-gradient(circle at center, #ff0000, #ffff00, #00ffff); 
} 
#RadialClosestSide { 
    background: radial-gradient(circle closest-side, #ff0000, #00ff00, #ffff00); 
} 
#RadialFarthestSide { 
    background: radial-gradient(farthest-side, #ff0000 20%, #ffff00 60%, #00ff00 80%); 
} 
#RadialRightTop { 
    background: radial-gradient(at right top, #ff0000, #ffff00, #00ff00); 
} 
#RadialRadiusCenter { 
    background: radial-gradient(farthest-side at top right, #ff0000, #ffff00, #01fefe); 
} 
#RadialGroup { 
    background: 
        radial-gradient(farthest-side at top right, #ff0000, #ffff00, #009f00, transparent), 
        radial-gradient(60px at top left, #ff0000, #ffff00, #00ff0e); 
}

/*三、重复的线性渐变：repeating-linear-gradient*/
#RepeatingLinearPercentage{ 
    background: repeating-linear-gradient(#ff0000, #00ff00 10%, #000000 15%); 
} 
#RepeatingLinearRight { 
    background: repeating-linear-gradient(to right, #ff0000, #00ff00 10%, #000000 15%); 
} 
#RepeatingLinearAngle { 
    background: repeating-linear-gradient(45deg, #ff0000, #00ff00 10%, #0000ff 15%); 
} 
#RepeatingLinearBottomLeft { 
    background: repeating-linear-gradient(to bottom left, #00ffff, #ff0000 10%, #00ff00 15%); 
}
/*四、重复的径向渐变：repeating-radial-gradient*/
#RepeatingRadialCircle { 
    background: repeating-radial-gradient(circle, #ff0000 0, #00ff00 10%, #0000ff 15%); 
} 
#RepeatingRadialTopLeft { 
    background: repeating-radial-gradient(at top left, #ff0000, #00ff00 10%, #0de0f0 15%, #ffff00 20%, #000000 25%); 
} 
#RepeatingRadialClosestCorner { 
    background: repeating-radial-gradient(circle closest-corner at 20px 50px, #00ff00, #ff0000 10%, #00ffff 20%, #ffff00 30%, #ff00ff 40%); 
}
</style>