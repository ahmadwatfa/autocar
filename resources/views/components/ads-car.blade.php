@if (isset($ads))
@if($ads->count() > 0)

<div class="featured-ads-filter">
    <div class="container">
        <div class="title-h">
            <h5>السيارات</h5>
            <a href="#" class="btn all-ads">عرض كافة الاعلانات</a>
        </div>
        <select class="form-control">
            <option value="" disabled selected hidden>اختر...</option>
            <option value="">سيارات جديدة</option>
            <option value="">مركبات متقدمة</option>
        </select>
        @foreach ($ads as $ad)
        <a id="section_add" href="{{ route('ads-car.show', $ad->id) }}">
            <div class="advert">
                <div class="head">
                    <div class="title">
                        <h6>{{ $ad->title }}</h6>
                    </div>
                    <div class="title">
                        <h6>{{ $ad->title}}</h6>
                    </div>
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
                        <span>{{ $car[$ad->id]['year'] }}</span>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        <div id="carouselExampleIndicators_car" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($ads as $key => $ad)
                <li data-target="#carouselExampleIndicators_car" data-slide-to={{$key}}></li>
                @endforeach
            </ol>
            <div class="carousel-inner">

                @foreach ($ads as $ad)
                <a href="{{ route('ads-car.show', $ad->id) }}" class="carousel-item">
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
                                <span>{{ $car[$ad->id]['year'] }}</span>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
@endif
