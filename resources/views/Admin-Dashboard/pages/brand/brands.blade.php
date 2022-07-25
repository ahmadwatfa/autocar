@extends('Admin-Dashboard.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="{{ route('Dashboard.index') }}"><i class="fa fa-home"></i> الرئيسية</a></li>
                <li class="active">قائمة الموديلات</li>
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
                            <h3 class="box-title"> <i class="fa fa-laptop"></i> قائمة الموديلات </h3>
                            <a href="{{route('brand.create' , $id)}}" class="btn btn-primary pull-left"><i
                                    class="fa fa-plus"></i> إضافة موديل
                                جديد </a>

                        </div><!-- /.box-header -->
                        <div class="box-body">
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
                                            <td width="20%" align="center">

                                                <a href="{{ route('brand.edit' , $car->id) }}" title="تعديل"
                                                    type="button" class="btn btn-primary btn-xs">
                                                    <span class=" glyphicon glyphicon-edit" aria-hidden="true">
                                                    </span>
                                                    تعديل
                                                </a>

                                                <button  data-effect="effect-scale"
                                                    data-id="{{ $car->id }}" data-toggle="modal"
                                                    href="#modaldemo9" title="حذف" type="button"
                                                    class="btn btn-danger btn-xs delete">
                                                    <span class=" glyphicon glyphicon-trash" aria-hidden="true">
                                                    </span>
                                                    حذف
                                                </button>

                                        </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="modal" id="modaldemo9">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">حذف الموديل</h6><button aria-label="Close" class="close"
                                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form action="/dashboard/brand/{brand}" method="post">
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
