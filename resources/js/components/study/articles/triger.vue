<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div>    
                    <div>

     
                    <div>
                        <h1>triger</h1>
                        <pre>
                            
-- CREATE
--     TRIGGER `event_name` BEFORE/AFTER INSERT/UPDATE/DELETE
--     ON `database`.`table`
--     FOR EACH ROW BEGIN
--      -- trigger body
--      -- this code is applied to every
--      -- inserted/updated/deleted row
--     END;

CREATE TABLE trigger_test (
     message VARCHAR(100)
);




DELIMITER $$
CREATE
    TRIGGER my_trigger BEFORE INSERT
    ON employee
    FOR EACH ROW BEGIN
        INSERT INTO trigger_test VALUES('added new employee');
    END$$
DELIMITER ;
INSERT INTO employee
VALUES(109, 'Oscar', 'Martinez', '1968-02-19', 'M', 69000, 106, 3);


DELIMITER $$
CREATE
    TRIGGER my_trigger BEFORE INSERT
    ON employee
    FOR EACH ROW BEGIN
        INSERT INTO trigger_test VALUES(NEW.first_name);
    END$$
DELIMITER ;
INSERT INTO employee
VALUES(110, 'Kevin', 'Malone', '1978-02-19', 'M', 69000, 106, 3);

DELIMITER $$
CREATE
    TRIGGER my_trigger BEFORE INSERT
    ON employee
    FOR EACH ROW BEGIN
         IF NEW.sex = 'M' THEN
               INSERT INTO trigger_test VALUES('added male employee');
         ELSEIF NEW.sex = 'F' THEN
               INSERT INTO trigger_test VALUES('added female');
         ELSE
               INSERT INTO trigger_test VALUES('added other employee');
         END IF;
    END$$
DELIMITER ;
INSERT INTO employee
VALUES(111, 'Pam', 'Beesly', '1988-02-19', 'F', 69000, 106, 3);


DROP TRIGGER my_trigger;

                        </pre>

                        <div>
<h3>一、触发器概念</h3><p><span style="color:#333333;">&nbsp; &nbsp; &nbsp; &nbsp;触发器（trigger）：监视某种情况，并触发某种操作，它是提供给程序员和数据分析员来保证数据完整性的一种方法，它是与表事件相关的特殊的存储过程</span>
    <span style="color:#333333;">，它的执行不是由程序调用，也不是手工启动，而是由事件来触发，例如</span>
<span style="color:#333333;">当对一个表进行操作（ insert，delete， update）时就会激活它执行。<br> &nbsp; &nbsp; &nbsp; &nbsp; 触发器经常用于加强数据的完整性约束和业务规则等。&nbsp;触发器创建语法四要素：<br> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
<span style="color:#ff0000;">1.监视地点(table)<br> &nbsp; &nbsp; &nbsp; &nbsp; 2.监视事件(insert/update/delete)&nbsp;<br> &nbsp; &nbsp; &nbsp; &nbsp; 3.触发时间(after/before)&nbsp;<br> &nbsp; &nbsp; &nbsp; &nbsp; 4.触发事件(insert/update/delete)</span><br><span style="color:#333333;">&nbsp; &nbsp; &nbsp; &nbsp; 触发器基本语法如下所示：</span></p>  
<code ><ol><li><div ><div></div></div><div><div><span>create</span> <span>trigger</span> triggerName</div></div></li><li><div ><div></div></div><div><div><span>after</span>/<span>before</span> <span>insert</span>/<span>update</span>/<span>delete</span> <span>on</span> 表名</div></div></li><li><div ><div></div></div><div><div><span>for</span> <span>each</span> <span>row</span>   <span>#这句话在mysql是固定的</span></div></div></li><li><div ><div></div></div><div><div><span>begin</span></div></div></li><li><div ><div></div></div><div><div>    <span>sql</span>语句;</div></div></li><li><div ><div></div></div><div><div><span>end</span>;</div></div></li></ol></code>                       
<h3>二、简单的Insert触发器</h3><p>假设存在一张学生表（student），包括学生的基本信息，学号（stuid）为主键。另外存在一张成绩表（cj），对应每个学生包括一个值。其中number表示序号为主键，自动递增序列。它在插入过程中默认自增。同时假设成绩表中包括学生姓名和学号。</p>    
<span style="color:#333333;">&nbsp; &nbsp; &nbsp; &nbsp; 该成绩表目前没有值，先需要设计一个触发器，当增加新的学生时，需要在成绩表中插入对应的学生信息，至于具体math、chinese、english后面由老师打分更新即可。<br> &nbsp; &nbsp; &nbsp; &nbsp; 那么，如何设计触发器呢？<br> &nbsp; &nbsp; &nbsp; &nbsp; 1.首先它是一个插入Insert触发器，是建立在表student上的；<br> &nbsp; &nbsp; &nbsp; &nbsp; 2.然后是after，插入后的事件；<br> &nbsp; &nbsp; &nbsp; &nbsp; 3.事件内容是插入成绩表，主需要插入学生的学号和姓名，number为自增，而成绩目前不需要。<br> &nbsp; &nbsp; &nbsp; &nbsp; 注意：new表示student中新插入的值。</span> 
<code ><ol><li><div ><div></div></div><div><div><span>create</span> <span>trigger</span> ins_stu</div></div></li><li><div ><div></div></div><div><div><span>after</span> <span>insert</span> <span>on</span> student <span>for</span> <span>each</span> <span>row</span> </div></div></li><li><div ><div></div></div><div><div><span>begin</span></div></div></li><li><div ><div></div></div><div><div>     <span>insert</span> <span>into</span> cj ( stu_id, stu_name)</div></div></li><li><div ><div></div></div><div><div>     <span>values</span>( new.stuid, new.username);</div></div></li><li><div ><div></div></div><div><div><span>end</span>;</div></div></li></ol></code>

