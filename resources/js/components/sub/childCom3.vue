<template>
  <div class="border">
    <p>子组件childCom3中使用父父父级组件的数据coo====: {{ coo }}</p>
    <p>childCom3中的$attrs: {{ $attrs }}</p>
  </div>
</template>
<script>
export default {
  props: {
    coo: String,
    title: String
  }
};
</script>