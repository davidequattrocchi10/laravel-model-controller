@extends('layouts.app')

@section('pageTitle', 'Home Page')

@section('content')

<div class="container">
    <h1 class="py-2">All movies</h1>
    <div class="row row-cols-md-1 row-cols-lg-2 row-cols-xl-3 g-1">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card text-bg-primary mb-3" style="width: 25rem; height: 20rem;">
                <div class="card-header" style="height: 30%;">
                    <h2>{{$movie->title}}</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Original Title: {{$movie->original_title}}</h5>
                    <p class="card-text">Nationality: {{$movie->nationality}}</p>
                    <p class="card-text">Vote: {{$movie->vote}}</p>
                    <p class="card-text">Date: {{$movie->date}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection