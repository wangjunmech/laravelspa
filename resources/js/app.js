require('./bootstrap');
window.Vue = require('vue');
import dashboard from './components/dashboard.vue'
import profile from './components/profile.vue'
import users from './components/users.vue'
import pdemo from './components/pdemo.vue'
import notFound from './components/notFound.vue'
import php from './components/study/dps-php.vue'
import js from './components/study/dps-js.vue'
import other from './components/study/dps-other.vue'
import studynote from './components/study/studynote.vue'
import autofocus from './components/study/autofocus.vue'
import ref from './components/study/ref.vue'
import loadingStyle from './components/study/loadingStyle.vue'
import uploadfiles from './components/study/upload.vue'
import loadimgs from './components/study/loadimgs.vue'
import reference from './route/reference.vue'
import refhtml from './components/ref/refhtml.vue'
import refjs from './components/ref/refjs.vue'
import refphp from './components/ref/refphp.vue'
import refother from './components/ref/refother.vue'
import inputacc from './components/ref/html/inputacc.vue'
import btnstyle from './components/ref/html/buttonStyle.vue'
import refcss from './components/ref/refcss.vue'
import divpos from './components/ref/css/divpos.vue'
import addlink from './components/study/addlink.vue'



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
{path:'/home',component:dashboard},
{path:'/dashboard',component:dashboard},
{path:'/profile',component:profile},
{path:'/users',component:users},
{path:'/passportdemo',component:pdemo},
{path:'/jspack',component:js},
{path:'/phppack',component:php},
{path:'/otherpack',component:other},
{path:'/studynote',component:studynote},
{path:'/autofocus',component:autofocus},
{path:'/ref',component:ref},
{path:'/loadingStyle',component:loadingStyle},
{path:'/uploadfiles',component:uploadfiles},
{path:'/loadimgs',component:loadimgs},
{path:'/refhtml',component:refhtml},
{path:'/refjs',component:refjs},
{path:'/refphp',component:refphp},
{path:'/refother',component:refother},
{path:'/input/accept',component:inputacc},
{path:'/btnstyle',component:btnstyle},
{path:'/refcss',component:refcss},
{path:'/divpos',component:divpos},
{path:'/addlink',component:addlink},

//配置404找不到页面
{path: "/404",name: "notFound",component: notFound},
{path: "*",redirect: "/404"},

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


// ********************************

const app = new Vue({
    el: '#app',
    router,
    data:{
      searchStr:'',
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
        console.log('#搜索开始..............');
        eventHandler.$emit('searching');
      },1000),
      globalPrint(){
        window.print();
        // alert('globalPring');
      }
    }
}).$mount('#app');
