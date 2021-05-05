//在app.js中引入此文件
// import Custfuns from './function/customizedFunctions.js'
// Vue.use(Custfuns);


exports.install = function (Vue, options) {
    Vue.prototype.testCustFun = function (info){
       console.log('testCustFun..........'+info)
    };

    var screenFlag=false;//是否全屏标记
    Vue.prototype.fscreen = function (e){
        console.log(e)
        //全屏与退出全屏
        var docElm = document.documentElement;
        if(screenFlag==false){
                //W3C
                if(docElm.requestFullscreen) {
                  docElm.requestFullscreen();
                }
             
                //FireFox
                else if(docElm.mozRequestFullScreen) {
                  docElm.mozRequestFullScreen();
                }
             
                //Chrome等
                else if(docElm.webkitRequestFullScreen) {
                  docElm.webkitRequestFullScreen();
                }
             
                //IE11
                else if(elem.msRequestFullscreen) {
                  elem.msRequestFullscreen();
                }
                screenFlag=!screenFlag;
                e.target.title="CancelFullScreen"
            }else{
                    //W3C
                    if (document.exitFullscreen) {
                      document.exitFullscreen();
                    }
                    //FireFox
                    else if (document.mozCancelFullScreen) {
                      document.mozCancelFullScreen();
                    }
                    //Chrome等
                    else if (document.webkitCancelFullScreen) {
                      document.webkitCancelFullScreen();
                    }
                    //IE11
                    else if (document.msExitFullscreen) {
                      document.msExitFullscreen();
                    }
                screenFlag=!screenFlag;
                e.target.title="FullScreen"
            }
    };

   Vue.prototype.textAreaAutoHeight = function (elem, extra, maxHeight) {
/**
* 文本框根据输入内容自适应高度
* @param                {HTMLElement}        输入框元素
* @param                {Number}                设置光标与输入框保持的距离(默认0)
* @param                {Number}                设置最大高度(可选)
*/

        extra = extra || 0;
        var isFirefox = !!document.getBoxObjectFor || 'mozInnerScreenX' in window,
        isOpera = !!window.opera && !!window.opera.toString().indexOf('Opera'),
                addEvent = function (type, callback) {
                        elem.addEventListener ?
                                elem.addEventListener(type, callback, false) :
                                elem.attachEvent('on' + type, callback);
                },
                getStyle = elem.currentStyle ? function (name) {
                        var val = elem.currentStyle[name];
 
                        if (name === 'height' && val.search(/px/i) !== 1) {
                                var rect = elem.getBoundingClientRect();
                                return rect.bottom - rect.top -
                                        parseFloat(getStyle('paddingTop')) -
                                        parseFloat(getStyle('paddingBottom')) + 'px';        
                        };
 
                        return val;
                } : function (name) {
                                return getComputedStyle(elem, null)[name];
                },
                minHeight = parseFloat(getStyle('height'));
 
        elem.style.resize = 'none';
 
        var change = function () {
                var scrollTop, height,
                        padding = 0,
                        style = elem.style;
 
                if (elem._length === elem.value.length) return;
                elem._length = elem.value.length;
 
                if (!isFirefox && !isOpera) {
                        padding = parseInt(getStyle('paddingTop')) + parseInt(getStyle('paddingBottom'));
                };
                scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
 
                elem.style.height = minHeight + 'px';
                if (elem.scrollHeight > minHeight) {
                        if (maxHeight && elem.scrollHeight > maxHeight) {
                                height = maxHeight - padding;
                                style.overflowY = 'auto';
                        } else {
                                height = elem.scrollHeight - padding;
                                style.overflowY = 'hidden';
                        };
                        style.height = height + extra + 'px';
                        scrollTop += parseInt(style.height) - elem.currHeight;
                        document.body.scrollTop = scrollTop;
                        document.documentElement.scrollTop = scrollTop;
                        elem.currHeight = parseInt(style.height);
                };
        };
 
        addEvent('propertychange', change);
        addEvent('input', change);
        addEvent('focus', change);
        change();
    };
    Vue.prototype.blinkNode = function (elem, color1='red', color2='yellow') {
/**
* 自定义闪烁元素背景（元素ID，闪烁颜色1，闪烁颜色2）
* @param                {elem}        元素ID
* @param                {color1}      闪烁颜色1默认(red)
* @param                {color2}      闪烁颜色2默认(yellow)
*/
        // 自定义闪烁元素背景（元素ID，闪烁颜色1，闪烁颜色2）
                console.log('Vue Blink ............');
                // var params = [elem,color1,color2];
                // console.log(params);
                var colorflag=0;//标记初始闪烁颜色，后面根据条件切换
                var blinkNode = document.getElementById(elem);//找节点ID
                var blinktimeset;

                blinkcheck = blinkNode.getAttribute('blinkon');//获取blinkon属性
                console.log('********'+blinkcheck);
                if(blinkcheck=="true"){
                    return;
                }else{
                    blinkNode.setAttribute('blinkon',true);//设置节点属性，表示正在执行blink,用以检测快闪问题
                    console.log('****设置闪烁****');
                    // 设置闪烁
                    blinktimeset=setInterval(function(){
                      // console.log(blinkNode);
                      // var color=window.getComputedStyle(blinkNode)['background-color']; 
                      if(colorflag){
                      blinkNode.style.background=color1;
                      colorflag=!colorflag;
                      }else{
                      blinkNode.style.background=color2;
                      colorflag=!colorflag;
                      }
                     },
                     500,
                     // params
                     );
                // //如果已经触发了一次函数，第二次触发时先清除定时器，再把快闪检测属性设置为false
                // console.log('blinkcheck='+blinkcheck);
                setTimeout(function(){
                    console.log('清除timer');
                    blinkNode.setAttribute('blinkon',false);//设置节点属性为false以触发再次调用，
                    clearInterval(blinktimeset);               
                },4000)
                }


    };




};

// // ********************************
//         //数组不复复添加元素
// Array.prototype.pushNoRepeat = function(){ 
//     for(var i=0; i<arguments.length; i++){ 
//         var ele = arguments[i]; 
//         if(this.indexOf(ele) == -1){ 
//             this.push(ele);
//             return this.length; 
//         }else{
//             return -1;
//         } 
//         } 
//         return this.indexOf(ele);
//     };

// // 生成随机颜色的函数
// function bg1(){
// return '#'+Math.floor(Math.random()*256).toString(10);
// }
// function bg2(){
// return '#'+Math.floor(Math.random()*0xffffff).toString(16);
// }
// function bg3(){
// var r=Math.floor(Math.random()*256);
// var g=Math.floor(Math.random()*256);
// var b=Math.floor(Math.random()*256);
// return "rgb("+r+','+g+','+b+")";//所有方法的拼接都可以用ES6新特性`其他字符串{$变量名}`替换
// }
