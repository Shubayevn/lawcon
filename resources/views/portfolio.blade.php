{{--@extends('layouts.main')--}}

{{--@section('content')--}}
{{--    <p class="contName">Портфолио</p>--}}

{{--@endsection--}}
    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="K!sbag Design Studio" />

    <link href="/public/css/about/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/public/css/about/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">

    <script src="/public/js/modernizr.js"></script>

    <title>Портфолио</title>

</head>
<body>
<section style="padding: 0; height: 0;">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <header>
        <a href="/" class="logo">LAWCON</a>
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

        <!--- HERO HEADER --->
        <div class="row">
            <div class="col-md-12">
                <div class="works-hero-bg" >
                    <h1 class="fade-anime-top"> Портфолио </h1>
                    <h2 class="fade-anime-bottom"> Завершенные проекты </h2>
                </div>
            </div>
        </div>
        <!--- THE END HERO HEADER --->


        <!--- WORK PAGE PROJECTS --->
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="prjct-bg" >
                    <a target="_blank" href="https://medium.com"> <img src="public/images/img1.jpg" alt="" class="img-prjct-wrk"> </a>
                    <div class="prjct-wrt-left-wrk"> </div>
                    <div class="shw-cs2"> Post Title </div>
                    <div class="shw-cs"> Photography . Visual Design . Web Design </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
                <div class="prjct-bg" >
                    <a target="_blank" href="https://medium.com"> <img src="public/images/img4.jpg" alt="" class="img-prjct-wrk"> </a>
                    <div class="prjct-wrt-right-wrk"> </div>
                    <div class="shw-cs2"> Post Title </div>
                    <div class="shw-cs"> Photography . Visual Design . Artwork </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="prjct-bg" >
                    <a target="_blank" href="https://medium.com"> <img src="public/images/img5.jpg" alt="" class="img-prjct-wrk"> </a>
                    <div class="prjct-wrt-left-wrk"> </div>
                    <div class="shw-cs2"> Post Title </div>
                    <div class="shw-cs"> Photography . Visual Design </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
                <div class="prjct-bg" >
                    <a target="_blank" href="https://medium.com"> <img src="public/images/img3.jpg" alt="" class="img-prjct-wrk"> </a>
                    <div class="prjct-wrt-right-wrk"> </div>
                    <div class="shw-cs2"> Post Title </div>
                    <div class="shw-cs"> Photography . Visual Design . Typography </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="prjct-bg" >
                    <a target="_blank" href="https://medium.com"> <img src="public/images/img1.jpg" alt="" class="img-prjct-wrk"> </a>
                    <div class="prjct-wrt-left-wrk"> </div>
                    <div class="shw-cs2"> Post Title </div>
                    <div class="shw-cs"> Event . Workshop </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
                <div class="prjct-bg" >
                    <a target="_blank" href="https://medium.com"> <img src="public/images/img2.jpg" alt="" class="img-prjct-wrk"> </a>
                    <div class="prjct-wrt-right-wrk"> </div>
                    <div class="shw-cs2"> Post Title </div>
                    <div class="shw-cs"> Branding . Identity </div>
                </div>
            </div>
        </div>

    </div>
    <!--- THE END WORK PAGE PROJECTS --->

    <!--- WORKS & ABOUT BUTTON --->
    <!--- THE END WORKS & ABOUT BUTTON --->

    <!--- FOOTER --->
    <!--- THE END FOOTER --->

    <!--- SCRIPTS --->
    <script src="/public/js/jquery-2.1.1.js"></script>
    <script src="/public/js/main.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
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
<!--- THE PAGE LOADING --->
<section style="height: 0;">        <div class="footer">
        <ul class="sci">
            <li><a href="#" style="--i:9">E-Mail</a></li>
            <li><a href="#" style="--i:8">WhatsApp</a></li>
            <li><a href="#" style="--i:7">Instagram</a></li>
            {{--                <li><a href="#" style="--i:8">Политика конфеденциальности</a></li>--}}
        </ul>
        <p class="copyrightText">©Copyright LAWCON <?php echo date('Y'); ?></p>
    </div>
</section>
</body>

</html>
