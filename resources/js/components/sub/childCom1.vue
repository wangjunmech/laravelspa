<template class="border">
  <div>
    <p>子组件childCom1中使用父组件的数据: {{ foo }}</p>
    <p>childCom1的$attrs: {{ $attrs }}</p>
    <child-com2 v-bind="$attrs"></child-com2>
    <div class="alert alert-success">父组件vdeliver中使用provide声明的数据，非响应式inject:['vname']取得的值为::::::{{this.vname}}</div>
  </div>
</template>
<script>
const childCom2 = () => import("./childCom2.vue");
export default {
  inject:['vname'],
  components: {
    childCom2
  },
  inheritAttrs: false, // 可以关闭自动挂载到组件根元素上的没有在props声明的属性
  props: {
    foo: String // foo作为props属性绑定
  },
  created() {
    console.log(this.$attrs); // { "boo": "Html", "coo": "CSS", "doo": "Vue", "title": "前端工匠" }
  }
};
</script>