<p>然后插入数据：insert student values ('eastmount','111111','6','1991-12-05'); 同时插入两个数据，触发器正确执行了~ </p>   
<p>注意：创建触发器和表一样，建议增加判断：DROP TRIGGER IF EXISTS `ins_stu`;</p>                   
<h3>三、判断值后调用触发器</h3> 
<p><span style="font-family:Microsoft YaHei; font-size:18px">&nbsp; &nbsp; &nbsp; &nbsp; 这里简单讲述几个判断插入类型的触发器。<br> &nbsp; &nbsp; &nbsp; &nbsp; 比如触发器调用，当插入时间小时为20时，对数据进行插入：<br> </span></p>
<pre><code ><ol><li><div ><div></div></div><div><div><span>DROP</span> <span>TRIGGER</span> <span>IF</span> <span>EXISTS</span> <span>`ins_info`</span>;</div></div></li><li><div ><div></div></div><div><div><span>create</span> <span>trigger</span> ins_info</div></div></li><li><div ><div></div></div><div><div><span>after</span> <span>insert</span> <span>on</span> nhfxelect <span>for</span> <span>each</span> <span>row</span> </div></div></li><li><div ><div></div></div><div><div><span>begin</span></div></div></li><li><div ><div></div></div><div><div> <span>if</span> <span>HOUR</span>(new.RecordTime)=<span>'20'</span> <span>then</span>  </div></div></li><li><div ><div></div></div><div><div>   <span>insert</span> <span>into</span> nhfxbyhour (UnitDepName, UnitDepCode, ElectCost, TimeJG, RecordTime)</div></div></li><li><div ><div></div></div><div><div>     <span>values</span>( <span>'数统学院'</span>, <span>'1'</span>, new.USERKWH, <span>'20'</span>, new.RecordTime);</div></div></li><li><div ><div></div></div><div><div>    <span>end</span> <span>if</span>;</div></div></li><li><div ><div></div></div><div><div><span>end</span>;</div></div></li></ol></code><div  data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre>    
<p><span style="font-family:Microsoft YaHei; font-size:18px">&nbsp; &nbsp; &nbsp; &nbsp; 这个触发器中，RecordTime为datetime类型，如"2016-08-28 20:10:00"，这时hour()这个值为20才能插入；否则数据不能插入。同时可以date_format(new.RecordTime, '%Y-%m-%d')判断日期为某天或某年某月进行插入。<br> &nbsp; &nbsp; &nbsp; &nbsp; 同时，再如更新触发器，如果设置的值为某个范围，才进行操作或性别为"男"或"女"才进行操作。<br> &nbsp; &nbsp; &nbsp; &nbsp; 基本语法：<br> &nbsp; &nbsp; &nbsp; &nbsp; <span style="color:#ff0000">if 判断条件&nbsp;then<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sql语句;<br> &nbsp; &nbsp; &nbsp; &nbsp; end if;</span></span></p>                       
<h3>四、Update触发器-实时更新</h3>                            
<p><span style="font-family:Microsoft YaHei; font-size:18px"><span style="color:rgb(51,51,51); line-height:24px"><br> &nbsp; &nbsp; &nbsp; &nbsp; 假设存在一个实时插入数据的服务器，例如学生的消费金额或用电量等。<br> &nbsp; &nbsp; &nbsp; &nbsp; StuCost：学生的用电数据，实时插入，Cost为每30秒消费金额，RecordTime为每分钟插入时间，datetime类型；<br> &nbsp; &nbsp; &nbsp; &nbsp; StuCostbyHour：统计学生一小时的消费金额，HourCost为金额总数，按小时统计，TimeJD时间段，1~24，对应每小时，RecordTime为统计时间。<br> &nbsp; &nbsp; &nbsp; &nbsp; 现在需要设计一个实时更新触发器，当插入消费数据时，按小时统计学生的消费金额，同理，用电量等。<br> </span></span></p>
<code ><ol style="width:1255px"><li><div ><div></div></div><div><div><span>DROP</span> <span>TRIGGER</span> <span>IF</span> <span>EXISTS</span> <span>`upd_info`</span>;</div></div></li><li><div ><div></div></div><div><div><span>create</span> <span>trigger</span> upd_info</div></div></li><li><div ><div></div></div><div><div><span>after</span> <span>insert</span> <span>on</span> StuCost <span>for</span> <span>each</span> <span>row</span> </div></div></li><li><div ><div></div></div><div><div><span>begin</span></div></div></li><li><div ><div></div></div><div><div>   <span>update</span> StuCostbyHour <span>set</span> HourCost = HourCost + new.Cost</div></div></li><li><div ><div></div></div><div><div>      <span>where</span> (TimeJD = <span>hour</span>(new.RecordTime) + <span>1</span>) <span>and</span> <span>date_format</span>(new.RecordTime, <span>'%Y-%m-%d'</span>) = <span>date_format</span>(RecordTime, <span>'%Y-%m-%d'</span>);</div></div></li><li><div ><div></div></div><div><div><span>end</span>;</div></div></li></ol></code>
<h3>五、触发器尽量避免</h3>                            
<p><span style="font-family:Microsoft YaHei; font-size:18px">&nbsp; &nbsp; &nbsp; &nbsp; 下面简单参考知乎和CSDN论坛，简单讲解几个内容：<br> <strong><span style="color:#3333ff">问题一：</span></strong><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a target="_blank" href="http://www.zhihu.com/question/19749126" rel="noopener noreferrer">大型系统必须得要存储过程和触发器吗？ - 知乎</a><br> <strong>回答1： &nbsp; &nbsp;</strong> &nbsp; &nbsp;<br> &nbsp; &nbsp; &nbsp; &nbsp; 我们先要弄清楚二个问题：<br> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;1.什么是大型系统？<br> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-family:&quot;Microsoft YaHei&quot;; font-size:18px">2.你讨论的是什么领域的应用，可以大致分为二种：互联网、企业内部</span><br> &nbsp; &nbsp; &nbsp; &nbsp; 接下来给你举一些例子：<br> &nbsp; &nbsp; &nbsp; &nbsp; 1.SAP、peopleSoft、ERP等企业级别应用<br> &nbsp; &nbsp; &nbsp; &nbsp; 一般情况下，会使用存储过程和触发器，减少开发成本，毕竟其业务逻辑修改频繁，而且为通用，很多时候会把一些业务逻辑编写成存储过程，像Oracle会写成包，比存储过程更强大。<br> &nbsp; &nbsp; &nbsp; &nbsp; 另外一个原因是服务器的负载是可控，也即系统的访问人数首先是可控的，没有那么大，而且这些数据又非常关键，为此往往使用的设备也比较好，多用存储柜子支撑数据库。<br> &nbsp; &nbsp; &nbsp; &nbsp; 2.另外一类互联网行业的<br> &nbsp; &nbsp; &nbsp; &nbsp; 比如淘宝、知呼、微博等，数据库的压力是非常大的，也往往会最容易成为瓶颈，而且多用PC服务器支撑，用户量的增速是不可控的，同时在线访问的用户量也是不可控的，为此肯定会把业务逻辑放到其他语言的代码层，而且可以借助一些LVS等类型软硬件做负载均衡，以及平滑增减Web层的服务器，从而达到线性的增减而支持大规模的访问。<br> &nbsp; &nbsp; &nbsp; &nbsp; 所以不管你的这个系统是否庞大，首先要分业务支持的对象，系统最可能容易出现瓶颈的地方在那？<br> &nbsp; &nbsp; &nbsp; &nbsp; 当然也不是说互联网行业的应用就绝对不用存储过程，这个也不对，曾在阿里做的Oracle迁移MySQL系统确实用了，因为历史的原因，另外还有一些新系统也有用，比如晚上进行定期的数据统计的一些操作，不过有量上的控制。存储过程是好东西，要分场景，分业务类型来用就可以把握好。<br> <br> <strong>回答2：</strong><br> &nbsp; &nbsp; &nbsp; &nbsp; 肯定不能一刀切的说能用或者不能用，不同类型的系统、不同的规模、不同的历史原因都会有不同的解决方案。<br> &nbsp; &nbsp; &nbsp; &nbsp; 一般情况下，Web应用的瓶颈常在DB上，所以会尽可能的减少DB做的事情，把耗时的服务做成Scale Out，这种情况下，肯定不会使用存储过程；而如果只是一般的应用，DB没有性能上的问题，在适当的场景下，也可以使用存储过程。<br> &nbsp; &nbsp; &nbsp; &nbsp; 至于触发器，我是知道有这东西但从来没用过。我希望风险可控，遇到问题能够快速的找到原因，尽可能不会去使用触发器。<br> <br> <span style="font-family:&quot;Microsoft YaHei&quot;; font-size:18px"><strong>回答3：</strong></span><br> &nbsp; &nbsp; &nbsp; &nbsp; 1.PLSQL可以大大降低parse/exec 百分比；<br> &nbsp; &nbsp; &nbsp; &nbsp; 2.存储过程可以自动完成静态SQL variable bind；<br> &nbsp; &nbsp; &nbsp; &nbsp; 3.存储过程大大减少了JDBC网络传输与交互，速度快；<br> &nbsp; &nbsp; &nbsp; &nbsp; 4.oracle 中存储过程内部commit为异步写，一定程度上减少了等redo日志落地时间；<br> &nbsp; &nbsp; &nbsp; &nbsp; 5.存储过程最大问题就是给数据库开发工作压力太大，另外架构升级时候会比较难解耦；<br> &nbsp; &nbsp; &nbsp; &nbsp; 6.触发器不推荐使用，触发操作能在业务层解决就在业务层解决，否则很难维护，而且容易产生死锁。<br> <br> <strong><span style="color:#3333ff">问题2：</span></strong><br> &nbsp; &nbsp; &nbsp; &nbsp; <a target="_blank" href="https://segmentfault.com/q/1010000004907411" rel="noopener noreferrer"> 为什么大家都不推荐使用MySQL触发器而用存储过程？-&nbsp;segmentfault</a><br> <strong>回答1：</strong><br> &nbsp; &nbsp; &nbsp; &nbsp; 1.存储过程和触发器二者是有很大的联系的，我的一般理解就是触发器是一个隐藏的存储过程，因为它不需要参数，不需要显示调用，往往在你不知情的情况下已经做了很多操作。从这个角度来说，由于是隐藏的，无形中增加了系统的复杂性，非DBA人员理解起来数据库就会有困难，因为它不执行根本感觉不到它的存在。<br> &nbsp; &nbsp; &nbsp; &nbsp; 2.再有，涉及到复杂的逻辑的时候，触发器的嵌套是避免不了的，如果再涉及几个存储过程，再加上事务等等，很容易出现死锁现象，再调试的时候也会经常性的从一个触发器转到另外一个，级联关系的不断追溯，很容易使人头大。其实，从性能上，触发器并没有提升多少性能，只是从代码上来说，可能在coding的时候很容易实现业务，所以我的观点是：<span style="color:#ff0000">摒弃触发器！触发器的功能基本都可以用存储过程来实现。</span><br> &nbsp; &nbsp; &nbsp; &nbsp; 3.在编码中存储过程显示调用很容易阅读代码，触发器隐式调用容易被忽略。<br> &nbsp; &nbsp; &nbsp; &nbsp; 4.存储过程的致命伤在于移植性，存储过程不能跨库移植，比如事先是在mysql数据库的存储过程，考虑性能要移植到oracle上面那么所有的存储过程都需要被重写一遍。<br> <br> <strong>回答2：</strong><br> &nbsp; &nbsp; &nbsp; &nbsp; 这种东西只有在并发不高的项目，管理系统中用。如果是面向用户的高并发应用，都不要使用。<br> &nbsp; &nbsp; &nbsp; &nbsp; 触发器和存储过程本身难以开发和维护，不能高效移植。触发器完全可以用事务替代。存储过程可以用后端脚本替代。<br> <br> <strong>回答3：</strong><br> &nbsp; &nbsp; &nbsp; &nbsp; 我觉得来自两方面的因素：<br> &nbsp; &nbsp; &nbsp; &nbsp; 1.存储过程需要显式调用，意思是阅读源码的时候你能知道存储过程的存在，而触发器必须在数据库端才能看到，容易被忽略。<br> &nbsp; &nbsp; &nbsp; &nbsp; 2.Mysql的触发器本身不是很好，比如after delete无法链式反应的问题。<br> &nbsp; &nbsp; &nbsp; &nbsp; 我认为性能上其实还是触发器占优势的，但是基于以上原因不受青睐。<br> </span></p>

                        </div>
                    <hr>
                    <div>
                        <h3>MySQL触发器的应用</h3>
                        <div>
      

    <div>
            <div>               
                
                <p>MySQL触发器是在5.0版本引入的。针对需要对数据库做级联更改是很适宜使用的，如需要实时监控某张表中的某个字段的更改而需要做出相应的处理。触发器虽然功能强大，能轻松可靠的实现许多复杂的功能，《<a href="http://www.ttlsa.com/html/1269.html">使用MySQL UDFs来调用gearman分布式任务分发系统</a>》、《<a href="http://www.ttlsa.com/html/1440.html">sphinx应用(三)—sphinx分布式, XML数据源, Gearman, UpdateAttributes</a>》以及后续会将用户表导入到NOSQL数据库中，都使用到触发器的。不过，要慎用触发器，滥用触发器会造成数据库以及应用程序维护困难。</p>
