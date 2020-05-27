<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header"><h3>Upload files, you can select and drag drop</h3></div>
            <div class="card-body">
              <div>
                </div>
                  <div class="uploader" 
                    @dragenter="onDragEnter"
                    @dragleave="onDragLeave"
                    @dragover.prevent
                    @drop="onDrop"
                    :class="{dragging : isDragging}"
                    >
                        <i class="fa fa-upload" aria-hidden="true"></i>           
                        <p>Drag your images here</p>

                      <div v-show="!imgLen">
                        <div >
                        <div class="uploadbtn">
                          <label v-show="hasFile" for="file" class="button-bevel orangeColor">Select more files</label>
                          <span v-show="hasFile" class="button-bevel greenColor" @click="uploadFun">Upload files</span>
                        </div>
                          <label v-show="!hasFile" for="file" class="button-bevel orangeColor">Select files</label>
                          <input id='file' type="file" class="inputfile" @change="fileByBtnSelect" ref="inputer" multiple
                           />
                           <!-- accept="image/*" 设置文件域文件类型限制-->
                           <!-- accept属性<input accept="audio/*,video/*,image/*" /> -->
                        </div> 
                      </div>    
                      <div v-show="!imgLen" class="img-preview">
                        <div class="imgwraper" v-for="(image,index) in images" :key="index">
                          <span class="closesign" @click="delImg(index)">×</span>
                          <img :src="image" alt="`Image Uploader ${index}`">
                          <div class="details">
                            <span class="name" v-text="files[index].name"></span>
                            <span class="size" v-text="getFileSize(files[index].size)"></span>
                          </div>
                         
                        </div> 
                      </div> 
                    </div> 
                      <!-- Button trigger modal -->
                      <button type="button" id="popinfo" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" v-show=0>
                        模态框按钮
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">倒计时提示！</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                                <div class="modal-body">成功上传图片！<span id='dtime'>5</span>秒后自动刷新页面！</div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>


    </div>
</template>

