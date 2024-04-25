@extends('layouts.app')

@section('pageTitle', 'Home Page')

@section('content')

<div class="container">
    <h1>All films</h1>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-title">
                    <h2>{{$movie->title}}</h2>
                </div>
                <div class="card-body">
                    <p>{{$movie->original_title}}</p>
                    <p>{{$movie->nationality}}</p>
                    <p>{{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection