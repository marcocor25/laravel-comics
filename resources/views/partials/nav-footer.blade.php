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
        <a href="#" class="button">sign-up now</a>

        <div class="social-wrapper">
            <h3>follow us</h3>
            <a href="#" class="icons-wrapper">
                @foreach ($social as $el)
                    <figure class="icon">
                        <img src="{{ asset($el['img']) }}" alt="{{ $el['text'] }}">
                    </figure>
                @endforeach
            </a>
        </div>
    </div>
</div>
