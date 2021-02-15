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
                        <h1 id="1-概述">wildcards <strong>MySQL 通配符</strong> “_”匹配任何单个字符，而“%”匹配任意数目字符(包括零个字符)</h1>
                            <div id="article_content" class="article_content clearfix">
                                            <div id="content_views" class="htmledit_views">

                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <strong><span style="color:rgb(255,0,0)"><h3>注意在你使用SQL模式时，你不能使用=或!=；而使用LIKE或NOT LIKE比较操作符。</h3></span></strong></p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 为了找出以“b”开头的名字：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)">mysql&gt; SELECT * FROM pet WHERE&nbsp;<span style="color:rgb(128,0,0)">name&nbsp;</span>LIKE "<span style="color:rgb(0,0,255)">b%</span>";<br> </span>+--------+--------+---------+------+------------+------------+<br> | name | owner | species | sex | birth | death |<br> +--------+--------+---------+------+------------+------------+<br> |&nbsp;<span style="color:rgb(0,0,255)">Buffy</span>&nbsp;| Harold | dog | f | 1989-05-13 | NULL |<br> |&nbsp;<span style="color:rgb(0,0,255)">Bowser</span>&nbsp;| Diane | dog | m | 1989-08-31 | 1995-07-29 |<br> +--------+--------+---------+------+------------+------------+</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 为了找出以“fy”结尾的名字：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)">mysql&gt; SELECT * FROM pet WHERE&nbsp;<span style="color:rgb(128,0,0)">name</span>&nbsp;LIKE&nbsp;<span style="color:rgb(0,0,255)">"%fy</span>";</span><br> +--------+--------+---------+------+------------+-------+<br> | name | owner | species | sex | birth | death |<br> +--------+--------+---------+------+------------+-------+<br> |&nbsp;<span style="color:rgb(0,0,255)">Fluffy</span>&nbsp;| Harold | cat | f | 1993-02-04 | NULL |<br> |&nbsp;<span style="color:rgb(0,0,255)">Buffy</span>&nbsp;| Harold | dog | f | 1989-05-13 | NULL |<br> +--------+--------+---------+------+------------+-------+</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 为了找出包含一个“w”的名字：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)">mysql&gt; SELECT * FROM pet WHERE&nbsp;<span style="color:rgb(128,0,0)">name</span>&nbsp;LIKE&nbsp;<span style="color:rgb(0,0,255)">"%w%</span>";</span><br> +----------+-------+---------+------+------------+------------+<br> | name | owner | species | sex | birth | death |<br> +----------+-------+---------+------+------------+------------+<br> |&nbsp;<span style="color:rgb(0,0,255)">Claws</span>&nbsp;| Gwen | cat | m | 1994-03-17 | NULL |<br> |&nbsp;<span style="color:rgb(0,0,255)">Bowser</span>&nbsp;| Diane | dog | m | 1989-08-31 | 1995-07-29 |<br> |&nbsp;<span style="color:rgb(0,0,255)">Whistler</span>&nbsp;| Gwen | bird | NULL | 1997-12-09 | NULL |<br> +----------+-------+---------+------+------------+------------+</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 为了找出包含正好5个字符的名字，使用“_”模式字符：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)">mysql&gt; SELECT * FROM pet WHERE&nbsp;<span style="color:rgb(128,0,0)">name</span>&nbsp;LIKE "<span style="color:rgb(0,0,255)">_____</span>";</span><br> +-------+--------+---------+------+------------+-------+<br> | name | owner | species | sex | birth | death |<br> +-------+--------+---------+------+------------+-------+<br> |&nbsp;<span style="color:rgb(0,0,255)">Claws</span>&nbsp;| Gwen | cat | m | 1994-03-17 | NULL |<br> |&nbsp;<span style="color:rgb(0,0,255)">Buffy</span>&nbsp;| Harold | dog | f | 1989-05-13 | NULL |<br> +-------+--------+---------+------+------------+-------+</p> 
                            <p style="margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(46,46,46)">由MySQL提供的模式匹配的其他类型是使用扩展正则表达式。当你对这类模式进行匹配测试时，</span><span style="color:#ff0000">使用REGEXP和NOT REGEXP操作符(或RLIKE和NOT RLIKE，它们是同义词)</span><span style="color:#2e2e2e">。</span></p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <strong><span style="color:rgb(255,0,255)">扩展正则表达式的一些字符是：</span></strong></p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> “.”匹配任何单个的字符。&nbsp;<br> 一个字符类“<span style="color:rgb(0,0,255)">[...]</span>”匹配在方括号内的任何字符。例如，“[abc]”匹配“a”、“b”或“c”。为了命名字符的一个范围，使用一个<span style="color:rgb(0,0,255)">“-”。“[a-z</span><span style="color:rgb(0,0,255)">]</span>” 匹配任何小写字母，而“[0-9]”匹配任何数字。&nbsp;<br> “&nbsp;<span style="color:rgb(0,0,255)">*</span>&nbsp;”匹配零个或多个在它前面的东西。例如，“x*”匹配任何数量的“x”字符，“[0-9]*”匹配的任何数量的数字，而“.*”匹配任何数量的任何东西。&nbsp;<br> 正则表达式是区分大小写的，但是如果你希望，你能使用一个字符类匹配两种写法。例如，“[aA]”匹配小写或大写的“a”而“[a-zA-Z]”匹配两种写法的任何字母。&nbsp;<br> </p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)"><strong>如果它出现在被测试值的任何地方，模式就匹配(只要他们匹配整个值，SQL模式匹配)。</strong></span>&nbsp;<br> 为了定位一个模式以便它必须匹配被测试值的开始或结尾，在模式开始处使用“^”或在模式的结尾用“$”。&nbsp;<br> 为了说明扩展正则表达式如何工作，上面所示的LIKE查询在下面使用REGEXP重写：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 为了找出以“b”开头的名字，使用“^”匹配名字的开始并且“[bB]”匹配小写或大写的“b”：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)">mysql&gt; SELECT * FROM pet WHERE&nbsp;<span style="color:rgb(128,0,0)">name&nbsp;</span>REGEXP "<span style="color:rgb(0,0,255)">^</span><span style="color:rgb(0,0,255)">[bB]</span>";</span><br> +--------+--------+---------+------+------------+------------+<br> | name | owner | species | sex | birth | death |<br> +--------+--------+---------+------+------------+------------+<br> |&nbsp;<span style="color:rgb(0,0,255)">Buffy&nbsp;</span>| Harold | dog | f | 1989-05-13 | NULL |<br> |&nbsp;<span style="color:rgb(0,0,255)">Bowser</span>&nbsp;| Diane | dog | m | 1989-08-31 | 1995-07-29 |<br> +--------+--------+---------+------+------------+------------+</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 为了找出以“fy”结尾的名字，使用“$”匹配名字的结尾：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)">mysql&gt; SELECT * FROM pet WHERE&nbsp;<span style="color:rgb(128,0,0)">name</span>&nbsp;REGEXP "<span style="color:rgb(0,0,255)">fy$</span>";</span><br> +--------+--------+---------+------+------------+-------+<br> | name | owner | species | sex | birth | death |<br> +--------+--------+---------+------+------------+-------+<br> |&nbsp;<span style="color:rgb(0,0,255)">Fluffy</span>&nbsp;| Harold | cat | f | 1993-02-04 | NULL |<br> |&nbsp;<span style="color:rgb(0,0,255)">Buffy</span>&nbsp;| Harold | dog | f | 1989-05-13 | NULL |<br> +--------+--------+---------+------+------------+-------+</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 为了找出包含一个“w”的名字，使用“[wW]”匹配小写或大写的“w”：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)">mysql&gt; SELECT * FROM pet WHERE&nbsp;<span style="color:rgb(128,0,0)">name</span>&nbsp;REGEXP "<span style="color:rgb(0,0,255)">[wW]</span>";</span><br> +----------+-------+---------+------+------------+------------+<br> | name | owner | species | sex | birth | death |<br> +----------+-------+---------+------+------------+------------+<br> |&nbsp;<span style="color:rgb(0,0,255)">Claws</span>&nbsp;| Gwen | cat | m | 1994-03-17 | NULL |<br> |&nbsp;<span style="color:rgb(0,0,255)">Bowser</span>&nbsp;| Diane | dog | m | 1989-08-31 | 1995-07-29 |<br> |&nbsp;<span style="color:rgb(0,0,255)">Whistler</span>&nbsp;| Gwen | bird | NULL | 1997-12-09 | NULL |<br> +----------+-------+---------+------+------------+------------+</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 既然如果一个正规表达式出现在值的任何地方，其模式匹配了，就不必再先前的查询中在模式的两方面放置一个通配符以使得它匹配整个值，就像如果你使用了一个SQL模式那样。</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 为了找出包含正好5个字符的名字，使用“^”和“$”匹配名字的开始和结尾，和5个“.”实例在两者之间：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)">mysql&gt; SELECT * FROM pet WHERE&nbsp;<span style="color:rgb(128,0,0)">name</span>&nbsp;REGEXP "<span style="color:rgb(0,0,255)">^.....$</span>";</span><br> +-------+--------+---------+------+------------+-------+<br> | name | owner | species | sex | birth | death |<br> +-------+--------+---------+------+------------+-------+<br> |&nbsp;<span style="color:rgb(0,0,255)">Claws</span>&nbsp;| Gwen | cat | m | 1994-03-17 | NULL |<br> |&nbsp;<span style="color:rgb(0,0,255)">Buffy</span>&nbsp;| Harold | dog | f | 1989-05-13 | NULL |<br> +-------+--------+---------+------+------------+-------+</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> &nbsp;</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> 你也可以使用“{n}”“重复n次”操作符重写先前的查询：</p> 
                            <p style="color:rgb(46,46,46); margin-top:0px; margin-bottom:0px; padding-top:0px; padding-bottom:0px; font-family:Arial; font-size:14px; line-height:26px"> <span style="color:rgb(255,0,255)">mysql&gt; SELECT * FROM pet WHERE&nbsp;<span style="color:rgb(128,0,0)">name</span>&nbsp;REGEXP "<span style="color:rgb(0,0,255)">^.{5}$</span>";</span><br> +-------+--------+---------+------+------------+-------+<br> | name | owner | species | sex | birth | death |<br> +-------+--------+---------+------+------------+-------+<br> |&nbsp;<span style="color:rgb(0,0,255)">Claws</span>&nbsp;| Gwen | cat | m | 1994-03-17 | NULL |<br> |&nbsp;<span style="color:rgb(0,0,255)">Buffy</span>&nbsp;| Harold | dog | f | 1989-05-13 | NULL |<br> +-------+--------+---------+------+------------+-------+</p>
                                            </div><div><div></div></div>
                                    </div>
                    </div>
                    <pre>
                        
-- % = any # characters, _ = one character

-- Find any client's who are an LLC
SELECT *
FROM client
WHERE client_name LIKE '%LLC';

-- Find any branch suppliers who are in the label business
SELECT *
FROM branch_supplier
WHERE supplier_name LIKE '% Label%';

-- Find any employee born on the 10th day of the month
SELECT *
FROM employee
WHERE birth_day LIKE '_____10%';

-- Find any clients who are schools
SELECT *
FROM client
WHERE client_name LIKE '%Highschool%';

                    </pre>
    
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
                article:'wildcards',                  
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