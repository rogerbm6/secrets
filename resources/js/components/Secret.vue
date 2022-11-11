<template>
    <div :class="{'spinner-border' : loading}">
        <div class="p-4 m-4 text-dark" >
            <div class="row">

                <div class="col-md-4 my-2" v-for="secret in secrets">

                    <div class="card h-100">
                        <div class="card-body">
                            <router-link :to='{name: "ver", params: {id:secret.id}}' class="card-title">{{ secret.title }}</router-link>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</template>


<script>
    export default{

        data: function() {
            return {
                secrets :[],
                loading : true,
            }
        },

        mounted() {

            this.loadSecrets();

        },

        methods: {
            loadSecrets: function() {
                //carga los secretos de la API
                axios.get('/api/secrets')
                    .then((response) => {
                        this.secrets    = response.data.data;
                        this.loading    = false;
                    })
                    .catch(function (error){
                        console.log(error);
                    });

            },
        }
    }

</script>