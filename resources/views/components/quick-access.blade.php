<div class="quick-access" id="quick-access">
    <div class="item-quick">
        <a href="#">
            {{-- <img src="{{ asset('images/quick-access/earth.png') }}" alt="Country"> --}}
            <h3>{{ __('messages.country') }}</h3>
        </a>
    </div>

    <div class="item-quick">
        <a href="{{ route('new.ads') }}">
            {{-- <img src="{{ asset('images/quick-access/plus.png') }}" alt="Add-Ads"> --}}
            <h3>{{ __('messages.AddAdv1') }}</h3>
        </a>
    </div>

    <div class="item-quick">
        <a href="{{ route('showroom.index')}}">
            {{-- <img src="{{ asset('images/quick-access/car.png') }}" alt="Category"> --}}
            <h3>{{ __('messages.CarShows') }}</h3>
        </a>
    </div>

    <div class="item-quick">
        @if (app()->getLocale() == 'en')
            <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                {{-- <img src="{{ asset('images/quick-access/translation.png') }}" alt="add-ads"> --}}
                <h3>العربية</h3>
            </a>
        @elseif (app()->getLocale() == 'ar')
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">
            {{-- <img src="{{ asset('images/quick-access/translation.png') }}" alt="add-ads"> --}}
            <h3>English</h3>
        </a>
        @endif
    </div>
</div>
