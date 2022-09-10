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
                            @if ($agent->isMobile())
                                <div class="price" style="width: 100%; margin-top: 1em;">
                                    @php

                                    @endphp
                                    <span>{!! $ads->price != 0
                                        ? $ads->price . ' ' . __('messages.aed')
                                        : "<a href='http://wa.me/$ads->phone?text=" .
                                            URL::current() .
                                            "%0a أود معرفة سعر السيارة' target='_blank'>" . __('ads.contact-Price') . "</a>" !!}</span>
                                </div>
                            @endif

                        </div>
                        {{-- <a href="#" id="pop" class="ads-main-image">
                            <img id="imageresource" src="{{ asset('images/advs/' . $main_img->file_name) }}" id="main-ads-img" alt="ads">
                        </a> --}}

                        <div class="row" id="gallery" data-toggle="modal" data-target="#viewImages">
                            <div class="ads-main-image">
                                <img src="{{ asset('images/advs/' . $main_img->file_name) }}" id="main-ads-img"
                                    alt="ads">
                            </div>
                            <div class="ads-images">
                                @foreach ($medias as $key => $media)
                                    <img id="{{ $key }}" src="{{ asset('images/advs/' . $media->file_name) }}"
                                        alt="ads">
                                @endforeach
                            </div>
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
                            <div class="ads-car-specifications">
                                {{-- <div class="head accordion active">
                                    <h5>{{ __('messages.carspec') }}</h5>
                                    <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne"></span>
                                </div> --}}
                                <ul class="specification-mobile">
                                    <li>
                                        <div class="name-specific">
                                            <span>{{ __('messages.model') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $car['companyName'] }}</strong>
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
                                            <span>{{ __('messages.insurance') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->is_insurance ? __('messages.yes') : __('messages.no') }}</strong>
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
                                            <span>{{ __('messages.fuel') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->petrol_type }}</strong>
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
                                            <span>{{ __('messages.regional') }}</span>
                                        </div>
                                        <div class="details-specific">
                                            <strong>{{ $ads->specification }}</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="ads-car-specifications">
                                {{-- <div class="head accordion">
                                    <h5>{{ __('messages.carspec') }}</h5>
                                    <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne"></span>
                                </div> --}}
                                <div class="specifications panel panel-1" style="max-height: 300px;">
                                    <div>
                                        <span>{{ __('messages.model') }}</span>
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
                                        <img src="{{ asset('images/plastic.png') }}" alt="industry">
                                        <strong>{{ $ads->gear == 1 ? __('messages.noraml') : __('messages.automatic') }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.regional') }}</span>
                                        <img src="{{ asset('images/sedan-car-model.png') }}" alt="industry">
                                        <strong>{{ $ads->specification }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="ads-car-details">
                            {{-- <div class="head accordion">
                                <h5>{{ __('messages.carspec') }}</h5>
                                <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"></span>
                            </div> --}}
                            <div class="details panel panel-1">
                                <div>
                                    <div>
                                        <span>{{ __('messages.status') }}</span>
                                        <strong>{{ $ads->status_car }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.vehicleBody') }}</span>
                                        <strong>{{ $ads->body }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.cylinders') }}</span>
                                        <strong>{{ $ads->clynder }}</strong>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <span>{{ __('messages.mechanical') }}</span>
                                        <strong>{{ $ads->status_engine }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.doors') }}</span>
                                        <strong>{{ $ads->door }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ads-car-description">
                            {{-- <div class="head accordion">
                                <h5>{{ __('messages.description') }}</h5>
                                <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"></span>
                            </div> --}}
                            <div class="panel panel-1">
                                <p>
                                    {{ $ads->description }}
                                </p>
                                {{-- <a href="#">{{ __('messages.readMore') }}</a> --}}
                            </div>
                        </div>
                        {{-- <div class="ads-car-advantages">
                            <div class="head accordion">
                                <h5>{{ __('messages.additions') }}</h5>
                                <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"></span>
                            </div>
                            <div class="advantages panel panel-1">
                                <span>Abs</span>
                                <span>بلوثوت</span>
                                <span>مصابيح الضباب</span>
                                <span>التحكم في ظروف الجو</span>
                                <span>الدخول بدون مفتاح</span>
                                <span>عجلة قيادة معززة آليا</span>
                                <span>حساسات للركن</span>
                                <span>سنتر لوك</span>
                                <span>مقاعد قابلة للتهيئة كهربائيا</span>
                                <span>غيار سرعة خلف المقود</span>
                                <span>نظام صوت ممتاز</span>
                            </div>
                        </div>
                        <div class="ads-car-location">
                            <div class="head accordion">
                                <h5>{{ __('messages.address') }}</h5>
                                <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"></span>
                            </div>
                            <div class="location panel panel-1">
                                <p>
                                    <span><i class="fa fa-map-marked-alt"></i></span>
                                    {{ $ads->address }}
                                </p>
                            </div>
                        </div> --}}
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
                        <div class="seller-phone">
                            <div class="phone">
                                <span>{{ __('messages.contactSeller') }}</span>
                                <br>
                                <span>{{ $ads->phone }}</span>
                            </div>
                            <div class="whatsapp">
                                <img src="{{ asset('images/whatsapp.png') }}" alt="whatsapp">
                            </div>
                        </div>

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
            <div class="row">
                <div class="col-sm-12">
                    <div class="similar-cars">
                        <h5>{{ __('messages.similarAds') }}</h5>
                        <div class="slider slik-demo" dir="ltr">
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
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewImages" tabindex="-1" role="dialog" aria-hidden="true">
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
    </div>
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
                $('.slik-demo').not('.slick-initialized').slick({
                    accessibility: true,
                    adaptiveHeight: false,
                    arrows: true,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: false,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
                    autoplay: true,
                    autoplaySpeed: 3000,
                    easing: 'linear',
                    draggable: false,
                    pauseOnHover: true,
                    pauseOnFocus: true,
                    touchMove: true,
                    centerMode: true,
                });

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

                // $('.ads-images img').on('click', function () {
                //     let src = $(this).attr('src');
                //     console.log(src);
                //     $('.ads-main-image img').removeAttr('src');
                //     $('.ads-main-image img').attr('src', src);
                // });
            });
        } else {
            $(document).on('ready', function() {
                $('.slik-demo').not('.slick-initialized').slick({
                    accessibility: true,
                    adaptiveHeight: false,
                    arrows: true,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
                    autoplay: true,
                    autoplaySpeed: 3000,
                    easing: 'linear',
                    draggable: false,
                    pauseOnHover: true,
                    pauseOnFocus: true,
                    touchMove: true,
                    centerMode: true,
                });

                // $('.slick-track').attr('style', 'opacity: 1;width: 4200px;transform: translate3d(900px, 0px, 0px);')

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

                // $('.ads-images img').on('click', function () {
                //     let src = $(this).attr('src');
                //     console.log(src);
                //     $('.ads-main-image img').removeAttr('src');
                //     $('.ads-main-image img').attr('src', src);
                // });
            });

            // function slickAr() {
            //     $('.slick-track').attr('style', 'opacity: 1;width: 4200px;transform: translate3d(900px, 0px, 0px);')
            //     console.log("Good");

            // };

            // // window.onload = function() {
            // // };
            // window.onload = slickAr();

        }
    </script>
@endsection
