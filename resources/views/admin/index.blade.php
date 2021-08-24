@extends('layouts/adm')
@section('content')

    <div class="logo-admin">
        {{ config('app.name', 'LAWCON') }}
    </div>
    <div class="main-container">

        <!-- HEADER -->
        <header class="block">
            <ul class="header-menu horizontal-list">
                <li>
                    <a class="header-menu-tab" href="#1"><span class="icon entypo-cog scnd-font-color"></span>Settings</a>
                </li>
                <li>
                    <a class="header-menu-tab" href="#2"><span class="icon fontawesome-user scnd-font-color"></span>Account</a>
                </li>
                <li>
                    <a class="header-menu-tab" href="#3"><span class="icon fontawesome-envelope scnd-font-color"></span>Messages</a>
                    <a class="header-menu-number" href="#4">5</a>
                </li>
                <li>
                    <a class="header-menu-tab" href="#5"><span class="icon fontawesome-star-empty scnd-font-color"></span>Favorites</a>
                </li>
            </ul>
            <div class="profile-menu">
                <p>Me <a href="#26"><span class="entypo-down-open scnd-font-color"></span></a></p>
                <div class="profile-picture small-profile-picture">
                    <img width="40px" alt="Anne Hathaway picture" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg">
                </div>
            </div>
        </header>

        <!-- LEFT-CONTAINER -->
        <div class="left-container container">
            <div class="menu-box block"> <!-- MENU BOX (LEFT-CONTAINER) -->
                <h2 class="titular">MENU</h2>
                <ul class="menu-box-menu">
                    <li>
                        <a class="menu-box-tab" href="#6"><span class="icon fontawesome-envelope scnd-font-color"></span>Посты</a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="#8"><span class="icon entypo-paper-plane scnd-font-color"></span>Invites</a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="#10"><span class="icon entypo-calendar scnd-font-color"></span>Events</a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="#12"><span class="icon entypo-cog scnd-font-color"></span>Настройки</a>
                    </li>
                    <li>
                        <a class="menu-box-tab" href="#13"><sapn class="icon entypo-chart-line scnd-font-color"></sapn>Статистика</a>
                    </li>
                </ul>
            </div>
            <div class="donut-chart-block block"> <!-- DONUT CHART BLOCK (LEFT-CONTAINER) -->
                <h2 class="titular">OS AUDIENCE STATS</h2>
                <div class="donut-chart">
                    <!-- DONUT-CHART by @kseso https://codepen.io/Kseso/pen/phiyL -->
                    <div id="porcion1" class="recorte"><div class="quesito ios" data-rel="21"></div></div>
                    <div id="porcion2" class="recorte"><div class="quesito mac" data-rel="39"></div></div>
                    <div id="porcion3" class="recorte"><div class="quesito win" data-rel="31"></div></div>
                    <div id="porcionFin" class="recorte"><div class="quesito linux" data-rel="9"></div></div>
                    <!-- END DONUT-CHART by @kseso https://codepen.io/Kseso/pen/phiyL -->
                    <p class="center-date">JUNE<br><span class="scnd-font-color">2013</span></p>
                </div>
                <ul class="os-percentages horizontal-list">
                    <li>
                        <p class="ios os scnd-font-color">iOS</p>
                        <p class="os-percentage">21<sup>%</sup></p>
                    </li>
                    <li>
                        <p class="mac os scnd-font-color">Mac</p>
                        <p class="os-percentage">48<sup>%</sup></p>
                    </li>
                    <li>
                        <p class="linux os scnd-font-color">Linux</p>
                        <p class="os-percentage">9<sup>%</sup></p>
                    </li>
                    <li>
                        <p class="win os scnd-font-color">Win</p>
                        <p class="os-percentage">32<sup>%</sup></p>
                    </li>
                </ul>
            </div>
            <ul class="social horizontal-list block"> <!-- SOCIAL (LEFT-CONTAINER) -->
                <li class="facebook"><p class="icon"><span class="zocial-facebook"></span></p></li>
                <li class="twitter"><p class="icon"><span class="zocial-twitter"></span></p></li>
                <li class="googleplus"><p class="icon"><span class="zocial-googleplus"></span></p></li>
                <li class="mailbox"><p class="icon"><span class="fontawesome-envelope"></span></p></li>
            </ul>
        </div>

        <!-- MIDDLE-CONTAINER -->
        <div class="middle-container container">
            <div class="profile block"> <!-- PROFILE (MIDDLE-CONTAINER) -->
                <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a>
                <div class="profile-picture big-profile-picture clear">
                    <img width="150px" alt="" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg" >
                </div>
                <h1 class="user-name">Shubayevn</h1>
                <div class="profile-description">
                    <p class="scnd-font-color">Должность</p>
                </div>
                <ul class="profile-options horizontal-list">
                    <li><a class="comments" href="#40"><p><span class="icon fontawesome-comment-alt scnd-font-color"></span>23</p></a></li>
                    <li><a class="views" href="#41"><p><span class="icon fontawesome-eye-open scnd-font-color"></span>841</p></a></li>
                    <li><a class="likes" href="#42"><p><span class="icon fontawesome-heart-empty scnd-font-color"></span>49</p></a></li>
                </ul>
            </div>
{{--            <div class="tweets block"> <!-- TWEETS (MIDDLE-CONTAINER) -->--}}
{{--                <h2 class="titular"><span class="icon zocial-twitter"></span>LATEST TWEETS</h2>--}}
{{--                <div class="tweet first">--}}
{{--                    <p>Ice-cream trucks only play music when out of ice-cream. Well played dad. On <a class="tweet-link" href="#17">@Quora</a></p>--}}
{{--                    <p><a class="time-ago scnd-font-color" href="#18">3 minutes ago</a></p>--}}
{{--                </div>--}}
{{--                <div class="tweet">--}}
{{--                    <p>We are in the process of pushing out all of the new CC apps! We will tweet again once they are live <a class="tweet-link" href="#19">#CreativeCloud</a></p>--}}
{{--                    <p><a class="scnd-font-color" href="#20">6 hours ago</a></p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <ul class="social block"> <!-- SOCIAL (MIDDLE-CONTAINER) -->
                <li><a href="#50"><div class="facebook icon"><span class="zocial-facebook"></span></div><h2 class="facebook titular">SHARE TO FACEBOOK</h2></a></li>
                <li><a href="#51"><div class="twitter icon"><span class="zocial-twitter"></span></div><h2 class="twitter titular">SHARE TO TWITTER</h2></a></li>
                <li><a href="#52"><div class="googleplus icon"><span class="zocial-googleplus"></span></div><h2 class="googleplus titular">SHARE TO GOOGLE+</h2></a></li>
            </ul>
        </div>

        <!-- RIGHT-CONTAINER -->
        <div class="right-container container">
            <div class="join-newsletter block"> <!-- JOIN NEWSLETTER (RIGHT-CONTAINER) -->
                <h2 class="titular">Подписать на рассылку</h2>
                <div class="input-container">
                    <input type="text" placeholder="yourname@gmail.com" class="email text-input">
                    <div class="input-icon envelope-icon-newsletter"><span class="fontawesome-envelope scnd-font-color"></span></div>
                </div>
                <a class="subscribe button" href="#21">Подписать</a>
            </div>
            <div class="loading block"> <!-- LOADING (RIGHT-CONTAINER) -->
                <div class="progress-bar downloading"></div>
                <p><span class="icon fontawesome-cloud-download scnd-font-color"></span>Свободного места...</p>
                <p class="percentage">81<sup>%</sup></p>
                <div class="progress-bar uploading"></div>
                <p><span class="icon fontawesome-cloud-upload scnd-font-color"></span>Свободной памяти...</p>
                <p class="percentage">43<sup>%</sup></p>
            </div>
            <div class="calendar-day block"> <!-- CALENDAR DAY (RIGHT-CONTAINER) -->
                <div class="arrow-btn-container">
                    <a class="arrow-btn left" href="#200"><span class="icon fontawesome-angle-left"></span></a>
                    <h2 class="titular"><?php
                        $arr = [
                            'Январь',
                            'Февраль',
                            'Март',
                            'Апрель',
                            'Май',
                            'Июнь',
                            'Июль',
                            'Август',
                            'Сентябрь',
                            'Октябрь',
                            'Ноябрь',
                            'Декабрь'
                        ];

                        $month = date('n')-1;
                        echo $arr[$month];
                        ?></h2>
                    <a class="arrow-btn right" href="#201"><span class="icon fontawesome-angle-right"></span></a>
                </div>
                <p class="the-day"><?php echo date('d') ?></p>
                {{--            <a class="add-event button" href="#27">ADD EVENT</a>--}}
            </div>
        </div> <!-- end right-container -->
    </div> <!-- end main-container -->

@endsection
