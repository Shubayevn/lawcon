@extends('layouts.main')

@section('content')
    <div>
        <p class="surname">Law Constraction</p>
    </div>
    <div class="contacts">
        <div class="contInfo">
            <div class="social">
                <a href="#" class="contphone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                <a href="#" class="contmap"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                <a href="#" class="contmail"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                </a>
            </div>
            {{--            <div class="socinfo">--}}
            {{--                <a>87019998877</a>--}}
            {{--                <a>kunaeva 97</a>--}}
            {{--                <a>email.mail.com</a>--}}
            {{--            </div>--}}
        </div>
        <div class="contForm">
            <form class="login-form" action="javascript:void(0);">
                <h1>Форма</h1>
                <div class="form-input-material">
                    <label for="username">Имя</label>
                    <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
                </div>
                <div class="form-input-material">
                    <label for="username">Телефон</label>
                    <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
                </div>
                <div class="form-input-material">
                    <label for="password">Описание</label>
                    <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
                </div>
                <button type="submit" class="btn btn-primary btn-ghost">Sent</button>
            </form>
        </div>
        <div class="gismap">
            <a class="dg-widget-link" href="http://2gis.kz/nur_sultan/firm/70000001051281641/center/71.42956547802898,51.13148326953009/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">
                Посмотреть на карте Нур-Султана
            </a>
            <div class="dg-widget-link">
                <a href="http://2gis.kz/nur_sultan/firm/70000001051281641/photos/70000001051281641/center/71.42956547802898,51.13148326953009/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">
                    Фотографии компании
                </a>
            </div><div class="dg-widget-link">
                <a href="http://2gis.kz/nur_sultan/center/71.428601,51.130546/zoom/16/routeTab/rsType/bus/to/71.428601,51.130546╎Law Lab?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">
                    Найти проезд до Law Lab
                </a>
            </div>
            <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
            <script charset="utf-8">
                new DGWidgetLoader(
                    {
                        // "style":21970fdb-70ef-4844-b9c1-09772dd43631,
                        "width":500,
                        "height":400,
                        "borderColor":"#a3a3a3",
                        "pos":{"lat":51.13148326953009, "lon":71.42956547802898,"zoom":16},
                        "opt":{"city":"nur_sultan"},
                        "org":[{"id":"70000001051281641"}]});
            </script>
            <noscript style="color:#c00;font-size:16px;font-weight:bold;">
                Виджет карты использует JavaScript. Включите его в настройках вашего браузера.
            </noscript>
        </div>
    </div>
@endsection
