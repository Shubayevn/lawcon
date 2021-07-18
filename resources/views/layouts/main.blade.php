<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>
<body>
{{--    <section>--}}
        <header>
            <a href="/" class="logo">LAWLAB</a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="/" style="--i:1;">Главная</a></li>
                <li><a href="#" style="--i:2;">Услуги</a></li>
                <li><a href="#" style="--i:3;">Портфолио</a></li>
                <li><a href="#" style="--i:4;">О компании</a></li>
                <li><a href="#" style="--i:5;">Контакты</a></li>
            </ul>
        </header>
        @yield('content')

        <div class="footer">
            <ul class="sci">
                <li><a href="#" style="--i:9">E-Mail</a></li>
                <li><a href="#" style="--i:8">WhatsApp</a></li>
                <li><a href="#" style="--i:7">Instagram</a></li>
            </ul>
            <p class="copyrightText">©SHUBAYEVN. <?php echo date('Y'); ?></p>
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
@endsection
</body>
