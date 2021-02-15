<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">    
                    <div class="card-body">

     
                    <div id="content_views" class="markdown_views">
     
                        <h1 id="1-概述">nested query 子查询</h1>

                        <pre>
                            
                        -- Find names of all employees who have sold over 50,000
                        SELECT employee.first_name, employee.last_name
                        FROM employee
                        WHERE employee.emp_id IN (SELECT works_with.emp_id
                                                  FROM works_with
                                                  WHERE works_with.total_sales > 50000);

                        -- Find all clients who are handles by the branch that Michael Scott manages
                        -- Assume you know Michael's ID
                        SELECT client.client_id, client.client_name
                        FROM client
                        WHERE client.branch_id = (SELECT branch.branch_id
                                                  FROM branch
                                                  WHERE branch.mgr_id = 102);

                         -- Find all clients who are handles by the branch that Michael Scott manages
                         -- Assume you DONT'T know Michael's ID
                         SELECT client.client_id, client.client_name
                         FROM client
                         WHERE client.branch_id = (SELECT branch.branch_id
                                                   FROM branch
                                                   WHERE branch.mgr_id = (SELECT employee.emp_id
                                                                          FROM employee
                                                                          WHERE employee.first_name = 'Michael' AND employee.last_name ='Scott'
                                                                          LIMIT 1));


                        -- Find the names of employees who work with clients handled by the scranton branch
                        SELECT employee.first_name, employee.last_name
                        FROM employee
                        WHERE employee.emp_id IN (
                                                 SELECT works_with.emp_id
                                                 FROM works_with
                                                 )
                        AND employee.branch_id = 2;

                        -- Find the names of all clients who have spent more than 100,000 dollars
                        SELECT client.client_name
                        FROM client
                        WHERE client.client_id IN (
                                                  SELECT client_id
                                                  FROM (
                                                        SELECT SUM(works_with.total_sales) AS totals, client_id
                                                        FROM works_with
                                                        GROUP BY client_id) AS total_client_sales
                                                  WHERE totals > 100000
                        );

                        </pre>

<h3 class="atitle">1. MySQL 子查询(subquery)语法与用法实例</h3>
                    <div>
                      <h3>MySQL 子查询</h3>
                    <p>
                    子查询是将一个 SELECT 语句的查询结果作为中间结果，供另一个 SQL 语句调用。MySQL 支持 SQL 标准要求的所有子查询格式和操作，也扩展了特有的几种特性。
                    </p>
                    <p>
                    子查询没有固定的语法，一个子查询的例子如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE uid IN(SELECT uid FROM user WHERE status=1)</li><li></li></ol></pre>
                    <p>
                    对应的两个数据表如下：
                    </p>
                    <table class="layui-table">
                    <caption>article 文章表:</caption>
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>文章4</td>
                    <td>文章4正文内容...</td>
                    <td>3</td>
                    </tr>
                    </tbody></table>
                    <table class="layui-table">
                    <caption>user 用户表:</caption>
                    <tbody><tr>
                    <th width="10%">uid</th>
                    <th width="15%">username</th>
                    <th width="60%">password</th>
                    <th>status</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>b7e591c246d010bb2ccd77d52490c85e</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>小明</td>
                    <td>a193686a53e4de85ee3f2ff0576adf01</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Jack</td>
                    <td>0193686a35e4de85ee3f2ff0567adf490</td>
                    <td>0</td>
                    </tr>
                    </tbody></table>
                    <p>
                    查询返回结果如下所示：
                    </p>
                    <table class="layui-table">
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    </tbody></table>
                    <p>
                    在该例子中，首先通过子查询语句查询出所有 status=1 的 uid，实际的查询类似于：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE uid IN(1,2)</li><li></li></ol></pre>
                    <h3>MySQL 子查询分类</h3>
                    <p>
                    上面演示了一个简单的子查询例子，根据子查询的返回数据形式（如上例中返回的 uid 序列），可以分为如下几类：
                    </p>
                    <ul>
                    <li><a href="http://www.5idev.com/p-mysql_scalar_subquery.shtml">标量子查询</a>：返回单一值的标量，最简单的形式。</li>
                    <li><a href="http://www.5idev.com/p-mysql_volumn_subquery.shtml">列子查询</a>：返回的结果集是 N 行一列。</li>
                    <li><a href="http://www.5idev.com/p-mysql_row_subquery.shtml">行子查询</a>：返回的结果集是一行 N 列。</li>
                    <li><a href="http://www.5idev.com/p-mysql_table_subquery.shtml">表子查询</a>：返回的结果集是 N 行 N 列。</li>
                    </ul>
                    <h3>MySQL 子查询操作符</h3>
                    <p>
                    在主查询中，可以使用比较操作符以使用操作符来对子查询返回的结果进行比较，从而确定查询的条件。如上面例子使用了 IN 操作符。
                    </p>
                    <p>
                    可以使用的操作符有：=  &gt;  &lt;  &gt;=  &lt;=  &lt;&gt; ANY IN SOME ALL <not> EXISTS ，我们将在本节余下的教程中学习这些操作符在子查询中的使用方法。
                    </not></p> </div>
