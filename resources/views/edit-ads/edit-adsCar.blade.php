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
            <form action="{{ route('ads-car.update', $ads->id) }}" method="POST" class="row"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div id="first-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="country">الدولة</label>
                            <input value="{{ $ads->country_id }}" type="text" hidden id="countryID">
                            <select name="country_id" id="country" class="form-control input-text" required>
                                <option value="" selected hidden>{{ __('messages.selectCountry') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="city">المدينة</label>
                            <input value="{{ $ads->city_id }}" type="text" hidden id="cityID">
                            <select name="city_id" id="city" class="form-control input-text">
                                <option value="" hidden>{{ __('messages.selectCity') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="carCompany">شركة التصنيع</label>
                            <select name="carComany_id" id="carCompany" class="form-control input-text">
                                <option value="" hidden>شركة التصنيع</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="carModel">موديل السيارة</label>
                            <select name="carModel_id" id="carModel" class="form-control input-text">
                                <option value="" hidden>موديل السيارة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="specification_car">المواصفات الاقليمية</label>
                            <select name="specification" id="specification_car" class="form-control input-text">
                                <option value="" hidden>المواصفات الاقليمية</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="year">{{ __('messages.year') }}</label>
                            <input type="text" name="year" id="year" class="form-control input-text"
                                value="{{ $ads->year }}">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="mileage">المسافة المقطوعة</label>
                            <input type="text" min="1000" id="mileage" name="mileage"
                                class="form-control input-text" value="{{ $ads->mileage }}">

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="price1">السعر المطلوب (درهم)</label>
                            <input type="text" name="price" id="price1" class="form-control input-text"
                                value="{{ $ads->price }}">
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn bottom-btn" id="move-first-car-info">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="second-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="status_car">حالة السيارة</label>
                            <select name="status_car" id="status_car" class="form-control input-text">
                                <option value="" disabled selected hidden>الحالة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="status_engine">الحالة الميكانيكة</label>
                            <select name="status_engine" id="status_engine" class="form-control input-text">
                                <option value="" disabled selected hidden>الحالة الميكانيكة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="body_car">شكل السيارة</label>
                            <select name="body" id="body_car" class="form-control input-text">
                                <option value="" disabled selected hidden>شكل جسم المركبة</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="number_door">عدد الأبواب</label>
                            <select name="door" id="number_door" class="form-control input-text">
                                <option value="" disabled selected hidden>عدد الأبواب</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="clynder">عدد الإسطوانات</label>
                            <input type="text" name="clynder" class="form-control input-text"
                                value="{{ $ads->clynder }}">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="gear">نوع ناقل الحركة</label>
                            <select name="gear" id="gear" class="form-control input-text">
                                <option value="" disabled selected hidden>ناقل الحركة</option>
                                <option value="1" {{ $ads->gear == 1 ? 'selected' : '' }}>عادي</option>
                                <option value="2" {{ $ads->gear == 2 ? 'selected' : '' }}>أوتوماتيك</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="petrol_type">نوع الوقود</label>
                            <select name="petrol_type" id="petrol_type" class="form-control input-text">
                                <option value="" disabled selected hidden>نوع الوقود</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="color">لون المركبة</label>
                            <select name="color" id="color" class="form-control input-text">
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
                            <label class="label label-input" for="description">وصف السيارة</label>
                            <textarea class="form-control input-text" name="description" id="" rows="3">{{ $ads->description }}</textarea>
                            {{-- تحدث عن طول المدة التي تملكتها , حالة المركبة الميكانيكية , أي  تعديلات أو إصلاحات  قمت بها , تفاصيل ضمانها الخ --}}
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="additions">إضافات أخرى</label>
                            <input type="text" name="additions" class="form-control input-text"
                                value="{{ $ads->additions }}">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="insurance">هل يتوفر تأمين للمركبة</label>
                            <select name="is_insurance" id="insurance" class="form-control input-text">
                                <option value="1" {{ $ads->is_insurance == 1 ? 'selected' : '' }}>نعم</option>
                                <option value="0" {{ $ads->is_insurance == 0 ? 'selected' : '' }}>لا</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn bottom-btn" id="move-third-car-info"
                                onclick="selecteMain();">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="forth-car-info" class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="label label-input" for=""></label>
                            <input type="file" name="images[]" id="car-images" class="form-control"
                                multiple="multiple">
                        </div>

                        <div class="col-sm-12">
                            <button type="button" class="btn bottom-btn" id="move-forth-car-info">التالي</button>
                        </div>
                    </div>
                </div>
                <div id="last-car-info" class="col-sm-12">
                    <div class="row">

                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="name">اسم المعلن</label>
                            <input type="text" name="name" class="form-control input-text" placeholder=""
                                value="{{ $ads->name }}">
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <label class="label label-input" for="phone">رقم الهاتف</label>
                            <input type="text" name="phone" class="form-control input-text" placeholder=""
                                value="{{ $ads->phone }}">
                        </div>
                        @auth
                            <div class="col-sm-12">
                                <button type="submit" class="btn bottom-btn" id="move-last-car-info">أعلن الآن</button>
                            </div>
                        @endauth
                        @guest
                            <div class="col-md-6 col-sm-12">
                                <label class="label label-input" for="email">الايميل</label>
                                <input type="email" name="email" class="form-control input-text" placeholder=""
                                    value="{{-- $user->email --}}">
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label class="label label-input" for="password">كلمة السر</label>
                                <input name="password" type="password" class="form-control input-text" placeholder=""
                                    autocomplete="new-password">
                            </div>

                            <!-- Modal Login And Post Ads -->
                        @endguest
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('pagescript')
    {{-- Validation --}}
    <script>
        let error_milage = false;
        let error_price = false;
        let empty = false;

        $('.bottom-btn').prop('disabled', false);

        // $(document).on('ready', function() {
        //     error_milage = true;
        //     error_price = true;
        //     handler();
        // });

        $('#first-car-info input').keyup(function() {
            // empty = false;
            $('#first-car-info input').each(function() {
                if ($(this).val() == '') {
                    console.log($(this).val());
                    // empty = true;
                }
            });

            handler();
        });

        $('#mileage').keyup(function() {
            $('span.mileage').remove();
            var inputVal = $(this).val();
            var characterReg = /^\d*$/;
            if (!characterReg.test(inputVal)) {
                $(this).after(
                    '<span class="error error-keyup-2 mileage" style="color:red">يجب أن تكون القيمة أرقام</span>'
                );
                error_milage = true;
                handler();
            } else if (inputVal < 1000) {
                $(this).after(
                    '<span class="error error-keyup-2 mileage" style="color:red">يجب أن تكون القيمة أكبر من 1000</span>'
                );
                error_milage = true;
                handler();
            } else {
                error_milage = false;
                handler();
            }
        });


        $('#price1').keyup(function() {
            $('span.mileage').remove();
            var inputVal = $(this).val();
            var characterReg = /^\d*$/;

            if (inputVal == null || inputVal == "") {
                error_price = false;
                handler();
            } else if (inputVal < 1000) {
                $(this).after(
                    '<span class="error error-keyup-2 mileage" style="color:red">يجب أن تكون القيمة أكبر من 1000</span>'
                );
                error_price = true;
                handler();
            } else {
                error_price = false;
                handler();
            }
            console.log(inputVal + ' ' + error_price);
        });

        var handler = function() {
            if (empty || error_milage || error_price) {
                $('.bottom-btn').prop('disabled', true);
            } else {
                $('.bottom-btn').prop('disabled', false);
            }
        };
    </script>

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
                maxFileCount: 15,
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
            var countryID = $("#countryID").val();
            $.ajax({
                url: "{{ url('api/country') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',

                success: function(result) {
                    $('#country').html('<option value="" hidden>اختر الدولة</option>');
                    $.each(result, function(index, el) {
                        $("select#country").append('<option value="' + el
                            .id + '" ' + (el.id == "{{ $ads->country_id }}" ?
                                "selected" :
                                "") + '>' + el.name + '</option>');
                    });
                    fetchCity(countryID);
                }
            });

            function fetchCity(idCountry) {
                var cityID = $("#cityID").val();
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
                        $('#city').html('<option value="" hidden>اختر المدينة</option>');
                        $.each(result['cities'], function(index, el) {
                            $("select#city").append('<option value="' + el
                                .id + '"' + (el.id == "{{ $ads->city_id }}" ?
                                    "selected" :
                                    "") + '>' + el
                                .name + '</option>');
                        });
                    }
                });

            }

            $('select#country').change(function() {
                var idCountry = $(this).val();
                fetchCity(idCountry);
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
                    $('#carCompany').html('<option value="" hidden>شركة التصنيع</option>');
                    $.each(result, function(index, el) {
                        $("select#carCompany").append('<option value="' + el
                            .id + '"' + (el.id == "{{ $ads->carComany_id }}" ?
                                "selected" : "") + '>' + el.name + '</option>');
                    });
                    fetchModel("{{ $ads->carComany_id }}");
                }
            });

            $('select#carCompany').change(function() {
                var idCompany = $(this).val();
                fetchModel(idCompany);
            });

            function fetchModel(idCompany) {
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
                        $('#carModel').html('<option value="" hidden>موديل السيارة</option>');
                        $.each(result, function(index, el) {
                            $("select#carModel").append('<option value="' + el
                                .id + '"' + (el.id == "{{ $ads->carModel_id }}" ?
                                    "selected" : "") + '>' + el.name + '</option>');
                        });
                        fetchYear("{{ $ads->carModel_id }}");
                    }
                });
            }

            $('select#carCompany').change(function() {
                var carID = $(this).val();
                fetchModel(carID);
            });

            function fetchYear(idModel) {
                $.ajax({
                    url: "{{ url('api/caryear') }}",
                    type: "POST",
                    data: {
                        id: idModel,
                        local: '{{ app()->getLocale() }}',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#year').html(
                            '<option value="">{{ __('messages.year') }}</option>');
                        $.each(result, function(index, el) {
                            $("select#year").append('<option value="' + el
                                .id + '"' + (el.id == "{{ $ads->carModel_id }}" ?
                                    "selected" : "") + '>' + el.year + '</option>');
                        });
                    }
                });
            }

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

        $("#specification_car").on('ready', fetchList("specification_car", "{{ $ads->specification }}"));
        $("#status_car").on('ready', fetchList("status_car", "{{ $ads->status_car }}"));
        $("#status_engine").on('ready', fetchList("status_engine", "{{ $ads->status_engine }}"));
        $("#body_car").on('ready', fetchList("body_car", "{{ $ads->body }}"));
        $("#number_door").on('ready', fetchList("number_door", "{{ $ads->door }}"));
        $("#petrol_type").on('ready', fetchList("petrol_type", "{{ $ads->petrol_type }}"));
        $("#color").on('ready', fetchList("color", "{{ $ads->color }}"));

        function fetchList(typeList, id) {
            $.ajax({
                url: "{{ url('api/itemList') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    type: typeList,
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result, function(index, el) {
                        $("#" + typeList).append('<option value="' + el
                            .id + '"' + (el.id == id ?
                                "selected" : "") + '>' + el.name + '</option>');
                    });
                }
            });
        }
        $(document).ready(function() {
            // var medias = {!! json_encode($medias->toArray()) !!};

            $("#car-images").fileinput({
                // actionDelete: '<button type="button" class="kv-file-remove {removeClass}" title="{removeTitle}"{dataUrl}{dataKey}>{removeIcon}</button>\n',
                initialPreview: [
                    @foreach ($medias as $media)
                        '<img src="{{ asset('images/advs') }}/{{ $media->file_name }}" class="file-preview-image">',
                    @endforeach
                ],
                previewFileIconSettings: {
                    'docx': '<i class="fas fa-file-word text-primary"></i>',
                    'xlsx': '<i class="fas fa-file-excel text-success"></i>',
                    'pptx': '<i class="fas fa-file-powerpoint text-danger"></i>',
                    'jpg': '<i class="fas fa-file-image text-warning"></i>',
                    'pdf': '<i class="fas fa-file-pdf text-danger"></i>',
                    'zip': '<i class="fas fa-file-archive text-muted"></i>',
                },
                fileActionSettings: {
                    showRemove: false,
                    showUpload: false,
                    showZoom: true,
                    showDrag: false,
                    showIndicator: true,

                },
                showRemove: false,
                showUpload: false,
            });
        });

        function insertAfter(newNode, existingNode) {
            existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
        }

        function selecteMain() {
            var div = [];
            var ill = [];
            var mainImageId = '{{ $mainImage }}';
            console.log(mainImageId);
            function createElemeny(s) {
                div[s] = document.createElement('div');
                div[s].className = 'file-upload-indicator';
                div[s].title = 'Select Main Image';

                ill[s] = document.createElement('i');
                ill[s].className = 'bi-check-circle text-warning removeSelected';
                div[s].appendChild(ill[s]);
            }

            allElements = document.querySelectorAll('.file-actions');

            for (var i = 0; i < allElements.length; i++) {
                allElements[i].id = 'addIcon' + i;
            }

            for (var ii = 0; ii < allElements.length; ii++) {
                elem = 'addIcon' + ii;
                createElemeny(ii)
                document.getElementById(elem).appendChild(div[ii]);

                if (ii == mainImageId) {
                    document.getElementById(elem).children[1].children[0].setAttribute("class", "bi-check-circle-fill text-success removeSelected");
                }
            }

        }

        function selectMain(selectedID, indexImage) {
            var inputIndex = document.createElement('input');
            inputIndex.type = 'hidden';
            inputIndex.name = 'mainImageIndex';
            inputIndex.id = 'inputIndex';
            inputIndex.value = indexImage;

            allElements = document.querySelectorAll('.removeSelected');
            allElements.forEach(box => {
                box.setAttribute("class", "bi-check-circle text-warning removeSelected");
            });

            document.getElementById(selectedID).children[1].children[2].children[1].children[0].setAttribute("class",
                "bi-check-circle-fill text-success removeSelected");

            allInputs = document.querySelectorAll('#inputIndex');
            allInputs.forEach(box => {
                box.remove();
            });

            document.getElementById(selectedID).appendChild(inputIndex);

        }
    </script>
@endsection
