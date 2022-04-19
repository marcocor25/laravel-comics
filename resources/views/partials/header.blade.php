@php

$link = [
[
"text" => "Characters",
"href" => "/",
],
[
"text" => "Comics",
"href" => "/",
],
[
"text" => "Movies",
"href" => "/",
],
[
"text" => "TV",
"href" => "/",
],
[
"text" => "Games",
"href" => "/",
],
[
"text" => "collectibles",
"href" => "/",
],
[
"text" => "videos",
"href" => "/",
],
[
"text" => "fans",
"href" => "/",
],
[
"text" => "news",
"href" => "/",
],
[
"text" => "shop",
"href" => "/",
]
];

@endphp

<div class="header-fluid">
    <div class="container">
        <figure class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </figure>

        <div class="nav-link">
            <ul>
                @foreach($link as $el)
                <li>
                    <a href="{{$el["href"]}}">
                        {{$el["text"]}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>