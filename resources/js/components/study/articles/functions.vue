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
                        <h1 id="1-概述"><a name="t0"></a><a name="t0"></a>functions MySQL常用函数汇总</h1>

<p></p>
            <table style="width: 100%;">
            <caption>
            MySQL 数值型函数</caption>
            <tbody>
            <tr>
            <th>
            函数名称</th>
            <th>
            作&nbsp;用</th>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/abc.html" target="_blank">ABS</a></td>
            <td>
            求绝对值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/sqrt.html" target="_blank">SQRT</a></td>
            <td>
            求二次方根</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/mod.html" target="_blank">MOD</a></td>
            <td>
            求余数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/ceil_celing.html" target="_blank">CEIL 和&nbsp;CEILING</a></td>
            <td>
            两个函数功能相同，都是返回不小于参数的最小整数，即向上取整</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/floor.html" target="_blank">FLOOR</a></td>
            <td>
            向下取整，返回值转化为一个BIGINT</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/rand.html" target="_blank">RAND</a></td>
            <td>
            生成一个0~1之间的随机数，传入整数参数是，用来产生重复序列</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/round.html" target="_blank">ROUND</a></td>
            <td>
            对所传参数进行四舍五入</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/sign.html" target="_blank">SIGN</a></td>
            <td>
            返回参数的符号</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/pow_power.html" target="_blank">POW 和&nbsp;POWER</a></td>
            <td>
            两个函数的功能相同，都是所传参数的次方的结果值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/sin.html" target="_blank">SIN</a></td>
            <td>
            求正弦值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/asin.html" target="_blank">ASIN</a></td>
            <td>
            求反正弦值，与函数 SIN 互为反函数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/cos.html" target="_blank">COS</a></td>
            <td>
            求余弦值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/acos.html" target="_blank">ACOS</a></td>
            <td>
            求反余弦值，与函数 COS 互为反函数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/tan.html" target="_blank">TAN</a></td>
            <td>
            求正切值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/atan.html" target="_blank">ATAN</a></td>
            <td>
            求反正切值，与函数 TAN 互为反函数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/cot.html" target="_blank">COT</a></td>
            <td>
            求余切值</td>
            </tr>
            </tbody>
            </table>
<p></p>
            <table style="width: 100%;">
            <caption>
            MySQL 字符串函数</caption>
            <tbody>
            <tr>
            <th>
            函数名称</th>
            <th>
            作&nbsp;用</th>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/length.html" target="_blank">LENGTH</a></td>
            <td>
            计算字符串长度函数，返回字符串的字节长度</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/concat.html" target="_blank">CONCAT</a></td>
            <td>
            合并字符串函数，返回结果为连接参数产生的字符串，参数可以使一个或多个</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/insert.html" target="_blank">INSERT</a></td>
            <td>
            替换字符串函数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/lower.html" target="_blank">LOWER</a></td>
            <td>
            将字符串中的字母转换为小写</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/upper.html" target="_blank">UPPER</a></td>
            <td>
            将字符串中的字母转换为大写</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/left.html" target="_blank">LEFT</a></td>
            <td>
            从左侧字截取符串，返回字符串左边的若干个字符</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/right.html" target="_blank">RIGHT</a></td>
            <td>
            从右侧字截取符串，返回字符串右边的若干个字符</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/trim.html" target="_blank">TRIM</a></td>
            <td>
            删除字符串左右两侧的空格</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/replace.html" target="_blank">REPLACE</a></td>
            <td>
            字符串替换函数，返回替换后的新字符串</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/substring.html" target="_blank">SUBSTRING</a></td>
            <td>
            截取字符串，返回从指定位置开始的指定长度的字符换</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/reverse.html" target="_blank">REVERSE</a></td>
            <td>
            字符串反转（逆序）函数，返回与原始字符串顺序相反的字符串</td>
            </tr>
            </tbody>
            </table>
