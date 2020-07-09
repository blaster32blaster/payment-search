<template>
    <h4>
        There are currently : {{ numberrecords }} records
    </h4>
</template>
<script>
    export default {
        props: {
            numberrecords: {
                default: 0,
                type: Number
            }
        },
        mounted() {
        }
    }
</script>
