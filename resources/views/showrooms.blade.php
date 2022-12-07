@extends('master')
@section('content')
    <div class="showrooms">
        <div class="container">
            <div class="showroom-head row">
                <h5>معارض السيارات في الامارات</h5>
                <form action="">
                    <div class="input-group" id="searchCity" style="margin-bottom: 5px;">
                        <select type="text" id="selectCity" name="search" class="form-control" style="margin-top: 14px;">
                            <option value="" disabled selected>كل المدن</option>
                        </select>

                        <div class="input-group-append search-btn">
                            <button class="btn btn-outline-danger" type="submit">المدينة</button>
                        </div>
                    </div>
                    <div class="input-group" id="search">
                        <input type="text" id="input-search" name="search" class="form-control"
                            placeholder="...ابحث عن معرض">
                        <div class="input-group-append search-btn">
                            <button class="btn btn-outline-danger" type="submit">بحث</button>
                        </div>
                        <div class="form-control list-search">
                            <ul id="result" class="result">

                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="showroom-slid row" id="showrooms">
                @foreach ($showrooms as $showroom)
                    <div class="col-md-4 col-sm-12" data-cityId="{{ $showroom->city_id }}">
                        <a href="{{ route('showroom.show', ['showroom' => $showroom->id]) }}" class="card">
                            <img src="{{ asset($showroom->image) }}" alt="{{ $showroom->name }}">
                            <div class="card-body">
                                <p class="card-title">{{ $showroom->name }}</p>
                                <div class="location">
                                    <span>{{ $showroom->address }}</span>
                                    <span
                                        class="cars-number">{{ $showroom->count_ads ? $showroom->count_ads . ' ' . __('messages.car') : 'معرض جديد' }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                {{ $showrooms->links('vendor.pagination.showrooms-paginat') }}
                {{-- <div class="paginate">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div> --}}
            </div>

            <div class="showroom-owner row">
                <div class="contact-us">
                    <h5>هل أنت صاحب معرض؟</h5>
                    <button class="btn">تواصل معنا</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('pagescript')
    <script>
        $('#input-search').on('keyup', function() {
            // console.log('yes');
            $('#result').empty();
            var keyword = $('#input-search').val();
            $.ajax({
                url: "{{ route('search.showroom') }}",
                type: "POST",
                data: {
                    local: '{{ app()->getLocale() }}',
                    text: keyword,
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {

                    $(".list-search").css('display', 'block');
                    $("#result li").remove();
                    $.each(result, function(index, el) {
                        $("#result").append('<li><a href="showroom/' + el.id + '">' + el.name +
                            '</a></li>');
                        // console.log(el);
                    });
                }
            });
        });
        $(document).ready(function() {
            $.ajax({
                url: "{{ url('api/city') }}",
                type: "POST",
                data: {
                    country_id: {{ $_COOKIE['country'] + 1 }},
                    local: '{{ app()->getLocale() }}',
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    console.log(result);
                    $('#selectCity').html('<option value="all" selected>الكل</option>');
                    $.each(result['cities'], function(index, el) {
                        $("select#selectCity").append('<option value="' + el
                            .id + '"' + '>' + el
                            .name + '</option>');
                    });
                }
            });
        });

        // if ($(".list-search").focus) {

        // } else {
        //     $(".list-search").hide();
        // }


        $(document).unbind('click');
        $(document).click(function(event) {
            if ($(event.target).closest('#result').length == 0) {
                $(".list-search").hide();
            }
        });

        $('#selectCity').change(function() {
            var sel = $(this).val();
            // $('a[data-cityId="Offices"] div').hide();
            // if (sel != "00") {
            if (sel === 'all') {
                $('#showrooms').children().show();
            } else {
                $('#showrooms').children().hide();
                $('div[data-cityid="' + sel + '"]').show();
            }

            // console.log(sel);
            // } else {
            //     $('a[name="Offices"] div').show();
            // }
        });
    </script>
@endsection
