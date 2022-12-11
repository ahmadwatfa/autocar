@extends('master')
@section('content')
    {{-- @include('components.banner-search') --}}

    @if (session()->has('message_error'))
        <div class="modal fade modal-account" id="ModalWorng" tabindex="-1" data-backdrop="static" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-header-account">
                        <h5 class="modal-title" id="exampleModalLongTitle">تحذير</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body" style="text-align: center;">
                        <p id="error">{{ Session::get('message_error') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"
                            style="color: #fff">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @include('components.main-site')
    <div class="sell-buy">
        <div class="container">
            {{-- <div class="row">
                <div class="col-md-6 col-sm-12">
                    <a href="#" class="btn first">اشتري سيارتك الآن</a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="#" class="btn second">بيع سيارتك الآن</a>
                </div>
            </div> --}}
        </div>
    </div>

    @if ($agent->isMobile())
        @include('components.new-featured-mobile')
        {{-- @include('components.ads-car-mobile') --}}
    @else
        @include('components.new-featured')
        {{-- @include('components.ads-car') --}}
    @endif



    {{-- <div class="browse">
        <div class="container">
            <div class="intro">
                <h5>تصفح المركبات حسب النوع...</h5>
                <p>نقدم لك أفضل المركبات بأفضل المعايير و الأسعار</p>
            </div>
            <div class="categories">
                <div class="category">
                    <span><i class="fa fa-car-side"></i></span>
                    <b>سيارات</b>
                </div>
                <div class="category">
                    <span><i class="fa fa-motorcycle"></i></span>
                    <b>دراجات نارية</b>
                </div>
                <div class="category">
                    <span><i class="fa fa-ship"></i></span>
                    <b>قوارب</b>
                </div>
                <div class="category">
                    <span><i class="fa fa-truck"></i></span>
                    <b>مركبات ثقيلة</b>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- @include('components.ads-motorcycle') --}}
    {{-- @include('components.testimonials') --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">تنبيه</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="text-align: right;">
               يجب عليك التسجيل او تسجيل الدخول لاضافة الاعلانات للمفضلة
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    @guest

    @endguest
@endsection

@section('pagescript1')
    <script type="text/javascript">
        $('#ModalWorng').modal("show");

        $(document).on('ready', function() {
            // $('#adsFree').modal({backdrop: 'static', keyboard: false})
            $('#adsFree').modal('show');

            $('.ads-images1').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true,
                prevArrow: false,
                nextArrow: false,
            });
        });

        $('.star').on('click', function (e) {
            e.preventDefault();
            @guest()
                $('#exampleModal').modal('show');
            @endguest
            $.ajax({
                type: "POST",
                url: "{{ route('wishlist.store') }}",
                data: {
                    '_token': '{{ csrf_token() }}',
                    adsId: $(this).attr('data-id'
                    )
                },
                dataType: "json",
                success: function (response) {
                    toastr.success(response.msg);
                }
            });
        });

    </script>
@endsection
