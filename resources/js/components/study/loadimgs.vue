<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Upload imgs</h3></div>
                    <div class="card-body">
                            <div class="form-group">
                              <label class="control-label">上传图片</label>
                              <div class="control-form">
                                <p class="help-block">(建议图片格式：JPEG/BMP/PNG/GIF，大小不超过2M，最多可上传2张)</p>
                                <input type="file" class="btn btn-success" @change="addImg" ref="inputer" multiple accept="image/*"/>
                                <ul class="imgbox">
                                  <li v-for='(value, key) in imgs'>
                                    <p class="img">
                                        <img :src="getObjectURL(value)" style="width: 100%;max-height:100px">
                                        <a class="close" @click="delImg(key)">×</a></p>
                                  </li>
                                </ul>

                                  <div v-if="imgLen<=2 ? true : false">
                                    <a href="#" @click="submit"><button class="btn btn-success">点击上传</button ></a>
                                  </div>
                                  <div v-else>
                                    <a><button class="btn btn-danger">最多同时上传2张,请删掉一些吧！</button ></a>
                                  </div>
                              </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Upload files with form</h3></div>
                    <div class="card-body">
   
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        formData:new FormData(),
        imgs: {},
        imgLen:0,
      }
    },
    methods: {
      addImg(event){
        let inputDOM = this.$refs.inputer;
        // console.log(this.$refs.inputer.files)
        // 通过DOM取文件数据
        this.file = inputDOM.files;
        for (let i=0; i < this.file.length; i++) {
          let size = Math.floor(this.file[i].size / 1024);
          if (size > 2*1024*1024) {
            alert('请选择2M以内的图片！');
            return false
          }
          this.imgLen++;
          // console.log(this.imgLen)//图片张数imgLen
          this.$set(this.imgs,this.file[i].name+'?'+new Date().getTime()+i,this.file[i]);
        }
      },
      getObjectURL(file) {
        var url = null ;
        if (window.createObjectURL!=undefined) { // basic
          url = window.createObjectURL(file) ;
        } else if (window.URL!=undefined) { // mozilla(firefox)
          url = window.URL.createObjectURL(file) ;
        } else if (window.webkitURL!=undefined) { // webkit or chrome
          url = window.webkitURL.createObjectURL(file) ;
        }
        // console.log(url+'>>>>');
        return url ;
      },
      delImg(key){
        this.$delete(this.imgs,key);
        this.imgLen--;
      },
      submit(){
        console.log(this.imgs)
        for(let key in this.imgs){
          let name=key.split('?')[0];
          this.formData.append('multipartFiles',this.imgs[key],name);
        }
          // console.log(this.formData);
        //   // console.log("********");
        axios.post('/api/loadimgs', this.formData,{
          headers: {'Content-Type': 'multipart/form-data'}
        }).then(res => {
          console.log('服务器返回....')
          console.log(res.data)
        });
      },
    }
  }
</script>
<style scoped="scoped">
.imgbox li{margin: 10px;padding: 10px; position: relative;width: 120px;height: 120px;display: inline-block;border: 2px dashed #bbb;}
.imgbox li:hover{border: 1px dashed #f00;}
.imgbox li .upload{position: absolute;top: 0;bottom: 0;left: 0;right: 0;width: 120px;height: 120px;}
.imgbox .img{position: relative;line-height: 100px;}
.imgbox .img img{vertical-align: middle;}
.imgbox .img .close{display: none;}
.imgbox li:hover .img .close{display: block;position: absolute;right:-6px;top:-6px;font-size: 33px;color: red;}
.close{
    cursor: pointer;
}
</style>