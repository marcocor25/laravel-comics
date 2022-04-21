@extends('layouts.standard')

@section('metaTitle', 'DC Comics | Homepage')

@section('mainContent')
    <div class="main-fluid">
        <div class="jumbotron"></div>
        <div class="container">
            <div class="badge">
                <h2>current series</h2>
            </div>

            @foreach ($comics as $index => $el)
                <a href="{{ route('show', ['index' => $index]) }}" class="card">
                    <figure class="card-image">
                        <img src="{{ $el['thumb'] }}" alt="{{ $el['title'] }}">
                    </figure>
                    <h5 class="card-title">
                        {{ $el['title'] }}
                    </h5>
                </a>
            @endforeach

        </div>
        <div class="button-wrapper">
            <a href="#" class="button">
                load more
            </a>
        </div>
    </div>
@endsection
