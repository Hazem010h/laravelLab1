<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('dash-imports\vendor\fontawesome-free\css\all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('dash-imports\css\sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Books Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://127.0.0.1:8000/add">
                    <i class="fas fa-plus"></i>
                    <span>Add New Book </span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

                        <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://127.0.0.1:8000/show">
                    <i class="fas fa-eye"></i>
                    <span>Show All Books </span></a>
            </li>

            <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hazem Hamdy</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('dash-imports\img\undraw_profile.svg')}}">
                            </a>
                        </li>
                    </ul>

                </nav>
                <div class="container-fluid">
                    @yield('content')
            </div>
            <!-- End of Main Content -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>




    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('dash-imports\vendor\jquery\jquery.min.js')}}"></script>
    <script src="{{asset('dash-imports\vendor\bootstrap\js\bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('dash-imports\vendor\jquery-easing\jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('dash-imports\js\sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('dash-imports\vendor\chart.js\Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('dash-imports\js\demo\chart-area-demo.js')}}"></script>
    <script src="{{asset('dash-imports\js\demo/chart-pie-demo.js')}}"></script>

</body>

</html>
