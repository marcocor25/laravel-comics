<div class="main-fluid">
    <div class="jumbotron"></div>
    <div class="container">
        <div class="badge">
            <h2>current series</h2>
        </div>

        @foreach ($thumbs as $el)
            <div class="card">
                <figure class="card-image">
                    <img src="{{ $el['thumb'] }}" alt="{{ $el['title'] }}">
                </figure>
                <h5 class="card-title">
                    {{ $el['title'] }}
                </h5>
            </div>
        @endforeach

    </div>
    <div class="button-wrapper">
        <div class="button">
            load more
        </div>
    </div>
</div>
