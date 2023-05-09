<template>
<button @click.prevent="redirectToLogin"><slot></slot></button>
</template>

<script>
export default {
    name: "MyButton",
    props:{
      src:{
          type: String,
          required: true,
      }
    },
    methods:{
        redirectToLogin(){
            this.$router.push(this.src)
        }
    }
}
</script>

<style scoped>

</style>
