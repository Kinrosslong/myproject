<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Laravel About Page</div>

                    <div class="panel-body">
                        I'm an example component!
                        我是about组件^_^
                        this is test
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            // console.log('this is About')
              axios.get('/api/posts').then(res => {
                console.log(res);
                this.posts = res.data;
                console.log(res.data);
                console.log(789);
            })
        }
    }
</script>
