@extends('master')
@section('content')
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

    <div class="sell-buy">
        <div class="container">

        </div>
    </div>
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
@endsection

@section('pagescript')
    <script>
        @guest
            $('#adsFree').modal('show');
        @endguest

        $('#ModalWorng').modal("show");
    </script>
@endsection
