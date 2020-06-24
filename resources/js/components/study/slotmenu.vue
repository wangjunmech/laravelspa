<template>
  <div id="slotmenu">
      <h3>Slot Menu component</h3>
      <div><slot></slot></div>
      <div><slot name="partname"> def_name</slot></div>
      <div><slot name="partnumber"> def_number</slot></div>
      <div><slot name="partweight"> def_weight</slot></div>
    <button @click = "changeText" @mouseover="changeStatus($event)" @mouseout="changeStatusback($event)"><slot name="header">父组件中没header的时候会显示</slot></button>
    <p><slot name="footer">父组件中没footer的时候会显示</slot></p>
  </div>
</template>
<script>
export default {
 name: 'slotmenu',
 data () {
 return {
  options: {
  

  },

 }
 },
 methods:{
  changeText(){
    console.log('changeText.........')
  },
  changeStatus(event){
    console.log('changeStatus.........')
    // console.log(event.target)
    event.target.style.color="blue"
  },
  changeStatusback(event){
    console.log('changeStatusback.........')
    // console.log(event.target)
    event.target.style.color="red"
  }
 }

}
</script>

<style scoped="scoped">
    #slotmenu{
    background-color: pink;
  }

</style>