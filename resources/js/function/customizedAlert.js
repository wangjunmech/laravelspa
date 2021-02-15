window.alert = alert;
//自定义alert弹窗样式
//说明：在app.js中使用import './function/customizedAlert.js';或在需要的页面中引入即可
function alert(data, callback) { //回调函数
        var alert_bg = document.createElement('div'),
            alert_box = document.createElement('div'),
            alert_text = document.createElement('div'),
            alert_btn = document.createElement('div'),
            textNode = document.createTextNode(data ? data : ''),
            btnText = document.createTextNode('确 定');
        // //警告框控制样式
        css(alert_bg, {
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'right': '0',
            'bottom': '0',
            'background-color': 'rgba(0, 0, 0, 0.1)',
            'padding':'10px',
            'z-index': '99'
        });

        //警告框
        css(alert_text, {
            'padding': '10px 15px',
            'border-bottom': '1px solid #ddd',
            'color': 'red',
            'font-size':'20px'

        });
        //警告框大小及样式设置
        css(alert_box, {
            'padding': '10px',
            'width': '300px',
            'max-width': '90%',
            'font-size': '12px',
            'text-align': 'center',
            'background-color': '#fff',
            'border-radius': '10px',
            'position': 'absolute',
            'border':'2px solid #aaa',
            'top': '50%',
            'left': '50%',
            'transform': 'translate(-50%, -50%)',
            'display':'inline-block'
        });


        // 按钮样式默认

        css(alert_btn, {
          'width':'50%',
          'margin':'0 auto',
          'background':' #3498db',
          'background-image':' -webkit-linear-gradient(top, #3498db, #2980b9)',
          'background-image':' -moz-linear-gradient(top, #3498db, #2980b9)',
          'background-image':' -ms-linear-gradient(top, #3498db, #2980b9)',
          'background-image':' -o-linear-gradient(top, #3498db, #2980b9)',
          'background-image':' linear-gradient(to bottom, #3498db, #2980b9)',
          '-webkit-border-radius':' 30',
          '-moz-border-radius':' 30',
          'border-radius':' 20px',
          '-webkit-box-shadow':' 0px 4px 3px #00659c',
          '-moz-box-shadow':' 0px 4px 3px #00659c',
          'box-shadow':' 0px 4px 3px #00659c',
          'font-family':' Arial',
          'color':' #ffffff',
          'font-size':' 20px',
          'padding':' 0px 8px 0px 8px',
          'border':' dotted #ad2e00 2px',
          'text-decoration':' none', 

        });



        // 内部结构套入
        alert_text.appendChild(textNode);
        alert_btn.appendChild(btnText);
        alert_box.appendChild(alert_text);
        alert_box.appendChild(alert_btn);
        alert_bg.appendChild(alert_box);

        // 整体显示到页面内
        document.getElementsByTagName('body')[0].appendChild(alert_bg);

        // 确定绑定点击事件删除标签
        alert_btn.onclick = function() {
            alert_bg.parentNode.removeChild(alert_bg);
            if (typeof callback === 'function') {
                callback(); //回调
            }
        }
        //鼠标经过按钮样式
        alert_btn.onmouseover = function() {
            css(alert_btn,{
              'background':' #a1d2f0',
              'background-image':' -webkit-linear-gradient(top, #a1d2f0, #3498db)',
              'background-image':' -moz-linear-gradient(top, #a1d2f0, #3498db)',
              'background-image':' -ms-linear-gradient(top, #a1d2f0, #3498db)',
              'background-image':' -o-linear-gradient(top, #a1d2f0, #3498db)',
              'background-image':' linear-gradient(to bottom, #a1d2f0, #3498db)',
              'text-decoration':' none',
          });
        }
        //鼠标离开按钮样式
        alert_btn.onmouseout = function() {
            css(alert_btn,{
              'background':' #3498db',
              'background-image':' -webkit-linear-gradient(top, #3498db, #2980b9)',
              'background-image':' -moz-linear-gradient(top, #3498db, #2980b9)',
              'background-image':' -ms-linear-gradient(top, #3498db, #2980b9)',
              'background-image':' -o-linear-gradient(top, #3498db, #2980b9)',
              'background-image':' linear-gradient(to bottom, #3498db, #2980b9)',
          });
        }
}
function css(targetObj, cssObj) {
        var str = targetObj.getAttribute("style") ? targetObj.getAttribute('style') : '';
        for (var i in cssObj) {
            str += i + ':' + cssObj[i] + ';';
        }
        targetObj.style.cssText = str;
}
