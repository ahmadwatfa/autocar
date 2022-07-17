@extends('Admin-Dashboard.master')
@section('container')
    <div class="content-wrapper">
        <div class="row gutters justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-12">
                <form action="{{ route('city.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card m-0">
                        <div class="card-header">
                            <div class="card-title">Add City</div>
                            <div class="card-sub-title">Add City to {{ $country->sortname }}</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-ar" name="name_ar"
                                    placeholder="City Name Arabic" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-en" name="name_en"
                                    placeholder="City Name English" required="">
                            </div>
                            <input type="hidden" value="{{ $country->id }}" name="country_id">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary float-right">ADD
                                City</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
