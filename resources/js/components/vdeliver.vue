
<template>
      <div id='vd' class="container">
          <div class="col-md-12 mt-2">
            <div class="card">
            <div class="card-header">
                <div> vue 组件通信： <a href="https://segmentfault.com/a/1190000019208626" target="_blank">参考链接</a></div>
            </div>
                <div class="card-body">
                    <h2>组件通信测试,注意问题：</h2>
                    <ol class="alert alert-danger">
                        <li>引入子组件路径,相对路径要写正确：import comp from './../components/sub/comp'</li>
                        <li>子组件名称要正确</li>
                        <li>引入后在父组件中要在components下注册</li>
                        <li>子组件标签属性中绑定父组件的data数据</li>
                        <li>子组件中要使用props接收父组件传入的值</li>
                    </ol>

<hr>
                <h4 class="alert alert-info">示例1：父组件向子组件comp传值</h4>
                <comp :users="users"></comp>
                <!-- //前者自定义名称便于子组件调用，后者要传递数据名 -->
<hr>
                <h4 class="alert alert-info">示例2：子组件comp2向父组件传值（通过事件形式）,子组件中用this.$emit注册方法和参数，父组件中调用子组件时加上属性用v-on监听子组件中的事件方法，给属性赋值为父组件中的方法，在方法中处理参数</h4>
                <comp2 v-on:titleChanged="updateTitle"></comp2>
                <h5 id="tit">{{title}}</h5>
                <!-- //与子组件titleChanged自定义事件保持一致 -->
                <!-- // updateTitle($event)接受传递过来的文字 -->
<hr>
                <h4 class="alert alert-info">示例3：组件传值使用$emit/$on  >>>>>comp3待测试，引入会有问题 <a href=""></a></h4>
                               <!-- // comp3待测试，引入会有问题 -->
<hr>
                <h4 class="alert alert-info">示例4：$attrs/$listeners ，多级组件嵌套需要传递数据时，通常使用的方法是通过vuex。但如果仅仅是传递数据，而不做中间处理，使用 vuex 处理，未免有点大材小用。为此Vue2.4 版本提供了另一种方法----$attrs/$listeners,这里测试从父组件往子组件中传递数据<a href=""></a></h4>
                <p>这里vdeliver.vue中引入子组件1时的路径为："./../components/sub/childCom1.vue"</p>
                <p>在childCom1中引入childCom2的路径为："./childCom2.vue"</p>
                <p>在childCom2中引入childCom3的路径为："./childCom3.vue"</p>
                <child-com1
                  :foo="foo"
                  :boo="boo"
                  :coo="coo"
                  :doo="doo"
                  title="前端工匠"
                ></child-com1>
                <p class="alert alert-danger">总结：在父组件中定义的DATA绑定给子组件，子组件中如果使用props声明了的数据按正常传递，剩下的数据无论在哪一级子组件中直接通过$attrs获取出来，上面例子中数据经过一层层的props声明，到子组件3中只剩下doo</p>
               
<hr>
                <h4 class="alert alert-info">示例5：Vue2.2.0新增API的两个配合方法provide与inject ，有数据响应式工非响应式<a href=""></a></h4>
                <p>非响应式,父组件中使用provide声明数据vname，在子组件childCom1中用inject取出vname，然后调用this.vname看看结果。需要注意的是：provide 和 inject 绑定并不是可响应的。父组件中的 vname 如果改变了，子组件childCom1.vue 的 this.vname 是不会改变的</p>
                <p>父组件中使用provide声明数据vname，父组件中不能直接使用</p>
                <div>
                      <h1>vdeliver组件</h1>
                      <button @click="() => changeColor()" class="btn btn-warning">点击改变父组件中的color，子组件中的样式属性相应响应</button>
                      <childCom4 />
                </div>
               
<hr>
                <h4 class="alert alert-info">示例6：$parent / $children与 ref。需要注意的是：
                  <p>1.这两种都是直接得到组件实例，使用后可以直接调用组件的方法或访问数据. </p>
                  <p>2.这两种方法的弊端是，无法在跨级或兄弟间通信 </p></h4>

                    <demo6 ref="comA"></demo6>  
                    <div class="refinparent">
                      <input type="text" ref="input1" id='input1'>
                      <input type="text" ref="input3" id='input3'>
                      <button @click="addref">ADD</button>
                    </div>
                    <p class="alert alert-danger">总结：一个组件中声明多个ref属性后，通过this.$ref取得所有ref的集合，可使用$parent/$children在子或父组件中取值</p> 
                    <p class="alert alert-danger">1.子组件标签上加上性情ref="comA"后，用this.$refs.comA.title取得子组件中的title </p>
                    <p class="alert alert-danger">2.子组件中用this.$refs.input4.value=this.$parent.$refs.input1.value;取得父组件中的值
</p>

                </div>            
        </div>
    </div>
  </div>
</template>
<script>
import comp from './../components/sub/comp'
import comp2 from './../components/sub/comp2'
// import comp3 from './../components/sub/comp3'
const childCom1 = () => import("./../components/sub/childCom1.vue");
const childCom4 = () => import("./../components/sub/childCom4.vue");
const demo6 = () => import("./../components/sub/demo6.vue");

export default {
  name: 'vd',
  data(){
    return{
      users:["Henry","Bucky","Emily"],
      title:"父组件原来的值",      
      foo: "Javascript",
      boo: "Html",
      coo: "CSS",
      doo: "Vue",
      color: "blue"
    }
  },
  components:{
    "comp":comp,
    "comp2":comp2,
    "childCom1":childCom1,
    "childCom4":childCom4,
    "demo6":demo6,
  },
  methods:{
    updateTitle(e){   //声明这个函数
      this.title = e;
      var tit = document.getElementById('tit');
      tit.style.color="red";
      tit.style.backgroundColor="blue";
    },
    changeColor(color) {
      if (color) {
        this.theme.color = color;
      } else {
        this.theme.color = this.theme.color === "blue" ? "red" : "blue";
      }
    },
    addref(){
      this.$refs.input1.value="66669999";
      console.log(this.$refs.comA.title)//通过子组件ref属性得到子组件中的数据title
      // console.log(this.$refs.input1)
      this.$refs.input3.value=this.$refs.comA.title;
    }
  },
  provide(){
    // vname:'vname的值'
    this.theme = Vue.observable({
      color: "blue",
    })
    this.testdata = Vue.observable({
      test1: "blue1111",
      test2: "blue2222",
      test3: "blue3333",
    })
    return {vname:'vname的值',theme: this.theme,testdata:this.testdata}
  },
  mounted () {
      // const comA = this.$refs.comA;
      // console.log('demo6')
      // console.log(comA);
      // comA.sayHello();  // 弹窗
  }
}
</script>
<style scoped="scoped">
  /*父组件中的样式border2*/
  .border2{
    background-color: green;

  }
  .refinparent{
    background-color: pink;

  }
  .refindemo6{
    background-color: yellow;

  }

</style>