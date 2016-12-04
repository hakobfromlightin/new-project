<template>
    <div v-show="!closed" class="alert alert-{{ type }}">
        <a href="#" class="close" aria-label="close" @click='closeAlert()'>&times;</a>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: ['type'],

        data() {
            return {
                closed: false
            }
        },

        methods: {
            closeAlert() {
                this.closed = true;
            }
        }
    }
</script>

<style lang="sass">

</style>
