<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Email</h3></div>
                    <div class="card-body">
                      <div class="input-group">
                        <span class="input-group-addon" id="">收件人邮箱</span>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group">
                        <span class="input-group-addon" id="">抄送邮箱</span>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group">
                        <span class="input-group-addon" id="">主题</span>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group">
                      <textarea id='textarea' class="form-control" style="margin-top: 20px;margin-bottom: 20px"></textarea>
                      </div>
                      <button class="btn btn-primary" id="" style="margin: 0px auto;display: table;"
>Send Email</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

// import annyang from "./function/annyang.min.js"
import annyang from "./../../function/annyang.min.js"
// var annyang = new annyang();
console.log(annyang);

export default {
  data(){
      return {
          imgurl:'/logos/404.jpg'
      }
  },
  components: {

  },
  mounted() {
      console.log('Component Email mounted.')
      var textArea = document.getElementById("textarea");
      this.textAreaAutoHeight(textArea);
      // console.log(this.annyang)
      if (annyang) {
        console.log('annyang ***annyang***annyang***annyang.')
        // Let's define a command.
        var commands = {
          'hello': function() { alert('Hello world!'); }
        };

        // Add our commands to annyang
        annyang.addCommands(commands);

        // Start listening.
        annyang.start();
      }else{
        console.log('annyang does not work properly.')

      }
  }
}
</script>
<style scoped="scoped">
  .input-group-addon{
    width: 100px;
    line-height: 40px;
    vertical-align: center;
  }
  
</style>
