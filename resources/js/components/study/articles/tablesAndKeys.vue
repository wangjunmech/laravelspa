<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">    
                    <div class="card-body">

     
                    <div id="content_views" class="markdown_views">
                    <!-- flowchart 箭头图标 勿删 -->
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" d="M5,0 0,2.5 5,5z" id="raphael-marker-block" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                    </svg>
<h1 id="1-概述"><a name="t0"></a><a name="t0"></a>tablesAndKeys</h1>
<div>
    <div class="postBody">                
        <p>MySQL 数据表主要支持六种类型 ，分别是：BDB、HEAP、ISAM、MERGE、MYISAM、InnoBDB。</p>
        <p>这六种又分为两类，一类是”事务安全型”(transaction-safe)，包括BDB和InnoDB；其余都属于第二类，称为”非事务安全型”(non-transaction-safe)。</p>
        <p><del>BDB&nbsp;</del>全称是”Brekeley DB”,它是Mysql最早的具有事务能力的表的类型，由Sleepycat Software （http://www.sleepycat.com）开发。它提供了事务控制能力功能，它确保一组命令全部执行成功，或者当任何一个命令出现错误时所有命令的结果都被回退，可以想像在电子银行中事务控制能力是非常重要的。支持COMMIT、ROLLBACK和其他事务特性。最新版本的Mysql已经计划移除对BDB的支持，转而全力发展InnoDB。</p>
        <p>InnoDB&nbsp;是较新的事务安全型存储引擎，用于事务处理应用程序，支持BDB的几乎所有特性，并具有众多新特性，包括ACID事务支持。</p>
        <p>特性：</p>
        <ul>
        <li>事务处理机制</li>
        <li>支持外链</li>
        <li>崩溃后能立即恢复</li>
        <li>支持外键功能，级联删除</li>
        <li>支持并发能力</li>
        <li>在硬盘上的存储方式：InnoBDB frm</li>
        </ul>
        <p>最新版本的Mysql已经计划移除对BDB的支持，转而全力发展InnoDB。InnoDB对Mysql有更好的特性支持，而且开发社区活跃。</p>
        <p>MyISAM&nbsp;默认的MySQL插件式存储引擎，它是基于ISAM类型，但它增加了许多有用的扩展，它是在Web、数据仓储和其他应用环境下最常使用的存储引擎之一。注意，通过更改STORAGE_ENGINE配置变量，能够方便地更改MySQL服务器的默认存储引擎。<br>优点：</p>
        <ul>
        <li>1.比ISAM表更小，所占资源更少</li>
        <li>2.可以在不同平台间二进制移植表的类型在创建表时指定。</li>
        </ul>
        <p>ISAM&nbsp;是MyISAM类型出现之前MySQL表使用的默认类型，现在已经被MyISAM代替。</p>
        <p>Memory&nbsp;（HEAP）&nbsp;是MySQL表中访问最快的表，将所有数据保存在RAM中，在需要快速查找引用和其他类似数据的环境下，可提供极快的访问。注意，这种类型下数据是非持久化设计的，它一般适应于临时表，如果MySQL或者服务器崩溃，表中数据全部丢失。</p>
        <p>Merge&nbsp;是一种值得关注的新式表，它是由一组MyISAM表组成，之所合并主要出于性能上考虑，因为它能够提高搜索速度，提高修复效率，节省磁盘空 间。允许MySQL DBA或开发人员将一系列等同的MyISAM表以逻辑方式组合在一起，并作为1个对象引用它们。对于诸如数据仓储等VLDB环境十分适合。有时它以&nbsp;MRG_MYISAM&nbsp;名称出现。</p>
        <p>Archive&nbsp;为大量很少引用的历史、归档、或安全审计信息的存储和检索提供了完美的解决方案。</p>
        <p>Federated&nbsp;能够将多个分离的MySQL服务器链接起来，从多个物理服务器创建一个逻辑数据库。十分适合于分布式环境或数据集市环境。</p>
        <p>NDBCluster/Cluster/NDB&nbsp;MySQL的簇式数据库引擎，尤其适合于具有高性能查找要求的应用程序，这类查找需求还要求具有最高的正常工作时间和可用性。</p>
        <p>CSV&nbsp;使用标准的CSV格式，由逗号隔开的文本文件，适应于外部数据交换</p>
        <p>Blackhole&nbsp;它会接受数据但不保存，而且对任何检索请求返回一个空集。它一般适应于数据会被自动复制并不进行本地保存的分布式数据库设计。（不确定的）似乎也可以用于临时禁止/忽略对数据库的应用程序输入。</p>
        <p>Example&nbsp;这是一个测试引擎，你可以创建一个这样的表，但既不能写入数据，也不能检索数据。它似乎是一个针对MySql开发者提供的示例引擎。</p>
        <h3><a name="t0"></a>有关操作和查看表类型的命令语法如下</h3>
        <div class="">
        <pre><span style="color: rgba(0, 128, 128, 1)">--
        --</span><span style="color: rgba(0, 128, 128, 1)"> 创建表时指定表类型的方法</span>
        <span style="color: rgba(0, 0, 255, 1)">CREATE</span> <span style="color: rgba(0, 0, 255, 1)">TABLE</span><span style="color: rgba(0, 0, 0, 1)"> `message` (
        `id` </span><span style="color: rgba(0, 0, 255, 1)">int</span>(<span style="color: rgba(128, 0, 0, 1); font-weight: bold">11</span>) <span style="color: rgba(128, 128, 128, 1)">NOT</span> <span style="color: rgba(0, 0, 255, 1)">NULL</span><span style="color: rgba(0, 0, 0, 1)"> auto_increment,
        `sender` </span><span style="color: rgba(0, 0, 255, 1)">varchar</span>(<span style="color: rgba(128, 0, 0, 1); font-weight: bold">255</span>) <span style="color: rgba(0, 0, 255, 1)">default</span> <span style="color: rgba(0, 0, 255, 1)">NULL</span><span style="color: rgba(0, 0, 0, 1)">,
        `receiver` </span><span style="color: rgba(0, 0, 255, 1)">varchar</span>(<span style="color: rgba(128, 0, 0, 1); font-weight: bold">255</span>) <span style="color: rgba(0, 0, 255, 1)">default</span> <span style="color: rgba(0, 0, 255, 1)">NULL</span><span style="color: rgba(0, 0, 0, 1)">,
        `content` </span><span style="color: rgba(0, 0, 255, 1)">text</span><span style="color: rgba(0, 0, 0, 1)">,
        `is_read` </span><span style="color: rgba(0, 0, 255, 1)">char</span>(<span style="color: rgba(128, 0, 0, 1); font-weight: bold">1</span>) <span style="color: rgba(0, 0, 255, 1)">default</span> <span style="color: rgba(255, 0, 0, 1)">'</span><span style="color: rgba(255, 0, 0, 1)">N</span><span style="color: rgba(255, 0, 0, 1)">'</span><span style="color: rgba(0, 0, 0, 1)">,
        `send_time` </span><span style="color: rgba(0, 0, 255, 1)">datetime</span> <span style="color: rgba(0, 0, 255, 1)">default</span> <span style="color: rgba(0, 0, 255, 1)">NULL</span><span style="color: rgba(0, 0, 0, 1)">,
        `del_flag` </span><span style="color: rgba(0, 0, 255, 1)">tinyint</span>(<span style="color: rgba(128, 0, 0, 1); font-weight: bold">4</span>) <span style="color: rgba(0, 0, 255, 1)">default</span> <span style="color: rgba(255, 0, 0, 1)">'</span><span style="color: rgba(255, 0, 0, 1)">0</span><span style="color: rgba(255, 0, 0, 1)">'</span><span style="color: rgba(0, 0, 0, 1)">,
        </span><span style="color: rgba(0, 0, 255, 1)">PRIMARY</span> <span style="color: rgba(0, 0, 255, 1)">KEY</span><span style="color: rgba(0, 0, 0, 1)"> (`id`)
        ) ENGINE</span><span style="color: rgba(128, 128, 128, 1)">=</span><span style="color: rgba(0, 0, 0, 1)">MYISAM;
         
        </span><span style="color: rgba(0, 128, 128, 1)">--</span><span style="color: rgba(0, 128, 128, 1)"> 也可以创建后更改：</span>
        <span style="color: rgba(0, 0, 255, 1)">ALTER</span> <span style="color: rgba(0, 0, 255, 1)">TABLE</span> `message` ENGINE <span style="color: rgba(128, 128, 128, 1)">=</span><span style="color: rgba(0, 0, 0, 1)"> INNODB;
         
        </span><span style="color: rgba(0, 128, 128, 1)">--</span><span style="color: rgba(0, 128, 128, 1)"> 查看表类型（存储引擎）  <span style="color: rgba(255, 0, 0, 1)">test是数据库名称</span></span>
        SHOW <span style="color: rgba(0, 0, 255, 1)">TABLE</span> STATUS <span style="color: rgba(0, 0, 255, 1)">FROM</span><span style="color: rgba(0, 0, 0, 1)"> `test`;
        </span><span style="color: rgba(0, 128, 128, 1)">--</span><span style="color: rgba(0, 128, 128, 1)"> -- 结果为数据库test中所有表的信息，其中第二项type即是表的类型。</span>
         
        <span style="color: rgba(0, 128, 128, 1)">--</span><span style="color: rgba(0, 128, 128, 1)"> 查看表类型（存储引擎）2　 <span style="color: rgba(255, 0, 0, 1)">message是表名称　</span></span>
        SHOW <span style="color: rgba(0, 0, 255, 1)">CREATE</span> <span style="color: rgba(0, 0, 255, 1)">TABLE</span><span style="color: rgba(0, 0, 0, 1)"> `message`;
        </span><span style="color: rgba(0, 128, 128, 1)">--</span><span style="color: rgba(0, 128, 128, 1)"> -- 结果为表message创建时的信息，其中有TYPE或ENGINE一项，指定了表的类型（存储引擎）。</span><span style="color: rgba(0, 128, 128, 1)">
        --</span><span style="color: rgba(0, 128, 128, 1)"> show tables不能得到表类型的信息。</span></pre>
        </div>

        <p>注意：老版本的MySQL使用 TYPE而不是ENGINE（例如，TYPE = MYISAM）。MySQL 5.1为向下兼容而支持这个语法，但TYPE现在被轻视，而ENGINE 是首先的用法。 一般地，ENGINE选项是不必要的；除非默认已经被改变了，MyISAM是默认存储引擎。</p>
        <h3><a name="t1"></a>数据表的可移植性</h3>
        <p>常用的数据移植方法：把数据表的内容导出到一个文本文件中，然后拷贝到硬盘上，然后导入目标数据库里面。</p>
        <p>就文件层次的操作来说，某些数据表是可以直接单独拷贝表文件来移动的，见下表</p>

        <table border="0" align="center">
        <tbody>
        <tr>
        <td>ISAM</td>
        <td>No</td>
        </tr>
        <tr>
        <td>MyIASM</td>
        <td>Yes</td>
        </tr>
        <tr>
        <td>BDB</td>
        <td>No</td>
        </tr>
        <tr>
        <td>InnoBDB</td>
        <td>Yes<br><br></td>
        </tr>
        </tbody>
        </table>
    </div>
    <div>
        <p>&nbsp;</p>
        <hr>
        <h1>MySQL建索引的几大原则</h1>

        <p>1.最左前缀匹配原则，非常重要的原则，mysql会一直向右匹配直到遇到范围查询(&gt;、&lt;、between、like)就停止匹配，比如a = 1 and b = 2 and c &gt; 3 and d = 4 如果建立(a,b,c,d)顺序的索引，d是用不到索引的，如果建立(a,b,d,c)的索引则都可以用到，a,b,d的顺序可以任意调整。</p>
        <p>2.=和in可以乱序，比如a = 1 and b = 2 and c = 3 建立(a,b,c)索引可以任意顺序，mysql的查询优化器会帮你优化成索引可以识别的形式</p>
        <p>3.尽量选择区分度高的列作为索引,区分度的公式是count(distinct col)/count(*)，表示字段不重复的比例，比例越大我们扫描的记录数越少，唯一键的区分度是1，而一些状态、性别字段可能在大数据面前区分度就是0，那可能有人会问，这个比例有什么经验值吗？使用场景不同，这个值也很难确定，一般需要join的字段我们都要求是0.1以上，即平均1条扫描10条记录</p>
        <p>4.索引列不能参与计算，保持列“干净”，比如from_unixtime(create_time) = ’2014-05-29’就不能使用到索引，原因很简单，b+树中存的都是数据表中的字段值，但进行检索时，需要把所有元素都应用函数才能比较，显然成本太大。所以语句应该写成create_time = unix_timestamp(’2014-05-29’);</p>5.尽量的扩展索引，不要新建索引。比如表中已经有a的索引，现在要加(a,b)的索引，那么只需要修改原来的索引即可
        <br>回到开始的慢查询
        <br>
        <br>根据最左匹配原则，最开始的sql语句的索引应该是status、operator_id、type、operate_time的联合索引；其中status、operator_id、type的顺序可以颠倒，所以我才会说，把这个表的所有相关查询都找到，会综合分析；
        <br>比如还有如下查询
        <br>[sql] view plain copy
        <br>select * from task where status = 0 and type = 12 limit 10;&nbsp;&nbsp;
        <br>select count(*) from task where status = 0 ;&nbsp;&nbsp;
        <br>那么索引建立成(status,type,operator_id,operate_time)就是非常正确的，因为可以覆盖到所有情况。这个就是利用了索引的最左匹配的原则
                
    </div>

    <div>
    <p>&nbsp;</p>
    <hr>
    <h1>mysql的数据类型和字段属性</h1>
    <h3>本文内容：</h3>
    <ul>
        <li>数据类型</li>
        <ul>
        <li>数值类型</li>
        <ul>
        <li>整数型</li>
        <li>浮点型</li>
        <li>定点型</li>
        </ul>
        <li>日期时间类型</li>
        <li>字符串类型</li>
        <li>补充：</li>
        <li>
        <ul>
        <li>显示宽度与zerofll</li>
        <li>记录长度</li>
        </ul>
        </li>
        </ul>
        <li>字段属性</li>
        <ul>
        <li>空\不为空值：NULL、NOT NULL</li>
        <li>主键：primary key</li>
        <li>唯一键：unique key</li>
        <li>自增长：auto_increment</li>
        <li>默认值：default</li>
        <li>字段描述：comment</li>
        <li>补充：</li>
        <li>
        <ul>
        <li>复合键</li>
        </ul>
        </li>
        </ul>
    </ul>
        <h3>数据类型</h3>
            <div class="tablebox" style="overflow: auto;"><table style="width: 794px; display: table;" cellspacing="0" cellpadding="2" border="0">
            <tbody>
            <tr>
            <td width="142" valign="top">类型</td>
            <td width="37" valign="top">简写</td>
            <td width="44" valign="top">字节大小</td>
            <td width="131" valign="top">（signed）范围</td>
            <td width="235" valign="top">（unsigned）范围</td>
            <td width="203" valign="top">备注</td>
            </tr>
            <tr>
            <td width="145" valign="top">整数型：</td>
            <td width="43" valign="top">&nbsp;</td>
            <td width="50" valign="top">&nbsp;</td>
            <td width="132" valign="top">&nbsp;</td>
            <td width="230" valign="top">&nbsp;</td>
            <td width="199" valign="top">&nbsp;</td>
            </tr>
            <tr>
            <td width="145" valign="top">TINYINT</td>
            <td width="48" valign="top">&nbsp;</td>
            <td width="55" valign="top">1</td>
            <td width="131" valign="top">0～255</td>
            <td width="228" valign="top">-128～127</td>
            <td width="195" valign="top">&nbsp;</td>
            </tr>
            <tr>
            <td width="143" valign="top">SMALLINT</td>
            <td width="53" valign="top">&nbsp;</td>
            <td width="59" valign="top">2</td>
            <td width="130" valign="top">0～65535</td>
            <td width="225" valign="top"><code>-32768～<code>32767</code></code></td>
            <td width="194" valign="top">&nbsp;</td>
            </tr>
            <tr>
            <td width="142" valign="top">MEDIUMINT</td>
            <td width="57" valign="top">&nbsp;</td>
            <td width="62" valign="top">3</td>
            <td width="129" valign="top">0～<code>16777215</code></td>
            <td width="223" valign="top"><code>-8388608～<code>8388607</code></code></td>
            <td width="192" valign="top">&nbsp;</td>
            </tr>
            <tr>
            <td width="141" valign="top">INTEGER</td>
            <td width="60" valign="top">INT</td>
            <td width="64" valign="top">4</td>
            <td width="128" valign="top">0～<code>4294967295</code></td>
            <td width="222" valign="top"><code>-2147483648～<code>2147483647</code></code></td>
            <td width="191" valign="top">&nbsp;</td>
            </tr>
            <tr>
            <td width="140" valign="top">BIGINT</td>
            <td width="62" valign="top">&nbsp;</td>
            <td width="66" valign="top">8</td>
            <td width="128" valign="top">0～<code>2<sup>64</sup>-1</code></td>
            <td width="221" valign="top"><code>-2<sup>63</sup>～</code><code>2<sup>63</sup>-1</code></td>
            <td width="190" valign="top">&nbsp;</td>
            </tr>
            </tbody>
            </table></div>
            <div>
                <ul>
                <li>小数类型：
                <ul>
                <li>浮点类型：float(size,d),double(size,d)
                <ul>
                <li>size是数值的最大位数，<span style="background-color: rgba(221, 132, 132, 1)">d是小数点右侧的位数（即使你没输够那么多位也会补全那么多位）。</span></li>
                <li>FLOAT的<span style="background-color: rgba(221, 132, 132, 1)">精度为6～7位（依据情况不同？毕竟机器是以二进制存储的），</span>DOUBLE的<span style="background-color: rgba(221, 132, 132, 1)">精度为14～15位</span></li>
                </ul>
                <ul>
                <li><span style="background-color: rgba(221, 132, 132, 1)">整数部分的个数为SIZE-D，直接存入的值的个数不能多于这个，但如果浮点数四舍五入导致整数进位而溢出超过最大位数的，系统允许成立（<span style="background-color: rgba(209, 99, 73, 1)">某些版本貌似已经不允许了，所以一般小数位也不要超过</span>）</span>。</li>
                </ul>
                <ul>
                <li><span style="background-color: rgba(221, 132, 132, 1)">很多时候没必要关注两个浮点的数值范围大小（是极大的），注重点应该是它的精度。</span></li>
                </ul>
                </li>
                <li>定点型：decimal(size,d)
                <ul>
                <li>size是数值的最大位数，<strong><span style="text-decoration: underline">最大为65</span></strong>，d是小数点右侧的最大位数，<strong><span style="text-decoration: underline">最大为30</span></strong>。</li>
                <li><span style="background-color: rgba(221, 132, 132, 1)">定点型不允许因为小数部分四舍五入导致整数部分长度超出范围。 </span></li>
                <li><span style="background-color: rgba(255, 0, 0, 1)">DECIMAL是不会损失精度的</span>。<span style="background-color: rgba(221, 132, 132, 1)">可以理解成使用“字符串”存储（MYSQL权威指南这么说）。</span></li>
                </ul>
                </li>
                <li><span style="background-color: rgba(221, 132, 132, 1)">直接不带括号的数据类型float、double、decimal代表没有小数部分</span></li>
                </ul>
                </li>
                </ul>
            </div>

            <div>
                <p>时间日期类型包括<span style="background-color: rgba(221, 132, 132, 1)">date,time,datetime,timestamp,year</span>;</p>

                    <ul>
                    <li>Datetime:时间日期，格式是YYYY-MM-DD HH:II:SS,表示的范围是从1000到9999年（有些版本已经允许0-9999？不确定）；</li>
                    <li>Date:日期，格式是YYYY-MM-DD ，表示的范围是从1000到9999年</li>
                    <li>Time:时间段，格式是HH:II:SS, 指定的时间在某个区间之间，有正负。表示的范围 -838:59:59~838:59:59，这代表某个日期的前后时间范围【如果你仅仅想要用来表示24小时内的时间，可以忽略它的时间范围】</li>
                    <li>Timestamp:格式是YYYY-MM-DD HH:II:SS，表示的范围从1970-01-01 00:00:00到2038-01-19 03:14:07 【一旦该行记录被修改，那么timestamp会修改成当前时间。】</li>
                    <li>Year:年份，表示的范围1901-2156， 原本有两种格式，year(2)和year(4)，但5.7中移除了year(2)。</li>
                    </ul>

            </div>

    </div>

    <div>
    <p>&nbsp;</p>
    <hr>
    <h1>字符串类型  ：</h1>

        <p>set  :集合字符串。将一个个特定的字符串放到集合里面。</p>
            <p>定义了集合之后，不能插入集合元素之外的字符串，（可以插入多个符合条件的字符串）</p>
            <p>集合字符串实际上也是仅仅存储数值，系统自动转换成对应的字符串。</p>
            <p>集合中每一个元素对应一个二进制位，被选中的为1，没选中的为0，左边为二进制中的低位，右边为高位，从右到左得到二进制结果</p>
            <p>      
