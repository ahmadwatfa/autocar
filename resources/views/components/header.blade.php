<div id="header" class="page-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark header-special" id="main-navbar">
            <button class="navbar-toggler" type="button" id="countryMenu" data-toggle="collapse"
                data-target="#countryMenuCollaps" aria-controls="countryMenuCollaps" aria-expanded="false"
                aria-label="Toggle navigation">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <i class="bi bi-flag-fill"></i>
            </button>

            <a class="navbar-brand logo-specail" href="{{ route('index') }}">
                <img src="{{ asset('images/logo.png') }}" alt="AutoMark" class="logo-header">
            </a>
            <button class="navbar-toggler" type="button" id="buttonMenu" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-spical" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ request()->url() == route('index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('index') }}">{{ __('messages.home') }}</a>
                    </li>

                    <li class="nav-item {{ request()->url() == route('showroom.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('showroom.index') }}">{{ __('messages.CarShows') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('messages.about') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (app()->getLocale() == 'en')
                            <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a>
                        @elseif (app()->getLocale() == 'ar')
                            <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
                        @endif
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $countries[0]->name }} <img src="{{ asset($countries[0]->flag) }}" alt="country"
                                width="20" height="20">
                        </a>
                        <div id="countries" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($countries as $country)
                                <a class="dropdown-item" href="/country/{{ $country->id }}">{{ $country->name }} <img
                                        src="{{ asset($country->flag) }}" alt="country" width="20"
                                        height="20"></a>
                            @endforeach
                        </div>
                    </li>
                </ul>
                <a class="btn btn-danger my-2 my-sm-0 ml-2"
                    href="{{ route('new.ads') }}">{{ __('messages.AddAdv1') }}</a>
                @guest
                    <button class="btn btn-danger my-2 my-sm-0" id="SignLogin" type="button" data-toggle="modal"
                        data-target="#exampleModalCenter" onclick="hidemenu()">{{ __('messages.SignIn') }}</button>
                @endguest

                @auth
                    <div class="user">
                        <div class="dropdown show">
                            <a class="btn dropdown-toggle user-header" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset($user->avatar) }}" width="40" height="40" alt="user">
                                @php
                                    $regex = preg_match('[ ]', $user->name);
                                    if ($regex) {
                                        $t = explode(' ', trim($user->name));
                                        $s = $t[0];
                                    } else {
                                        $s = $user->name;
                                    }

                                    echo $s;
                                @endphp
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">اعلاناتي</a>
                                <a class="dropdown-item" href="#">المفضلة</a>
                                <a class="dropdown-item" href="{{ route('settings.index') }}">اعدادات الحساب</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">{{ __('messages.signOut') }}</a>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
            @if ($agent->isMobile())
                <div class="collapse navbar-collapse navbar-spical" id="countryMenuCollaps">
                    <ul class="navbar-nav mr-auto">
                        @foreach ($countries as $country)
                            <li>
                                <a class="dropdown-item" href="/country/{{ $country->id }}">{{ $country->name }}
                                    <img src="{{ asset($country->flag) }}" alt="country" width="20"
                                        height="20"></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </nav>

    </div>
</div>
<div class="header-special quick-access">
    <div class="row">
        <div class="col-sm" >
            <img src="{{ asset('images/quick-access/country.png') }}" alt="country"><br>
            <span>{{ __('quick-access.country') }}</span>
        </div>
        <div class="col-sm">
            <img src="{{ asset('images/quick-access/language.png') }}" alt="Language"><br>
            <span>{{ __('quick-access.lang') }}</span>
        </div>
        <div class="col-sm">
            <a href="{{ route('new.ads') }}">
                <img src="{{ asset('images/quick-access/add.png') }}" alt="add ads"><br>
                <span>{{ __('quick-access.addAds') }}</span>
            </a>
        </div>

        <div class="col-sm">
            <img src="{{ asset('images/quick-access/showroom.png') }}" alt="showroom"><br>
            <a href="{{ route('showroom.index') }}">{{ __('quick-access.showroom') }}</a>
        </div>
        <div class="col-sm">
            <img src="{{ asset('images/quick-access/support.png') }}" alt="support"><br>
            <span>{{ __('quick-access.support') }}</span>
        </div>
    </div>
</div>
