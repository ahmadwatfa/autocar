@extends('Admin-Dashboard.master')
@section('container')
    <div class="d-flex add-country">
        <a href="{{ route('lists.create') }}" class="btn btn-primary d-flex justify-content-between align-items-left">Add Item
            <span class="icon-plus-circle"></span></a>
    </div>

    <div class="table-container m-8">
        <div class="table-responsive">
            <table class="table custom-table m-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name_ar</th>
                        <th>name_en</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $i)
                        <tr>
                            <td>{{ $i->id }}</td>
                            <td>{{ $i->name_ar }}</td>
                            <td>{{ $i->name_en }}</td>
                            <td>{{ $i->list_type }}</td>
                            <td>
                                <div class="td-actions">
                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top"
                                        title="View Company">
                                        <span class="icon-eye"></span>
                                    </a>
                                    <a href="#" class="icon green" data-toggle="tooltip" data-placement="top"
                                        title="Disable Country">
                                        <span class="icon-remove_circle"></span>
                                    </a>
                                    <a href="#" class="icon blue" data-toggle="tooltip" data-placement="top"
                                        title="Show Cars Model">
                                        <span class="icon-directions_car"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            @if ($list->hasMorePages())
                <li><a href="{{ $list->nextPageUrl('vendor.pagination.custom') }}" rel="next">Next →</a></li>
                @if ($list->currentPage() > 1)
                    <li><a href="{{ $list->previousPageUrl('vendor.pagination.custom') }}" rel="previous">previous</a></li>
                @endif
            @else
                <li class="disabled"><span>Next →</span></li>
            @endif
        </div>
    </div>
@endsection