create table my_set(
hobby set('football','basketball','pingpong','computer')
)charset utf8;
insert into my_set values('basketball,computer');
insert into my_set values(3);-- 3=0011
insert into my_set values(5);-- 5=0101
            </p>

 

        <p>enum  :枚举字符串
            有点类似set,但这里只能插入一个字符串（set类型的字段的值可以是多个set元素，但enum只能是其中一个元素）,将可能出现的数据列举出来，实际存储的数据只能是列举出来的数据。使用枚举有利于统一数据，以及节省存储空间（枚举只是存储数值，系统转换成字符串）。枚举元素实际上按定义的顺序标号，从1开始，所以可以直接插入枚举元素对应的数。
</p>        
<p>create table my_enum(
gender enum('male','female','unknown')
)charset utf8;
</p>
<p>blob  :二进制数据字符串,存储二进制数据（少用）</p>
<p>text  :文字字符串,存储文字，当字符大于255时，一般使用text;</p>
<p>varchar  :变长字符串</p>
<p>varchar(L),L代表字符长度，单位为字符，最大长度为65536。在实际存储中需要1到2个字节来存储长度（1还是2由实际大小决定，216=35536,<=255的一般一个字节），在使用时根据定义的大小来分配空间，但会根据实际需要使用的缩小空间（比如规定60大小，实际只有30，那么实际空间就是31～32）。 当L大于255时，建议使用Text，而不是varchar;</p>
<p>char  :定长字符串,char(L),L代表字符长度，单位为字符，最大长度为255，不使用L时默认为1,  不同环境中根据字符大小，实际占有的空间不同；在UTF8环境下，char(4)所用的字节数为4*3=12；</p>
<p>补充：显示宽度 与填充 ：</p>
            在列类型后面显示的数值，代表数据最终显示的最少位数（包含符号）。
            一般不够显示宽度的数据都会采用空格填充，也可以使用zerofill来使用零填充（零填充会导致数据类型自动变成无符号的）。
            tiny(3)的空格填充效果：image，zerofill效果：image

