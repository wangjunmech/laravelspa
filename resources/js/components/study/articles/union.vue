<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">    
                    <div class="card-body">

     
                    <div id="content_views" class="markdown_views">
                        <h1 id="1-概述"><a name="t0"></a><a name="t0"></a>union</h1>
                        <pre>
                            
-- Find a list of employee and branch names
SELECT employee.first_name AS Employee_Branch_Names
FROM employee
UNION
SELECT branch.branch_name
FROM branch;

-- Find a list of all clients & branch suppliers' names
SELECT client.client_name AS Non-Employee_Entities, client.branch_id AS Branch_ID
FROM client
UNION
SELECT branch_supplier.supplier_name, branch_supplier.branch_id
FROM branch_supplier;

                        </pre>
                        <div>
                            <div>
                                <h3>MySQL UNION 与 UNION ALL 语法与用法</h3>
                                <div class="article padding-t15">
  <h3>MySQL UNION 语法</h3>
<p>
MySQL UNION 用于把来自多个 <a href="http://www.5idev.com/p-php_mysql_select_from.shtml" target="_blank">SELECT</a> 语句的结果组合到一个结果集合中。语法为：
</p>
<pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT column,... FROM table1 </li><li>UNION [ALL]</li><li>SELECT column,... FROM table2</li><li>...</li><li></li></ol></pre>
<p>
在多个 SELECT 语句中，对应的列应该具有相同的<a href="http://www.5idev.com/p-php_mysql_column_property.shtml" target="_blank">字段属性</a>，且第一个 SELECT 语句中被使用的字段名称也被用于结果的字段名称。
</p>
<h3>UNION 与 UNION ALL 的区别</h3>
<p>
当使用 UNION 时，MySQL 会把结果集中重复的记录删掉，而使用 UNION ALL ，MySQL 会把所有的记录返回，且效率高于 UNION。
</p>
<h3>MySQL UNION 用法实例</h3>
<p>
UNION 常用于数据类似的两张或多张表查询，如不同的数据分类表，或者是数据历史表等。下面是用于例子的两张原始数据表：
</p>
<table class="layui-table">
<caption>article 文章表:</caption>
<tbody><tr>
<th width="10%">aid</th>
<th width="15%">title</th>
<th>content</th>
</tr>
<tr>
<td>1</td>
<td>文章1</td>
<td>文章1正文内容...</td>
</tr>
<tr>
<td>2</td>
<td>文章2</td>
<td>文章2正文内容...</td>
</tr>
<tr>
<td>3</td>
<td>文章3</td>
<td>文章3正文内容...</td>
</tr>
</tbody></table>
<table class="layui-table">
<caption>blog 日志表:</caption>
<tbody><tr>
<th width="10%">bid</th>
<th width="15%">title</th>
<th>content</th>
</tr>
<tr>
<td>1</td>
<td>日志1</td>
<td>日志1正文内容...</td>
</tr>
<tr>
<td>2</td>
<td>文章2</td>
<td>文章2正文内容...</td>
</tr>
<tr>
<td>3</td>
<td>日志3</td>
<td>日志3正文内容...</td>
</tr>
</tbody></table>
<p>
上面两个表数据中，aid=2 的数据记录与 bid=2 的数据记录是一样的。
</p>
<h3>使用 UNION 查询</h3>
<p>
查询两张表中的文章 id 号及标题，并去掉重复记录：
</p>
<pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT aid,title FROM article UNION SELECT bid,title FROM blog</li><li></li></ol></pre>
<p>
返回查询结果如下：
</p>
<table class="layui-table">
<tbody><tr>
<th width="10%">aid</th>
<th>title</th>
</tr>
<tr>
<td>1</td>
<td>文章1</td>
</tr>
<tr>
<td>2</td>
<td>文章2</td>
</tr>
<tr>
<td>3</td>
<td>文章3</td>
</tr>
<tr>
<td>1</td>
<td>日志1</td>
</tr>
<tr>
<td>3</td>
<td>日志3</td>
</tr>
</tbody></table>
<strong>UNION 查询结果说明</strong>
<ol>
<li>重复记录是指查询中各个字段完全重复的记录，如上例，若 title 一样但 id 号不一样算作不同记录。</li>
<li>第一个 SELECT 语句中被使用的字段名称也被用于结果的字段名称，如上例的 aid。</li>
<li>各 SELECT 语句字段名称可以不同，但字段属性必须一致。</li>
</ol>
<h3>使用 UNION ALL 查询</h3>
<p>
查询两张表中的文章 id 号及标题，并返回所有记录：
</p>
<pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>SELECT aid,title FROM article UNION ALL SELECT bid,title FROM blog</li><li></li></ol></pre>
<p>
返回查询结果如下：
</p>
<table class="layui-table">
<tbody><tr>
<th width="10%">aid</th>
<th>title</th>
</tr>
<tr>
<td>1</td>
<td>文章1</td>
</tr>
<tr>
<td>2</td>
<td>文章2</td>
</tr>
<tr>
<td>3</td>
<td>文章3</td>
</tr>
<tr>
<td>1</td>
<td>日志1</td>
</tr>
<tr>
<td>2</td>
<td>文章2</td>
</tr>
<tr>
<td>3</td>
<td>日志3</td>
</tr>
</tbody></table>
<p>
显然，使用 UNION ALL 的时候，只是单纯的把各个查询组合到一起而不会去判断数据是否重复。因此，当确定查询结果中不会有重复数据或者不需要去掉重复数据的时候，应当使用 UNION ALL 以提高查询效率。
</p>  </div>
                            </div>
                            
                                <div>
                                  <h3>MySQL UNION ORDER BY</h3>
                                <p>
                                在 MySQL UNION 中使用 <a href="http://www.5idev.com/p-php_mysql_order_by.shtml" target="_blank">ORDER BY</a> 和 <a href="http://www.5idev.com/p-php_mysql_limit.shtml" target="_blank">LIMIT</a> 是有些需要特别注意的地方，因此单独列出来说明一下。
                                </p>
                                <p>
                                下面是用于例子测试的两张原始数据表：
                                </p>
                                <table class="layui-table">
                                <caption>article 文章表:</caption>
                                <tbody><tr>
                                <th width="10%">aid</th>
                                <th width="15%">title</th>
                                <th>content</th>
                                </tr>
                                <tr>
                                <td>1</td>
                                <td>文章1</td>
                                <td>文章1正文内容...</td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>文章2</td>
                                <td>文章2正文内容...</td>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>文章3</td>
                                <td>文章3正文内容...</td>
                                </tr>
                                </tbody></table>
                                <table class="layui-table">
                                <caption>blog 日志表:</caption>
                                <tbody><tr>
                                <th width="10%">bid</th>
                                <th width="15%">title</th>
                                <th>content</th>
                                </tr>
                                <tr>
                                <td>1</td>
                                <td>日志1</td>
                                <td>日志1正文内容...</td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>文章2</td>
                                <td>文章2正文内容...</td>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>日志3</td>
                                <td>日志3正文内容...</td>
                                </tr>
                                </tbody></table>
                                <h3>UNION 子句中使用 ORDER BY</h3>
                                <p>
                                子句中使用 ORDER BY，即将 <a href="http://www.5idev.com/p-php_mysql_select_from.shtml" target="_blank">SELECT</a> 子句的结果先排序，然后再把这些子句查询的结果进行集合。
                                </p>
                                <p>
                                在子句中使用 ORDER BY，由于优先级问题，需要将整个子句加圆括号()，且<span class="red">必须与 LIMIT 结合使用</span>：
                                </p>
                                <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>(SELECT aid,title FROM article ORDER BY aid DESC LIMIT 10) </li><li>UNION ALL</li><li>(SELECT bid,title FROM blog ORDER BY bid DESC LIMIT 10)</li><li></li></ol></pre>
                                <p>
                                返回查询结果如下：
                                </p>
                                <table class="layui-table">
                                <tbody><tr>
                                <th width="10%">aid</th>
                                <th>title</th>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>文章3</td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>文章2</td>
                                </tr>
                                <tr>
                                <td>1</td>
                                <td>文章1</td>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>日志3</td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>文章2</td>
                                </tr>
                                <tr>
                                <td>1</td>
                                <td>日志1</td>
                                </tr>
                                </tbody></table>
                                <h3>UNION 整句中使用 ORDER BY</h3>
                                <p>
                                如果想使用 ORDER BY 或 LIMIT 来对全部 UNION 结果进行分类或限制，则应对单个 SELECT 语句加圆括号，并把 ORDER BY 或 LIMIT 放到最后一个的后面。
                                </p>
                                <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>(SELECT aid,title FROM article) </li><li>UNION ALL</li><li>(SELECT bid,title FROM blog)</li><li>ORDER BY aid DESC</li><li></li></ol></pre>
                                <p>
                                返回查询结果如下：
                                </p>
                                <table class="layui-table">
                                <tbody><tr>
                                <th width="10%">aid</th>
                                <th>title</th>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>文章3</td>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>日志3</td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>文章2</td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>文章2</td>
                                </tr>
                                <tr>
                                <td>1</td>
                                <td>文章1</td>
                                </tr>
                                <tr>
                                <td>1</td>
                                <td>日志1</td>
                                </tr>
                                </tbody></table>
                                <p>
                                整句中使用 ORDER BY，去掉 SELECT 子句中的圆括号虽然结果是一样的，但为了语句清晰，建议不要省略圆括号。
                                </p>
                                <h3>UNION ORDER BY 应用于别名</h3>
                                <p>
                                如果 SELECT 中使用到了<a href="http://www.5idev.com/p-php_mysql_column_alias.shtml" target="_blank">字段别名</a>，则 OEDER BY 必须引用别名：
                                </p>
                                <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>(SELECT a AS b FROM table) UNION (SELECT ...) ORDER BY b</li><li></li></ol></pre>
                                <h3>MySQL UNION LIMIT</h3>
                                <p>
                                在 MySQL UNION 中使用 LIMIT 用于限制返回的记录条数，如果对 SELECT 子句做限制，需要对 SELECT 添加圆括号：
                                </p>
                                <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>(SELECT aid,title FROM article LIMIT 2) </li><li>UNION ALL</li><li>(SELECT bid,title FROM blog LIMIT 2)</li><li></li></ol></pre>
                                <p>
                                该 SQL 会返回个 SELECT 语句的两条记录，如果不添加圆括号，则最后一个 LIMIT 2 会作用于整个 UNION 语句而一共返回 2 条记录。
                                </p>
                                <p>
                                同 ORDER BY 类似，当需要对整个 UNION 的结果进行 LIMIT 限制时，建议将各个 SELECT 语句用圆括号括起来以使语句更加清晰：
                                </p>
                                <pre class="layui-box layui-code-view layui-code-notepad"><h3 class="layui-code-h3">code</h3><ol class="layui-code-ol"><li>(SELECT aid,title FROM article) </li><li>UNION ALL</li><li>(SELECT bid,title FROM blog)</li><li>LIMIT 2</li><li></li></ol></pre>
                                <p>
                                可见，LIMIT 与 ORDER BY 经常搭配使用，二者在 UNION 中的使用方式也是一致的。
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
                article:'union',                  
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