<h3 class="atitle">2. MySQL 标量子查询</h3>
                    <div>
                      <h3>MySQL 标量子查询</h3>
                    <p>
                    标量子查询是指子查询返回的是单一值的标量，如一个数字或一个字符串，也是子查询中最简单的返回形式。
                    </p>
                    <p>
                    一个标量子查询的例子如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE uid = (SELECT uid FROM user WHERE status=1 ORDER BY uid DESC LIMIT 1)</li><li></li></ol></pre>
                    <p>
                    在该例子中，子查询语句：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT uid FROM user WHERE status = 1 ORDER BY uid DESC LIMIT 1</li><li></li></ol></pre>
                    <p>
                    返回的是单一的数字（如 2），实际的查询语句为：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE uid = 2</li><li></li></ol></pre>
                    <h3>使用子查询进行比较</h3>
                    <p>
                    可以使用 =  &gt;  &lt;  &gt;=  &lt;=  &lt;&gt; 这些操作符对子查询的标量结果进行比较，通常子查询的位置在比较式的右侧：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM t1 WHERE column1 = (SELECT MAX(column2) FROM t2)</li><li></li></ol></pre>
                    <strong>提示</strong>
                    <p>
                    对于采用这些操作符之一进行的比较，子查询必须返回一个标量。唯一的例外是 ＝ 可以和<a href="http://www.5idev.com/p-mysql_row_subquery.shtml" target="_blank">行子查询</a>同时使用。
                    </p>
                    <h3>子查询与表连接</h3>
                    <p>
                    在很多情况下，子查询的效果与 <a href="http://www.5idev.com/p-php_mysql_inner_join.shtml" target="_blank">JOIN 表连接</a>很类似，但一些特殊情况下，是必须用子查询而不能用表连接的，如：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM t1 WHERE column1 = (SELECT MAX(column2) FROM t2)</li><li></li></ol></pre>
                    <p>
                    以及下例：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article AS t WHERE 2 = (SELECT COUNT(*) FROM article WHERE article.uid = t.uid)</li><li></li></ol></pre>
                    <p>
                    该例子要找出用户发表了 2 篇文章的所有文章记录。对应的两个数据表如下：
                    </p>
                    <table class="layui-table">
                    <caption>article 文章表:</caption>
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>文章4</td>
                    <td>文章4正文内容...</td>
                    <td>3</td>
                    </tr>
                    </tbody></table>
                    <table class="layui-table">
                    <caption>user 用户表:</caption>
                    <tbody><tr>
                    <th width="10%">uid</th>
                    <th width="15%">username</th>
                    <th width="60%">password</th>
                    <th>status</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>b7e591c246d010bb2ccd77d52490c85e</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>小明</td>
                    <td>a193686a53e4de85ee3f2ff0576adf01</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Jack</td>
                    <td>0193686a35e4de85ee3f2ff0567adf490</td>
                    <td>0</td>
                    </tr>
                    </tbody></table>
                    <p>
                    查询返回结果如下所示：
                    </p>
                    <table class="layui-table">
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    </tbody></table> </div>