<p><span style="color: #ff0000;"><strong>1. 创建触发器语法</strong></span></p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div>
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">CREATE
    [DEFINER = { user | CURRENT_USER }]
    TRIGGER trigger_name
    trigger_time trigger_event
    ON tbl_name FOR EACH ROW
    trigger_body

trigger_time: { BEFORE | AFTER }
trigger_event: { INSERT | UPDATE | DELETE }</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div><span> </span>
                            <span>[</span>
                            <span>DEFINER</span>
                            <span> </span>
                        <span>=</span>
                        <span> </span>
                        <span>{</span>
                        <span> </span>
                        <span>user</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>CURRENT</span>
                        <span>_</span>USER<span> </span>
                        <span>}</span>
                        <span>]</span></div><div><span>  </span>
                            <span>TRIGGER </span>
                            <span>trigger_name</span></div><div><span>  </span>
                                <span>trigger_time </span>
                            <span>trigger_event</span></div><div><span>    </span>
                                <span>ON </span>
                            <span>tbl_name </span>
                            <span>FOR</span>
                        <span> </span>
                        <span>EACH</span>
                        <span> </span>
                        <span>ROW</span></div><div><span>  </span>
                            <span>trigger_body</span></div><div><span>trigger_time</span>
                            <span>:</span>
                            <span> </span>
                            <span>{</span>
                        <span> </span>
                        <span>BEFORE</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>AFTER</span>
                        <span> </span>
                        <span>}</span></div><div><span>trigger_event</span>
                            <span>:</span>
                            <span> </span>
                            <span>{</span>
                        <span> </span>
                        <span>INSERT</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>UPDATE</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>DELETE</span>
                        <span> </span>
                        <span>}</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
<!-- [Format Time: 0.0003 seconds] -->
<p>语法相关部分说明：<br>
1.1 授权与回收<br>
创建触发器需要有CREATE TRIGGER权限：</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div>
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">grant create trigger on `database_naem`.`table_name` to `user_name`@`ip_address`;</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div>1</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div><span>grant </span>
                            <span>create </span>
                            <span>trigger </span>
                            <span>on</span>
                        <span> </span>
                        <span>`</span>
                        <span>database_naem</span>
                        <span>`</span>
                        <span>.</span>
                        <span>`</span>
                        <span>table_name</span>
                        <span>`</span>
                        <span> </span>
                        <span>to</span>
                        <span> </span>
                        <span>`</span>
                        <span>user_name</span>
                        <span>`</span>
                        <span>@</span>
                        <span>`</span>
                        <span>ip_address</span>
                        <span>`</span>
                        <span>;</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
<!-- [Format Time: 0.0001 seconds] -->
<p>权限收回：</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div>
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">revoke create trigger on `database_naem`.`table_name` from `user_name`@`ip_address`;</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div>1</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div><span>revoke </span>
                            <span>create </span>
                            <span>trigger </span>
                            <span>on</span>
                        <span> </span>
                        <span>`</span>
                        <span>database_naem</span>
                        <span>`</span>
                        <span>.</span>
                        <span>`</span>
                        <span>table_name</span>
                        <span>`</span>
                        <span> </span>
                        <span>from</span>
                        <span> </span>
                        <span>`</span>
                        <span>user_name</span>
                        <span>`</span>
                        <span>@</span>
                        <span>`</span>
                        <span>ip_address</span>
                        <span>`</span>
                        <span>;</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
