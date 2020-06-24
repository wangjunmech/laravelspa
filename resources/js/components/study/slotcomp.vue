<template>
  <div id="slotcomp">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3>slot测试,子组件背景pink,点击按钮显示</h3>
                  </div>
                    <div class="card-body">


      <button @click="showChild">点击显示子组件slotmenu</button>

                      <slotmenu v-if="show">
                        hello

                      <div slot ="partname"> part_name</div>
                      <div slot ="partnumber"> part_number</div>
                      <div slot ="partweight"> part_weight</div>
                      <hr>
                      <hr>
                      <hr>
          <h3 slot="header" @click="clickBtn" v-textRed>slot特殊用途：此按钮必须要点击按钮文字的区域，点击按钮边缘无console输出效果</h3>
          <h3 slot="footer">footer</h3>
          <div class="btnarr" >
 
            <button class="arrbtn" v-for="cate in categories">{{cate}}</button>       

          </div>


                      </slotmenu>             
                      
                    </div>

                </div>
            </div>
        </div>      
    </div>
  </div>
</template>
<script>
import slotmenu from './slotmenu'
export default {
  name: 'slotcomp', 
  components:{
    'slotmenu':slotmenu
  },
  data() {
   return {
      categories:[1,2,3,4,5,6,7,8,9],//接收后台返回的数据
      categoriesjson:null,
      show:false,
   }
 },
  methods: {
    toggleChildren: function(item) {
       item.expanded = !item.expanded;
       },

    showdata:function(){
      // console.log(this.categoriesjson)
    },

    clickBtn () {
      console.log('Hello')
    },

    showChild(){
      this.show=!this.show;
    },
 },

mounted() {

 }
}
</script>

<style scoped="scoped">
  .btnarr{
    width:600px;
    height: 50px;
    background-color: #ada;
    overflow: hidden;
    line-height: 10px;
  }
  .arrbtn{
    position: relative;
    height: 30px;
    width: 50px;
    margin: 0 auto;
    display: flex || inline-flex;
  }

</style>
