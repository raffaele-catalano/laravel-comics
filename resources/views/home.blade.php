@extends('layout.main')

@section('content')

@php
    $ctaItems = config('db-menu.menuCTA')
@endphp

<h2>Home</h2>

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
