<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                   <passport-clients></passport-clients>
                </div>
                <hr>
                <div>
                    <passport-authorized-clients></passport-authorized-clients>
                </div>
                <hr>
                <div>                    
                    <passport-personal-access-tokens></passport-personal-access-tokens>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
 
    export default {
        mounted() {
        }
    };


</script>
