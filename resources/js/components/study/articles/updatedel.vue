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
                        <h1 id="1-概述"><a name="t0"></a><a name="t0"></a>update & delete 更新和删除</h1>
                        <pre>
DELETE FROM student;

DELETE FROM student
WHERE student_id = 4;

DELETE FROM student
WHERE major = 'Sociology' AND name = 'Kate';

UPDATE student
SET major = 'Undecided';

UPDATE student
SET name = 'Johnny'
WHERE student_id = 4;

UPDATE student
SET major = 'Biological Sciences'
WHERE major = 'Biology';

UPDATE student
SET major = 'Biosociology'
WHERE major = 'Biology' OR major = 'sociology'

UPDATE student
SET major = 'Undecided', name = 'Tom'
WHERE student_id = 4;
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
                article:'updatedel',                  
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