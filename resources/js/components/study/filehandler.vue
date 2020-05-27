<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Files handler</h3></div>
                    <div class="card-body">
                      程序功能----本程序将对同一目录下的所有文件名进行相同的批量操作。对同一目录下面的所有文件（不含文件夹）进行操作，如，在所有文件名前加上相同的前缀，去掉相同的前缀，加上相同的后缀，去掉相同的后缀。
使用方法：<br>
1.填写路径指定文件夹位置，将可以对该文件夹内的所有文件的文件名进行操作.<br>
2.增加或删除框内填入相应内容.<br>
3.扩展名如果不填写，增加前缀或后缀操作将针对所有文件名进行操作，如果填写了扩展名则只对该类型的文件进行操作。<br>
补充说明：删除前缀或后缀只对文件前缀或后缀名能匹配到的文件进行操作，不会对其它文件造成任何影响。<br>
<font color="red">待改进：<br>
1.选择目录</font>
<pre>
    
</pre>

<div class="mfield">
        <form id="myForm" action="#" enctype="multipart/form-data" >
                <fieldset>
                    <legend>文件名批量修改程序：</legend>
                    

        <input type="file" webkitdirectory directory multiple @change="funtest" ref="inputer" />文件域只能选择多文件但不能选择目录，只能使用复制路径


                    <p><label for="path">填入文件夹路径：</label>
                      <input type="text" name="path" id="path" value="" v-model="form.mdir"/>{{form.mdir}}
                      如：D:\project\foder，最好是复制粘贴以保证操作性。</p>

                    <!--  <p><label for="path">填入文件夹路径：</label>
                      <input type="file" name="path" id="path" value="<?php echo $_POST['path']?>"/>
                      如：D:\project\foder，最好是复制粘贴以保证操作性。</p> -->
        <input type="button" class="btn btn-primary" name='sgbtn' @click="sgbtnFun($event)" value="删除相同前缀">
        <input type="button" class="btn btn-primary" name='sgbtn' @click="sgbtnFun($event)" value="增加相同前缀">
        <input type="button" class="btn btn-primary" name='sgbtn' @click="sgbtnFun($event)" value="删除相同后缀">
        <input type="button" class="btn btn-primary" name='sgbtn' @click="sgbtnFun($event)" value="增加相同后缀">
        <input type="button" class="btn btn-primary" name='sgbtn' @click="sgbtnFun($event)" value="删除文件名中间指定字符">

        <p></p>   
            
        <label for="da" >删除相同前缀 </label>
        <input type="text" name="inputgroup" id='da' value="" v-model="form.da"/>{{form.da}}
        如：<span class="a1"><s>AAAA</s></span>-name1.txt
        </li>
        <br />
                        
        <label for="aa" >增加相同前缀 </label>
        <input type="text" name="inputgroup" id="aa" border="2" value="" v-model="form.aa"/>{{form.aa}}
        </li>
        <label for="label">如：<span class="a1">AAAA</span>-name1.txt</label>
        </li>
        <br />
                          
                        
                          
        <label for="db">删除相同后缀</label>
        <input type="text" name="inputgroup" id="db" value="" v-model="form.db"/>{{form.db}}
        <label for="label">如：name1-<span class="a1"><s>AAAA</s></span>.txt</label>
        </li>
        <br />

        <label for="ab">增加相同后缀</label>
        <input type="text" name="inputgroup" id="ab" value="" v-model="form.ab"/>{{form.ab}}
        如：name1-<span class="a1">AAAA</span>.txt 
        </li>
        <br />

        <label for="m">删除文件名中间指定字符</label>
        <input type="text" name="inputgroup" id="m" value="" border="2" v-model="form.m"/> {{form.m}}           
        <label for="label">如：name测试这是一个<span class="a1"><s>测试</s></span>一个测试一个测试bbb.txt</label>
        </li>
        </p>
        <p><label for="ext">筛选仅对扩展名为</label>
        <input type="text" name="ext" id="ext" value="" v-model="form.ext"/>{{form.ext}}
        的文执行！不需要输入点.如上面的求示例扩展名为txt</p>

        <label for="">&nbsp;&nbsp;</label>
        <input type="button" name="btn" class="btn btn-primary" value="执行操作" @click="modifyFiles"/>
        <input type="button" class="btn btn-danger" @click="formReset" value="清空表单重置">
        </fieldset>
        </form>
