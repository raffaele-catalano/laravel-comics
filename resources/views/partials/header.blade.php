@php
    $headerMenuItems = config('db-menu.menuHeader')
@endphp

<header>
    <div class="header-wrapper">
        <div class="logo-container">
            {{-- <img src="{{Vite::asset('/resources/assets/img/dc-logo.png')}}" alt="dc-logo"> --}}
            <img src="img/dc-logo.png" alt="dc-logo">

        </div>
        <div class="nav-container">
            <nav>
                <ul>
                    @foreach ($headerMenuItems as $menuItem )
                    <li>
                        <a href="{{ $menuItem['href'] }}">{{ $menuItem['label'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>