<!-- [Format Time: 0.0001 seconds] -->
<p>1.2 trigger_name<br>
必须给触发器命令，最多64个字符，建议用表的名字_触发器类型的缩写方法命名。如ttlsa_posts_bi(表ttlsa_posts，触发器发生在insert之前before)</p>
<p>1.3 DEFINER子句<br>
在激活触发器时，检查访问权限，确保触发器安全使用。</p>
<p>1.4 trigger_time<br>
定义触发器触发时间。可以设置为在行记录更改之前或之后发生。</p>
<p>1.5 trigger_event<br>
定义触发器触发事件。触发的事件有：<br>
1.5.1<br>
INSERT：当一个新行插入到表中时触发。如INSERT、LOAD DATA和REPLACE语句。<br>
UPDATE：当一个行数据被更改时触发。如UPDATE语句。<br>
DELETE：当一个行从表中删除时触发。如DELETE和REPLACE语句。 注意：DROP TABLE和TRUNCATE TABLE语句不会触发该触发器，因为它们不是使用DELETE。同样删除一个分区表也不会触发。</p>
<p>有一个潜在的混乱情况，如INSERT INTO ... ON DUPLICATE KEY UPDATE ... 取决于是否有重复键行。</p>
<p>不能对一个表创建具有相同的触发事件和触发时间的多个触发器。如对于一个表不能创建两个BEFORE UPDATE触发器，但是，可以创建一个BEFORE UPDATE和一个BEFORE INSERT或一个BEFORE UPDATE和一个AFTER UPDATE触发器。</p>
<p>1.6 FOR EACH ROW子句<br>
定义触发执行间隔。FOR EACH ROW子句定义触发器每隔一行执行一次动作，而不是对整个表执行一次。</p>
<p>1.7 trigger_body子句<br>
包含要触发执行的SQL语句。可以是任何合法的语句，包括复合语句(需要使用BEGIN ... END结构)，流控制语句(if、case、while、loop、for、repeat、leave、iterate)，变量声明(declare)以及指派(set)，异常处理声明，允许条件声明，但是这里的语句受的限制和函数的一样。</p>
<p>1.7.1 OLD与NEW<br>
在触发器的SQL语句中，可以关联表中的任何列，通过使用OLD和NEW列名来标识，如OLD.col_name、NEW.col_name。OLD.col_name关联现有的行的一列在被更新或删除前的值。NEW.col_name关联一个新行的插入或更新现有的行的一列的值。<br>
对于INSERT语句，只有NEW是合法的。否则会报错：ERROR 1363 (HY000): There is no OLD row in on INSERT trigger<br>
对于DELETE语句，只有OLD是合法的。否则会报错：ERROR 1363 (HY000): There is no NEW row in on DELETE trigger<br>
对于UPDATE语句，NEW和OLD可以同时使用。</p>
<p><span style="color: #ff0000;"><strong>2. 实例</strong></span><br>
2.1 创建表<br>
使用在《<a href="http://www.ttlsa.com/html/2269.html">mysqludf_json将关系数据以JSON编码</a>》一文中创建的表。后续会将用户表迁移到nosql数据库上的。</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div>
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">mysql&gt; create table `ttlsa_users` (
    -&gt; `uid` int(11) unsigned,
    -&gt; `username` varchar(40) NOT NULL,
    -&gt; `password` varchar(40) NOT NULL,
    -&gt; `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    -&gt; PRIMARY KEY (`uid`)
    -&gt; );</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>create </span>
                        <span>table</span>
                        <span> </span>
                        <span>`</span>
                        <span>ttlsa_users</span>
                        <span>`</span>
                        <span> </span>
                        <span>(</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>`</span>
                        <span>uid</span>
                        <span>`</span>
                        <span> </span>
                        <span>int</span>
                        <span>(</span>
                        <span>11</span>
                        <span>)</span>
                        <span> </span>
                        <span>unsigned</span>
                        <span>,</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>`</span>
                        <span>username</span>
                        <span>`</span>
                        <span> </span>
                        <span>varchar</span>
                        <span>(</span>
                        <span>40</span>
                        <span>)</span>
                        <span> </span>
                        <span>NOT</span>
                        <span> </span>
                        <span>NULL</span>
                        <span>,</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>`</span>
                        <span>password</span>
                        <span>`</span>
                        <span> </span>
                        <span>varchar</span>
                        <span>(</span>
                        <span>40</span>
                        <span>)</span>
                        <span> </span>
                        <span>NOT</span>
                        <span> </span>
                        <span>NULL</span>
                        <span>,</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>`</span>
                        <span>createtime</span>
                        <span>`</span>
                        <span> </span>
                        <span>timestamp </span>
                        <span>NOT</span>
                        <span> </span>
                        <span>NULL</span>
                        <span> </span>
                        <span>DEFAULT</span>
                        <span> </span>
                        <span>CURRENT_TIMESTAMP </span>
                        <span>ON </span>
                        <span>UPDATE </span>
                        <span>CURRENT_TIMESTAMP</span>
                        <span>,</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>PRIMARY </span>
                        <span>KEY</span>
                        <span> </span>
                        <span>(</span>
                        <span>`</span>
                        <span>uid</span>
                        <span>`</span>
                        <span>)</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>)</span>
                        <span>;</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
<!-- [Format Time: 0.0003 seconds] -->
<p>创建另外一张表来存放触发器动作数据。</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div style=" margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important;">
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">mysql&gt; create table `ttlsa_users3` (
    -&gt; `uid` int(11) unsigned,
    -&gt; `userinfo` varchar(200),
    -&gt; );</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div>1</div><div>2</div><div>3</div><div>4</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>create </span>
                        <span>table</span>
                        <span> </span>
                        <span>`</span>
                        <span>ttlsa_users3</span>
                        <span>`</span>
                        <span> </span>
                        <span>(</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>`</span>
                        <span>uid</span>
                        <span>`</span>
                        <span> </span>
                        <span>int</span>
                        <span>(</span>
                        <span>11</span>
                        <span>)</span>
                        <span> </span>
                        <span>unsigned</span>
                        <span>,</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>`</span>
                        <span>userinfo</span>
                        <span>`</span>
                        <span> </span>
                        <span>varchar</span>
                        <span>(</span>
                        <span>200</span>
                        <span>)</span>
                        <span>,</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>)</span>
                        <span>;</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
<!-- [Format Time: 0.0002 seconds] -->
<p>2.2 创建触发器</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div>
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">mysql&gt; delimiter //
mysql&gt; create trigger ttlsa_users_ai
    -&gt; after insert on ttlsa_users
    -&gt; for each row
    -&gt; insert into ttlsa_users3 (uid, userinfo) values(uid, json_object(NEW.uid, NEW.username, NEW.password));
    -&gt; //

mysql&gt; create trigger ttlsa_users_au
    -&gt; after update on ttlsa_users
    -&gt; for each row
    -&gt; update ttlsa_users3 set userinfo=json_object(NEW.uid, NEW.username, NEW.password) where uid=OLD.uid;
    -&gt; //</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>delimiter</span>
                        <span> </span>
                        <span>//</span></div><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>create </span>
                        <span>trigger </span>
                        <span>ttlsa_users_ai</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>after </span>
                        <span>insert </span>
                        <span>on </span>
                        <span>ttlsa_users</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>for</span>
                        <span> </span>
                        <span>each</span>
                        <span> </span>
                        <span>row</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>insert </span>
                        <span>into </span>
                        <span>ttlsa_users3</span>
                        <span> </span>
                        <span>(</span>
                        <span>uid</span>
                        <span>,</span>
                        <span> </span>
                        <span>userinfo</span>
                        <span>)</span>
                        <span> </span>
                        <span>values</span>
                        <span>(</span>
                        <span>uid</span>
                        <span>,</span>
                        <span> </span>
                        <span>json_object</span>
                        <span>(</span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>uid</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>username</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>password</span>
                        <span>)</span>
                        <span>)</span>
                        <span>;</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>//</span></div><div>&nbsp;</div><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>create </span>
                        <span>trigger </span>
                        <span>ttlsa_users_au</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>after </span>
                        <span>update </span>
                        <span>on </span>
                        <span>ttlsa_users</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>for</span>
                        <span> </span>
                        <span>each</span>
                        <span> </span>
                        <span>row</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>update </span>
                        <span>ttlsa_users3 </span>
                        <span>set </span>
                        <span>userinfo</span>
                        <span>=</span>
                        <span>json_object</span>
                        <span>(</span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>uid</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>username</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>password</span>
                        <span>)</span>
                        <span> </span>
                        <span>where </span>
                        <span>uid</span>
                        <span>=</span>
                        <span>OLD</span>
                        <span>.</span>
                        <span>uid</span>
                        <span>;</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>-&gt;</span>
                            <span> </span>
                            <span>//</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
<!-- [Format Time: 0.0004 seconds] -->
<p>2.3 测试</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div>
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">mysql&gt; insert into ttlsa_users values (890,'xuhh',md5('abc'),NULL,'test trigger')//
Query OK, 1 row affected (0.01 sec)

mysql&gt; select * from ttlsa_users//
+-----+-------------+----------------------------------+---------------------+------------------------------------+
| uid | username    | password                         | createtime          | json_data                          |
+-----+-------------+----------------------------------+---------------------+------------------------------------+
| 888 | ttlsa_admin | 6a6e41c9b741f740cfa5f266b249d452 | 2013-08-10 11:27:01 | \website\ - "http://www.ttlsa.com" |
| 889 | ttlsa_admin | 6a6e41c9b741f740cfa5f266b249d452 | 2013-08-10 14:08:44 | xuhh                               |
| 890 | xuhh        | 900150983cd24fb0d6963f7d28e17f72 | 2013-08-14 16:40:49 | test trigger                       |
+-----+-------------+----------------------------------+---------------------+------------------------------------+
3 rows in set (0.00 sec)

mysql&gt; select * from ttlsa_users3//
+-----------------------------------------------------------------------------+------+
| userinfo                                                                    | uid  |
+-----------------------------------------------------------------------------+------+
| {"uid":890,"username":"xuhh","password":"900150983cd24fb0d6963f7d28e17f72"} |  890 |
+-----------------------------------------------------------------------------+------+
2 rows in set (0.00 sec)

mysql&gt; update ttlsa_users set password='test_update' where uid=890//
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql&gt; select * from ttlsa_users//
+-----+-------------+----------------------------------+---------------------+------------------------------------+
| uid | username    | password                         | createtime          | json_data                          |
+-----+-------------+----------------------------------+---------------------+------------------------------------+
| 888 | ttlsa_admin | 6a6e41c9b741f740cfa5f266b249d452 | 2013-08-10 11:27:01 | \website\ - "http://www.ttlsa.com" |
| 889 | ttlsa_admin | 6a6e41c9b741f740cfa5f266b249d452 | 2013-08-10 14:08:44 | xuhh                               |
| 890 | xuhh        | test_update                      | 2013-08-14 16:41:33 | test trigger                       |
+-----+-------------+----------------------------------+---------------------+------------------------------------+
3 rows in set (0.00 sec)

mysql&gt; select * from ttlsa_users3//
+-----------------------------------------------------------------------------+------+
| userinfo                                                                    | uid  |
+-----------------------------------------------------------------------------+------+
| {"uid":890,"username":"xuhh","password":"test_update"}                      |  890 |
+-----------------------------------------------------------------------------+------+
2 rows in set (0.00 sec)</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div >1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div><div>18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div><div>24</div><div>25</div><div>26</div><div>27</div><div>28</div><div>29</div><div>30</div><div>31</div><div>32</div><div>33</div><div>34</div><div>35</div><div>36</div><div>37</div><div>38</div><div>39</div><div>40</div><div>41</div><div>42</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>insert </span>
                        <span>into </span>
                        <span>ttlsa_users </span>
                        <span>values</span>
                        <span> </span>
                        <span>(</span>
                        <span>890</span>
                        <span>,</span>
                        <span>'xuhh'</span>
                        <span>,</span>
                        <span>md5</span>
                        <span>(</span>
                        <span>'abc'</span>
                        <span>)</span>
                        <span>,</span>
                        <span>NULL</span>
                        <span>,</span>
                        <span>'test trigger'</span>
                        <span>)</span>
                        <span>//</span></div><div><span>Query </span>
                            <span>OK</span>
                            <span>,</span>
                            <span> </span>
                        <span>1</span>
                        <span> </span>
                        <span>row </span>
                        <span>affected</span>
                        <span> </span>
                        <span>(</span>
                        <span>0.01</span>
                        <span> </span>
                        <span>sec</span>
                        <span>)</span></div><div>&nbsp;</div><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                        <span class="crayon-e ">select *</span>
                        <span> </span>
                        <span>from </span>
                        <span>ttlsa_users</span>
                        <span>//</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>|</span>
                            <span> </span>
                            <span>uid</span>
                            <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>username</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span> </span>
                        <span>password</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                        <span>|</span>
                        <span> </span>
                        <span>createtime</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span> </span>
                        <span>json_data</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>|</span>
                            <span> </span>
                            <span>888</span>
                            <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>ttlsa_admin</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>6a6e41c9b741f740cfa5f266b249d452</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>2013</span>
                        <span>-</span>
                        <span>08</span>
                        <span>-</span>
                        <span>10</span>
                        <span> </span>
                        <span>11</span>
                        <span>:</span>
                        <span>27</span>
                        <span>:</span>
                        <span>01</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>\</span>
                        <span>website</span>
                        <span>\</span>
                        <span> </span>
                        <span>-</span>
                        <span> </span>
                        <span>"http://www.ttlsa.com"</span>
                        <span> </span>
                        <span>|</span></div><div><span>|</span>
                            <span> </span>
                            <span>889</span>
                            <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>ttlsa_admin</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>6a6e41c9b741f740cfa5f266b249d452</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>2013</span>
                        <span>-</span>
                        <span>08</span>
                        <span>-</span>
                        <span>10</span>
                        <span> </span>
                        <span>14</span>
                        <span>:</span>
                        <span>08</span>
                        <span>:</span>
                        <span>44</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>xuhh</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                        <span>|</span></div><div><span>|</span>
                            <span> </span>
                            <span>890</span>
                            <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>xuhh</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span> </span>
                        <span>900150983cd24fb0d6963f7d28e17f72</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>2013</span>
                        <span>-</span>
                        <span>08</span>
                        <span>-</span>
                        <span>14</span>
                        <span> </span>
                        <span>16</span>
                        <span>:</span>
                        <span>40</span>
                        <span>:</span>
                        <span>49</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>test </span>
                        <span>trigger</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                        <span>|</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>3</span>
                            <span> </span>
                            <span>rows </span>
                            <span>in</span>
                        <span> </span>
                        <span>set</span>
                        <span> </span>
                        <span>(</span>
                        <span>0.00</span>
                        <span> </span>
                        <span>sec</span>
                        <span>)</span></div><div>&nbsp;</div><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                        <span class="crayon-e ">select *</span>
                        <span> </span>
                        <span>from </span>
                        <span>ttlsa_users3</span>
                        <span>//</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>|</span>
                            <span> </span>
                            <span>userinfo</span>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span> </span>
                        <span>uid</span>
                        <span>&nbsp;&nbsp;</span>
                        <span>|</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>|</span>
                            <span> </span>
                            <span>{</span>
                            <span>"uid"</span>
                        <span>:</span>
                        <span>890</span>
                        <span>,</span>
                        <span>"username"</span>
                        <span>:</span>
                        <span>"xuhh"</span>
                        <span>,</span>
                        <span>"password"</span>
                        <span>:</span>
                        <span>"900150983cd24fb0d6963f7d28e17f72"</span>
                        <span>}</span>
                        <span> </span>
                        <span>|</span>
                        <span>&nbsp;&nbsp;</span>
                        <span>890</span>
                        <span> </span>
                        <span>|</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>2</span>
                            <span> </span>
                            <span>rows </span>
                            <span>in</span>
                        <span> </span>
                        <span>set</span>
                        <span> </span>
                        <span>(</span>
                        <span>0.00</span>
                        <span> </span>
                        <span>sec</span>
                        <span>)</span></div><div>&nbsp;</div><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>update </span>
                        <span>ttlsa_users </span>
                        <span>set </span>
                        <span>password</span>
                        <span>=</span>
                        <span>'test_update'</span>
                        <span> </span>
                        <span>where </span>
                        <span>uid</span>
                        <span>=</span>
                        <span>890</span>
                        <span>//</span></div><div><span>Query </span>
                            <span>OK</span>
                            <span>,</span>
                            <span> </span>
                        <span>1</span>
                        <span> </span>
                        <span>row </span>
                        <span>affected</span>
                        <span> </span>
                        <span>(</span>
                        <span>0.00</span>
                        <span> </span>
                        <span>sec</span>
                        <span>)</span></div><div><span>Rows </span>
                            <span>matched</span>
                        <span>:</span>
                        <span> </span>
                        <span>1</span>
                        <span>&nbsp;&nbsp;</span>
                        <span>Changed</span>
                        <span>:</span>
                        <span> </span>
                        <span>1</span>
                        <span>&nbsp;&nbsp;</span>
                        <span>Warnings</span>
                        <span>:</span>
                        <span> </span>
                        <span>0</span></div><div>&nbsp;</div><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                        <span class="crayon-e ">select *</span>
                        <span> </span>
                        <span>from </span>
                        <span>ttlsa_users</span>
                        <span>//</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>|</span>
                            <span> </span>
                            <span>uid</span>
                            <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>username</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span> </span>
                        <span>password</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                        <span>|</span>
                        <span> </span>
                        <span>createtime</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span> </span>
                        <span>json_data</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>|</span>
                            <span> </span>
                            <span>888</span>
                            <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>ttlsa_admin</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>6a6e41c9b741f740cfa5f266b249d452</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>2013</span>
                        <span>-</span>
                        <span>08</span>
                        <span>-</span>
                        <span>10</span>
                        <span> </span>
                        <span>11</span>
                        <span>:</span>
                        <span>27</span>
                        <span>:</span>
                        <span>01</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>\</span>
                        <span>website</span>
                        <span>\</span>
                        <span> </span>
                        <span>-</span>
                        <span> </span>
                        <span>"http://www.ttlsa.com"</span>
                        <span> </span>
                        <span>|</span></div><div><span>|</span>
                            <span> </span>
                            <span>889</span>
                            <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>ttlsa_admin</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>6a6e41c9b741f740cfa5f266b249d452</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>2013</span>
                        <span>-</span>
                        <span>08</span>
                        <span>-</span>
                        <span>10</span>
                        <span> </span>
                        <span>14</span>
                        <span>:</span>
                        <span>08</span>
                        <span>:</span>
                        <span>44</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>xuhh</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                        <span>|</span></div><div><span>|</span>
                            <span> </span>
                            <span>890</span>
                            <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>xuhh</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span> </span>
                        <span>test_update</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span> </span>
                        <span>2013</span>
                        <span>-</span>
                        <span>08</span>
                        <span>-</span>
                        <span>14</span>
                        <span> </span>
                        <span>16</span>
                        <span>:</span>
                        <span>41</span>
                        <span>:</span>
                        <span>33</span>
                        <span> </span>
                        <span>|</span>
                        <span> </span>
                        <span>test </span>
                        <span>trigger</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                        <span>|</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>3</span>
                            <span> </span>
                            <span>rows </span>
                            <span>in</span>
                        <span> </span>
                        <span>set</span>
                        <span> </span>
                        <span>(</span>
                        <span>0.00</span>
                        <span> </span>
                        <span>sec</span>
                        <span>)</span></div><div>&nbsp;</div><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                        <span class="crayon-e ">select *</span>
                        <span> </span>
                        <span>from </span>
                        <span>ttlsa_users3</span>
                        <span>//</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>|</span>
                            <span> </span>
                            <span>userinfo</span>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span> </span>
                        <span>uid</span>
                        <span>&nbsp;&nbsp;</span>
                        <span>|</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>|</span>
                            <span> </span>
                            <span>{</span>
                            <span>"uid"</span>
                        <span>:</span>
                        <span>890</span>
                        <span>,</span>
                        <span>"username"</span>
                        <span>:</span>
                        <span>"xuhh"</span>
                        <span>,</span>
                        <span>"password"</span>
                        <span>:</span>
                        <span>"test_update"</span>
                        <span>}</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span>|</span>
                        <span>&nbsp;&nbsp;</span>
                        <span>890</span>
                        <span> </span>
                        <span>|</span></div><div><span>+</span>
                            <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>-</span>
                        <span>+</span>
                        <span>--</span>
                        <span>--</span>
                        <span>--</span>
                        <span>+</span></div><div><span>2</span>
                            <span> </span>
                            <span>rows </span>
                            <span>in</span>
                        <span> </span>
                        <span>set</span>
                        <span> </span>
                        <span>(</span>
                        <span>0.00</span>
                        <span> </span>
                        <span>sec</span>
                        <span>)</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
<!-- [Format Time: 0.0030 seconds] -->
<p><span style="color: #ff0000;"><strong>3. 管理</strong></span><br>
3.1 列出触发器</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div>
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">mysql&gt; SHOW TRIGGERS  like '%ttlsa%';  触发器名称匹配%ttlsa%
*************************** 1. row ***************************
             Trigger: ttlsa_users_ai
               Event: INSERT
               Table: ttlsa_users
           Statement: insert into ttlsa_users3 (uid,userinfo) values(NEW.uid,json_object(NEW.uid, NEW.username, NEW.password))
              Timing: AFTER
             Created: NULL
            sql_mode: NO_ENGINE_SUBSTITUTION
             Definer: root@127.0.0.1
character_set_client: utf8
collation_connection: utf8_general_ci
  Database Collation: latin1_swedish_ci
*************************** 2. row ***************************
             Trigger: ttlsa_users_au
               Event: UPDATE
               Table: ttlsa_users
           Statement: update ttlsa_users3 set userinfo=json_object(NEW.uid, NEW.username, NEW.password) where uid=OLD.uid
              Timing: AFTER
             Created: NULL
            sql_mode: NO_ENGINE_SUBSTITUTION
             Definer: root@127.0.0.1
character_set_client: utf8
collation_connection: utf8_general_ci
  Database Collation: latin1_swedish_ci
2 rows in set (0.00 sec)
mysql&gt; SHOW TRIGGERS; 列出所有
mysql&gt; SHOW TRIGGERS  from database_name;  列出数据库的触发器
mysql&gt; SHOW CREATE TRIGGER trigger_name;    查看创建触发器
*************************** 1. row ***************************
               Trigger: ttlsa_users_ai
              sql_mode: NO_ENGINE_SUBSTITUTION
SQL Original Statement: CREATE DEFINER=`root`@`127.0.0.1` trigger ttlsa_users_ai after insert on ttlsa_users for each row insert into ttlsa_users3 (uid,userinfo) values(NEW.uid,json_object(NEW.uid, NEW.username, NEW.password))
  character_set_client: utf8
  collation_connection: utf8_general_ci
    Database Collation: latin1_swedish_ci
1 row in set (0.01 sec)</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div><div>18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div><div>24</div><div>25</div><div>26</div><div>27</div><div>28</div><div>29</div><div>30</div><div>31</div><div>32</div><div>33</div><div>34</div><div>35</div><div>36</div><div>37</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div ><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>SHOW </span>
                        <span>TRIGGERS&nbsp;&nbsp;</span>
                        <span>like</span>
                        <span> </span>
                        <span>'%ttlsa%'</span>
                        <span>;</span>
                        <span>&nbsp;&nbsp;</span>触发器名称匹配<span>%</span>
                        <span>ttlsa</span>
                        <span>%</span></div><div ><span>*</span>
                            <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span> </span>
                        <span>1.</span>
                        <span> </span>
                        <span class="crayon-e ">row *</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Trigger</span>
                        <span>:</span>
                        <span> </span>
                        <span>ttlsa_users_ai</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Event</span>
                        <span>:</span>
                        <span> </span>
                        <span>INSERT</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Table</span>
                        <span>:</span>
                        <span> </span>
                        <span>ttlsa_users</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Statement</span>
                        <span>:</span>
                        <span> </span>
                        <span>insert </span>
                        <span>into </span>
                        <span>ttlsa_users3</span>
                        <span> </span>
                        <span>(</span>
                        <span>uid</span>
                        <span>,</span>
                        <span>userinfo</span>
                        <span>)</span>
                        <span> </span>
                        <span>values</span>
                        <span>(</span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>uid</span>
                        <span>,</span>
                        <span>json_object</span>
                        <span>(</span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>uid</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>username</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>password</span>
                        <span>)</span>
                        <span>)</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>Timing</span>
                        <span>:</span>
                        <span> </span>
                        <span>AFTER</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Created</span>
                        <span>:</span>
                        <span> </span>
                        <span>NULL</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>sql_mode</span>
                        <span>:</span>
                        <span> </span>
                        <span>NO_ENGINE_SUBSTITUTION</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Definer</span>
                        <span>:</span>
                        <span> </span>
                        <span>root</span>
                        <span>@</span>
                        <span>127.0.0.1</span></div><div ><span>character_set_client</span>
                            <span>:</span>
                            <span> </span>
                            <span>utf8</span></div><div ><span>collation_connection</span>
                            <span>:</span>
                            <span> </span>
                            <span>utf8_general_ci</span></div><div ><span>&nbsp;&nbsp;</span>
                            <span>Database </span>
                            <span>Collation</span>
                        <span>:</span>
                        <span> </span>
                        <span class="crayon-e ">latin1_swedish_ci</span></div><div ><span class="crayon-e ">*</span>
                            <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span> </span>
                        <span>2.</span>
                        <span> </span>
                        <span class="crayon-e ">row *</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Trigger</span>
                        <span>:</span>
                        <span> </span>
                        <span>ttlsa_users_au</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Event</span>
                        <span>:</span>
                        <span> </span>
                        <span>UPDATE</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Table</span>
                        <span>:</span>
                        <span> </span>
                        <span>ttlsa_users</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Statement</span>
                        <span>:</span>
                        <span> </span>
                        <span>update </span>
                        <span>ttlsa_users3 </span>
                        <span>set </span>
                        <span>userinfo</span>
                        <span>=</span>
                        <span>json_object</span>
                        <span>(</span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>uid</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>username</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>password</span>
                        <span>)</span>
                        <span> </span>
                        <span>where </span>
                        <span>uid</span>
                        <span>=</span>
                        <span>OLD</span>
                        <span>.</span>
                        <span>uid</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>Timing</span>
                        <span>:</span>
                        <span> </span>
                        <span>AFTER</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Created</span>
                        <span>:</span>
                        <span> </span>
                        <span>NULL</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>sql_mode</span>
                        <span>:</span>
                        <span> </span>
                        <span>NO_ENGINE_SUBSTITUTION</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Definer</span>
                        <span>:</span>
                        <span> </span>
                        <span>root</span>
                        <span>@</span>
                        <span>127.0.0.1</span></div><div ><span>character_set_client</span>
                            <span>:</span>
                            <span> </span>
                            <span>utf8</span></div><div ><span>collation_connection</span>
                            <span>:</span>
                            <span> </span>
                            <span>utf8_general_ci</span></div><div ><span>&nbsp;&nbsp;</span>
                            <span>Database </span>
                            <span>Collation</span>
                        <span>:</span>
                        <span> </span>
                        <span>latin1_swedish</span>
                        <span>_</span>ci</div><div ><span>2</span>
                            <span> </span>
                            <span>rows </span>
                            <span>in</span>
                        <span> </span>
                        <span>set</span>
                        <span> </span>
                        <span>(</span>
                        <span>0.00</span>
                        <span> </span>
                        <span>sec</span>
                        <span>)</span></div><div ><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>SHOW </span>
                        <span>TRIGGERS</span>
                        <span>;</span>
                        <span> </span>列出所有</div><div ><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>SHOW </span>
                        <span>TRIGGERS&nbsp;&nbsp;</span>
                        <span>from </span>
                        <span>database_name</span>
                        <span>;</span>
                        <span>&nbsp;&nbsp;</span>列出数据库的触发器</div><div ><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>SHOW </span>
                        <span>CREATE </span>
                        <span>TRIGGER </span>
                        <span>trigger_name</span>
                        <span>;</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>查看创建触发器</div><div ><span>*</span>
                            <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span> </span>
                        <span>1.</span>
                        <span> </span>
                        <span class="crayon-e ">row *</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>Trigger</span>
                        <span>:</span>
                        <span> </span>
                        <span>ttlsa_users_ai</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>sql_mode</span>
                        <span>:</span>
                        <span> </span>
                        <span>NO_ENGINE_SUBSTITUTION</span></div><div ><span>SQL </span>
                            <span>Original </span>
                            <span>Statement</span>
                        <span>:</span>
                        <span> </span>
                        <span>CREATE </span>
                        <span>DEFINER</span>
                        <span>=</span>
                        <span>`</span>
                        <span>root</span>
                        <span>`</span>
                        <span>@</span>
                        <span>`</span>
                        <span>127.0.0.1</span>
                        <span>`</span>
                        <span> </span>
                        <span>trigger </span>
                        <span>ttlsa_users_ai </span>
                        <span>after </span>
                        <span>insert </span>
                        <span>on </span>
                        <span>ttlsa_users </span>
                        <span>for</span>
                        <span> </span>
                        <span>each</span>
                        <span> </span>
                        <span>row </span>
                        <span>insert </span>
                        <span>into </span>
                        <span>ttlsa_users3</span>
                        <span> </span>
                        <span>(</span>
                        <span>uid</span>
                        <span>,</span>
                        <span>userinfo</span>
                        <span>)</span>
                        <span> </span>
                        <span>values</span>
                        <span>(</span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>uid</span>
                        <span>,</span>
                        <span>json_object</span>
                        <span>(</span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>uid</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>username</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>password</span>
                        <span>)</span>
                        <span>)</span></div><div ><span>&nbsp;&nbsp;</span>
                            <span>character_set_client</span>
                        <span>:</span>
                        <span> </span>
                        <span>utf8</span></div><div ><span>&nbsp;&nbsp;</span>
                            <span>collation_connection</span>
                        <span>:</span>
                        <span> </span>
                        <span>utf8_general_ci</span></div><div ><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>Database </span>
                            <span>Collation</span>
                        <span>:</span>
                        <span> </span>
                        <span>latin1_swedish</span>
                        <span>_</span>ci</div><div ><span>1</span>
                            <span> </span>
                            <span>row </span>
                            <span>in</span>
                        <span> </span>
                        <span>set</span>
                        <span> </span>
                        <span>(</span>
                        <span>0.01</span>
                        <span> </span>
                        <span>sec</span>
                        <span>)</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
<!-- [Format Time: 0.0014 seconds] -->
<p>3.2 INFORMATION_SCHEMA.TRIGGERS表</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div>
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">mysql&gt; SELECT * FROM INFORMATION_SCHEMA.TRIGGERS  WHERE TRIGGER_SCHEMA='test' AND TRIGGER_NAME='ttlsa_users_au'\G
*************************** 1. row ***************************
           TRIGGER_CATALOG: def
            TRIGGER_SCHEMA: test
              TRIGGER_NAME: ttlsa_users_au
        EVENT_MANIPULATION: UPDATE
      EVENT_OBJECT_CATALOG: def
       EVENT_OBJECT_SCHEMA: test
        EVENT_OBJECT_TABLE: ttlsa_users
              ACTION_ORDER: 0
          ACTION_CONDITION: NULL
          ACTION_STATEMENT: update ttlsa_users3 set userinfo=json_object(NEW.uid, NEW.username, NEW.password) where uid=OLD.uid
        ACTION_ORIENTATION: ROW
             ACTION_TIMING: AFTER
ACTION_REFERENCE_OLD_TABLE: NULL
ACTION_REFERENCE_NEW_TABLE: NULL
  ACTION_REFERENCE_OLD_ROW: OLD
  ACTION_REFERENCE_NEW_ROW: NEW
                   CREATED: NULL
                  SQL_MODE: NO_ENGINE_SUBSTITUTION
                   DEFINER: root@127.0.0.1
      CHARACTER_SET_CLIENT: utf8
      COLLATION_CONNECTION: utf8_general_ci
        DATABASE_COLLATION: latin1_swedish_ci
1 row in set (0.00 sec)</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div><div>18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div><div>24</div><div>25</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                        <span class="crayon-e ">SELECT *</span>
                        <span> </span>
                        <span>FROM </span>
                        <span>INFORMATION_SCHEMA</span>
                        <span>.</span>
                        <span>TRIGGERS&nbsp;&nbsp;</span>
                        <span>WHERE </span>
                        <span>TRIGGER_SCHEMA</span>
                        <span>=</span>
                        <span>'test'</span>
                        <span> </span>
                        <span>AND</span>
                        <span> </span>
                        <span>TRIGGER_NAME</span>
                        <span>=</span>
                        <span>'ttlsa_users_au'</span>
                        <span>\</span>
                        <span class="crayon-e ">G</span></div><div>*</span>
                            <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span> </span>
                        <span>1.</span>
                        <span> </span>
                        <span class="crayon-e ">row *</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>TRIGGER_CATALOG</span>
                        <span>:</span>
                        <span> </span>
                        <span>def</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>TRIGGER_SCHEMA</span>
                        <span>:</span>
                        <span> </span>
                        <span>test</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>TRIGGER_NAME</span>
                        <span>:</span>
                        <span> </span>
                        <span>ttlsa_users_au</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>EVENT_MANIPULATION</span>
                        <span>:</span>
                        <span> </span>
                        <span>UPDATE</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>EVENT_OBJECT_CATALOG</span>
                        <span>:</span>
                        <span> </span>
                        <span>def</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>EVENT_OBJECT_SCHEMA</span>
                        <span>:</span>
                        <span> </span>
                        <span>test</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>EVENT_OBJECT_TABLE</span>
                        <span>:</span>
                        <span> </span>
                        <span>ttlsa_users</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>ACTION_ORDER</span>
                        <span>:</span>
                        <span> </span>
                        <span>0</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>ACTION_CONDITION</span>
                        <span>:</span>
                        <span> </span>
                        <span>NULL</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>ACTION_STATEMENT</span>
                        <span>:</span>
                        <span> </span>
                        <span>update </span>
                        <span>ttlsa_users3 </span>
                        <span>set </span>
                        <span>userinfo</span>
                        <span>=</span>
                        <span>json_object</span>
                        <span>(</span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>uid</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>username</span>
                        <span>,</span>
                        <span> </span>
                        <span>NEW</span>
                        <span>.</span>
                        <span>password</span>
                        <span>)</span>
                        <span> </span>
                        <span>where </span>
                        <span>uid</span>
                        <span>=</span>
                        <span>OLD</span>
                        <span>.</span>
                        <span>uid</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>ACTION_ORIENTATION</span>
                        <span>:</span>
                        <span> </span>
                        <span>ROW</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>ACTION_TIMING</span>
                        <span>:</span>
                        <span> </span>
                        <span>AFTER</span></div><div><span>ACTION_REFERENCE_OLD_TABLE</span>
                            <span>:</span>
                            <span> </span>
                            <span>NULL</span></div><div><span>ACTION_REFERENCE_NEW_TABLE</span>
                            <span>:</span>
                            <span> </span>
                            <span>NULL</span></div><div><span>&nbsp;&nbsp;</span>
                            <span>ACTION_REFERENCE_OLD_ROW</span>
                        <span>:</span>
                        <span> </span>
                        <span>OLD</span></div><div><span>&nbsp;&nbsp;</span>
                            <span>ACTION_REFERENCE_NEW_ROW</span>
                        <span>:</span>
                        <span> </span>
                        <span>NEW</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>CREATED</span>
                        <span>:</span>
                        <span> </span>
                        <span>NULL</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>SQL_MODE</span>
                        <span>:</span>
                        <span> </span>
                        <span>NO_ENGINE_SUBSTITUTION</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <span>DEFINER</span>
                        <span>:</span>
                        <span> </span>
                        <span>root</span>
                        <span>@</span>
                        <span>127.0.0.1</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>CHARACTER_SET_CLIENT</span>
                        <span>:</span>
                        <span> </span>
                        <span>utf8</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>COLLATION_CONNECTION</span>
                        <span>:</span>
                        <span> </span>
                        <span>utf8_general_ci</span></div><div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span>DATABASE_COLLATION</span>
                        <span>:</span>
                        <span> </span>
                        <span>latin1_swedish</span>
                        <span>_</span>ci</div><div><span>1</span>
                            <span> </span>
                            <span>row </span>
                            <span>in</span>
                        <span> </span>
                        <span>set</span>
                        <span> </span>
                        <span>(</span>
                        <span>0.00</span>
                        <span> </span>
                        <span>sec</span>
                        <span>)</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
<!-- [Format Time: 0.0007 seconds] -->
<p>3.3 删除触发器</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

        <div>
        
            <div><textarea style="-moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4; font-size: 12px !important; line-height: 15px !important;" wrap="soft">mysql&gt; drop trigger trigger_name;</textarea></div>
            <div style="">
                <table>
                    <tbody><tr>
                <td >
                    <div style="font-size: 12px !important; line-height: 15px !important;"><div>1</div></div>
                </td>
                        <td><div style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div><span>mysql</span>
                            <span>&gt;</span>
                            <span> </span>
                            <span>drop </span>
                        <span>trigger </span>
                        <span>trigger_name</span>
                        <span>;</span></div></div></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
       </div>


    </div>

    </div>
    <hr>
    <div>
                            
                                                            <h1 style="margin-left: 28px; text-align: center;">
<strong>
MySQL&nbsp;
<span >
</span>
</strong>
<strong>
TRIGGER
</strong>
<strong>
<span>
（触发器）
</span>
</strong>
</h1>
<p style="text-indent:28px">
<span>
数据库触发器是数据库中所维护的命名数据库对象，将在修改表中数据时被激活。使用触发器可以提高表中数据的功能和安全性级别。可以使用触发器控制对特定数据的访问权限、执行特定日志记录或对数据本身进行审计。
</span>
</p>
<p style="text-indent:28px">
<span>
触发器是在修改表数据时激活的命名数据库对象。它们可以：
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
在插入或更新数据之前对数据进行检查并验证删除和更新
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
充当数据过滤器，在插入或更新之前修改超出范围的数据
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
修改
</span>
INSERT
<span>
、
</span>
UPDATE 
<span>
和
</span>
DELETE 
<span>
的行为方式
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
对于不支持外键的存储引擎，模仿外键的行为
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
提供日志记录功能
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
自动创建汇总表
</span>
</p>
<p style="margin-left:25px">
<strong>
1.1.
<span >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</span>
</strong>
<strong>
<span>
创建触发器
</span>
</strong>
</p>
<p style="text-indent:28px">
CREATE TRIGGER 
<span>
语句：
</span>
</p>
<p>
CREATE TRIGGER trigger_name
</p>
<p style="text-indent:28px">
{ BEFORE | AFTER }
</p>
<p style="text-indent:28px">
{ INSERT | UPDATE | DELETE }
</p>
<p style="text-indent:28px">
ON table_name FOR EACH ROW
</p>
<p style="text-indent:28px">
triggered_statement
</p>
<p>
<span>
示例：
</span>
</p>
<p>
CREATE TRIGGER City_AD AFTER DELETE
</p>
<p style="text-indent:28px">
ON City FOR EACH ROW
</p>
<p style="text-indent:28px">
INSERT INTO DeletedCity (ID, Name) VALUES (OLD.ID, OLD.Name);
</p>
<p style="text-indent:28px">
trigger_name 
<span>
是为触发器指定的名称，而
</span>
table_name 
<span>
是要与触发器关联的表的名称。
</span>
BEFORE 
<span>
和
</span>
AFTER 
<span>
指示激活触发器的时间（是在触发事件之前或是之后），而
</span>
INSERT
<span>
、
</span>
UPDATE 
<span>
或
</span>
DELETE 
<span>
指示具体的事件。
</span>
</p>
<p style="text-indent:28px">
<span>
注：表名
</span>
OLD 
<span>
和
</span>
NEW 
<span>
是指触发器可查看的虚拟表。这些表分别包含
</span>
UPDATE 
<span>
或
</span>
DELETE
<span>
语句所修改的数据的旧版本，或
</span>
INSERT 
<span>
或
</span>
UPDATE 
<span>
语句所添加的数据的新版本。
</span>
</p>
<p style="text-indent:28px">
&nbsp;
</p>
<p style="margin-left:25px">
<strong>
1.2.
<span >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</span>
</strong>
<strong>
<span>
触发器事件
</span>
</strong>
</p>
<p style="text-indent:28px">
BEFORE 
<span>
和
</span>
AFTER
</p>
<p style="text-indent:28px">
BEFORE 
<span>
和
</span>
AFTER 
<span>
关键字是指触发器的激活时间，相对于数据修改语句（
</span>
INSERT
<span>
、
</span>
UPDATE 
<span>
或
</span>
DELETE
<span>
）将更改写入底层数据库的时间。
</span>
</p>
<p style="text-indent:28px">
BEFORE 
<span>
关键字可使触发器在涉及的数据修改之前执行。可使用
</span>
BEFORE 
<span>
触发器捕获无效数据条目并在写入表之前对其进行更正或拒绝。
</span>
</p>
<p style="text-indent:28px">
<span>
–
</span>
 BEFORE INSERT
<span>
：在添加新数据之前触发
</span>
</p>
<p style="text-indent:28px">
<span>
–
</span>
 BEFORE UPDATE
<span>
：在使用新数据更新（或覆盖）现有数据之前触发
</span>
</p>
<p style="text-indent:28px">
<span>
–
</span>
 BEFORE DELETE
<span>
：在删除数据之前触发
</span>
</p>
<p style="text-indent:28px">
AFTER 
<span>
关键字定义在数据修改成功后执行的触发器。可使用
</span>
AFTER 
<span>
触发器记录或审计数据库中的数据修改。
</span>
</p>
<p style="text-indent:28px">
<span>
–
</span>
 AFTER INSERT
<span>
：在添加新数据之后触发
</span>
</p>
<p style="text-indent:28px">
<span>
–
</span>
 AFTER UPDATE
<span>
：在使用新数据更新（或覆盖）现有数据之后触发
</span>
</p>
<p style="text-indent:28px">
<span>
–
</span>
 AFTER DELETE
<span>
：在删除数据之后触发
</span>
</p>
<p style="text-indent:28px">
&nbsp;
</p>
<p style="margin-left:25px">
<strong>
1.3.
<span >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</span>
</strong>
<strong>
<span>
触发器错误处理
</span>
</strong>
</p>
<p style="text-indent:28px">
MySQL 
<span>
按如下方式处理触发器执行期间发生的错误：
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
BEFORE 
<span>
触发器失败，则包含相应行操作的事务将回滚。
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
AFTER 
<span>
触发器执行，
</span>
AFTER
<span>
触发器事件和行操作必须成功执行。
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
对于非事务表，事务不可用。只有触发了触发器的语句会回滚。
</span>
</p>
<p style="text-indent:28px">
<span>
触发器失败后，
</span>
MySQL 
<span>
会回滚包含导致触发器触发的语句的事务。
</span>
</p>
<p style="text-indent:28px">
<span>
对于非事务表，无法完成此类回滚。因此，虽然语句失败，但在发生错误之前执行的所有更改仍然会生效。
</span>
</p>
<p style="text-indent:28px">
&nbsp;
</p>
<p style="margin-left:25px">
<strong>
1.4.
<span >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</span>
</strong>
<strong>
<span>
检查触发器
</span>
</strong>
</p>
<p style="text-indent:28px">
SHOW CREATE TRIGGER trigger_name
</p>
<p style="text-indent:28px">
<span>
此语句返回可用于重新创建指定触发器的具体字符串。您必须知道触发器的名称才能运行此语句；对于
</span>
SHOW CREATE TRIGGER 
<span>
语句，不存在
</span>
LIKE 
<span>
或
</span>
WHERE 
<span>
语法。
</span>
</p>
<p style="text-indent:28px">
SHOW TRIGGERS
</p>
<p style="text-indent:28px">
<span>
此语句为
</span>
MySQL 
<span>
扩展。它可返回触发器的特征，如数据库、名称、类型、创建者以及创建和修改日期。此语句有一个优点：可基于
</span>
LIKE 
<span>
模式或
</span>
WHERE 
<span>
子句中提供的条件来显示特定触发器。如果未指定条件，则此语句会显示所有触发器的信息。
</span>
</p>
<p style="text-indent:28px">
INFORMATION_SCHEMA.TRIGGERS
<span>
：
</span>
</p>
<p style="text-indent:28px">
<span>
此语句包含
</span>
SHOW 
<span>
命令所显示的所有数据，能够完整地呈现在所有数据库中可用的触发器。
</span>
</p>
<p style="text-indent:28px">
&nbsp;
</p>
<p style="margin-left:25px">
<strong>
1.5.
<span >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</span>
</strong>
<strong>
<span>
删除触发器
</span>
</strong>
</p>
<p style="text-indent:28px">
<span>
使用如下语法可显式删除触发器：
</span>
</p>
<p style="text-indent:28px">
DROP TRIGGER [IF EXISTS] [schema_name.]trigger_name;
</p>
<p style="text-indent:28px">
<span>
使用
</span>
DROP TRIGGER trigger_name 
<span>
时，服务器会在当前模式中查找该触发器的名称。如果要删除其他模式中的触发器，请包含模式名称。使用
</span>
IF EXISTS 
<span>
可防止因尝试删除不存在的触发器而出现的错误。通过删除针对其定义触发器的表或者包含触发器的数据库，可隐式删除触发器；
</span>
 
</p>
<p style="text-indent:28px">
&nbsp;
</p>
<p style="margin-left:25px">
<strong>
1.6.
<span >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</span>
</strong>
<strong>
<span>
对触发器的限制
</span>
</strong>
</p>
<p style="margin-left:28px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
不允许使用的语句包括：
</span>
</p>
<p style="margin-left:56px">
<span >
l
<span >
&nbsp; 
</span>
</span>
SQL 
<span>
预处理语句
</span>
</p>
<p style="margin-left:56px">
<span >
l
<span >
&nbsp; 
</span>
</span>
<span>
显示或隐式
</span>
COMMIT 
<span>
和
</span>
ROLLBACK
</p>
<p style="margin-left:56px">
<span >
l
<span >
&nbsp; 
</span>
</span>
<span>
返回结果集的语句，例如，不包含
</span>
INTO var_list 
<span>
子句的
</span>
SELECT 
<span>
语句
</span>
</p>
<p style="margin-left:56px">
<span >
l
<span >
&nbsp; 
</span>
</span>
FLUSH 
<span>
语句
</span>
</p>
<p style="margin-left:56px">
<span >
l
<span >
&nbsp; 
</span>
</span>
<span>
用于修改要应用触发器的表的语句
</span>
</p>
<p style="margin-left:56px">
<span >
l
<span >
&nbsp; 
</span>
</span>
SHOW 
<span>
语句
</span>
</p>
<p style="margin-left:28px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
以下更改不会触发触发器：
</span>
</p>
<p style="margin-left:56px">
<span >
l
<span >
&nbsp; 
</span>
</span>
<span>
级联外键所导致的更改
</span>
</p>
<p style="margin-left:56px">
<span >
l
<span >
&nbsp; 
</span>
</span>
<span>
在基于行的复制过程中导致的更改
</span>
</p>
<p style="text-indent:28px">
<span>
请通过使用
</span>
SELECT ...INTO var_list
<span>
，或者通过使用游标和
</span>
FETCH 
<span>
语句的方法在触发器中处理结果集。
</span>
</p>
<p style="text-indent:28px">
&nbsp;
</p>
<p style="margin-left:25px">
<strong>
1.7.
<span >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</span>
</strong>
<strong>
<span>
触发器权限
</span>
</strong>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
要执行
</span>
CREATE TRIGGER 
<span>
和
</span>
DROP TRIGGER 
<span>
命令，需要有
</span>
TRIGGER 
<span>
权限。
</span>
</p>
<p style="margin-left:56px">
<span >
Ø
<span >
&nbsp; 
</span>
</span>
<span>
在触发器中使用
</span>
OLD 
<span>
和
</span>
NEW
<span>
需要的权限：要使用
</span>
SET NEW.col_name = value 
<span>
为列赋值，需要对该列拥有
</span>
UPDATE 
<span>
权限；要在表达式中使用
</span>
NEW.col_name 
<span>
以引用新的列值，需要对该列拥有
</span>
SELECT 
<span>
权限。
</span>
</p>
<p>
<br>
</p>
                                                    </div>
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
                article:'triger',                  
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


</style>