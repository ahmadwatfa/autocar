@extends('master')
@section('content')
<div class="showroom">
    <div class="container">
        <div class="showroom-info row">
            <div class="col-md-3 col-sm-12">
                <div class="info">
                    <div class="title">
                        <img src="{{ asset($showroom->logo) }}" alt="">
                    </div>
                    <h5 style="font-weight: 700">{{ $showroom->name }}</h5>
                    <p><span><i class="fa fa-phone-alt"></i></span>{{ $showroom->mobile }}</p>
                    {{-- <p><span><i class="fa fa-envelope"></i></span> wisejobcenter@gmail.com</p> --}}
                    <p><span><i class="fa fa-map-marker-alt"></i></span>{{ ' ' . $showroom->address }}</p>
                </div>
            </div>
            <div class="offset-md-1"></div>
            <div class="col-md-8 col-sm-12">
                <div class="ads">
                    <img src="{{ asset('images/thumbnail.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="showroom-cars row">
            <h5>سيارات المعرض (<span>{{ $showroom->count_ads == null ? '0' : $showroom->count_ads }}</span>)</h5>
            <div class="col-xl-9 col-sm-12 cars-space">
                <div class="cars row cars-show" id="cars-show">
                    @foreach ($ads as $ad)
                    <div class="col-md-4 col-sm-12">
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
                                    <span>{{ $car[$ad->id]['year'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{ $ads->links('vendor.pagination.showrooms-paginat') }}
                </div>
                <div id="carouselExampleIndicators-show" class="carousel slide cars row" data-ride="carousel">
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
                                        <span>{{ $car[$ad->id]['year'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-12 filter">
                @include('components.search')
            </div>
        </div>
    </div>
</div>
@endsection