<p></p>
            <table style="width: 100%;">
            <caption>
            MySQL 日期和时间函数</caption>
            <tbody>
            <tr>
            <th>
            函数名称</th>
            <th>
            作 用</th>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/curdate_current_date.html" target="_blank">CURDATE&nbsp;和 CURRENT_DATE</a></td>
            <td>
            两个函数作用相同，返回当前系统的日期值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/curtime_current_time.html" target="_blank">CURTIME 和 CURRENT_TIME</a></td>
            <td>
            两个函数作用相同，返回当前系统的时间值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/now_sysdate.html" target="_blank">NOW&nbsp;和&nbsp; SYSDATE</a></td>
            <td>
            两个函数作用相同，返回当前系统的日期和时间值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/unix_timestamp.html" target="_blank">UNIX_TIMESTAMP</a></td>
            <td>
            获取UNIX时间戳函数，返回一个以 UNIX 时间戳为基础的无符号整数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/from_unixtime.html" target="_blank">FROM_UNIXTIME</a></td>
            <td>
            将 UNIX 时间戳转换为时间格式，与UNIX_TIMESTAMP互为反函数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/month.html" target="_blank">MONTH</a></td>
            <td>
            获取指定日期中的月份</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/monthname.html" target="_blank">MONTHNAME</a></td>
            <td>
            获取指定日期中的月份英文名称</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/dayname.html" target="_blank">DAYNAME</a></td>
            <td>
            获取指定曰期对应的星期几的英文名称</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/dayofweek.html" target="_blank">DAYOFWEEK</a></td>
            <td>
            获取指定日期对应的一周的索引位置值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/week.html" target="_blank">WEEK</a></td>
            <td>
            获取指定日期是一年中的第几周，返回值的范围是否为 0〜52 或 1〜53</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/dayofyear.html" target="_blank">DAYOFYEAR</a></td>
            <td>
            获取指定曰期是一年中的第几天，返回值范围是1~366</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/dayofmonth.html" target="_blank">DAYOFMONTH</a></td>
            <td>
            获取指定日期是一个月中是第几天，返回值范围是1~31</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/year.html" target="_blank">YEAR</a></td>
            <td>
            获取年份，返回值范围是 1970〜2069</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/time_to_sec.html" target="_blank">TIME_TO_SEC</a></td>
            <td>
            将时间参数转换为秒数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/sec_to_time.html" target="_blank">SEC_TO_TIME</a></td>
            <td>
            将秒数转换为时间，与TIME_TO_SEC 互为反函数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/date_add_adddate.html" target="_blank">DATE_ADD 和 ADDDATE</a></td>
            <td>
            两个函数功能相同，都是向日期添加指定的时间间隔</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/date_sub_subdate.html" target="_blank">DATE_SUB 和 SUBDATE</a></td>
            <td>
            两个函数功能相同，都是向日期减去指定的时间间隔</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/addtime.html" target="_blank">ADDTIME</a></td>
            <td>
            时间加法运算，在原始时间上添加指定的时间</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/subtime.html" target="_blank">SUBTIME</a></td>
            <td>
            时间减法运算，在原始时间上减去指定的时间</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/datediff.html" target="_blank">DATEDIFF</a></td>
            <td>
            获取两个日期之间间隔，返回参数 1 减去参数 2 的值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/date_format.html" target="_blank">DATE_FORMAT</a></td>
            <td>
            格式化指定的日期，根据参数返回指定格式的值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/weekday.html" target="_blank">WEEKDAY</a></td>
            <td>
            获取指定日期在一周内的对应的工作日索引</td>
            </tr>
            </tbody>
            </table>
<p></p>
            <table style="width: 100%;">
            <caption>
            MySQL 聚合函数</caption>
            <tbody>
            <tr>
            <th>
            函数名称</th>
            <th>
            作用</th>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/max.html" target="_blank">MAX</a></td>
            <td>
            查询指定列的最大值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/min.html" target="_blank">MIN</a></td>
            <td>
            查询指定列的最小值</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/count.html" target="_blank">COUNT</a></td>
            <td>
            统计查询结果的行数</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/sum.html" target="_blank">SUM</a></td>
            <td>
            求和，返回指定列的总和</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/avg.html" target="_blank">AVG</a></td>
            <td>
            求平均值，返回指定列数据的平均值</td>
            </tr>
            </tbody>
            </table>
<p></p>
            <table style="width: 100%;">
            <caption>
            MySQL 流程控制函数</caption>
            <tbody>
            <tr>
            <th>
            函数名称</th>
            <th>
            作用</th>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/if.html" target="_blank">IF</a></td>
            <td>
            判断，流程控制</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/ifnull.html" target="_blank">IFNULL</a></td>
            <td>
            判断是否为空</td>
            </tr>
            <tr>
            <td>
            <a href="http://c.biancheng.net/mysql/case.html" target="_blank">CASE</a></td>
            <td>
            搜索语句</td>
            </tr>
            </tbody>
            </table>
<p></p>

<pre>
    
-- Find the number of employees
SELECT COUNT(super_id)
FROM employee;

-- Find the average of all employee's salaries
SELECT AVG(salary)
FROM employee;

-- Find the sum of all employee's salaries
SELECT SUM(salary)
FROM employee;

-- Find out how many males and females there are
SELECT COUNT(sex), sex
FROM employee
GROUP BY sex

-- Find the total sales of each salesman
SELECT SUM(total_sales), emp_id
FROM works_with
GROUP BY client_id;

-- Find the total amount of money spent by each client
SELECT SUM(total_sales), client_id
FROM works_with
GROUP BY client_id;

</pre>
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
                article:'functions',                  
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