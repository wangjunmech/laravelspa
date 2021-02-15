<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">    
                    <div class="card-body">

     
                    <div id="content_views" class="markdown_views">

                        <h1 id="1-概述">on delete(如何实现关系表的级联删除(ON DELETE CASCADE的用法))</h1>
                        <div>
                            <div class="Blog_wz1" style="word-wrap: break-word;">
                            <p>以下面两张表为例：</p>
                            <p>SQL&gt; desc person<br>名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 是否为空? 类型<br>----------------------------------------- -------- ------------------------</p>
                            <p>PERSONID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NOT NULL NUMBER(9)<br>PROFESSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NUMBER(2)<br>IDORPASSPORTNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VARCHAR2(18)<br>INSURANCE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VARCHAR2(32)<br>FIRSTNAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VARCHAR2(32)<br>LASTNAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VARCHAR2(32)<br>CHINESENAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VARCHAR2(64)<br>SEX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CHAR(1)<br>BIRTHDAY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DATE<br>USERTYPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VARCHAR2(2)<br>SEARCHCODE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CHAR(10)<br>ORGID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NUMBER(9)<br>ADDRESSID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NUMBER(9)</p>
                            <p>SQL&gt; desc PERSONPROFESSION<br>名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 是否为空? 类型<br>----------------------------------------- -------- ------------------------</p>
                            <p>PROFESSIONID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NOT NULL NUMBER(2)<br>NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VARCHAR2(32)<br>ALIAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VARCHAR2(32)<br>INITCREDIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NUMBER(3)<br>MEMO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VARCHAR2(200)</p>
                            <p>假定PERSONPROFESSION为父表，PERSON为子表，建立如下约束条件：</p>
                            <p>SQL&gt;ALTER TABLE PERSONPROFESSION ADD (CONSTRAINT PK_PERSONPROFESSION PRIMARY KEY (PROFESSIONID) USING INDEX TABLESPACE WACOS;</p>
                            <p>表已更改。</p>
                            <p>SQL&gt;ALTER TABLE PERSON ADD (CONSTRAINT PK_PERSON PRIMARY KEY (PERSONID) USING INDEX TABLESPACE WACOS;</p>
                            <p>表已更改。</p>
                            <p>增加PERSON表的外键约束：</p>
                            <p>SQL&gt;ALTER TABLE PERSON ADD (CONSTRAINT FK_PERSON1 FOREIGN KEY (PROFESSION) <br>REFERENCES PERSONPROFESSION (PROFESSIONID) );</p>
                            <p>表已更改。</p>
                            <p>分别向两张表里插入一行数据：</p>
                            <p>SQL&gt;insert into PERSONPROFESSION values('1','sdfd','df','342','dfs');</p>
                            <p>已创建 1 行。</p>
                            <p>SQL&gt; commit;</p>
                            <p>提交完成。</p>
                            <p>SQL&gt;insert into person values('10','1','dsf','d','d','df','df','0','','sd','s','11','11');</p>
                            <p>已创建 1 行。</p>
                            <p>SQL&gt; commit;</p>
                            <p>SQL&gt; select PERSONID,PROFESSION from person;</p>
                            <p>PERSONID PROFESSION<br>---------- ----------<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1</p>
                            <p>SQL&gt; select PROFESSIONID,name from PERSONPROFESSION;</p>
                            <p>PROFESSIONID NAME<br>------------ --------------------------------<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 sdfd</p>
                            <p>SQL&gt; delete from PERSONPROFESSION;<br>delete from PERSONPROFESSION<br>*<br>ERROR 位于第 1 行:<br>ORA-02292: 违反完整约束条件 (WACOS.FK_PERSON1) - 已找到子记录日志.</p>
                            <p>报错是因为父表里存在子表的记录，应先删除子表记录，再删除父表记录：</p>
                            <p>SQL&gt; delete from PERSON;</p>
                            <p>已删除 1 行。</p>
                            <p>SQL&gt; delete from PERSONPROFESSION;</p>
                            <p>已删除 1 行。</p>
                            <p>SQL&gt; commit;</p>
                            <p>提交完成。</p>
                            <p>那么，如何实现两张表的级连删除呢？</p>
                            <p>重新建立PERSON的外键，加上ON DELETE CASCADE选项试一下：</p>
                            <p>SQL&gt; alter table person drop CONSTRAINT FK_PERSON1;</p>
                            <p>表已更改。</p>
                            <p>SQL&gt;ALTER TABLE PERSON ADD (CONSTRAINT FK_PERSON1 FOREIGN KEY (PROFESSION) <br>REFERENCES PERSONPROFESSION (PROFESSIONID) ON DELETE CASCADE);</p>
                            <p><br>表已更改。</p>
                            <p><br>增加外键约束的时候加ON DELETE CASCADE选项目的是可以在子表记录存在的情况下直接删除父表记录，而不用受约束的限制：<br>SQL&gt; delete from PERSONPROFESSION;</p>
                            <p>已删除 1 行。</p>
                            <p>SQL&gt; select PERSONID,PROFESSION from person;</p>
                            <p>PERSONID PROFESSION<br>---------- ----------<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1</p>
                            <p>SQL&gt; select * from PERSONPROFESSION;</p>
                            <p>未选定行</p>
                            <p>以上可以看出父表记录删除了，子表记录还存在。</p>
                            <p>那么在delete语句的末尾加上CASCADE，就可以实现两张表的级删除：</p>
                            <p>SQL&gt; delete from PERSONPROFESSION cascade;</p>
                            <p>已删除 1 行。</p>
                            <p>SQL&gt; select * from person;</p>
                            <p>未选定行</p>
                            <p>SQL&gt; select * from PERSONPROFESSION;</p>
                            <p>未选定行</p>
                            <p><br>以下是ON DELETE的官方解释：</p>
                            <p>ON DELETE<br>The ON DELETE clause indicates that when a DELETE is executed on a referenced row in the referenced table, one of the following actions will be executed upon the constrained column, as specified by action:</p>
                            <p>NO ACTION(default)<br>The NO ACTION clause produces an error if the reference is violated. This is the default if action is not specified.</p>
                            <p>CASCADE<br>The CASCADE keyword removes all rows which reference the deleted row. Exercise caution with this action.</p>
                            <p>SET NULL<br>The SET NULL clause assigns a NULL value to all referenced column values</p>
                            <div></div>                                   </div>
                        </div>
                        <hr>
                        <div>
                            <h3>MySQL外键约束On Delete、On Update各取值的含义</h3>
                            <p>先看On Delete属性，可取属性值为：No Action, Cascade,Set Null, Restrict属性。</p>
                            <p>当取值为No Action或者Restrict时，则当在父表（即外键的来源表）中删除对应记录时，首先检查该记录是否有对应外键，如果有则不允许删除。</p>
                            <p>当取值为Cascade时，则当在父表（即外键的来源表）中删除对应记录时，首先检查该记录是否有对应外键，如果有则也删除外键在子表（即包含外键的表）中的记录。</p>
                            <p>当取值为Set Null时，则当在父表（即外键的来源表）中删除对应记录时，首先检查该记录是否有对应外键，如果有则设置子表中该外键值为null（不过这就要求该外键允许取null）。</p>
                            <p>当取值为No Action或者Restrict时，则当在父表（即外键的来源表）中更新对应记录时，首先检查该记录是否有对应外键，如果有则不允许更新。</p>
                            <p>当取值为Cascade时，则当在父表（即外键的来源表）中更新对应记录时，首先检查该记录是否有对应外键，如果有则也更新外键在子表（即包含外键的表）中的记录。</p>
                            <p>当取值为Set Null时，则当在父表（即外键的来源表）中更新对应记录时，首先检查该记录是否有对应外键，如果有则设置子表中该外键值为null（不过这就要求该外键允许取null）。 </p>
                            <p>比如我有这样两张表：</p>
                            <pre>
                                tbluser用户表：

DROP TABLE IF EXISTS `filedb`.`tbluser`;

CREATE TABLE  `filedb`.`tbluser` (

  `UserID` varchar(50) NOT NULL COMMENT '主键',

  `UserName` varchar(40) NOT NULL COMMENT '用户姓名',

  `UserMail` varchar(50) NOT NULL COMMENT '用户邮箱',

  `UserPassword` varchar(50) NOT NULL COMMENT '密码',

  `UserType` tinyint(3) unsigned DEFAULT '0' COMMENT '默认为0，表示普通用户',

  `UserCreated` datetime DEFAULT '0000-00-00 00:00:00',

  PRIMARY KEY (`UserID`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;
----------------------------------------------------------------------------------------------------------------

                            tblfile文件（用户的文件）表：

DROP TABLE IF EXISTS `filedb`.`tblfile`;

CREATE TABLE  `filedb`.`tblfile` (

  `FileID` int(10) unsigned NOT NULL AUTO_INCREMENT,

  `FileOwner` varchar(50) DEFAULT NULL COMMENT '外键，引用用户表',

  `FileName` varchar(200) NOT NULL COMMENT '文件原始名称',

  `FilePath` varchar(200) NOT NULL COMMENT '文件存放路径',

  `FileType` varchar(10) NOT NULL COMMENT '文件类型',

  `FileSubject` varchar(100) NOT NULL COMMENT '文件标题',

  `FileCreated` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',

  PRIMARY KEY (`FileID`),

  KEY `FK_tblfile_1` (`FileOwner`),

  CONSTRAINT `FK_tblfile_1` FOREIGN KEY (`FileOwner`) REFERENCES `tbluser` (`UserID`) ON DELETE SET NULL ON UPDATE CASCADE 

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-------------------------------------------------------------------------------------------------
                            </pre>
                            <p>上面可以看出FileOwner是文件表的外键，引用的是用户表的UserID。且这里外键约束设置为"ON DELETE SET NULL ON UPDATE CASCADE " ,
                            现在用户表有记录(省略其他无关的字段）：</p>
                            <pre>

UserID

ST001
</pre>
<p>而文件表有记录 </p>
<pre>
FileID   FileOwner

1          ST001
</pre>
<p>那 么如果我删除用户表中ST001对应记录时，则根据ON DELETE SET NULL规则，文件表中FileOwner应该被设置为null，动手尝试后也确实如此；如果我将用户表中ST001改为ST003，则根据ON UPDATE CASCADE规则，文件表中FileOwner应该连锁设置为ST003，也的确如此。</p>
<p>外键的使用对于减少数据库冗余性，以及保证数据完整性和一致性有很大作用。</p>
<p>另外注意，如果两张表之间存在外键关系，则MySQL不能直接删除表(Drop Table)，而应该先删除外键，之后才可以删除</p>
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
                article:'ondel',                  
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