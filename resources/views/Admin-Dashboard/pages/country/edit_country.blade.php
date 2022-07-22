@extends('Admin-Dashboard.layout.admin')


@section('main')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> اضافة دولة <small>جديدة</small> </h3>
                        <i class="pull-left header fa fa-th"></i>
                    </div><!-- /.box-header -->

                    <form action="{{ route('country.update', $country->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="box-body col-md-12">
                            <div class="col-md-12">
                                <!-- Custom Tabs (Pulled to the right) -->
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="active"><a href="#tab_1-1" data-toggle="tab">بيانات عامة</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active fade in" id="tab_1-1">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name-ar" name="name_ar"
                                                        placeholder="Country Name Arabic" value="{{$country->name_ar}}" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name-en" name="name_en"
                                                        placeholder="Country Name English" value="{{$country->name_en}}" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="sortname" name="sortname"
                                                        placeholder="Country Sort Name" required="" value="{{$country->sortname}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="phonecode" name="phonecode"
                                                        placeholder="Country Phone Code" required="" value="{{$country->phonecode}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="flag">
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="hidden" name="status" value="0">
                                                                <input @if($country->status ==1 ) checked @endif name="status" type="checkbox"
                                                                    aria-label="Checkbox for following text input" id="status" value="1">
                                                                <label for="status">Country Status</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div><!-- /.tab-pane -->

                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <!-- .box-footer -->
                            <button type="submit" class="btn  btn-primary">تخزين</button>
                            <button type="reset" class="btn  btn-default">تفريغ الحقول</button>
                        </div><!-- /.box-footer -->
                    </form>
                    <!-- form end -->
                </div><!-- /.box -->


            </div> <!-- /.row -->
            </section><!-- /.content -->

        </div> <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
     <script>
        var num = 1;
        $("#btn-plus").click(function() {
            $("#pro_plus").append('<div class="col-md-12">' +
                '<div class="form-group">' +
                '<div class="col-sm-3">' +
                '<input type="text" class="form-control" name="pro_n_id' + (num) +
                '" placeholder="الاسم" data-fv-field="">' +
                '</div>' +
                '<div class="col-sm-9">' +
                '<input type="text" class="form-control" name="pro_p_id' + (num++) +
                '" placeholder="الوصف" data-fv-field="">' +
                '</div>' +
                '</div>' +
                '</div>');
        });

    </script>

     <script type="text/javascript">
        $(document).ready(function() {


            $("#signupForm1").validate({
                rules: {
                    name: "required",
                    img: "required",
                    price: {
                        required: true,
                        maxlength: 4
                    },
                    category: {
                        required: true,
                        min: 1
                    },

                    currency: {
                        required: true,
                        min: 1
                    },

                    screen: "required",
                    memory_size: "required",
                    cpu: "required",
                    battery: "required",
                    os: "required"
                },
                messages: {

                    img: "الرجاء إختيار صورة",

                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    element.parents(".col-sm-9").addClass("has-feedback");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!element.next("span")[0]) {
                        $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>")
                            .insertAfter(element);
                    }
                },
                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!$(element).next("span")[0]) {
                        $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>")
                            .insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-9").addClass("has-error").removeClass(
                        "has-success");
                    $(element).next("span").addClass("glyphicon-remove").removeClass(
                        "glyphicon-ok");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-9").addClass("has-success").removeClass(
                        "has-error");
                    $(element).next("span").addClass("glyphicon-ok").removeClass(
                        "glyphicon-remove");
                }
            });
        });

    </script>


@endsection
