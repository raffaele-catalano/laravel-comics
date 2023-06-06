@extends('layout.main')

@section('content')

@php
    $comics     = config('db-comics');
    $ctaItems   = config('db-menu.menuCTA')
@endphp

{{-- @dd($comics) --}}

    <div class="main-wrapper">
        <div class="container">
            <h4>Current Series</h4>
            <div class="cards-container">

                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="image-container">
                            <img src="{{ $comic['thumb'] }}" alt="comic-thumb">
                        </div>

                        <div class="txt-container">
                            <span>{{ $comic['title'] }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
            <button>Load More</button>
        </div>
    </div>

    <div class="cta">
        <div class="container">
            <ul>
                @foreach ($ctaItems as $item)
                <li>
                    <img src="{{ Vite::asset($item['src']) }}" alt="{{ $item['label'] }}">
                    <span>{{ $item['label'] }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>



@endsection
