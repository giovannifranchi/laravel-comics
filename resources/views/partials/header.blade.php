<header>
    <!--Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="d-flex justify-content-end gap-5 align-items-center">
                <h6 class="m-0">DC POWER VISA</h6>
                <!-- Dropdown -->
                <div class="btn-group">
                    <button class="btn btn-sm dropdown-toggle p-0 fs-6 font-family-inherit text-reset border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      ADDITIONAL DC SITES
                    </button>
                    <ul class="dropdown-menu ps-3">
                      <li>one option</li>
                      <li>two option</li>
                      <li>three option</li>
                    </ul>
                </div>
                <!-- /Dropdown -->
            </div>
        </div>
    </div>
    <!-- /Header Top -->
    <!-- Header Bottom -->
    <div class="header-bottom">
        <div class="container">
            <nav class="d-flex gap-5 align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc-logo" width="75" height="75">
                </a>
                <ul class="d-flex list-unstyled align-items-center m-0">
                    <li class="h-100 d-flex align-items-center px-3 {{Route::currentRouteName() === 'characters' ? 'active' : ''}}">
                        <a href="{{route('characters')}}" class="text-reset">CHARACTERS</a>
                    </li>
                    <li class="h-100 d-flex align-items-center px-3 {{Str::startsWith(Route::currentRouteName(), 'comic') ? 'active' : ''}}">
                        <a href="{{route('comics')}}" class="text-reset">COMICS</a>
                    </li>
                    <li class="h-100 d-flex align-items-center px-3 {{Route::currentRouteName() === 'movies' ? 'active' : ''}}">
                        <a href="/movies" class="text-reset">MOVIES</a>
                    </li>
                    <li class="h-100 d-flex align-items-center px-3 {{Route::currentRouteName() === 'tv' ? 'active' : ''}}">
                        <a href="/tv" class="text-reset">TV</a>
                    </li>
                    <li class="h-100 d-flex align-items-center px-3 {{Route::currentRouteName() === 'games' ? 'active' : ''}}">
                        <a href="#" class="text-reset">GAMES</a>
                    </li>
                    <li class="h-100 d-flex align-items-center px-3 {{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}">
                        <a href="#" class="text-reset">COLLECTIBLES</a>
                    </li>
                    <li class="h-100 d-flex align-items-center px-3 {{Route::currentRouteName() === 'videos' ? 'active' : ''}}">
                        <a href="#" class="text-reset">VIDEOS</a>
                    </li>
                    <li class="h-100 d-flex align-items-center px-3 {{Route::currentRouteName() === 'fans' ? 'active' : ''}}">
                        <a href="#" class="text-reset">FANS</a>
                    </li>
                    <li class="h-100 d-flex align-items-center px-3 {{Route::currentRouteName() === 'news' ? 'active' : ''}}">
                        <a href="#" class="text-reset">NEWS</a>
                    </li>
                    <li class="h-100 d-flex align-items-center px-3 {{Route::currentRouteName() === 'shop' ? 'active' : ''}}">
                        <a href="#" class="text-reset">SHOP</a>
                    </li>
                </ul>
                {{-- add searchbar --}}
            </nav>
        </div>
    </div>
    <!-- /Header Bottom -->
</header>