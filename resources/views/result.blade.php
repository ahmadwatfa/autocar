@extends('master')
@section('content')
    <div class="categories">
        <div class="container">
            <div class="categories-cars row">
                <div class="col-sm-12 head">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <select name="" class="form-control select-category">
                                <option disabled selected hidden>الأقل سعراً</option>
                                <option value="">صنف 1</option>
                                <option value="">صنف 2</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <a href="#" class="btn add-ads">أضف إعلانك</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 cars-space">
                    <div class="cars row">
                        @if(isset($ads))
                        @foreach ($ads as $ad)
                            <div class="col-md-4 col-sm-12">
                                <a href="{{ route('ads-car.show', $ad->id) }}">
                                    <div class="advert">
                                        <div class="head">
                                            <div class="title">
                                                <h6>{{ $ad->title }}</h6>
                                            </div>
                                            <div class="price">
                                                <b>{{ $ad->price == 0 ? '' : $ad->price . ' ' . __('messages.aed') }}</b>
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
                            </div>
                        @endforeach
                        {{ $ads->appends(Request::all())->links('components.paginate.result') }}
                        @endif
                    </div>
                </div>
                @include('components.result-search')
            </div>
        </div>
    </div>
@endsection
