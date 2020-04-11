<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        组件使用示例：
                        <ol>
                            <li>在app.js中引入组件（注意引入注册名称不能用大小写，如ExampleComponent是显示不出来的，import expc from './components/ExampleComponent.vue'
这里要把驼峰写法改名引用</li>
                            <li>在app.js的new vue对象的组件下引入（const app = new Vue({components: {
      progressbar,
      expc,
    },
})）</li>
                            <li>在app.js中引入组件（注意引入注册名称不能用大小写，如ExampleComponent是显示不出来的</li>
                            <li>在app.js中引入组件（注意引入注册名称不能用大小写，如ExampleComponent是显示不出来的</li>
                             
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
