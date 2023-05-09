<template>
    <div class="d-flex flex-grow-1 vh-100 bg-main">
        <div class="login-card p-5">
            <div class="text-center mb-3">
            <my-image src="logo2black.png" @click.prevent="redirectTo('/')" class="logo"></my-image>
            </div>
            <h2 class="text-center">Вхід</h2>
            <div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" v-model="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" v-model="password" required>
                </div>
                <ErrorValidationAuth field="message" :errors="errors"></ErrorValidationAuth>
                <div class="text-center">
                    <button type="submit" class="start-main" @click.prevent="login">Войти</button>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>Немає облікового запису? <a href="#" @click.prevent="redirectTo('/register')">Зареєструватись</a></p>
                <p>Забули пароль? <a href="#">Відновити</a></p>
            </div>


        </div>
    </div>
</template>

<script>
import MyImage from "@/components/UI/MyImage.vue";
import ErrorValidationAuth from "@/components/UI/Errors/ErrorValidationAuth.vue";

export default {
    name: "SignIn",
    components: {ErrorValidationAuth, MyImage},
    data(){
        return{
            email: '',
            password: '',
            errors: [],
        }
    },

    methods:{
        redirectTo(url){
            this.$router.push(url)
        },

        login(){
            axios.post('api/auth/login', {
                email: this.email,
                password: this.password,
            }).then(res=>{
                this.errors = [];
                localStorage.setItem('access_token', res.data['access_token'])
            }).catch(err=>{
                this.errors = err.response.data
            })
        }
    }

}
</script>

<style scoped>


</style>
