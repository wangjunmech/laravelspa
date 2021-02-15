<?php
namespace brucecad\test\sz\sj\wf;
header( 'Content-Type:text/html;charset=utf-8 ');
const AAA=100;
define('BBB','111');
/**
 * 
 */
echo AAA;
echo BBB;
include('sg.php');
use brucecad\test\sz\sj\wf as wf;
class Teacher
{
	public $ns = __namespace__;
	public $name;
	protected $age;
	private $money;	
	function __construct($name,$age,$money)
	{
		# code...
		$this->name=$name;
		$this->age=$age;
		$this->money=$money;
		echo "新对象:<font color='red'>".$this->name."</font>实例化成功！<br>";

	}
	function __get($pro){
		echo "<br>__get GET#############<br>";
		if($pro=="age"){
			return $this->$pro + 100;
		}
		if($pro=="money"){
			return $this->$pro + 80000000;
		}
		return $this->$pro;
	}
	function __set($pro,$val){
		echo "<br>__set SET*************<br>";
		if($pro=="money"){
					echo "<br>搞钱钱+{$val}<br><br>";

			switch ($val) {
				case $val<100:
					# code...
				echo "太少了！！！<br>";
					break;
				case $val>999:
					# code...
				echo "太多了！！！<br>";
					break;				
				default:
					# code...
				echo $val."设置成功！！！<br>";
					return $this->$pro=$val;
					break;
			}
		}else{
			echo '不能乱设置钱钱';
		}
	}
	function painting(){
		echo "Teacher ".$this->name."can paint something<br>".BBB;

	}
	function drawing(){
		echo "Teacher ".$this->name." can draw something<br>";
	
	}
}

$d=new wf\Teacher("张志深",22,888888);
// $d=new \bruce\Teacher();
$d->painting();
$d->drawing();

// echo "<br>获取public属性：";
// echo $d->name;
// echo "<br>获取protected属性：";
// echo $d->age;
// echo "<br>获取private属性：";
// echo $d->money;
// $d->money=33;
// echo $d->money;
// $d->age=888;
// echo $d->age;


// echo "<br>";
// echo AAA;
// echo BBB;


class Professor extends Teacher
{
	function __construct($name,$age,$money){
	parent::__construct($name,$age,$money);
// parent::__construct("测试"); //调用或者说继承父类的构造函数:
// self::test();
}

	// function funA(){
	// 	echo "CSFFFAAA<br>";

	// }
	// function funB(){
	// 	echo "CSFFFBBB<br>";
	
	// }
}
$ds=new Professor('马球云',66,99999);
// $d=new \bruce\Teacher();
$ds->painting();
$ds->drawing();

$arr = array("a"=>1,"b"=>2,"c"=>3,"d"=>4);
var_dump($arr);
echo '<br>';
$c = eval('$b = '.var_export($arr,true).';');//将数组转为字符串
// $c=eval($b);
var_dump($b);

function wnumber($num,$n){
	for($i=0;$i<$num;$i++){
		if($n($i)==0){
			echo '*';
			continue;
		}
		echo $i."&nbsp;";
		if($i%20==0){
			echo "\n";
		}
	}
}

echo '<br>';

function aaa(){
	echo "aaa函数<br>";
}
function bbb(){
	echo "bbb函数<br>";
}
function ccc(){
	echo "ccc函数<br>";
}
function  foo () {
    echo  "In foo()<br />\n" ;
}

function  bar ( $arg  =  '' ) {
    echo  "In bar(); argument was ' $arg '.<br />\n" ;
}

 // 使用 echo 的包装函数
 function  echoit ( $string )
{
    echo  $string ;
}

 $func  =  'foo' ;
 $func ();         // This calls foo()

 $func  =  'bar' ;
 $func ( 'test' );   // This calls bar()

 $func  =  'echoit' ;
 $func ( 'test' );   // This calls echoit()

// function wnumber2($num,$cb){
// 	for($i=0;$i<$num;$i++){
// 		if($cb($i)){
// 			echo '*';
// 			continue;
// 		}
// 		echo $i."&nbsp;";
// 		if($i%20==0){
// 			echo "\n";//换行
// 		}
// 	}
// }
// function testcb($n){
// 	return 1;
// 	// if($i%3==0){
// 	// 	return 1;
// 	// }else{
// 	// 	return 0;
// 	// }

// }
// wnumber2(1000,"testcb");