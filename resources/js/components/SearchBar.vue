<template>
    <div>
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input style="max-width:118px; height:30px;" class="form-control form-content rounded-pill my-1 py-1" type="text" v-model="keywords" placeholder="Répertoire">
        </div>
        </form>
        <ul v-if="results.length > 0" class="list-unstyled mb-3" style="max-height: 300px; max-width:200px; overflow:scroll;  scrollbar-color:#168E33;
  scrollbar-width: thin;">
            <li class=" d-block pb-2" v-for="result in results" :key="result.id"><a v-bind:href="'/profile/show/'+result.id" class="green-link">{{result.prenom}} {{result.name}} <span v-if="result.surnom">({{result.surnom}})</span> </a> </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            keywords: null,
            results: []
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
        }
    }
}
</script>
<style>
::-webkit-scrollbar {
  width: 0px;  /* Remove scrollbar space */
  background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
  background: rgb(182, 199, 230);
  border-radius: 50px;
}
</style>