<!doctype html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta property="og:type" content="website">
            <meta property="og:image" content="#">
            <link rel="image_src" href="#">
            <meta property="og:title" content="">
            <meta property="og:description" content="">
            <meta property="pageDescription" content="">
            <meta property="twitterDescription" content="">

            <meta name="Keywords" content="{{ isset($keywords) ? $keywords : 'Клумба' }}">
            <meta name="description" content="{{ isset($description) ? $description : 'Клумба' }}" />
            <link rel="canonical" href="{{ isset($canonical) ? $canonical : 'https://klumba.ru/' }}"/>
            <title>Dilayra</title>

            <link rel="apple-touch-icon" sizes="57x57" href="{{ asset("/icons/apple-icon-57x57.png") }}">
            <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("/icons/apple-icon-60x60.png") }}">
            <link rel="apple-touch-icon" sizes="72x72" href="{{ asset("/icons/apple-icon-72x72.png") }}">
            <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("/icons/apple-icon-76x76.png") }}">
            <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("/icons/apple-icon-114x114.png") }}">
            <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("/icons/apple-icon-120x120.png") }}">
            <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("/icons/apple-icon-144x144.png") }}">
            <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("/icons/apple-icon-152x152.png") }}">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/icons/apple-icon-180x180.png") }}">
            <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset("/icons/android-icon-192x192.png") }}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/icons/favicon-32x32.png") }}">
            <link rel="icon" type="image/png" sizes="96x96" href="{{ asset("/icons/favicon-96x96.png") }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/icons/favicon-16x16.png") }}">
            <link rel="manifest" href="{{ asset("/icons/manifest.json") }}">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="{{ asset("/icons/ms-icon-144x144.png") }}">
            <meta name="theme-color" content="#ffffff">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
            <link rel="stylesheet"  href="{{ asset('css/app.css') }}">
            <script src="{{ mix('js/app.js') }}" defer></script>
        </head>

        <body class="h-100 text-center text-white bg-dark">
            <div id="app">

                <div class="block1">
                    <div class="galaxy-wrap">
                        <div id='stars'></div>
                        <div id='stars2'></div>
                        <div id='stars3'></div>
                    </div>
                    <div class="taro-image"></div>
                    <div class="star-image"></div>
                    <div class="dark-men"></div>
                    <div class="container-wrap d-flex flex-column">
                        <header class="header">
                            <div>
                                <div class="title">САМЫЙ СИЛЬНЫЙ МАГ КАЗАНИ В ЛЮБОВНОЙ СФЕРЕ</div>
                                <nav class="nav nav-masthead justify-content-center float-md-end">
                                    <a class="nav-link active nav-item" aria-current="page" href="#">ОБО МНЕ</a>
                                    <a class="nav-link nav-item" href="#">УСЛУГИ</a>
                                    <a class="nav-link nav-item" href="#">ОТЗЫВЫ</a>
                                    <a class="nav-link nav-item" href="#">ПРОВЕРКА СОВМЕСТИМОСТИ</a>
                                </nav>
                            </div>
                        </header>

                        <main>
                            <div class="main">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="main-title">
                                                <h1 class="title">ЧËРНЫЙ МАГ ДИЛЯРА</h1>
                                                <p class="desc">Если Вы оказались на этом сайте<br>— значит Вам нужна помощь.</p>
                                                <a href="#" class="open-form btn btn-lg">Получить помощь<span class="flare"></span></a>
                                                <p class="bottom-desc">Все, что нужно от Вас — желание решить<br>проблему, которая лишила Вас сна.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 position-relative">
                                            <div class="main-info">
                                                <a class="phone" href="tel:+79155645722">+7(915) 564-57-22</a>
                                                <div class="social-links-wrap">
                                                    <div class="social-links"></div>
                                                    <div class="social-links-text">Cвязь по мессенджеру</div>
                                                </div>
                                                <div class="social-links-types">Telegram, WhatsApp, Viber</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </main>
                </div>
                    <div class="main-footer">
                        <div class="shadow"></div>
                        <div class="border-italic"></div>
                        <div class="text">Потомственный маг, свой дар черной магии я унаследовал от бабушки. Больше 10 лет я помогаю людям наладить любовную сферу жизни.</div>
                    </div>
                </div>

                <div class="block2">

                </div>
            </div>
        </body>
</html>

