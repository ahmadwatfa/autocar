
    <div class="search-box">
        <div class="search-head">
            <span><i class="fa fa-search"></i> {{ __('search.advancedSearc') }}</span>
            {{-- <button class="btn close-search"><i class="fa fa-trash"></i></button> --}}
        </div>
        <div class="search-form">
            <form action="">
                <select name="country" id="country" class="form-control">
                </select>

                <select name="city_id" id="city" class="form-control">
                    <option value="" hidden>{{ __('messages.selectCity') }}</option>
                </select>

                <div class="car-type">
                    <p>{{ __('search.chooseVehicle') }}</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="cars" value="" checked>
                        <label class="form-check-label" for="cars">
                            {{ __('messages.cars') }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="motorcycles" value="">
                        <label class="form-check-label" for="motorcycles">
                            {{ __('messages.motorcycles') }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="boats" value="">
                        <label class="form-check-label" for="boats">
                            {{ __('messages.boats') }}
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="type" id="heavy-vehicles" value="">
                        <label class="form-check-label" for="heavy-vehicles">
                            {{ __('messages.trucks') }}
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="type" id="all-categories" value="">
                        <label class="form-check-label" for="all-categories">
                            {{ __('messages.all') }}
                        </label>
                    </div>
                </div>
                <select name="carComany_id" id="carCompany" class="form-control">
                    <option value="" disabled selected hidden>الموديل/الماركة</option>
                    <option value="">مرسيدس</option>
                    <option value="">سبورت</option>
                    <option value="">بي ام</option>
                </select>

                <div class="form-group price">
                    <label for="price">سنة الصنع</label>
                    <div class="clear"></div>
                    <input type="text" name="year_from" class="form-control price-range" id="year" min="1" placeholder="من">
                    <input type="text" name="year_to" class="form-control price-range" id="year" min="1" placeholder="إلى">
                    <div class="clear"></div>
                </div>
                <div class="form-group price">
                    <label for="price">السعر (درهم )</label>
                    <div class="clear"></div>
                    <input type="text" name="price_from" class="form-control price-range" id="price" min="1" placeholder="من">
                    <input type="text" name="price_to" class="form-control price-range" id="price" min="1" placeholder="إلى">
                    <div class="clear"></div>
                </div>
                <div class="form-group price">
                    <label for="price">الكيلو مترات</label>
                    <div class="clear"></div>
                    <input type="text" name="milage_from" class="form-control price-range" id="milage" min="1" placeholder="من">
                    <input type="text" name="milage_to" class="form-control price-range" id="milage" min="1" placeholder="إلى">
                    <div class="clear"></div>
                </div>
                {{-- <div class="fuel-type">
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
                        <input class="form-check-input" type="radio" name="electricity" id="electricity" value="">
                        <label class="form-check-label" for="electricity">
                            كهرباء
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="all_fuel" id="all-fuel" value="" checked>
                        <label class="form-check-label" for="all-fuel">
                            جميع الأنواع
                        </label>
                    </div>
                </div> --}}
                <div class="transmission-type">
                    <p>اختر نوع ناقل الحركة</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transmission-type" id="normal" value="">
                        <label class="form-check-label" for="normal">
                            عادي
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transmission-type" id="automatic" value="">
                        <label class="form-check-label" for="automatic">
                            اوتوماتيك
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transmission-type" id="cvt" value="">
                        <label class="form-check-label" for="cvt">
                            CVT
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="transmission-type" id="all-transmission"
                            value="" checked>
                        <label class="form-check-label" for="all-transmission">
                            جميع الأنواع
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn">اظهار النتائج</button>
            </form>
        </div>
    </div>

@section('pagescript')
    <script>
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
                    $('#country').html('<option value="" hidden>{{ __("messages.Country") }}</option>');
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
                        console.log(result);
                        $('#city').html('<option value="" hidden>{{ __("messages.selectCity") }}</option>');
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
                    $('#carCompany').html('<option value="" hidden>شركة التصنيع</option>');
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
        });
    </script>
@endsection
