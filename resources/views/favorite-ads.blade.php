<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Mark</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-editor.css">
    <link rel="stylesheet" href="fonts/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
</head>

<body>
    <div class="page-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="AutoMark" width="150" height="90">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">الرئيسية</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                التصنيفات
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">تصنيف 1</a>
                                <a class="dropdown-item" href="#">تصنيف 2</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">المعارض</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">الإنجليزية</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                الإمارات<img src="images/united-arab-emirates.png" alt="country" width="20" height="20">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">تصنيف<img src="images/united-arab-emirates.png"
                                        alt="country" width="20" height="20"></a>
                                <a class="dropdown-item" href="#">تصنيف<img src="images/united-arab-emirates.png"
                                        alt="country" width="20" height="20"></a>
                            </div>
                        </li>
                    </ul>
                    <button class="btn btn-danger my-2 my-sm-0 ml-2" type="button">أضف إعلانك</button>
                    <button class="btn btn-danger my-2 my-sm-0" type="button" data-toggle="modal"
                        data-target="#exampleModalCenter">تسجيل الدخول</button>
                </div>
            </nav>
        </div>
    </div>

    <div class="favorite-ads">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 head">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>قائمة إعلاناتي المفضلة</h5>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <select name="" class="form-control select-category">
                                <option disabled selected hidden>الأقل سعراً</option>
                                <option value="">صنف 1</option>
                                <option value="">صنف 2</option>
                            </select>
                        </div>
                        <div class="offset-md-3"></div>
                    </div>
                </div>
                <div class="col-md-9 favorite-ads-cars">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="advert">
                                <div class="image">
                                    <img src="images/small-golf.png" alt="car">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <h6>مرسيدس بنز جي ال اس</h6>
                                    </div>
                                    <div class="price">
                                        <b>234,500 درهم</b>
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
                                <div class="un-favorite">
                                    <button class="btn">
                                        <span><i class="fa fa-trash-alt"></i></span>
                                        حذف من المفضلة
                                    </button>
                                </div>
                            </div>
                            <div class="advert">
                                <div class="image">
                                    <img src="images/small-golf.png" alt="car">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <h6>مرسيدس بنز جي ال اس</h6>
                                    </div>
                                    <div class="price">
                                        <b>234,500 درهم</b>
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
                                <div class="un-favorite">
                                    <button class="btn">
                                        <span><i class="fa fa-trash-alt"></i></span>
                                        حذف من المفضلة
                                    </button>
                                </div>
                            </div>
                            <div class="advert">
                                <div class="image">
                                    <img src="images/small-golf.png" alt="car">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <h6>مرسيدس بنز جي ال اس</h6>
                                    </div>
                                    <div class="price">
                                        <b>234,500 درهم</b>
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
                                <div class="un-favorite">
                                    <button class="btn">
                                        <span><i class="fa fa-trash-alt"></i></span>
                                        حذف من المفضلة
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="paginate">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 filter">
                    <div class="search-box">
                        <div class="search-head">
                            <span><i class="fa fa-search"></i> بحث متقدم</span>
                            <button class="btn close-search"><i class="fa fa-trash-alt"></i></button>
                        </div>
                        <div class="search-form">
                            <form action="">
                                <select name="country" id="" class="form-control">
                                    <option value="" disabled selected hidden>الدولة</option>
                                    <option value="">الإمارات</option>
                                    <option value="">سعودية</option>
                                    <option value="">مصر</option>
                                </select>
                                <div class="car-type">
                                    <p>اختر نوع المركبة</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cars" id="cars" value=""
                                            checked>
                                        <label class="form-check-label" for="cars">
                                            سيارات
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="motorcycles" id="motorcycles"
                                            value="">
                                        <label class="form-check-label" for="motorcycles">
                                            دراجات نارية
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="boats" id="boats" value="">
                                        <label class="form-check-label" for="boats">
                                            قوارب
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="heavy_vehicles"
                                            id="heavy-vehicles" value="">
                                        <label class="form-check-label" for="heavy-vehicles">
                                            مركبات ثقيلة
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="all_categories"
                                            id="all-categories" value="">
                                        <label class="form-check-label" for="all-categories">
                                            جميع التصنيفات
                                        </label>
                                    </div>
                                </div>
                                <select name="country" id="" class="form-control">
                                    <option value="" disabled selected hidden>الموديل/الماركة</option>
                                    <option value="">مرسيدس</option>
                                    <option value="">سبورت</option>
                                    <option value="">بي ام</option>
                                </select>
                                <input type="date" name="year" class="form-control" placeholder="سنة الصنع">
                                <div class="form-group price">
                                    <label for="price">السعر (درهم )</label>
                                    <input type="range" name="price" class="form-control" id="price" min="1">
                                </div>
                                <div class="form-group distance">
                                    <label for="distance">الكيلومترات</label>
                                    <input type="range" name="distance" class="form-control" id="distance" min="1">
                                </div>
                                <div class="fuel-type">
                                    <p>اختر نوع الوقود</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="petrol" id="petrol" value="">
                                        <label class="form-check-label" for="petrol">
                                            بنزين
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diesel" id="diesel" value="">
                                        <label class="form-check-label" for="diesel">
                                            ديزل
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hybrid" id="hybrid" value="">
                                        <label class="form-check-label" for="hybrid">
                                            هايبرد/هيجن
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="electricity" id="electricity"
                                            value="">
                                        <label class="form-check-label" for="electricity">
                                            كهرباء
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="all_fuel" id="all-fuel"
                                            value="" checked>
                                        <label class="form-check-label" for="all-fuel">
                                            جميع الأنواع
                                        </label>
                                    </div>
                                </div>
                                <div class="transmission-type">
                                    <p>اختر نوع ناقل الحركة</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="normal" id="normal" value="">
                                        <label class="form-check-label" for="normal">
                                            عادي
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="automatic" id="automatic"
                                            value="">
                                        <label class="form-check-label" for="automatic">
                                            اوتوماتيك
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cvt" id="cvt" value="">
                                        <label class="form-check-label" for="cvt">
                                            CVT
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="all_transmission"
                                            id="all-transmission" value="" checked>
                                        <label class="form-check-label" for="all-transmission">
                                            جميع الأنواع
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn">اظهار النتائج</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- WhatsApp -->
    <div class="whatsapp">
        <a href="#"><img src="images/whatsapp.png" alt=""></a>
    </div> --}}

    <footer class="footer">
        <div class="website-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about">
                            <img src="images/logo.png" alt="Auto Mark">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                العربى، حيث
                                يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                                يولدها
                                التطبيق.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
        </div>
        <div class="copyright">
            <div class="container">
                <p>&copy;2021 جميع الحقوق محفوظة</p>
            </div>
        </div>
    </footer>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="fonts/js/all.js"></script>
    <script src="js/master.js"></script>
    <script type="text/javascript">
        $(document).on('ready', function () {
            $('.base-modal .modal-body .email').on('click', function () {
                $('.base-modal').modal("hide");
            });
            $('.modal-email .left-arrow-email').on('click', function () {
                $('.modal-email').modal("hide");
            });
            $('.base-modal .modal-footer .new-account').on('click', function () {
                $('.base-modal').modal("hide");
            });
            $('.modal-account .left-arrow-account').on('click', function () {
                $('.modal-account').modal("hide");
            });
        });
    </script>
</body>

</html>