</div>
<div class="mfield">
    <form action="#" method="post">
    <fieldset>
        <legend>创建和删除目录</legend>
        <p><label for="dirToCreate">输入路径创建文件夹</label>
                        <input type="text" name="dirToCreate" id="dirToCreate" value="" v-model="folderform.createdir" />{{folderform.createdir}}
                        <input type="button" name="creatDir" class="btn btn-primary" @click="funCreatDir()" value="创建目录" />
                        <span>例如："D:/a/b/c/d/e/f/g/h/j/k/l"</span>
                        </p>
        <p><label for="ddir">输入路径删除文件夹</label>
                        <input type="hidden" name="flag" id="flag"></input>
                        <input type="text" name="ddir" id="ddir"  v-model="folderform.removedir"/>{{folderform.removedir}}
                        <input type="button" name="removeDir" class="btn btn-danger" @click="funRmDir()" value="删除目录"/>
                        <span>例如："D:/a/b/c/d/e/"</span>
                        </p>

    </fieldset>
    </form>
</div>
<div class="mfield">
    <form action="#" method="post">
    <fieldset>
        <legend>批量复制文件名 (不复制子目录,目标目录如果不存在则创建)</legend>
        <span>把一个目录下的文件名全部取出，在新目录下创建相同名的文件，用于文件名修改测试</span>
        <p><label for="odir">源文件目录</label>
                        <input type="text" name="odir" id="odir" value="" v-model="copyform.odir"/>{{copyform.odir}}
                        <span>例如："D:/a/b/c/d/e/f/g/h/j/k/l"</span> <span>D:\Screen snap</span>
                        </p>
        <p><label for="cpdir">目标目录</label>
                        <input type="hidden" name="flag" id="flag"></input>
                        <input type="text" name="cpdir" id="cpdir" v-model="copyform.cpdir" value="" />{{copyform.cpdir}}
                        <span>例如："D:/a/b/c/d/e/"</span> <span>I:\temp</span>
                        </p>
                        <input type="button" class="btn btn-success" name="dsubmit" @click="copyfiles" value="复制文件名"/>

    </fieldset>
    </form>
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
                info:'iiiFFF',                
                contentArr:[],
                form:new Form({
                    mdir:'I:\\temp\\临时文件夹333',
                    da:'',
                    aa:'',
                    db:'',
                    ab:'',
                    m:'',
                    ext:'',
                }),
                copyform:new Form({
                    odir:'I:\\temp\\临时文件夹',
                    cpdir:'I:\\temp\\临时文件夹333',                    
                }),
                folderform:new Form({
                    createdir:'I:\\temp\\A\\上上上\\c\\d',
                    removedir:'I:\\temp\\A',                   
                }),

            }
        },
        methods:{
            sgbtnFun(e){
                // console.log(e.target);
                // var btns = document.getElementsByTagName('sgbtn');
                var btns = document.getElementsByName('sgbtn');
                var inputgroup = document.getElementsByName('inputgroup');

                for(var i=0;i<btns.length;i++){
                    btns[i].classList.remove('btn-danger');
                    btns[i].classList.add('btn-primary');
                    inputgroup[i].style.visibility='hidden'
                }
                e.target.classList.remove('btn-primary');
                e.target.classList.add('btn-danger');
                // console.log(e.target.value);

                var selectedbtn
                switch (e.target.value) 
                    { 
                      case '删除相同前缀':selectedbtn="da"; 
                      break; 
                      case '增加相同前缀':selectedbtn="aa"; 
                      break; 
                      case '删除相同后缀':selectedbtn="db"; 
                      break; 
                      case '增加相同后缀':selectedbtn="ab"; 
                      break; 
                      case '删除文件名中间指定字符':selectedbtn="m"; 
                      break; 
                    }
                console.log(selectedbtn);
                // document.getElementById(selectedbtn).style.visibility="hidden";
                document.getElementById(selectedbtn).style.visibility="visible";


            },
            funtest(){
                console.log('funtest');
            },
            modifyFiles(){
                // console.log(this.mdir+this.da+this.aa+this.db+this.ab+this.m+this.ext)
                console.log('Going to modify Files!!!!!!!')
                // console.log(this.form.toString())
                console.log(JSON.stringify(this.form))
                try {
                    if(this.form){
                        console.log('========');
                        // console.log(this.mdir.toString());
                        // console.log(JSON.stringify(this.mdir));
                        axios.post('api/mfiles', this.form)
                              .then(function (response) {
                                console.log(response);
                              })
                              .catch(function (error) {
                                console.log(error);
                              });
                    }


                }
                catch (e) {
                    alert(e.message);
                }
                console.log('==-----------==');

            
            },
            formReset(){
                  document.getElementById("myForm").reset()
            },
            disp_confirm(){
              // ddir = '<?php echo $ddirname; ?>'; 
              // console.log('ddir');
              var dname,ddir;
                  dname = document.getElementById("ddir");
                  ddir = dname.value;
                  // alert(ddir);
              if(ddir!=''){
              // alert (ddir);
              // flag = getElementById('flag');
              var r=confirm("JS确定要删除'."+ddir+".'目录吗？删除后不可恢复，请谨慎操作！？")
              if (r==true)
                {     
                var Y='<?php echo folderKiller($ddirname);?>';
                alert(Y);
                }
              else
                {
                alert ('放弃删除');
                }
                }else{
                alert('请输出要删除的目录！');
                }
              },
            funCreatDir(){
                console.log('创建目录中！')
                axios.post('api/makefolders', this.folderform)
                      .then(function (response) {
                        swalt.fire({
                            icon: 'success',
                            html:response.data,
                            showCloseButton: true,
                            showCancelButton: true,
                            focusConfirm: false,               
                            cancelButtonAriaLabel: 'Thumbs down',
                            timer: 1500
                        })                       
                        // alert(response.data);
                        console.log(response);
                      })
                      .catch(function (error) {
                        alert('xxxx')
                        console.log(error);
                      });  
            },
            funRmDir(){
                console.log('删除目录中！')
                axios.post('api/removefolders', this.folderform)
                      .then(function (response) {
                        swalt.fire({
                            icon: 'success',
                            html:response.data,
                            showCloseButton: true,
                            showCancelButton: true,
                            focusConfirm: false,               
                            cancelButtonAriaLabel: 'Thumbs down',
                            timer: 1500
                        })     
                        console.log(response);
                        // alert (response.data)
                      })
                      .catch(function (error) {
                        console.log(error);
                      });  
            },
            copyfiles(){
                // console.log('copy file from '+this.copyform.odir+' ==To==> '+this.copyform.cpdir);
                axios.post('api/cpfiles', this.copyform)
                      .then(function (response) {
                        console.log(response);
                      })
                      .catch(function (error) {
                        console.log(error);
                      });                

            },
        },
        mounted(){
            console.log('Component mounted.')
            // console.log(this.info+'Component mounted.')
        }
    }
</script>
<style scoped="scoped">
    .a1{
        color: red;
    }
    .mfield{
        background-color: #bff;
        /*opacity: 0.2;*/
        padding: 20px;
        margin:15px;
        border-radius: 20px;
        border: 2px solid #bcf;
    }
</style>