require('./bootstrap');
import './cursorStyles/heart.js';
import './function/customizedAlert.js';

window.Vue = require('vue');

import Custfuns from './function/customizedFunctions.js'
Vue.use(Custfuns);


import Clipboard from 'clipboard'
import login from './components/login.vue'
import dashboard from './components/dashboard.vue'
// works
import moldlist from './components/works/moldlist/moldlist.vue'
import cate from './components/category/cate.vue'
import dcate from './components/category/dcate.vue'
import catetree from './components/category/catetree.vue'
import treelist from './components/category/treelist.vue'

import slotcomp from './components/study/slotcomp.vue'
import users from './components/users.vue'
import pdemo from './components/pdemo.vue'
import notFound from './components/notFound.vue'
import php from './components/study/dps-php.vue'
import js from './components/study/dps-js.vue'
import other from './components/study/dps-other.vue'
import memorandum from './components/study/memorandum.vue'
import studynote from './components/study/studynote.vue'
import autofocus from './components/study/autofocus.vue'
import ref from './components/study/ref.vue'
import drag from './components/study/drag.vue'
import drag2 from './components/study/drag2.vue'
import drag3 from './components/study/drag3.vue'
import drag4 from './components/study/drag4.vue'
import drag5 from './components/study/drag5.vue'
import resize from './components/study/resize.vue'

import loadingStyle from './components/study/loadingStyle.vue'
import uploadfiles from './components/study/upload.vue'
import loadimgs from './components/study/loadimgs.vue'
import reference from './route/reference.vue'
import refhtml from './components/ref/refhtml.vue'
import refjs from './components/ref/refjs.vue'
import refphp from './components/ref/refphp.vue'
import regexp from './components/ref/regexp.vue'
import refother from './components/ref/refother.vue'
import inputacc from './components/ref/html/inputacc.vue'
import btnstyle from './components/ref/html/buttonStyle.vue'
import refcss from './components/ref/refcss.vue'
import refmysql from './components/ref/refmysql.vue'
    import schema from './components/study/articles/mysqlschema.vue'
    import issue from './components/study/articles/mysqlissue.vue'
import divpos from './components/ref/css/divpos.vue'
import divbreak from './components/ref/css/divbreak.vue'
import colorname from './components/ref/css/colorname.vue'
import clickcopy from './components/ref/clickcopy'

import addlink from './components/study/addlink.vue'
import readingkeeper from './components/study/readingkeeper.vue'
import readingrec from './components/study/readingrec.vue'
import recorder from './components/study/recorder.vue'
import recorder2 from './components/study/recorder2.vue'
import vdeliver from './components/vdeliver.vue'
import artyomjs from './components/study/artyomjs.vue'
import email from './components/study/email'
import filehandler from './components/study/filehandler'

import profile from './components/profile.vue'

///***********测试路由分组***********
// import message1 from './components/message/msg1'

// import message2 from './components/message/msg2';

// import sssssss from './js/route/reference'
// import message from  './message'

///***********测试路由分组***********


import annyang from "./function/annyang.min.js"
// Vue.use(annyang);

// 进度表插件：http://hilongjw.github.io/vue-progressbar/
import VueProgressBar from 'vue-progressbar'
// 弹框插件：https://sweetalert2.github.io/#examples
import swalt from 'sweetalert2'
const Toast = swalt.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: true,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', swalt.stopTimer)
    toast.addEventListener('mouseleave', swalt.resumeTimer)
  }
})



/* Laravel passport template*/
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);



/* Laravel passport End*/

/* Laravel-vue-pagination*/
Vue.component('pagination', require('laravel-vue-pagination'));
/* Laravel-vue-pagination end */

// 测试组件************************
// Vue.component('progressbar', require('./components/progressbar.vue'));
// Vue.component('ExampleComponent', require('./components/ExampleComponent.vue'));
import progressbar from './components/progressbar.vue'
import expc from './components/ExampleComponent.vue'
// 测试组件************************

// 表单验证插件https://github.com/cretueusebiu/vform
/*vform安装 npm i axios vform*/ 
import { Form, HasError, AlertError } from 'vform'
window.Form = Form
window.swalt=swalt
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


import VueRouter from 'vue-router'
Vue.use(VueRouter)
Vue.config.productionTip = false
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '52'
})



// 自动聚集插件npm install vue-auto-focus
import AutoFocus from 'vue-auto-focus'
Vue.use(AutoFocus)

// 无限级分类选择插件
import { VTree, VSelectTree } from 'vue-tree-halower'
Vue.use (VTree)
Vue.use (VSelectTree)

import VueTreeList from 'vue-tree-list'
Vue.use(VueTreeList)


// 打印页面插件
import VueHtmlToPaper from 'vue-html-to-paper';

const options = {
  name: '_blank',
  specs: [
    'fullscreen=yes',
    'titlebar=yes',
    'scrollbars=yes'
  ],
  styles: [
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
    'https://unpkg.com/kidlat-css/css/kidlat.css',
    "./landscape.css"
  ]
}
Vue.use(VueHtmlToPaper, options);

