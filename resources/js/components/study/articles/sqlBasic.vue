<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">    
                    <div class="card-body">
                        <div id="content_views" class="markdown_views">
                            <h1 id="1-概述"><a name="t0"></a><a name="t0"></a>sql常用操作命令</h1>

                        </div>
                        <div>
                            <p class="el_theme">修改密码</p>
                            <p>
                                <ul class="el_exp">                        
                                      <li><span>ALTER USER 'root'@'localhost' IDENTIFIED by 'password'</span></li>
                                </ul>
                            </p>
                            <div class="el_note">
                                <p>其它基本操作命令</p>
                                <pre>
1、登录mysql
本地：mysql -u root -p, 回车后输入密码; 也可以p后不加空格，直接加密码。回车就登录了
远程：mysql -hxx.xx.xx.xx -u -pxxx
2、查看数据库：show databases;
3、连接数据库：use db_name;
4、查看数据表：show tables;
5、查询：select * from table_name where xxx and xxx;
6、当前选择的数据库：select database();
7、查询mysql版本：select version();
8、当前时间：select now();或select current_timestamp();
9、打印年月日：SELECT DAY/MONTH/YEAR(CURRENT_DATE);
10、打印字符：SELECT "I'am danny.yao";
11、查看表结构：describe <表名>;
12、当前所有连接的详细情况：show full processlist;(没有full，只显示前100个连接)
13、查看状态：show status like '%下面变量%';

                                </pre>
                            </div>
                        </div>
                        <div>
                            <p class="el_theme">数据库备件与还原</p>
                            <p>
                                <ul class="el_exp">                        
                                      <pre>
                                          备份某一数据表结构
mysqldump -hlocalhost -uroot -p111111 6d teacher > D:/temp/teacher.sql
备份库下面所有数据表结构
mysqldump -hlocalhost -uroot -p111111 --no-data 6d> D:/temp/db.sql

Windows下打开命令行窗口，不要进入数据库
备份某一数据库：mysqldump -hlocalhost -P3306 -uroot -p111111 6d > D:/temp/6d.sql
备份所有数据库： mysqldump -hlocalhost -P3306 -uroot -p111111 --all-databases > D:/temp/alldb.sql
备份所有数据库： mysqldump -hlocalhost -P3306 -uroot -p111111 -A > D:/temp/alldb2.sql
备份远程数据库： mysqldump -h148.72.232.169 -P3306 -ubruce2017 –p密码j* site > D:/temp/site.sql
备份远程数据库： mysqldump -h148.72.232.169 -P3306 -u study2019 -p 库名 表名 >D:/temp/study.sql
还原数据，命令行导入备份数据，远程备份数据恢复,注意在CMD命令下直接运行而不是进入到mysql里面运行。
1.Mysql客户端还原（windows 命令行下操作）
mysql -hlocalhost -P3306 -uroot -p111111 dbtest < D:/temp/db.sql
2.SQL指令还原
mysql> source E:/pro_sql/test.sql
source D:/PHP/db/db-v8012.sql


                                      </pre>
                                </ul>
                            </p>
                            <div class="el_note">
                                <p>提升命令</p>
                                <pre>
