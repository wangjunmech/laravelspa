<template>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h3>日程计划管理</h3></div>
        <div class="card-body">
          <timeboard></timeboard>

        </div>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import timeboard from "./timeboard.vue"
export default {
  components:{
    timeboard,
  },
  name: 'scheduler',
  provide(){
    return {
    items: this.items,
    }
  },
 data () {
  return {
   items: [
    { key: 1, pnumber:111, num:60, color: '#fdf'},
    { key: 2, pnumber:222, num:660, color: '#ada'},
    { key: 3, pnumber:333, num:300, color: '#cdc'},
    { key: 4, pnumber:444, num:20, color: '#afc'},
    { key: 5, pnumber:555, num:120, color: '#bdb'},
    { key: 6, pnumber:666, num:60, color: '#ddf'},
    { key: 7, pnumber:777, num:150, color: '#cda'},
    { key: 8, pnumber:888, num:400, color: '#adc'},
    { key: 9, pnumber:999, num:350, color: '#bfc'},
    { key: 10, pnumber:100, num:800, color: '#fdb'},
   ],    
  }
 },
 methods:{
  test(){
  },

 }
}
</script>
 
<style scoped>

</style>