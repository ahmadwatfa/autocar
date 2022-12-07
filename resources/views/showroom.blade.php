@extends('master')
@section('content')
    <div class="showroom">
        <div class="container">
            <div class="showroom-info row">
                <div class="col-md-8 col-sm-12">
                    <div class="ads">
                        <img src="{{ asset('images/thumbnail.png') }}" alt="">
                    </div>
                </div>
                <div class="offset-md-1"></div>
                <h5 style="font-weight: 700">{{ $showroom->name }}</h5>
                <div class="col-md-3 col-sm-12">
                    <div class="info">
                        <div class="title">
                            <img src="{{ asset($showroom->logo) }}" alt="">
                        </div>
                        <div class="details-showroom">
                            <p><span><i class="fa fa-phone-alt"></i></span>{{ $showroom->mobile }}</p>
                            {{-- <p><span><i class="fa fa-envelope"></i></span> wisejobcenter@gmail.com</p> --}}
                            <p><span><i class="fa fa-map-marker-alt"></i></span>{{ ' ' . $showroom->address }}</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="showroom-cars row">
                <h5>سيارات المعرض (<span>{{ $showroom->count_ads == null ? '0' : $showroom->count_ads }}</span>)</h5>
                <div class="col-xl-9 col-sm-12 cars-space">
                    <div class="cars row cars-show" id="cars-show">
                        @foreach ($ads as $ad)
                            {{-- {{ dd($ads) }} --}}

                            @if (!$agent->isMobile())
                                {{ dd("web ")}}
                                <a class="col-md-4 nondecoration" href="{{ route('ads-car.show', $ad->id) }}">
                                    <div class="sub-ad">

                                        <div class="ad-info">
                                            <p>{{ $ad->title }}</p>
                                            <h5>{{ $ad->price == 0 ? '' : $ad->price . ' ' . __('messages.aed') }}
                                            </h5>
                                        </div>
                                        <div class="image-cover">
                                            <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}"
                                                alt="car">
                                            <span class="star"><i class="fa fa-star"></i></span>
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
                            @else
                                <div class="articles" onclick="location.href='{{ route('ads-car.show', $ad->id) }}';">
                                    <div class="article-grid">
                                        <div class="article-card" id="{{ $ad->id }}">
                                            <div class="article-thumbnail">
                                                {{-- <a href="{{ route('ads-car.show', $ad->id) }}">
                                                <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="{{ $ad->title }}">
                                            </a> --}}
                                                <div id="carouselExampleControls" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        {{-- {{ dd($media[$ad->id]) }} --}}
                                                        {{-- @foreach ($media[$ad->id] as $key => $item)
                                                        {{ dd($item) }}
                                                        @if ($item->is_main)
                                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                                data-bs-slide-to="{{ $key }}" class="active" aria-current="true"
                                                                aria-label="Slide {{ $key }}"></button>
                                                        @else
                                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                                data-bs-slide-to="{{ $key }}"
                                                                aria-label="Slide {{ $key }}"></button>
                                                        @endif
                                                    @endforeach --}}
                                                    </div>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100"
                                                                src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}"
                                                                alt="First slide">
                                                        </div>
                                                        {{-- @foreach ($media[$ad->id] as $item)
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
                                                    @endforeach --}}

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="article-article">
                                                <div class="title" style="text-align: center">
                                                    <h4>{{ $ad->title }}</h4>
                                                </div>
                                                <div class="ads-price">
                                                    <span>
                                                        <h3
                                                            {{ $ad->price == 0 ? 'style=font-size:16px' : 'style=font-size:20px' }}>
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
                            @endif
                            {{-- <a class="col-md-4 col-sm-12" href="{{ route('ads-car.show', $ad->id) }}">
                                <div class="advert">
                                    <div class="head">
                                        <div class="title">
                                            <h6>{{ $ad->title }}</h6>
                                        </div>
                                        <div class="price">
                                            <b>{{ $ad->price }}</b>
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
                            </a> --}}
                        @endforeach

                        {{ $ads->links('vendor.pagination.showrooms-paginat') }}
                    </div>
                    {{-- <div id="carouselExampleIndicators-show" class="carousel slide cars row" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators-show" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators-show" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators-show" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($ads as $ad)
                                <div class="carousel-item">
                                    <div class="advert">
                                        <div class="head">
                                            <div class="title">
                                                <h6>{{ $ad->title }}</h6>
                                            </div>
                                            <div class="price">
                                                <b>{{ $ad->price }}</b>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}"
                                                alt="car">
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
                                </div>
                            @endforeach
                        </div>
                    </div> --}}
                </div>

                <div class="col-xl-3 col-sm-12 filter">
                    {{-- @include('components.search') --}}
                </div>
            </div>
        </div>
    </div>
@endsection
