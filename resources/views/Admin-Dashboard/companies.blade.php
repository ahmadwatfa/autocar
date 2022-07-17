@extends('Admin-Dashboard.master')
@section('container')
    <div class="main-container">
        <div class="d-flex add-country">
            <a href="{{ route('company.create') }}"
                class="btn btn-primary d-flex justify-content-between align-items-left">Add Country <span
                    class="icon-plus-circle"></span></a>
        </div>

        <div class="table-container m-8">
            <div class="table-responsive">
                <table class="table custom-table m-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company</th>
                            <th>logo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td>{{ $company->id }}</td>
                                <td>{{ $company->name_en }}</td>
                                <td><img src="{{ asset($company->logo) }}" width="60" height="60"></td>
                                <td>
                                    <div class="td-actions">
                                        <a href="{{ route('company.edit', $company->id) }}" class="icon red"
                                            data-toggle="tooltip" data-placement="top" title="View Company">
                                            <span class="icon-eye"></span>
                                        </a>
                                        <a href="#" class="icon green" data-toggle="tooltip" data-placement="top"
                                            title="Disable Country">
                                            <span class="icon-remove_circle"></span>
                                        </a>
                                        <a href="{{ route('brand.index', $company->id) }}" class="icon blue"
                                            data-toggle="tooltip" data-placement="top" title="Show Cars Model">
                                            <span class="icon-directions_car"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
