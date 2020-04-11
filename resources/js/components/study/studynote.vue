<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Study Note <a href="https://www.jb51.net/article/146253.htm">vue-auto-focus: 控制自动聚焦行为的 vue 指令方法</a></h3></div>
                    <div class="card-body">         
                        <form @submit.prevent="putnote()" @keydown="form.onKeydown($event)" v-auto-focus="focusCtrl" :data-current="currentIndex" :data-action="actionType">
                            <div class="form-group">
                              <label>Put note and hit enter</label>
                              <input v-model="form.note" type="text" name="note"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('note') }"  @focus="setFocusIndex(0)" data-index="0">
                              <has-error :form="form" field="note"></has-error>             
                            </div>

                            <div class="form-group">
                              <label>Username</label>
                              <input v-model="form.username" type="text" name="username"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('username') }">
                              <has-error :form="form" field="username"></has-error>
                            </div>

                            <button type="submit" class="btn btn-success" id="submit">Put Note</button>
                        </form>
                        <hr>
                        <div id='t1' ref='tr1'>999</div>
                        <div id="test" ref='w1' class="test">JQuery test click, code in mounted</div>
                            <div class="num">111</div>
                            <div class="num">222</div>
                            <div class="num">333</div>

                        <div v-for="(value, key, index) in notes" :key="index" name='notediv' class="note" :style="randomColor()" >{{value}}</div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
</template>
<style scoped>
</style>
<script>

    export default {
        data() {
            return {
                focusCtrl: 0,  // 自动聚焦控制,变动时,执行自动聚焦指令
                currentIndex: 0, // 当前聚焦元素的索引
                actionType: 'next', // 自动聚焦的行为类型
                form:new Form({
                    id:'',
                    note:'',
                    username:'',
                }),
                notes:[],
                Arr:[],
            }
        },
        methods: {
            changeDom() {
            　　const self = this;
            　　this.$refs.tr1.style.color = 'red';
            　　setTimeout(() => {
            　　　　self.$refs.tr1.style.color = 'blue';
            　　　　self.$refs.tr1.style.background = 'yellow';            
            　　},2000);


            },
            /**
             * 控制自动聚焦指令执行
             * @param actionType {string} 自动聚焦类型 it can be 'next'/'prev'/'first'/'last'/'jump'
             * @param index {string} 当actionType为'jump'时,需要传入将要聚焦元素的索引
             **/
            setFocus(actionType,index) {
                if (actionType === 'jump') {
                    this.currentIndex = index
                }
                this.focusCtrl++
                this.actionType = actionType
            },
            /**
             * 元素聚焦时,获取当前聚焦元素的索引
             * @param index {number} 当前聚焦的索引
             **/
            setFocusIndex(index) {
                this.currentIndex = index
            },
            loadnotes() {
                // console.log('Load notes.................')
                axios.get('api/note')
                      .then(response =>{
                        // console.log(response.data)
                        this.notes = response.data
                      })
            },
            putnote() {
                console.log('put note.................')
                axios.post('api/putnote', {note:this.form.note})
                      .then(response =>{
                        // console.log(response.data)
                        this.notes.push(response.data);
                        this.form.note='';
                        swalt.fire({
                              icon: 'success',
                              title: 'Need to check if fwrite dissabled FileController->putnote()->fwrite($fp,$note."\r\n");//写入文件内容,Note put successfully!'
                            }) 
                      })
            },
            randomColor(){
                // 随机颜色编号生成
                // console.log(Math.random()+"==Math.random()")
                // var num = 0.4008158021943309;
                // console.log(num.toString(16)+"==Math.random().toString(16)")
                // var hex = "0.669bdd4a25083"
                // console.log(hex.substr(2, 3)+"==Math.random().toString(16).substr(2, 3)")
                var code='#' + Math.random().toString(16).substr(3, 3).toUpperCase();
                return "background-color:"+code;
            }
        },


        mounted() {
            this.loadnotes()
            this.changeDom();
            console.log('Component mounted.............')
                $("#test").on('click',function(){
                    alert('pp');
                })
                // each循环绑定事件，获得内容 - text()、html() 以及 val()
                $("div.num").each(function(i){
                    let slef=this;
                     $(this).click(function(){
                        alert($(slef).text());
                      })

                  });
             
        },
        created() {
            console.log('Component created.............')
        }
    }

</script>
<style scoped="scoped">
    .note{
        display: inline-block;
        margin: 5px;
        font-size: 20px;
        font-style: bold;
        padding: 10px;
        border-radius: 10px;
    }
    .num,.test{
        cursor: pointer;
    }
</style>