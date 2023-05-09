<template>
    <img :src="imageUrl">
</template>

<script>
export default {
    name: "MyImage",
    props: {
        src: {
            type: String,
            required: true,
        },
    },
    computed: {
        imageUrl() {
            return `http://localhost:8000/storage/${this.src}`;
        },
    }
}
</script>

<style scoped>

</style>
