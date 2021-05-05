<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>Key code References &nbsp; &nbsp; &nbsp;离开当前页面触发的函数</h2> <a href="https://www.ifreesite.com/typing-keyboard-mouse.htm">Key code online</a>
                        <p class="el_note">本页添加了按键事件后，离开页面要处理，否则到其它页面按下按键还会触发事件。处理方法：1.在mounted方法下添加离开提示事件window.onbeforeunload=function(e){} .2添加生命周期函数destroyed: function () {document.onkeydown="";//取消按键触发事件}</p>
                    </div>
                    <div class="card-body">
<div>
    <div class="tbox">
        <p>键盘+鼠标 – Keyboard&Mouse
        </p><p>键盘 Keyboard <a data-property="
    position: relative;
    float: left;
    width: 140px;
    height: 140px;
    box-sizing: border-box;
    margin: 0 15px 30px;
    background: slategray;
    color: white;
    font-size: 60px;
    line-height: 150px;
    text-align: center;
    counter-increment: tranums;
    outline-color: transparent;
" data-from="0 0 white" data-to="0 0 rgba(255,255,255,0), -45px -45px 0 red, -30px -30px 0 orange, -15px -15px 0 yellow, 0 0 0 green, 15px 15px 0 blue, 30px 30px 0 indigo, 45px 45px 0 violet" data-author="kizmarh" id="text-shadow/2" href="javascript:void(0);" title="text-shadow from 0 0 white to 0 0 rgba(255,255,255,0), -45px -45px 0 red, -30px -30px 0 orange, -15px -15px 0 yellow, 0 0 0 green, 15px 15px 0 blue, 30px 30px 0 indigo, 45px 45px 0 violet" data-cssmemo="@keyframes text-shadow-2{
    from{text-shadow:0 0 white}
    to{text-shadow:0 0 rgba(255,255,255,0), -45px -45px 0 red, -30px -30px 0 orange, -15px -15px 0 yellow, 0 0 0 green, 15px 15px 0 blue, 30px 30px 0 indigo, 45px 45px 0 violet}
}
#text-shadow\/2:hover { animation: text-shadow-2 1s infinite alternate;text-shadow:0 0 white}">2</a>
        </p><p>一个标准的Windows键盘，我们可以从按键数目来分为 104keys〈标准美式英文，亚洲大部份地区的键盘也是这个规格〉、105Keys〈欧洲语文，比标准美式英文多一个按键〉、108keys〈日文，日本往往都是独树一格〉。后来有精简过的键盘出现，也就是像笔记本电脑键盘，大约都是在 88keys 左右。而Apple键盘则有 79keys，后来又发展到 130keys 甚至更多。总而言之，在不同年代，越来越多的功能键和多媒体键增加到键盘上，如调整音量，视讯光暗调节，开启网页或邮件等操作。因此在各家的规格都不太相同。
        </p><p>鼠标 Mouse
        </p><p>鼠标，又叫老鼠、鼠标。是常用来控制计算机或智能电视机的输入设备，它可以对目前屏幕上的光标进行定位，并透过按键和滚轮装置对光标所经过位置的屏幕元素进行操作。现时市面上的鼠标规格繁多，大致共分为几类。
        </p><p>■ 单键鼠标：单一按键，苹果公司从早期的Mac系统使用至今，仅加入触控来代替多按键，其目的是单一按键不会按错，与当时一般PC上的双键或三键鼠标有别。
        </p><p>■ 双键鼠标：双按键，早年PC上曾广泛使用，现已极少出现；早期的Mac系统目前有部分使用。
        </p><p>■ 三键鼠标：左右键加中键，早年PC上曾广泛使用，现已甚少出现。
        </p><p>■ 三键滚轮鼠标：左右键加上下卷动的滚轮，含整合中键功能的后期滚轮，Windows 95出现以后的主流鼠标。
        </p><p>■ 五键滚轮鼠标：新增第四键及第五键——主要功能为左/右方向卷动，多在生产力职业上工作。Windows操作系统称之为XBUTTON1与XBUTTON2。
        </p><p>■ 多键滚轮鼠标：五键以上鼠标，为某些特定功能、游戏比赛或环境设计，可以用驱动程序进行功能编辑。</p>


    </div>  
<div class="showcode">
    <input type="text" @keyup.enter="entersubmit()" placeholder="监听回车提交">
    <input id="blinktest1" type="text" @click.stop @wheel.prevent="mscroll($event)" placeholder="监听鼠标滚轮事件" v-model="scrollnum" style="border-radius: 5px;"  @mouseover="urlcursor($event)">
</div>   
<div @mouseup="onContextMenu" ref="listBox" class="mousetracker">
    <!-- @contextmenu.prevent="onContextMenu" 阻止右键菜单但也阻止了左中键监听 -->
    监听鼠标点击DIV，鼠标在此区域点击可监听触发了哪个键
</div> 
            <input type="range" id='range' min="0" max="100" value="1" @change="changerange"/>

<div id="blinktest"  @wheel.prevent="mscroll($event)" class="mousetracker">
    <h3 @mouseover="urlcursor($event)">监听鼠标标滚轮事件,@wheel.prevent="mscroll($event)"阻止默认的页面滚动</h3>
</div>  
<div class="mbox">    
        <div class="mousebox">
            <div class="ml">
            <p class="txt">133</p>
        </div>
            <div class="m">
            <p class="txt">134</p>
        </div>
            <div class="mr">
            <p class="txt">135</p>
        </div>            
        </div>
</div>    

</div>


<!-- ************************************************************************************************************************* -->
<div class="overflowxy">
        <table style="height: 100%;" cellpadding="0">
            <tbody>
            <tr>
            <td colspan="3">
            <table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;">
                    <tbody>
                        <tr>
                            <td>
                            <table class="tblayout">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table class="tdupleft">
                                                    <tbody>
                                                    <tr>
                                                        <td class="ftopl">ESC</td>
                                                        <td class="ftopr"><br></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="tbdown">
                                                    <tbody>
                                                    <tr>
                                                        <td class="fbotr"><br></td>
                                                        <td class="kcode">27</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
            </table>
            </td>
    <td colspan="3">
        <br>
    </td>
    <td colspan="3">
            <table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;">
                    <tbody>
                        <tr>
                            <td>
                            <table class="tblayout">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table class="tdupleft">
                                                    <tbody>
                                                    <tr>
                                                        <td class="ftopl">F1</td>
                                                        <td class="ftopr"><br></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="tbdown">
                                                    <tbody>
                                                    <tr>
                                                        <td class="fbotr"><br></td>
                                                        <td class="kcode">112</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
            </table>
            </td>
            <td colspan="3">
            <table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;">
                    <tbody>
                        <tr>
                            <td>
                            <table class="tblayout">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table class="tdupleft">
                                                    <tbody>
                                                    <tr>
                                                        <td class="ftopl">F2</td>
                                                        <td class="ftopr"><br></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="tbdown">
                                                    <tbody>
                                                    <tr>
                                                        <td class="fbotr"><br></td>
                                                        <td class="kcode">113</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
            </table>
            </td>

<td colspan="3">
            <table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;">
                    <tbody>
                        <tr>
                            <td>
                            <table class="tblayout">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table class="tdupleft">
                                                    <tbody>
                                                    <tr>
                                                        <td class="ftopl">F3</td>
                                                        <td class="ftopr"><br></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="tbdown">
                                                    <tbody>
                                                    <tr>
                                                        <td class="fbotr"><br></td>
                                                        <td class="kcode">114</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
            </table>
            </td>
            <td colspan="3">
            <table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;">
                    <tbody>
                        <tr>
                            <td>
                            <table class="tblayout">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table class="tdupleft">
                                                    <tbody>
                                                    <tr>
                                                        <td class="ftopl">F4</td>
                                                        <td class="ftopr"><br></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="tbdown">
                                                    <tbody>
                                                    <tr>
                                                        <td class="fbotr"><br></td>
                                                        <td class="kcode">115</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
            </table>
            </td>
                 <td colspan="1">
                    <br>
            </td>
                 <td colspan="3">
                    <table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;">
                    <tbody>
                    <tr>
                    <td>

                    <table class="tblayout">
                        <tbody>
                        <tr>
                        <td>

                    <table class="tdupleft">
                        <tbody>
                        <tr>
                        <td class="ftopl">
                        F5
                </td>
                 <td class="ftopr">
                    <br>
            </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">116
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">F6
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">117
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">F7
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">118
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">F8
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">119
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="1"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">F9
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">120
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">F10
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">121
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">F11
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">122
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">F12
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">123
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="1"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">SysRq
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">44
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Scroll
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">Lk
                </td> <td class="kcode">145
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Pause
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">19
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="1"><br></td> <td colspan="4"><br></td> <td colspan="4"><br></td> <td colspan="4"><br></td></tr> <tr><td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td> <td><br></td></tr> <tr><td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">~
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">`
                </td> <td class="kcode">192
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">!
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄅ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">1
                </td> <td class="kcode">49
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">@
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄉ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">2
                </td> <td class="kcode">50
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">#
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ˇ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">3
                </td> <td class="kcode">51
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">$
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ˋ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">4
                </td> <td class="kcode">52
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">%
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄓ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">5
                </td> <td class="kcode">53
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">^
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ˊ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">6
                </td> <td class="kcode">54
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">&amp;
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">˙
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">7
                </td> <td class="kcode">55
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">*
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄚ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">8
                </td> <td class="kcode">56
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">(
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄞ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">9
                </td> <td class="kcode">57
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">)
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄢ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">0
                </td> <td class="kcode">48
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">_
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄦ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">–
                </td> <td class="kcode">189
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">+
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">=
                </td> <td class="kcode">187
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="5"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Backspace
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">←
                </td> <td class="kcode">8
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="1"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Insert
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">45
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Home
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">36
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Page
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">Up
                </td> <td class="kcode">33
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="1"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Num
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">Lk
                </td> <td class="kcode">144
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">/
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">111
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">*
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">106
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">–
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">109
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr> <tr><td colspan="4"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Tab
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">⇆
                </td> <td class="kcode">9
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Q
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄆ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">手
                </td> <td class="kcode">81
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">W
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄊ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">田
                </td> <td class="kcode">87
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">E
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄍ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">水
                </td> <td class="kcode">69
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">R
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄐ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">口
                </td> <td class="kcode">82
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">T
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄔ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">廿
                </td> <td class="kcode">84
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Y
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄗ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">卜
                </td> <td class="kcode">89
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">U
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄧ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">山
                </td> <td class="kcode">85
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">I
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄛ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">戈
                </td> <td class="kcode">73
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">O
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄟ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">人
                </td> <td class="kcode">79
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">P
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄣ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">心
                </td> <td class="kcode">80
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">{
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">[
                </td> <td class="kcode">219
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">}
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">]
                </td> <td class="kcode">221
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="4"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">|
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">\
                </td> <td class="kcode">220
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="1"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Delete
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">46
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">End
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">35
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Page
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">Dn
                </td> <td class="kcode">34
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="1"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">7
                </td> <td class="topr">Home
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">36 / 103
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">8
                </td> <td style="text-align: right; color: rgb(128, 128, 128); vertical-align: top; font-family: Segoe UI Symbol;">▲
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">38 / 104
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">9
                </td> <td class="topr">PgUp
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">33 / 105
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3" rowspan="2"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">+
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">107
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr> <tr><td colspan="5"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Caps Lock
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">⇪
                </td> <td class="kcode">20
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">A
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄇ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">日
                </td> <td class="kcode">65
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">S
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄋ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">尸
                </td> <td class="kcode">83
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">D
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄎ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">木
                </td> <td class="kcode">68
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">F
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄑ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">火
                </td> <td class="kcode">70
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">G
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄕ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">土
                </td> <td class="kcode">71
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">H
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄘ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">竹
                </td> <td class="kcode">72
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">J
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄨ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">十
                </td> <td class="kcode">74
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">K
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄜ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">大
                </td> <td class="kcode">75
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">L
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄠ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">中
                </td> <td class="kcode">76
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">:
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄤ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">;
                </td> <td class="kcode">186
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">“
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">‘
                </td> <td class="kcode">222
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="6"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Enter
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">↵
                </td> <td class="kcode">13
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="11"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">4
                </td> <td style="text-align: right; color: rgb(128, 128, 128); vertical-align: top; font-family: Segoe UI Symbol;">◀
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">37 / 100
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">5
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">12 / 101
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">6
                </td> <td style="text-align: right; color: rgb(128, 128, 128); vertical-align: top; font-family: Segoe UI Symbol;">▶
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">39 / 102
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr> <tr><td colspan="6"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Shift
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">⇧
                </td> <td class="kcode">16
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Z
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄈ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">重
                </td> <td class="kcode">90
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">X
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄌ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">難
                </td> <td class="kcode">88
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">C
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄏ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">金
                </td> <td class="kcode">67
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">V
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄒ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">女
                </td> <td class="kcode">86
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">B
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄖ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">月
                </td> <td class="kcode">66
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">N
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄙ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">弓
                </td> <td class="kcode">78
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">M
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄩ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tddown"><tbody><tr><td style="text-align: left; color: rgb(57, 66, 101); vertical-align: bottom;">一
                </td> <td class="kcode">77
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">&lt;
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄝ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">,
                </td> <td class="kcode">188
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">&gt;
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄡ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">.
                </td> <td class="kcode">190
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">?
                </td> <td style="text-align: right; color: rgb(96, 72, 120); vertical-align: top;">ㄥ
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">/
                </td> <td class="kcode">191
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="8"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Shift
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">⇧
                </td> <td class="kcode">16
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="4"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">↑
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">38
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="4"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">1
                </td> <td class="topr">End
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">35 / 97
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">2
                </td> <td style="text-align: right; color: rgb(128, 128, 128); vertical-align: top; font-family: Segoe UI Symbol;">▼
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">40 / 98
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">3
                </td> <td class="topr">PgDn
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">34 / 99
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3" rowspan="2"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Enter
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">13
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr> <tr><td colspan="4"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Control
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">17
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="4"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Meta
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">⊞
                </td> <td class="kcode">91
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="4"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Alt
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">18
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="16"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl"><br></td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">32
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="4"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Alt
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">18
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="4"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Meta
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">⊞
                </td> <td class="kcode">92
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="4"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Menu
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr">≣
                </td> <td class="kcode">93
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="4"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">Control
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">17
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="1"><br></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">←
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">37
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">↓
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">40
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">→
                </td> <td class="ftopr"><br></td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">39
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="1"><br></td> <td colspan="6"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">0
                </td> <td class="topr">Ins
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">45 / 96
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td> <td colspan="3"><table style="width: 100%; height: 100%; padding: 0px; font-size: 50%;"><tbody><tr><td>
                    <table class="tblayout"><tbody><tr><td>
                    <table class="tdupleft"><tbody><tr><td class="ftopl">.
                </td> <td class="topr">Del
                </td></tr></tbody></table></td></tr> <tr><td>
                    <table class="tbdown"><tbody><tr><td class="fbotr"><br></td> <td class="kcode">46 / 110
                </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>
</div>


<!-- js模拟输入 -->
<hr>
<hr>



                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// **************鼠标事件*******************
// 点击（单击）：@click="方法名" ；
//            双击   ： @dblclick="方法名" ；
//        鼠标按下： @mousedown="方法名" ；
//        鼠标抬起： @mouseup="方法名" ；
//        鼠标移动： @mousemove="方法名" ；
//        鼠标离开： @mouseleave=“方法名” ；
//        鼠标离开： @mouseout=“方法名” ；
//  *mouseleave和mouseout的区别在于mouseout有冒泡行为。
//        鼠标进入：  @mouseenter="方法名" ；
//        鼠标进入：  @mouseover="方法名" 。
// *mouseenter和mouseover的区别在于mouseover有冒泡行为。
//**************vue学习之指令简写以及事件************************
// 1.v-bind:××× 可简写为 :××× 例: v-bind:href 可简写为 :href
// 2.v-on:××× 可简写为 @××× 例: v-on:click 可简写为 @click
// 3.vue处理事件
// <!-- 阻止单击事件冒泡 -->
// 原生写法:
// ev.cancelBubble=true (ev为$event)(只适用IE)
// ev.stopPropagation() (遵循W3C标准，不适用IE，但适用大部分流行的浏览器)
// vue写法:
// <a v-on:××× .stop="doThis"></a>
 
// <!-- 提交事件不再重载页面 -->
// 原生写法:
// ev.preventDefault() (ev为$event)
// vue写法:
// (v-on:×××.prevent这里我理解为阻止默认行为)
// <form v-on:×××.prevent="onSubmit"></form> 
// <!-- 修饰符可以串联 -->
// <a v-on:click.stop.prevent="doThat"></a> 
// <!-- 只有修饰符 -->
// <form v-on:submit.prevent></form> 
// <!-- 添加事件侦听器时使用事件捕获模式 -->
// <div v-on:click.capture="doThis">...</div> 
// <!-- 只当事件在该元素本身（而不是子元素）触发时触发回调 -->
// <div v-on:click.self="doThat">...</div> 
// 4.事件键值修饰符 .enter/.tab/.delete(捕获退格和删除两个键)/.esc/.space/.up/.down/.left/.right
// 5.鼠标修饰符 left/right/middle,2.1.0新增
    export default {
        data(){
            return {
                currentId:1,
                scrollnum:0, //滚动初始值

            }
        }, 
        methods: {
            entersubmit: function() {
                    alert('entersubmit');
            },
            showkeycode: function(c){
                alert('按下按键：'+c)
            },
            //阻止右键默认行为
            preventMouse () {
            this.$refs.listBox.oncontextmenu =  () =>  false
            },
            //获取当前鼠标值
            onContextMenu (e) {
            this.preventMouse()
            alert('按下按键：'+e.button)
            console.log('按下按键：'+e.button)
            },



            mscroll(e){
            //判断鼠标滚轮滚动方向
                // e.target.style.backgroundColor='red';
                // console.log('mscroll');
                // console.log(e.deltaY);
                if(e.deltaY>0){
                    //向下滚
                    this.scrollnum+=1;
                }else{
                    this.scrollnum-=1;

                    //向上滚
                }
                // ***********
                this.$nextTick(() => {
                    // console.log(blinkID+'............');
                      // function blink(blinkID,c1,c2){
                      //   // console.log('Blink Function............');
                      //   var params = [blinkID,c1,c2];
                      //   // console.log(params);
                      //   var colorflag=0;
                      //   var test=setInterval(function(){
                      //     // console.log('...xxx...'+blinkID)
                      //     var id = params[0];
                      //     var c1 = params[1];
                      //     var c2 = params[2];
                      //     var blinkNode = document.getElementById(blinkID);//找节点ID
                      //     console.log(blinkNode);
                      //     // var color=window.getComputedStyle(blinkNode)['background-color']; 
                      //     // console.log(color);//获取计算后的背景颜色
                      //     if(colorflag){
                      //     blinkNode.style.background=c1;
                      //     colorflag=!colorflag;
                      //     }else{
                      //     blinkNode.style.background=c2;
                      //     colorflag=!colorflag;
                      //     }
                      //    },
                      //    500,
                      //    params
                      //    );
                      //  setTimeout(function(){
                      //   clearInterval(test);
                      //  },10000)
                      // }
                      // // blink("blinktest",'#acd','red');
                      // // blink("blinktest1",'#acd','red');
                    this.blinkNode("blinktest",'yellow','blue');
                    this.blinkNode("blinktest1",'red','green');
                });
            },
            // stopPagescroll(){
            //     console.log('stopPagescroll');
            //     document.onmousewheel=function(){return false};
            // },
            changerange(){
                console.log('range function...');

                // var num = document.getElementById("range").value;
                var num = $("#range").val(); 
                console.log(num+'<<<<');           

            },
            urlcursor(e){
                e.target.style.cursor='url("./Cursors/mw2.cur"),pointer';//OK
                },


          },
        mounted() {
                //当前页面监视键盘输入                                    
                this.$nextTick(()=>{
                    var action=this;
                    document.onkeydown = function(e) {
                        let e1 = e || event || window.event || arguments.callee.caller.arguments[0];
                        console.log('按下按键：'+e1.keyCode);
                        //事件对象兼容
                        //键盘按键判断:左箭头-37;上箭头-38；右箭头-39;下箭头-40
                        //左
                        if (e1 && e1.keyCode == 37) {
                            // this.decrease()
                        } else if (e1 && e1.keyCode == 38) {
                            // this.nowStudent--
                        } else if (e1 && e1.keyCode == 39) {
                            // this.increase()
                        } else if (e1 && e1.keyCode == 40) {
                            // this.nowStudent++
                        }
                        action.showkeycode(e1.keyCode);
                    }

                });
                window.onbeforeunload=function(e){     
                　　var e = window.event||e;  
                　　e.returnValue=("确定离开当前页面吗？");
                } 
  
        },
        destroyed: function () {
              console.log("离开页面需要清理keycode事件，不然到别的页面按键还会有触发问题");
              document.onkeydown="";
        },
}
</script>
<style scoped="scoped">
table,tr,td{
    border:none ;
}
.tblayout{
     width: 100%; 
     height: 100%; 
     font-size: 11px;
     background-color: pink;
     border: 1px solid red;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
border-radius: 5px;
}
.kcode{
    color:blue;
    vertical-align: bottom;
}

.tdupleft{
    background-color: pink;

}
.tddown{
    background-color: pink;

}
.ftopl{
    text-align: left;
    font-weight: bold;
    vertical-align: top;
}
.ftopr{
    text-align: right;
    font-weight: bold;
    vertical-align: top;
}
.fbotr{
    text-align: left;
    font-weight: bold;
    vertical-align: bottom;
}
.topr{
    text-align: right;
    color: rgb(255, 122, 122);
    vertical-align: top;

}
.mbox {
    position:relative;
    display: inline-block;
    width: 120px;
    height: 150px;
    margin: 40px;
}


.mousebox {
    width: 116px;
    height: 150px;
    background: #faa;
    border:1px solid pink;
    -moz-border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
    -webkit-border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
    border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
}

.ml {
    border:1px solid red;
    position:relative;
    display: inline-block;
    width: 35px;
    height: 59px;
    background: #dad;
    -moz-border-radius: 100% 0% 0% 100% / 100% 100% 0% 0%;
    -webkit-border-radius: 100% 0% 0% 100% / 100% 100% 0% 0%;
    border-radius: 100% 0% 0% 100% / 100% 100% 0% 0%;
}
.m {
    border:1px solid red;
    position:relative;
    display: inline-block;
    width: 30px;
    height: 59px;
    background: yellow;
}
.mr {
    border:1px solid red;
    position:relative;
    display: inline-block;
    width: 35px;
    height: 59px;
    background: #dda;
    -moz-border-radius:0% 100% 0% 100% / 100% 100% 0% 0% ;
    -webkit-border-radius:0% 100% 0% 100% / 100% 100% 0% 0% ;
    border-radius:0% 100% 0% 100% / 100% 100% 0% 0% ;
}
.txt{
    position:absolute;
    bottom:0px;
    padding:0px;
    margin:0px;
    color:blue;

}
.tbox{
    position:relative;
    display: inline-block;
}
.mousetracker{
    width: 100%;
    height: 60px;
    background-color: #cd0;
    border-radius: 10% 10% 10% 10% / 10% 10% 10% 10%;

}
</style>