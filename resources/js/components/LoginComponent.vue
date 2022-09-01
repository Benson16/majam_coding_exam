<template>

    <div>

        <div class="login-form">
            <form id="loginform" action="/home">
                <h2 class="text-center">Log in</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" v-model="user.email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" v-model="user.password" required>
                </div>
                <div class="form-group">
                    <button @click="getData" class="btn btn-primary btn-block">Log in</button>
                </div>
                <p class="text-center"><a href="/signup">Create an Account</a></p>
            </form>

        </div>

    </div>
    
</template>

<script>

export default{

    data(){

        return {

            'user': {

                'email': '',
                'password': ''

            }

        };
    },
    methods: {

        getData(e){
            e.preventDefault();
            
            axios.post('/login/submit', this.user)
            .then(function (response) {

                if(response.status == 201){
                    alert("Account doesn't exist");
                    
                }else{
                    alert("login successfully!");
                    document.getElementById("loginform").submit();


                }
            })
            .catch(function (error) {
                console.log(error);
            })
            .then(function () {
                // always executed
            }); 
        }

    }
  
}

</script>

<style>

.login-form {
	width: 340px;
    margin: 50px auto;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}

</style>