<script>
  export default {
    data() {
      return {
        images:[],//images用于前台显示
        files:[],//files用于提交后台
        imgLen:0,
        hasFile:0,
        isDragging:false,//是否在拖动中
        movecounter:0,//记录鼠标移入移出的次数用于正常显示拖拽状态
        formData:new FormData(),
      }
    },
    computed:{
      // "hasFile":function(){
      //   return this.files.length;        
      // }, 
    },
    watch: {
         hasFile() {
          // alert(this.files.length);
          this.hasFile = parseInt(this.files.length);        
         }
      },
    methods: {
      onDragEnter(event){
        // console.log("dragging-onDragEnter");
        event.preventDefault();
        this.isDragging=true;
        this.movecounter++;  
      },
      onDragLeave(event){
        // console.log("dragging-onDragLeave");
        event.preventDefault();
        this.movecounter--;
        if(this.movecounter<=0){
        this.isDragging=false; 
        }
      },
      onDrop(event){
        // console.log("dragging-onDrop");
        event.preventDefault();//阻止默认行为
        event.stopPropagation();//阻止事件传播
        this.isDragging=false; //取消鼠标移入状态标记
        const selectedFiles = event.dataTransfer.files;//获取文件
        // console.log(selectedFiles);
        var fileNum=Array.from(selectedFiles).length;
        if(fileNum){
          this.imgLen=0;
          // alert(fileNum);
        }
        this.hasFile=fileNum;
        Array.from(selectedFiles).forEach(
          file=>this.addImg(file)
          );

      },
      fileByBtnSelect(){
        console.log('Add imgs from input');
        // //处理Input选择的文件

        let inputDOM = this.$refs.inputer;
        console.log(this.$refs.inputer.files)
        // 通过DOM取文件数据
        const selectedFiles = inputDOM.files;
        // console.log(selectedFiles);
 
    var fileNum=Array.from(selectedFiles).length;
        if(fileNum){
          this.imgLen=0;
          // alert(fileNum);
        }
        this.hasFile=fileNum;
        Array.from(selectedFiles).forEach(
          file=>this.addImg(file)
          );
      },
      addImg(file){
        console.log('Add img from dragdrop');
        //上传文件类型控制设置
        var fileType='image.*';
        // var fileType='pdf.*';
        // var fileType='image.*';
        // //处理拖拽文件检查文件类型，如果不是图片输出提示
        if(!file.type.match(fileType)){
          alert(`${file.name} 文件格式不被允许!`);
          return;
        };
        this.files.push(file); 
        const img = new Image();
        var reader = new FileReader();
        reader.onload = (e)=>this.images.push(e.target.result);
        reader.readAsDataURL(file);
      },
      delImg(id){
        // 删除图片
        console.log(this.images);
        // this.images.$delete(this.images[id]);
        // console.log(this.isObjArr(this.images));
        this.images.splice(id,1);
        this.files.splice(id,1);

        // this.imgLen--;
    
      },
      isObjArr(value){
       if (Object.prototype.toString.call(value) === "[object Array]") {
            console.log('value是数组');
       }else if(Object.prototype.toString.call(value)==='[object Object]'){
            console.log('value是对象');
      }else{
          console.log('value不是数组也不是对象')
      }
      },

      uploadFun(){
        // console.log(this.images);
        // console.log(this.files);//Array [ File, File ],发送到后台处理
        // const formData = new formData();
        this.files.forEach(file=>{
          this.formData.append('images[]',file,file.name);
        });
        axios.post('/api/loadimgs',this.formData)
        .then(response=>{
          console.log(response.data)
          // console.log('上传成功后提示完成并刷新页面111');
          var btn=document.getElementById('popinfo');
          btn.click();
          // dltime=8;

          //模态框倒计时提示跳转刷新
          var timer=window.setInterval(function(){
            var dtime=document.getElementById("dtime");
            dtime.style.color="red"
            dtime.style.fontSize="30px"
            var old = dtime.innerText;
            // alert(old);
            var newtime=old-1;
            dtime.innerText=newtime;
                console.log('输出提示！'+newtime+'===')
            if(newtime<1){
                // location. reload();//刷新页面
                clearInterval(timer);
              setTimeout(
              ()=>{ 
              location. reload();//刷新页面
              }, 
              100);

            }
          },1000);   
        })
  

      },
      getFileSize(size){
        const fsExt = ['Bytes','KB','MB','GB','TB',];
        let i=0;
        while(size>1023){
          size/=1024;
          i++;
        }
        return `${(Math.round(size*100)/100)} ${fsExt[i]}`;
      }     
      
    }
  }
</script>
<style scoped="scoped">
.uploader {
  background-color: aqua;
  border: 2px dashed coral;
  border-radius: 20px;
  padding: 15px;
  align-content: center;
  text-align: center;
  font-size: 20px;
  color: gray;

}
/*拖入样式*/
.dragging{
  opacity: 50%;
  background: red;
}
/*图标大小*/
.fa-upload{
  font-size: 40px;
  color: mediumpurple;
}

/*隐藏默认文件域*/
.inputfile{
  /*display: none;*/
  position: absolute;
  opacity: 0;

}
/*选择按钮标签样式*/
.cover{
  background-color: blue;
  padding: 5px;
  border-radius: 5px;
}
.selectmore{
  background-color:yellow;
  padding: 5px;
  border-radius: 5px;
  cursor: pointer;
}
.upload{
  background-color:#AEF308;
  padding:10px;
}

.selectmore,.upload{
  border-radius: 5px;
  cursor: pointer;
  opacity: 100%;
}
.selectmore:hover,.upload:hover{
  opacity:80%;
}
.cover:hover{
  background-color: yellow;
}
/*图片列表*/
.img-preview{
  display: flex;
}
/*图片框*/
.imgwraper{
    margin: 10px;
    position: relative;
    width: 120px;
    height: 150px;
    display: inline-block;
    border: 2px dashed #bbb;
    box-shadow: 5px 5px 20px #F10C0C;

}
img{
  
  max-width: 120px;
  height:100px;
}
/*图片框事件*/
.imgwraper:hover{border: 1px dashed #f00;}

/*图片名称和大小*/
.details{
font-size: 12px;
background-color: #fff;
color: #000;
display: flex;
flex-direction: column;
}


.closesign{
  display: block;
  position: absolute;
  right:-16px;
  top:-16px;
  font-size: 24px;
  color: red;  
}
.closesign{
    cursor: pointer;
}
/*.closesign{display: none;}*/



</style>