@extends('master')
@section('content')
    <div class="add-car-info">
        <div class="container">
            <div class="row">
                <h5>{{ __('messages.AddAdv') }}</h5>
            </div>
            <div id="first-car-info" class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>{{ __('messages.chooseCategory') }}:</h5>
                        <select name="type" id="categorySelect" class="form-control" style="display: none;">
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <a class="category" id="1" href="{{route('adsCar', app()->getLocale())}}">
                            <span><i class="fa fa-car-side"></i></span>
                            <b>{{ __('messages.car') }}</b>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <a class="category" id="2" href="{{route('motorcycle.create', app()->getLocale())}}">
                            <span><i class="fa fa-motorcycle"></i></span>
                            <b>{{ __('messages.motorcycles') }}</b>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <a class="category" id="3" href="{{route('boats.create', app()->getLocale())}}">
                            <span><i class="fa fa-ship"></i></span>
                            <b>{{ __('messages.boats') }}</b>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <a class="category" id="4" href="#">
                            <span><i class="fa fa-truck"></i></span>
                            <b>{{ __('messages.trucks') }}</b>
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn bottom-btn" id="move-first-car-info">التالي</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('pagescript')
    <script>
        $(document).on('ready', function() {
            $('#category1').remove();
            $('#category2').remove();
            $('#category3').remove();
            $('#category4').remove();
            $('#last-car-info1').hide();
            $('#last-car-info2').hide();
            $('#last-car-info3').hide();
            $('#last-car-info4').hide();

            $('#first-car-info .category').on('click', function() {
                let category = $(this).attr('id');
                let selectCategory = $('#first-car-info #categorySelect');
                let optionText = `<option value="${category}" selected>${category}</option>`;
                selectCategory.empty().append(`${optionText}`);
                $('#first-car-info .category').removeClass('selected');
                $(this).addClass('selected');
                idCat = selectCategory.val();
                $('#move-second-car-info' + idCat).on('click', function() {
                    console.log(idCat);
                    $('#category' + idCat).c();
                    $('#first-car-info').hide();
                    $('#second-car-info' + idCat).css('display', 'none');
                    $('#third-car-info' + idCat).css('display', 'block');
                    $('#forth-car-info' + idCat).hide();
                    $('#last-car-info' + idCat).hide();
                    $('.step2').css('background-color', '#EE3926');
                    $('.step2').addClass('steps-complete').css('border', '2px solid #EE3926');
                    $('.step2').addClass('step-move');
                    $('.step2').removeClass('steps-back');
                });
                $('#move-third-car-info' + idCat).on('click', function() {
                    $('#category' + idCat).show();
                    $('#first-car-info').hide();
                    $('#second-car-info' + idCat).hide();
                    $('#third-car-info' + idCat).css('display', 'none');
                    $('#forth-car-info' + idCat).css('display', 'block');
                    $('#last-car-info' + idCat).hide();
                    $('.step3').css('background-color', '#EE3926');
                    $('.step3').addClass('steps-complete').css('border', '2px solid #EE3926');
                    $('.step3').addClass('step-move');
                    $('.step3').removeClass('steps-back');
                });
                $('#move-forth-car-info' + idCat).on('click', function() {
                    $('#category' + idCat).show();
                    $('#first-car-info').hide();
                    $('#second-car-info' + idCat).hide();
                    $('#third-car-info' + idCat).css('display', 'none');
                    $('#forth-car-info' + idCat).css('display', 'none');
                    $('#last-car-info' + idCat).css('display', 'block');
                    $('.step4').css('background-color', '#EE3926');
                    $('.step4').addClass('steps-complete').css('border', '2px solid #EE3926');
                    $('.step4').addClass('step-move');
                    $('.step4').removeClass('steps-back');
                });
                $('#move-last-car-info' + idCat).on('click', function() {
                    $('.step5').css('background-color', '#EE3926');
                    $('.step5').addClass('steps-complete').css('border', '2px solid #EE3926');
                });

                for (let i = 0; i <= 6; i++) {
                    $('.step' + i).on('click', function() {
                        var stepBack = $('.step' + i).hasClass('step-back');
                        if ($('.step' + i).hasClass('step-move') && stepBack == false) {
                            $('#first-car-info').css('display', i == 0 ? 'block' : 'none');
                            $('#second-car-info' + idCat).css('display', i == 1 ? 'block' :
                                'none');
                            $('#third-car-info' + idCat).css('display', i == 2 ? 'block' :
                                'none');
                            $('#forth-car-info' + idCat).css('display', i == 3 ? 'block' :
                                'none');
                            $('#last-car-info' + idCat).css('display', i == 4 ? 'block' :
                                'none');
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

                $("#car-images" + idCat).fileinput({
                    theme: "fas",
                    maxFileCount: 5,
                    allowedFileTypes: ['image'],
                    showCancel: true,
                    showRemove: false,
                    showUpload: false,
                    overwriteInitial: false
                });
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
                $('#category' + idCat).show();
                $('#first-car-info').hide();
                $('#second-car-info' + idCat).css('display', 'block');
                $('#third-car-info' + idCat).hide();
                $('#forth-car-info' + idCat).hide();
                $('#last-car-info' + idCat).hide();
                $('.step1').css('background-color', '#EE3926');
                $('.step1').addClass('steps-complete').css('border', '2px solid #EE3926');
                $('.step1').addClass('step-move');
                $('.step1').removeClass('steps-back');
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
