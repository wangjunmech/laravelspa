<template>
  <div id="vbsic">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h3>Vue Basic</h3>
                    </div> 
                    <div class="card-body">
                      <div>
                        <hr>
                          <h3>插值:{{message}}</h3>
                        <hr>
                          <h3>V-if & else & v-show</h3>
                          <p v-if="shouldshow">
                            <button class="btn btn-primary">显示表示shouldshow为真</button>
                          </p>
                            <p v-else>
                            <button class="btn btn-primary">显示表示shouldshow为 false</button>
                            </p>
                            <p v-show="shouldshow">
                            <button class="btn btn-primary">true显示v-show</button>
                            <button class="btn btn-primary">1显示v-show</button>
                            </p>
                        <hr>
                          <h3>v-for循环</h3> 
                          <ul>
                            <li v-for="item in testarr">
                              {{item}}
                            </li>
                          </ul> 
                          <h3>v-for循环输出----不正确的排序列表computed-->numitems</h3> 
                          <ul>
                            <li v-for="item in numitems">
                              {{item}}
                            </li>
                          </ul>  

                          <h3>v-for循环输出----正确的排序列表computed-->sortitems,sort方法需要传入参数</h3> 
                          <ul>
                            <li v-for="item in sortitems">
                              {{item}}
                            </li>
                          </ul>  
                          
                          <h3>v-for循环多维数组</h3> 
                          <ul>
                            <li v-for="(item,id) in students">
                              {{id+1}}---- {{item.name}}----{{item.age}}----{{item.weight}}----
                            </li>
                          </ul>   
                          
                          <h3>排序v-for循环多维数组</h3> 
                          <ul>
                            <li v-for="(sdt,id) in sortstudents">
                              {{id+1}}---- {{sdt.name}}----{{sdt.age}}----{{sdt.weight}}----
                            </li>
                          </ul>                       
                        <hr>
                          <h3>V-text & v-html 指令</h3> 
                          <p>替代双括号插值： <span v-text="message"></span></p>  
                          <p>插值方式不能把html代码解释出来 <span>{{htmltagtest}}</span><br>所以需要用V-html ：<p v-html="htmltagtest"></p></p>  

                        <hr>
                          <h3>V-on指令,两种写法v-on:keyup.enter=func或简写@keyup.13=func</h3>
                          <code style="font-size: 20px;">
                          &lt;input type="text" v-on:keyup.enter="addByEnter" v-model="fs"&gt;<br>
                          &lt;input type="text" @keyup.13="addByEnter" v-model="fs"&gt;<br>
                          </code>
                          <button class="btn btn-primary" @click="increase" style="margin: 20px;color: red">++</button><button class="btn btn-primary" @click="decrease">--</button> <span style="font-size: 40px;color: red;margin: 20px">{{vonnum}}</span> 在input中回车加分
                          <input type="text" v-on:keyup.enter="addByEnter" v-model="fs">
                          <input type="text" @keyup.13="addByEnter2" v-model="fs2">
                        <hr>
                          <h3>双向数据绑定:v-model</h3> 
                          <p>|{{modelsrc}}|</p>   
                          <input type="text" v-model="modelsrc">
                          <p>lazy修饰符延时：v-model.lazy=datasrc 将在输入框失去焦点时更新DOM</p>
                          <input type="text" v-model.lazy="modelsrc">
                          <p>number修饰限制输入数字类型：v-model.number=datasrc,如果先输入为数字或小数点，到输入不为数字时停止更新，如果先输入字符则无效 </p>
                          <input type="text" v-model.number="modelsrc">
                          <p>trim修饰去除空格：v-model.trim=datasrc,</p>
                          <input type="text" v-model.trim="modelsrc">

                        <hr>
                        <h3>确认框</h3> 
                        <input type="checkbox" id="cbox" v-model="cboxflag">  
                        <label for="cbox">{{cboxflag}}</label>                     
                        <hr>
                        <h3>单选框</h3> 
                        <input type="radio" id="abox1" v-model="singleResult" value="apple"><label for="abox1">AAA</label>  
                        <input type="radio" id="abox2" v-model="singleResult" value="orange"><label for="abox2">BBB</label>  
                        <input type="radio" id="abox3" v-model="singleResult" value="banana"><label for="abox3">CCC</label>  
                        <input type="radio" id="abox4" v-model="singleResult" value="kiwi"><label for="abox4">DDD</label>  
                        <input type="radio" id="abox5" v-model="singleResult" value="peach"><label for="abox5">WWW</label>  
                        <p><label for="cbox">{{singleResult}}</label></p>
                     
                        <hr>
                        <h3>多选框</h3> 
                        <input type="checkbox" id="mbox1" v-model="fruits" value="apple"><label for="mbox1">AAA</label>  
                        <input type="checkbox" id="mbox2" v-model="fruits" value="orange"><label for="mbox2">BBB</label>  
                        <input type="checkbox" id="mbox3" v-model="fruits" value="banana"><label for="mbox3">CCC</label>  
                        <input type="checkbox" id="mbox4" v-model="fruits" value="kiwi"><label for="mbox4">DDD</label>  
                        <input type="checkbox" id="mbox5" v-model="fruits" value="peach"><label for="mbox5">WWW</label>  
                        <p><label for="cbox">{{fruits}}</label></p>
                        <hr>
                        <h3>选择与删除数组操作，鼠标经过显示删除标记</h3> 
                        <div class="selectionbox">
                          <div><h3>选择项鼠标经过显示关闭红色X标记,注意循环中的id和v.id是不一样的，:title="'删除'+v.name" 动态提示</h3></div>
                          <div class="row">
                                <div>
                                  <ul>
                                      <li class="stile selectionbox" v-for="(v,id) in provence" :key="id" @click="addprov(v)">{{v.name}}</li>
                                  </ul>
                                </div>
                                <div>
                                  <ul>
                                      <li class="stile" v-for="(v,id) in provenceSelected" :key="id" @mouseover="showflag = id" @mouseout="showflag='hide'" >{{v.name}}{{v.id}} 
                                          <span class="del" style="cursor: pointer" :title="'删除'+v.name" @click="delprov(v,id)" v-show="showflag==id">x{{showflag}}{{id}}</span></li>
                                      </li>

                                  </ul>
                                </div>

                              
                         </div>
                      </div>

                      <hr> 
                        <h3>选择与删除数组操作，绑定已选样式</h3>                             
                        <div class="selectionbox">
                          <div class="row">                              
                              <div class="col-xs-6 clo-sm-6">
                                  <div class="panel panel-success">
                                      <div class="">
                                          <h3 style="margin-left: 20px;">工艺数({{process.length}} / 当前选中({{processSelected.length}})</h3>
                                      </div>
                                      
                                      <div class="panel-body panel-height">
                                          <ul>
                                              <li class="stile" :class="item.mark ? 'selectedpro' : 'unselectedpro'" v-for="(item,id) in process" :key="id" @click="addprocess(item)">{{item.name}}</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>                              
                              <div class="col-xs-6 col-sm-6">
                                  <div class="panel panel-success">
                                      <div class="">
                                          <h3 style="margin-left: 20px;">已选中工艺数({{processSelected.length}})</h3>
                                      </div>
                                      <div class="panel-body panel-height">
                                          <ul>
                                              <li class="stile" v-for="(item,id) in processSelected" :key="id" @click="delprocess(item,id)">{{item.name}} 
                                                </li>


                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                            


                        <hr>
                          <h3>v-bind绑定属性src，用：简写</h3>
                          <div>
                            <div style="display: inline-block;" title="v-bind:src 绑定"><img v-bind:src="imgsrc" alt="picture is loading" width="100px" ></div>
                            <div style="display: inline-block;" title=":src 绑定"><img :src="imgsrc" alt="picture is loading" width="100px" ></div>
                          </div>                     
                        <hr>
                          <h3>class绑定（:class="{样式名:绑定属性数据}"），根据判断来动态绑定</h3>  
                          <input type="text" name="classtest" :class="{classtestA:classtestmark}">                      
                          <input type="checkbox" id="controlclass" name="" v-model="classtestmark">
                          <label for="controlclass">勾选动态控制样式绑定</label> <br> 
                          <input type="text" id="bindboth" :class="classtestmark ? clsA : clsB" name="" >三元运算符绑定两个样式

                        <hr>
                          <h3>:style绑定</h3>                        
                          <p :style="{color:fcolor,fontSize:fsize}"> This is style bind demo</p>
                        <hr>
                          <h3>:style绑定对象</h3>  
                          <p :style="styleObj"> bind style to styleObj</p>
                      
                        <hr>
                          <h3>v-pre原样显示代码,v-cloak渲染完成才显示元素,v-once显示一次后不再更新</h3>
                          <p v-pre>原样显示代码{{message}}</p>                        
                          <p v-cloak>v-cloak标签会在所有页面元素加载完成才显示</p>                        
                          <p>用v-once，属性第一次渲染后不再更新<span v-once style="color:red">{{message}}</span> </p>
                          <p>不用v-once，属性会随时更新改变<span style="color:red">{{message}}</span> </p>
                          <input type="text" v-model="message"> 这里输入时会更新message属性                     
                        <hr>
                          <h3>自定义指令:Vue自定义指令写在created方法下: Vue.directive("Bindtest",对象或方法)</h3> 
                          <div v-Bindtest="bcolor">{{num}}</div>
                          <p><button @click="numplus">Add</button><button @click="unbindnumplus">解除绑定后按Add不再数值增加</button></p>
                          <div v-Bindbtn="ccolor">{{num}}</div>
                          <p><button @click="numplus">Add</button><button @click="unbindnumplus">解除绑定后按Add不再数值增加</button></p>

                        <hr>
                          <h3>Vue.Set方法解决修改全局数组后页面不更新的问题</h3> 
                          <ul>
                            <li v-for="student in students">{{student.name}}</li>
                          </ul> 
                          <button @click="nameModify">Modify first student.name</button>



                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>                  
                        <hr>
                          <h3>自定义指令</h3>

                      </div>
                  
                    </div>                   
                </div> 
            </div>
        </div>      
    </div>
  </div>
</template>

<script>
      var sArr=[
      {name:"sname1",age:22,},
      {name:"sname2",age:33,},
      {name:"sname3",age:44,},
      {name:"sname4",age:55,},
      {name:"sname5",age:66,},
      {name:"sname6",age:77,},
      ];//wgn全局数组
// import {sArr};
  export default {

    name: 'vbsic',
    data(){
    return{
      message:"Hello World!",
      htmltagtest:"<h4><font color='red'>htmltagtest，注意v-html输出方法在某些输入场合不适合使用，防止被恶意代码攻击</font></h4>",
      shouldshow:true,
      isture:1,
      testarr:[11,22,32,24,55,46,37,8,7],
      students:[
      {name:"JackAA",age:22,weight:48,},
      {name:"JaneAA",age:42,weight:66,},
      {name:"GorgeA",age:12,weight:57,},
      {name:"KingAA",age:66,weight:50,},
      {name:"Benson",age:55,weight:62,},
      {name:"SandyA",age:33,weight:75,},
      ],
      vonnum:0,
      fs:1,
      fs2:2,
      modelsrc:0,
      cboxflag:true,
      singleResult:[],
      fruits:[],
      showflag: 'hide', //关闭隐藏
      provence: [{
                    name: "北京市",
                    flag: false,
                    id: 0
                },
                {
                    name: "上海市",
                    flag: false,
                    id: 1
                },
                {
                    name: "重庆市",
                    flag: false,
                    id: 2
                },
                {
                    name: "天津市",
                    flag: false,
                    id: 3
                },
                {
                    name: "湖北省",
                    flag: false,
                    id: 4
                },
                {
                    name: "四川省",
                    flag: false,
                    id: 5
                },
            ],
        provenceSelected:[],
        process: [{
                    name: "车床",
                    mark: false,
                    id: 0
                },
                {
                    name: "铣床",
                    mark: false,
                    id: 1
                },
                {
                    name: "磨床",
                    mark: false,
                    id: 2
                },
                {
                    name: "电镀",
                    mark: false,
                    id: 3
                },
                {
                    name: "CNC",
                    mark: false,
                    id: 4
                },
                {
                    name: "喷油",
                    mark: false,
                    id: 5
                },
            ],
        processSelected:[],
        imgsrc:'./images/5.jpg',
        classtestmark:true,
        clsA:'classtestA',
        clsB:'classtestB',
        fcolor:'red',
        fsize:'30px',
        styleObj:{
          color:"blue",
          fontSize:'25px',
        },
        num:0,
        bcolor:"red",
        ccolor:"green",
        test:"",
        }
    },
    computed:{
      numitems:function(){
        // // return [1,2,3,4,5,6,7,8,9];
        // return this.testarr.sort();//排序不正确，只把数字的第一位按顺序排了。
        // 打开return this.testarr.sort()会提示如下的无限循环报错
        // [Vue warn]: You may have an infinite update loop in a component render function.
      },
      sortitems:function(){
        function numsort(a,b){
          return a-b;//升序
          // return b-a;//降序
        };
        // return this.testarr.sort(numsort);//用局部方法当作参数，排序正确，。
        return this.testarr.sort(this.numsort);//用对象方法当作参数，排序正确，。
      },
      sortstudents:function(){
        var studentscopy = JSON.parse( JSON.stringify(this.students) );
        // return this.sortByKey(studentscopy,'weight');//第一个参数为数组，第二个参数为排序字段，按weight排序
        return this.sortByKey(studentscopy,'age');//第一个参数为数组，第二个参数为排序字段，按age排序
      }


    },
    methods:{

        numsort(a,b){
          return b-a;
        },
        sortByKey(arr,k){
          return arr.sort(function(a,b){
            var x=a[k];
            var y=b[k];
            return ((x<y)?-1:((x>y)?1:0));
          })
        },
        increase(){
          this.vonnum++;
        },
        decrease(){
          this.vonnum--;
        },
        addByEnter(){
          this.vonnum=this.vonnum+parseInt(this.fs);
        },
        addByEnter2(){
          this.vonnum=this.vonnum+parseInt(this.fs2);
        },


        addprov(v) {
          console.log(v.flag)
                v.flag = true; //高亮状态
                //检查是否已经在已选择的数组中
                var isSelected = this.provenceSelected.filter(function(m){
                  return m.id==v.id;
                })
                console.log(isSelected.length) //如果已经有选择则返回长度为1
                return isSelected.length ? false : this.provenceSelected.push(v);
            },
        delprov(v, id) {
          this.provenceSelected.splice(id, 1);
          this.provence.forEach(el => {
                    if (el.id == v.id) {
                        v.flag = false;
                    }
                }); 

            },
        addprocess(item) {
          console.log(item.mark)
                item.mark = true; //高亮状态
                //检查是否已经在已选择的数组中
                var isSelected = this.processSelected.filter(function(m){
                  return m.id==item.id;
                })
                console.log(isSelected.length) //如果已经有选择则返回长度为1
                return isSelected.length ? false : this.processSelected.push(item);
            },
        delprocess(item, id) {
          this.processSelected.splice(id, 1);
          this.process.forEach(el => {
                    if (el.id == item.id) {
                        item.mark = false;
                    }
                }); 

            },
        numplus(){
          this.num++;
        },
        unbindnumplus(){
          this.$destroy();//解除绑定
        },
        nameModify(){
          this.students[0].name="AAAAAA";//尝试修改第一个学生名字
        },

    },
    created:function(){


      // Vue自定义指令写在created方法下
        Vue.directive("Bindtest",function(el,binding){
            console.log('Bindtest****************');
            // console.log(el);
            // console.log(binding);
            el.style="color:"+binding.value;
          })

      // Vue自定义指令写在created方法下
        Vue.directive("Bindbtn",{
          bind:function(el,binding){
            console.log('1--------Bind')
            // console.log(el)
            // el.style="color:"+binding.value;

          },
          inserted:function(){
            console.log('2--------inserted')
          },
          update:function(){
            console.log('3--------update')
          },
          componentUpdated:function(el,binding){
            console.log('4--------componentUpdated')
            el.style="color:"+binding.value;
          },
          unbind:function(){
            console.log('5--------unbind')
          },
          })

    }
  }
</script>
<style scoped="scoped">
.treeselect{
    border: 1px solid red;
  }

.selectionbox{
  background-color: pink;
  margin: 5px;
  padding: 2px;
  border: 1px solid blue;
  border-radius: 10px;
}
.stile{
  border-radius: 5px;
}
.panel-height ul {
overflow:hidden;
}
.panel-height ul li {
  width:75px;
  height:25px;
  line-height:25px;
  text-align:center;
  float:left;
  background-color:rgb(56,145,94);
  color:#fff;
  margin-left:10px;
  list-style-type:none;
  border:1px solid  rgb(67,122,91);
}
.del {
  color:red;
  padding-left:10px;
}
.selectde {
  border:1px solid #be0000 !important;
  color:#be0000 !important;
}
.selectedpro{
  border:1px solid red !important;
  color:red !important;
  background-color: gray !important;  
}
.unselectedpro{
  border:1px solid #be0000 !important;
  color:#be0000 !important;
}
.classtestA{
  background-color: red;
}
.classtestB{
  background-color: green;
}
</style>