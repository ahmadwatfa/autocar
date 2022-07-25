<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>لوحة التحكم | تكنو Techno</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap-rtl 3.3.4 -->
    <link rel="stylesheet" href="/assets/admin/bootstrap/css/bootstrap-rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/admin/dist/css/fontawesome-4.4.0.min.css">
    <!-- Ionicons -->
    <link rel="shortcut icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">

    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/admin/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/assets/admin/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/admin/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/assets/admin/plugins/iCheck/all.css">
    <link rel="stylesheet" href="/assets/admin/dist/css/add-img.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/assets/admin/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.1.4 -->
    <script src="/assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/assets/admin/dist/js/jquery.validate.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">




        <!-- Right side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <ul class="sidebar-menu">
                    <li class="active treeview">
                        <a href="{{ route('Dashboard.index') }}">
                            <i class="fa fa-home"></i> <span>الرئيسية</span>
                        </a>

                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الاعلانات</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="{{route('advcar.index')}}"><i class="fa fa-circle-o"></i> اعلانات السيارات</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>اعلانات القوارب</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>اعلانات الدراجات النارية</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>اعلانات العربات الثقيلة</a></li>
                        </ul>

                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الدول </span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('country.index') }}"><i class="fa fa-circle-o"></i> قائمة الدول </a>
                            </li>
                            <li><a href="{{ route('country.create') }}"><i class="fa fa-circle-o"></i> إضافة دولة جديدة</a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>السيارات </span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('company.index')}}"><i class="fa fa-circle-o"></i> قائمة انواع السيارات
                                </a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> إضافة نوع سيارة
                                    جديدة</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الثوابت </span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('lists.index') }}"><i class="fa fa-circle-o"></i> قائمة الثوابت
                                </a></li>
                            <li><a href="{{ route('lists.create') }}"><i class="fa fa-circle-o"></i> إضافة ثابت
                                    جديد</a></li>
                        </ul>
                    </li>
                    {{-- <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>جدول الاعمال</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=""><i class="fa fa-circle-o"></i> قائمة جداول
                                    الاعمال </a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> إضافة جدول
                                    اعمال جديد</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>الموظفين</span>
                            <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=""><i class="fa fa-circle-o"></i> قائمة الموظفين </a>
                            </li>
                            <li><a href=""><i class="fa fa-circle-o"></i> إضافة خطة موظف
                                    جديد</a></li>
                        </ul>
                    </li> --}}

                </ul>
            </section>
        </aside>

        @yield('main')


    </div>



    <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- Bootstrap 3.3.5 -->
    <script src="/assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/admin/plugins/select2/select2.full.min.js"></script>
    <!-- FastClick -->
    <script src="/assets/admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/assets/admin/dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="/assets/admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/assets/admin/dist/js/index.js"></script>

    <script src="/assets/admin/plugins/iCheck/icheck.min.js"></script>
    <script src="/assets/admin/plugins/tinymce/tinymce.min.js"></script>


    @yield('my-script')
</body>

</html>