<h3 class="atitle">3. MySQL 列子查询及 IN、ANY、SOME 和 ALL 操作符的使用</h3>
                    <div>
                      <h3>MySQL 列子查询</h3>
                    <p>
                    列子查询是指子查询返回的结果集是 N 行一列，该结果通常来自对表的某个字段查询返回。
                    </p>
                    <p>
                    一个列子查询的例子如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE uid IN(SELECT uid FROM user WHERE status=1)</li><li></li></ol></pre>
                    <p>
                    该例子在前文《<a href="http://www.5idev.com/p-mysql_subquery.shtml" target="_blank">MySQL 子查询subquery语法与用法实例</a>》已有解释及数据实例，在此不再赘述。
                    </p>
                    <h3>列子查询中使用 IN、ANY、SOME 和 ALL 操作符</h3>
                    <p>
                    由于列子查询返回的结果集是 N 行一列，因此不能直接使用 =  &gt;  &lt;  &gt;=  &lt;=  &lt;&gt; 这些比较标量结果的操作符。在列子查询中可以使用 IN、ANY、SOME 和 ALL 操作符：
                    </p>
                    <ul>
                    <li>IN：在指定项内，同 IN(项1,项2,…)。</li>
                    <li>ANY：与比较操作符联合使用，表示与子查询返回的任何值比较为 TRUE ，则返回 TRUE 。</li>
                    <li>SOME：ANY 的别名，较少使用。</li>
                    <li>ALL：与比较操作符联合使用，表示与子查询返回的所有值比较都为 TRUE ，则返回 TRUE 。</li>
                    </ul>
                    <p>
                    下面是原始数据表：
                    </p>
                    <table class="layui-table" style="width: 100px;">
                    <caption>table1:</caption>
                    <tbody><tr>
                    <th>s1</th>
                    </tr>
                    <tr>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>10</td>
                    </tr>
                    </tbody></table>
                    <table class="layui-table" style="width: 100px;">
                    <caption>table2:</caption>
                    <tbody><tr>
                    <th>s2</th>
                    </tr>
                    <tr>
                    <td>5</td>
                    </tr>
                    <tr>
                    <td>12</td>
                    </tr>
                    <tr>
                    <td>20</td>
                    </tr>
                    </tbody></table>
                    <h3>ANY 操作符</h3>
                    <p>
                    ANY 关键字必须接在一个比较操作符的后面，表示与子查询返回的任何值比较为 TRUE ，则返回 TRUE 。一个 ANY 例子如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT s1 FROM table1 WHERE s1 &gt; ANY (SELECT s2 FROM table2)</li><li></li></ol></pre>
                    <p>
                    查询返回结果如下所示：
                    </p>
                    <table class="layui-table" style="width: 100px;">
                    <tbody><tr>
                    <th>s1</th>
                    </tr>
                    <tr>
                    <td>10</td>
                    </tr>
                    </tbody></table>
                    <p>
                    在子查询中，返回的是 table2 的所有 s2 列结果（5,12,20），然后将 table1 中的 s1 的值与之进行比较，只要大于 s2 的任何值即表示为 TRUE，符合查询条件。
                    </p>
                    <p>
                    IN 是 = ANY 的别名，二者相同，但 NOT IN 的别名却不是 &lt;&gt; ANY 而是 &lt;&gt; SOME。
                    </p>
                    <strong>特殊情况</strong>
                    <ul>
                    <li>如果 table2 为空表，则 ANY 后的结果为 FALSE；</li>
                    <li>如果子查询返回如 (NULL,NULL,NULL) 列为空的结果，则 ANY 后的结果为 UNKNOWN 。</li>
                    </ul>
                    <h3>ALL 操作符</h3>
                    <p>
                    ALL 关键字必须接在一个比较操作符的后面，表示与子查询返回的所有值比较为 TRUE ，则返回 TRUE 。一个 ALL 例子如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT s1 FROM table1 WHERE s1 &gt; ALL (SELECT s2 FROM table2)</li><li></li></ol></pre>
                    <p>
                    该查询不会返回任何结果，因为 s1 中没有比 s2 所有值都大的值。
                    </p>
                    <p>
                    当然在该例子查询中，返回了 s2 的所有值，您可以在该子查询中添加任何条件以限制返回的查询结果而无需全部返回。
                    </p>
                    <p>
                    NOT IN 是 &lt;&gt; ALL 的别名，二者相同。
                    </p>
                    <strong>特殊情况</strong>
                    <ul>
                    <li>如果 table2 为空表，则 ALL 后的结果为 TRUE；</li>
                    <li>如果子查询返回如 (0,NULL,1) 这种尽管 s1 比返回结果都大，但有空行的结果，则 ALL 后的结果为 UNKNOWN 。</li>
                    </ul>
                    <p>
                    注意：对于 table2 空表的情况，下面的语句均返回 NULL：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT s1 FROM table1 WHERE s1 &gt; (SELECT s2 FROM table2)</li><li>SELECT s1 FROM table1 WHERE s1 &gt; ALL (SELECT MAX(s1) FROM table2)</li><li></li></ol></pre> </div>
