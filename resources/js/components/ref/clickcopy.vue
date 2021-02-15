<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">COLOR SELECTOR [Click on color blocks to copy color] <span><a href="http://tools.jb51.net/static/colorpicker/">颜色在线转换</a></span></div>
                    <div class="card-body">


<!-- *********************自动生成颜色区**********************  -->
<div class="shape cover" v-for="color in colorArr"> 
    <textarea :id="color" class="shape txtarea">{{color}}</textarea>
    <div class="shape screen">{{color}}</div> 
    <input type="button" @click="copyColor($event)" :value="color" class="shape btn"/>  

</div> 
<!-- ***************************************************************-->

<!-- ************************** -->
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
                ctxt:['a','b','c','d','e','f',"0","1","2","3","4","5","6","7","8","9"],
                colorArr:[],
            }
        },
        methods:{
            copyColor(e){
                console.log(e.target.value);//取得按钮的值
                var colorblock=document.getElementById(e.target.value);//根据按钮值查找对应ID的文本框
                colorblock.select(); // 选择文本框中的字符
                document.execCommand("Copy"); // 执行浏览器复制命令
                //提示弹窗
                swalt.fire({
                            icon: 'success',
                            html:'颜色号已复制到剪贴板,直接粘贴使用！',
                            cancelButtonAriaLabel: 'Thumbs down',
                            timer: 1500
                        })  
            },
            computeColor(){
                //生成颜色号到colorArr数组中
                for(var i=0;i<this.ctxt.length;i++){
                    for(var j=0;j<this.ctxt.length;j++){
                        for(var k=0;k<this.ctxt.length;k++){
                            // console.log('#'+this.ctxt[i]+this.ctxt[j]+this.ctxt[k]);
                            this.colorArr.push('#'+this.ctxt[i]+this.ctxt[j]+this.ctxt[k]);
                            // console.log(this.colorArr.length);
                        }  
                    }
                }
            },
            setColor(){
                //给类名为screen的div设置背景色
                var bk =document.getElementsByClassName('screen');//所有色块
                var bknum =bk.length;//色块数量
                // console.log(bk+'setColor');
                for(var num=0;num<bknum;num++){
                    var color = bk[num].innerText;
                    bk[num].style.cssText = "background-color:"+color;

                }

            },

        },
        mounted() {
            console.log('Component mounted.')            
            //先计算出颜色号
            this.computeColor();
            //再使用$nextTick设置颜色号到div
            this.$nextTick(()=>{
                this.setColor();
            })
        }
    }
</script>
<style scoped="scoped">




/* 外框 */
.cover{
    position: relative;
    display: inline-block;
    margin: 2px;
} 
.shape{
    width: 30px;
    height: 30px; 
    border-radius: 2px;
    text-decoration: none;   
}
/* 文本域 */
.txtarea{ 
    position:absolute; 

} 
/* 显示div */ 
.screen{ 
    position:absolute; 
    line-height: 30px;
    text-align: center;
    font-size: 10px;
} 
/* 按钮 */ 
.btn{ 
    position:absolute;
    opacity: 0; 

} 

</style>