<?php
session_start();
  // echo session_id();//查看session ID
// echo (empty($_SESSION['HistArr']));
  if(empty($_SESSION['HistArr'])){
    $_SESSION['HistArr']=[];
  }
    @$times = $_GET['times'];
    // echo $times;
    if($times){
      // echo $_GET["times"];
      array_push($_SESSION['HistArr'], $times);
    }

  // 清空历史记录
    @ $clean=$_POST['clean'];
    if($clean==1){      
      $_SESSION['HistArr']=[];
    }
  

// var_dump($_SESSION['HistArr']);
    
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>猜数字</title>
  <style>
    body {

      background-color: #2b3b49;
      color: #fff;
      text-align: center;
      font-size: 18px;
    }
    input {
      padding: 5px 20px;
      height: 50px;
      background-color: #3b4b59;
      border: 2px solid #c0c0c0;
      box-sizing: border-box;
      border-radius:10px;
      color: #fff;
      font-size: 20px;
    }
    button {
      padding: 5px 20px;
      height: 50px;
      font-size: 16px;
    }
    .info{
      position: relative;
      height: 50px;
      background-color: green;
      color: white;
      width: 400px;

      display: inline-block;/*左右居中*/
      border-radius:50px;
      margin: 10px auto;
      line-height: 50px;/*/上下居中*/
    }
    .msg{
      background-color: yellow;
      color: red;
      border-radius:50px;
      height: auto;

    }
    .msg{
      background-color: yellow;
      color: red;
      border-radius:50px;
      height: 50px;
      margin-top: 10px;

    }
    .history{
        background-color: #f33;
        border-radius:10px;

      }
    .hisnum{
      border:1px solid blue;
      border-radius: 100px;
      margin: 2px;
      padding:2px;
    }
    .clean{
      border: 1px red solid;
      cursor: 
      /*default*/
      /*help*/
      /*wait*/
      /*crosshair*/
      /*text*/
      /*s-resize*/
      /*w-resize*/
      /*se-resize*/
      /*ne-resize*/
      /*move*/
      pointer

    }
    .clean:hover{
      background-color: black;
    }
    .numBox{
      display: inline-block;
      width: 550px;
      vertical-align: top;
      margin: 20px;
    }

    .numObj{
      color: red;
      line-height: 40px;/*/文本上下居中*/
      background-color: pink;
      width: 40px;
      height: 40px;
      display: inline-block;
      margin: 5px;
      cursor: pointer;
      border-radius: 5px;
      }
    .numObj:hover{
      background-color: green;
    }
    .killed{
      background-color: gray;      
      color: red;
      line-height: 40px;/*/文本上下居中*/
      width: 40px;
      height: 40px;
      display: inline-block;
      margin: 5px;
      cursor: pointer;
      border-radius: 5px;
    }
    .soundplay {
  display: inline-block;
  background-color: #afe;
  /**display: inline;*/
  /**zoom: 1;*/
  background-repeat: no-repeat;
  height: 18px;
  width: 18px;
  margin:0 2px; 
  text-decoration: none;
  vertical-align: middle;
  background-position: 0 1px;
  cursor: pointer;
  user-select: none;
  background-size: auto 100%;
  -moz-background-size: auto 100%;
}
.infobox{
  /*margin-top: 50px;*/
  /*vertical-align: middle;*/
  /*align-content: middle;*/
  background-color: #ada;
  height: auto;
  align-content: middle;
  padding: 20px;
  
}

#targetdiv{
  /*display:none*/
}

  </style>
</head>
<body>
  <h1>PHP猜数字游戏</h1>
  <p>请填写一个1-100数字，然后点试一试提交看看几次猜对。你需要在仅有的10次机会之内猜对它。</p>


  <!-- 填写后提交 -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <input type="number" min="0" max="100" name="num" placeholder="给出你的答案">
    <button type="submit" name="guesscheck">试一试</button>
  </form>
<hr>
<div>
  
</div>
<div class="info infobox">
    <div class="info" id="targetdiv"><span id="target">20</span></div>
    <div class="info">第<span id="times">0</span>次尝试</div>
    <div class="info">你还有<span id="timesleft">timesleft</span>次机会</div>
    <div class="msg" id="msg">大小提示</div>
    <div class="history" id="history"> <span id="clean" class="clean">点击清空历史记录</span>：
      <?php foreach ($_SESSION['HistArr'] as $key => $value) {
        # code...
      ?>

      <?php echo "<span class='hisnum'>". $value."</span>" ?>
      <?php } ?>

    </div>
  </div>
