<template>
    <div>
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input class="form-control form-content rounded my-1 py-1" type="text" v-model="keywords" placeholder="Rechercher">
        </div>
        </form>
        <ul v-if="results.length > 0" class="list-unstyled mb-3" style="max-height: 300px; overflow:scroll">
            <li class=" d-block pb-2" v-for="result in results" :key="result.id"><a v-bind:href="link+result.id" class="green-link">{{result.prenom}} {{result.name}} <span v-if="result.surnom">({{result.surnom}})</span> </a> </li>
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
    },

    props:['link']
}
</script>