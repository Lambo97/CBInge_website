<template>
    <div>
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input class="form-control form-content rounded-pill mb-5" type="text" v-model="keywords" placeholder="Utilisateur">
        </div>
        </form>
        <table class="table text-light" style="max-height: 500px; overflow: scroll" v-if="results.length > 0">
            <thead>
                <tr class="approve_title">
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Année Baptême</th>
                    <th scope="col">Droit</th>
                    <th scope="col">Photo</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="result in results" :key="result.id">
                    <td><a v-bind:href="'/profile/show/'+result.id" class="green-link">{{result.prenom}}</a></td>
                    <td><a v-bind:href="'/profile/show/'+result.id" class="green-link">{{result.name}}</a></td>
                    <td><a v-bind:href="'/profile/show/'+result.id" class="green-link">{{result.annee_bapteme}}</a></td>
                    <td><select-acces v-bind:droit_user="result.droit" v-bind:user_id="result.id" ></select-acces></td>
                    <td><input type="checkbox" :checked="result.admin_photo == 1" @change="photo(result.id)"></input></td>
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
            droits: {'1':'Admin', '2':'Bureau', '3':'Togé', '4':'Assistant', '5':'Vieux', '6':'Baptisé', '7':'Bleu'}
        };
    },

    watch: {
        keywords(after, before) {
            this.fetch();
        }
    },

    methods: {
        fetch() {
            axios.get('/profile/search', { params: { keywords: this.keywords } })
                .then(response => this.results = response.data)
                .catch(error => {});
        },

        photo(user_id) {
            axios.get('/admin/acces/changePhoto', { params: { user: user_id } })
                .then(function(response){
                    alert(response.data);
                })
        }
    },

    components: {
      'select-acces': SelectAcces,
    }

    
}
</script>
