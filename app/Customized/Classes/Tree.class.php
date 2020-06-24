<?php 
namespace App\Customized\Classes;

/*tree.class.php 无限级分类*/
class Tree {
    public $data = '';


    //迭代法查找子孙树，传入父ID，查找所有该父ID的节点及子孙树    /******************************************/
    /**
    * @param $arr数组
    * @param $pid元素的父ID
    * @param $lev层数
    */
    public function getTree($arr,$pid=0,$lev=0){
        $task = array($pid);//任务表，传入多少就是多少，只要任务表非空说明有工作要做
        $tree = array();//地区表
        while(!empty($task)){
            $flag = false;
            $lev++;

            //循环查找数组开始
            foreach($arr as $k=>$v){
                if($v['pid']==$pid){//如果查找的PID等于传过来的数字
                    $v['lev']=$lev;
                    $tree[]=$v;//把找到的放到地区表

                    array_push($task,$v['id']);//把找到的ID放到任务表
                    $pid = $v['id'];//把找到的元素的id作为父ID再去查找
                    unset($arr[$k]);//把找过的元素清除掉
                    $flag=true;//说明找到了子栏目
                }
            }
            //循环查找数组结束

            //如果上面foreach循环一圈后没有找到子栏目，说明子分子已查找结束，再把标记设置为亿
            if($flag==false){               
                array_pop($task);//把任务表最后一个元素弹出来给foreach去循环
                $pid = end($task);//再把指针移动任务表的最末尾
            }
        }
        return $tree;
    }


    //递归法查找子孙树，传入父ID，查找所有该父ID的节点及子孙树    /******************************************/
    /**
    * @param $arr数组
    * @param $pid元素的父ID
    * @param $lev层数
    */
    public function sortTree($arr,$pid=0,$lev=0){       
        $tree = array();
            foreach($arr as $v){
                if($v['pid']==$pid){//如果查找的PID等于传过来的数字
                    $v['lev']=$lev;
                    $tree[] = $v;//把找到的放到地区表
                    $hason = $this->sortTree($arr,$v['id'],$lev+1);
                    $tree = array_merge($tree,$hason);
                }           
            }
        return $tree;
    }

    //递归法查找传入ID元素，的后代树    /******************************************/
    /**
    * @param $arr数组
    * @param $id元素的ID
    * @param $lev层数
    */
    public function progeny($arr,$id=0,$lev=0){   

        $tree = array();
            foreach($arr as $v){
                if($v['id']==$id){
                    $v['lev']=$lev;
                    $tree[] = $v;
                }
                if($v['pid']==$id){//如果查找的ID等于传过来的数字
                    $hason = $this->progeny($arr,$v['id'],$lev+1);
                    $tree = array_merge($tree,$hason);
                }           
            }
        return $tree;
   
    }


    //传入ID，查找该ID的祖先树    /******************************************/

    /**
    * @param $arr数组
    * @param $id元素的ID
    * @param $lev层数
    */
    /******************************************/
    public function ancester($arr,$id,$lev=0){
        $tree = array();
        $idarr = array();

        foreach($arr as $v){
            if($v['id']==$id){
                $v['lev']=$lev;
                $tree[]=$v;

                $tree = array_merge($tree,$this->ancester($arr,$v['pid'],$lev+1));
               
            }
        }
        return $tree;
        // return $idarr;
        // return array_column($tree,'id');//返回所有子元素ID的数组,怎么不能成功

    }


    //面包屑导航，传入ID，查找该ID的祖先树，/******************************************/

    /**
    * @param $arr数组
    * @param $pid元素的父ID
    * @param $lev层数
    */
    /******************************************/
    public function Ancestry($data , $pid, $lev=0) {
    static $ancestry = array();
    static $tmpLev=0;
    foreach($data as $k=>$v) {
        if($v['id'] == $pid) {
            $this->Ancestry($data , $v['pid']); 
            $tmpLev+=1;
            $v['lev']=$tmpLev;           
            $ancestry[] = $v;               
        }
    }
    return $ancestry;
    }


}




