<?php
session_start();


    /* JS代码处理*/

    
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
      width: 500px;
      display: inline-block;/*左右居中*/
      border-radius:50px;
      margin: 2px;
    }
    .msg{
      background-color: yellow;
      color: red;
      border-radius:50px;
      height: 50px;

    }
    .numBox{
      display: inline-block;
      width: 500px;
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
  *display: inline;
  *zoom: 1;
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


<!-- 输出格子 -->
  <?php 
  echo "<div class='numBox'>";
  //循环输出数字方阵
 
 //TODO：用户输入前 设置随机数 并且设置session
    if(empty($_GET['num'])||empty($_SESSION['num'])){
        $num=rand(0,100);
         $_SESSION['num'] = $num;
   // 声明1-100的数组用于每次猜测后把提示的部分清除
    $numArr=[];
    for($n=0;$n<100;$n++){
      array_push($numArr, $n);
    }
    $_SESSION['numArr']=$numArr;
    }
//TODO:用户输入后 
    else
    {
    $count = empty($_SESSION['count']) ? 0 : $_SESSION['count'];

        //TODO:若输入次数在十次之内 则每次比较大小
        if($count<10){
//          $array[]=$_GET['num'];
//           echo ($array);
            $result=(int)$_GET['num']-$_SESSION['num'];//输入数字减目标数，
            if($result==0){
                $message=$_GET['num'].'猜对了!!!';
            session_destroy();

            }elseif($result>0){
                $message=$_GET['num'].'太大了@';
                for($i=$_GET['num'];$i<100;$i++){
                  //把更大的处理掉
                  unset($_SESSION['numArr'][$i]);

                }
            }else{
                $message=$_GET['num'].'太小了';
                for($i=0;$i<=$_GET['num'];$i++){
                  //把更小的处理掉
                  unset($_SESSION['numArr'][$i]);
                }
            }
          $_SESSION['count']=$count+1;//计数加1次 
          echo ('<div class="info">第'.($count).'次</div><br>');
          echo ('<div class="info">你还有'.(10-$count).'次机会</div><br>');
        }
 
        //TODO:输入次数大于十次则游戏失败并清除设置
        else{
            $message='次数耗尽，游戏结束！'; 
            session_destroy();
        }
    }

//检查显示消息提示大小
   if (isset($message)){
   echo '<div id="result" class="msg">'.$message.'</div>'; 
   }
  echo "</div>";
  echo "<div class='numBox'>";
  //循环输出数字方阵
    for($i=0;$i<100;$i++){
      echo '<div name="numObj" class="'; 
      if(!in_array($i,$_SESSION['numArr'])){
        echo 'killed';
      }else{
        echo 'numObj';
      }
      echo '">';
      echo $i;
      echo '</div>';
    } 
      echo "</div>";
  ?>

  <hr>
<p>播放音乐</p>
<!-- <img src="./images/5.jpg" alt=""> -->
  <p>奔<a herf=":;" url="./sounds/fail.wav" class="soundplay"></a></p>
  <p>zhòng<a herf=":;" url="http://appcdn.fanyi.baidu.com/zhdict/mp3/zhong4.mp3" class="soundplay"></a></p>
<audio controls="controls" id="music" >
<source src='./sounds/Boojolay.wav' />//音乐路径
您的浏览器不支持 audio 标签。
</audio>
<span onclick="control();" id="playAudio">播放/暂停</span>
<span onclick="repeat();">重置</span>

  <hr>
<script type="text/javascript">

window.onload = function(){
  let list = document.getElementsByName('numObj');
  let AudioControl = false;
  function addListenerToDiv(){  
      for(var i = 0, len = list.length; i < len; i++){  
          var that = list[i];  
          list[i].onclick = (function(k){  return function(){  
            var num=document.getElementsByName('num')[0];
            var guesscheck=document.getElementsByName('guesscheck')[0];
                // alert(k);
                num.value=k; 
                guesscheck.click();//模拟点击提交
                // this.className = 'killed';
                // new Audio('./sounds/fail.wav').play();
                // new Audio('./sounds/s215.wav').play();
                // console.log(result.innerText.indexOf('!!!'));
                new Audio('./sounds/Boojolay.wav').play();
              };  
          })(i);  
      }  
  }  
addListenerToDiv();
                       



// 给后面声音测试元素每个div加上声音控制点击事件  
  var soundplay=document.getElementsByClassName("soundplay");   
  for(var i=0;i<soundplay.length;i++){
      soundplay[i].onclick=function(){
          new Audio(this.getAttribute("url")).play();
    };
  }



}
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