复制表
(只复制结构，源表名：a 新表名：b) (Access可用)
法一：select * into b from a where 1<>1
法二：select top 0 * into b from a
拷贝表
(拷贝数据,源表名：a 目标表名：b) (Access可用)
insert into b(x, y, z) select d,e,f from a;
跨数据库之间表的拷贝
(具体数据使用绝对路径) (Access可用)
insert into b(x, y, z) select d,e,f from a in ‘具体数据库’ where 条件
例子：。.from b in '"&Server.MapPath("."&"\data.mdb" &"' where..
子查询
(表名1：a 表名2：b)
select a,b,c from a where a IN (select d from b 或者： select a,b,c from a where a IN (1,2,3)
显示文章最后时间
select a.title,a.username,b.adddate from table a,(select max(adddate) adddate from table where table.title=a.title) b
外连接查询
(表名1：a 表名2：b)
select a.a, a.b, a.c, b.c, b.d, b.f from a LEFT OUT JOIN b ON a.a = b.c
在线视图查询
(表名1：a
select * from (Select a,b,c FROM a) T where t.a > 1;
between的用法
between为查询某字段的指定范围，限制查询数据范围时包括了边界值，not between不包括边界值
select * from table1 where time between time1 and time2
select a,b,c, from table1 where a not between 数值1 and 数值2
in 的使用方法
select * from table1 where a [not] in (‘值1’，’值2’,’值4’，’值6’)
删除主表没有的信息
两张关联表delete from table1 where not exists ( select * from table2 where table1.field1=table2.field1
四表联查问题
select * from a left inner join b on a.a=b.b right inner join c on a.a=c.c inner join d on a.a=d.d where .....
日程安排提前五分钟
SQL: select * from 日程安排 where datediff('minute',f开始时间，getdate())>5
一条sql 搞定数据库页
select top 10 b.* from (select top 20 主键字段,排序字段 from 表名 order by 排序字段 desc) a,表名 b where b.主键字段= a.主键字段 order by a.排序字段
前10条记录
select top 10 * from table1 where 范围
选择排名
选择在每一组b值相同的数据中对应的a最大的记录的所有信息(类似这样的用法可以用于论坛每月排行榜，每月热销产品分析,按科目成绩排名，等等。)
select a,b,c from tablename ta where a=(select max(a) from tablename tb where tb.b=ta.b)
派生结果表
包括所有在TableA 中但不在TableB和TableC 中的行并消除所有重复行而派生出一个结果表
(select a from tableA except (select a from tableB) except (select a from tableC)
随机取出10条数据
select top 10 * from tablename order by newid()
随机选择记录
select newid()

                                </pre></div>
                        </div>
                        <div>
                            <p class="el_theme">清家库中所有表格内容保留表格,数据库批量操作命令，先用concat方法生成批量命令，再将命令批量执行
</p>
                            <p>
                                <ul class="el_exp">                        
                                      <li><span><p>>一次性删除Mysql数据库中所有表的数据，保留表结构</p>
SELECT CONCAT(‘TRUNCATE TABLE ’,TABLE_NAME,‘;’) FROM information_schema.TABLES WHERE TABLE_SCHEMA=‘数据库名' into outfile 'D:/temp/truncate_test.sql';</span></li>
<li><span><p>一次性删除Mysql数据库中所有数据表</p>
SELECT CONCAT('drop table ',table_name,';') FROM information_schema.`TABLES` WHERE table_schema='数据库名' into outfile 'D:/temp/del.sql';
</span></li>
                                </ul>
                            </p>
                            <div class="el_note">note</div>
                        </div>
                        <div>
                            <p class="el_theme">查看所有库</p>
                            <p>
                                <ul class="el_exp">                        
                                      <li><span>show database</span></li>
                                </ul>
                            </p>
                            <div class="el_note">note</div>
                        </div>
                        <div>
                            <p class="el_theme">远程查看数据
</p>
                            <p>
                                <pre>mysql -h148.72.232.169 -P3306 -ubruce2017 –p
******Mysql******
查看最后10条记录
select * from visitcount order by id DESC limit 0,10;
Limit 0,10也可以省略前面的0
</pre>
                            </p>
                            <div class="el_note">note</div>
                        </div>
                        <div>
                            <p class="el_theme">创建复制表，蠕虫复制数据</p>
                            <p>
                                <code>create table stdt like student;--创建表stdt(复制student的结构)<code></code>
insert stdt select * from student;--把student表中的数据复制到stdt中</code>
                            </p>
                            <div class="el_note">note</div>
                        </div>
                        <div>
                            <p class="el_theme">模糊查询tname字段李开头的记录,使用having关键字</p>
                            <p>
                                <code>
select tname as n,tage,tall from teacher having n like '李%';
</code>
                            </p>
                            <div class="el_note">note</div>
                        </div>
                        <div>
                            <p class="el_theme">sql执行关键字的顺序 </p>
                            <p>
                                <code>
<br>(1)from <br>(3) join <br>(2) on <br>(4) where <br>(5)group by<br>(开始使用select中的别名，后面的语句中都可以使用)<br>(6) avg,sum.... <br>(7)having <br>(8) select <br>(9) distinct <br>(10) order by 
</code>
                            </p>
                            <div class="el_note">note</div>
                        </div>
                        <div>
                            <p class="el_theme">时间戳与日期格式的相互转换，数据库中存的tm字段是10位数的时间戳
</p>
                            <p>
                                <code>select ip,FROM_UNIXTIME(tm) from visitcount group by ip order by tm asc;
</code>
                            </p>
                            <div class="el_note">note</div>
                        </div>
                        <div>
                            <p class="el_theme">truncate 表名;清空表,自动增长归零</p>
                            <p>
                                <code>truncate table;</code>
                            </p>
                            <div class="el_note">note</div>
                        </div>
                        <div>
                            <p class="el_theme">复制字段记录，把B表的两列记录手到A表的两个字段中，复制字段记录，注意不能分为两次插入操作
</p>
                            <p>
                                <code>insert into A(word,def) select word,definition from B;</code>
                            </p>
                            <div class="el_note">
                                <p>其它字段操作</p>
                                <pre>
update dictionary set length =(select (length(word)));//统计字段word的长度写入到length字段中
update dictionary set begin =(select (left(word,1))); //把word字段记录的第一个字母写入到begin字段中
update dictionary set end =(select (right(word,1))); //把word字段记录的最后一个字母写入到end字段中

                                </pre>
                            </div>
                        </div>
                        <div>
                            <p class="el_theme">数据库判断相关操作</p>
                            <p>
                                <code>i</code>
                            </p>
                            <div class="el_note">
                                <p>数据库判断相关操作</p>
                                <pre>
判断对象
判断数据库是否存在：if exists (select*from sysdatabases wherename= ‘数据库名’)，dropdatabase[数据库名]
判断表是否存在：if not exists (select * from sysobjects where [name] = '表名' and xtype='U')
begin-------------------这里创建表--------------------end
判断存储过程是否存在：if exists (select*fromsysobjectswhereid = object_id(N'[存储过程名]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
dropprocedure[存储过程名]
判断临时表是否存在：if object_id(‘tempdb..#临时表名’)isnot null，droptable#临时表名
判断视图是否存在：
--SQL Server 2000
IF EXISTS (SELECT*FROMsysviewsWHEREobject_id = '[dbo].[视图名]'
--SQL Server 2005
IF EXISTS (SELECT*FROMsys.viewsWHEREobject_id = '[dbo].[视图名]'
判断函数是否存在
if exists (select*fromdbo.sysobjectswhereid = object_id(N'[dbo].[函数名]') and xtype in (N'FN', N'IF', N'TF'))
dropfunction[dbo].[函数名]
获取创建信息：SELECT[name],[id],crdateFROMsysobjectswherextype='U'
/*
xtype 的表示参数类型，通常包括如下这些 C =CHECK约束 D = 默认值或DEFAULT约束 F =FOREIGNKEY约束 L =日志FN =标量函数IF = 内嵌表函数 P =存储过程PK =PRIMARYKEY约束（类型是K） RF = 复制筛选存储过程 S = 系统表 TF = 表函数 TR =触发器U = 用户表 UQ =UNIQUE约束（类型是K） V = 视图 X = 扩展存储过程 */
判断列是否存在：if exists(select*fromsyscolumnswhereid=object_id('表名') andname='列名')
altertable表名dropcolumn列名
判断列是否自增列：if columnproperty(object_id('table'),'col','IsIdentity')=1
print '自增列'
else
print '不是自增列'
SELECT*FROMsys.columnsWHEREobject_id=OBJECT_ID('表名') AND is_identity=1
判断表中是否存在索引
if exists(select*fromsysindexeswhereid=object_id('表名') andname='索引名')
print '存在‘ else print '不存在
查看数据库中对象
SELECT*FROMsysobjectsWHEREname='对象名'
select * from table（所要查询的表名） where coloum(条件)

                                </pre>
                            </div>
                        </div>
                        <div>
                            <p class="el_theme">高级查询</p>
                            <p><pre>
                                
UNION运算符
UNION 运算符通过组合其他两个结果表（例如TABLE1 和TABLE2）并消去表中任何重复行而派生出一个结果表。当 ALL 随UNION 一起使用时（即UNION ALL），不消除重复行。两种情况下，派生表的每一行不是来自TABLE1 就是来自TABLE2。
EXCEPT运算符
EXCEPT 运算符通过包括所有在TABLE1 中但不在TABLE2 中的行并消除所有重复行而派生出一个结果表。当ALL 随EXCEPT 一起使用时(EXCEPT ALL)，不消除重复行。
INTERSECT运算符
INTERSECT 运算符通过只包括TABLE1 和TABLE2 中都有的行并消除所有重复行而派生出一个结果表。当ALL 随INTERSECT 一起使用时(INTERSECT ALL)，不消除重复行。
注：使用运算词的几个查询结果行必须是一致的。

外连接
left outer join：
左外连接（左连接）：结果集既包括连接表的匹配行，也包括左连接表的所有行。
SQL: select a.a, a.b, a.c, b.c, b.d, b.f from a LEFT OUT JOIN b ON a.a = b.c
right outer join:
右外连接(右连接)：结果集既包括连接表的匹配连接行，也包括右连接表的所有行。
full outer join：
全外连接：不仅包括符号连接表的匹配行，还包括两个连接表中的所有记录。

                            </pre>
                                <code>i</code>
                            </p>
                            <div class="el_note">
                                <p>数据库判断相关操作</p>

                                <pre></pre>
                            </div>
                        </div>
                        <div>
                            <p class="el_theme">高级Union与group配合两表相加</p>
                            <p>
                                <code>
                                    <pre>
                                        
CREATE TABLE `a` (
  #`id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(20) NOT NULL,  
  PRIMARY KEY (`cate`)
);

CREATE TABLE `b` (
  #`id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(20) NOT NULL,  
  PRIMARY KEY (`cate`)
);
insert into a values('a',10);
insert into a values('b',20);
insert into a values('c',30);
insert into a values('d',40);

insert into b values('b',1);
insert into b values('c',2);
insert into b values('d',3);
insert into b values('e',4);

select * from a;
select * from b;
select * from a union all select * from b;
select cate,sum(num) from (select * from a union all select * from b) as temp group by cate;
                                    </pre>
                                </code>
                            </p>
                            <div class="example">
                                <div class="tableflow">
                                    <div class="tableinline">

<table><tr><th colspan="2">表 a</th></tr><tr><th>cate</th><th>num</th></tr><tr class="odd"><td>a</td><td>10</td></tr>
<tr><td>b</td><td>20</td></tr>
<tr class="odd"><td>c</td><td>30</td></tr>
<tr><td>d</td><td>40</td></tr>
</table></div>
                                    <div class="tableinline">

<table><tr><th colspan="2">表 b</th></tr><tr><th>cate</th><th>num</th></tr><tr class="odd"><td>e</td><td>4</td></tr>
<tr><td>b</td><td>1</td></tr>
<tr class="odd"><td>c</td><td>2</td></tr>
<tr><td>d</td><td>3</td></tr>
</table>

                                    </div>
                                    <div class="tableinline">
<table><tr><th colspan="2">两表相加</th></tr><tr><th>cate</th><th>sum(num)</th></tr><tr class="odd"><td>a</td><td>10</td></tr>
<tr class="plus"><td>b</td><td>21</td></tr>
<tr class="plus"><td>c</td><td>32</td></tr>
<tr class="plus"><td>d</td><td>43</td></tr>
<tr ><td>e</td><td>4</td></tr>
</table>
         
                                    </div>

                                </div>

<p>两表相加select cate,sum(num) from (select * from a union all select * from b) as temp group by cate</p>

                       <pre></pre>
                            </div>
                        </div>
                        <div>
                            <p class="el_theme">高级查询,球队比赛安排</p>
                            <p>
                                <h3>给查询结果集添加自动增长列序号</h3>
                                <code>
                                    <p>SELECT info FROM trtest;//普通查询
                                    <p><strong style="color:red">select @row1 := @row1 +1  from (select @row1 := 0) r</strong>
</p>
                                    <p>select <strong style="color:red">(select @row1 := @row1 +1  from (select @row1 := 0) r ) as Nid</strong>, info from trtest;</p></p>
                                </code>
                                <pre>
use test;
CREATE TABLE `team` (
  `tid` int(1) NOT NULL AUTO_INCREMENT,
  `tname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tid`)
);
insert into team values(null,'team A');
insert into team values(null,'team B');
insert into team values(null,'team C');

delete from team where tid=4;

select * from team;#球队列表

select * from team join (select * from team) as temp;#使用JOIN子查询球队列表交叉搭配
select * from team join (select tname as guesteam from team) as temp;#使用JOIN子查询球队列表交叉搭配，重全名第二列
select * from (select * from team join (select tname as guesteam from team) as temp) as temp2 where tname<>guesteam;#因为自己队不能和自己队比赛，需要去除重复，同一记录两列相同的记录删除
select (select @row1 := @row1 +1  from (select @row1 := 0) r),tname as hostname,guesteam from (select * from (select * from team join (select tname as guesteam from team) as temp) as temp2 where tname<>guesteam
) as temp3;#给结果集添加自动增长的列，查询一共交叉搭配的比赛场数据


                                </pre>
                            </p>
                            <div class="example">

<table><tr><th colspan="3">#因为自己队不能和自己队比赛，需要去除重复</th></tr><tr><th>场数</th><th>（主场）hostname</th><th>（客场）guesteam</th></tr><tr class="odd"><td>1</td><td>team B</td><td>team A</td></tr>
<tr><td>2</td><td>team C</td><td>team A</td></tr>
<tr class="odd"><td>3</td><td>team A</td><td>team B</td></tr>
<tr><td>4</td><td>team C</td><td>team B</td></tr>
<tr class="odd"><td>5</td><td>team A</td><td>team C</td></tr>
<tr><td>6</td><td>team B</td><td>team C</td></tr>
</table>

                                <p>查询球队比赛搭配表</p>
                                <pre></pre>
                            </div>
                        </div>
                        <div>
                            <p class="el_theme">查询语句关键字的组合顺序
</p>
                            <p>
                                <code>查询中用到的关键词主要包含六个，书写顺序为
select--from--where--group by--having--order by其中select和from是必须的，其他关键词是可选的，这六个关键词的执行顺序与书写顺序并不是一样的，执行顺序为from--where--group by--having--select--order by
</code>
                            </p>
                            <div class="el_note">
                                <p>数据库判断相关操作</p>
                                <pre></pre>
                            </div>
                        </div>
                        <div>
                            <p class="el_theme">常用函数</p>
                            <p>
                                <code>i</code>
                            </p>
                            <div class="el_note">
                                <p>
                                    <pre>
获取5-10之间的随机数
Select floor(5+rand()*5);

获取130-180之间的随机数，更新到student表中
update student set w=floor(rand()*50+130);--向下取整floor，向上取整ceil
截取左边字符
Select left(email,5) from tablename;
Select position(‘@’ in email) from tablename;
Select left(email,position(‘@’ in email)-1) from tablename;截取邮箱字符@左边的字符
Select now();
Select date_format(now(),"%Y-%m-%d");
统计word字段的长度更新到length字段
update test set length =(select (length(word)));

                                    </pre></p>
                                <pre></pre>
                            </div>
                        </div>
                        <div>
                            <p class="el_theme">字符集（解决乱码问题）</p>
                            <p>
                                <code>
<p>Show variables like ‘%charact%’\G;;显示字符集设置信息</p>
<p>Set character_set_client=utf8;;设置客户端字符集</p>
<p>Set character_set_results=utf8;;设置结果字符集</p>
<p>一次设置多个字符集选项解决乱码.如右图</p> 
<p>set names utf8;</p> 
<p>set names gbk; </p>                                </code>
                            </p>
                            <div class="el_note">
                                <p>数据库判断相关操作</p>
                                <pre></pre>
                            </div>
                        </div>
                        <div>
                            <p class="el_theme">高级查询</p>
                            <p>
                                <code>i</code>
                            </p>
                            <div class="el_note">
                                <p>数据库判断相关操作</p>
                                <pre></pre>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

export default {
        data() {
            return {
                article:'sqlBasic',                  
            }
        },
        methods: {
            sound(url){
                // alert(url);
                new Audio(url).play();
            }, 
            
        },
        mounted() {
            console.log('Component mounted.............') 
            //获取元素
           
        },
        created() {
            console.log('Component created.............');


        }
    }

</script>
<style scoped="scoped">
.tableinline{
    display: inline-block;
    margin:50px;
}
.example{
    background-color: #adf;
}
.plus{
    background-color: pink;
}
</style>