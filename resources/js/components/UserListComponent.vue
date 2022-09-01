
<template>

    <div>

        <section class="h-100 h-custom" style="background-color: #F3E0B5;">

            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                        class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                        alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                        <form class="px-md-2" @submit.prevent="saveData()">

                            <div class="form-outline mb-4">
                                <label class="form-label" >Full Name</label>
                                <input  class="form-control" v-model="user.full_name" required>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" >Email</label>
                                <input type="text" class="form-control"  v-model="user.email_address" required>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" >Nominated Password</label>
                                <input type="password" class="form-control"  v-model="user.nominated_password" required>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" >Confirm Password</label>
                                <input type="password" class="form-control" v-model="user.confirmed_password" required>
                            </div>

                            <div class="mb-4">

                            <select v-model="user.assigned_role" required>
                                <option disabled value="">Please select one</option>
                                <option>Role1</option>
                                <option>Role2</option>
                                <option>Role3</option>
                            </select>

                            </div>


                        <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>


    </div>

    
    
</template>

<script>

export default {   

    data(){
        return{
            'user': {
                'full_name': '',
                'email_address': '',
                'nominated_password': '',
                'confirmed_password': '',
                'assigned_role': ''
                
            }
        };
    },
    methods: {
        saveData() {
            axios.post('/signup/create', this.user).then(
                response => {
                    console.log(response);
                    if(response.status == 200){
                        alert("Success!!! Your data is successfully saved");
                    }else if(response.status == 201){
                        alert("Failed!!! (full name and email already exist)");
                    }else if(response.status == 202){
                        alert("Failed!!! (full name already exist)");
                    }else if(response.status == 203){
                        alert("Failed!!! (email already exist)");
                    }
                }
            ). catch(error => {
                console.log('Error here');
            })
        }
    }

}
</script>