@if ($ads_spical->count() > 0)
    <div class="featured-ads">
        <div class="container">
            {{-- <div class="title1">
                <h5>الإعلانات المميزة</h5>
                <a href="#" class="btn all-ads">عرض كافة الاعلانات</a>
            </div> --}}
            @foreach ($ads_spical as $ad)
                <a href="{{ route('ads-car.show', $ad->id) }}">
                    <div class="advert">
                        <div class="head">
                            <div class="title">
                                <h6>{{ $ad->title }}</h6>
                            </div>
                            <div class="price">
                                <b>{{ $ad->price == 0 ? "" : ($ad->price . ' ' . __('messages.aed')) }}</b>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="car">
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
                                <span>{{ $ad->year }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif
