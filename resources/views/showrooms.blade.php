@extends('master')
@section('content')
    <div class="showrooms">
        <div class="container">
            <div class="showroom-head row">
                <h5>معارض السيارات في الامارات</h5>
                <form action="">
                    <div class="input-group" id="search">
                        <input type="text" id="input-search" name="search" class="form-control"
                            placeholder="...ابحث عن معرض">
                        <div class="input-group-append search-btn">
                            <button class="btn btn-outline-danger" type="submit">بحث</button>
                        </div>
                        <div class="form-control list-search">
                            <ul id="result" class="result">
                                {{-- <li><a>معرض 1</a></li>
                                <li>test</li>
                                <li>test</li> --}}
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="showroom-slid row">
                @foreach ($showrooms as $showroom)
                    <div class="col-md-4 col-sm-12">
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
                    // $.each(result['showrooms'], function(index, el) {
                    //     var node = document.createElement("LI");
                    //     var textnode = document.createTextNode(el.name);
                    //     node.appendChild(textnode);
                    //     document.getElementById("result").appendChild(node);
                    // });
                    $.each(result, function(index, el) {
                        $("#result").append('<li><a href="showroom/' + el.id + '">' + el.name + '</a></li>');
                        console.log(el);
                    });
                }
            });
        });

        // $('#search').on('mouseleave', function() {
        //     $(".list-search").css('display', 'none');
        // })


        // $('#search').on('keyup', function() {
        //     search();
        // });
        // search();

        // function search() {
        //     var keyword = $('#search').val();
        //     $.post('{{ route('search.showroom') }}', {
        //             _token: '{{ csrf_token() }}',
        //             text: keyword
        //         },
        //         function(data) {
        //             console.log(data);
        //         });
        // }
    </script>
@endsection
