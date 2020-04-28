<template functional>
  <div class="border2">
    <h3 :style="{ color: injections.theme.color }">组件childCom4.vue</h3>
    <h3 v-text="{testdata: injections.testdata.test1}"></h3>
    <h3 v-text="{testdata: injections.testdata.test2}"></h3>
    <h3>{{subData}}</h3>
    <h3>DARA3</h3>
    <h3 v-text="injections.testdata.test1"></h3>
    <h3 v-text="injections.testdata.test2"></h3>
    <h3 v-text="injections.testdata.test3"></h3>
    <div class="alert alert-danger">
      <p>子组的样式可以父组件中声明，父组件的scoped声明不影响子组件中使用父组件的样式类</p>
    </div>
  </div>
</template>
<script>
export default {
  data(){
    return {
      subData:"testdata222",
    }
  },
  inject: {
    theme: {
      //函数式组件取值不一样
      default: () => ({})
    },
    testdata:{
      default:() => ({})
    }
  },
  mounted(){
    // console.log(this.testdata)

  }
};
</script>