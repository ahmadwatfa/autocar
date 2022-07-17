<div class="featured-ads-filter">
    <div class="container">
        <div class="title-h">
            <h5>الدراجات</h5>
            <a href="#" class="btn all-ads">عرض كافة الاعلانات</a>
        </div>
        @if (!is_null($adsMotorcycle))
            <select class="form-control">
                <option value="" disabled selected hidden>اختر...</option>
                <option value="">دراجات جديدة</option>
                <option value="">دراجات متقدمة</option>
            </select>
            @foreach ($adsMotorcycle as $ad)
                <a href="{{ route('motorcycle.show', [app()->getLocale(), 'motorcycle' => $ad->id]) }}">
                    <div class="advert">
                        <div class="head">
                            <div class="title">
                                <h6>{{ __('messages.motorcycle') .' ' .$motorcycle[$ad->id]['companyName'] .' ' .$motorcycle[$ad->id]['modelName'] }}
                                </h6>
                            </div>
                            <div class="price">
                                <b>{{ $ad->price . ' ' . __('messages.aed') }}</b>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/advs/' . $mediaMotorcycle[$ad->id]->file_name) }}" alt="car">
                        </div>
                        <div class="details">
                            <div class="location">
                                <span><i class="fa fa-map-marker-alt"></i></span>
                                <br>
                                <span>{{ $ad->city }}</span>
                            </div>
                            <div class="distance">
                                <span><i class="fa fa-tachometer-alt"></i></span>
                                <br>
                                <span>{{ $ad->mileage . ' ' . __('messages.km') }}</span>
                            </div>
                            <div class="year">
                                <span><i class="fa fa-cog"></i></span>
                                <br>
                                <span>{{ $motorcycle[$ad->id]['year'] }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif
    </div>
</div>
