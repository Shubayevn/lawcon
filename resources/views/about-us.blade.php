<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'SaNiDa') }}</title>
<link href="public/css/about/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="public/css/about/style.css" rel="stylesheet" type="text/css" />
<script src="public/js/modernizr.js"></script>
</head>
<body>
<section style="padding: 0; height: 0;">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <header>
        <a href="/" class="logo">{{ config('app.name', 'LAWCON') }}</a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="/" style="--i:1;">Главная</a></li>
            <li><a href="/service" style="--i:2;">Услуги</a></li>
            <li><a href="/portfolio" style="--i:3;">Портфолио</a></li>
            <li><a href="/about-us" style="--i:4;">О компании</a></li>
            <li><a href="/contact" style="--i:5;">Контакты</a></li>
        </ul>
    </header>
</section>
<!--- PAGE LOADING --->
    <div class="preloading fadeIn">


        <!--- THE END NAV BAR --->

        <div class="container">

            <!--- HERO HEADER WORK SLIDER --->
            <div class="row">
                <div class="col-md-12">
                    <div class="tag-about" style="position: absolute; text-align: center; height: 100%; padding-top: 50vh; z-index: 100000; width: 100%">
                        <p style="font-size: 45px; font-weight: 500; text-shadow: 0 1px 5px #FFFFFF">SaNiDa</p>
                        <p style="font-size: 35px; text-shadow: 0 0 5px #FFFFFF">Мы защитим ваш объект!</p>
                    </div>
                    <div class="slider-bg" >
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="public/images/img1.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h1> </h1>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="public/images/img2.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h1> </h1>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="public/images/img3.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h1> </h1>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--- THE END HERO HEADER WORK SLIDER --->

            <!--- ABOUT --->
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="lg-col-bg" >
                        <div class="lg-col-ttl2"> О нас </div>
                        <div class="lg-col-wrt">
                            Основная стратегия развития компании направлена на комплексную реализацию инвестиционных проектов строительства производственных и коммерческих объектов недвижимости, применение действенных технологий проектирования и строительства этих объектов, осуществление строгого контроля качества процесса строительства.
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="lg-col-bg2" >
                        <img src="public/images/img4.jpg" alt="" class="img-lg-col2">
                    </div>
                </div>

            </div>
            <!--- THE END ABOUT CLIENT --->

            <!--- WORK PRESENTATION --->
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="lg-col-bg" >
                        <div class="lg-col-ttl2"> Основная стратегия развития </div>
                        <div class="lg-col-wrt2">
                            Компания направлена на комплексную реализацию инвестиционных проектов строительства производственных и коммерческих объектов недвижимости, применение действенных технологий проектирования и строительства этих объектов, осуществление строгого контроля качества процесса строительства.
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="lg-col-bg" >
                        <div class="lg-col-ttl2"> Why We Do It </div>
                        <div class="lg-col-wrt2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
                    </div>
                </div>

            </div>
            <!--- THE END WORK PRESENTATION --->

            <!--- ABOUT PHOTO --->
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="lg-col-bg" >
                        <img src="public/images/img5.jpg" alt="" class="img-lg-col4">
                    </div>
                </div>
            </div>
            <!--- THE ABOUT PHOTO --->

            <!--- WORK PRESENTATION --->
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="lg-col-bg" >
                        <div class="lg-col-ttl3">Наши усуги</div>
                        <div class="lg-col-wrt3">
                            <ul>
                                @foreach($posts as $post)
                                    <li class="serviceL"><a href="{{ "$post->link" }}">{{"$post->title"}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <div class="lg-col-bg" >
                        <div class="lg-col-ttl3">Карьера</div>
                        <div class="lg-col-wrt3">jobs@yoursite</div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <div class="lg-col-bg" >
                        <div class="lg-col-ttl3"> Свяжитесь с нами </div>
                        <div class="lg-col-wrt3">hello@yoursite</div>
                    </div>
                </div>

            </div>
            <!--- THE END WORK PRESENTATION --->

        </div>

        <!--- WORKS & LOGOS BUTTON --->
        <!--- THE END WORKS & LOGOS BUTTON --->

        <!--- FOOTER --->
        <!--- THE END FOOTER --->

        <!--- SCRIPTS --->
        <script src="public/js/jquery-2.1.1.js"></script>
        <script src="/public/js/main.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script>
            let imgBx = document.querySelectorAll('.imgBx');
            imgBx.forEach(popup => popup.addEventListener('click', () =>{
                popup.classList.toggle('active')
            }))

            function toggleMenu(){
                var menuToggle = document.querySelector('.toggle');
                var navigation = document.querySelector('.navigation');
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');
            }
        </script>
        <!--- THW END SCRIPTS --->

    </div>

<section style="height: 0;">        <div class="footer">
        <ul class="sci">
            <li><a href="#" style="--i:9">E-Mail</a></li>
            <li><a href="#" style="--i:8">WhatsApp</a></li>
            <li><a href="#" style="--i:7">Instagram</a></li>
            {{--                <li><a href="#" style="--i:8">Политика конфеденциальности</a></li>--}}
        </ul>
        <p class="copyrightText">©Copyright {{ config('app.name', 'LAWCON') }} <?php echo date('Y'); ?></p>
    </div>
</section>
</body>
</html>
