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

{{--            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/img/apple-touch-icon.png") }}">--}}
{{--            <link rel="icon" type="image/png" href="{{ asset("/img/favicon-32x32.png") }}" sizes="32x32">--}}
{{--            <link rel="icon" type="image/png" href="{{ asset("/img/favicon-16x16.png") }}" sizes="16x16">--}}
{{--            <link rel="manifest" href="{{ asset("/img/manifest.json") }}">--}}
{{--            <link rel="mask-icon" href="{{ asset("/img/safari-pinned-tab.svg") }}" color="#5bbad5">--}}
            <meta name="theme-color" content="#13A826">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
            <link rel="stylesheet"  href="{{ asset('css/app.css') }}">
            <script src="{{ mix('js/app.js') }}" defer></script>
            <style>
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                    }
                }
            </style>
        </head>

        <body class="h-100 text-center text-white bg-dark">
            <div id="app">

                <div class="first-block">
                    <div class="taro-image"></div>
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
                                        <div class="col-md-6">
                                            <div class="main-image">
                                                <div class="star-image"></div>
{{--                                                <div class="loaded" style="background-image: url('https://thumb.tildacdn.com/tild6437-6431-4534-b932-643063363961/-/cover/42x15/center/center/-/format/webp/image.png;');"></div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-galaxy-id="364059575" class="t826__galaxy" style="position: absolute; z-index: 0;">
                                    <div id='stars'></div>
                                    <div id='stars2'></div>
                                    <div id='stars3'></div>
                                </div>
                            </div>


                        </main>
                </div>


                    <footer class="mt-auto text-white-50">
                        <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
                    </footer>
                </div>

            </div>
        </body>
</html>

