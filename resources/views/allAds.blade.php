@extends('master')
@section('content')
    {{-- @include('components.banner-search') --}}

    @if (session()->has('message_error'))
        {{-- <div class="modal fade" id="ModalWorng" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <p id="error">{{ Session::get('message_error') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div> --}}

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

    {{-- @include('components.main-site') --}}
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
    {{-- @include('components.new-featured') --}}
    @include('components.allAds')


    <div class="browse">
        <div class="container">
            <div class="intro">
                <h5>تصفح المركبات حسب النوع...</h5>
                <p>نقدم لك أفضل المركبات بأفضل المعايير و الأسعار</p>
            </div>
            <div class="categories">
                <div class="category">
                    <a href="{{ route('allAds') }}" class="nondecoration">
                        <span><i class="fa fa-car-side"></i></span>
                        <b>سيارات</b>
                    </a>
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
    </div>
    {{-- @include('components.ads-motorcycle') --}}
    {{-- @include('components.testimonials') --}}


    @guest
        <!-- Modal -->
        {{-- <div class="modal fade modal-account" id="adsFree" tabindex="-1" role="dialog" data-backdrop="static"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="display: flex;
                                    justify-content: space-evenly;">
                <div class="modal-content" style="width: 65%">
                    <div class="modal-header modal-header-account">
                        {{-- <button type="button" class="left-arrow-account" data-dismiss="modal" aria-label="Close"
                            data-toggle="modal" data-target="#exampleModalCenter">
                            <span aria-hidden="true">&rightarrow;</span>
                        </button> --}}
        {{-- <h5 class="modal-title" id="exampleModalLongTitle">إعلن مجاناً</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body" style="margin: 0 auto;">
                        {{-- <div style="margin: 0 auto; text-align:center;">أعلن على موقع أوتو مارك مجاناً</div> --}}
        {{-- <button href="" class="btn btn-danger new-ads"
                            onclick="window.open('{{ route('new.ads') }}','_self')">أضف إعلانك مجانا على موقع أوتو
                            مارك</button>
                    </div>
                </div>
            </div>
        </div> --}}
    @endguest
@endsection

@section('pagescript')
    <script>
        @guest
        $('#adsFree').modal('show');
        @endguest

        $('#ModalWorng').modal("show");
    </script>
@endsection
