<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">    
                    <div class="card-body">

                 <div id="article_content" class="article_content clearfix">
            <link rel="stylesheet" href="https://csdnimg.cn/release/phoenix/template/css/ck_htmledit_views-211130ba7a.css">
                            <div id="content_views" class="markdown_views">
                    <!-- flowchart 箭头图标 勿删 -->
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" d="M5,0 0,2.5 5,5z" id="raphael-marker-block" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                    </svg>
                                            <h1 id="1-概述"><a name="t0"></a><a name="t0"></a>1. 概述</h1>

<p>information_schema 数据库跟 performance_schema 一样，都是 MySQL 自带的信息数据库。其中 performance_schema 用于性能分析，而 information_schema 用于存储数据库元数据(关于数据的数据)，例如数据库名、表名、列的数据类型、访问权限等。</p>

<p>information_schema 中的表实际上是视图，而不是基本表，因此，文件系统上没有与之相关的文件。</p>



<pre class="prettyprint" name="code"><code class="hljs 1c has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;">mysql&gt; use information_schema;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
mysql&gt; show tables;
+---------------------------------------+
<span class="hljs-string">| Tables_in_information_schema          |</span>
+---------------------------------------+
<span class="hljs-string">| CHARACTER_SETS                        |</span>
<span class="hljs-string">| COLLATIONS                            |</span>
<span class="hljs-string">| COLLATION_CHARACTER_SET_APPLICABILITY |</span>
<span class="hljs-string">| COLUMNS                               |</span>
<span class="hljs-string">| COLUMN_PRIVILEGES                     |</span>
<span class="hljs-string">| ENGINES                               |</span>
<span class="hljs-string">| EVENTS                                |</span>
<span class="hljs-string">| FILES                                 |</span>
<span class="hljs-string">| GLOBAL_STATUS                         |</span>
<span class="hljs-string">| GLOBAL_VARIABLES                      |</span>
<span class="hljs-string">| KEY_COLUMN_USAGE                      |</span>
<span class="hljs-string">| OPTIMIZER_TRACE                       |</span>
<span class="hljs-string">| PARAMETERS                            |</span>
<span class="hljs-string">| PARTITIONS                            |</span>
<span class="hljs-string">| PLUGINS                               |</span>
<span class="hljs-string">| PROCESSLIST                           |</span>
<span class="hljs-string">| PROFILING                             |</span>
<span class="hljs-string">| REFERENTIAL_CONSTRAINTS               |</span>
<span class="hljs-string">| ROUTINES                              |</span>
<span class="hljs-string">| SCHEMATA                              |</span>
<span class="hljs-string">| SCHEMA_PRIVILEGES                     |</span>
<span class="hljs-string">| SESSION_STATUS                        |</span>
<span class="hljs-string">| SESSION_VARIABLES                     |</span>
<span class="hljs-string">| STATISTICS                            |</span>
<span class="hljs-string">| TABLES                                |</span>
<span class="hljs-string">| TABLESPACES                           |</span>
<span class="hljs-string">| TABLE_CONSTRAINTS                     |</span>
<span class="hljs-string">| TABLE_PRIVILEGES                      |</span>
<span class="hljs-string">| TRIGGERS                              |</span>
<span class="hljs-string">| USER_PRIVILEGES                       |</span>
<span class="hljs-string">| VIEWS                                 |</span>
<span class="hljs-string">| INNODB_LOCKS                          |</span>
<span class="hljs-string">| INNODB_TRX                            |</span>
<span class="hljs-string">| INNODB_SYS_DATAFILES                  |</span>
<span class="hljs-string">| INNODB_FT_CONFIG                      |</span>
<span class="hljs-string">| INNODB_SYS_VIRTUAL                    |</span>
<span class="hljs-string">| INNODB_CMP                            |</span>
<span class="hljs-string">| INNODB_FT_BEING_DELETED               |</span>
<span class="hljs-string">| INNODB_CMP_RESET                      |</span>
<span class="hljs-string">| INNODB_CMP_PER_INDEX                  |</span>
<span class="hljs-string">| INNODB_CMPMEM_RESET                   |</span>
<span class="hljs-string">| INNODB_FT_DELETED                     |</span>
<span class="hljs-string">| INNODB_BUFFER_PAGE_LRU                |</span>
<span class="hljs-string">| INNODB_LOCK_WAITS                     |</span>
<span class="hljs-string">| INNODB_TEMP_TABLE_INFO                |</span>
<span class="hljs-string">| INNODB_SYS_INDEXES                    |</span>
<span class="hljs-string">| INNODB_SYS_TABLES                     |</span>
<span class="hljs-string">| INNODB_SYS_FIELDS                     |</span>
<span class="hljs-string">| INNODB_CMP_PER_INDEX_RESET            |</span>
<span class="hljs-string">| INNODB_BUFFER_PAGE                    |</span>
<span class="hljs-string">| INNODB_FT_DEFAULT_STOPWORD            |</span>
<span class="hljs-string">| INNODB_FT_INDEX_TABLE                 |</span>
<span class="hljs-string">| INNODB_FT_INDEX_CACHE                 |</span>
<span class="hljs-string">| INNODB_SYS_TABLESPACES                |</span>
<span class="hljs-string">| INNODB_METRICS                        |</span>
<span class="hljs-string">| INNODB_SYS_FOREIGN_COLS               |</span>
<span class="hljs-string">| INNODB_CMPMEM                         |</span>
<span class="hljs-string">| INNODB_BUFFER_POOL_STATS              |</span>
<span class="hljs-string">| INNODB_SYS_COLUMNS                    |</span>
<span class="hljs-string">| INNODB_SYS_FOREIGN                    |</span>
<span class="hljs-string">| INNODB_SYS_TABLESTATS                 |</span>
+---------------------------------------+
<span class="hljs-number">61</span> rows in set (<span class="hljs-number">0.00</span> sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li><li style="color: rgb(153, 153, 153);">14</li><li style="color: rgb(153, 153, 153);">15</li><li style="color: rgb(153, 153, 153);">16</li><li style="color: rgb(153, 153, 153);">17</li><li style="color: rgb(153, 153, 153);">18</li><li style="color: rgb(153, 153, 153);">19</li><li style="color: rgb(153, 153, 153);">20</li><li style="color: rgb(153, 153, 153);">21</li><li style="color: rgb(153, 153, 153);">22</li><li style="color: rgb(153, 153, 153);">23</li><li style="color: rgb(153, 153, 153);">24</li><li style="color: rgb(153, 153, 153);">25</li><li style="color: rgb(153, 153, 153);">26</li><li style="color: rgb(153, 153, 153);">27</li><li style="color: rgb(153, 153, 153);">28</li><li style="color: rgb(153, 153, 153);">29</li><li style="color: rgb(153, 153, 153);">30</li><li style="color: rgb(153, 153, 153);">31</li><li style="color: rgb(153, 153, 153);">32</li><li style="color: rgb(153, 153, 153);">33</li><li style="color: rgb(153, 153, 153);">34</li><li style="color: rgb(153, 153, 153);">35</li><li style="color: rgb(153, 153, 153);">36</li><li style="color: rgb(153, 153, 153);">37</li><li style="color: rgb(153, 153, 153);">38</li><li style="color: rgb(153, 153, 153);">39</li><li style="color: rgb(153, 153, 153);">40</li><li style="color: rgb(153, 153, 153);">41</li><li style="color: rgb(153, 153, 153);">42</li><li style="color: rgb(153, 153, 153);">43</li><li style="color: rgb(153, 153, 153);">44</li><li style="color: rgb(153, 153, 153);">45</li><li style="color: rgb(153, 153, 153);">46</li><li style="color: rgb(153, 153, 153);">47</li><li style="color: rgb(153, 153, 153);">48</li><li style="color: rgb(153, 153, 153);">49</li><li style="color: rgb(153, 153, 153);">50</li><li style="color: rgb(153, 153, 153);">51</li><li style="color: rgb(153, 153, 153);">52</li><li style="color: rgb(153, 153, 153);">53</li><li style="color: rgb(153, 153, 153);">54</li><li style="color: rgb(153, 153, 153);">55</li><li style="color: rgb(153, 153, 153);">56</li><li style="color: rgb(153, 153, 153);">57</li><li style="color: rgb(153, 153, 153);">58</li><li style="color: rgb(153, 153, 153);">59</li><li style="color: rgb(153, 153, 153);">60</li><li style="color: rgb(153, 153, 153);">61</li><li style="color: rgb(153, 153, 153);">62</li><li style="color: rgb(153, 153, 153);">63</li><li style="color: rgb(153, 153, 153);">64</li><li style="color: rgb(153, 153, 153);">65</li><li style="color: rgb(153, 153, 153);">66</li><li style="color: rgb(153, 153, 153);">67</li><li style="color: rgb(153, 153, 153);">68</li><li style="color: rgb(153, 153, 153);">69</li><li style="color: rgb(153, 153, 153);">70</li><li style="color: rgb(153, 153, 153);">71</li><li style="color: rgb(153, 153, 153);">72</li></ul></pre>



<h1 id="2-informationschema-库中常用的表"><a name="t1"></a><a name="t1"></a>2. information_schema 库中常用的表</h1>

<h2 id="charactersets-表"><a name="t2"></a><a name="t2"></a>CHARACTER_SETS 表</h2>

<p>提供了 mysql 可用字符集的信息。<code>SHOW CHARACTER SET;</code> 命令从这个表获取结果。</p>



<pre class="prettyprint" name="code"><code class="hljs asciidoc has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;"><span class="hljs-header">mysql&gt; SHOW CHARACTER SET;
+----------+---------------------------------+---------------------+--------+</span>
<span class="hljs-header">| Charset  | Description                     | Default collation   | Maxlen |
+----------+---------------------------------+---------------------+--------+</span>
| big5     | Big5 Traditional Chinese        | big5<span class="hljs-emphasis">_chinese_</span>ci     |      2 |
| dec8     | DEC West European               | dec8<span class="hljs-emphasis">_swedish_</span>ci     |      1 |
| cp850    | DOS West European               | cp850<span class="hljs-emphasis">_general_</span>ci    |      1 |
<span class="hljs-bullet">...
</span>| eucjpms  | UJIS for Windows Japanese       | eucjpms<span class="hljs-emphasis">_japanese_</span>ci |      3 |
<span class="hljs-header">| gb18030  | China National Standard GB18030 | gb18030_chinese_ci  |      4 |
+----------+---------------------------------+---------------------+--------+</span>
41 rows in set (0.07 sec)

<span class="hljs-header">mysql&gt; SELECT * FROM CHARACTER_SETS;
+--------------------+----------------------+---------------------------------+--------+</span>
<span class="hljs-header">| CHARACTER_SET_NAME | DEFAULT_COLLATE_NAME | DESCRIPTION                     | MAXLEN |
+--------------------+----------------------+---------------------------------+--------+</span>
| big5               | big5<span class="hljs-emphasis">_chinese_</span>ci      | Big5 Traditional Chinese        |      2 |
| dec8               | dec8<span class="hljs-emphasis">_swedish_</span>ci      | DEC West European               |      1 |
| cp850              | cp850<span class="hljs-emphasis">_general_</span>ci     | DOS West European               |      1 |
<span class="hljs-bullet">...
</span>| eucjpms            | eucjpms<span class="hljs-emphasis">_japanese_</span>ci  | UJIS for Windows Japanese       |      3 |
<span class="hljs-header">| gb18030            | gb18030_chinese_ci   | China National Standard GB18030 |      4 |
+--------------------+----------------------+---------------------------------+--------+</span>
41 rows in set (0.00 sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li><li style="color: rgb(153, 153, 153);">14</li><li style="color: rgb(153, 153, 153);">15</li><li style="color: rgb(153, 153, 153);">16</li><li style="color: rgb(153, 153, 153);">17</li><li style="color: rgb(153, 153, 153);">18</li><li style="color: rgb(153, 153, 153);">19</li><li style="color: rgb(153, 153, 153);">20</li><li style="color: rgb(153, 153, 153);">21</li><li style="color: rgb(153, 153, 153);">22</li><li style="color: rgb(153, 153, 153);">23</li><li style="color: rgb(153, 153, 153);">24</li><li style="color: rgb(153, 153, 153);">25</li></ul></pre>



<h2 id="schemata-表"><a name="t3"></a><a name="t3"></a>SCHEMATA 表</h2>

<p>当前 mysql 实例中所有数据库的信息。<code>SHOW DATABASES;</code> 命令从这个表获取数据。</p>



<pre class="prettyprint" name="code"><code class="hljs asciidoc has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;"><span class="hljs-header">mysql&gt; SELECT * FROM SCHEMATA;
+--------------+--------------------+----------------------------+------------------------+----------+</span>
<span class="hljs-header">| CATALOG_NAME | SCHEMA_NAME        | DEFAULT_CHARACTER_SET_NAME | DEFAULT_COLLATION_NAME | SQL_PATH |
+--------------+--------------------+----------------------------+------------------------+----------+</span>
| def          | information<span class="hljs-emphasis">_schema | utf8                       | utf8_</span>general<span class="hljs-emphasis">_ci        | NULL     |
| def          | mysql              | latin1                     | latin1_</span>swedish<span class="hljs-emphasis">_ci      | NULL     |
| def          | performance_</span>schema | utf8                       | utf8<span class="hljs-emphasis">_general_</span>ci        | NULL     |
| def          | sys                | utf8                       | utf8<span class="hljs-emphasis">_general_</span>ci        | NULL     |
<span class="hljs-header">| def          | test               | utf8                       | utf8_unicode_ci        | NULL     |
+--------------+--------------------+----------------------------+------------------------+----------+</span>
10 rows in set (0.00 sec)

<span class="hljs-header">mysql&gt; show databases;
+--------------------+</span>
<span class="hljs-header">| Database           |
+--------------------+</span>
| information<span class="hljs-emphasis">_schema |
| mysql              |
| performance_</span>schema |
| sys                |
<span class="hljs-header">| test               |
+--------------------+</span>
10 rows in set (0.00 sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li><li style="color: rgb(153, 153, 153);">14</li><li style="color: rgb(153, 153, 153);">15</li><li style="color: rgb(153, 153, 153);">16</li><li style="color: rgb(153, 153, 153);">17</li><li style="color: rgb(153, 153, 153);">18</li><li style="color: rgb(153, 153, 153);">19</li><li style="color: rgb(153, 153, 153);">20</li><li style="color: rgb(153, 153, 153);">21</li><li style="color: rgb(153, 153, 153);">22</li><li style="color: rgb(153, 153, 153);">23</li></ul></pre>



<h2 id="tables-表"><a name="t4"></a><a name="t4"></a>TABLES 表</h2>

<p>存储数据库中的表信息（包括视图），包括表属于哪个数据库，表的类型、存储引擎、创建时间等信息。<code>SHOW TABLES FROM XX;</code> 命令从这个表获取结果。</p>



<pre class="prettyprint" name="code"><code class="hljs asciidoc has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;"><span class="hljs-header">mysql&gt; SELECT * FROM TABLES;
+---------------+--------------------+------------------------------------------------------+-------------+--------------------+---------+------------+------------+----------------+-------------+--------------------+--------------+-----------+----------------+---------------------+---------------------+---------------------+-------------------+----------+--------------------+--------------------------------------------+</span>
<span class="hljs-header">| TABLE_CATALOG | TABLE_SCHEMA       | TABLE_NAME                                           | TABLE_TYPE  | ENGINE             | VERSION | ROW_FORMAT | TABLE_ROWS | AVG_ROW_LENGTH | DATA_LENGTH | MAX_DATA_LENGTH    | INDEX_LENGTH | DATA_FREE | AUTO_INCREMENT | CREATE_TIME         | UPDATE_TIME         | CHECK_TIME          | TABLE_COLLATION   | CHECKSUM | CREATE_OPTIONS     | TABLE_COMMENT                              |
+---------------+--------------------+------------------------------------------------------+-------------+--------------------+---------+------------+------------+----------------+-------------+--------------------+--------------+-----------+----------------+---------------------+---------------------+---------------------+-------------------+----------+--------------------+--------------------------------------------+</span>
| def           | information<span class="hljs-emphasis">_schema | CHARACTER_</span>SETS                                       | SYSTEM VIEW | MEMORY             |      10 | Fixed      |       NULL |            384 |           0 |           16434816 |            0 |         0 |           NULL | 2018-04-23 11:51:32 | NULL                | NULL                | utf8<span class="hljs-emphasis">_general_</span>ci   |     NULL | max<span class="hljs-emphasis">_rows=43690     |                                            |
| def           | information_</span>schema | COLLATIONS                                           | SYSTEM VIEW | MEMORY             |      10 | Fixed      |       NULL |            231 |           0 |           16704765 |            0 |         0 |           NULL | 2018-04-23 11:51:32 | NULL                | NULL                | utf8<span class="hljs-emphasis">_general_</span>ci   |     NULL | max<span class="hljs-emphasis">_rows=72628     |                                            |
...
| def           | zentao             | zt_</span>usertpl                                           | BASE TABLE  | MyISAM             |      10 | Dynamic    |          0 |              0 |           0 |    281474976710655 |         1024 |         0 |              1 | 2017-08-16 16:36:45 | 2017-08-16 16:36:45 | NULL                | utf8<span class="hljs-emphasis">_general_</span>ci   |     NULL |                    |                                            |
<span class="hljs-code">+---------------+</span>--------------------<span class="hljs-code">+------------------------------------------------------+</span>-------------<span class="hljs-code">+--------------------+</span>---------<span class="hljs-code">+------------+</span>------------<span class="hljs-code">+----------------+</span>-------------<span class="hljs-code">+--------------------+</span>--------------<span class="hljs-code">+-----------+</span>----------------<span class="hljs-code">+---------------------+</span>---------------------<span class="hljs-code">+---------------------+</span>-------------------<span class="hljs-code">+----------+</span>--------------------<span class="hljs-code">+--------------------------------------------+</span>
525 rows in set (3.03 sec)

<span class="hljs-header">mysql&gt; SHOW TABLES FROM zentao;
+-------------------+</span>
<span class="hljs-header">| Tables_in_zentao  |
+-------------------+</span>
| zt<span class="hljs-emphasis">_action         |
| zt_</span>block          |
| zt<span class="hljs-emphasis">_branch         |
...
| zt_</span>usertpl        |
<span class="hljs-code">+-------------------+</span>
48 rows in set (0.00 sec)
<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li><li style="color: rgb(153, 153, 153);">14</li><li style="color: rgb(153, 153, 153);">15</li><li style="color: rgb(153, 153, 153);">16</li><li style="color: rgb(153, 153, 153);">17</li><li style="color: rgb(153, 153, 153);">18</li><li style="color: rgb(153, 153, 153);">19</li><li style="color: rgb(153, 153, 153);">20</li><li style="color: rgb(153, 153, 153);">21</li><li style="color: rgb(153, 153, 153);">22</li><li style="color: rgb(153, 153, 153);">23</li></ul></pre>



<h2 id="columns-表"><a name="t5"></a><a name="t5"></a>COLUMNS 表</h2>

<p>存储表中的列信息，包括表有多少列、每个列的类型等。<code>SHOW COLUMNS FROM schemaname.tablename</code> 命令从这个表获取结果。</p>



<pre class="prettyprint" name="code"><code class="hljs vhdl has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;">mysql&gt; <span class="hljs-keyword">SELECT</span> * FROM COLUMNS LIMIT <span class="hljs-number">2</span>,<span class="hljs-number">5</span>;
+<span class="hljs-comment">---------------+--------------------+----------------+--------------------+------------------+----------------+-------------+-----------+--------------------------+------------------------+-------------------+---------------+--------------------+--------------------+-----------------+-------------+------------+-------+------------+----------------+-----------------------+</span>
| TABLE_CATALOG | TABLE_SCHEMA       | TABLE_NAME     | COLUMN_NAME        | ORDINAL_POSITION | COLUMN_DEFAULT | IS_NULLABLE | DATA_TYPE | CHARACTER_MAXIMUM_LENGTH | CHARACTER_OCTET_LENGTH | NUMERIC_PRECISION | NUMERIC_SCALE | DATETIME_PRECISION | CHARACTER_SET_NAME | COLLATION_NAME  | COLUMN_TYPE | COLUMN_KEY | EXTRA | PRIVILEGES | COLUMN_COMMENT | GENERATION_EXPRESSION |
+<span class="hljs-comment">---------------+--------------------+----------------+--------------------+------------------+----------------+-------------+-----------+--------------------------+------------------------+-------------------+---------------+--------------------+--------------------+-----------------+-------------+------------+-------+------------+----------------+-----------------------+</span>
| def           | information_schema | CHARACTER_SETS | DESCRIPTION        |                <span class="hljs-number">3</span> |                | NO          | varchar   |                       <span class="hljs-number">60</span> |                    <span class="hljs-number">180</span> |              <span class="hljs-keyword">NULL</span> |          <span class="hljs-keyword">NULL</span> |               <span class="hljs-keyword">NULL</span> | utf8               | utf8_general_ci | varchar(<span class="hljs-number">60</span>) |            |       | <span class="hljs-keyword">select</span>     |                |                       |
| def           | information_schema | CHARACTER_SETS | MAXLEN             |                <span class="hljs-number">4</span> | <span class="hljs-number">0</span>              | NO          | bigint    |                     <span class="hljs-keyword">NULL</span> |                   <span class="hljs-keyword">NULL</span> |                <span class="hljs-number">19</span> |             <span class="hljs-number">0</span> |               <span class="hljs-keyword">NULL</span> | <span class="hljs-keyword">NULL</span>               | <span class="hljs-keyword">NULL</span>            | bigint(<span class="hljs-number">3</span>)   |            |       | <span class="hljs-keyword">select</span>     |                |                       |
| def           | information_schema | COLLATIONS     | COLLATION_NAME     |                <span class="hljs-number">1</span> |                | NO          | varchar   |                       <span class="hljs-number">32</span> |                     <span class="hljs-number">96</span> |              <span class="hljs-keyword">NULL</span> |          <span class="hljs-keyword">NULL</span> |               <span class="hljs-keyword">NULL</span> | utf8               | utf8_general_ci | varchar(<span class="hljs-number">32</span>) |            |       | <span class="hljs-keyword">select</span>     |                |                       |
| def           | information_schema | COLLATIONS     | CHARACTER_SET_NAME |                <span class="hljs-number">2</span> |                | NO          | varchar   |                       <span class="hljs-number">32</span> |                     <span class="hljs-number">96</span> |              <span class="hljs-keyword">NULL</span> |          <span class="hljs-keyword">NULL</span> |               <span class="hljs-keyword">NULL</span> | utf8               | utf8_general_ci | varchar(<span class="hljs-number">32</span>) |            |       | <span class="hljs-keyword">select</span>     |                |                       |
| def           | information_schema | COLLATIONS     | ID                 |                <span class="hljs-number">3</span> | <span class="hljs-number">0</span>              | NO          | bigint    |                     <span class="hljs-keyword">NULL</span> |                   <span class="hljs-keyword">NULL</span> |                <span class="hljs-number">19</span> |             <span class="hljs-number">0</span> |               <span class="hljs-keyword">NULL</span> | <span class="hljs-keyword">NULL</span>               | <span class="hljs-keyword">NULL</span>            | bigint(<span class="hljs-number">11</span>)  |            |       | <span class="hljs-keyword">select</span>     |                |                       |
+<span class="hljs-comment">---------------+--------------------+----------------+--------------------+------------------+----------------+-------------+-----------+--------------------------+------------------------+-------------------+---------------+--------------------+--------------------+-----------------+-------------+------------+-------+------------+----------------+-----------------------+</span>
<span class="hljs-number">5</span> rows <span class="hljs-keyword">in</span> set (<span class="hljs-number">0.08</span> sec)
<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li></ul></pre>



<h2 id="statistics-表"><a name="t6"></a><a name="t6"></a>STATISTICS 表</h2>

<p>表索引的信息。<code>SHOW INDEX FROM schemaname.tablename;</code> 命令从这个表获取结果。</p>



<pre class="prettyprint" name="code"><code class="hljs asciidoc has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;"><span class="hljs-header">mysql&gt; SHOW INDEX FROM szhuizhong.users;
+-------+------------+---------------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+</span>
<span class="hljs-header">| Table | Non_unique | Key_name      | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment |
+-------+------------+---------------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+</span>
| users |          0 | PRIMARY       |            1 | UserID      | A         |        1460 |     NULL | NULL   |      | BTREE      |         |               |
| users |          0 | Account<span class="hljs-emphasis">_index |            1 | Account     | A         |        1460 |     NULL | NULL   |      | BTREE      |         |               |
| users |          1 | CorpID        |            1 | FromID      | A         |           2 |     NULL | NULL   | YES  | BTREE      |         |               |
+-------+------------+---------------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
3 rows in set (0.00 sec)</span><div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li></ul></pre>



<h2 id="userprivileges-表"><a name="t7"></a><a name="t7"></a>USER_PRIVILEGES 表</h2>

<p>用户权限表。内容源自 mysql.user 授权表。是非标准表。</p>



<pre class="prettyprint" name="code"><code class="hljs smalltalk has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;">mysql&gt; <span class="hljs-class">SELECT</span> * <span class="hljs-class">FROM</span> <span class="hljs-class">USER_PRIVILEGES</span>;
+-------------------------+---------------+-------------------------+--------------+
| <span class="hljs-class">GRANTEE</span>                 | <span class="hljs-class">TABLE_CATALOG</span> | <span class="hljs-class">PRIVILEGE_TYPE</span>          | <span class="hljs-class">IS_GRANTABLE</span> |
+-------------------------+---------------+-------------------------+--------------+
| <span class="hljs-string">'mysql.sys'</span>@<span class="hljs-string">'localhost'</span> <span class="hljs-localvars">| def           |</span> <span class="hljs-class">USAGE</span>                   | <span class="hljs-class">NO</span>           |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">SELECT</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">INSERT</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">UPDATE</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">DELETE</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">CREATE</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">DROP</span>                    | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">RELOAD</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">SHUTDOWN</span>                | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">PROCESS</span>                 | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">FILE</span>                    | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">REFERENCES</span>              | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">INDEX</span>                   | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">ALTER</span>                   | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">SHOW</span> <span class="hljs-class">DATABASES</span>          | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">SUPER</span>                   | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">CREATE</span> <span class="hljs-class">TEMPORARY</span> <span class="hljs-class">TABLES</span> | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">LOCK</span> <span class="hljs-class">TABLES</span>             | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">EXECUTE</span>                 | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">REPLICATION</span> <span class="hljs-class">SLAVE</span>       | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">REPLICATION</span> <span class="hljs-class">CLIENT</span>      | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">CREATE</span> <span class="hljs-class">VIEW</span>             | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">SHOW</span> <span class="hljs-class">VIEW</span>               | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">CREATE</span> <span class="hljs-class">ROUTINE</span>          | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">ALTER</span> <span class="hljs-class">ROUTINE</span>           | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">CREATE</span> <span class="hljs-class">USER</span>             | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">EVENT</span>                   | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">TRIGGER</span>                 | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           |</span> <span class="hljs-class">CREATE</span> <span class="hljs-class">TABLESPACE</span>       | <span class="hljs-class">YES</span>          |
+-------------------------+---------------+-------------------------+--------------+
<span class="hljs-number">29</span> rows in set (<span class="hljs-number">0.00</span> sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li><li style="color: rgb(153, 153, 153);">14</li><li style="color: rgb(153, 153, 153);">15</li><li style="color: rgb(153, 153, 153);">16</li><li style="color: rgb(153, 153, 153);">17</li><li style="color: rgb(153, 153, 153);">18</li><li style="color: rgb(153, 153, 153);">19</li><li style="color: rgb(153, 153, 153);">20</li><li style="color: rgb(153, 153, 153);">21</li><li style="color: rgb(153, 153, 153);">22</li><li style="color: rgb(153, 153, 153);">23</li><li style="color: rgb(153, 153, 153);">24</li><li style="color: rgb(153, 153, 153);">25</li><li style="color: rgb(153, 153, 153);">26</li><li style="color: rgb(153, 153, 153);">27</li><li style="color: rgb(153, 153, 153);">28</li><li style="color: rgb(153, 153, 153);">29</li><li style="color: rgb(153, 153, 153);">30</li><li style="color: rgb(153, 153, 153);">31</li><li style="color: rgb(153, 153, 153);">32</li><li style="color: rgb(153, 153, 153);">33</li><li style="color: rgb(153, 153, 153);">34</li><li style="color: rgb(153, 153, 153);">35</li></ul></pre>



<h2 id="schemaprivileges-表"><a name="t8"></a><a name="t8"></a>SCHEMA_PRIVILEGES 表</h2>

<p>方案权限表。给出了关于方案（数据库）权限的信息。内容来自 mysql.db 授权表。是非标准表。</p>



<pre class="prettyprint" name="code"><code class="hljs smalltalk has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;">mysql&gt; <span class="hljs-class">SELECT</span> * <span class="hljs-class">FROM</span> <span class="hljs-class">SCHEMA_PRIVILEGES</span>;
+-------------------------+---------------+--------------+-------------------------+--------------+
| <span class="hljs-class">GRANTEE</span>                 | <span class="hljs-class">TABLE_CATALOG</span> | <span class="hljs-class">TABLE_SCHEMA</span> | <span class="hljs-class">PRIVILEGE_TYPE</span>          | <span class="hljs-class">IS_GRANTABLE</span> |
+-------------------------+---------------+--------------+-------------------------+--------------+
| <span class="hljs-string">'mysql.sys'</span>@<span class="hljs-string">'localhost'</span> <span class="hljs-localvars">| def           | sys          |</span> <span class="hljs-class">TRIGGER</span>                 | <span class="hljs-class">NO</span>           |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">SELECT</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">INSERT</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">UPDATE</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">DELETE</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">CREATE</span>                  | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">DROP</span>                    | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">REFERENCES</span>              | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">INDEX</span>                   | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">ALTER</span>                   | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">CREATE</span> <span class="hljs-class">TEMPORARY</span> <span class="hljs-class">TABLES</span> | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">LOCK</span> <span class="hljs-class">TABLES</span>             | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">EXECUTE</span>                 | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">CREATE</span> <span class="hljs-class">VIEW</span>             | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">SHOW</span> <span class="hljs-class">VIEW</span>               | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">CREATE</span> <span class="hljs-class">ROUTINE</span>          | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">ALTER</span> <span class="hljs-class">ROUTINE</span>           | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">EVENT</span>                   | <span class="hljs-class">YES</span>          |
| <span class="hljs-string">'root'</span>@<span class="hljs-string">'%'</span>              <span class="hljs-localvars">| def           | mysql        |</span> <span class="hljs-class">TRIGGER</span>                 | <span class="hljs-class">YES</span>          |
+-------------------------+---------------+--------------+-------------------------+--------------+
<span class="hljs-number">19</span> rows in set (<span class="hljs-number">0.00</span> sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li><li style="color: rgb(153, 153, 153);">14</li><li style="color: rgb(153, 153, 153);">15</li><li style="color: rgb(153, 153, 153);">16</li><li style="color: rgb(153, 153, 153);">17</li><li style="color: rgb(153, 153, 153);">18</li><li style="color: rgb(153, 153, 153);">19</li><li style="color: rgb(153, 153, 153);">20</li><li style="color: rgb(153, 153, 153);">21</li><li style="color: rgb(153, 153, 153);">22</li><li style="color: rgb(153, 153, 153);">23</li><li style="color: rgb(153, 153, 153);">24</li><li style="color: rgb(153, 153, 153);">25</li></ul></pre>



<h2 id="tableprivileges-表"><a name="t9"></a><a name="t9"></a>TABLE_PRIVILEGES 表</h2>

<p>表权限表。给出了关于表权限的信息。内容源自 mysql.tables_priv 授权表。是非标准表。</p>



<pre class="prettyprint" name="code"><code class="hljs asciidoc has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;"><span class="hljs-header">mysql&gt; SELECT * FROM TABLE_PRIVILEGES;
+-------------------------+---------------+--------------+------------+----------------+--------------+</span>
<span class="hljs-header">| GRANTEE                 | TABLE_CATALOG | TABLE_SCHEMA | TABLE_NAME | PRIVILEGE_TYPE | IS_GRANTABLE |
+-------------------------+---------------+--------------+------------+----------------+--------------+</span>
<span class="hljs-header">| 'mysql.sys'@'localhost' | def           | sys          | sys_config | SELECT         | NO           |
+-------------------------+---------------+--------------+------------+----------------+--------------+</span>
1 row in set (0.00 sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li></ul></pre>



<h2 id="columnprivileges-表"><a name="t10"></a><a name="t10"></a>COLUMN_PRIVILEGES 表</h2>

<p>列权限表。给出了关于列权限的信息。内容源自 mysql.columns_priv 授权表。是非标准表。</p>



<pre class="prettyprint" name="code"><code class="hljs oxygene has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;">mysql&gt; <span class="hljs-keyword">SELECT</span> * <span class="hljs-keyword">FROM</span> COLUMN_PRIVILEGES;
<span class="hljs-keyword">Empty</span> <span class="hljs-keyword">set</span> (<span class="hljs-number">0.00</span> sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li></ul></pre>



<h2 id="collations-表"><a name="t11"></a><a name="t11"></a>COLLATIONS 表</h2>

<p>提供了关于各字符集的对照信息。<code>SHOW COLLATION;</code> 命令从这个表获取结果。</p>



<pre class="prettyprint" name="code"><code class="hljs asciidoc has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;"><span class="hljs-header">mysql&gt; SELECT * FROM COLLATIONS;
+--------------------------+--------------------+-----+------------+-------------+---------+</span>
<span class="hljs-header">| COLLATION_NAME           | CHARACTER_SET_NAME | ID  | IS_DEFAULT | IS_COMPILED | SORTLEN |
+--------------------------+--------------------+-----+------------+-------------+---------+</span>
| big5<span class="hljs-emphasis">_chinese_</span>ci          | big5               |   1 | Yes        | Yes         |       1 |
| big5<span class="hljs-emphasis">_bin                 | big5               |  84 |            | Yes         |       1 |
| dec8_</span>swedish<span class="hljs-emphasis">_ci          | dec8               |   3 | Yes        | Yes         |       1 |
| dec8_</span>bin                 | dec8               |  69 |            | Yes         |       1 |
<span class="hljs-bullet">...
</span>| gb18030<span class="hljs-emphasis">_bin              | gb18030            | 249 |            | Yes         |       1 |
| gb18030_</span>unicode<span class="hljs-emphasis">_520_</span>ci   | gb18030            | 250 |            | Yes         |       8 |
<span class="hljs-code">+--------------------------+</span>--------------------<span class="hljs-code">+-----+</span>------------<span class="hljs-code">+-------------+</span>---------+
222 rows in set (0.03 sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li></ul></pre>



<h2 id="collationcharactersetapplicability-表"><a name="t12"></a><a name="t12"></a>COLLATION_CHARACTER_SET_APPLICABILITY 表</h2>

<p>指明了可用于校对的字符集。相当于 <code>SHOW COLLATION</code> 命令结果的前两个字段。</p>



<pre class="prettyprint" name="code"><code class="hljs asciidoc has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;"><span class="hljs-header">mysql&gt; SELECT * FROM COLLATION_CHARACTER_SET_APPLICABILITY;
+--------------------------+--------------------+</span>
<span class="hljs-header">| COLLATION_NAME           | CHARACTER_SET_NAME |
+--------------------------+--------------------+</span>
| big5<span class="hljs-emphasis">_chinese_</span>ci          | big5               |
| big5<span class="hljs-emphasis">_bin                 | big5               |
| dec8_</span>swedish<span class="hljs-emphasis">_ci          | dec8               |
...
| gb18030_</span>bin              | gb18030            |
<span class="hljs-header">| gb18030_unicode_520_ci   | gb18030            |
+--------------------------+--------------------+</span>
222 rows in set (0.00 sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li></ul></pre>



<h2 id="tableconstraints-表"><a name="t13"></a><a name="t13"></a>TABLE_CONSTRAINTS 表</h2>

<p>描述了存在约束的表。以及表的约束类型。</p>



<pre class="prettyprint" name="code"><code class="hljs smalltalk has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;">mysql&gt; <span class="hljs-class">SELECT</span> * <span class="hljs-class">FROM</span> <span class="hljs-class">TABLE_CONSTRAINTS</span>;
+--------------------+-------------------+--------------------+--------------+---------------------------+-----------------+
| <span class="hljs-class">CONSTRAINT_CATALOG</span> | <span class="hljs-class">CONSTRAINT_SCHEMA</span> | <span class="hljs-class">CONSTRAINT_NAME</span>    | <span class="hljs-class">TABLE_SCHEMA</span> | <span class="hljs-class">TABLE_NAME</span>                | <span class="hljs-class">CONSTRAINT_TYPE</span> |
+--------------------+-------------------+--------------------+--------------+---------------------------+-----------------+
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | columns_priv              |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | db                        |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | engine_cost               |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | event                     |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | func                      |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | gtid_executed             |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | help_category             |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             | name               | mysql        | help_category             |</span> <span class="hljs-class">UNIQUE</span>          |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | help_keyword              |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             | name               | mysql        | help_keyword              |</span> <span class="hljs-class">UNIQUE</span>          |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | help_relation             |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | help_topic                |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             | name               | mysql        | help_topic                |</span> <span class="hljs-class">UNIQUE</span>          |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | innodb_index_stats        |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | innodb_table_stats        |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | ndb_binlog_index          |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | plugin                    |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | proc                      |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | procs_priv                |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | proxies_priv              |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | server_cost               |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | servers                   |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | slave_master_info         |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | slave_relay_log_info      |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | slave_worker_info         |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | tables_priv               |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | time_zone                 |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | time_zone_leap_second     |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | time_zone_name            |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | time_zone_transition      |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | time_zone_transition_type |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| mysql        | user                      |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | sys               |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| sys          | sys_config                |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | zentao            |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| zentao       | zt_action                 |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
...
<span class="hljs-localvars">| def                | zentao            | account            | zentao       | zt_usergroup              |</span> <span class="hljs-class">UNIQUE</span>          |
<span class="hljs-localvars">| def                | zentao            |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| zentao       | zt_userquery              |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
<span class="hljs-localvars">| def                | zentao            |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| zentao       | zt_usertpl                |</span> <span class="hljs-class">PRIMARY</span> <span class="hljs-class">KEY</span>     |
+--------------------+-------------------+--------------------+--------------+---------------------------+-----------------+
<span class="hljs-number">213</span> rows in set (<span class="hljs-number">0.37</span> sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li><li style="color: rgb(153, 153, 153);">14</li><li style="color: rgb(153, 153, 153);">15</li><li style="color: rgb(153, 153, 153);">16</li><li style="color: rgb(153, 153, 153);">17</li><li style="color: rgb(153, 153, 153);">18</li><li style="color: rgb(153, 153, 153);">19</li><li style="color: rgb(153, 153, 153);">20</li><li style="color: rgb(153, 153, 153);">21</li><li style="color: rgb(153, 153, 153);">22</li><li style="color: rgb(153, 153, 153);">23</li><li style="color: rgb(153, 153, 153);">24</li><li style="color: rgb(153, 153, 153);">25</li><li style="color: rgb(153, 153, 153);">26</li><li style="color: rgb(153, 153, 153);">27</li><li style="color: rgb(153, 153, 153);">28</li><li style="color: rgb(153, 153, 153);">29</li><li style="color: rgb(153, 153, 153);">30</li><li style="color: rgb(153, 153, 153);">31</li><li style="color: rgb(153, 153, 153);">32</li><li style="color: rgb(153, 153, 153);">33</li><li style="color: rgb(153, 153, 153);">34</li><li style="color: rgb(153, 153, 153);">35</li><li style="color: rgb(153, 153, 153);">36</li><li style="color: rgb(153, 153, 153);">37</li><li style="color: rgb(153, 153, 153);">38</li><li style="color: rgb(153, 153, 153);">39</li><li style="color: rgb(153, 153, 153);">40</li><li style="color: rgb(153, 153, 153);">41</li><li style="color: rgb(153, 153, 153);">42</li><li style="color: rgb(153, 153, 153);">43</li><li style="color: rgb(153, 153, 153);">44</li></ul></pre>



<h2 id="keycolumnusage-表"><a name="t14"></a><a name="t14"></a>KEY_COLUMN_USAGE 表</h2>

<p>描述了具有约束的键列。</p>



<pre class="prettyprint" name="code"><code class="hljs smalltalk has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;">mysql&gt; <span class="hljs-class">SELECT</span> * <span class="hljs-class">FROM</span> <span class="hljs-class">KEY_COLUMN_USAGE</span>;
+--------------------+-------------------+--------------------+---------------+--------------+---------------------------+--------------------+------------------+-------------------------------+-------------------------+-----------------------+------------------------+
| <span class="hljs-class">CONSTRAINT_CATALOG</span> | <span class="hljs-class">CONSTRAINT_SCHEMA</span> | <span class="hljs-class">CONSTRAINT_NAME</span>    | <span class="hljs-class">TABLE_CATALOG</span> | <span class="hljs-class">TABLE_SCHEMA</span> | <span class="hljs-class">TABLE_NAME</span>                | <span class="hljs-class">COLUMN_NAME</span>        | <span class="hljs-class">ORDINAL_POSITION</span> | <span class="hljs-class">POSITION_IN_UNIQUE_CONSTRAINT</span> | <span class="hljs-class">REFERENCED_TABLE_SCHEMA</span> | <span class="hljs-class">REFERENCED_TABLE_NAME</span> | <span class="hljs-class">REFERENCED_COLUMN_NAME</span> |
+--------------------+-------------------+--------------------+---------------+--------------+---------------------------+--------------------+------------------+-------------------------------+-------------------------+-----------------------+------------------------+
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | columns_priv              |</span> <span class="hljs-class">Host</span>               |                <span class="hljs-number">1</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | columns_priv              |</span> <span class="hljs-class">Db</span>                 |                <span class="hljs-number">2</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | columns_priv              |</span> <span class="hljs-class">User</span>               |                <span class="hljs-number">3</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | columns_priv              |</span> <span class="hljs-class">Table_name</span>         |                <span class="hljs-number">4</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | columns_priv              |</span> <span class="hljs-class">Column_name</span>        |                <span class="hljs-number">5</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
...
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | time_zone_leap_second     |</span> <span class="hljs-class">Transition_time</span>    |                <span class="hljs-number">1</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | time_zone_name            |</span> <span class="hljs-class">Name</span>               |                <span class="hljs-number">1</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | time_zone_transition      |</span> <span class="hljs-class">Time_zone_id</span>       |                <span class="hljs-number">1</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | time_zone_transition      |</span> <span class="hljs-class">Transition_time</span>    |                <span class="hljs-number">2</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | time_zone_transition_type |</span> <span class="hljs-class">Time_zone_id</span>       |                <span class="hljs-number">1</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | time_zone_transition_type |</span> <span class="hljs-class">Transition_type_id</span> |                <span class="hljs-number">2</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | user                      |</span> <span class="hljs-class">Host</span>               |                <span class="hljs-number">1</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | mysql             |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | mysql        | user                      |</span> <span class="hljs-class">User</span>               |                <span class="hljs-number">2</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
<span class="hljs-localvars">| def                | sys               |</span> <span class="hljs-class">PRIMARY</span>            <span class="hljs-localvars">| def           | sys          | sys_config                | variable           |</span>                <span class="hljs-number">1</span> |                          <span class="hljs-class">NULL</span> | <span class="hljs-class">NULL</span>                    | <span class="hljs-class">NULL</span>                  | <span class="hljs-class">NULL</span>                   |
+--------------------+-------------------+--------------------+---------------+--------------+---------------------------+--------------------+------------------+-------------------------------+-------------------------+-----------------------+------------------------+
<span class="hljs-number">278</span> rows in set (<span class="hljs-number">0.03</span> sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li><li style="color: rgb(153, 153, 153);">14</li><li style="color: rgb(153, 153, 153);">15</li><li style="color: rgb(153, 153, 153);">16</li><li style="color: rgb(153, 153, 153);">17</li><li style="color: rgb(153, 153, 153);">18</li><li style="color: rgb(153, 153, 153);">19</li><li style="color: rgb(153, 153, 153);">20</li><li style="color: rgb(153, 153, 153);">21</li></ul></pre>



<h2 id="routines-表"><a name="t15"></a><a name="t15"></a>ROUTINES 表</h2>

<p>提供了关于存储子程序（存储程序和函数）的信息。此时，ROUTINES 表不包含自定义函数（UDF）。名为“mysql.proc name”的列指明了对应于 INFORMATION_SCHEMA.ROUTINES 表的 mysql.proc 列。</p>



<h2 id="views-表"><a name="t16"></a><a name="t16"></a>VIEWS 表</h2>

<p>给出了关于数据库中的视图的信息。需要有 show views 权限，否则无法查看视图信息。</p>



<pre class="prettyprint" name="code"><code class="hljs autohotkey has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;">mysql&gt; SELECT * FROM VIEWS LIMIT <span class="hljs-number">1</span>\G
*************************** <span class="hljs-number">1</span>. row ***************************
<span class="hljs-label">       TABLE_CATALOG:</span> def
<span class="hljs-label">        TABLE_SCHEMA:</span> sys
<span class="hljs-label">          TABLE_NAME:</span> host_summary
<span class="hljs-label">     VIEW_DEFINITION:</span> select <span class="hljs-keyword">if</span>(isnull(<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`H</span>OST<span class="hljs-escape">`)</span>,'background',<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`H</span>OST<span class="hljs-escape">`)</span> AS <span class="hljs-escape">`h</span>ost<span class="hljs-escape">`,</span>sum(<span class="hljs-escape">`s</span>tmt<span class="hljs-escape">`.</span><span class="hljs-escape">`t</span>otal<span class="hljs-escape">`)</span> AS <span class="hljs-escape">`s</span>tatements<span class="hljs-escape">`,</span><span class="hljs-escape">`s</span>ys<span class="hljs-escape">`.</span><span class="hljs-escape">`f</span>ormat_time<span class="hljs-escape">`(</span>sum(<span class="hljs-escape">`s</span>tmt<span class="hljs-escape">`.</span><span class="hljs-escape">`t</span>otal_latency<span class="hljs-escape">`)</span>) AS <span class="hljs-escape">`s</span>tatement_latency<span class="hljs-escape">`,</span><span class="hljs-escape">`s</span>ys<span class="hljs-escape">`.</span><span class="hljs-escape">`f</span>ormat_time<span class="hljs-escape">`(</span>ifnull((sum(<span class="hljs-escape">`s</span>tmt<span class="hljs-escape">`.</span><span class="hljs-escape">`t</span>otal_latency<span class="hljs-escape">`)</span> / nullif(sum(<span class="hljs-escape">`s</span>tmt<span class="hljs-escape">`.</span><span class="hljs-escape">`t</span>otal<span class="hljs-escape">`)</span>,<span class="hljs-number">0</span>)),<span class="hljs-number">0</span>)) AS <span class="hljs-escape">`s</span>tatement_avg_latency<span class="hljs-escape">`,</span>sum(<span class="hljs-escape">`s</span>tmt<span class="hljs-escape">`.</span><span class="hljs-escape">`f</span>ull_scans<span class="hljs-escape">`)</span> AS <span class="hljs-escape">`t</span>able_scans<span class="hljs-escape">`,</span>sum(<span class="hljs-escape">`i</span>o<span class="hljs-escape">`.</span><span class="hljs-escape">`i</span>os<span class="hljs-escape">`)</span> AS <span class="hljs-escape">`f</span>ile_ios<span class="hljs-escape">`,</span><span class="hljs-escape">`s</span>ys<span class="hljs-escape">`.</span><span class="hljs-escape">`f</span>ormat_time<span class="hljs-escape">`(</span>sum(<span class="hljs-escape">`i</span>o<span class="hljs-escape">`.</span><span class="hljs-escape">`i</span>o_latency<span class="hljs-escape">`)</span>) AS <span class="hljs-escape">`f</span>ile_io_latency<span class="hljs-escape">`,</span>sum(<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`C</span>URRENT_CONNECTIONS<span class="hljs-escape">`)</span> AS <span class="hljs-escape">`c</span>urrent_connections<span class="hljs-escape">`,</span>sum(<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`T</span>OTAL_CONNECTIONS<span class="hljs-escape">`)</span> AS <span class="hljs-escape">`t</span>otal_connections<span class="hljs-escape">`,</span>count(distinct <span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`U</span>SER<span class="hljs-escape">`)</span> AS <span class="hljs-escape">`u</span>nique_users<span class="hljs-escape">`,</span><span class="hljs-escape">`s</span>ys<span class="hljs-escape">`.</span><span class="hljs-escape">`f</span>ormat_bytes<span class="hljs-escape">`(</span>sum(<span class="hljs-escape">`m</span>em<span class="hljs-escape">`.</span><span class="hljs-escape">`c</span>urrent_allocated<span class="hljs-escape">`)</span>) AS <span class="hljs-escape">`c</span>urrent_memory<span class="hljs-escape">`,</span><span class="hljs-escape">`s</span>ys<span class="hljs-escape">`.</span><span class="hljs-escape">`f</span>ormat_bytes<span class="hljs-escape">`(</span>sum(<span class="hljs-escape">`m</span>em<span class="hljs-escape">`.</span><span class="hljs-escape">`t</span>otal_allocated<span class="hljs-escape">`)</span>) AS <span class="hljs-escape">`t</span>otal_memory_allocated<span class="hljs-escape">` </span>from (((<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">` </span>join <span class="hljs-escape">`s</span>ys<span class="hljs-escape">`.</span><span class="hljs-escape">`x</span>$host_summary_by_statement_latency<span class="hljs-escape">` </span><span class="hljs-escape">`s</span>tmt<span class="hljs-escape">` </span>on((<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`H</span>OST<span class="hljs-escape">` </span>= <span class="hljs-escape">`s</span>tmt<span class="hljs-escape">`.</span><span class="hljs-escape">`h</span>ost<span class="hljs-escape">`)</span>)) join <span class="hljs-escape">`s</span>ys<span class="hljs-escape">`.</span><span class="hljs-escape">`x</span>$host_summary_by_file_io<span class="hljs-escape">` </span><span class="hljs-escape">`i</span>o<span class="hljs-escape">` </span>on((<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`H</span>OST<span class="hljs-escape">` </span>= <span class="hljs-escape">`i</span>o<span class="hljs-escape">`.</span><span class="hljs-escape">`h</span>ost<span class="hljs-escape">`)</span>)) join <span class="hljs-escape">`s</span>ys<span class="hljs-escape">`.</span><span class="hljs-escape">`x</span>$memory_by_host_by_current_bytes<span class="hljs-escape">` </span><span class="hljs-escape">`m</span>em<span class="hljs-escape">` </span>on((<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`H</span>OST<span class="hljs-escape">` </span>= <span class="hljs-escape">`m</span>em<span class="hljs-escape">`.</span><span class="hljs-escape">`h</span>ost<span class="hljs-escape">`)</span>)) group by <span class="hljs-keyword">if</span>(isnull(<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`H</span>OST<span class="hljs-escape">`)</span>,'background',<span class="hljs-escape">`p</span>erformance_schema<span class="hljs-escape">`.</span><span class="hljs-escape">`a</span>ccounts<span class="hljs-escape">`.</span><span class="hljs-escape">`H</span>OST<span class="hljs-escape">`)</span>
<span class="hljs-label">        CHECK_OPTION:</span> NONE
<span class="hljs-label">        IS_UPDATABLE:</span> NO
<span class="hljs-label">             DEFINER:</span> mysql.sys@localhost
<span class="hljs-label">       SECURITY_TYPE:</span> INVOKER
<span class="hljs-label">CHARACTER_SET_CLIENT:</span> utf8
<span class="hljs-label">COLLATION_CONNECTION:</span> utf8_general_ci
<span class="hljs-number">1</span> row in set (<span class="hljs-number">0.03</span> sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li></ul></pre>



<h2 id="triggers-表"><a name="t17"></a><a name="t17"></a>TRIGGERS 表</h2>

<p>提供了关于触发程序的信息。必须有 super 权限才能查看该表。</p>



<pre class="prettyprint" name="code"><code class="hljs vbscript has-numbering" onclick="mdcp.copyCode(event)" style="position: unset;">mysql&gt; <span class="hljs-keyword">SELECT</span> * FROM TRIGGERS LIMIT <span class="hljs-number">1</span>\G
*************************** <span class="hljs-number">1.</span> row ***************************
           TRIGGER_CATALOG: def
            TRIGGER_SCHEMA: sys
              TRIGGER_NAME: sys_config_insert_set_user
        EVENT_MANIPULATION: INSERT
      EVENT_OBJECT_CATALOG: def
       EVENT_OBJECT_SCHEMA: sys
        EVENT_OBJECT_TABLE: sys_config
              ACTION_ORDER: <span class="hljs-number">1</span>
          ACTION_CONDITION: <span class="hljs-literal">NULL</span>
          ACTION_STATEMENT: BEGIN <span class="hljs-keyword">IF</span> @sys.ignore_sys_config_triggers != <span class="hljs-literal">true</span> <span class="hljs-keyword">AND</span> <span class="hljs-keyword">NEW</span>.set_by <span class="hljs-keyword">IS</span> <span class="hljs-literal">NULL</span> <span class="hljs-keyword">THEN</span> <span class="hljs-keyword">SET</span> <span class="hljs-keyword">NEW</span>.set_by = USER(); <span class="hljs-keyword">END</span> <span class="hljs-keyword">IF</span>; <span class="hljs-keyword">END</span>
        ACTION_ORIENTATION: ROW
             ACTION_TIMING: BEFORE
ACTION_REFERENCE_OLD_TABLE: <span class="hljs-literal">NULL</span>
ACTION_REFERENCE_NEW_TABLE: <span class="hljs-literal">NULL</span>
  ACTION_REFERENCE_OLD_ROW: OLD
  ACTION_REFERENCE_NEW_ROW: <span class="hljs-keyword">NEW</span>
                   CREATED: <span class="hljs-number">2017</span>-<span class="hljs-number">05</span>-<span class="hljs-number">27</span> <span class="hljs-number">11</span>:<span class="hljs-number">18</span>:<span class="hljs-number">43.60</span>
                  SQL_MODE: 
                   DEFINER: mysql.sys@localhost
      CHARACTER_SET_CLIENT: utf8
      COLLATION_CONNECTION: utf8_general_ci
        DATABASE_COLLATION: utf8_general_ci
<span class="hljs-number">1</span> row <span class="hljs-keyword">in</span> <span class="hljs-keyword">set</span> (<span class="hljs-number">0.00</span> sec)<div class="hljs-button {2}" data-title="复制"></div></code><ul class="pre-numbering" style=""><li style="color: rgb(153, 153, 153);">1</li><li style="color: rgb(153, 153, 153);">2</li><li style="color: rgb(153, 153, 153);">3</li><li style="color: rgb(153, 153, 153);">4</li><li style="color: rgb(153, 153, 153);">5</li><li style="color: rgb(153, 153, 153);">6</li><li style="color: rgb(153, 153, 153);">7</li><li style="color: rgb(153, 153, 153);">8</li><li style="color: rgb(153, 153, 153);">9</li><li style="color: rgb(153, 153, 153);">10</li><li style="color: rgb(153, 153, 153);">11</li><li style="color: rgb(153, 153, 153);">12</li><li style="color: rgb(153, 153, 153);">13</li><li style="color: rgb(153, 153, 153);">14</li><li style="color: rgb(153, 153, 153);">15</li><li style="color: rgb(153, 153, 153);">16</li><li style="color: rgb(153, 153, 153);">17</li><li style="color: rgb(153, 153, 153);">18</li><li style="color: rgb(153, 153, 153);">19</li><li style="color: rgb(153, 153, 153);">20</li><li style="color: rgb(153, 153, 153);">21</li><li style="color: rgb(153, 153, 153);">22</li><li style="color: rgb(153, 153, 153);">23</li><li style="color: rgb(153, 153, 153);">24</li><li style="color: rgb(153, 153, 153);">25</li></ul></pre>                                    </div><div><div></div></div>
                <link href="https://csdnimg.cn/release/phoenix/mdeditor/markdown_views-60ecaf1f42.css" rel="stylesheet">
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