<template>
  <div id="app">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h3>Three JS</h3>

                    </div> 
                    <div class="card-body">
                      <div>
                      </div>
                  
                    </div>                   
                </div> 
            </div>
        </div>      
    </div>
  </div>
</template>

<script>

  export default {
    data(){
    return{
        items:'',
        testarr:[1,2,3,4,5,6,7,8]
        }
    },
    computed:{


    },
    methods:{
      //设置背景
        setbg(){
          var doms = document.getElementsByClassName('setbg');
          // console.log(doms[0].getAttribute('ccode'));

          for(var i=0;i<doms.length;i++){ 
            var num = doms[i].getAttribute('ccode');//获取自定义透明度值
            // doms[i].style.opacity=0.5;//设置有效
            doms[i].style.opacity=num;  //设置透明度                   
          }


        },
       

    }
  }
</script>
<style scoped="scoped">
  .treeselect{
    border: 1px solid red;
  }
</style>