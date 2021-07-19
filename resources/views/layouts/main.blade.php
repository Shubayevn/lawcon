<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{--    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">--}}

</head>
<body>

    <section>
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

        @yield('content')

        <div class="footer">
            <ul class="sci">
                <li><a href="#" style="--i:9">E-Mail</a></li>
                <li><a href="#" style="--i:8">WhatsApp</a></li>
                <li><a href="#" style="--i:7">Instagram</a></li>
{{--                <li><a href="#" style="--i:8">Политика конфеденциальности</a></li>--}}
            </ul>
            <p class="copyrightText">©Copyright LAWCON <?php echo date('Y'); ?></p>
        </div>
    </section>
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
</body>
