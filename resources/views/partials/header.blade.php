<header>
    <div class="header-wrapper">
        <div class="logo-container">
            {{-- <img src="{{Vite::asset('/resources/assets/img/dc-logo.png')}}" alt="dc-logo"> --}}
            <img src="img/dc-logo.png" alt="dc-logo">

        </div>
        <div class="nav-container">
            <nav>
                <ul>
                    <li v-for="(item, index) in menuHeader" :key="index">
                        <a href="#">Menu</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
