@extends('Admin-Dashboard.master')
@section('container')
    <div class="content-wrapper">
        <div class="row gutters justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-12">
                <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card m-0">
                        <div class="card-header">
                            <div class="card-title">Add Company</div>
                            <div class="card-sub-title">Add New Model To {{ $company->name_en }}</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-ar" name="name_ar"
                                    placeholder="Country Name Arabic" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-en" name="name_en"
                                    placeholder="Country Name English" required="">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="year" name="year"
                                    placeholder="{{__('Manufacturing Year')}}" required="">
                            </div>
                            <input type="hidden" name="company_id" value="{{$company->id}}">

                            <button type="submit" id="submit" name="submit" class="btn btn-primary float-right">Add
                                Model</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
