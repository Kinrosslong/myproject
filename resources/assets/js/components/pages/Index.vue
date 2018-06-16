<template>
    <div class="main">
		<div class="login-form">
			<h1>Member Login</h1>
				<div class="head">
					<img src="../../../images/admin/user.png" alt=""/>
				</div>
				<form>
					<input type="text" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
					<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					<div class="submit">
						<input type="submit" onclick="myFunction()" value="LOGIN" >
					</div>	
					<p><a href="#">Forgot Password ?</a></p>
				</form>
		</div>
	</div>
</template>


<script>
    export default {
        data() {
            return {
                posts: [],
                radio: '1',
                input: '123',
                switch1: true,
                switch2: true,
                formInline: {
                    user: '',
                    region: ''
                },
                total: 0,
                pagesize: 5,
                dialogFormVisible: false,
                dialogEdit: {
                    name: '',
                    region: '',
                    body:''
                },
                formLabelWidth: '120px',
            }
        },
        // mounted() {
            // this.initShow(1);
        // },
        methods: { 
            onSubmit() {
                console.log('submit!');
                console.log(this.formInline.region);
                console.log(this.formInline.user);
            },
            //初始化
            // initShow(pagenum) {
            //     axios.get('/api/posts',{params:{pagenum:pagenum, pagesize:this.pagesize}}).then(res => {
            //         console.log(res);
            //         this.total = res.data.total;
            //         this.posts = res.data.data;
            //     })
            // },
            edit() {
                this.dialogFormVisible = false;
                //js es6的新写法吧可能
                let fromData = {
                    neme: dialogEdit.name,
                    region: dialogEdit.region,
                    body: dialogEdit.body
                }
                //vue 路由地址跳转  name 就是 routes.js里面的路由方法名称
                this.$router.push({name: postEdit});
                console.log();
            }
        }

    }
</script>
