@extends('master')
@section('content')
    <div class="ads">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="ads-space">
                        <div class="space-head">
                            <h5>{{ $ads->title }}</h5>
                            <div class="tool">
                                <a href="#" class="btn">{{ __('messages.share') }}<span><i
                                            class="fa fa-share-alt"></i></span></a>
                                <button class="btn fav">{{ __('messages.fav') }}<span><i
                                            class="fa fa-heart"></i></span></button>
                            </div>
                        </div>
                        {{-- <a href="#" id="pop" class="ads-main-image">
                            <img id="imageresource" src="{{ asset('images/advs/' . $main_img->file_name) }}" id="main-ads-img" alt="ads">
                        </a> --}}

                        <div class="row" id="gallery" data-toggle="modal" data-target="#viewImages">
                            {{-- <div class="ads-main-image">
                                <img src="{{ asset('images/advs/' . $main_img->file_name) }}" id="main-ads-img"
                                    alt="ads">
                            </div> --}}
                            {{-- @if (!$agent->isMobile())
                                <div style="padding: 0 3em; overflow: hidden;">
                            @endif --}}
                            <div class="ads-images">
                                @foreach ($medias as $key => $media)
                                    <img id="{{ $key }}" src="{{ asset('images/advs/' . $media->file_name) }}"
                                        alt="ads">
                                @endforeach
                            </div>
                            {{-- @if (!$agent->isMobile())
                        </div>
                        @endif --}}
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <!-- Carousel markup goes here -->

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="published">
                            <span>{{ __('messages.published') }} </span>{{ $ads->created_at->diffForHumans() }}
                        </div>
                        @if ($agent->isMobile())
                            <div class="price" style="width: 100%; margin-top: 1em;">
                                <span>{!! $ads->price != 0
                                    ? $ads->price . ' ' . __('messages.aed')
                                    : "<a href='http://wa.me/$ads->phone?text=" .
                                        URL::current() .
                                        "%0a أود معرفة سعر السيارة' target='_blank'>" .
                                        __('ads.contact-Price') .
                                        '</a>' !!}</span>
                            </div>
                        @endif
                        @if ($agent->isMobile())
                            <div class="ads-car-specifications">
                                <ul class="specification-mobile">
                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.Manufacture') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $car['companyName'] }}</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.model') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $car['modelName'] }}</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.year') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->year }}</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.mileage') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->mileage . ' ' . __('messages.km') }}</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.cylinders') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->clynder }}</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.gear') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->gear == 1 ? __('messages.noraml') : __('messages.automatic') }}</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.fuel') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->petrol_type }}</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.colorEx') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->color }}</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.doors') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->door }}</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.regional') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->specification }}</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.insurance') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->is_insurance ? __('messages.yes') : __('messages.no') }}</strong>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="ads-car-specifications">
                                <ul class="specification-mobile">
                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.status') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->status_car }}</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.vehicleBody') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->body }}</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.mechanical') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->status_engine }}</strong>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        @else
                            <div class="ads-car-specifications">
                                <div class="specifications panel panel-1" style="max-height: 300px;">
                                    <div>
                                        <span>{{ __('messages.Manufacture') }}</span>
                                        <img src="{{ asset($car['logo']) }}" alt="industry">
                                        <strong>{{ $car['companyName'] }}</strong>
                                    </div>

                                    <div>
                                        <span>{{ __('messages.year') }}</span>
                                        <img src="{{ asset('images/productivity.png') }}" alt="industry">
                                        <strong>{{ $ads->year }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.mileage') }}</span>
                                        <img src="{{ asset('images/car-speed.png') }}" alt="industry">
                                        <strong>{{ $ads->mileage . ' ' . __('messages.km') }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.insurance') }}</span>
                                        <img src="{{ asset('images/guarantee-certificate.png') }}" alt="industry">
                                        <strong>{{ $ads->is_insurance ? __('messages.yes') : __('messages.no') }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.colorEx') }}</span>
                                        <img src="{{ asset('images/car-color.png') }}" alt="industry">
                                        <strong>{{ $ads->color }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.fuel') }}</span>
                                        <img src="{{ asset('images/gas-station.png') }}" alt="industry">
                                        <strong>{{ $ads->petrol_type }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.gear') }}</span>
                                        <img src="{{ asset('images/gearbox.png') }}" alt="industry">
                                        <strong>{{ $ads->gear == 1 ? __('messages.noraml') : __('messages.automatic') }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.regional') }}</span>
                                        <img src="{{ asset('images/car.png') }}" alt="industry">
                                        <strong>{{ $ads->specification }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="ads-car-description">
                            @if (!$agent->isMobile())
                                <div class="head accordion active">
                                    <h5>{{ __('messages.description') }}</h5>
                                    <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne"></span>
                                </div>
                            @endif

                            <div class="panel panel-1" style="max-height: 88px;">
                                <p>
                                    {{ $ads->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="ads-info">
                        <div class="price">
                            <span>{!! $ads->price != 0
                                ? $ads->price . ' ' . __('messages.aed')
                                : "<a href='http://wa.me/$ads->phone?text=" .
                                    URL::current() .
                                    "%0a أود معرفة سعر السيارة' target='_blank'>تواصل لمعرفة السعر</a>" !!}</span>
                        </div>

                        <div class="price">
                            <span>
                                {{ $ads->phone }}
                            </span>
                        </div>
                        <div class="price" >
                            <span style="background-color: #32a852">
                                {!! "<a href='http://wa.me/$ads->phone?text=" .
                                    URL::current() .
                                    "%0a أود معرفة سعر السيارة' target='_blank'>اضغط هنا للتواصل واتساب</a>" !!}
                            </span>
                        </div>


                        @if (!$agent->isMobile())
                            <div class="seller-phone">
                                <div class="phone">
                                    <span>{{ __('messages.contactSeller') }}</span>
                                    <span>{{ $ads->phone }}</span>
                                </div>
                                <div class="whatsapp">
                                    <img src="{{ asset('images/whatsapp.png') }}" alt="whatsapp">
                                </div>
                            </div>
                        @endif


                        @if (isset($showroom))
                            <div class="seller">
                                <div class="image" style="height: 80px; clip-path: circle();">
                                    <img src="{{ asset($showroom->logo) }}" alt="person" height="80">
                                </div>
                                <div class="info">
                                    <span>{{ $showroom->name }}</span>
                                    <br>
                                    <span>{{ $showroom->mobile }}</span>
                                    <br>
                                    <span class="email">{{ $showroom->address }}</span>

                                </div>
                            </div>
                        @endif

                        <div class="sell-now">
                            <p>{{ __('messages.ads1') }}</p>
                            <a href="{{ route('new.ads') }}" class="btn">{{ __('messages.ads1_p') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
            <div class="col-sm-12">
                <div class="similar-cars">
                    <h5>{{ __('messages.similarAds') }}</h5>
                    <div class="slider slik-demo">
                        <div class="advert">
                            <div class="head">
                                <div class="title">
                                    <h6>مرسيدس بنز جي ال اس</h6>
                                </div>
                                <div class="price">
                                    <b>234,500 درهم</b>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('images/small-golf.png') }}" alt="car">
                            </div>
                            <div class="details">
                                <div class="location">
                                    <span><i class="fa fa-map-marker-alt"></i></span>
                                    <br>
                                    <span>دبي</span>
                                </div>
                                <div class="distance">
                                    <span><i class="fa fa-tachometer-alt"></i></span>
                                    <br>
                                    <span>كم 2446</span>
                                </div>
                                <div class="year">
                                    <span><i class="fa fa-cog"></i></span>
                                    <br>
                                    <span>2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="advert">
                            <div class="head">
                                <div class="title">
                                    <h6>مرسيدس بنز جي ال اس</h6>
                                </div>
                                <div class="price">
                                    <b>234,500 درهم</b>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('images/small-golf.png') }}" alt="car">
                            </div>
                            <div class="details">
                                <div class="location">
                                    <span><i class="fa fa-map-marker-alt"></i></span>
                                    <br>
                                    <span>دبي</span>
                                </div>
                                <div class="distance">
                                    <span><i class="fa fa-tachometer-alt"></i></span>
                                    <br>
                                    <span>كم 2446</span>
                                </div>
                                <div class="year">
                                    <span><i class="fa fa-cog"></i></span>
                                    <br>
                                    <span>2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="advert">
                            <div class="head">
                                <div class="title">
                                    <h6>مرسيدس بنز جي ال اس</h6>
                                </div>
                                <div class="price">
                                    <b>234,500 درهم</b>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('images/small-golf.png') }}" alt="car">
                            </div>
                            <div class="details">
                                <div class="location">
                                    <span><i class="fa fa-map-marker-alt"></i></span>
                                    <br>
                                    <span>دبي</span>
                                </div>
                                <div class="distance">
                                    <span><i class="fa fa-tachometer-alt"></i></span>
                                    <br>
                                    <span>كم 2446</span>
                                </div>
                                <div class="year">
                                    <span><i class="fa fa-cog"></i></span>
                                    <br>
                                    <span>2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="advert">
                            <div class="head">
                                <div class="title">
                                    <h6>مرسيدس بنز جي ال اس</h6>
                                </div>
                                <div class="price">
                                    <b>234,500 درهم</b>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('images/small-golf.png') }}" alt="car">
                            </div>
                            <div class="details">
                                <div class="location">
                                    <span><i class="fa fa-map-marker-alt"></i></span>
                                    <br>
                                    <span>دبي</span>
                                </div>
                                <div class="distance">
                                    <span><i class="fa fa-tachometer-alt"></i></span>
                                    <br>
                                    <span>كم 2446</span>
                                </div>
                                <div class="year">
                                    <span><i class="fa fa-cog"></i></span>
                                    <br>
                                    <span>2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="advert">
                            <div class="head">
                                <div class="title">
                                    <h6>مرسيدس بنز جي ال اس</h6>
                                </div>
                                <div class="price">
                                    <b>234,500 درهم</b>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('images/small-golf.png') }}" alt="car">
                            </div>
                            <div class="details">
                                <div class="location">
                                    <span><i class="fa fa-map-marker-alt"></i></span>
                                    <br>
                                    <span>دبي</span>
                                </div>
                                <div class="distance">
                                    <span><i class="fa fa-tachometer-alt"></i></span>
                                    <br>
                                    <span>كم 2446</span>
                                </div>
                                <div class="year">
                                    <span><i class="fa fa-cog"></i></span>
                                    <br>
                                    <span>2019</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}
        </div>
    </div>

    {{-- <div class="modal fade" id="viewImages" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('images/advs/' . $media->file_name) }}">
                            </div>
                            @foreach ($medias as $key => $media)
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('images/advs/' . $media->file_name) }}">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('pagescript')
    <script type="text/javascript">
        $('.ads-images img').on('click', function() {
            let src = $(this).attr('src');
            console.log(src);
            $('.ads-main-image img').removeAttr('src');
            $('.ads-main-image img').attr('src', src);
        });
        let widthh = screen.width;
        if (widthh > 1080) {
            $(document).on('ready', function() {
                // $('.slik-demo').not('.slick-initialized').slick({
                //     accessibility: true,
                //     adaptiveHeight: false,
                //     arrows: true,
                //     infinite: true,
                //     slidesToShow: 3,
                //     slidesToScroll: 1,
                //     dots: false,
                //     prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
                //     nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
                //     autoplay: true,
                //     autoplaySpeed: 3000,
                //     easing: 'linear',
                //     draggable: false,
                //     pauseOnHover: true,
                //     pauseOnFocus: true,
                //     touchMove: true,
                //     centerMode: true,
                // });

                $('.base-modal .modal-body .email').on('click', function() {
                    $('.base-modal').modal("hide");
                });
                $('.modal-email .left-arrow-email').on('click', function() {
                    $('.modal-email').modal("hide");
                });
                $('.base-modal .modal-footer .new-account').on('click', function() {
                    $('.base-modal').modal("hide");
                });
                $('.modal-account .left-arrow-account').on('click', function() {
                    $('.modal-account').modal("hide");
                });
            });
        } else {
            $(document).on('ready', function() {
                // $('.slik-demo').not('.slick-initialized').slick({
                //     accessibility: true,
                //     adaptiveHeight: false,
                //     arrows: true,
                //     infinite: true,
                //     slidesToShow: 1,
                //     slidesToScroll: 1,
                //     dots: false,
                //     prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
                //     nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
                //     autoplay: true,
                //     autoplaySpeed: 3000,
                //     easing: 'linear',
                //     draggable: false,
                //     pauseOnHover: true,
                //     pauseOnFocus: true,
                //     touchMove: true,
                //     centerMode: true,
                // });

                $('.base-modal .modal-body .email').on('click', function() {
                    $('.base-modal').modal("hide");
                });
                $('.modal-email .left-arrow-email').on('click', function() {
                    $('.modal-email').modal("hide");
                });
                $('.base-modal .modal-footer .new-account').on('click', function() {
                    $('.base-modal').modal("hide");
                });
                $('.modal-account .left-arrow-account').on('click', function() {
                    $('.modal-account').modal("hide");
                });

            });

            if ($('html').attr('lang') == 'ar') {
                console.log('ar');
                $('.ads-images').slick({
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    adaptiveHeight: true,
                    prevArrow: false,
                    nextArrow: false,
                    rtl: true
                });

            } else {
                console.log('en');
                $('.ads-images').slick({
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    adaptiveHeight: true,
                    prevArrow: false,
                    nextArrow: false,
                });
                // $('.ads-images').slick({
                //     accessibility: true,
                //     adaptiveHeight: false,
                //     arrows: true,
                //     infinite: true,
                //     slidesToShow: 3,
                //     slidesToScroll: 1,
                //     dots: true,
                //     prevArrow: false,
                //     nextArrow: false,
                //     autoplay: false,
                //     autoplaySpeed: 3000,
                //     easing: 'linear',
                //     draggable: false,
                //     pauseOnHover: true,
                //     pauseOnFocus: true,
                //     touchMove: true,
                //     centerMode: true,
                //     swipe: true,
                //     swipeToSlide: true,
                //     responsive: [{
                //         breakpoint: 1024,
                //         settings: {
                //             slidesToShow: 1,
                //             slidesToScroll: 1,
                //             infinite: true
                //         }
                //     }, {
                //         breakpoint: 600,
                //         settings: {
                //             slidesToShow: 4,
                //             slidesToScroll: 1,
                //             dots: true
                //         }
                //     }]
                // });
            }

            $(document).on('ready', function() {
                $('.ads-main-image').magnificPopup({
                    type: 'image'
                });
            });
        }
    </script>
@endsection