// 路由配置
let routes = [
{path:'/',component:dashboard},
{path:'/login',component:login},
{path:'/home',component:dashboard},
{path:'/dashboard',component:dashboard},
{path:'/moldlist',component:moldlist},
{path:'/cate',component:cate},
{path:'/dcate',component:dcate},
{path:'/catetree',component:catetree},
{path:'/treelist',component:treelist},

{path:'/profile',component:profile},
{path:'/users',component:users},
{path:'/slot',component:slotcomp},
{path:'/passportdemo',component:pdemo},
{path:'/jspack',component:js},
{path:'/phppack',component:php},
{path:'/otherpack',component:other},
{path:'/memorandum',component:memorandum},
{path:'/studynote',component:studynote},
{path:'/autofocus',component:autofocus},
{path:'/ref',component:ref},
{path:'/drag',component:drag},
{path:'/drag2',component:drag2},
{path:'/drag3',component:drag3},
{path:'/drag4',component:drag4},
{path:'/drag5',component:drag5},
{path:'/resize',component:resize},


{path:'/loadingStyle',component:loadingStyle},
{path:'/uploadfiles',component:uploadfiles},
{path:'/loadimgs',component:loadimgs},
{path:'/refhtml',component:refhtml},
{path:'/refjs',component:refjs},
{path:'/refphp',component:refphp},
{path:'/regexp',component:regexp},
{path:'/refother',component:refother},
{path:'/input/accept',component:inputacc},
{path:'/btnstyle',component:btnstyle},
{path:'/refcss',component:refcss},
{path:'/refmysql',
  component:refmysql,
  children:[
        {
            path:'schema',
            component:schema
        },
        {
            path:'issue',
            component:issue
        }
    ],
},
{path:'/divpos',component:divpos},
{path:'/divbreak',component:divbreak},
{path:'/colorname',component:colorname},
{path:'/addlink',component:addlink},
{path:'/rdkp',component:readingkeeper},
{path:'/readingrec',component:readingrec},
{path:'/vrecorder',component:recorder},
{path:'/vrecorder2',component:recorder2},
{path:'/vdeliver',component:vdeliver},
{path:'/artyomjs',component:artyomjs},
{path:'/email',component:email},
{path:'/filehandler',component:filehandler},
{path:'/clickcopy',component:clickcopy},

//拆分到message.js中的路由

//配置404找不到页面
// {path: "/404",name: "notFound",component: notFound},
// {path: "*",redirect: "/404"},
]

const router = new VueRouter({
	mode:'history',//去除地址栏显示井号问题
	routes,

})

/*大写文本*/
Vue.filter('ucText',function(val){
	return val.toUpperCase();
})
/*大写首字母*/
Vue.filter('ucFirst',function(val){
	return val.charAt(0).toUpperCase()+val.slice(1);
})

//全局事件监听
let eventHandler = new Vue()
window.eventHandler=eventHandler
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// // 请求拦截器，session过期检查错误码，根据需要跳转到登录页，待测试（php.ini中设置过期时间session.gc_maxlifetime = 144秒）参考（https://www.cnblogs.com/duanzhenzhen/p/10663496.html）****************************
// 1. src目录下新建httpstatus.js文件，内容如下：
// 2. app.js中引入
// 3. 登录页设置login.vue


//自定义指定，用v-red来给标签内容添加样式
Vue.directive('textRed',{
    inserted:function(el){
        // el.style.background = 'red';
        el.style.color = 'red';
    }
});
// ********************************

const app = new Vue({
    el: '#app',
    router,
    data:{
      searchStr:'',
      sessionTimer:null,
    },

    components: {
      progressbar,
      expc,
    },
    methods:{
      // searchFun(){
      //   // console.log('#搜索开始..............');
      //   //注册全局搜索事件
      //   eventHandler.$emit('searching');
      // },
      searchFunIns:_.debounce(()=>{
        console.log('#输入监听1秒开始自动搜索..............');
        eventHandler.$emit('searching');
        },1000),
      globalPrint(){
          window.print();
          // alert('globalPring');
        },
      sessionListener(){
          // console.log('全局监听鼠标事件..........');
        let path = ['/login']
        if(!path.includes(this.$route.path)) { //如果不是登录页面的话页面停止进行30分钟后清空session
          clearTimeout(this.timmer);
          this.init();
        } 
        },
      init(){
        this.timmer=setTimeout(()=>{    
          //清除session
          console.log(sessionStorage)
          sessionStorage.removeItem("sessionData");
          sessionStorage.clear();

          // js跳转页面
          // window.location='http://'+window.location.hostname;
          // window.location.
          //清除缓存          
          // this.$cache.reset();
          //跳往登录页面          
          // this.$router.push({path: "/login",}); //跳转到单路由的登录页

        },30*60*1000);//设置时间30分跳转到登录页并清空session
        },

    },

 
   






}).$mount('#app');
