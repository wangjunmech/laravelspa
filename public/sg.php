<?php
namespace sz\baoan\sg;
header( 'Content-Type:text/html;charset=utf-8 ');

use sz\baoan\sg as sg;
class Demo
{
	public $ns = __namespace__;

	
	function __construct()
	{
		# code...
		echo "Sg测试命名空间<font color='red'>".$this->ns."</font>命名空间<br>";

	}
	function funA(){
		echo "SgFFFAAA<br>".BBB;

	}
	function funB(){
		echo "SgFFFBBB<br>";
	
	}
}

$d=new sg\Demo();
// $d=new \bruce\Demo();
$d->funA();
$d->funB();




