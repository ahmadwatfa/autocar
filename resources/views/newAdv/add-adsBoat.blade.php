@extends('master')
@section('content')
    <div class="add-car-info">
        <div class="container">
            <div class="row">
                <h5>أضف معلومات دراجتك</h5>
            </div>
            <div class="row steps">
                <div class="step0 step-move"></div>
                <div class="step1"></div>
                <div class="step2"></div>
                <div class="step3"></div>
                <div class="step4"></div>
                <div class="step5"></div>
            </div>
            <form action="{{ route('boats.store', app()->getLocale()) }}" method="POST" class="row"
                enctype="multipart/form-data">
                @csrf
                <div id="first-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>{{ __('messages.chooseCategory') }}:</h5>
                            <select name="" id="categorySelect" class="form-control" style="display: none;">
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="category" id="1" href="#">
                                <span><i class="fa fa-car-side"></i></span>
                                <b>{{ __('messages.car') }}</b>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="category" id="2" href="#">
                                <span><i class="fa fa-motorcycle"></i></span>
                                <b>{{ __('messages.motorcycles') }}</b>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="category" id="3" href="#">
                                <span><i class="fa fa-ship"></i></span>
                                <b>{{ __('messages.boats') }}</b>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="category" id="4" href="#">
                                <span><i class="fa fa-truck"></i></span>
                                <b>{{ __('messages.trucks') }}</b>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn bottom-btn" id="move-first-car-info">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="second-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <select name="country_id" id="country" class="form-control">
                                <option value="" disabled selected hidden>{{ __('messages.selectCountry') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="city_id" id="city" class="form-control">
                                <option value="" disabled selected hidden>{{ __('messages.selectCity') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="type" id="type" class="form-control">
                                <option value="" disabled selected hidden>اختر نوع القارب</option>
                                <option value="1">قوارب بخارية</option>
                                <option value="2">قوارب شراعية</option>
                                <option value="3">قوارب التجديف</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="boat_type" id="boat_type" class="form-control">
                                <option value="" disabled selected hidden>إختر فئة القارب</option>
                                <option value="1">قارب سباق</option>
                                <option value="2">قارب صيد</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="age" id="age" class="form-control">
                                <option value="" disabled selected hidden>العمر</option>
                                <option value="1">جديد</option>
                                <option value="2">شهر أو أقل</option>
                                <option value="3">1 - 6 شهر</option>
                                <option value="4">6 - 12 شهر</option>
                                <option value="5">1 - 2 سنة</option>
                                <option value="6">2 - 5 سنوات</option>
                                <option value="7">5 - 10 سنوات</option>
                                <option value="8"> 10 سنوات وأكثر</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="scope_used" id="scope_used" class="form-control">
                                <option value="" disabled selected hidden>مدى الإستخدام</option>
                                <option value="2">لا تزال مع الوكيل</option>
                                <option value="3">تم الاستخدام مرة واحدة فقط منذ الشراء </option>
                                <option value="4">تم الاستخدام مرات قليلة - تم شراؤها حديثاً</option>
                                <option value="5">تم الاستخدام مرة أو مرتين شهريا منذ الشراء</option>
                                <option value="6">تم الاستخدام مرات عديدة أسبوعيا منذ الشراء</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="number" name="price" class="form-control" placeholder="السعر المطلوب (درهم)">
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn bottom-btn" id="move-second-car-info">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="third-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <select name="boat_status" id="boat_status" class="form-control">
                                <option value="" disabled selected hidden>حالة القارب</option>
                                <option value="2">ممتازة من الداخل والخارج</option>
                                <option value="3">بدون مشاكل أو عيوب ملحوظة</option>
                                <option value="4"> جيدة مع وجود تلف بسيط</option>
                                <option value="5">نسبة التلف عادية بالنسبة لعمر السلعة</option>
                                <option value="6">نسبة بلى فوق المتوسط. يحتاج البند بعض الترميم للعمل بشكل صحيح</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="type_seller" id="type_seller" class="form-control">
                                <option value="" disabled selected hidden>نوع البائع</option>
                                <option value="2">المالك</option>
                                <option value="3">الوكيل</option>
                                <option value="4">وكالات / دراجات مستعملة معتمدة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="length" id="length" class="form-control">
                                <option value="" selected="selected">طول القارب</option>
                                <option value="1">أقل من 10 أقدام</option>
                                <option value="2">من 10 إلى 14 قدم</option>
                                <option value="3">من 15 إلى 19 قدم</option>
                                <option value="4">من 20 إلى 24 قدم</option>
                                <option value="5">من 25 إلى 29 قدم</option>
                                <option value="6">من 30 إلى 39 قدم</option>
                                <option value="7">من 40 إلى 49 قدم</option>
                                <option value="8">من 50 إلى 69 قدم</option>
                                <option value="9">من 70 إلى 100 قدم</option>
                                <option value="10">أكثر من 100 قدم</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="color" id="" class="form-control">
                                <option value="" disabled selected hidden>اللون</option>
                                <option value="1">أسود</option>
                                <option value="2">أزرق</option>
                                <option value="3">بني</option>
                                <option value="4">عنابي</option>
                                <option value="5">ذهبي</option>
                                <option value="6">رمادي</option>
                                <option value="7">برتقالي</option>
                                <option value="8">أخضر</option>
                                <option value="9">بنفسجي</option>
                                <option value="10">أحمر</option>
                                <option value="11">فضي</option>
                                <option value="12">Beige</option>
                                <option value="13">اسمر</option>
                                <option value="14">أخضر فاتح</option>
                                <option value="15">أبيض</option>
                                <option value="16">أصفر</option>
                                <option value="17">لون آخر</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn bottom-btn" id="move-third-car-info">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="forth-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea class="form-control" name="description" id=""
                                rows="3">تحدث عن طول المدة التي تملكتها , حالة المركبة الميكانيكية , أي  تعديلات أو إصلاحات  قمت بها , تفاصيل ضمانها الخ</textarea>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="additions" class="form-control" placeholder="إضافات أخرى">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="is_insurance" class="form-control">
                                <option value="" disabled selected hidden>هل يتوفر تأمين للمركبة</option>
                                <option value="1">نعم</option>
                                <option value="0">لا</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="address" class="form-control" placeholder="العنوان">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="name" class="form-control" placeholder="اسم المعلن">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="email" name="email" class="form-control" placeholder="الايميل">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف">
                        </div>

                        <div class="col-sm-12">
                            <button type="button" class="btn bottom-btn" id="move-forth-car-info">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="last-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="file" name="images[]" id="car-images" class="form-control" multiple="multiple">
                        </div>

                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose video</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn bottom-btn" id="move-last-car-info">أعلن الآن</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('pagescript')
    <script>
        $(document).on('ready', function() {
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
            $("#car-images").fileinput({
                theme: "fas",
                maxFileCount: 5,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false
            });

            $('.step1').on('mouseover', function() {
                $('.step1').css('cursor', 'pointer');
            });
            $('.step2').on('mouseover', function() {
                $('.step2').css('cursor', 'pointer');
            });
            $('.step3').on('mouseover', function() {
                $('.step3').css('cursor', 'pointer');
            });
            $('.step4').on('mouseover', function() {
                $('.step4').css('cursor', 'pointer');
            });

            $('#move-first-car-info').on('click', function() {
                $('#first-car-info').css('display', 'none');
                $('#second-car-info').css('display', 'block');
                $('.step1').css('background-color', '#EE3926');
                $('.step1').addClass('steps-complete').css('border', '2px solid #EE3926');
                $('.step1').addClass('step-move');
                $('.step1').removeClass('steps-back');
            });
            $('#move-second-car-info').on('click', function() {
                $('#second-car-info').css('display', 'none');
                $('#third-car-info').css('display', 'block');
                $('.step2').css('background-color', '#EE3926');
                $('.step2').addClass('steps-complete').css('border', '2px solid #EE3926');
                $('.step2').addClass('step-move');
                $('.step2').removeClass('steps-back');
            });
            $('#move-third-car-info').on('click', function() {
                $('#third-car-info').css('display', 'none');
                $('#forth-car-info').css('display', 'block');
                $('.step3').css('background-color', '#EE3926');
                $('.step3').addClass('steps-complete').css('border', '2px solid #EE3926');
                $('.step3').addClass('step-move');
                $('.step3').removeClass('steps-back');
            });
            $('#move-forth-car-info').on('click', function() {
                $('#forth-car-info').css('display', 'none');
                $('#last-car-info').css('display', 'block');
                $('.step4').css('background-color', '#EE3926');
                $('.step4').addClass('steps-complete').css('border', '2px solid #EE3926');
                $('.step4').addClass('step-move');
                $('.step4').removeClass('steps-back');
            });
            $('#move-last-car-info').on('click', function() {
                $('.step5').css('background-color', '#EE3926');
                $('.step5').addClass('steps-complete').css('border', '2px solid #EE3926');
            });

            for (let i = 0; i <= 6; i++) {
                $('.step' + i).on('click', function() {
                    var stepBack = $('.step' + i).hasClass('step-back');
                    if ($('.step' + i).hasClass('step-move') && stepBack == false) {
                        $('#first-car-info').css('display', i == 0 ? 'block' : 'none');
                        $('#second-car-info').css('display', i == 1 ? 'block' : 'none');
                        $('#third-car-info').css('display', i == 2 ? 'block' : 'none');
                        $('#forth-car-info').css('display', i == 3 ? 'block' : 'none');
                        $('#last-car-info').css('display', i == 4 ? 'block' : 'none');
                        for (let j = 1; j < 6; j++) {
                            if (j != i && j > i) {
                                $('.step' + (j)).css('background-color', '#717171');
                                $('.step' + (j)).removeClass('steps-complete').css('border',
                                    '2px solid #717171');
                                $('.step' + (j)).removeClass('step-move');
                                if (j != 5) {
                                    $('.step' + (j)).addClass('steps-back');
                                }
                            }
                        }
                    }
                });
            }
            $('#first-car-info .category').on('click', function() {
                let category = $(this).attr('id');
                let selectCategory = $('#first-car-info #categorySelect');
                let optionText = `<option value="${category}" selected>${category}</option>`;
                selectCategory.empty().append(`${optionText}`);
                $('#first-car-info .category').removeClass('selected');
                $(this).addClass('selected');
            });
        });

        $(document).ready(function() {
            $("#country").html('');
            $.ajax({
                url: "{{ url('api/country') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#country').html('<option value="">اختر الدولة</option>');
                    $.each(result, function(index, el) {
                        $("select#country").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });

            $('select#country').change(function() {
                var idCountry = $(this).val();
                $("#city").html('');
                $.ajax({
                    url: "{{ url('api/city') }}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        local: '{{ app()->getLocale() }}',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#city').html('<option value="">اختر المدينة</option>');
                        $.each(result['cities'], function(index, el) {
                            $("select#city").append('<option value="' + el
                                .id + '">' + el.name + '</option>');
                        });
                    }
                });
            });

            $.ajax({
                url: "{{ url('api/carcompanies') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#carCompany').html('<option value="">شركة التصنيع</option>');
                    $.each(result, function(index, el) {
                        $("select#carCompany").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });

            $('select#carCompany').change(function() {
                var idCompany = $(this).val();
                $("#carModel").html('');
                $.ajax({
                    url: "{{ url('api/carmodels') }}",
                    type: "POST",
                    data: {
                        companyID: idCompany,
                        local: '{{ app()->getLocale() }}',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#carModel').html('<option value="">موديل السيارة</option>');
                        $.each(result, function(index, el) {
                            $("select#carModel").append('<option value="' + el
                                .id + '">' + el.name + '</option>');
                        });
                    }
                });
            });

            $('select#carModel').change(function() {
                var carID = $(this).val();
                $("#year").html('');
                $.ajax({
                    url: "{{ url('api/caryear') }}",
                    type: "POST",
                    data: {
                        id: carID,
                        local: '{{ app()->getLocale() }}',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#year').html(
                            '<option value="">{{ __('messages.year') }}</option>');
                        $.each(result, function(index, el) {
                            console.log(el);
                            $("select#year").append('<option value="' + el
                                .id + '">' + el.year + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
