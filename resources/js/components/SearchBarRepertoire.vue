<template>
    <div>
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input class="form-control form-content rounded-pill mb-5" type="text" v-model="keywords" placeholder="Rechercher un baptisé, une fonction ou une année">
        </div>
        </form>
        <table class="table text-light" style="max-height: 500px; overflow: scroll" v-if="results.length > 0">
            <thead>
                <tr class="approve_title">
                    <th scope="col">Baptisé</th>
                    <th scope="col">Fonction</th>
                    <th scope="col">Année</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="result in results" :key="result.user_id*31*result.fonction_id*51*result.annee/93">
                    <td><a v-bind:href="'/profile/show/'+result.user_id" class="green-link">{{result.prenom}} {{result.name}} <span v-if="result.surnom">({{result.surnom}})</span></a></td>
                    <td>{{result.nom}}</td>
                    <td>{{result.annee}}</td>
                    <td><a v-bind:href="'/admin/repertoire/deleteFonction/'+result.user_id+'/'+result.fonction_id+'/'+result.annee" class="green-link"><i class="far fa-trash-alt"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import SelectAcces from './SelectAcces.vue'
export default {
    data() {
        return {
            keywords: null,
            results: [],
        };
    },

    watch: {
        keywords(after, before) {
            this.fetch();
        }
    },

    methods: {
        fetch() {
            axios.get('/admin/repertoire/searchFonction', { params: { keywords: this.keywords } })
                .then(response => this.results = response.data)
                .catch(error => {});
        }
    },

    components: {
      'select-acces': SelectAcces,
    }

    
}
</script>
