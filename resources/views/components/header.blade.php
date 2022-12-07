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
                        @if (isset($_COOKIE['country']))
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $countries[$_COOKIE['country']]->name }} <img
                                    src="{{ asset($countries[$_COOKIE['country']]->flag) }}" alt="country"
                                    width="20" height="20">
                            </a>
                        @endif
                        {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $countries[0]->name }} <img src="{{ asset($countries[0]->flag) }}" alt="country"
                                width="20" height="20">
                        </a> --}}
                        <div id="countries" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($countries as $country)
                                <a class="dropdown-item"
                                    href="{{ route('country', strtolower($country->sortname)) }}">{{ $country->name }}
                                    <img src="{{ asset($country->flag) }}" alt="country" width="20"
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

            {{-- <div class="search-field" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="search-filed">
                    <div class="form-main">
                        <div class="search-body">
                            <div class="search-form">

                            </div>
                            <div class="search-shadow"></div>
                        </div>
                    </div>
                </div> --}}

            <div class="search-field" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="search-filed">
                    <div class="form-main">
                        <form action="{{ route('search.adsCar') }}" method="get">
                            <div class="search-head">

                            </div>
                            <div class="search-body">
                                <div class="search-form">
                                    <select name="city_id" id="city" class="search-makes">
                                        <option value="" hidden>{{ __('messages.selectCity') }}</option>
                                    </select>
                                    <select name="carComany_id" id="carCompany" class="search-makes search-mob"
                                        style="margin-top: 1em;">
                                        <option value="" hidden>{{ __('messages.makeCar') }}</option>
                                    </select>
                                    <select name="carModel_id" id="carModel" class="search-makes search-mob"
                                        style="margin-top: 1em;">
                                        <option value="" hidden>{{ __('messages.model') }}</option>
                                    </select>
                                    <div class="range-fields">
                                        <label class="heading">{{ __('result.year') }}</label>
                                        <div class="range-inputs">
                                            <select class="text-field" type="number" name="milage_from"
                                                placeholder="">
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                            </select>
                                            <select class="text-field" type="number" name="milage_to"
                                                placeholder="إلى">
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="range-fields">
                                            <label class="heading">{{ __('result.price') }}</label>
                                            <div class="range-inputs">
                                                <input class="text-field" type="number" name="minPrice"
                                                    placeholder="{{ __('result.price_min') }}">
                                                <input class="text-field" type="number" name="maxPrice"
                                                    placeholder="{{ __('result.to') }}">
                                            </div>
                                        </div>

                                        <div class="range-fields">
                                            <label class="heading">{{ __('result.mileage') }}</label>
                                            <div class="range-inputs">
                                                <input class="text-field" type="number" name="milage_from"
                                                    placeholder="{{ __('result.mileage_min') }}">
                                                <input class="text-field" type="number" name="milage_to"
                                                    placeholder="{{ __('result.to') }}">
                                            </div>
                                        </div>


                                    </div>
                                    <div style="display: flex">
                                        <div class="search-action">
                                            <a
                                                href="{{ route('searchmore.adsCar') }}">{{ __('messages.advSearch') }}</a>
                                        </div>
                                        <div class="search-action">
                                            <button>{{ __('messages.search') }}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-shadow"></div>
                        </form>
                    </div>
                </div>
            </div>


            {{-- @if ($agent->isMobile())

                @endif --}}

        </nav>

    </div>
</div>
<div class="country-field" id="countryMenuCollaps" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
    <ul class="navbar-nav mr-auto">
        @foreach ($countries as $country)
            <li class="country-li">
                <a class="dropdown-item" href="{{ route('country', strtolower($country->sortname)) }}"><img
                        src="{{ asset($country->flag) }}" alt="country" width="25"
                        height="25">&nbsp;&nbsp;&nbsp; {{ $country->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
<div class="header-special quick-access">
    <div class="row">
        <div class="col-sm" onclick="countryMenuButton();">
            @if (isset($_COOKIE['country']))
                <img src="{{ asset($countries[$_COOKIE['country']]->flag) }}" alt="country"><br>
                <span class="nav-quick-access">{{ $countries[$_COOKIE['country']]->name }}</span>
            @else
                <img src="{{ asset('images/quick-access/country.png') }}" alt="country"><br>
                <span class="nav-quick-access">{{ __('quick-access.country') }}</span>
            @endif
        </div>
        @if (app()->getLocale() == 'ar')
            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                <img src="{{ asset('images/quick-access/language.png') }}" alt="Language"><br>
                <span class="nav-quick-access">English</span>
            </a>
        @else
            <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                <img src="{{ asset('images/quick-access/language.png') }}" alt="Language"><br>
                <span class="nav-quick-access">العربية</span>
            </a>
        @endif
        <div class="col-sm">
            <a href="{{ route('new.ads') }}">
                <img src="{{ asset('images/quick-access/add.png') }}" alt="add ads"><br>
                <span class="nav-quick-access">{{ __('quick-access.addAds') }}</span>
            </a>
        </div>

        <div class="col-sm" onclick="searchButton();">
            <img src="{{ asset('images/quick-access/search.png') }}" alt="search"><br>
            <span class="nav-quick-access">{{ __('quick-access.search') }}</span>
        </div>

        <div class="col-sm">
            <img src="{{ asset('images/quick-access/showroom.png') }}" alt="showroom"><br>
            <a class="nav-quick-access" href="{{ route('showroom.index') }}">{{ __('quick-access.showroom') }}</a>
        </div>
    </div>
</div>
