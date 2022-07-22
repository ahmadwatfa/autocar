@extends('Admin-Dashboard.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="admin"><i class="fa fa-home"></i> الرئيسية</a></li>
                <li class="active">قائمة اعلانات السيارات</li>
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
                            <h3 class="box-title"> <i class="fa fa-laptop"></i> قائمة اعلانات السيارات </h3>
                            {{-- <a href="" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> إضافة اعلان
                                جديد </a> --}}

                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Car</th>
                                        <th>User Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>SPECIAL</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ads as $ad)

                                        <tr id="{{ $ad->id }}"
                                            style="{{ $ad->status==1 ? '' : 'background-color: rgb(255,0,0,.5);' }}">
                                            <td>{{ $ad->id }}</td>
                                            <td>{{ $car[$ad->id]['companyName'] . ' ' . $car[$ad->id]['modelName'] . ' ' . $car[$ad->id]['year'] }}
                                            </td>
                                            <td>{{ $ad->name }}</td>
                                            <td>{{ $ad->Phone }}</td>
                                            <td>{{ $ad->Address }}</td>
                                            @if($ad->is_special == 1)
                                            <td>متميز</td>
                                            @else
                                            <td>غير متميز</td>
                                            @endif
                                            @if($ad->status == 1)
                                            <td>منشور</td>
                                            @else
                                            <td>غير منشور</td>
                                            @endif
                                            {{-- <a href="{{route('aboutus.show' , $about->id )}}" class="btn btn-xs {{$about->is_publish ?  "btn-default" : "btn-warning"}}">{{$about->is_publish ? "عدم نشر" : "نشر"}}</a> --}}
                                            <td width="20%" align="center">
                                                <a href="{{route('status.AdsCar',$ad->id)}}" class="btn btn-xs {{$ad->status==1 ?  "btn-default" : "btn-warning"}}">{{$ad->status==1 ? "عدم نشر" : "نشر"}}</a>
                                                <a href="{{route('special.AdsCar',$ad->id)}}" class="btn btn-xs {{$ad->is_special==1 ?  "btn-default" : "btn-warning"}}">{{$ad->is_special==1 ? "غير متميز" : "متميز"}}</a>
                                                <button  data-effect="effect-scale"
                                                    data-id="{{$ad->id}}" data-toggle="modal"
                                                    href="#modaldemo9" title="حذف" type="button"
                                                    class="btn btn-danger btn-xs delete">
                                                    <span class=" glyphicon glyphicon-trash" aria-hidden="true">
                                                    </span>

                                                </button>

                                        </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
        <div class="modal" id="modaldemo9">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">حذف الاعلان</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="/dashboard/AdminAds/{id}" method="post">
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
