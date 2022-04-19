@php

$list1 = [
    [
        "text" => "Characters",
        "href" => "/",
    ],
    [
        "text" => "Comics",
        "href" => "/",
    ],
    [
        "text" => "Movie",
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
        "text" => "Videos",
        "href" => "/",
    ],
    [
        "text" => "News",
        "href" => "/",
    ],
];
$list2 = [
    [
        "text" => "Terms Of Use",
        "href" => "/",
    ],
    [
        "text" => "Privacy Policy (New)",
        "href" => "/",
    ],
    [
        "text" => "Ad Choices",
        "href" => "/",
    ],
    [
        "text" => "Advertising",
        "href" => "/",
    ],
    [
        "text" => "Jobs",
        "href" => "/",
    ],
    [
        "text" => "Subscription",
        "href" => "/",
    ],
    [
        "text" => "Talent Workshops",
        "href" => "/",
    ],
    [
        "text" => "CPSC Certificates",
        "href" => "/",
    ],
    [
        "text" => "Ratings",
        "href" => "/",
    ],
    [
        "text" => "Shop Help",
        "href" => "/",
    ],
    [
        "text" => "Contact Us",
        "href" => "/",
    ],
];
$list3 = [
    [
        "text" => "DC",
        "href" => "/",
    ],
    [
        "text" => "MAD Magazine",
        "href" => "/",
    ],
    [
        "text" => "DC Kids",
        "href" => "/",
    ],
    [
        "text" => "DC Universe",
        "href" => "/",
    ],
    [
        "text" => "DC Power Visa",
        "href" => "/",
    ],
];
$list4 = [
    [
        "text" => "Shop DC",
        "href" => "/",
    ],
    [
        "text" => "Shop DC collectibles",
        "href" => "/",
    ],
];

@endphp

<div class="footer-fluid">
    <div class="container">
        <div class="list-col">
            <div class="list-wrapper">
                <!-- LISTA 1 -->
                <ul>
                    <h2>dc comics</h2>
                    @foreach($list1 as $el)
                    <li>
                        <a href="{{$el["href"]}}">
                            {{$el["text"]}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <!-- LISTA 4 -->
                <ul>
                    <h2>shop</h2>
                    @foreach($list4 as $el)
                    <li>
                        <a href="{{$el["href"]}}">
                            {{$el["text"]}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- LISTA 2 -->
            <ul>
                <h2>dc</h2>
                @foreach($list2 as $el)
                <li>
                    <a href="{{$el["href"]}}">
                        {{$el["text"]}}
                    </a>
                </li>
                @endforeach
            </ul>
            <!-- LISTA 3 -->
            <ul>
                <h2>sites</h2>
                @foreach($list3 as $el)
                <li>
                    <a href="{{$el["href"]}}">
                        {{$el["text"]}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- BACKGROUND LOGO DC -->
        <div class="logo-col"></div>
    </div>
</div>