@extends('layout.main')

@section('content')
<div class="main-wrapper">
    <div class="comic-container">
        <div class="comic-thumb">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>
        <div class="comic-details">
            <h2 class="strong-text">{{ $comic['title'] }}</h2>
            <h4><span class="strong-text">Serie:</span> {{ $comic['series'] }}</h4>
            {{-- <h5>{{ $comic['type'] }}</h5> --}}
            <h5><span class="strong-text">Sale Date:</span> {{ $comic['sale_date'] }}</h5>
            <h4><span class="strong-text">Price:</span> {{ $comic['price'] }}</h4>
            <p><span class="strong-text">Artists:</span> {{implode(' - ', $comic['artists']) }}</p>
            <p><span class="strong-text">Writers:</span> {{implode(' - ', $comic['writers']) }}</p>
            <div class="description-container">
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="btn-container">
                <a href="{{ route('home') }}" class="btn">Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
