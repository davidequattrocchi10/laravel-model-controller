@extends('layouts.app')

@section('pageTitle', 'Title')

@section('content')

<div class="container">
    <h1>Only title</h1>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-title">
                    <h2>{{$movie->title}}</h2>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection