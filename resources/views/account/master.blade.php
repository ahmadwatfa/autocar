<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Mark - Account page</title>
    <link rel="shortcut icon" href="{{ asset('assets/account-setting/images/logo.png') }}" type="image/x-icon">
    @if (app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{ asset('css/bootstrap-en.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme-en.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    @endif
    <!-- <link rel="stylesheet" href="css/bootstrap-editor.css"> -->
    <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/account-setting/css/style.css') }}">
    @if (app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{ asset('assets/account-setting/css/master.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/account-setting/css/master-ar.css') }}">
    @endif
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    
</head>

<body>
    {{-- @include('components.header-static') --}}
    @include('components.header')
    @yield('content')

    <footer class="footer">
        <div class="website-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="about">
                            <img src="{{ asset('images/logo.png') }}" alt="Auto Mark">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد يمكنك أن تولد مثل هذا
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
                                <p><span><i class="fa fa-phone-alt"></i></span>+971547970217</p>
                            </div>
                            <div class="email">
                                <p><span><i class="fa fa-envelope"></i></span>info.automark@gmail.com</p>
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
                    <p>&copy;2021 جميع الحقوق محفوظة</p>
                </div>
            </div>
        </div>

    </footer>

    <div class="modal fade account-page" id="modal_upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close hidden-xs" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel">Upload profile picture</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 height-upload">
                            <input id="choose_file" type="file" name="choose_file" accept="image/*" />
                            <label class="label-choose-file" for="choose_file"><a class="upload-photo"><i
                                        class="fa fa-plus-circle fa-2x"></i>&nbsp;Upload photo</a></label>
                        </div>
                        <div class="col-sm-6 height-upload">
                            <input id="take_photo" type="file" name="take_photo" accept="image/*" />
                            <label class="label-choose-file" for="take_photo"><a class="take-photo"><i
                                        class="fa fa-camera fa-2x"></i>&nbsp;Take photo</a></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer visible-xs-block"><a data-dismiss="modal">Cancel</a></div>
            </div>
        </div>
    </div>
    <div class="modal fade account-page" id="modal_crop_image" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><a class="pull-left visible-xs" id="btnCancel" data-dismiss="modal"
                        aria-label="Close">Cancel</a>
                    <h5 class="modal-title visible-xs-inline-block" id="myModalLabel">Upload profile picture</h5>
                    <h5 class="modal-title hidden-xs">Crop photo</h5><a class="pull-right visible-xs" id="btnSet"
                        data-dismiss="modal" aria-label="Close">Set</a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="crop-container">
                                <div class="hidden-xs" id="drag__reposition"><i class="fa fa-arrows"></i><span>
                                        Drag to
                                        Reposition</span></div>
                                <div class="imageBox" style="width: 100%;">
                                    <div class="thumbBox"></div>
                                    <div class="spinner" style="display: none">Loading...</div>
                                </div>
                                <div class="range__zoom--inner hidden-xs"><a id="btnZoomOut">-</a>
                                    <input class="hidden-xs" id="range_zoom" type="range" min="0" max="9"
                                        value="0" /><a id="btnZoomIn">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><span class="visible-xs-inline-block">Move and Scale photo to fit</span>
                    <button class="btn btn-gray btn-sm hidden-xs" data-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <button class="btn btn-base btn-sm hidden-xs" id="btnSet_desktop" data-dismiss="modal"
                        aria-label="Close">Set
                        image</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/account-setting/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/account-setting/fonts/fontawesome/js/all.js') }}"></script>
    <script src="{{ asset('assets/account-setting/js/script.js') }}"></script>
    <script src="{{ asset('assets/account-setting/js/master.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
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
            } else {
                sticky.removeClass('header-fixed');
                $('#main-navbar').removeClass('navbar-light');
                $('#main-navbar').addClass('navbar-dark');
            }
        });
    </script>
    @yield('pagescript')
</body>

</html>
