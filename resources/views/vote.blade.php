@extends('layouts.app')

@section('pageTitle', 'Vote')

@section('content')

<div class="container">
    <h1>Vote greater then 8,5</h1>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-title">
                    <h2>{{$movie->vote}}</h2>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection