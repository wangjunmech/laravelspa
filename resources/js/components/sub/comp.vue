<template>
  <div id="comp" class="hello">
    <p>comp子组件</p>
    <ul>
      <li v-for="user in users">{{user}}</li>
      <!-- //遍历传递过来的值，然后呈现到页面 -->
    </ul>
  </div>
</template>
<script>

export default {
  name: 'comp',
  props:{
    users:{           //这个就是父组件中子标签自定义名字
      type:Array,
      required:true
    }
  }
}
</script>