//**************** 测试数组 ****************//
//*                                        *//
//*                                        *//
//******************************************//

//*

// $area = array(
//         array('id'=>1,'area'=>'北京','pid'=>0),
//         array('id'=>2,'area'=>'上海','pid'=>0),
//         array('id'=>3,'area'=>'四川','pid'=>0),
//         array('id'=>4,'area'=>'成都','pid'=>3),
//         array('id'=>5,'area'=>'海淀','pid'=>1),
//         array('id'=>6,'area'=>'龙泉','pid'=>4),
//         array('id'=>7,'area'=>'中关村','pid'=>5),
//         array('id'=>8,'area'=>'徐家汇','pid'=>2),
//         array('id'=>9,'area'=>'徐家汇商城','pid'=>8),
//         array('id'=>10,'area'=>'闵行区','pid'=>2),
//         array('id'=>11,'area'=>'华东师范','pid'=>10),
//         array('id'=>12,'area'=>'广东','pid'=>0),
//         array('id'=>13,'area'=>'深圳','pid'=>12),
//         array('id'=>14,'area'=>'宝安','pid'=>13),
//         array('id'=>15,'area'=>'沙井','pid'=>14),
//         array('id'=>16,'area'=>'上南','pid'=>15),
//         array('id'=>17,'area'=>'南浦','pid'=>16),
//         array('id'=>18,'area'=>'松岗','pid'=>14),
//         array('id'=>19,'area'=>'江边','pid'=>18),
//         array('id'=>20,'area'=>'光明','pid'=>13),
//         array('id'=>21,'area'=>'松福','pid'=>19),
//         );
// $letters=array('A','B','C','D','E');
// $letters=array(
//         array('id'=>1,'area'=>'A','pid'=>0),
//         array('id'=>2,'area'=>'B','pid'=>0),
//         array('id'=>3,'area'=>'C','pid'=>0),
//         array('id'=>4,'area'=>'D','pid'=>0),
//         array('id'=>5,'area'=>'E','pid'=>0),
//         array('id'=>6,'area'=>'AA','pid'=>1),
//         array('id'=>7,'area'=>'BB','pid'=>2),
//         array('id'=>8,'area'=>'CC','pid'=>3),
//         array('id'=>9,'area'=>'DD','pid'=>4),
//         array('id'=>10,'area'=>'EE','pid'=>5),
//         array('id'=>11,'area'=>'AAA','pid'=>6),
//         array('id'=>12,'area'=>'BBB','pid'=>7),
//         array('id'=>13,'area'=>'CCC','pid'=>8),
//         array('id'=>14,'area'=>'DDD','pid'=>9),
//         array('id'=>15,'area'=>'AAAA','pid'=>11),
//         array('id'=>16,'area'=>'BBBB','pid'=>12),
//         array('id'=>17,'area'=>'CCCC','pid'=>13),
//         array('id'=>18,'area'=>'DDDD','pid'=>14),
//         array('id'=>19,'area'=>'AAAAA','pid'=>15),
//         array('id'=>20,'area'=>'BBBBB','pid'=>16),
//         array('id'=>21,'area'=>'CA','pid'=>3),
//         array('id'=>22,'area'=>'CB','pid'=>3),
//         array('id'=>23,'area'=>'CC','pid'=>3),
//         array('id'=>24,'area'=>'CD','pid'=>3),
//     );
// /******************************/
// $T = new Tree();
// // $res = $T->getTree($letters,3,0);
// // $res = $T->getTree($area,0,0);
// // $res = $T->sortTree($area,0,0);
// // $res = $T->sortTree($area,14,0);
// // $res = $T->navtree($area,17,0);
// $res = $T->ancester($area,14,0);
// // $res = $T->progeny($area,14,0);
// echo '<pre>';
// print_r($res);
// echo '</pre>';
// echo '<hr>';

// // print_r($res);
// // echo '</pre>';
// echo '<hr>';


// $p= end($letters);
// print_r($p);
// print_r(array_column($res,'id'));

