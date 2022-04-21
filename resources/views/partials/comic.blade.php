@extends('layouts.standard')

@section('metaTitle', 'DC Comic | ' . $comic['title'])

@section('mainContent')
    <div class="main-fluid comic-fluid">
        <div class="jumbotron"></div>
        <div class="container">
            <div class="badge badge-comic">
                <figure class="card-image">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </figure>
            </div>

            <h1 class="comic-title">
                {{ $comic['title'] }}
            </h1>

            <p class="description">
                {{ $comic['description'] }}
            </p>

        </div>

    </div>
@endsection
