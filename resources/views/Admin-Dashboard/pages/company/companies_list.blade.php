@extends('Admin-Dashboard.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="{{ route('Dashboard.index') }}"><i class="fa fa-home"></i> الرئيسية</a></li>
                <li class="active">قائمة الشركات</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session()->has('update'))
                        <div class="alert alert-success">
                            {{ session('update') }}
                        </div>
                    @endif
                    @if (session()->has('delete'))
                        <div class="alert alert-danger">
                            {{ session('delete') }}
                        </div>
                    @endif

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"> <i class="fa fa-laptop"></i> قائمة الشركات </h3>
                            <a href="{{ route('company.create') }}" class="btn btn-primary pull-left"><i
                                    class="fa fa-plus"></i> إضافة شركة
                                جديدة </a>

                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
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
                                            <td> <a href="{{ route('brand.index', $company->id) }}" class="icon blue"
                                                data-toggle="tooltip" data-placement="top" title="Show Cars Model">
                                                {{ $company->name_en }}
                                            </a>
                                        </td>
                                            <td><img src="{{asset($company->logo)}}" width="60" height="60"></td>
                                            <td width="20%" align="center">

                                                <a href="{{ route('company.edit' , $company->id) }}" title="تعديل"
                                                    type="button" class="btn btn-primary btn-xs">
                                                    <span class=" glyphicon glyphicon-edit" aria-hidden="true">
                                                    </span>
                                                    تعديل
                                                </a>

                                                <button  data-effect="effect-scale"
                                                    data-id="{{ $company->id }}" data-toggle="modal"
                                                    href="#modaldemo9" title="حذف" type="button"
                                                    class="btn btn-danger btn-xs delete">
                                                    <span class=" glyphicon glyphicon-trash" aria-hidden="true">
                                                    </span>
                                                    حذف
                                                </button>

                                        </td>
                                            {{-- <td>
                                                <div class="td-actions">
                                                    <a href="{{-- {{route('edit.Country', $company->id)}} " class="icon red" data-toggle="tooltip" data-placement="top"
                                                        title="View Company">
                                                        <span class="icon-eye"></span>
                                                    </a>
                                                    <a href="#" class="icon green" data-toggle="tooltip" data-placement="top"
                                                        title="Disable Country">
                                                        <span class="icon-remove_circle"></span>
                                                    </a>
                                                    <a href="{{-- {{route('carsModel', $company->id)}} " class="icon blue" data-toggle="tooltip" data-placement="top"
                                                        title="Show Cars Model">
                                                        <span class="icon-directions_car"></span>
                                                    </a>
                                                </div>
                                            </td> --}}
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{ $companies->appends(Request::all())->links('components.paginate.result') }}
                        <div class="modal" id="modaldemo9">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">حذف الشركة</h6><button aria-label="Close" class="close"
                                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form action="/dashboard/company/{company}" method="post">
                                        @csrf
                                        @method('delete')

                                        <div class="modal-body">
                                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                                            <input type="hidden" name="id" id="id" value="">
                                            {{-- <input class="form-control" name="section_name" id="section_name" type="text" readonly> --}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                            <button type="submit" class="btn btn-danger">تاكيد</button>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.content-wrapper -->
                    <script>
                        $('#modaldemo9').on('show.bs.modal', function(event) {
                            var button = $(event.relatedTarget)
                            var id = button.data('id')
                            var modal = $(this)
                            modal.find('.modal-body #id').val(id);

                        })
                    </script>
                @endsection
