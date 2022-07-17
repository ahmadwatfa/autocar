@extends('dashboard.masterAdmin')
@section('container')
    <div class="d-flex add-country">
        <a href="{{ route('addCountry') }}" class="btn btn-primary d-flex justify-content-between align-items-left">Add Country <span class="icon-plus-circle"></span></a>
    </div>

    <div class="table-container m-8">
        <div class="table-responsive">
            <table class="table custom-table m-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Country</th>
                        <th>Sort Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td>{{ $country->id }}</td>
                            <td>{{ $country->name_en }}</td>
                            <td>{{ $country->sortname }}</td>
                            <td>
                                <div class="td-actions">
                                    <a href="{{route('editCountry', $country->id)}}" class="icon red" data-toggle="tooltip" data-placement="top"
                                        title="View Country">
                                        <span class="icon-eye"></span>
                                    </a>
                                    <a href="#" class="icon green" data-toggle="tooltip" data-placement="top"
                                        title="Disable Country">
                                        <span class="icon-remove_circle"></span>
                                    </a>
                                    <a href="{{route('cities', $country->id)}}" class="icon blue" data-toggle="tooltip" data-placement="top"
                                        title="Show Cities">
                                        <span class="icon-dribbble"></span>
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
