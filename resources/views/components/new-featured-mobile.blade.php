{{-- <div style="margin-top: 2px">
    <a href="{{ route('allAds') }}" class="btn all-ads">عرض كافة الاعلانات</a>
</div> --}}
@if (isset($ads_spical) && $ads_spical->count() > 0)
    @foreach ($ads_spical as $key => $ad)
        <div class="articles" onclick="location.href='{{ route('ads-car.show', $ad->id) }}';">
            <div class="article-grid">
                <div class="article-card" id="{{ $ad->id }}">
                    <div class="article-thumbnail">
                        <a href="{{ route('ads-car.show', $ad->id) }}">
                            <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="{{ $ad->title }}">
                        </a>
                    </div>
                    <div class="article-article">
                        <h3>{{ $ad->price == 0 ? '' : $ad->price . ' ' . __('messages.aed') }}</h3>
                        <div class="ads-price">
                            <span>{{ $car[$ad->id]['companyName'] }}
                            </span><span>{{ $car[$ad->id]['modelName'] }}</span>
                        </div>
                        <div class="ads-call">
                            <span><i class="bi bi-telephone"></i></span>
                        </div>
                        <div class="row article-info">
                            <div class="col-sm article-details">
                                <span><i class="bi bi-calendar4"></i></span>
                                <br>
                                <span>{{ $ad->year }}</span>
                            </div>
                            <div class="col-sm article-details">
                                <span><i class="bi bi-speedometer2"></i></span>
                                <br>
                                <span>{{ $ad->mileage . ' ' . __('messages.km') }}</span>
                            </div>
                            <div class="col-sm article-details">
                                <span><i class="bi bi-geo-alt"></i></span>
                                <br>
                                <span>{{ $ad->city }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
