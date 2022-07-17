@extends('master')
@section('content')
    <div class="add-car-info">
        <div class="container">
            <div class="row">
                <h5>أضف معلومات سيارتك</h5>
            </div>
            <div class="row steps">
                <div class="step0 step-move"></div>
                <div class="step1"></div>
                <div class="step2"></div>
                <div class="step3"></div>
                <div class="step4"></div>
            </div>
            <form action="{{ route('addAdv', app()->getLocale()) }}" method="POST" class="row"
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
                            <select name="carComany_id" id="carCompany" class="form-control">
                                <option value="" disabled selected hidden>شركة التصنيع</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="" id="carModel" class="form-control">
                                <option value="" disabled selected hidden>موديل السيارة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="specification" id="specification" class="form-control">
                                <option value="" disabled selected hidden>المواصفات الاقليمية</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="carModel_id" id="year" class="form-control">
                                <option value="" disabled selected hidden>{{ __('messages.year') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="mileage" class="form-control" placeholder="المسافة المقطوعة">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="price" class="form-control" placeholder="السعر المطلوب (درهم)">
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn bottom-btn" id="move-first-car-info">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="second-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <select name="status_car" id="status_car" class="form-control">
                                <option value="" disabled selected hidden>الحالة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="status_engine" id="status_engine" class="form-control">
                                <option value="" disabled selected hidden>الحالة الميكانيكة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="body" id="body" class="form-control">
                                <option value="" disabled selected hidden>شكل جسم المركبة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="door" id="door" class="form-control">
                                <option value="" disabled selected hidden>عدد الأبواب</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="clynder" class="form-control" placeholder="عدد الإسطوانات">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="gear" id="" class="form-control">
                                <option value="" disabled selected hidden>ناقل الحركة</option>
                                <option value="1">عادي</option>
                                <option value="2">أوتوماتيك</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="petrol_type" id="petrol_type" class="form-control">
                                <option value="" disabled selected hidden>نوع الوقود</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <select name="color" id="color" class="form-control">
                                <option value="" disabled selected hidden>لون المركبة</option>
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
                            <input type="text" name="name" class="form-control" placeholder="اسم المعلن" value="{{$user->name}}">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="email" name="email" class="form-control" placeholder="الايميل" value="{{$user->email}}">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" value="{{$user->mobile}}">
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
                    type: 'car'
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
                            $("select#year").append('<option value="' + el
                                .id + '">' + el.year + '</option>');
                        });
                    }
                });
            });
            $.ajax({
                url: "{{ url('api/itemList') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    type: 'specification_car',
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result, function(index, el) {
                        $("select#specification").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });
            $.ajax({
                url: "{{ url('api/itemList') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    type: 'status_car',
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result, function(index, el) {
                        $("select#status_car").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });
            $.ajax({
                url: "{{ url('api/itemList') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    type: 'body_car',
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result, function(index, el) {
                        $("select#body").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });
            $.ajax({
                url: "{{ url('api/itemList') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    type: 'status_engine',
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result, function(index, el) {
                        $("select#status_engine").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });
            $.ajax({
                url: "{{ url('api/itemList') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    type: 'number_door',
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result, function(index, el) {
                        $("select#door").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });
            $.ajax({
                url: "{{ url('api/itemList') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    type: 'petrol_type',
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result, function(index, el) {
                        $("select#petrol_type").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });

            $.ajax({
                url: "{{ url('api/itemList') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    type: 'color',
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result, function(index, el) {
                        $("select#color").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });

        });
    </script>
@endsection
