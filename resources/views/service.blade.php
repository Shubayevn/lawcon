@extends('layouts.main')

@section('content')
    <section>
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

        <div class="footer">
            <ul class="sci">
                <li><a href="#" style="--i:9">E-Mail</a></li>
                <li><a href="#" style="--i:8">WhatsApp</a></li>
                <li><a href="#" style="--i:7">Instagram</a></li>
            </ul>
            <p class="copyrightText">©SHUBAYEVN. <?php echo date('Y'); ?></p>
        </div>
    </section>

@endsection
