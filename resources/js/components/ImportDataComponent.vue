<template>
    <div class="importer-component-wrapper">
        <div v-if="!loading" class="importer-button-wrapper">
            <button
                class="btn-primary"
                type="button"
                @click="broadcast()"
            >
                Import Payments Data
            </button>
        </div>
        <div v-else class="importer-loading-wrapper">
            <vue-simple-spinner
                line-fg-color="#009900"
            >
            </vue-simple-spinner>
        </div>
    </div>
</template>
<script>
    import Spinner from 'vue-simple-spinner'
    export default {
        components: {
            Spinner
        },
        data() {
            return {
                messages: [],
                loading: false,
                size: "3em",
                color: "#8B0000"
            }
        },
        methods: {
            broadcast() {
                this.loading = true
                axios.get('/api/import-data');
            }
        },
        mounted() {
            window.Echo.channel('global')
            .listen('TestEvent', (e) => {
                this.loading = false;
                this.messages.unshift(e.data);
                this.$emit('successImport')
            });
        }
    }
</script>
