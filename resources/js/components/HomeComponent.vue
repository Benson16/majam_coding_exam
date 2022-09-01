<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>

                    <div class="card-body">
                        <tbody>
                            <tr v-for="item in fullnameList" :key="item.id">
                                <td>{{ item.fullname }}</td>
                            </tr>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['fullname'],

        data(){

            return{
                fullnameList: this.fullname
            }

        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
