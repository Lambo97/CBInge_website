<template>
    <div>
        <vue-audio :file="mp3" />
    </div>
</template>

<script>
import VueAudio from 'vue-audio';
export default {
    components: {
    'vue-audio': VueAudio
    },

    props:['mp3']
}
</script>