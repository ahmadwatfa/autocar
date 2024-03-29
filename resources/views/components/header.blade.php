<div id="header" class="page-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark header-special" id="main-navbar">
            <a class="navbar-brand logo-specail" href="{{ route('index') }}">
                <img src="{{ asset('images/logo.png') }}" alt="AutoMark" class="logo-header">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-spical" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ request()->url() == route('index') ? "active" : "" }}">
                        <a class="nav-link" href="{{ route('index') }}">{{ __('messages.home') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('messages.Categories') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">تصنيف 1</a>
                            <a class="dropdown-item" href="#">تصنيف 2</a>
                        </div>
                    </li>
                    <li class="nav-item {{ request()->url() == route('showroom.index') ? "active" : "" }}">
                        <a class="nav-link"
                            href="{{ route('showroom.index') }}">{{ __('messages.CarShows') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('messages.about') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (app()->getLocale() == 'en')
                            <a class="nav-link"
                                href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a>
                        @endif
                        @if (app()->getLocale() == 'ar')
                            <a class="nav-link"
                                href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
                        @endif
                    </li>
                   @if (isset($id))
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $countries[$id-1]->name }} <img src="{{ asset($countries[$id-1]->flag) }}" alt="country"
                            width="20" height="20">
                    </a>
                    <div id="countries" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($countries as $country)
                            <a  class="dropdown-item" href="/country/{{$country->id}}">{{ $country->name }} <img
                                    src="{{ asset($country->flag) }}" alt="country" width="20" height="20"></a>
                        @endforeach
                    </div>
                </li>
                   @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $countries[0]->name }} <img src="{{ asset($countries[0]->flag) }}" alt="country"
                                width="20" height="20">
                        </a>
                        <div id="countries" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($countries as $country)
                                <a class="dropdown-item" href="/country/{{$country->id}}">{{ $country->name }} <img
                                        src="{{ asset($country->flag) }}" alt="country" width="20" height="20"></a>
                            @endforeach
                        </div>
                    </li>
                    @endif
                </ul>
                <a class="btn btn-danger my-2 my-sm-0 ml-2"
                    href="{{ route('new.ads') }}">{{ __('messages.AddAdv1') }}</a>
                @guest
                    <button class="btn btn-danger my-2 my-sm-0" type="button" data-toggle="modal"
                        data-target="#exampleModalCenter">{{ __('messages.SignIn') }}</button>
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
                                        $t = explode(' ',trim($user->name));
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
                                <a class="dropdown-item"
                                    href="{{ route('logout') }}">{{ __('messages.signOut') }}</a>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </nav>
    </div>
</div>
