@php

$social = [
    [
        'text' => 'Facebook',
        'img' => 'img/footer-facebook.png',
    ],
    [
        'text' => 'Twitter',
        'img' => 'img/footer-twitter.png',
    ],
    [
        'text' => 'YouTube',
        'img' => 'img/footer-youtube.png',
    ],
    [
        'text' => 'Pinterest',
        'img' => 'img/footer-pinterest.png',
    ],
    [
        'text' => 'Periscope',
        'img' => 'img/footer-periscope.png',
    ],
];

@endphp

<div class="nav-footer-fluid">
    <div class="container">
        <div class="button">sign-up now</div>

        <div class="social-wrapper">
            <h3>follow us</h3>
            <div class="icons-wrapper">
                @foreach ($social as $el)
                    <figure class="icon">
                        <img src="{{ $el['img'] }}" alt="{{ $el['text'] }}">
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
</div>
