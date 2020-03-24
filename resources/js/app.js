/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import dashboard from './components/dashboard.vue'
import profile from './components/profile.vue'
import users from './components/users.vue'

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


window.Vue = require('vue')

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

let routes = [
{path:'/',component:dashboard},
{path:'/home',component:dashboard},
{path:'/dashboard',component:dashboard},
{path:'/profile',component:profile},
{path:'/users',component:users},
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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
}).$mount('#app');
