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
            </div>
            <form action="{{ route('motorcycle.store', app()->getLocale()) }}" method="POST" class="row"
                enctype="multipart/form-data">
                @csrf

                <div id="first-car-info" class="col-sm-12">
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
                                <option value="" disabled selected hidden>اختر نوع دراجتك</option>
                                <option value="1">دراجة نارية رياضية</option>
                                <option value="2">مغامرات/تجوال</option>
                                <option value="3">دراجة نارية "شوبر"</option>
                                <option value="4">قدرة على الطرقات الوعرة</option>
                                <option value="5">سكوتر</option>
                                <option value="6">نموذجي</option>
                                <option value="7">كوفي ريسر</option>
                                <option value="8">مقطورة</option>
                                <option value="9">كارتينغ</option>
                                <option value="10">موبيد</option>
                                <option value="0">غير ذلك</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="motorcycle_company" id="motocycleCompany" class="form-control">
                                <option value="" disabled selected hidden>شركة التصنيع</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="motorcycleModel_id" id="motorcycleModel" class="form-control">
                                <option value="" disabled selected hidden>موديل الدراجة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="year" id="year" class="form-control">
                                <option value="" disabled selected hidden>{{ __('messages.year') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="scope_used" id="used_mada" class="form-control">
                                <option value="" disabled selected hidden>مدى الإستخدام</option>
                                <option value="2">لا تزال مع الوكيل</option>
                                <option value="3">تم الإستخدام مرة واحدة منذ الشراء</option>
                                <option value="4">نادر ما استخدم منذ الشراء</option>
                                <option value="5">تم الإستخدام مرة أو مرتين أسبوعياً منذ الشراء</option>
                                <option value="6">تم الإستخدام كوسيلةأساسية للتنقل</option>
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
                            <input type="number" name="price" class="form-control" placeholder="السعر المطلوب (درهم)">
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn bottom-btn" id="move-first-car-info">التالي</button>
                        </div>
                    </div>
                </div>

                <div id="second-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <input type="number" name="mileage" class="form-control" placeholder="المسافة المقطوعة">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="power_transmission_system" id="power_transmission_system" class="form-control">
                                <option value="" disabled selected hidden>نظام نقل القدرة</option>
                                <option value="7">حزام</option>
                                <option value="8">سلسلة</option>
                                <option value="9">عمود</option>
                                <option value="10">لا ينطبق</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="status_motorcycle" id="" class="form-control">
                                <option value="" disabled selected hidden>حالة الدراجة</option>
                                <option value="12">ممتازة</option>
                                <option value="13">عيوب بسيطة تم إصلاحها</option>
                                <option value="14">أعطال كبيرة تم إصلاحها</option>
                                <option value="15">فيها بعض العيوب البسيطة</option>
                                <option value="16">أعطال ميكانكية مستمرة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="number_tire" id="number_tire" class="form-control">
                                <option value="" disabled selected hidden>عدد الإطارات</option>
                                <option value="1">إطاران</option>
                                <option value="2">3 إطارات</option>
                                <option value="3">4 إطارات</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="engine_cc" id="engine_cc" class="form-control">
                                <option value="" disabled selected hidden>حجم المحرك</option>
                                <option value="1">أقل من 250cc</option>
                                <option value="2">250cc - 499cc</option>
                                <option value="3">500cc - 599cc</option>
                                <option value="3">600cc - 749cc</option>
                                <option value="3">750cc - 999cc</option>
                                <option value="3">أكثر من 1000cc</option>
                                <option value="3">لا ينطلب</option>
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
                            <button type="button" class="btn bottom-btn" id="move-second-car-info">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="third-car-info" class="col-sm-12">
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
                            <button type="button" class="btn bottom-btn" id="move-third-car-info">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="forth-car-info" class="col-sm-12">
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
                            <button type="submit" class="btn bottom-btn" id="move-forth-car-info">أعلن الآن</button>
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
                    _token: '{{ csrf_token() }}',
                    type: 'motorcycle'
                },
                dataType: 'json',
                success: function(result) {
                    $('#motocycleCompany').html('<option value="">شركة التصنيع</option>');
                    $.each(result, function(index, el) {
                        $("select#motocycleCompany").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });

            $('select#motocycleCompany').change(function() {
                var idCompany = $(this).val();
                $("#motorcycleModel").html('');
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
                        $('#motorcycleModel').html('<option value="">موديل الدراجة</option>');
                        $.each(result, function(index, el) {
                            $("select#motorcycleModel").append('<option value="' + el
                                .id + '">' + el.name + '</option>');
                        });
                    }
                });
            });

            $('select#motorcycleModel').change(function() {
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
                            $("select#year").append('<option value="' + el
                                .id + '">' + el.year + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
