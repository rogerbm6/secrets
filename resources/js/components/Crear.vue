<template>
        <div :class="{'spinner-border' : loading}">
            <form @submit.prevent="crear">
                <div class="form-group">
                    <label for="formGroupExampleInput">Titulo</label>
                    <input
                        type="text"
                        class="form-control"
                        id="formGroupExampleInput"
                        placeholder="No lo digas..."
                        v-model="secret.title"/>
                </div>
                <div class="form-group">
                    <div class="md-form">
                        <label for="form7">Escribe tu secreto</label>
                        <textarea id="form7" class="md-textarea form-control" rows="3" v-model="secret.content"></textarea>
                    </div>
                </div>
                <div class="form-group my-3">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>
        </div>


</template>


<script>
    export default{
        name : "crear",
        

        data: function(){
            return{
                loading : true,
                secret:{
                    title: "",
                    content: ""
                }
            }
        },
        mounted() {

            this.loading    = false;

        },
        methods:{
            async crear(){
                await axios.post('/api/crear', this.secret)
                    .then((response) => {
                        this.$router.push({name:"secrets"})
                    }).catch((err) => {
                        console.log(err);
                    });
            }
        }
}
</script>