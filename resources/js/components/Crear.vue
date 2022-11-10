<template>
        <div>
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
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>
        </div>


</template>


<script>
    export default{
        name : "crear",
        data(){
            return{
                secret:{
                    title: "",
                    content: ""
                }
            }
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