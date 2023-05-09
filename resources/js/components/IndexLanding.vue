<template class="landing">
    <header>
        <div class="header-nav">

            <my-image src="logo2.png" class="logo"></my-image>
            <div class="nav-buttons">
                <a href="" class="sign_in">
                    <my-button class="sign_in-button" :src="'/login'">Вхід</my-button>
<!--                    <button class="sign_in-button">Вхід</button>-->
                </a>
                <a href="" class="start">
                    <my-button :src="'/register'">Почати безкоштовно</my-button>
<!--                    <button>Почати безкоштовно</button>-->
                </a>
            </div>
        </div>
        <div>
            <h1 class="header-text text-center">Одне посилання, багато можливостей</h1>
            <p class="header-text text-center header-text-2">Бережи всі свої посилання в одному місці</p>
        </div>
    </header>

    <main class="">
        <div class="container-fluid gray-container p-4">
            <div class="">
                <h2 class="text-center">Додавання посилань на соціальні мережі та інші веб-сайти.</h2>
                <p class="text-center">Користувач може додати посилання на свої профілі у соціальних мережах, свій веб-сайт,
                    блог та інші корисні ресурси.</p>
                <div class="text-center mb-5">
                    <a href="#" class="">
                        <my-button class="start-main" :src="'/register'">Почати безкоштовно</my-button>
<!--                        <button class="start-main">Почати безкоштовно</button>-->
                    </a>
                </div>
            </div>
            <div class="image-container mb-5">
                <my-image src="landingMain/example2.jpg" alt="Приклад 1" class="small-image first-image"></my-image>
                <my-image src="landingMain/example1.jpg" alt="Приклад 2" class="center-image"></my-image>
                <my-image src="landingMain/example3.jpg" alt="Приклад 3" class="small-image last-image"></my-image>
            </div>
        </div>

        <div class="container-fluid gray2-container p-4">
            <div class="text-center">
                <h2>Зробіть сайт помічник</h2>
                <p>Для себе чи для свого бізнесу. Без коду. У вашому смартфоні.</p>
                <div class="text-center">
                    <a href="#" class="">
                        <my-button class="start-main" :src="'/register'">Почати безкоштовно</my-button>
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid gray-container p-4">
            <div class="row container m-auto">
                <div class="col-sm-12 col-md-6 col-content">
                    <div class="col-content-text">
                        <h2>Форма зворотного зв'язку</h2>
                        <p>Відгуки дозволяють користувачам висловити свої думки та враження про продукт, послугу або
                            власника
                            профілю. Вони можуть допомогти покращити якість продукту чи послуги, а також підвищити довіру до
                            бренду.</p>
                    </div>
                    <div class="">
                        <a href="#" class="">
                            <my-button class="start-main" :src="'/register'">Почати безкоштовно</my-button>
                        </a>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center">
                    <my-image src="landingMain/feedback.png" alt="Приклад 1" class="feedback-img"></my-image>
                </div>

            </div>

        </div>


        <div class="container-fluid gray2-container p-4">
            <div class="row container m-auto">
                <div class="col-sm-12 col-md-6 order-last order-md-0 d-flex justify-content-center align-items-center">
                    <my-image src="landingMain/products.png" alt="Приклад 1" class="feedback-img"></my-image>
                </div>
                <div class="col-sm-12 col-md-6 order-first order-md-1 col-content">
                    <div class="col-content-text">
                        <h2>Iнформація про продукти та послуги</h2>
                        <p>Якщо ви пропонуєте будь-які продукти чи послуги, то ви можете додати інформацію про них на своїй
                            сторінці profilink'а</p>
                    </div>
                    <div class="">
                        <a href="#" class="">
                            <my-button class="start-main" :src="'/register'">Почати безкоштовно</my-button>
                        </a>
                    </div>
                </div>


            </div>
        </div>

        <div class="container-fluid gray-container p-4">
            <div class="row container m-auto">

                <div class="col-sm-12 col-md-6 col-content">
                    <div class="col-content-text">
                        <h2>Аналітика відвідуваності</h2>
                        <p>Ви можете додати функцію аналітики, щоб відстежувати кількість відвідувачів вашої сторінки
                            profilink'а та вивчати їхню поведінку на вашій сторінці.</p>
                    </div>
                    <div class="">
                        <a href="#" class="">
                            <my-button class="start-main" :src="'/register'">Почати безкоштовно</my-button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center">
                    <my-image src="landingMain/analitics.png" alt="Приклад 1" class="feedback-img"></my-image>
                </div>

            </div>

        </div>

        <div class="container-fluid gray2-container p-4 d-flex justify-content-center">
            <div class="text-center final-w-50">
                <h2>Приєднуйся зараз!</h2>
                <p>У вас є можливість зберігати всі свої посилання в одному місці, включаючи портфоліо, способи зв'язку зі
                    мною, відгуки, аналітику та багато іншого, використовуючи Profilink.</p>
                <div class="">
                    <a href="#" class="">
                        <my-button class="start-main" :src="'/register'">Почати безкоштовно</my-button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container-fluid p-4 ">
            <div class="row">
                <div class="col-12 d-flex justify-content-center col-content-text">
                    <p class="me-3">Політика конфіденційності</p>
                    <p>Умови використання</p>
                </div>
                <div class="col-12 text-center">
                    profilink.me © 2023
                </div>
                <div class="col-12 text-center">
                    Made in Ukraine
                </div>

            </div>
        </div>

    </footer>
</template>

<script>
import MyImage from "@/components/UI/MyImage.vue";
import MyButton from "@/components/UI/MyButton.vue";

export default {
    name: "IndexLanding",
    components: {MyButton, MyImage},
    methods:{
        getImageUrl(filename) {
            return filename;
        },

    },

}
</script>

<style scoped>

</style>
