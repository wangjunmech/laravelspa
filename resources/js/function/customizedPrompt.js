window.prompt = prompt;
//自定义alert弹窗样式
//说明：在app.js中使用import './function/customizedAlert.js';或在需要的页面中引入即可
function prompt(data, callback) { //回调函数
        var alert_bg = document.createElement('div'),
            alert_box = document.createElement('div'),
            alert_input = document.createElement('input'),
            alert_text = document.createElement('div'),
            alert_btn = document.createElement('div'),
            textNode = document.createTextNode(data ? data : ''),
            btnText = document.createTextNode('确 定');

        // 控制样式
        css(alert_bg, {
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'right': '0',
            'bottom': '0',
            'background-color': 'rgba(0, 0, 0, 0.1)',
            'z-index': '99'
        });

        css(alert_box, {
            'width': '300px',
            'max-width': '90%',
            'font-size': '12px',
            'text-align': 'center',
            'background-color': '#fff',
            'border-radius': '10px',
            'position': 'absolute',
            'top': '50%',
            'left': '50%',
            'transform': 'translate(-50%, -50%)'
        });

        css(alert_text, {
            'padding': '10px 15px',
            'border-bottom': '1px solid #ddd'
        });

        css(alert_input, {
            'padding': '5px 5px',
            'max-width': '90%',
            'border-bottom': '1px solid #ddd'
        });

        css(alert_btn, {
            'padding': '10px 0',
            'color': '#007aff',
            'font-weight': '600',
            'cursor': 'pointer',
            'border-bottom-right-radius':'10px',
            'border-bottom-left-radius':'10px',
            'background-color':"#acd",
        });

        // 内部结构套入
        alert_text.appendChild(textNode);
        alert_text.appendChild(alert_input);
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
}


function css(targetObj, cssObj) {
        var str = targetObj.getAttribute("style") ? targetObj.getAttribute('style') : '';
        for (var i in cssObj) {
            str += i + ':' + cssObj[i] + ';';
        }
        targetObj.style.cssText = str;
}
