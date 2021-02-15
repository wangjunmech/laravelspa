<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">    
                    <div class="card-body">

     
                    <div id="content_views" class="markdown_views">
     
                        <h1 id="1-概述">参考网站</h1>
                        <p><a href="https://www.mikedane.com/databases/sql/er-diagrams-intro/" class="items">ReferenceSite:Databases->SQL->Er Diagrams Intro</a></p>
                        <p><a href="http://www.5idev.com/php/mysql.shtml">PHP+MySQL数据库教程</a></p>
                        <p><a href="https://www.cnblogs.com/sharpest/p/10390035.html">MySQL优化十大技巧</a></p>
                        <p><a href="https://blog.csdn.net/qq_35642036/article/details/82820129">实践中如何优化MySQL</a></p>
                        <p><a href="">TEST</a></p>
                        <p><a href="">TEST</a></p>
                        <p><a href="">TEST</a></p>
<div id="content_views" class="htmledit_views">
                    <p id="main-toc"><strong>目录</strong></p> 
<p id="" style="margin-left:0px;"><a href="#t0" target="_self">① SQL语句及索引的优化</a></p> 
<p id="" style="margin-left:40px;"><a href="#t1" target="_self">SQL语句的优化：</a></p> 
<p id="" style="margin-left:80px;"><a href="#t2" target="_self">1、尽量避免使用子查询</a></p> 
<p id="" style="margin-left:80px;"><a href="#t3" target="_self">​2、避免函数索引</a></p> 
<p id="" style="margin-left:80px;"><a href="#t4" target="_self">3、用IN来替换OR</a></p> 
<p id="" style="margin-left:80px;"><a href="#t5" target="_self">4、LIKE前缀%号、双百分号、_下划线查询非索引列或*无法使用到索引，如果查询的是索引列则可以</a></p> 
<p id="" style="margin-left:80px;"><a href="#t6" target="_self">5、读取适当的记录LIMIT M,N，而不要读多余的记录</a></p> 
<p id="" style="margin-left:80px;"><a href="#t7" target="_self">6、避免数据类型不一致</a></p> 
<p id="" style="margin-left:80px;"><a href="#t8" target="_self">7、分组统计可以禁止排序sort，总和查询可以禁止排重用union all</a></p> 
<p id="" style="margin-left:80px;"><a href="#t9" target="_self">8、避免随机取记录</a></p> 
<p id="" style="margin-left:80px;"><a href="#t10" target="_self">9、禁止不必要的ORDER BY排序</a></p> 
<p id="" style="margin-left:80px;"><a href="#t11" target="_self">10、批量INSERT插入</a></p> 
<p id="" style="margin-left:80px;"><a href="#t12" target="_self">11、不要使用NOT等负向查询条件</a></p> 
<p id="" style="margin-left:80px;"><a href="#t13" target="_self">12、尽量不用select *</a></p> 
<p id="" style="margin-left:80px;"><a href="#t14" target="_self">13、区分in和exists</a></p> 
<p id="" style="margin-left:40px;"><a href="#t15" target="_self">索引的优化：</a></p> 
<p id="" style="margin-left:80px;"><a href="#t16" target="_self">1、Join语句的优化：</a></p> 
<p id="" style="margin-left:80px;"><a href="#t17" target="_self">2、避免索引失效</a></p> 
<p id="" style="margin-left:0px;"><a href="#t18" target="_self">② 数据库表结构的优化：使得数据库结构符合三大范式与BCNF</a></p> 
<p id="" style="margin-left:0px;"><a href="#t19" target="_self">③ 系统配置的优化</a></p> 
<p id="" style="margin-left:0px;"><a href="#t20" target="_self">④ 硬件的优化</a></p> 
<hr id="hr-toc">

<h1 id="%E2%91%A0%20SQL%E8%AF%AD%E5%8F%A5%E5%8F%8A%E7%B4%A2%E5%BC%95%E7%9A%84%E4%BC%98%E5%8C%96" style="margin-left:0cm;"><a name="t0"></a><a name="t0"></a><span style="color:#f33b45;"><strong>① SQL语句及索引的优化</strong></span></h1> 
<h2 id="SQL%E8%AF%AD%E5%8F%A5%E7%9A%84%E4%BC%98%E5%8C%96%EF%BC%9A" style="margin-left:0cm;"><a name="t1"></a><a name="t1"></a><span style="color:#7c79e5;"><strong>SQL语句的优化：</strong></span></h2> 
<h3 id="1%E3%80%81%E5%B0%BD%E9%87%8F%E9%81%BF%E5%85%8D%E4%BD%BF%E7%94%A8%E5%AD%90%E6%9F%A5%E8%AF%A2"><a name="t2"></a><a name="t2"></a><span style="color:#3399ea;">1、尽量避免使用子查询</span></h3> 
<h3 id="%E2%80%8B2%E3%80%81%E9%81%BF%E5%85%8D%E5%87%BD%E6%95%B0%E7%B4%A2%E5%BC%95" style="margin-left:0cm;"><a name="t3"></a><a name="t3"></a><img alt="" class="has" src="https://img-blog.csdn.net/20180923093915854?watermark/2/text/aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM1NjQyMDM2/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70" width="919" height="177"><span style="color:#3399ea;">2、避免函数索引</span></h3> 
<p style="margin-left:0cm;"><img alt="" class="has" src="https://img-blog.csdn.net/20180923093915817?watermark/2/text/aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM1NjQyMDM2/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70" width="671" height="122"></p> 
<h3 id="3%E3%80%81%E7%94%A8IN%E6%9D%A5%E6%9B%BF%E6%8D%A2OR" style="margin-left:0cm;"><a name="t4"></a><a name="t4"></a><span style="color:#3399ea;">3、用IN来替换OR</span></h3> 
<h3 id="%E2%80%8B" style="margin-left:0cm;"><a name="t5"></a><img alt="" class="has" src="https://img-blog.csdn.net/20180923093915829?watermark/2/text/aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM1NjQyMDM2/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70" width="628" height="154"></h3> 
<p>&nbsp; &nbsp; 另外，MySQL对于IN做了相应的优化，即将IN中的常量全部存储在一个数组里面，而且这个数组是排好序的。但是如果数值较多，产生的消耗也是比较大的。再例如：<code>select id from table_name where num in(1,2,3)</code>&nbsp;对于连续的数值，能用 between 就不要用 in 了；再或者使用连接来替换。</p> 
<h3 id="4%E3%80%81LIKE%E5%89%8D%E7%BC%80%25%E5%8F%B7%E3%80%81%E5%8F%8C%E7%99%BE%E5%88%86%E5%8F%B7%E3%80%81_%E4%B8%8B%E5%88%92%E7%BA%BF%E6%9F%A5%E8%AF%A2%E9%9D%9E%E7%B4%A2%E5%BC%95%E5%88%97%E6%88%96*%E6%97%A0%E6%B3%95%E4%BD%BF%E7%94%A8%E5%88%B0%E7%B4%A2%E5%BC%95%EF%BC%8C%E5%A6%82%E6%9E%9C%E6%9F%A5%E8%AF%A2%E7%9A%84%E6%98%AF%E7%B4%A2%E5%BC%95%E5%88%97%E5%88%99%E5%8F%AF%E4%BB%A5"><a name="t6"></a><a name="t6"></a><span style="color:#3399ea;">4、LIKE前缀%号、双百分号、_下划线查询非索引列或*无法使用到索引，如果查询的是索引列则可以</span></h3> 
<p style="margin-left:0cm;"><img alt="" class="has" src="https://img-blog.csdn.net/20180923093915827?watermark/2/text/aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM1NjQyMDM2/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70" width="399" height="117"></p> 
<h3 id="5%E3%80%81%E8%AF%BB%E5%8F%96%E9%80%82%E5%BD%93%E7%9A%84%E8%AE%B0%E5%BD%95LIMIT%20M%2CN%EF%BC%8C%E8%80%8C%E4%B8%8D%E8%A6%81%E8%AF%BB%E5%A4%9A%E4%BD%99%E7%9A%84%E8%AE%B0%E5%BD%95"><a name="t7"></a><a name="t7"></a><span style="color:#3399ea;">5、读取适当的记录LIMIT M,N，而不要读多余的记录</span></h3> 
<pre class="has" name="code"><code class="language-sql hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">select</span> <span class="hljs-keyword">id</span>,<span class="hljs-keyword">name</span> </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">from</span> table_name <span class="hljs-keyword">limit</span> <span class="hljs-number">866613</span>, <span class="hljs-number">20</span></div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p>使用上述sql语句做分页的时候，可能有人会发现，随着表数据量的增加，直接使用limit分页查询会越来越慢。</p> 
<p>优化的方法如下：可以取前一页的最大行数的id，然后根据这个最大的id来限制下一页的起点。比如此列中，上一页最大的id是866612。sql可以采用如下的写法：</p> 
<pre class="has" name="code"><code class="language-sql hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">select</span> <span class="hljs-keyword">id</span>,<span class="hljs-keyword">name</span> <span class="hljs-keyword">from</span> table_name </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">where</span> <span class="hljs-keyword">id</span>&gt; <span class="hljs-number">866612</span> <span class="hljs-keyword">limit</span> <span class="hljs-number">20</span></div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<h3><a name="t8"></a><a name="t8"></a>&nbsp;</h3> 
<h3 id="6%E3%80%81%E9%81%BF%E5%85%8D%E6%95%B0%E6%8D%AE%E7%B1%BB%E5%9E%8B%E4%B8%8D%E4%B8%80%E8%87%B4"><a name="t9"></a><a name="t9"></a><span style="color:#3399ea;">6、避免数据类型不一致</span></h3> 
<h3 id="7%E3%80%81%E5%88%86%E7%BB%84%E7%BB%9F%E8%AE%A1%E5%8F%AF%E4%BB%A5%E7%A6%81%E6%AD%A2%E6%8E%92%E5%BA%8Fsort%EF%BC%8C%E6%80%BB%E5%92%8C%E6%9F%A5%E8%AF%A2%E5%8F%AF%E4%BB%A5%E7%A6%81%E6%AD%A2%E6%8E%92%E9%87%8D%E7%94%A8union%20all"><a name="t10"></a><a name="t10"></a><span style="color:#3399ea;">7、分组统计可以禁止排序sort，总和查询可以禁止排重用union all</span></h3> 
<p style="margin-left:0cm;"><img alt="" class="has" src="https://img-blog.csdn.net/20180923093915836?watermark/2/text/aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM1NjQyMDM2/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70" width="925" height="147"></p> 
<p style="margin-left:0cm;">union和union all的差异主要是前者需要将结果集合并后再进行唯一性过滤操作，这就会涉及到排序，增加大量的CPU运算，加大资源消耗及延迟。<strong>当然，union all的前提条件是两个结果集没有重复数据。</strong>所以一般是我们明确知道不会出现重复数据的时候才建议使用 union all 提高速度。</p> 
<p style="margin-left:0cm;">另外，<strong>如果排序字段没有用到索引，就尽量少排序；</strong></p> 
<p style="margin-left:0cm;">&nbsp;</p> 
<h3 id="8%E3%80%81%E9%81%BF%E5%85%8D%E9%9A%8F%E6%9C%BA%E5%8F%96%E8%AE%B0%E5%BD%95"><a name="t11"></a><a name="t11"></a><span style="color:#3399ea;">8、避免随机取记录</span></h3> 
<p style="margin-left:0cm;"><img alt="" class="has" src="https://img-blog.csdn.net/20180923093916144?watermark/2/text/aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM1NjQyMDM2/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70" width="533" height="120"></p> 
<h3 id="9%E3%80%81%E7%A6%81%E6%AD%A2%E4%B8%8D%E5%BF%85%E8%A6%81%E7%9A%84ORDER%20BY%E6%8E%92%E5%BA%8F"><a name="t12"></a><a name="t12"></a><span style="color:#3399ea;">9、禁止不必要的ORDER BY排序</span></h3> 
<p style="margin-left:0cm;"><img alt="" class="has" src="https://img-blog.csdn.net/20180923093916162?watermark/2/text/aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM1NjQyMDM2/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70" width="922" height="118"></p> 
<h3 id="10%E3%80%81%E6%89%B9%E9%87%8FINSERT%E6%8F%92%E5%85%A5"><a name="t13"></a><a name="t13"></a><span style="color:#3399ea;">10、批量INSERT插入</span></h3> 
<p style="margin-left:0cm;"><img alt="" class="has" src="https://img-blog.csdn.net/20180923093916208?watermark/2/text/aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM1NjQyMDM2/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70" width="558" height="150"></p> 
<h3 id="11%E3%80%81%E4%B8%8D%E8%A6%81%E4%BD%BF%E7%94%A8NOT%E7%AD%89%E8%B4%9F%E5%90%91%E6%9F%A5%E8%AF%A2%E6%9D%A1%E4%BB%B6"><a name="t14"></a><a name="t14"></a><span style="color:#3399ea;">11、不要使用NOT等负向查询条件</span></h3> 
<p style="margin-left:0cm;">你可以想象一下，对于一棵B+树，根节点是40，如果你的条件是等于20，就去左面查，你的条件等于50，就去右面查，但是你的条件是不等于66，索引应该咋办？还不是遍历一遍才知道。</p> 
<p style="margin-left:0cm;">&nbsp;</p> 
<h3 id="12%E3%80%81%E5%B0%BD%E9%87%8F%E4%B8%8D%E7%94%A8select%20*" style="margin-left:0cm;"><a name="t15"></a><a name="t15"></a><span style="color:#3399ea;">12、尽量不用select *</span></h3> 
<p>SELECT *增加很多不必要的消耗（cpu、io、内存、网络带宽）；增加了使用覆盖索引的可能性；当表结构发生改变时，前者也需要经常更新。所以要求直接在select后面接上字段名。</p> 
<p style="margin-left:0cm;">&nbsp;</p> 
<h3 id="13%E3%80%81%E5%8C%BA%E5%88%86in%E5%92%8Cexists" style="margin-left:0cm;"><a name="t16"></a><a name="t16"></a><span style="color:#3399ea;">13、<strong>区分in和exists</strong></span></h3> 
<pre class="has" name="code"><code class="language-sql hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">select</span> * <span class="hljs-keyword">from</span> 表A </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">where</span> <span class="hljs-keyword">id</span> <span class="hljs-keyword">in</span> (<span class="hljs-keyword">select</span> <span class="hljs-keyword">id</span> <span class="hljs-keyword">from</span> 表B)</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p style="margin-left:0cm;">上面sql语句相当于</p> 
<pre class="has" name="code"><code class="language-sql hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">select</span> * <span class="hljs-keyword">from</span> 表A </div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">where</span> <span class="hljs-keyword">exists</span>(<span class="hljs-keyword">select</span> * <span class="hljs-keyword">from</span> 表B <span class="hljs-keyword">where</span> 表B.id=表A.id)</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p style="margin-left:0cm;">区分in和exists主要是造成了驱动顺序的改变（这是性能变化的关键），如果是exists，那么以外层表为驱动表，先被访问，如果是IN，那么先执行子查询。所以<strong>IN适合于外表大而内表小的情况；EXISTS适合于外表小而内表大的情况。</strong><br> &nbsp;</p> 
<p style="margin-left:0cm;">&nbsp;</p> 
<h2 id="%E7%B4%A2%E5%BC%95%E7%9A%84%E4%BC%98%E5%8C%96%EF%BC%9A" style="margin-left:0cm;"><a name="t17"></a><a name="t17"></a><span style="color:#7c79e5;"><strong>索引的优化：</strong></span></h2> 
<h3 id="1%E3%80%81Join%E8%AF%AD%E5%8F%A5%E7%9A%84%E4%BC%98%E5%8C%96%EF%BC%9A"><a name="t18"></a><a name="t18"></a><span style="color:#3399ea;"><strong>1、Join语句的优化</strong></span></h3> 
<p><strong><a href="https://mp.weixin.qq.com/s/J4nO4VoR8PzgvD9By-3I9g">Join 性能点</a></strong></p> 
<p>当我们执行两个表的Join的时候，就会有一个比较的过程，逐条比较两个表的语句是比较慢的，因此可以把两个表中数据依次读进一个<code>内存块</code>中，在Mysql中执行：show variables like 'join_buffer_size'，可以看到join在内存中的缓存池大小，其大小将会影响join语句的性能。</p> 
<p>在执行join的时候，数据库会选择一个表把他<strong>要返回以及需要进行和其他表进行比较的数据</strong>放进<code>join_buffer。</code></p> 
<p><code>如果是有索引的情况，则</code>直接读取两个表的索引树进行比较就可以了。</p> 
<p>若没有索引，则会使用 'Block nested loop' 算法，<code>Block</code>&nbsp;块，也就是说每次都会取一块数据到内存以减少I/O的开销</p> 
<p><img alt="" src="https://img-blog.csdnimg.cn/20200617101015520.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM1NjQyMDM2,size_16,color_FFFFFF,t_70" width="678" height="346"></p> 
<p>另外，Innodb会为每个数据表分配一个存储在磁盘的 表名.ibd 文件，若关联的表过多，将会导致查询的时候磁盘的磁头移动次数过多，从而影响性能</p> 
<p>所以实践中，尽可能减少Join语句中的NestedLoop的循环次数：“永远用小结果集驱动大的结果集”</p> 
<ol><li><strong>用小结果集驱动大结果集</strong>，将筛选结果小的表首先连接，再去连接结果集比较大的表，尽量减少join语句中的Nested Loop的循环总次数</li><li><strong>优先优化Nested Loop的内层循环</strong>（也就是最外层的Join连接），因为内层循环是循环中执行次数最多的，每次循环提升很小的性能都能在整个循环中提升很大的性能；</li><li>对被驱动表的join字段上建立<strong>索引</strong>；</li><li>当被驱动表的join字段上无法建立索引的时候，设置<strong>足够的Join Buffer Size</strong>。</li><li>尽量用inner join(因为其会自动选择小表去驱动大表).避免 LEFT JOIN (一般我们使用Left Join的场景是大表驱动小表)和NULL，那么如何优化Left Join呢？<br> 1、条件中尽量能够过滤一些行将驱动表变得小一点，用小表去驱动大表&nbsp;<br> 2、右表的条件列一定要加上索引（主键、唯一索引、前缀索引等），最好能够使type达到range及以上（ref,eq_ref,const,system）&nbsp;</li><li>适当地在表里面添加冗余信息来减少<code>join</code>的次数</li><li>使用更快的固态硬盘</li></ol>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;性能优化，left join 是由左边决定的，左边一定都有，所以右边是我们的关键点，建立索引要建在右边。当然如果索引是在左边的，我们可以考虑使用右连接，如下</p> 
<pre class="has" name="code"><code class="language-sql hljs"><ol class="hljs-ln"><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="1"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">select</span> * <span class="hljs-keyword">from</span> atable</div></div></li><li><div class="hljs-ln-numbers"><div class="hljs-ln-line hljs-ln-n" data-line-number="2"></div></div><div class="hljs-ln-code"><div class="hljs-ln-line"><span class="hljs-keyword">left</span> <span class="hljs-keyword">join</span> btable <span class="hljs-keyword">on</span> atable.aid=btable.bid;//最好在bid上建索引</div></div></li></ol></code><div class="hljs-button signin" data-title="登录后复制" data-report-click="{&quot;spm&quot;:&quot;1001.2101.3001.4259&quot;}" onclick="hljs.signin(event)"></div></pre> 
<p style="margin-left:0cm;">（Tips：Join左连接在右边建立索引；组合索引则尽量将数据量大的放在左边，在左边建立索引）</p> 
<h3 id="2%E3%80%81%E9%81%BF%E5%85%8D%E7%B4%A2%E5%BC%95%E5%A4%B1%E6%95%88"><a name="t19"></a><a name="t19"></a><span style="color:#3399ea;"><strong>2、避免索引失效</strong></span></h3> 
<p style="margin-left:0cm;"><strong>1.最佳左前缀法则</strong></p> 
<p style="margin-left:0cm;">&nbsp; &nbsp; &nbsp; &nbsp;如果索引了多列，要遵守最左前缀法则，指的是查询从索引的最左前列开始并且不跳过索引中的列。Mysql查询优化器会对查询的字段进行改进，判断查询的字段以哪种形式组合能使得查询更快，所有比如创建的是(a,b)索引，查询的是(b,a)，查询优化器会修改成(a,b)后使用索引查询。</p> 
<p style="margin-left:0cm;"><strong>2.不在索引列上做任何操作</strong></p> 
<p style="margin-left:0cm;"><strong>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;</strong>(计算、函数、(自动or手动)类型转换)，会导致索引失效而转向全表扫描。</p> 
<p style="margin-left:0cm;"><strong>3.存储引擎不能使用索引中范围条件右边的列。</strong></p> 
<p style="margin-left:0cm;">&nbsp; &nbsp; &nbsp; &nbsp; 如这样的sql: select * from user where username='123' and age&gt;20 and phone='1390012345',其中username, age, phone都有索引，只有username和age会生效，phone的索引没有用到。</p> 
<p style="margin-left:0cm;"><strong>4.尽量使用覆盖索引(只访问索引的查询(索引列和查询列一致))</strong></p> 
<p style="margin-left:0cm;"><strong>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;</strong>如select age from user减少select *</p> 
<p style="margin-left:0cm;"><strong>5.mysql在使用不等于(!= 或者 &lt;&gt;)的时候无法使用索引会导致全表扫描。</strong></p> 
<p style="margin-left:0cm;"><strong>6.is null, is not null 也无法使用索引，在实际中尽量不要使用null。</strong></p> 
<p style="margin-left:0cm;"><strong>7.like 以通配符开头(‘%abc..’)mysql索引失效会变成全表扫描的操作。</strong></p> 
<p style="margin-left:0cm;">&nbsp; &nbsp; &nbsp; &nbsp;所以最好用右边like 'abc%'。<span style="color:#d9d9d9;">如果两边都要用，可以用select age from user where username like '%abc%',其中age是必须是索引列，才可让索引生效</span></p> 
<p style="margin-left:0cm;">&nbsp; &nbsp; &nbsp; &nbsp; 假如index(a,b,c), where a=3 and b like 'abc%' and c=4，a能用，b能用，c不能用，类似于不能使用范围条件右边的列的索引</p> 
<p style="margin-left:0cm;">&nbsp; &nbsp; &nbsp; &nbsp;对于一棵B+树来讲，如果根是字符def，如果通配符在后面，例如abc%，则应该搜索左面，例如efg%，则应该搜索右面，如果通配符在前面%abc，则不知道应该走哪一面，还是都扫描一遍吧。</p> 
<p style="margin-left:0cm;"><strong>8.字符串不加单引号索引失效</strong></p> 
<p style="margin-left:0cm;"><strong>9.少用or，用它来连接时会索引失效</strong></p> 
<p style="margin-left:0cm;"><strong>10.尽量避免子查询，而用join</strong></p> 
<p><strong>11、在组合索引中，将有区分度的索引放在前面</strong></p> 
<p style="margin-left:0cm;">&nbsp; &nbsp; &nbsp; &nbsp;如果没有区分度，例如用性别，相当于把整个大表分成两部分，查找数据还是需要遍历半个表才能找到，使得索引失去了意义。</p> 
<p style="margin-left:0cm;"><strong>12、避免在 where 子句中对字段进行 null 值判断</strong></p> 
<p style="margin-left:0cm;">&nbsp; &nbsp; &nbsp; &nbsp;对于null的判断会导致引擎放弃使用索引而进行全表扫描。</p> 
<p style="margin-left:0cm;">&nbsp;</p> 
<h1 id="%E2%91%A1%20%E6%95%B0%E6%8D%AE%E5%BA%93%E8%A1%A8%E7%BB%93%E6%9E%84%E7%9A%84%E4%BC%98%E5%8C%96%EF%BC%9A%E4%BD%BF%E5%BE%97%E6%95%B0%E6%8D%AE%E5%BA%93%E7%BB%93%E6%9E%84%E7%AC%A6%E5%90%88%E4%B8%89%E5%A4%A7%E8%8C%83%E5%BC%8F%E4%B8%8EBCNF" style="margin-left:0cm;"><a name="t20"></a><a name="t20"></a><span style="color:#f33b45;"><strong>② 数据库表结构的优化：使得数据库结构符合<a href="https://blog.csdn.net/qq_35642036/article/details/82809974">三大范式</a>与BCNF</strong></span></h1> 
<h1 id="%E2%91%A2%20%E7%B3%BB%E7%BB%9F%E9%85%8D%E7%BD%AE%E7%9A%84%E4%BC%98%E5%8C%96" style="margin-left:0cm;"><a name="t21"></a><a name="t21"></a><span style="color:#f33b45;"><strong>③ 系统配置的优化</strong></span></h1> 
<h1 id="%E2%91%A3%20%E7%A1%AC%E4%BB%B6%E7%9A%84%E4%BC%98%E5%8C%96"><a name="t22"></a><a name="t22"></a><span style="color:#f33b45;"><strong>④ 硬件的优化</strong></span></h1> 

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
                article:'mmon',                  
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