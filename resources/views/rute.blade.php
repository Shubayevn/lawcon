@extends('layouts.main')

@section('content')
    <div style="display: flex">
        <div class="service_list">
            <ul style="text-decoration: none">
                @foreach($posts as $post)
                    <li><a href="{{"$post->link"}}">{{"$post->title"}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="service_info">
            <div style="text-decoration: none; list-style-type: none">
                <ul>
                    <li class="imgTextS">
                        <a href="/service/upravlenie-stroitelstvom/organizacia">
                            Организация и управление проектированием и строительством (EPCM)
                        </a>
                    </li>
                    <li class="imgTextS">
                        <a href="/not_found/">
                            Строительство коммерческих объектов(торговых центров, гостиниц, спорт комплексов)
                        </a>
                    </li>
                    <li class="imgTextS">
                        <a href="/not_found/">
                            Строительство промышленных объектов (заводов, технопарков)
                        </a>
                    </li>
                    <li class="imgTextS">
                        <a href="/not_found/">
                            Строительство складских объектов
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
