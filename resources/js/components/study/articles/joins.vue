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
                        <h1 id="1-概述">joins</h1>
                        <div>                           
<pre>
    
-- Add the extra branch
INSERT INTO branch VALUES(4, "Buffalo", NULL, NULL);

SELECT employee.emp_id, employee.first_name, branch.branch_name
FROM employee
JOIN branch    -- LEFT JOIN, RIGHT JOIN
ON employee.emp_id = branch.mgr_id;

</pre>
                            <div>
                              <h3>MySQL JOIN 语法概述</h3>
                            <p>
                            SQL（MySQL） JOIN 用于根据两个或多个表中的字段之间的关系，从这些表中得到数据。
                            </p>
                            <p>
                            JOIN 通常与 ON 关键字搭配使用，基本语法如下：
                            </p>
                            <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>... FROM table1 INNER|LEFT|RIGHT JOIN table2 ON conditiona</li><li></li></ol></pre>
                            <p>
                            table1 通常称为左表，table2 称为右表。ON 关键字用于设定匹配条件，用于限定在结果集合中想要哪些行。如果需要指定其他条件，后面可以加上 <a href="http://www.5idev.com/p-php_mysql_where.shtml" target="_blank">WHERE 条件</a> 或者 <a href="http://www.5idev.com/p-php_mysql_limit.shtml" target="_blank">LIMIT</a> 以限制记录返回数目等。
                            </p>
                            <p>
                            下面以最常见的两表连接来说明 MySQL JOIN 的用法，关于多表 JOIN 请参见《<a href="http://www.5idev.com/p-php_mysql_join_multi_table.shtml">MySQL JOIN 多表</a>》。
                            </p>
                            <h3>MySQL JOIN 分类</h3>
                            <p>
                            JOIN 按照功能大致分为如下三类：
                            </p>
                            <ul>
                            <li><a href="#inner join">INNER JOIN</a>（内连接）：取得两个表中存在连接匹配关系的记录。 </li>
                            <li><a href="http://www.5idev.com/p-php_mysql_left_join.shtml">LEFT JOIN</a>（左连接）：取得左表（table1）完全记录，即是右表（table2）并无对应匹配记录。</li>
                            <li><a href="http://www.5idev.com/p-php_mysql_right_join.shtml">RIGHT JOIN</a>（右连接）：与 LEFT JOIN 相反，取得右表（table2）完全记录，即是左表（table1）并无匹配对应记录。</li>
                            </ul>
                            <h3>关于 MySQL FULL JOIN 全连接</h3>
                            <p>
                            MySQL 没有提供 SQL 标准中的 FULL JOIN（全连接）：两个表记录都取出，而不管彼此是否有对应记录。要解决此问题，可以使用 UNION 关键字来合并 LEFT JOIN 与 RIGHT JOIN，达到模拟 FULL JOIN 的目的。
                            </p>
                            <h3><a name="inner join">MySQL INNER JOIN</a></h3>
                            <p>
                            INNER JOIN 用于取得两个表中存在连接匹配关系的记录。下面是两个原始数据表：
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
                            article 表中文章的所属用户是通过 uid 这个字段与 user 表关联起来的。通过观察数据不难发现，对于 uid=3 的用户，并没有发表任何文章；而文章中 aid=4 却无法在 uid 表中找到对应记录（可能是该用户被删除而其所属的文章却被保留了下来）。
                            </p>
                            <p>
                            我们列出所用文章与用户一一对应的数据。
                            </p>
                            <p>
                            SELECT ... INNER JOIN ... ON 语句如下：
                            </p>
                            <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT article.aid,article.title,user.username FROM article INNER JOIN user ON article.uid = user.uid</li><li></li></ol></pre>
                            <p>
                            返回查询结果如下：
                            </p>
                            <table class="layui-table">
                            <tbody><tr>
                            <th width="10%">aid</th>
                            <th width="15%">title</th>
                            <th>username</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>文章1</td>
                            <td>admin</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>文章2</td>
                            <td>admin</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>文章3</td>
                            <td>小明</td>
                            </tr>
                            </tbody></table>
                            <p>
                            对于 INNER JOIN，等同与下面的 SQL 语句：
                            </p>
                            <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT article.aid,article.title,user.username FROM article,user WHERE article.uid = user.uid</li><li></li></ol></pre>
                            <h3>CROSS JOIN</h3>
                            <p>
                            CROSS JOIN 即交叉连接，在不指定 ON 条件下：
                            </p>
                            <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT article.aid,article.title,user.username FROM article CROSS JOIN user</li><li></li></ol></pre>
                            <p>
                            得到的结果是被连接的两个数据表的乘积，即<a href="http://baike.baidu.com/view/79382.htm" target="_blank">笛卡尔积</a>。
                            </p>
                            <p>
                            实际上，在 MySQL 中（仅限于 MySQL） CROSS JOIN 与 INNER JOIN 的表现是一样的，在不指定 ON 条件得到的结果都是笛卡尔积，反之取得两个表完全匹配的结果。
                            </p>
                            <p>
                            INNER JOIN 与 CROSS JOIN 可以省略 INNER 或 CROSS 关键字，因此下面的 SQL 效果是一样的：
                            </p>
                            <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>... FROM table1 INNER JOIN table2</li><li>... FROM table1 CROSS JOIN table2</li><li>... FROM table1 JOIN table2</li><li></li></ol></pre>  </div>


                            <div class="site-content"><!--  -->

                              <h1>MySQL JOIN 多表连接</h1>

                              <div >
                              <h3>MySQL JOIN 多表连接</h3>
                            <p>
                            除了常用的两个表连接之外，SQL（MySQL） JOIN 语法还支持多表连接。多表连接基本语法如下：
                            </p>
                            <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>... FROM table1 INNER|LEFT|RIGHT JOIN table2 ON condition INNER|LEFT|RIGHT JOIN table3 ON condition ...</li><li></li></ol></pre>
                            <p>
                            JOIN 多表连接实现了从多个表中获取相关数据，下面是三个原始数据表：
                            </p>
                            <table class="layui-table">
                            <caption>article 文章表:</caption>
                            <tbody><tr>
                            <th width="10%">aid</th>
                            <th width="15%">title</th>
                            <th width="50%">content</th>
                            <th width="10%">uid</th>
                            <th>tid</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>文章1</td>
                            <td>文章1正文内容...</td>
                            <td>1</td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>文章2</td>
                            <td>文章2正文内容...</td>
                            <td>1</td>
                            <td>2</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>文章3</td>
                            <td>文章3正文内容...</td>
                            <td>2</td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>5</td>
                            <td>文章5</td>
                            <td>文章5正文内容...</td>
                            <td>4</td>
                            <td>1</td>
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
                            <table class="layui-table">
                            <caption>type 文章类型表:</caption>
                            <tbody><tr>
                            <th width="10%">tid</th>
                            <th>typename</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>普通文章</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>精华文章</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>草稿</td>
                            </tr>
                            </tbody></table>
                            <h3>MySQL INNER JOIN 多表</h3>
                            <p>
                            我们使用 <a href="http://www.5idev.com/p-php_mysql_inner_join.shtml" target="_blank">INNER JOIN</a> 列出三个表中都具有关联关系的数据：
                            </p>
                            <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT article.aid,article.title,user.username,type.typename FROM article INNER JOIN user </li><li>ON article.uid=user.uid INNER JOIN type ON article.tid=type.tid</li><li></li></ol></pre>
                            <p>
                            返回查询结果如下：
                            </p>
                            <table class="layui-table">
                            <tbody><tr>
                            <th width="10%">aid</th>
                            <th width="15%">title</th>
                            <th width="15%">username</th>
                            <th>typename</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>文章1</td>
                            <td>admin</td>
                            <td>普通文章</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>文章2</td>
                            <td>admin</td>
                            <td>精华文章</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>文章3</td>
                            <td>小明</td>
                            <td>普通文章</td>
                            </tr>
                            </tbody></table>
                            <h3>MySQL LEFT JOIN 多表</h3>
                            <p>
                            使用 <a href="http://www.5idev.com/p-php_mysql_left_join.shtml" target="_blank">LEFT JOIN</a> 三个表查询：
                            </p>
                            <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT article.aid,article.title,user.username,type.typename FROM article LEFT JOIN user </li><li>ON article.uid=user.uid LEFT JOIN type ON article.tid=type.tid</li><li></li></ol></pre>
                            <p>
                            返回查询结果如下：
                            </p>
                            <table class="layui-table">
                            <tbody><tr>
                            <th width="10%">aid</th>
                            <th width="15%">title</th>
                            <th>username</th>
                            <th>typename</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>文章1</td>
                            <td>admin</td>
                            <td>普通文章</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>文章2</td>
                            <td>admin</td>
                            <td>精华文章</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>文章3</td>
                            <td>小明</td>
                            <td>普通文章</td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>文章4</td>
                            <td>NULL</td>
                            <td>普通文章</td>
                            </tr>
                            </tbody></table>
                            <h3>MySQL RIGHT JOIN 多表</h3>
                            <p>
                            使用 <a href="http://www.5idev.com/p-php_mysql_right_join.shtml" target="_blank">RIGHT JOIN</a> 三个表查询：
                            </p>
                            <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT article.aid,article.title,user.username,type.typename FROM article RIGHT JOIN user </li><li>ON article.uid=user.uid RIGHT JOIN type ON article.tid=type.tid</li><li></li></ol></pre>
                            <p>
                            返回查询结果如下：
                            </p>
                            <table class="layui-table">
                            <tbody><tr>
                            <th width="10%">aid</th>
                            <th width="15%">title</th>
                            <th width="15%">username</th>
                            <th>typename</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>文章1</td>
                            <td>admin</td>
                            <td>普通文章</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>文章2</td>
                            <td>admin</td>
                            <td>精华文章</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>文章3</td>
                            <td>小明</td>
                            <td>普通文章</td>
                            </tr>
                            <tr>
                            <td>NULL</td>
                            <td>NULL</td>
                            <td>NULL</td>
                            <td>草稿</td>
                            </tr>
                            </tbody></table>
                            <p>
                            可见，在 RIGHT JOIN 右连接中，只是列出最后一个右连接表的所有数据。
                            </p>
                            <h3>说明</h3>
                            <p>
                            对于 MySQL 多表 JOIN，还可以 INNER、LEFT 和 RIGHT 混用，其返回结果与各关键字顺序有关，感兴趣可自行测试。
                            </p>  </div>



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
                article:'joins',                  
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