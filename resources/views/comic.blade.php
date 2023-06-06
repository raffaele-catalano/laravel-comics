@extends('layout.main')

@section('content')
    <div class="comic-container">
        <div class="comic-details">
            <h2>{{ $comic['title'] }}</h2>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h4>{{ $comic['series'] }}</h4>
            <h5>{{ $comic['type'] }}</h5>
            <h5>{{ $comic['sale_date'] }}</h5>
            <h4>{{ $comic['price'] }}</h4>
            <p>Artists: {{implode(' - ', $comic['artists']) }}</p>
            <p>Writers: {{implode(' - ', $comic['writers']) }}</p>
            <div class="description-container">
                <p>{{ $comic['description'] }}</p>
            </div>
            <a href="{{ route('home') }}" class="btn">Home</a>
        </div>
    </div>
@endsection