<h3 class="atitle">4. MySQL 行子查询</h3>
                    <div>
                      <h3>MySQL 行子查询</h3>
                    <p>
                    行子查询是指子查询返回的结果集是一行 N 列，该子查询的结果通常是对表的某行数据进行查询而返回的结果集。
                    </p>
                    <p>
                    一个行子查询的例子如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM table1 WHERE (1,2) = (SELECT column1, column2 FROM table2)</li><li></li></ol></pre>
                    <p>
                    在该例子中，在保证子查询返回单一行数据的前提下，如果 column1=1 且 column2=2 ，则该查询结果为 TRUE。
                    </p>
                    <h3>MySQL 行构造符</h3>
                    <p>
                    在上面的例子中，WHERE 后面的 (1,2) 被称为行构造符，也可以写作 ROW(1，2)。行构造符通常用于与对能返回两个或两个以上列的子查询进行比较。
                    </p>
                    <h3>MySQL 行子查询实例</h3>
                    <p>
                    下面是用于例子的两张原始数据表：
                    </p>
                    <table class="layui-table">
                    <caption>article 表:</caption>
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>文章4</td>
                    <td>文章4正文内容...</td>
                    <td>3</td>
                    </tr>
                    </tbody></table>
                    <table class="layui-table">
                    <caption>blog 表:</caption>
                    <tbody><tr>
                    <th width="10%">bid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>日志1</td>
                    <td>日志1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>日志3</td>
                    <td>日志3正文内容...</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    </tr></tbody></table>
                    <p>
                    SQL 如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE (title,content,uid) = (SELECT title,content,uid FROM blog WHERE bid=2)</li><li></li></ol></pre>
                    <p>
                    查询返回结果如下所示：
                    </p>
                    <table class="layui-table">
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    </tbody></table>
                    <p>
                    在该行子查询例子中，将 article 表 title,content,uid 字段逐一与子查询返回的行记录作比较，如果相等则列出这些相等的记录（理论上可能不止一条）。
                    </p> </div>
<h3 class="atitle">5. MySQL 表子查询</h3>
                    <div>
                      <h3>MySQL 表子查询</h3>
                    <p>
                    表子查询是指子查询返回的结果集是 N 行 N 列的一个表数据。
                    </p>
                    <h3>MySQL 表子查询实例</h3>
                    <p>
                    下面是用于例子的两张原始数据表：
                    </p>
                    <table class="layui-table">
                    <caption>article 表:</caption>
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>文章4</td>
                    <td>文章4正文内容...</td>
                    <td>3</td>
                    </tr>
                    </tbody></table>
                    <table class="layui-table">
                    <caption>blog 表:</caption>
                    <tbody><tr>
                    <th width="10%">bid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>日志1</td>
                    <td>日志1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    </tr></tbody></table>
                    <p>
                    SQL 如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE (title,content,uid) IN (SELECT title,content,uid FROM blog)</li><li></li></ol></pre>
                    <p>
                    查询返回结果如下所示：
                    </p>
                    <table class="layui-table">
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="60%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    </tbody></table>
                    <p>
                    对比前面<a href="http://www.5idev.com/p-mysql_row_subquery.shtml" target="_blank">行子查询的例子</a>，将行子查询中的 WHERE bid=2 条件限制去掉之后，其返回的数据就是一个表记录（当然如果符合条件的记录只有一条，而成为行子查询记录，但我们认为这是一个表子查询）。
                    </p>
                    <p>
                    该 SQL 的意义在于查找 article 表中指定的字段同时也存在于 blog 表中的所有的行（注意 = 比较操作符换成了 IN），实际上等同于下面的条件语句：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article,blog </li><li>WHERE (article.title=blog.title AND article.content=blog.content AND article.uid=blog.uid)</li><li></li></ol></pre>
                    <p>
                    实际上，后面的语句是经过 MySQL 优化的而效率更高，或者也可以使用 <a href="http://www.5idev.com/p-php_mysql_inner_join.shtml" target="_blank">MySQL JOIN</a> 表连接来实现。在此使用该例子只是为了便于描述表子查询的用法。
                    </p>
                    <h3>衍生数据表子查询</h3>
                    <p>
                    表子查询应用得更多情况是衍生数据表子查询，即首先执行子查询生成临时表，外层主查询再到此临时表中获取数据。具体参见《MySQL FROM 子查询》。
                    </p> </div>