<div class="numBox">
    <?php for($i=1;$i<101;$i++){ ?>
      <div class="numObj" name="numObj"><? echo $i;?></div>
    <?php } ?>
</div>

<!-- 输出格子 -->
  <?php 
//   echo "<div class='numBox'>";
//   //循环输出数字方阵
 
//  //TODO：用户输入前 设置随机数 并且设置session
//     if(empty($_GET['num'])||empty($_SESSION['num'])){
//         $num=rand(0,100);
//          $_SESSION['num'] = $num;
//    // 声明1-100的数组用于每次猜测后把提示的部分清除
//     $numArr=[];
//     for($n=0;$n<100;$n++){
//       array_push($numArr, $n);
//     }
//     $_SESSION['numArr']=$numArr;
//     }
// //TODO:用户输入后 
//     else
//     {
//     $count = empty($_SESSION['count']) ? 0 : $_SESSION['count'];

//         //TODO:若输入次数在十次之内 则每次比较大小
//         if($count<10){
// //          $array[]=$_GET['num'];
// //           echo ($array);
//             $result=(int)$_GET['num']-$_SESSION['num'];//输入数字减目标数，
//             if($result==0){
//                 $message=$_GET['num'].'猜对了!!!';
//             session_destroy();

//             }elseif($result>0){
//                 $message=$_GET['num'].'太大了@';
//                 for($i=$_GET['num'];$i<100;$i++){
//                   //把更大的处理掉
//                   unset($_SESSION['numArr'][$i]);

//                 }
//             }else{
//                 $message=$_GET['num'].'太小了';
//                 for($i=0;$i<=$_GET['num'];$i++){
//                   //把更小的处理掉
//                   unset($_SESSION['numArr'][$i]);
//                 }
//             }
//           $_SESSION['count']=$count+1;//计数加1次 
//           echo ('<div class="info">第'.($count).'次</div><br>');
//           echo ('<div class="info">你还有'.(10-$count).'次机会</div><br>');
//         }
 
//         //TODO:输入次数大于十次则游戏失败并清除设置
//         else{
//             $message='次数耗尽，游戏结束！'; 
//             session_destroy();
//         }
//     }

// //检查显示消息提示大小
//    if (isset($message)){
//    echo '<div id="result" class="msg">'.$message.'</div>'; 
//    }
//   echo "</div>";
//   echo "<div class='numBox'>";
//   //循环输出数字方阵
//     for($i=0;$i<100;$i++){
//       echo '<div name="numObj" class="'; 
//       if(!in_array($i,$_SESSION['numArr'])){
//         echo 'killed';
//       }else{
//         echo 'numObj';
//       }
//       echo '">';
//       echo $i;
//       echo '</div>';
//     } 
//       echo "</div>";
  ?>


  <hr>
<p>播放音乐</p>
<!-- <img src="./images/5.jpg" alt=""> -->
  <p>奔<a herf="#" url="./sounds/fail.wav" class="soundplay"></a></p>
  <p>zhòng<a herf=":;" url="http://appcdn.fanyi.baidu.com/zhdict/mp3/zhong4.mp3" class="soundplay"></a></p>
<audio controls="controls" id="music" >
<source src='./sounds/Boojolay.wav' />//音乐路径
您的浏览器不支持 audio 标签。
</audio>

<span onclick="control();" id="playAudio">播放/暂停</span>
<span onclick="repeat();">重置</span>

  <hr>
<script type="text/javascript">
// alert(window.performance.navigation.type)//判断是否为页面刷新


