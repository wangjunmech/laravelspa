<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Artyom.js <span>
                        <a href="https://sdkcarlos.github.io/sites/artyom.html">
                        官网使用示例
                        </a>
                        <a href="https://docs.ourcodeworld.com/projects/artyom-js/documentation/methods/getlanguage">
                        识别语言设置参考
                        </a>
                        </span></h3></div>
                    <div class="card-body">
                      <div>
                        <ol>
                            <li>安装命令：npm install artyom.js</li>
                            <li>在resources/js目录下的bootstrap.js中引入window.Artyom = require('artyom.js').default;</li>
                            <li>在组件页面mounted中测试使用：const Jarvis = new Artyom();Jarvis.say("local test!");</li>
                            <li>在mounted中设置语言初化，再将对象赋给data，在方法中从data取出对象使用;</li>
                        </ol>
                        <hr>

                <a id="speechSupported" class="btn btn-block">Synthesis Supported or Not</a>&nbsp;
                <a id="recognizingSupported" class="btn btn-block">Recognizing Supported or Not</a>&nbsp;
<select id="langselect" class="form-control" @change="setLang">
    <option disabled="disabled" selected>请选择语言</option>
    <option value='zh-CN'>Microsoft Huihui Desktop - Chinese (Simplified)</option>
    <option value='en-US'>Microsoft Zira Desktop - English (United States)</option>
</select>                      

</div>
<div id="listening" class="btn btn-primary" @click='listening'>
    listening2223</div>
<hr>
<div id="showspeak"></div>
                                               
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
                language:'',
                Jarvis:null,
                speechSupported:null,
                recognizingSupported:null,
            }
        },
        methods: {
            browserSupport(){
            const Jarvis = new Artyom();
            if(Jarvis.speechSupported()){
                document.getElementById("speechSupported").className= document.getElementById("speechSupported").className+" btn-success";

                }else{
                
                document.getElementById("speechSupported").className= document.getElementById("speechSupported").className+" btn-danger";

                }        
            if(Jarvis.recognizingSupported()){ 
                document.getElementById("recognizingSupported").className= document.getElementById("recognizingSupported").className+" btn-success";

                }else{
                
                document.getElementById("recognizingSupported").className= document.getElementById("recognizingSupported").className+" btn-danger";}   

            },
            setLang(){
                this.Jarvis=null;
                var langselect = document.getElementById('langselect');
                var language = langselect.value
                this.language = language
                console.log(' set lang to ...........')
                var Jarvis = new Artyom();
                this.Jarvis = Jarvis;
                this.Jarvis.initialize({
                    // lang: "zh-CN", // 
                    // lang: "en-US", // 
                    lang:this.language, // 
                    continuous: true, // Listen forever
                    soundex: true,// Use the soundex algorithm to increase accuracy,You'll need an SSL certificate in your website (https connection) in order to use the continuous mode, otherwise you'll be prompted for the permission to access the microphone everytime the recognition ends.
                    debug: true, // Show messages in the console
                    executionKeyword: "and do it now",
                    speed:1, // talk normally
                    listen: true, // Start to listen commands !

                    // If providen, you can only trigger a command if you say its name
                    // e.g to trigger Good Morning, you need to say "Jarvis Good Morning"
                    // name: "Jarvis" 
                }).then(() => {
                    console.log("Artyom has been succesfully initialized");
                }).catch((err) => {
                    console.error("Artyom couldn't be initialized: ", err);
                });
                // console.log(Jarvis);
                this.Jarvis.say("语言选择 into"+this.language);
                

            },
            showText(){                            
                this.Jarvis.redirectRecognizedTextOutput(function(recognized,isFinal){
                    if(isFinal){
                        var showspeak = document.getElementById('showspeak');
                        showspeak.innerText=recognized;
                        showspeak.style.backgroundColor="#d40";
                        console.log("Final recognized text: " + recognized);
                    }else{
                        console.log(recognized);
                    }
                });   
            },
            listening(){
                console.log('listening in '+this.language)  
                var k=this.language;
                switch (k)
                    {
                        case "zh-CN":{
                            console.log("Switch...>>>>>>>>>>>>>>>>>>to CN")
                            this.Jarvis.say("小猫精灵已经准备好了, 能帮您做点儿什么呢?");
                            this.Jarvis.addCommands([
                                {
                                    indexes: ['小猫精灵','小猫','小猫有空吗'],
                                    action: (i) => {
                                        this.Jarvis.say("在呢主人");
                                    }
                                },
                                {
                                    indexes: ['跟着我说 *'],
                                    smart:true,
                                    action: (i,wildcard) => {
                                        this.Jarvis.say("您说 : "+ wildcard);
                                    }
                                },
                                // The smart commands support regular expressions
                                {
                                    indexes: [/你好小猫/i],
                                    smart:true,
                                    action: (i,wildcard) => {
                                        this.Jarvis.say("Y您说 : "+ wildcard);
                                    }
                                },
                                {
                                    indexes: ['走开'],
                                    action: (i,wildcard) => {
                                        this.Jarvis.fatality().then(() => {
                                            this.Jarvis.say("好的，有事记得叫我哦！");
                                            console.log("8888");
                                        });
                                    }
                                },
                                ]);
                            this.showText();             
                        };
                        break;
                        case "en-US":{
                            console.log("Switch...>>>>>>>>>>>>>>>>>>to Us")  

                            this.Jarvis.say("ready to go, what can I do for you?");
                            this.Jarvis.addCommands([
                                {
                                    indexes: ['Hello','Hi','is someone there'],
                                    action: (i) => {
                                        this.Jarvis.say("Hello, it's me");
                                    }
                                },
                                {
                                    indexes: ['Repeat after me *'],
                                    smart:true,
                                    action: (i,wildcard) => {
                                        this.Jarvis.say("You've said : "+ wildcard);
                                    }
                                },
                                // The smart commands support regular expressions
                                {
                                    indexes: [/Good Morning/i],
                                    smart:true,
                                    action: (i,wildcard) => {
                                        this.Jarvis.say("You've said : "+ wildcard);
                                    }
                                },
                                {
                                    indexes: ['shut down yourself'],
                                    action: (i,wildcard) => {
                                        this.Jarvis.fatality().then(() => {
                                            console.log("Artyom succesfully stopped");
                                        });
                                    }
                                },
                                ]);
                            this.showText();  
         
                            
                        };
                        break;
                        default:null;
                    } 
            },

        },
        mounted() {
            console.log('Component mounted.');
            this.browserSupport();
            }
    }
</script>
<style scoped="scoped">
#listening{
    margin:20px;
}
</style>