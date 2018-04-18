<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4>{{posts.title}}</h4>
                    </div>
                    <div class="panel-body">
                        <div class="bs-callout bs-callout-danget"> {{posts.body}}</div>
                    </div>
                        <!-- <p>{{posts.body}}</p> -->
                </div>
            </div>
        </div>
    </div>
</template>
<style>
</style>
<script>
    export default {
        data() {
            return {
                posts: {},
            }
        },
        mounted() {
            // this.initShow();
            axios.get('/api/posts/' + this.$route.params.id).then(res => {
                    this.posts = res.data;
                })
        },
        methods: { 
            //初始化
            initShow() {
                axios.get('/api/posts/..' + this.$route.params.id).then(res => {
                    console.log(res);
                    // this.posts = res.data;
                })
            },
        }
    }
</script>
