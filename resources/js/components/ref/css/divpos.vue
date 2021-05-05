<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Div对齐方式(\resources\js\components\ref\css\divpos.vue)</div>
                    <div class="card-body">
                        <div class="box">                            
                            <div style="display: inline-block;float: left; width:200px;height:200px; border:2px solid #f00;display:flex;justify-content:center;align-items:center;">
                                <div style="width:100px;height:100px; background-color: #0f0">OOO</div>
                            </div>
                            <div style="display: inline-block;float: left; width:200px;height:200px;border:solid blue;position:relative;">
                                <div style="width:100px;height:100px;margin: auto;  position: absolute;  top: 0; left: 0; bottom: 0; right: 0; background: cyan;">111</div>
                            </div>
                            <div style="display: inline-block;float: left; width:200px;height:200px;border:2px solid #000;">
                                <div style="width:100px;height:100px;display:inline-block;background-color: cyan">TTT111---上左</div>
                            </div>
                            <div style="display: inline-block;float: left; width:200px;height:200px;border:2px solid #000;text-align: center;">
                                <div style="width:100px;height:100px;display:inline-block;background-color: cyan">TTT222---上中</div>
                            </div>
                            <div style="display: inline-block;float: left; width:200px;height:200px;border:2px solid #000;text-align: right;">
                                <div style="width:100px;height:100px;display:inline-block;background-color: cyan">TTT333---上右</div>
                            </div>
                            <div style="position:relative;float: left; width:200px;height:200px;border:2px solid #000;">
                                <div style="width:100px;height:100px;display:inline-block;background-color:cyan;position:absolute; bottom:0;">BBB111---下左</div>
                            </div>
                            <div style="position:relative;float: left; width:200px;height:200px;border:2px solid #000;">
                                <div style="width:100px;height:100px;display:inline-block;background-color:cyan;position:absolute; bottom:0;margin:auto;left: 0;right: 0;">BBB222---下中</div>
                            </div>
                            <div style="position:relative;float: left; width:200px;height:200px;border:2px solid #000;">
                                <div style="width:100px;height:100px;display:inline-block;background-color:cyan;position:absolute; bottom:0;right: 0;">BBB333---下右</div>
                            </div>
                            <div style="position:relative;float: left; width:200px;height:200px;border:2px solid #000;">
                                <div style="width:100px;height:100px;background-color:cyan;margin-top: 50px">MMM111---中左</div>
                            </div>
                            <div style="position:relative;float: left; width:200px;height:200px;border:2px solid #000;align-items: center">
                                <div style="width:100px;height:100px;background-color: cyan;position: absolute;top:25%; 
border:1px solid #00F;margin-left:0;">MMM222---中左2</div>
                            </div>
                            <div style="position:relative;float: left; width:200px;height:200px;border:2px solid #000;align-items: center">
                                <div style="width:100px;height:100px;background-color: cyan;position: absolute;top:25%; 
border:1px solid #00F;margin-left:50%;">MMM333---中</div>
                            </div>
               <!--              <div>                            
                                <div style="width:200px;height:200px; border:2px solid #0f0;position:relative;">
                                <div style="width:100px;height:100px;margin:auto;position:absolute;left:50%;top:50%;margin-left: -50px;margin-top:-50px;background-color: pink">333</div>
                            </div>   -->
                                
                            </div>

                        
                        </div>
                        <hr>
                            <div style="width:200px;height:200px; border:2px solid #0f0;position:relative;">
                                <div style="width:100px;height:100px;margin:auto;position:absolute;left:50%;top:50%;margin-left: -50px;margin-top:-50px;background-color: pink">555</div>
                            </div> 
                        <hr>
                        <h2>DIV重叠</h2>
                          <div >
                            <div style="position:absolute;font-size:120px;background:green;z-index: 1;width: 100%;">A</div>
                            <div style="position:relative;font-size:120px;opacity: 1;z-index: 2;">B</div>
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
            return {
                imgurl:'/logos/404.jpg'
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
    .box{

    }

    /*垂直居中 */
.dib_vm {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}

/*垂直 */
.dib_v {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}

/*两端左右对齐 */
.dib_lr {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}
/*左到右*/
/*left to right*/
.ltor{
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
     -webkit-box-direction: normal;
     -webkit-box-orient: horizontal;
     -moz-flex-direction: row;
     -webkit-flex-direction: row;
     flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}
</style>