<h3 class="atitle">6. MySQL FROM 子查询</h3>
                    <div>
                      <h3>FROM 子句中的子查询</h3>
                    <p>
                    MySQL FROM 子查询是指 FROM 的子句作为子查询语句，主查询再到子查询结果中获取需要的数据。FROM 子查询语法如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT ... FROM (subquery) AS name ...</li><li></li></ol></pre>
                    <p>
                    子查询会生成一个临时表，由于 FROM 子句中的每个表必须有一个名称，因此 AS name 是必须的。FROM 子查询也称为衍生数据表子查询。
                    </p>
                    <h3>FROM 子查询实例</h3>
                    <table class="layui-table" style="width: 150px;">
                    <caption>table1:</caption>
                    <tbody><tr>
                    <th width="50%">s1</th>
                    <th>s2</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>5</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>12</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>20</td>
                    </tr>
                    </tbody></table>
                    <p>
                    FROM 子查询 SQL 如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT s1,s2 FROM (SELECT s1, s2*2 AS s2 FROM table1) AS temp WHERE s1 &gt; 1</li><li></li></ol></pre>
                    <p>
                    查询返回结果如下所示：
                    </p>
                    <table class="layui-table" style="width: 150px;">
                    <tbody><tr>
                    <th width="50%">s1</th>
                    <th>s2</th>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>24</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>40</td>
                    </tr>
                    </tbody></table>
                    <h3>提示</h3>
                    <p>
                    MySQL FROM 子句中的子查询可以返回<a href="http://www.5idev.com/p-mysql_scalar_subquery.shtml" target="_blank">标量</a>、<a href="http://www.5idev.com/p-mysql_volumn_subquery.shtml" target="_blank">列</a>、<a href="http://www.5idev.com/p-mysql_row_subquery.shtml" target="_blank">行</a>或<a href="http://www.5idev.com/p-mysql_table_subquery.shtml" target="_blank">表</a>，但不能为有关联的子查询。
                    </p> </div>
<h3 class="atitle">7. MySQL 子查询 EXISTS 和 NOT EXISTS</h3>
                    <div>
                      <h3>MySQL EXISTS 和 NOT EXISTS 子查询</h3>
                    <p>
                    MySQL EXISTS 和 NOT EXISTS 子查询语法如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT ... FROM table WHERE <not> EXISTS (subquery)</not></li><li></li></ol></pre>
                    <p>
                    该语法可以理解为：将主查询的数据，放到子查询中做条件验证，根据验证结果（TRUE 或 FALSE）来决定主查询的数据结果是否得以保留。
                    </p>
                    <h3>MySQL EXISTS 子查询实例</h3>
                    <p>
                    下面以实际的例子来理解 EXISTS 子查询。下面是原始的数据表：
                    </p>
                    <table class="layui-table">
                    <caption>article 文章表:</caption>
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="50%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>文章4</td>
                    <td>文章4正文内容...</td>
                    <td>4</td>
                    </tr>
                    </tbody></table>
                    <table class="layui-table">
                    <caption>user 用户表:</caption>
                    <tbody><tr>
                    <th width="10%">uid</th>
                    <th width="15%">username</th>
                    <th>email</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>admin@5idev.com</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>小明</td>
                    <td>xiao@163.com</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Jack</td>
                    <td>jack@gmail.com</td>
                    </tr>
                    </tbody></table>
                    <p>
                    我们要查出 article 表中的数据，但要求 uid 必须在 user 表中存在。SQL 语句如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE EXISTS (SELECT * FROM user WHERE article.uid = user.uid)</li><li></li></ol></pre>
                    <p>
                    返回查询结果如下：
                    </p>
                    <table class="layui-table">
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="50%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    </tbody></table>
                    <p>
                    从语句执行结果可以看出，article 表中第 4 条记录没有被保留，原因就是该条记录的数据在子查询中返回的结果是 FALSE 。
                    </p>
                    <p>
                    当上面的 SQL 使用 NOT EXISTS 时，查询的结果就是 article 表中 uid 不存在于 user 表中的数据记录。
                    </p>
                    <h3>提示</h3>
                    <ul>
                    <li><not> EXISTS (subquery) 只返回 TRUE 或 FALSE，因此子查询中的 SELECT * 也可以是 SELECT 1 或其他，官方说法是实际执行时会忽略 SELECT 清单，因此没有区别。</not></li>
                    <li>EXISTS 子查询的实际执行过程可能经过了优化而不是我们理解上的逐条对比，如果担忧效率问题，可进行实际检验以确定是否有效率问题。</li>
                    <li>EXISTS 子查询往往也可以用条件表达式、其他子查询或者 <a href="http://www.5idev.com/p-php_mysql_inner_join.shtml" target="_blank">JOIN</a> 来替代，何种最优需要具体问题具体分析。</li>
                    </ul> </div>
