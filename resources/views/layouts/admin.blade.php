
<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>لوحة التحكم بسيطة</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('dist/font-awesome/css/font-awesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/adminlte/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('dist/adminlte/css/bootstrap-rtl.min.css')}}">
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{asset('dist/adminlte/css/custom-style.css')}}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/')}}" class="nav-link">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/contact-us')}}" class="nav-link">اتصل بنا</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="بحث..." aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-comments-o"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                        @foreach($contact as $var)
                          @csrf
                          <a href="{{url('/replay/'. $var->id)}}" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <!-- <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 ml-3 img-circle"> -->
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                            {{$var->name}}
                                        <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">{{$var->phone_number}}</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> {{$var->created_at}} </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        @endforeach
                        <div class="dropdown-divider"></div>
                        
                        <a href="{{url('/contact-us/all')}}" class="dropdown-item dropdown-footer">عرض جميع الرسائل</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->

                

                
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    {{ Auth::user()->name }}
                        
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                       
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                        </form>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                class="fa fa-th-large"></i></a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/home')}}" class="brand-link">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">لوحة التحكم</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div>
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="https://secure.gravatar.com/avatar/f35eb1f2bd16ffbe317ecd4a99afca06jpg" class="img-circle elevation-2" alt="User Image">

                        </div>
                        <div class="info">
                            <a href="{{url('/home')}}" class="d-block">صهيب جروان</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        المنتجات 
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{url('admin/products')}}" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>جميع المنتجات</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/products/create')}}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>إضافة منتج جديد</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                                    الفئات
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{url('admin/categories/category')}}" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>جميع الفئات</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/categories/create')}}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>إضافة فئة جديدة</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{url('/contact-us')}}" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                                    اتصل بنا
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>

                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-th"></i>
                                    <p>
                                        رابط بسيط
                                        <span class="right badge badge-danger">جدید</span>
                                    </p>
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        

        @yield('sohyeb')


        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>CopyLeft &copy; 2018 <a href="http://github.com/badranawad/">بدران عوض</a>.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('dist/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('dist/bootstrap/js/bootstr')}}ap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/adminlte/js/adminlte')}}.min.js"></script>
</body>