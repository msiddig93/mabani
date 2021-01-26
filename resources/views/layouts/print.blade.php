<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/base/vendor.bundle.base.css') }}">
    {{--  // custom style .  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <style>
        .main-panel {
            width: 100% ;
        }
        .page-body-wrapper {
            min-height: 100%;
            padding-top: 0px;
        }

        .table-responsive {
            box-shadow: none;
        }

        .table td {
            border: 1px dashed #000;
        }

        .table thead th {
            color: #101010;
            border: 1px solid;
            background: #ffffff;
        }

        .card .card-body {
            padding: 0px;
        }

        .print th{
            vertical-align: middle;
            line-height: 1;
            white-space: nowrap;
            text-align: center;
            padding: 30px;
        }

        .logo{
            height: 100px;
            width: auto;
        }

        .card .card-title {
            color: #060606;
            margin-bottom: 1.2rem;
            text-transform: uppercase;
            font-size: 17px;
            font-weight: 500;
            padding: 10px;
        }
        
    </style>
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    
                    @yield('content')
            
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>