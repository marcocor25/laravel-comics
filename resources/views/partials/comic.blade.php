@extends('layouts.standard')

@section('metaTitle', 'DC Comic | '. $comic['title'])

@section('mainContent')
    <div class="main-fluid">
        <div class="jumbotron"></div>
        <div class="container">
            <div class="badge">
                <h2>current series</h2>
            </div>

            <a href="#" class="card">
                <figure class="card-image">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </figure>
                <h5 class="card-title">
                    {{$comic['title']}}
                </h5>
            </a>

        </div>

    </div>
@endsection
