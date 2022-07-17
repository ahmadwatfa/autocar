@extends('master')
@section('content')
    <div class="ads">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="ads-space">
                        <div class="space-head">
                            <h5>{{ __('messages.car') . ' ' . $car['companyName'] . ' ' . $car['modelName'] }}</h5>
                            <div class="tool">
                                <a href="#" class="btn">{{ __('messages.share') }}<span><i class="fa fa-share-alt"></i></span></a>
                                <button class="btn">{{ __('messages.fav') }}<span><i
                                            class="fa fa-heart"></i></span></button>
                            </div>
                        </div>
                        <div class="ads-main-image">
                            <img src="{{ asset('images/advs/' . $medias[0]->file_name) }}" id="main-ads-img" alt="ads">
                        </div>
                        <div class="ads-images">
                            @foreach ($medias as $media)
                                <img src="{{ asset('images/advs/' . $media->file_name) }}" alt="ads">
                            @endforeach
                        </div>
                        <div class="ads-car-specifications">
                            <div class="head">
                                <h5>{{ __('messages.carspec') }}</h5>
                                <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"><i class="fa fa-chevron-up"></i></span>
                            </div>
                            <div class="specifications">
                                <div>
                                    <span>{{ __('messages.model') }}</span>
                                    <img src="{{ asset($car['logo']) }}" alt="industry">
                                    <strong>{{ $car['companyName'] }}</strong>
                                </div>
                                <div>
                                    <span>{{ __('messages.year') }}</span>
                                    <img src="{{ asset('images/productivity.png') }}" alt="industry">
                                    <strong>{{ $car['year'] }}</strong>
                                </div>
                                <div>
                                    <span>{{ __('messages.mileage') }}</span>
                                    <img src="{{ asset('images/car-speed.png') }}" alt="industry">
                                    <strong>{{ $ads->mileage . ' ' . __('messages.km') }}</strong>
                                </div>
                                <div>
                                    <span>{{ __('messages.insurance') }}</span>
                                    <img src="{{ asset('images/guarantee-certificate.png') }}" alt="industry">
                                    <strong>{{ $ads->is_insurance ? __('messages.yes') : __('messages.no')}}</strong>
                                </div>
                                <div>
                                    <span>{{ __('messages.colorEx') }}</span>
                                    <img src="{{ asset('images/car-color.png') }}" alt="industry">
                                    <strong>{{ $ads->colors }}</strong>
                                </div>
                                <div>
                                    <span>{{ __('messages.fuel') }}</span>
                                    <img src="{{ asset('images/gas-station.png') }}" alt="industry">
                                    <strong>{{ $ads->type_seller}}</strong>
                                </div>
                                <div>
                                    <span>{{ __('messages.gear') }}</span>
                                    <img src="{{ asset('images/plastic.png') }}" alt="industry">
                                    <strong>{{ $ads->power_transmission_system }}</strong>
                                </div>
                                <div>
                                    <span>{{ __('messages.regional') }}</span>
                                    <img src="{{ asset('images/sedan-car-model.png') }}" alt="industry">
                                    <strong>{{ $ads->scope_used }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="ads-car-details">
                            <div class="head">
                                <h5>{{ __('messages.carspec') }}</h5>
                                <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"><i class="fa fa-chevron-up"></i></span>
                            </div>
                            <div class="details">
                                <div>
                                    <div>
                                        <span>{{ __('messages.status') }}</span>
                                        <strong>{{ $ads->status_motorcycle }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.vehicleBody') }}</span>
                                        <strong>{{ $ads->number_tire }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.cylinders') }}</span>
                                        <strong>{{ $ads->engine_cc }}</strong>
                                    </div>
                                </div>
                                {{-- <div>
                                    <div>
                                        <span>{{ __('messages.mechanical') }}</span>
                                        <strong>{{ $ads->status_engine }}</strong>
                                    </div>
                                    <div>
                                        <span>{{ __('messages.doors') }}</span>
                                        <strong>{{ $ads->door }}</strong>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="ads-car-description">
                            <div class="head">
                                <h5>{{ __('messages.description') }}</h5>
                                <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"><i class="fa fa-chevron-up"></i></span>
                            </div>
                            <div class="description">
                                <p>
                                    {{ $ads->description }}
                                </p>
                                <a href="#">{{ __('messages.readMore') }}</a>
                            </div>
                        </div>
                        <div class="ads-car-advantages">
                            <div class="head">
                                <h5>{{ __('messages.additions') }}</h5>
                                <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"><i class="fa fa-chevron-up"></i></span>
                            </div>
                            <div class="advantages">
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
                            <div class="head">
                                <h5>{{ __('messages.address') }}</h5>
                                <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"><i class="fa fa-chevron-up"></i></span>
                            </div>
                            <div class="location">
                                <p>
                                    <span><i class="fa fa-map-marked-alt"></i></span>
                                    {{ $ads->address }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="ads-info">
                        <div class="price">
                            <span>{{ $ads->price }} درهم</span>
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
                        <div class="seller">
                            <div class="image">
                                <img src="{{ asset('images/person.png') }}" alt="person">
                            </div>
                            <div class="info">
                                <span>{{ $ads->name }}</span>
                                <br>
                                <span class="email">{{ $ads->email }}</span>
                                <br>
                                <span>دبي - العين</span>
                            </div>
                        </div>
                        <div class="sell-now">
                            <p>{{ __('messages.ads1') }}</p>
                            <a href="{{ route('newAdv', app()->getLocale()) }}" class="btn">{{ __('messages.ads1_p') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="similar-cars">
                        <h5>سيارات مشابهة </h5>
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
            </div>
        </div>
    </div>
@endsection
@section('pagescript')
    <script type="text/javascript">
        let widthh = screen.width;
        if (widthh > 1080) {
            $(document).on('ready', function() {
                $('.slik-demo').slick({
                    accessibility: true,
                    adaptiveHeight: false,
                    arrows: true,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: false,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
                    autoplay: false,
                    autoplaySpeed: 3000,
                    easing: 'linear',
                    draggable: false,
                    pauseOnHover: true,
                    pauseOnFocus: true,
                    touchMove: true,
                    centerMode: true,
                    rtl: true,
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

                $('.ads-images img').on('click', function() {
                    let src = $('.ads-images img').attr('src');
                    console.log(src);
                    $('.ads-main-image img').removeAttr('src');
                    $('.ads-main-image img').attr('src', src);
                });
            });
        } else {
            $(document).on('ready', function() {
                $('.slik-demo').slick({
                    accessibility: true,
                    adaptiveHeight: false,
                    arrows: true,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
                    autoplay: false,
                    autoplaySpeed: 3000,
                    easing: 'linear',
                    draggable: false,
                    pauseOnHover: true,
                    pauseOnFocus: true,
                    touchMove: true,
                    centerMode: true,
                    rtl: true,
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

                $('.ads-images img').on('click', function() {
                    let src = $(this).attr('src');
                    $('.ads-main-image img').removeAttr('src');
                    $('.ads-main-image img').attr('src', src);
                });
            });
        }
    </script>
@endsection
