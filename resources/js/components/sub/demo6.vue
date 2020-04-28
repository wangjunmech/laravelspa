<template>
  <div class="refindemo6">
    <h3>组件demo6.vue</h3>
    <div>
      <input type="text" ref="input2" id='input1'>
      <input type="text" ref="input4">
      <button @click="addref2">ADD,需要先点下面父组件的按钮先，不然第二个输入框不能取值，这是顺序问题</button>
    </div>  
  </div>
</template>
<script>
export default {
  data () {
    return {
      title: 'demo6-Vue.js'
    }
  },
  methods: {
    sayHello () {
      window.alert('Hello');
    },    
    addref2(){
      this.$refs.input2.value="DEMO6666666666666";
      this.$refs.input4.value=this.$parent.$refs.input1.value;
    }
  }
}
</script>