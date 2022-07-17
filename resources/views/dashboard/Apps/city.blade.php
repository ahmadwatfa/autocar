@extends('dashboard.masterAdmin')
@section('container')
    <div class="d-flex add-country">
        <a href="{{ route('addCity', $countryID) }}" class="btn btn-primary d-flex justify-content-between align-items-left">Add City <span class="icon-plus-circle"></span></a>
    </div>

    <div class="table-container m-8">
        <div class="table-responsive">
            <table class="table custom-table m-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                        <tr>
                            <td>{{ $city->id }}</td>
                            <td>{{ $city->name_en }}</td>
                            <td>{{ $city->country }}</td>
                            <td>
                                <div class="td-actions">
                                    <a href="" class="icon red" data-toggle="tooltip" data-placement="top"
                                        title="View Country">
                                        <span class="icon-eye"></span>
                                    </a>
                                    <a href="#" class="icon green" data-toggle="tooltip" data-placement="top"
                                        title="Disable Country">
                                        <span class="icon-remove_circle"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