<h3 class="atitle">8. MySQL 关联子查询</h3>
                    <div>
                      <h3>MySQL 关联子查询</h3>
                    <p>
                    关联子查询是指一个包含对表的引用的子查询，该表也显示在外部查询中。通俗一点来讲，就是子查询引用到了主查询的数据数据。
                    </p>
                    <p>
                    以一个实际的例子来理解关联子查询：
                    </p>
                    <table class="layui-table">
                    <caption>article 文章表:</caption>
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="50%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>文章4</td>
                    <td>文章4正文内容...</td>
                    <td>4</td>
                    </tr>
                    </tbody></table>
                    <table class="layui-table">
                    <caption>user 用户表:</caption>
                    <tbody><tr>
                    <th width="10%">uid</th>
                    <th width="15%">username</th>
                    <th>email</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>admin@5idev.com</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>小明</td>
                    <td>xiao@163.com</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Jack</td>
                    <td>jack@gmail.com</td>
                    </tr>
                    </tbody></table>
                    <p>
                    我们要查出 article 表中的数据，但要求 article 中的某个或某些字段与 user 表字段有逻辑关系（本例为 uid 相等）。SQL 语句如下：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE uid IN(SELECT uid FROM user WHERE article.uid = user.uid)</li><li></li></ol></pre>
                    <p>
                    返回查询结果如下：
                    </p>
                    <table class="layui-table">
                    <tbody><tr>
                    <th width="10%">aid</th>
                    <th width="15%">title</th>
                    <th width="50%">content</th>
                    <th>uid</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>文章1</td>
                    <td>文章1正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>文章2</td>
                    <td>文章2正文内容...</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>文章3</td>
                    <td>文章3正文内容...</td>
                    <td>2</td>
                    </tr>
                    </tbody></table>
                    <p>
                    将该例 SQL 与如下语句比较更能看出关联子查询与普通子查询的区别：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE uid IN(SELECT uid FROM user)</li><li></li></ol></pre>
                    <p>
                    在本实例中，虽然两个 SQL 执行后的返回结果都一样，但它们的实现过程是完全不一样的。后者（普通子查询）实际被执行为：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT * FROM article WHERE uid IN(1,2,3)</li><li></li></ol></pre>
                    <p>
                    但在关联子查询中，是无法单独执行子查询语句的。其实际流程大致为：
                    </p>
                    <ol>
                    <li>先做外部主查询；</li>
                    <li>将主查询的值传入子查询并执行；</li>
                    <li>子查询再将查询结果返回主查询，主查询根据返回结果完成最终的查询。</li>
                    </ol>
                    <p>
                    这个执行流程类似于 <a href="http://www.5idev.com/p-mysql_exists_subquery.shtml" target="_blank">EXISTS 子查询</a>，实际上某些情况下 MySQL 就是将关联子查询重写为 EXISTS 子查询来执行的。
                    </p>
                    <h3>MySQL 关联子查询效率</h3>
                    <p>
                    很明显，一般情况下关联子查询的效率是比较低下的，实际上本例中的关联子查询例子也仅是为了演示关联子查询的原理及用法。如果可以的话，关联子查询尽量使用 JOIN 或其他查询来代替。如本例中，使用 <a href="http://www.5idev.com/p-php_mysql_inner_join.shtml" target="_blank">INNER JOIN</a> 来替换的 SQL 为：
                    </p>
                    <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT article.* FROM article INNER JOIN user ON article.uid = user.uid</li><li></li></ol></pre>
                    <p>
                    注意：此处只是为了演示用 INNER JOIN 替换关联子查询的样例，并非表名这种处理是最优处理。
                    </p> </div>
                     

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
                article:'nestedquery',                  
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
.atitle{
    background-color: #ada;
}

</style>