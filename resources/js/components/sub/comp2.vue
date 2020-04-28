<template>
  <header>
    <!-- 绑定一个点击事件 -->
    <h5 @click="changeTitle">{{title}}</h5>
  </header>
</template>
<script>
export default {
  name: 'comp2',
  data() {
    return {
      title:"click to see the change"
    }
  },
  methods:{
    changeTitle() {
      this.$emit("titleChanged","子向父组件传的值");//自定义事件  传递值“子向父组件传值”
    }
  }
}
</script>