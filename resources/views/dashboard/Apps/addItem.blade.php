@extends('dashboard.masterAdmin')
@section('container')
    <div class="content-wrapper">
        <div class="row gutters justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-12">
                <form action="{{ route('lists.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card m-0">
                        <div class="card-header">
                            <div class="card-title">Nrw Item</div>
                            <div class="card-sub-title">Add New Item</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-ar" name="name_ar"
                                    placeholder="Item Name Arabic" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-en" name="name_en"
                                    placeholder="Item Name English" required="">
                            </div>
                            <div class="form-group">
                                <select name="list_type" id="list_type" class="form-control">
                                    <option value="specification_car">Specification Car</option>
                                    <option value="status_car">Status Car</option>
                                    <option value="status_engine">Status Engine</option>
                                    <option value="body_car">Body Car</option>
                                    <option value="number_door">Number Door Car</option>
                                    <option value="petrol_type">Petrol Type</option>
                                    <option value="color">Color</option>
                                </select>
                            </div>


                            <button type="submit" id="submit" name="submit" class="btn btn-primary float-right">Add
                                Item</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
