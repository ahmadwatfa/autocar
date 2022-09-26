{{-- <div style="margin-top: 2px">
    <a href="{{ route('allAds') }}" class="btn all-ads">عرض كافة الاعلانات</a>
</div> --}}
@if (isset($ads_spical) && $ads_spical->count() > 0)
    @foreach ($ads_spical as $key => $ad)
        <div class="articles" onclick="location.href='{{ route('ads-car.show', $ad->id) }}';">
            <div class="article-grid">
                <div class="article-card" id="{{ $ad->id }}">
                    <div class="article-thumbnail">
                        {{-- <a href="{{ route('ads-car.show', $ad->id) }}">
                            <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="{{ $ad->title }}">
                        </a> --}}
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-indicators">
                                @foreach ($media[$ad->id] as $key => $item)
                                    @if ($item->is_main)
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $key }}" class="active" aria-current="true"
                                            aria-label="Slide {{ $key }}"></button>
                                    @else
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $key }}"
                                            aria-label="Slide {{ $key }}"></button>
                                    @endif
                                @endforeach
                            </div>
                            <div class="carousel-inner">
                                @foreach ($media[$ad->id] as $item)
                                    @if ($item->is_main)
                                        <div class="carousel-item active">
                                            <img class="d-block w-100"
                                                src="{{ asset('images/advs/' . $item->file_name) }}" alt="First slide">
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="{{ asset('images/advs/' . $item->file_name) }}" alt="First slide">
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        </div>
                    </div>
                    <div class="article-article">
                        <div class="title" style="text-align: center">
                            <h4>{{ $ad->title }}</h4>
                        </div>
                        <div class="ads-price">
                            <span>
                                <h3 {{ $ad->price == 0 ? 'style=font-size:16px' : 'style=font-size:20px' }}>
                                    {{ $ad->price == 0 ? 'السعر عند الإتصال' : $ad->price . ' ' . __('messages.aed') }}
                                </h3>
                            </span>
                            <span style="font-size: 18px;">
                                {{ $car[$ad->id]['companyName'] . ' - ' . $car[$ad->id]['modelName'] }}
                            </span>
                        </div>
                        <div class="ads-call">
                            {{-- <span><i class="bi bi-telephone"></i></span> --}}

                            {{-- <span>
                                @if (isset($ad->showroom_id))
                                    <img style="height: 50px; clip-path: circle();" src="{{ asset($ad->showroomLogo) }}" alt="">
                                @else
                                    <img style="height: 50px; clip-path: circle();" src="{{ asset('images/logo.png') }}" alt="">
                                @endif
                            </span> --}}
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
@section('pagescript')
    <script>
        // $(".carousel").swipe({
        //     swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        //         if (direction == 'left') $(this).carousel('next');
        //         if (direction == 'right') $(this).carousel('prev');
        //     },
        //     allowPageScroll: "vertical"
        // });
        $(document).ready(function() {
            $(".slide").carousel({
                interval: 1000,
                pause: false
            });
        });
    </script>
@endsection