window.onload = function(){
  // console.log(list);
  let AudioControl = false;
  var count = 0;
  var totaltimes=20;
  var list = document.getElementsByName('numObj');
  var target=settarget();
  var msg=document.getElementById('msg')
  document.getElementById('target').innerText=target;
  document.getElementById('timesleft').innerText=totaltimes;

  var numArr = [];
  for(var i=0;i<101;i++){
    numArr[i]=i;
  };

// console.log(numArr);
  function addListenerToDiv(list,target){  
    // 循环添加声音点击事件
      for(var i = 0, len = list.length; i < len; i++){  
        if(parseInt(list[i].innerText)==parseInt(target)){
          list[i].onclick = (function(k){  return function(){  
                new Audio('./sounds/victory.wav').play();

              };  
          })(i); 
        }else{
          list[i].onclick = (function(k){  return function(){  
                new Audio('./sounds/s215.wav').play();

              };  
          })(i);            
        }
      }
  } 
  //检查对比
  function check(list,target){

    for(var i = 0, len = list.length; i < len; i++){ 
    // 循环添加检查事件处理数组
        list[i].addEventListener('click',function(){
              count++;
              times.innerText=count;//设置尝试次数
              timesleft.innerText=totaltimes-count;

              num = parseInt(this.innerText);
              // console.log(target) 
        // 判断处理数组
          if(parseInt(this.innerText)==target){  
            // console.log('好了'); 
              console.log('好了');
            alert(count+'次猜中,点击再来！')
            let link = window.location.href//获取当前URL
            if(link.indexOf("?") != -1){
              //去掉地址栏原来的参数
              link = link.split("?")[0];
            }
            let putlink = link+"?times="+count;//加上参数以便把次数加入后台session数组中
            // alert(putlink)
            window.location.href=putlink;          
            // resetgame()
            // refreshdir();
            }else if(parseInt(this.innerText)>target){

              console.log('大了');
              setMsg('大了')

            for(var k=num-1;k<100;k++){
              list[k].className = this.className + " killed";
            }
          }else{
            console.log('小了')
            setMsg('小了')
            for(var k=0;k<num;k++){
              list[k].className = this.className + " killed";
            }            
          }
        },false);
  }
  }
  // 重置游戏
  function resetgame(){
    // alert('resetgame')
    count=0;//清除计数
    document.getElementById('times').innerText=0;
    document.getElementById('timesleft').innerText=totaltimes;
    settarget()//设置目标
    document.getElementById('target').innerText=target;
    for(var i = 0, len = list.length; i < len; i++){  
      list[i].className = "numObj";
      }
  }
  //生成随机数1-100
  function settarget(){
    return Math.ceil(Math.random()*100);
  }

  function setMsg(str){
    // alert('setMsg')
    document.getElementById('msg').innerText=str;
  }

//生成从minNum到maxNum的随机数
function randomNum(minNum,maxNum){ 
    switch(arguments.length){ 
        case 1: 
            return parseInt(Math.random()*minNum+1,10); 
        break; 
        case 2: 
            return parseInt(Math.random()*(maxNum-minNum+1)+minNum,10); 
        break; 
            default: 
                return 0; 
            break; 
    } 
} 
 
 
addListenerToDiv(list,target);
check(list,target);

                       
    // alert(target.innerText);



// 给后面声音测试元素每个div加上声音控制点击事件  
  var soundplay=document.getElementsByClassName("soundplay");   
  for(var i=0;i<soundplay.length;i++){
      soundplay[i].onclick=function(){
          new Audio(this.getAttribute("url")).play();
    };
  }

//清空历史记录
var clean = document.getElementById('clean');
clean.onclick=function(){
  // var params['clean'];
  var params = {"clean":1};//Post参数
  // alert(params);
  var url = window.location.href;
  if(url.indexOf("?") != -1){
              //去掉地址栏原来的参数
              url = url.split("?")[0];
            }

// alert(window.performance.navigation.type);
httpPost(url, params);//提交POST函数
  // alert('清空历史')


}


//JS创建虚拟表单模拟POST提交表单   
function httpPost(URL, PARAMS) {
 var temp = document.createElement("form");
 temp.action = URL;
 temp.method = "post";
 temp.style.display = "none";
 
 for (var x in PARAMS) {
  var opt = document.createElement("textarea");
  opt.name = x;
  opt.value = PARAMS[x];
  temp.appendChild(opt);
 }
 
 document.body.appendChild(temp);
 temp.submit(); 
 // return temp;
}

  };



function repeat(){
    var audio = document.getElementById('music');
    audio.currentTime = 0;//重新播放
    }
function control(){
    var audio = document.getElementById('music');
    if(audio!==null){
      if(audio.paused){
      audio.play();// 播放
      }else{
      audio.pause();// 暂停
      }
    }
    }
</script>
</body>
</html>