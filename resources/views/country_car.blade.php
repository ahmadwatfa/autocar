@extends('master')
@section('content')
    {{-- @include('components.banner-search') --}}

    @if (session()->has('message_error'))
        {{-- <div class="modal fade" id="ModalWorng" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <p id="error">{{ Session::get('message_error') }}</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div> --}}

        <div class="modal fade modal-account" id="ModalWorng" tabindex="-1" data-backdrop="static" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-header-account">
                        <h5 class="modal-title" id="exampleModalLongTitle">تحذير</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body" style="text-align: center;">
                        <p id="error">{{ Session::get('message_error') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"
                            style="color: #fff">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @include('components.main-site')
    <div class="sell-buy">
        <div class="container">
            {{-- <div class="row">
            <div class="col-md-6 col-sm-12">
                <a href="#" class="btn first">اشتري سيارتك الآن</a>
            </div>
            <div class="col-md-6 col-sm-12">
                <a href="#" class="btn second">بيع سيارتك الآن</a>
            </div>
        </div> --}}
        </div>
    </div>
    {{-- @include('components.new-featured') --}}
    @if ($ads_spical->count() > 0)
        <div class="favorite-ads">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 head">
                        <div class="row">
                            <div class="col-sm-12 featured-listing">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('ads-car.show', $ads_spical[0]->id) }}" class="master-ad nondecoration">

                                            <div class="ad-info">
                                                <p>{{ $ads_spical[0]->title }}</p>
                                                <h4>{{ $ads_spical[0]->price == 0 ? '' : $ads_spical[0]->price . ' ' . __('messages.aed') }}
                                                </h4>
                                            </div>

                                            <div class="image-cover">
                                                <img src="{{ asset('images/advs/' . $media[$ads_spical[0]->id]->file_name) }}"
                                                    alt="car">
                                                <span class="star"><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="details special-details">
                                                <div class="location">
                                                    <span><i class="fa fa-map-marker-alt"></i></span>
                                                    <br>
                                                    <span>{{ $ads_spical[0]->city }}</span>
                                                </div>
                                                <div class="distance">
                                                    <span><i class="fa fa-tachometer-alt"></i></span>
                                                    <br>
                                                    <span>{{ $ads_spical[0]->mileage . ' ' . __('messages.km') }}</span>
                                                </div>
                                                <div class="year">
                                                    <span><i class="fa fa-cog"></i></span>
                                                    <br>
                                                    <span>{{ $ads_spical[0]->year }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            @foreach ($ads_spical as $key => $ad)
                                                @if ($key >= 1 && $key < 5)
                                                    <a href="{{ route('ads-car.show', $ad->id) }}"
                                                        class="col-md-6 nondecoration">
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
                                                @if ($key >= 5 && $key < 10)
                                                    <a class="col-md-3 nondecoration" href="{{ route('ads-car.show', $ad->id) }}">
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
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="offset-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


    {{-- @include('components.ads-car-country') --}}
    @if ($ads->count() > 0)
        <div class="featured-ads-filter">
            <div class="container">
                <div class="title-h">
                    <h5>{{ __('messages.cars') }}</h5>
                    <a href="#" class="btn all-ads">عرض كافة الاعلانات</a>
                </div>
                <select class="form-control">
                    <option value="" disabled selected hidden>اختر...</option>
                    <option value="">سيارات جديدة</option>
                    <option value="">مركبات متقدمة</option>
                </select>
                @foreach ($ads as $ad)
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
                                    <span>{{ $ad->year }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif



    <div class="browse">
        <div class="container">
            <div class="intro">
                <h5>تصفح المركبات حسب النوع...</h5>
                <p>نقدم لك أفضل المركبات بأفضل المعايير و الأسعار</p>
            </div>
            <div class="categories">
                <div class="category">
                    <span><i class="fa fa-car-side"></i></span>
                    <b>سيارات</b>
                </div>
                <div class="category">
                    <span><i class="fa fa-motorcycle"></i></span>
                    <b>دراجات نارية</b>
                </div>
                <div class="category">
                    <span><i class="fa fa-ship"></i></span>
                    <b>قوارب</b>
                </div>
                <div class="category">
                    <span><i class="fa fa-truck"></i></span>
                    <b>مركبات ثقيلة</b>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('components.ads-motorcycle') --}}
    {{-- @include('components.testimonials') --}}


    @guest
        <!-- Modal -->
        <div class="modal fade modal-account" id="adsFree" tabindex="-1" role="dialog" data-backdrop="static"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document"
                style="display: flex;
                                    justify-content: space-evenly;">
                <div class="modal-content" style="width: 65%">
                    <div class="modal-header modal-header-account">
                        {{-- <button type="button" class="left-arrow-account" data-dismiss="modal" aria-label="Close"
                            data-toggle="modal" data-target="#exampleModalCenter">
                            <span aria-hidden="true">&rightarrow;</span>
                        </button> --}}
                        <h5 class="modal-title" id="exampleModalLongTitle">إعلن مجاناً</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body" style="margin: 0 auto;">
                        {{-- <div style="margin: 0 auto; text-align:center;">أعلن على موقع أوتو مارك مجاناً</div> --}}
                        <button href="" class="btn btn-danger new-ads"
                            onclick="window.open('{{ route('new.ads') }}','_self')">أضف إعلانك مجانا على موقع أوتو
                            مارك</button>
                    </div>
                </div>
            </div>
        </div>
    @endguest
@endsection

@section('pagescript')
    <script>
        @guest
        $('#adsFree').modal('show');
        @endguest

        $('#ModalWorng').modal("show");
    </script>
@endsection
