<template>
    <div v-if="errors.hasOwnProperty(field)">
        <ul class="errors-list text-center mt-1">
            <li v-for="error in errors[field]" class="text-danger">{{error}}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "ErrorValidationAuth",
    props:{
        errors:{
            type: Object,
            required: true,
        },
        field:{
            type: String,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
