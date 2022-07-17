@extends('master')
@section('content')
    <div class="categories">
        <div class="container">
            <div class="categories-menu row">
                <div class="col-sm-12">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">جميع التصنيفات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">سيارات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">دراجات نارية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">قوارب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">مركبات ثقيلة</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="categories-cars row">
                <div class="col-sm-12 head">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <select name="" class="form-control select-category">
                                <option disabled selected hidden>الأقل سعراً</option>
                                <option value="">صنف 1</option>
                                <option value="">صنف 2</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <a href="#" class="btn add-ads">أضف إعلانك</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 cars-space">
                    <div class="cars row">
                        @foreach ($ads as $ad)
                            <div class="col-md-4 col-sm-12">
                                <div class="advert">
                                    <div class="head">
                                        <div class="title">
                                            <h6>مرسيدس بنز جي ال اس</h6>
                                        </div>
                                        <div class="price">
                                            <b>234,500 درهم</b>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="images/small-golf.png" alt="car">
                                    </div>
                                    <div class="details">
                                        <div class="location">
                                            <span><i class="fa fa-map-marker-alt"></i></span>
                                            <br>
                                            <span>دبي</span>
                                        </div>
                                        <div class="distance">
                                            <span><i class="fa fa-tachometer-alt"></i></span>
                                            <br>
                                            <span>كم 2446</span>
                                        </div>
                                        <div class="year">
                                            <span><i class="fa fa-cog"></i></span>
                                            <br>
                                            <span>2019</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="paginate">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                @include('components.search')
            </div>
        </div>
    </div>
@endsection
