@extends('layouts.main')

@section('content')
<div style="display: flex">
    <div class="service_list">
        <ul style="text-decoration: none">
            @foreach($posts as $post)
            <li><a href="{{ "$post->link" }}">{{"$post->title"}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="service_info">
        <div class="si_page">
            <p class="si_title">Мы поможем вам</p>
            <div class="si_text">
                <div class="si_t">
                    <a><i class="fa fa-lightbulb-o" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Lorem Ipsum</p>
                        <p>Lorem IpsumLorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                        </p>
                    </div>
                </div>
                <div class="si_t">
                    <a><i class="fa fa-cog" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Lorem Ipsum</p>
                        <p>Lorem IpsumLorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="si_text">
                <div class="si_t">
                    <a><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Lorem Ipsum</p>
                        <p>Lorem IpsumLorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                        </p>
                    </div>
                </div>
                <div class="si_t">
                    <a><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Lorem Ipsum</p>
                        <p>Lorem IpsumLorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="si_text">
                <div class="si_t">
                    <a><i class="fa fa-calendar-check-o" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Lorem Ipsum</p>
                        <p>Lorem IpsumLorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                        </p>
                    </div>
                </div>
                <div class="si_t">
                    <a><i class="fa fa-camera" aria-hidden="true"></i></a>
                    <div style="display: block">
                        <p class="si_tm">Lorem Ipsum</p>
                        <p>Lorem IpsumLorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                            Lorem Ipsum
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
