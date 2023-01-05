<div class="main-slide">
    <div class="container">
        <div class="row">
            <div class="info-slide">
                <div class="image-slide">
                    <img src="{{ asset('images/big-mercedes.png') }}" alt="">
                </div>
            </div>
            @if (!$agent->isMobile())
            <div class="search-filed">
                <div class="form-main">
                    <form action="{{ route('search.adsCar') }}" method="get">
                        <div class="search-head">

                        </div>
                        <div class="search-body">
                            <div class="search-form">
                                <select name="city_id" id="city" class="search-makes">
                                    <option value="" hidden>{{ __('messages.selectCity') }}</option>
                                </select>
                                <select name="carComany_id" id="carCompany" class="search-makes search-mob" style="margin-top: 1em;">
                                    <option value="" hidden>{{ __('messages.makeCar') }}</option>
                                </select>
                                <select name="carModel_id" id="carModel" class="search-makes search-mob" style="margin-top: 1em;">
                                    <option value="" hidden>{{ __('messages.model') }}</option>
                                </select>
                                <div>
                                    <div class="range-fields">
                                        <label class="heading">{{ __('result.price') }}</label>
                                        <div class="range-inputs">
                                            <input class="text-field" type="number" name="minPrice" placeholder="{{ __('result.price_min') }}">
                                            <input class="text-field" type="number" name="maxPrice" placeholder="{{ __('result.to') }}">
                                        </div>
                                    </div>

                                    <div class="range-fields">
                                        <label class="heading">{{ __('result.mileage') }}</label>
                                        <div class="range-inputs">
                                            <input class="text-field" type="number" name="milage_from" placeholder="{{ __('result.mileage_min') }}">
                                            <input class="text-field" type="number" name="milage_to" placeholder="{{ __('result.to') }}">
                                        </div>
                                    </div>

                                    <div class="range-fields">
                                        <label class="heading">{{ __('result.year') }}</label>
                                        <div class="range-inputs">
                                            <select class="text-field" type="number" name="year_from" placeholder="">
                                                <option value="null">اختر سنة البداية</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                            </select>
                                            <select class="text-field" type="number" name="year_to" placeholder="إلى">
                                                <option value="null">اختر سنة النهاية</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: flex">
                                    <div class="search-action">
                                        <a href="{{ route('searchmore.adsCar') }}">{{ __('messages.advSearch') }}</a>
                                    </div>
                                    <div class="search-action">
                                        <button>{{ __('messages.search') }}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="search-shadow"></div>
                    </form>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
@section('pagescript')
    {{-- <script>
        $.ajax({
            url: "{{ url('api/city') }}",
            type: "POST",
            data: {
                country_id: {{ $country_id }},
                local: '{{ app()->getLocale() }}',
                _token: '{{ csrf_token() }}',
            },
            dataType: 'json',
            success: function(result) {
                $('#city').append('<option value="" hidden>{{ __('messages.selectCity') }}</option>');
                $('#city').append('<option value="0">{{ __('messages.allCity') }}</option>');
                $.each(result['cities'], function(index, el) {
                    $("select#city").append('<option value="' + el
                        .id + '">' + el.name + '</option>');
                });
            }
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
                $('#carCompany').html('<option value="" hidden>{{ __('messages.makeCar') }}</option>');
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
                    $('#carModel').html('<option value="" hidden>موديل السيارة</option>');
                    $.each(result, function(index, el) {
                        $("select#carModel").append('<option value="' + el
                            .id + '">' + el.name + '</option>');
                    });
                }
            });
        });
    </script> --}}
    <script>
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
                $('#carCompany').html('<option value="" hidden>{{ __('messages.makeCar') }}</option>');
                $.each(result, function(index, el) {
                    $("select#carCompany").append('<option value="' + el
                        .id + '">' + el.name + '</option>');
                });
            }
        });
    </script>
@endsection
