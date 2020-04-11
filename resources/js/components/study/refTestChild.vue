<template>
  <div></div>
</template>

<script>
export default {
  prop: ['month'],
  computed: {},
  methods: {
    showMonth () {
      console.log(`当前组件${this.month}`)
    }
  },
  created () {}
}
</script>
