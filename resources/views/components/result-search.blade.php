<div class="col-sm-3 filter">
    <div class="search-box">
        <div class="search-head">
            <span><i class="fa fa-search"></i>  {{ __('result.advSearch') }}</span>
            <button class="btn close-search"><i class="fa fa-trash"></i></button>
        </div>
        <div class="search-form">
            <form action="{{route('searchmore.adsCar')}}" method="post">
                @csrf

                <select name="country_id" id="country_id" class="form-control">
                    <option value="" disabled selected hidden>الدولة</option>
                    <option value="1">الإمارات</option>
                    <option value="2">السعودية</option>
                    <option value="3">مصر</option>
                </select>
                {{-- <div class="car-type">
                    <p>{{ __('result.chooseType') }}</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="types" id="cars" value="" checked>
                        <label class="form-check-label" for="cars">
                            {{ __('result.cars') }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="types" id="motorcycles" value="">
                        <label class="form-check-label" for="motorcycles">
                            {{ __('result.motorcycles') }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="types" id="boats" value="">
                        <label class="form-check-label" for="boats">
                            {{ __('result.boats') }}
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="types" id="heavy-vehicles" value="">
                        <label class="form-check-label" for="heavy-vehicles">
                            {{ __('result.heavy-vehicles') }}
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="types" id="all-categories" value="">
                        <label class="form-check-label" for="all-categories">
                            {{ __('result.all-categories') }}
                        </label>
                    </div>
                </div> --}}
                <select name="country" id="carCompany" class="form-control">

                </select>
                <div class="form-group price">
                    <label for="price">{{ __('result.year') }}</label>
                    <div class="clear"></div>
                    <input type="text" name="year_from" class="form-control price-range" id="year" min="1"
                        placeholder="{{ __('result.min') }}">
                    <input type="text" name="year_to" class="form-control price-range" id="year" min="1"
                        placeholder="{{ __('result.max') }}">
                    <div class="clear"></div>
                </div>
                <div class="form-group price">
                    <label for="price">{{ __('result.price') }}</label>
                    <div class="clear"></div>
                    <input type="text" name="price_from" class="form-control price-range" id="price" min="1"
                        placeholder="{{ __('result.min') }}">
                    <input type="text" name="price_to" class="form-control price-range" id="price" min="1"
                        placeholder="{{ __('result.max') }}">
                    <div class="clear"></div>
                </div>
                <div class="form-group price">
                    <label for="price">{{ __('result.mileage') }}</label>
                    <div class="clear"></div>
                    <input type="text" name="milage_from" class="form-control price-range" id="milage" min="1"
                        placeholder="{{ __('result.min') }}">
                    <input type="text" name="milage_to" class="form-control price-range" id="milage" min="1"
                        placeholder="{{ __('result.max') }}">
                    <div class="clear"></div>
                </div>
                <div class="transmission-type">
                    <p>{{ __('result.transmission-type') }}</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transmission" id="normal" value="1">
                        <label class="form-check-label" for="normal">
                            {{ __('result.normal') }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transmission" id="automatic" value="2">
                        <label class="form-check-label" for="automatic">
                            {{ __('result.automatic') }}
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="transmission" id="all-transmission"
                            value="3" checked>
                        <label class="form-check-label" for="all-transmission">
                            {{ __('result.all-transmission') }}
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn">اظهار النتائج</button>
            </form>
        </div>
    </div>
</div>
@section('pagescript')
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
