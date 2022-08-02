<div class="main-slide">
    <div class="container">
        <div class="row">
            <div class="info-slide">
                <div class="head-slide">
                    <h1>هل تبحث عن</h1>
                    <h1>سيارة أحلامك</h1>
                </div>
                <div class="space"></div>
                <div class="head-text">
                    <h2>يمكننا مساعدتك في العثور على أفضل سيارة. تحقق من مراجعاتنا ، قارن النماذج وابحث عن سيارات للبيع.
                    </h2>
                </div>
            </div>
            <div class="search-filed">
                <div class="form-main">
                    <form action="{{ route('search.adsCar') }}" method="post">
                        @csrf
                        <div class="search-head">
                            {{-- <div class="search-radio">
                                <input type="radio" id="all">
                                <label for="all">{{ __('messages.all') }} </label>
                            </div>
                            <div class="search-radio search-radio-active">
                                <input type="radio" id="new">
                                <label for="new">{{ __('messages.new') }}</label>
                            </div>
                            <div class="search-radio">
                                <input type="radio" id="used">
                                <label for="used">{{ __('messages.used') }}</label>
                            </div> --}}
                        </div>
                        <div class="search-body">
                            <div class="search-form">
                                <select name="carComany_id" id="carCompany" class="search-makes">
                                    <option value="" hidden>{{ __('messages.makeCar') }}</option>
                                </select>
                                <select name="carModel_id" id="carModel" class="search-makes" style="margin-top: 2em;">
                                    <option value="" hidden>{{ __('messages.model') }}</option>
                                </select>
                                <div style="display: flex">
                                    <div class="search-input">
                                        <label for="price_from">{{ __('messages.minPrice') }}</label>
                                        <input type="number" name="minPrice">
                                    </div>
                                    <div class="search-input">
                                        <label for="price_to">{{ __('messages.maxPrice') }}</label>
                                        <input type="number" name="maxPrice">
                                    </div>
                                </div>
                                <div style="display: flex">
                                    <div class="search-input">
                                    <label for="price">{{ __('result.mileage') }}</label>
                                    <div class="clear"></div>
                                    <input type="text" name="milage_from" class="form-control price-range"
                                        id="milage" min="1" placeholder="{{ __('result.min') }}">
                                    </div>
                                    <div class="search-input">
                                        <label for="price">{{ __('result.mileage') }}</label>
                                    <input type="text" name="milage_to" class="form-control price-range"
                                        id="milage" min="1" placeholder="{{ __('result.max') }}">
                                    <div class="clear"></div>
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
            <div class="image-slide">
                <img src="{{ asset('images/big-mercedes.png') }}" alt="">
            </div>
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
    </script>
@endsection
