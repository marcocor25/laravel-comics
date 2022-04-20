@php

$items = [
    [
        'img' => 'img/buy-comics-digital-comics.png',
        'text' => 'digital comics',
    ],
    [
        'img' => 'img/buy-comics-merchandise.png',
        'text' => 'dc merchandise',
    ],
    [
        'img' => 'img/buy-comics-subscriptions.png',
        'text' => 'subscription',
    ],
    [
        'img' => 'img/buy-comics-shop-locator.png',
        'text' => 'comic shop locator',
    ],
    [
        'img' => 'img/buy-dc-power-visa.svg',
        'text' => 'dc power visa',
    ],
];

@endphp

<div class="banner-fluid">
    <div class="container">
        @foreach ($items as $el)
            <div class="thumb-wrapper">
                <figure class="thumb-image">
                    <img src="{{ $el['img'] }}" alt="{{ $el['text'] }}">
                </figure>
                <h4>{{ $el['text'] }}</h4>
            </div>
        @endforeach
    </div>
</div>