<p>
create table myInt(t1 TINYINT(3));
drop table myInt;
insert into myInt values(127),(1);
select * from myInt;
alter table myInt modify t1 tinyint(3) zerofill;
select * from myInt;
</p>
<p>不要轻易的使用最大限度来存储字符串，因为涉及记录长度问题  ：</p>
        MySQL中规定任何一条数据最长不能超过65535个字节
        如果有任何一个字段允许为空，那么系统会自动从整个记录中保存一个字节来存储NULL；
        text文本不占用记录长度，额外存储。
        UTF8中varchar的最大限度：65535-2（需要两个字节来存储长度）  /3=21844，所以最大字符数为21844
        GBK中varchar的最大限度:65535-2（需要两个字节来存储长度） /2=32766

 
    </div>
        <div>
            <p>&nbsp;</p>
            <hr>
            <h1>字段属性：</h1>
            <h3>空\不为空值：NULL、NOT NULL</h3>
            <h3>主键：primary key </h3>
            <p><span>主键用于唯一标识每一条记录（每个人都有自己唯一的身份证）
            每一张表只能有一个主键。
            因为唯一标识，所以主键字段的数据不能为空，并且主键字段的数据值不能重复
            主键也是一种索引，可以提高查找速率。
            主键的定义. 主键的删除：alter table 表名 drop primary key;</span></p>
            <h3>唯一键：unique key</h3>
            <ul>
                
            <li>唯一键的功能与主键有点类型，但不同的是主键只能有一个，唯一键可以有多个，而且唯一键的字段的数据允许为空。</li>
            <li>唯一键可以约束字段，使得字段的数据不能重复</li>
            <li>如果唯一键同时也有not null,并且表中没有主键的话，在desc查看表结构中会显示成主键</li>
            <li>如果唯一键也不允许为空，那么功能与主键相同</li>
            <li>唯一键的定义方法可以参考主键的。</li>
            <li>唯一键的删除： alter table 表名 drop index 唯一键名; -- 唯一键默认使用字段名来定义名字</li>
            </ul>

            <h3>自增长：auto_increment</h3>
            
            <ul>

                <li>自增长的功能是可以使某个字段的数据随着记录的插入而进行增长（不给这个字段插入数据的情况下）</li>
                <li>自增长的前提是这个字段必须是一个“索引”，比如主键、唯一键</li>
                <li>自增长的前提这个字段的数据类型是一个数值型的，（如果给了float,也不会增长成小数，而仅仅是整数）</li>
                <li>一个表只能有一个自增长。</li>
                <li>只有不给值，或者给null的情况下，才能正确自增长；如果某一次自增长失败了，那么下一次会从当前字段的最大值开始继续自增长。</li>
                <li>自增长的定义方法：image；当然也可以通过修改字段的形式来给字段定义not null属性</li>
                <li>自增长的修改：
                    修改增长速度：set auto_increment = 值;
                    修改下次增长的值：alter table 表名 auto_increment = 值; 【修改的值只能变大，不能变小，因为可能导致数据重复问题】
                <li>自增长的查看：show vairable like "auto_increment%";</li>
                <li>自增长的删除：利用alter来删除，alter修改字段属性的时候如果不带上原来的属性就会被删掉：
            </li>
                        </ul>
            <h3>默认值：default</h3>
            <h3>字段描述：comment</h3>
            
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
                article:'tablesAndKeys',                  
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