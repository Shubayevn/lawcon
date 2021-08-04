@extends('layouts.main')

@section('content')

        <p class="contName">Мы предлагаем</p>
        <div class="container">
            <div class="box" style="--i:3;">
                <div class="imgBx">
                    <img src="/public/images/img1.jpg">
                    <div style="display: flex">
                        <p class="imgName">Управление строительством</p>
                    </div>
                    <div class="imgTextt">
                        <ul>
                            @foreach($posts as $post)
                                <li class="imgText"><a href="{{ "$post->link" }}">{{"$post->title"}}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
            <div class="box" style="--i:4;">
                <div class="imgBx">
                    <img src="/public/images/img2.jpg">
                    <p class="imgName">Строительный контроль</p>
                    <div class="imgTextt">
                        <ul>
                            @foreach($posts as $post)
                                <li class="imgText"><a href="{{ "$post->link" }}">{{"$post->title"}}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
            <div class="box" style="--i:5;">
                <div class="imgBx">
                    <img src="/public/images/img3.jpg">
                    <p class="imgName">Управление стоимостью строительства</p>
                                        <div class="imgTextt">
                        <ul>
                            @foreach($posts as $post)
                                <li class="imgText"><a href="{{ "$post->link" }}">{{"$post->title"}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                </div>
            </div>
            <div class="box" style="--i:6;">
                <div class="imgBx">
                    <img src="/public/images/img4.jpg">
                    <p class="imgName">Финансово-технический аудит и сопровождение</p>
                                        <div class="imgTextt">
                        <ul>
                            @foreach($posts as $post)
                                <li class="imgText"><a href="{{ "$post->link" }}">{{"$post->title"}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                </div>
            </div>
            <div class="box" style="--i:7;">
                <div class="imgBx">
                    <img src="/public/images/img5.jpg">
                    <p class="imgName">Юридическое сопровождение и аудит</p>
                    <div class="imgTextt">
                        <ul>
                            @foreach($posts as $post)
                                <li class="imgText"><a href="{{ "$post->link" }}">{{"$post->title"}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                </div>
            </div>
        </div>

@endsection
