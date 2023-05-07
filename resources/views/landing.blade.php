<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profilink</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>


<header>
    <div class="header-nav">
        <img class="logo" src="{{asset('storage/logo2.png')}}" alt="">
        <div class="nav-buttons">
            <a href="" class="sign_in">
                <button class="sign_in-button">Вхід</button>
            </a>
            <a href="" class="start">
                <button>Почати безкоштовно</button>
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
                    <button class="start-main">Почати безкоштовно</button>
                </a>
            </div>
        </div>
        <div class="image-container mb-5">
            <img src="{{asset('storage/landingMain/example2.jpg')}}" alt="Приклад 1" class="small-image first-image">
            <img src="{{asset('storage/landingMain/example1.jpg')}}" alt="Приклад 2" class="center-image">
            <img src="{{asset('storage/landingMain/example3.jpg')}}" alt="Приклад 3" class="small-image last-image">
        </div>
    </div>

    <div class="container-fluid gray2-container p-4">
        <div class="text-center">
            <h2>Зробіть сайт помічник</h2>
            <p>Для себе чи для свого бізнесу. Без коду. У вашому смартфоні.</p>
            <div class="text-center">
                <a href="#" class="">
                    <button class="start-main">Почати безкоштовно</button>
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
                        <button class="start-main">Почати безкоштовно</button>
                    </a>
                </div>

            </div>
            <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('storage/landingMain/feedback.png')}}" alt="" class="feedback-img">
            </div>

        </div>

    </div>


    <div class="container-fluid gray2-container p-4">
        <div class="row container m-auto">
            <div class="col-sm-12 col-md-6 order-last order-md-0 d-flex justify-content-center align-items-center">
                <img src="{{asset('storage/landingMain/products.png')}}" alt="products" class="feedback-img">
            </div>
            <div class="col-sm-12 col-md-6 order-first order-md-1 col-content">
                <div class="col-content-text">
                    <h2>Iнформація про продукти та послуги</h2>
                    <p>Якщо ви пропонуєте будь-які продукти чи послуги, то ви можете додати інформацію про них на своїй
                        сторінці profilink'а</p>
                </div>
                <div class="">
                    <a href="#" class="">
                        <button class="start-main">Почати безкоштовно</button>
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
                        <button class="start-main">Почати безкоштовно</button>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('storage/landingMain/analitics.png')}}" alt="Аналитика" class="feedback-img">
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
                    <button class="start-main">Почати безкоштовно</button>
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


{{--    <nav class="navbar navbar-expand-md">--}}
{{--        <div class="container">--}}
{{--            <a href="#" class="navbar-brand"><img class="w-50" src="{{asset('storage/logo.png')}}"></a>--}}
{{--            <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link"><p class="menutext">Вхід</p></a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link"><p class="menutext">Реєстрація</p></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <div class="container">--}}
{{--    <nav class="navbar">--}}
{{--        <a class="navbar-brand" href="#">--}}
{{--            <img src="{{asset('storage/logo.png')}}" width="30" height="30" class="d-inline-block align-top img-fluid w-25" alt="">--}}
{{--        </a>--}}

{{--        <div class="">--}}
{{--            <ul >--}}
{{--                <li class="">--}}
{{--                    <a class="nav-link" href="#"><p class="menutext">Вхід</p></a>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="nav-link" href="#"><p class="menutext">Реєстрація</p></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <div class="d-flex justify-content-end" id="navbarNav">--}}
{{--            <ul class="navbar-nav d-inline-flex">--}}
{{--                <li class="">--}}
{{--                    <a class="nav-link" href="#"><p class="menutext">Вхід</p></a>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a class="nav-link" href="#"><p class="menutext">Реєстрація</p></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--    </div>--}}

</body>
</html>
