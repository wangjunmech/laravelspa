<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Div换行</div>
                    <div class="card-body">
                        <div class="screenbox"> 
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                            <div class="cell">1</div>
                        </div>                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                imgurl:''
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
    .screenbox{
        width: 550px;
        height: auto;
        border: dashed 1px red;
        background-color: green;

    }
    .cell{
        display: inline-block;
        float: left;
        width:100px;
        height:100px;
        border:1px solid red;
        margin: 2px;
        border-radius: 5px;
        display:flex;
        justify-content:center;
        align-items:center;
        background-color: pink;

    }

  
</style>