@extends('dashboard.masterAdmin')
@section('container')
    <div class="d-flex add-country">
        <a href="{{ route('addModel', $id) }}" class="btn btn-primary d-flex justify-content-between align-items-left">New Model<span class="icon-plus-circle"></span></a>
    </div>

    <div class="table-container m-8">
        <div class="table-responsive">
            <table class="table custom-table m-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Company</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td>{{ $car->name_en }}</td>
                            <td>{{ $car->year }}</td>
                            <td>{{ $company }}</td>
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
