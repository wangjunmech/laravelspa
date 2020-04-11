<template>
    <!-- SOURCE -->
    <div class="container">
          <div class="col-md-12 mt-2">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Loading style CSS</h3> 

              </div>
              <!-- /.card-header -->
              <div id='loadblock'>
                <div class="loading">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                </div>
                <div class="tj">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer justify-content-center" >
 
              </div>
            </div>
            <!-- /.card -->


          </div>
         <!-- Add or user Modal -->
            
    </div>
  <!-- OUTPUT -->

</template>

<script>
    export default {  
        data(){
            return{
                users:{},
               }
        }, 
        


    }
</script>
<style scoped="scoped">

/*这里是组件样式scoped，全局样式在sass\app.scss中*/

</style>