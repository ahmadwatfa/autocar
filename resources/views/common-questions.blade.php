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

    <div class="common-questions-content">
        <div class="container">
            <h5>الأسئلة الشائعة</h5>
            <br>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                كيف يمكنني طلب الخدمة؟
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            كل ما عليك فعله هو الاتصال بنا عبر وسائل التواصل الخاصة بنا والموضحة وسنقوم بمراسلتك لتحديد
                            النقاط التي سيتم العمل من خلالها

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/middel-mercedes.png" alt="car">
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

    <!-- Modal -->
    <div class="modal fade base-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-general">
                    <h5 class="modal-title" id="exampleModalLongTitle">تسجيل الدخول</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="facebook">
                        <div class="facebook-icon">
                            <img src="images/facebook.png" alt="Facebook">
                        </div>
                        <span>سجل دخولك باستخدام فيس بوك</span>
                    </div>
                    <div class="google">
                        <div class="google-icon">
                            <img src="images/google.png" alt="Google">
                        </div>
                        <span>سجل دخولك باستخدام جوجل</span>
                    </div>
                    <div class="email" data-toggle="modal" data-target="#exampleModalCenterEmail">
                        <div class="email-icon">
                            <img src="images/email.png" alt="Email">
                        </div>
                        <span>سجل دخولك باستخدام ايميلك</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <p>أو قم بتسجيل حساب جديد</p>
                    <button type="button" class="btn btn-danger new-account" data-toggle="modal"
                        data-target="#exampleModalCenterAccount">تسجيل مستخدم جديد</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-email" id="exampleModalCenterEmail" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="البريد الالكتروني ">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="كلمة السر">
                        </div>
                        <button type="submit" class="btn btn-danger">الدخول</button>
                    </form>
                    <p>هل نسيت كلمة السر؟ <a href="#">إعادة تعيين كلمة السر</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-account" id="exampleModalCenterAccount" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="الاسم">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="البريد الالكتروني ">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="كلمة السر">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="رقم الهاتف">
                        </div>
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option disabled selecte hidden>نوع المستخدم</option>
                                <option value="">نوع المستخدم1</option>
                                <option value="">نوع المستخدم2</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger">انشاء حساب</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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