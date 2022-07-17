@extends('dashboard.masterAdmin')
@section('container')
    <div class="content-wrapper">
        <div class="row gutters justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-12">
                <form action="{{ route('saveCountry') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card m-0">
                        <div class="card-header">
                            <div class="card-title">Add Country</div>
                            <div class="card-sub-title">Add New Country</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-ar" name="name_ar"
                                    placeholder="Country Name Arabic" required="" value="{{$country->name_ar}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-en" name="name_en"
                                    placeholder="Country Name English" required="" value="{{$country->name_en}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="sortname" name="sortname"
                                    placeholder="Country Sort Name" required="" value="{{$country->sortname}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phonecode" name="phonecode"
                                    placeholder="Country Phone Code" required="" value="{{$country->phonecode}}">
                            </div>
                            <div class="form-group">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
                                    <img src="{{asset($country->flag)}}" class="img-fluid" alt="Wafi Dashboard">
                                </div>
                                <input type="file" name="flag">
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="hidden" name="status" value="0">
                                            <input name="status" type="checkbox"
                                                aria-label="Checkbox for following text input" id="status" value="1" >
                                            <label for="status">Country Status</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" id="submit" name="submit" class="btn btn-primary float-right">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
