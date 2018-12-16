
<template>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Total de Clases: {{ classes.length }}</th>
          <th v-for="_class in classes" scope="col">{{ _class }}</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(objective, index) in objectives">
          <th scope="row">{{ objective }}</th>
          <td v-for="relation in relations[index]">{{ relation }}</td>
        </tr>  
      </tbody>
    </table>
</template>

<script>
    export default {
        data () {
            return {
                classes: [],
                objectives: ['Objetivo1', 'Objetivo2', 'Objetivo3', 'Objetivo4', 'Objetivo5'],
                relations: [
                    ['Relation00', 'Relation01', ''],
                    ['', 'Relation11', 'Relation12'],
                    ['', '', 'Relation22']
                ]               
            }
        },
        mounted(){
            axios
                .get('api/courses')
                .then(response => {
                    this.classes = response.data
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
</script>