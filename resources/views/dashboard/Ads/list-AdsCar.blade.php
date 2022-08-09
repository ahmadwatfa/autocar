@extends('dashboard.masterAdmin')
@section('container')
    <div class="table-container">
        <div class="table-responsive">
            <table class="table custom-table m-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Car</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>SPECIAL</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ads as $ad)
                        <tr id="{{ $ad->id }}" style="{{ $ad->status ?  '' : 'background-color: rgb(255,0,0,.5);' }}">
                            <td>{{ $ad->id }}</td>
                            <td>{{ $car[$ad->id]['companyName'] . ' ' . $car[$ad->id]['modelName'] . ' ' . $car[$ad->id]['year'] }}
                            </td>
                            <td>{{ $ad->name }}</td>
                            <td>{{ $ad->phone }}</td>
                            <td>
                                <input data-id="{{ $ad->id }}" class="toggle-special" type="checkbox"
                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                    data-off="InActive" {{ $ad->is_special ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input data-id="{{ $ad->id }}" class="toggle-class" type="checkbox"
                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                    data-off="InActive" {{ $ad->status ? 'checked' : '' }}>
                            </td>
                            <td>
                                <div class="td-actions">
                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Add Row">
                                        <i class="icon-circle-with-plus"></i>
                                    </a>
                                    <a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Save Row">
                                        <i class="icon-save"></i>
                                    </a>
                                    <a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Delete Row">
                                        <i class="icon-cancel"></i>
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

@section('script')
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                console.log(status);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/admin/adsCarChangeStatus',
                    data: {
                        'status': status,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.success);
                        if(status == 0) {
                            document.getElementById(id).style.background = "rgb(255,0,0,.5)";
                        } else {
                            document.getElementById(id).style.background = "rgb(0,255,0,.5)";
                        }
                    }
                });
            })
        })
        $(function() {
            $('.toggle-special').change(function() {
                var is_special = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                console.log(status);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/admin/adsCarChangeSpecial',
                    data: {
                        'is_special': is_special,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
@endsection
