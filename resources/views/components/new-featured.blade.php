@if(isset($ads_spical))
@if($ads_spical->count() > 0)
<div class="favorite-ads">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 head">
                <div class="row" id="show-adds">
                    <div class="col-sm-12 featured-listing">
                        <div class="row">
                            <div class="col-md-6  ">
                                <a href="{{ route('ads-car.show', $ads_spical[0]->id) }}" class="master-ad">
                                    <div class="image-cover">
                                        <img src="{{ asset('images/advs/' . $media[$ads_spical[0]->id]->file_name) }}" alt="car">
                                        <span class="star"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="ad-info">
                                        <p>{{ $ads_spical[0]->title }}</p>
                                        <h4>{{ $ads_spical[0]->price == 0 ? '' : $ads_spical[0]->price . ' ' . __('messages.aed') }}
                                        </h4>
                                    </div>
                                    <div class="details special-details">
                                        <div class="location">
                                            <span><i class="fa fa-map-marker-alt"></i></span>
                                            <br>
                                            <span>{{  $ads_spical[0]->city }}</span>
                                        </div>
                                        <div class="distance">
                                            <span><i class="fa fa-tachometer-alt"></i></span>
                                            <br>
                                            <span>{{ $ads_spical[0]->mileage . ' ' . __('messages.km') }}</span>
                                        </div>
                                        <div class="year">
                                            <span><i class="fa fa-cog"></i></span>
                                            <br>
                                            <span>{{   $ads_spical[0]->year }}</span>
                                        </div>
                                    </div>
                                   
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    @foreach ($ads_spical as $key => $ad)
                                    @if ($key >= 1 && $key < 5) <a href="{{ route('ads-car.show', $ad->id) }}" class="col-md-6 tex-decoration">
                                        <div class="sub-ad">
                                            <div class="image-cover">
                                                <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="car">
                                                <span class="star"><i class="fa fa-star"></i></span>
                                            </div>
                                            
                                            <div class="ad-info">
                                                <p>{{ $ad->title }}</p>
                                                <h5>{{ $ad->price == 0 ? '' : $ad->price . ' ' . __('messages.aed') }}
                                                </h5>
                                                
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
                                        </a>
                                        @endif
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 featured-listing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    @foreach ($ads_spical as $key => $ad)
                                    @if ($key >= 5 && $key < 10) <a class="col-md-3" href="{{ route('ads-car.show', $ad->id) }}">
                                        <div class="sub-ad">
                                            <div class="image-cover">
                                                <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="car">
                                                <span class="star"><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="ad-info">
                                                <p>{{ $ad->title }}</p>
                                                <h5>{{ $ad->price == 0 ? '' : $ad->price . ' ' . __('messages.aed') }}
                                                </h5>
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
                                        </a>
                                        @endif
                                        @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="offset-md-3"></div>

                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($ads_spical as $key => $ad)
                        <li data-target="#carouselExampleIndicators" data-slide-to={{$key}}></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                        @foreach ($ads_spical as $key => $ad)
                        <a class="col-md-12 carousel-item" href="{{ route('ads-car.show', $ad->id) }}">
                            <div class="sub-ad">
                                <div class="image-cover">
                                    <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="car">
                                    <span class="star"><i class="fa fa-star"></i></span>
                                </div>
                                <div class="ad-info">
                                    <p>{{ $ad->title }}</p>
                                    <h5>{{ $ad->price == 0 ? '' : $ad->price . ' ' . __('messages.aed') }}
                                    </h5>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endif
