@extends('layouts.main')
<style>/* Google Font CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins" , sans-serif;
    }
    body{
        min-height: 100vh;
        width: 100%;
        background: #c8e8e9;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container{
        width: 85%;
        background: #fff;
        border-radius: 6px;
        padding: 20px 60px 30px 40px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
    .container .content{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .container .content .left-side{
        width: 25%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
        position: relative;
    }
    .content .left-side::before{
        content: '';
        position: absolute;
        height: 70%;
        width: 2px;
        right: -15px;
        top: 50%;
        transform: translateY(-50%);
        background: #afafb6;
    }
    .content .left-side .details{
        margin: 14px;
        text-align: center;
    }
    .content .left-side .details i{
        font-size: 30px;
        color: #3e2093;
        margin-bottom: 10px;
    }
    .content .left-side .details .topic{
        font-size: 18px;
        font-weight: 500;
    }
    .content .left-side .details .text-one,
    .content .left-side .details .text-two{
        font-size: 14px;
        color: #afafb6;
    }
    .container .content .right-side{
        width: 75%;
        margin-left: 75px;
    }
    .content .right-side .topic-text{
        font-size: 23px;
        font-weight: 600;
        color: #3e2093;
    }
    .right-side .input-box{
        height: 50px;
        width: 100%;
        margin: 12px 0;
    }
    .right-side .input-box input,
    .right-side .input-box textarea{
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        font-size: 16px;
        background: #F0F1F8;
        border-radius: 6px;
        padding: 0 15px;
        resize: none;
    }
    .right-side .message-box{
        min-height: 110px;
    }
    .right-side .input-box textarea{
        padding-top: 6px;
    }
    .right-side .button{
        display: inline-block;
        margin-top: 12px;
    }
    .right-side .button input[type="button"]{
        color: #fff;
        font-size: 18px;
        outline: none;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        background: #3e2093;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .button input[type="button"]:hover{
        background: #5029bc;
    }

    @media (max-width: 950px) {
        .container{
            width: 90%;
            padding: 30px 40px 40px 35px ;
        }
        .container .content .right-side{
            width: 75%;
            margin-left: 55px;
        }
    }
    @media (max-width: 820px) {
        .container{
            margin: 40px 0;
            height: 100%;
        }
        .container .content{
            flex-direction: column-reverse;
        }
        .container .content .left-side{
            width: 100%;
            flex-direction: row;
            margin-top: 40px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .container .content .left-side::before{
            display: none;
        }
        .container .content .right-side{
            width: 100%;
            margin-left: 0;
        }
    }

</style>
@section('content')
    <div>
        <p class="surname">Law Constraction</p>
    </div>
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Адрес</div>
                    <div class="text-one">Нур-Султан</div>
                    <div class="text-two">Кунаева 06</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Телефон</div>
                    <div class="text-one">87019998877</div>
                    <div class="text-two">87019998877</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">mail@gmail.com</div>
                    <div class="text-two">mail@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Напишите нам сообщение </div>
                <p>
                    Если у вас есть какая-либо работа от меня или какие-либо вопросы, связанные с моим руководством, вы можете отправить мне сообщение отсюда. Я рад помочь вам.
                </p>
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="ФИО">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Почта">
                    </div>
                    <div class="input-box message-box">
                        <input type="text" placeholder="Сообщение">
                    </div>
                    <div class="button">
                        <input type="button" value="Отправить" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{--<div class="contacts">--}}
{{--    <div class="contInfo">--}}
{{--        <div class="social">--}}
{{--            <a href="#" class="contphone"><i class="fa fa-phone" aria-hidden="true"></i></a>--}}
{{--            <a href="#" class="contmap"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>--}}
{{--            <a href="#" class="contmail"><i class="fa fa-envelope-o" aria-hidden="true"></i>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        --}}{{--            <div class="socinfo">--}}
{{--        --}}{{--                <a>87019998877</a>--}}
{{--        --}}{{--                <a>kunaeva 97</a>--}}
{{--        --}}{{--                <a>email.mail.com</a>--}}
{{--        --}}{{--            </div>--}}
{{--    </div>--}}
{{--    <div class="contForm">--}}
{{--        <form class="login-form" action="javascript:void(0);">--}}
{{--            <h1>Форма</h1>--}}
{{--            <div class="form-input-material">--}}
{{--                <label for="username">Имя</label>--}}
{{--                <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />--}}
{{--            </div>--}}
{{--            <div class="form-input-material">--}}
{{--                <label for="username">Телефон</label>--}}
{{--                <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />--}}
{{--            </div>--}}
{{--            <div class="form-input-material">--}}
{{--                <label for="password">Описание</label>--}}
{{--                <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary btn-ghost">Sent</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    <div class="gismap">--}}
{{--        <a class="dg-widget-link" href="http://2gis.kz/nur_sultan/firm/70000001051281641/center/71.42956547802898,51.13148326953009/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">--}}
{{--            Посмотреть на карте Нур-Султана--}}
{{--        </a>--}}
{{--        <div class="dg-widget-link">--}}
{{--            <a href="http://2gis.kz/nur_sultan/firm/70000001051281641/photos/70000001051281641/center/71.42956547802898,51.13148326953009/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">--}}
{{--                Фотографии компании--}}
{{--            </a>--}}
{{--        </div><div class="dg-widget-link">--}}
{{--            <a href="http://2gis.kz/nur_sultan/center/71.428601,51.130546/zoom/16/routeTab/rsType/bus/to/71.428601,51.130546╎Law Lab?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">--}}
{{--                Найти проезд до Law Lab--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>--}}
{{--        <script charset="utf-8">--}}
{{--            new DGWidgetLoader(--}}
{{--                {--}}
{{--                    // "style":21970fdb-70ef-4844-b9c1-09772dd43631,--}}
{{--                    "width":500,--}}
{{--                    "height":400,--}}
{{--                    "borderColor":"#a3a3a3",--}}
{{--                    "pos":{"lat":51.13148326953009, "lon":71.42956547802898,"zoom":16},--}}
{{--                    "opt":{"city":"nur_sultan"},--}}
{{--                    "org":[{"id":"70000001051281641"}]});--}}
{{--        </script>--}}
{{--        <noscript style="color:#c00;font-size:16px;font-weight:bold;">--}}
{{--            Виджет карты использует JavaScript. Включите его в настройках вашего браузера.--}}
{{--        </noscript>--}}
{{--    </div>--}}
{{--</div>--}}
