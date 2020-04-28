<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-success m-1">mounted下使用this.$nextTick()在页面加载好后调用方法设置色块颜色</button>
                        <button class="btn btn-success m-1">使用JS原生document.execCommand('copy')方法将色号复制到剪贴板(单击需要选择文本，双击自动选择不到井号)</button>
                        <a class="btn btn-success" href="https://clipboardjs.com/">使用clipboard.js可以有更多功能</a>

                    </div>
                    <div class="card-body">
                        <div 
                        class="cblock" 
                        v-for="c in colorArr" 
                        @click="copyColor()"
                        >{{c}}                            
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
                ctxt:['a','b','c','d','e','f',"0","1","2","3","4","5","6","7","8","9"],
                colorArr:[],
            }
        },

        methods: {
            computeColor(){
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
                var bk =document.getElementsByClassName('cblock');//所有色块
                var bknum =bk.length;//色块数量
                // console.log(bk+'setColor');
                for(var num=0;num<bknum;num++){
                    var color = bk[num].innerText;
                    bk[num].style.cssText = "background-color:"+color;
                    bk[num].addEventListener('click',function(){
                        // console.log(this)
                        // //***************复制只穿到剪贴板*********************
                        const input = document.createElement('input');
                        input.setAttribute('readonly', 'readonly');
                        document.body.appendChild(input);
                            input.setSelectionRange(0, 9999);
                            if (document.execCommand('copy')) {
                                document.execCommand('copy');
                                alert('色号复制成功,直接粘贴使用！');
                            }
                         document.body.removeChild(input);
                        //  //***************复制只穿到剪贴板*********************
                        // alert(this.innerText)

                        },false)
                }

            },
            copyColor(){
                // js.execCommand("Copy") ;


                // console.log(this.innerText)

            }
        },
        mounted() {
            // console.log('Component mounted.')
            this.computeColor();
            this.$nextTick(()=>{
                this.setColor();
            })

        },
        created() {
            // console.log('Component Created.')
            this.setColor();//不起作用
        }
    }
</script>
<style scoped="scoped">
    .cblock{
        position: relative;
        width: 30px;
        height: 30px;
        display: inline-block;
        margin:2px;
        line-height: 30px;
        text-align: center;
        font-size: 10px;
    }
</style>
