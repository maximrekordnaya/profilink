<template>
    <div class="d-flex flex-grow-1 vh-100 bg-main">
        <div class="login-card p-5">
            <div class="text-center mb-3">
                <my-image src="logo2black.png" @click.prevent="redirectTo('/')" class="logo"></my-image>
            </div>
            <h2 class="text-center">Реєстрація</h2>
            <div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" v-model="email" required>
                    <ErrorValidationAuth field="email" :errors="errors"></ErrorValidationAuth>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" v-model="password"
                           required>
                    <ErrorValidationAuth field="password" :errors="errors"></ErrorValidationAuth>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Повторіть пароль</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                           v-model="password_confirmation" required>
                    <ErrorValidationAuth field="password_confirmation" :errors="errors"></ErrorValidationAuth>
                </div>
                <div class="text-center">
                    <button type="submit" class="start-main" @click.prevent="register">Зареєструватись</button>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>Вже є обліковий запис?<a href="#" @click.prevent="redirectTo('/login')"> Увійти</a></p>
            </div>


        </div>
    </div>
</template>

<script>
import MyImage from "@/components/UI/MyImage.vue";
import ErrorValidationAuth from "@/components/UI/Errors/ErrorValidationAuth.vue";


export default {
    name: "Register",
    components: {ErrorValidationAuth, MyImage},
    data() {
        return {
            email: '',
            password: '',
            password_confirmation: '',
            errors: [],
        }
    },
    methods: {
        redirectTo(url) {
            this.$router.push(url)
        },

        register() {
            axios.post('api/register', {
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
            })
                .then(res => {

                    localStorage.setItem('access_token', res.data['access_token'])
                }).catch(err => {
                this.errors = err.response.data.message;
            })
        }
    }
}
</script>

<style scoped>

</style>
