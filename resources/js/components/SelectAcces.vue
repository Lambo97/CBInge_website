<template>
    <div>
        <select class="form-control form-content" @change="changeDroit($event)">
            <option v-for="(droit, index) in droits" :key="index+1" :value="index+1" :selected="index+1 == droit_user">{{droit}}</option>
        </select>
    </div>
</template>

<script>
export default {
    data() {
        return {
            droits: ['Admin', 'Bureau', 'Togé', 'Assistant', 'Vieux', 'Baptisé', 'Bleu'],
        };
    },

    props: ['droit_user', 'user_id'],

    watch: {
    },

    methods: {
        changeDroit (event) {
            console.log(event.target.value);
            axios.get('/admin/acces/changeDroit', { params: { user_id: this.user_id, droit: event.target.value}})
                .then(function (response){
                    alert(response.data);
                });
        }
    }
}
</script>
