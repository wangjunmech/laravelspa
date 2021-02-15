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
                        <h1 id="1-概述"><a name="t0"></a><a name="t0"></a>create table 创建表</h1>

                        <p>INT                           -- Whole Numbers</p>
                        <p>DECIMAL(M,N)                  -- Decimal Numbers - Exact Value</p>
                        <p>VARCHAR(l)                    -- String of text of length l</p>
                        <p>BLOB                          -- Binary Large Object, Stores large data</p>
                        <p>DATE                          -- 'YYYY-MM-DD'</p>
                        <p>TIMESTAMP                     -- 'YYYY-MM-DD HH:MM:SS' - used for recording events</p>
<pre>
                        -- Creating tables
                        CREATE TABLE student (
                          student_id INT PRIMARY KEY,
                          name VARCHAR(40),
                          major VARCHAR(40)
                          -- PRIMARY KEY(student_id)
                        );

                        DESCRIBE student;
                        DROP TABLE student;
                        ALTER TABLE student ADD gpa DECIMAL;
                        ALTER TABLE student DROP COLUMN gpa;
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
                article:'createtable',                  
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