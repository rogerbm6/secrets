<template>
    <div>
        <div class="row">
            <div class="col-md-12 text-dark">
                <div class="card h-100 mt-5">
                    <div class="card-body">
                        <h5 class="card-title">{{this.secret.title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">{{this.secret.content}}</p>
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
                secret: {},
                loading: true
            }
        },

        mounted() {

            this.loadSecret();
            this.deleteSecret();

        },

        methods: {
            async loadSecret() {
                //carga los secretos de la API
                axios.get('/api/ver/'+this.$route.params.id)
                    .then((response) => {

                        this.secret = response.data;


                    })
                    .catch(function (error) {
                        console.log(error);
                    });



                    
            },
            async deleteSecret() {
                //carga los secretos de la API
                axios.delete('/api/delete/'+this.$route.params.id)
                    .then((response) => {
                    })
                    .catch(function (error) {
                        console.log(error);
                    });

                    await this.delay(5000);
                    await this.$router.push({name:"secrets"});


                    
            },
            delay(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }
            
        }
    }
</script>