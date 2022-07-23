<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Mark</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

    @if (app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{ asset('css/bootstrap-en.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme-en.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    @endif

    <link rel="stylesheet" href="{{ asset('css/bootstrap-editor.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css"
        crossorigin="anonymous">
    {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css'> --}}
    <link rel="stylesheet" href="{{ asset('fonts/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    @if (app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{ asset('css/master-en.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/fileinput.min.css') }}">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
        .slider {
            width: 90%;
            margin: 20px auto;
        }

        .slick-slide {
            margin: 0px 10px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: #888;
            border-radius: 50px;
            box-shadow: 0 0 15px 0 #999;
            padding: 5px;
        }

        .slick-next:before {
            background-color: #EE3926;
            color: #fff;
        }

        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }

        .slick-active {
            opacity: .5;
        }

        .slick-current {
            opacity: 1;
        }

        .accordion {
            width: 100%;
            border: none;

            color: #444;
            padding: 15px;
            cursor: pointer;
            text-align: left;
            font-weight: bold;
            outline: none;
            font-size: 1.2rem;
            border-radius: 10px;
            margin: 10px 10px 0 0;
        }

        .accordion:hover {
            box-shadow: 0 0 3px #777;
            transform: scale(100.4%);
            transition: transform 0.5s;
        }

        .active.accordion:hover {
            margin-bottom: 0;
            box-shadow: none;
            transform: none;
        }

        .active.accordion {
            border-radius: 10px 10px 0 0;
        }

        .accordion::after {
            content: "\00276F";
            color: #777;
            transform: rotate(90deg);
            float: right;
            margin-left: 15px;
            transition: all 0.5s;
        }

        .active::after {
            content: "\00276F";
            transform: rotate(270deg);
        }

        .panel {
            padding: 0 15px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.2s ease-out;
            border-radius: 0 0 10px 10px;
            text-align: justify;
            
        }


    </style>
</head>

<body>
    @include('components.header')
    <div class="container-box">
        @yield('content')

        <div class="whatsapp">
            <a href="#"><img src="{{ asset('images/whatsapp.png') }}" alt=""></a>
        </div>

        <footer class="footer">
            <!-- WhatsApp -->

            <div class="website-info">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="about">
                                <img src="{{ asset('images/logo.png') }}" alt="Auto Mark">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد يمكنك أن تولد مثل
                                    هذا
                                    النص أو العديد من النصوص ا</p>
                                <div class="social-icons">
                                    <span><i class="fab fa-instagram"></i></span>
                                    <span><i class="fab fa-whatsapp"></i></span>
                                    <span><i class="fab fa-snapchat"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="links">
                                <h5>روابط سريعة</h5>
                                <ul>
                                    <li>الرئيسية</li>
                                    <li>من نحن</li>
                                    <li>المعارض</li>
                                    <li>الأسئلة الشائعة</li>
                                    <li>سياسات الخصوصية</li>
                                </ul>
                            </div>
                        </div>
                        <div class="scol-sm-12 col-md-4">
                            <div class="contact">
                                <h5>اتصل بنا</h5>
                                <div class="phone">
                                    <p><span><i class="fa fa-phone-alt"></i></span>+971540000000</p>
                                </div>
                                <div class="email">
                                    <p><span><i class="fa fa-envelope"></i></span>info@automark.ae</p>
                                </div>
                                <div class="location">
                                    <p><span><i class="fa fa-map-marker-alt"></i></span>الامارات العربية المتحدة-دبي</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>&copy;{{ date('Y') }} جميع الحقوق محفوظة</p>
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <!-- Modal Login Or Register -->
    <div class="modal fade base-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-general">
                    <h5 class="modal-title" id="exampleModalLongTitle">تسجيل الدخول</h5>
                    @if (LaravelLocalization::getLocalizedURL('en') != route('new.ads') &&
                        LaravelLocalization::getLocalizedURL('ar') != route('new.ads'))
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    @endif
                </div>
                <div class="modal-body">
                    <a class="facebook" href="{{ url('auth/facebook') }}">
                        <div class="facebook-icon">

                            <img src="{{ asset('images/facebook.png') }}" alt="Facebook">
                        </div>
                        <span>سجل دخولك باستخدام فيس بوك</span>


                    </a>
                    <a class="google" href="{{ url('auth/google') }}">
                        <div class="google-icon">
                            <img src="{{ asset('images/google.png') }}" alt="Google">
                        </div>
                        <span>سجل دخولك باستخدام جوجل</span>
                    </a>
                    <a class="email" data-toggle="modal" data-target="#exampleModalCenterEmail">
                        <div class="email-icon">
                            <img src="{{ asset('images/email.png') }}" alt="Email">
                        </div>
                        <span>سجل دخولك باستخدام ايميلك</span>
                    </a>
                </div>
                <div class="modal-footer">
                    <p>أو قم بتسجيل حساب جديد</p>
                    <button type="button" class="btn btn-danger new-account" data-toggle="modal"
                        data-target="#exampleModalCenterAccount">تسجيل مستخدم جديد</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Login with email -->
    <div class="modal fade modal-email" id="exampleModalCenterEmail" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-email">
                    <button type="button" class="left-arrow-email" data-dismiss="modal" aria-label="Close"
                        data-toggle="modal" data-target="#exampleModalCenter">
                        <span aria-hidden="true">&rightarrow;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLongTitle">سجل دخولك باستخدام ايميلك</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group notification">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="البريد الالكتروني "
                                name="email" :value="old('email')" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="كلمة السر" name="password"
                                required autocomplete="current-password">
                        </div>
                        <button type="submit" class="btn btn-danger">الدخول</button>
                    </form>
                    <p>هل نسيت كلمة السر؟ <a href="{{ route('password.request') }}">إعادة تعيين كلمة السر</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Rigester -->
    <div class="modal fade modal-account" id="exampleModalCenterAccount" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-account">
                    <button type="button" class="left-arrow-account" data-dismiss="modal" aria-label="Close"
                        data-toggle="modal" data-target="#exampleModalCenter">
                        <span aria-hidden="true">&rightarrow;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLongTitle">أنشئ حسابك الجديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <form id="registerForm" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group notification">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        </div>
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="الاسم"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control"
                                placeholder="البريد الالكتروني " value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="كلمة السر"
                                required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <input name="password_confirmation" type="password" class="form-control"
                                placeholder="كلمة السر" required>
                        </div>

                        <div class="form-group">
                            <select name="phonecode" id="phonecode" class="form-control">
                                <option value="" disabled selected hidden>اختر الدولة</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->phonecode }}"
                                        {{ old('phonecode') == $country->phonecode ? 'selected' : '' }}>
                                        {{ $country->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input name="mobile" type="text" class="form-control"
                                placeholder="رقم الهاتف 05xxxxxxxx" {{ old('mobile') }}>
                        </div>
                        <div class="form-group">
                            <select name="type_user" class="form-control">
                                <option disabled selected hidden>نوع المستخدم</option>
                                <option value="1" {{ old('type_user') == 1 ? 'selected' : '' }}>مستخدم عادي
                                </option>
                                <option value="2" {{ old('type_user') == 2 ? 'selected' : '' }}>تاجر</option>
                                <option value="3" {{ old('type_user') == 3 ? 'selected' : '' }}>معرض سيارات
                                </option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger">انشاء حساب</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Register Showroom Data-->
    <div class="modal fade modal-account" id="showroomInformation" tabindex="-1" data-backdrop="static"
        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-account">
                    <button type="button" class="left-arrow-account" data-dismiss="modal" aria-label="Close"
                        data-toggle="modal" data-target="#exampleModalCenter">
                        <span aria-hidden="true">&rightarrow;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLongTitle">سجل بيانات معرضك</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <form id="registerFormShowroom" method="Post" action="{{ route('showroom.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="اسم المعرض">
                        </div>
                        <div class="form-group">
                            <input name="mobile" type="phone" class="form-control" placeholder="رقم هاتف العرض">
                        </div>
                        <div class="form-group">
                            <input name="address" type="text" class="form-control" placeholder="عنوان المعرض">
                        </div>
                        <div class="form-group">
                            <label for="logo">صورة المعرض</label>
                            <input name="image" id="logo" type="file" class="form-control"
                                placeholder="صورة المعرض" required>
                        </div>
                        <div class="form-group">
                            <label for="logo1">شعار المعرض</label>
                            <input name="logo" id="logo1" type="file" class="form-control"
                                placeholder="شعار المعرض" required>
                        </div>

                        <button type="submit" class="btn btn-danger">إضافة بيانات المعرض</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fonts/js/all.js') }}"></script>
    <script src="{{ asset('js/piexif.min.js') }}"></script>
    <script src="{{ asset('js/sortable.min.js') }}"></script>
    <script src="{{ asset('js/fileinput.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>

    <script>
        const acc = document.getElementsByClassName("accordion");
        const panel = document.getElementsByClassName("panel");

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script type="text/javascript">
        @if (count($errors) > 0)
            $(localStorage.getItem('modalError')).modal('show');
        @endif

        @if ($showroomInfo)
            $('#showroomInformation').modal('show');
        @endif

        $('#loginForm').submit(function() {
            localStorage.setItem('modalError', '#exampleModalCenterEmail');
        });

        $('#registerForm').submit(function() {
            localStorage.setItem('modalError', '#exampleModalCenterAccount');
        });

        $('#regis').on('click', function() {
            $('#loginAddAds').modal("hide");
        });
    </script>
    <script type="text/javascript">
        $(window).scroll(function() {
            var sticky = $('.page-header'),
                scroll = $(window).scrollTop();

            if (scroll >= 40) {
                sticky.addClass('header-fixed');
                $('#main-navbar').removeClass('navbar-dark');
                $('#main-navbar').addClass('navbar-light');
                $('#quick-access').addClass('quick-access-light');

            } else {
                sticky.removeClass('header-fixed');
                $('#main-navbar').removeClass('navbar-light');
                $('#main-navbar').addClass('navbar-dark');
                $('#quick-access').removeClass('quick-access-light');
            }
        });
    </script>

    @if (!request()->is('new.ads'))
        <script type="text/javascript">
            let width = screen.width;
            if (width > 1080) {
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
                        {
                            {
                                app() - > getLocale() == 'ar' ? 'rtl: true' : 'ltr: true'
                            }
                        },

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

                    $('#showFilter').on('click', function() {
                        $('.search-box').css('display', 'block')
                    });
                    $('.close-search').on('click', function() {
                        $('.search-box').css('display', 'none')
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
                        centerMode: false,
                        {
                            {
                                app() - > getLocale() == 'ar' ? 'rtl: true' : 'ltr: true'
                            }
                        },
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

                    $('#showFilter').on('click', function() {
                        $('.search-box').css('display', 'block')
                    });
                    $('.close-search').on('click', function() {
                        $('.search-box').css('display', 'none')
                    });
                });
            }
        </script>
    @endif

    @yield('pagescript')
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
