<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>وزارة التخطيط العمراني | إدارة المباني</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/base/vendor.bundle.base.css') }}">
    {{--  // custom style .  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href=""><img style="width: 100%;" src="{{ asset('file/gopp-logo3.png') }}" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href=""><img style="width: 100%;" src="{{ asset('file/gopp-logo3.png') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="ti-view-list"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" dir="ltr" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('images/faces/0.png') }}" class="mr-1" alt="profile" />
                            <strong>{{ auth()->user()->name }}</strong>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="{{ route('user.edit', auth()->user()->id) }}" >
                                <i class="ti-settings text-primary"></i> تعديل البيانات الشخصية
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="ti-power-off text-primary"></i> تسجيل خروج
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="ti-view-list"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="ti-shield menu-icon"></i>
                            <span class="menu-title">لوحة التحكم</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ auth()->user()->type == 1 ? route('user.index') : '#' }}">
                            <i class="ti-user menu-icon"></i>
                            <span class="menu-title">إدارة المستخدمين</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="ti-shield menu-icon"></i>
                            <span class="menu-title">إدارة التراخيص</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('purpose.index') }}">الاغراض</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('licence.index') }}">طلبات الترخيص</a></li>
                                
                                @if (auth()->user()->type == 1)
                                    <li class="nav-item"> <a class="nav-link" href="{{ route('licence.pass') }}">تسليم الطلبات</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="{{ route('licence.report') }}">تسليم التقارير</a></li>
                                @endif
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('area.index') }}">
                            <i class="ti-pie-chart menu-icon"></i>
                            <span class="menu-title">المناطق</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ auth()->user()->type == 1 ? route('payment.index') : route('payment.index') }}">
                            <i class="ti-money menu-icon"></i>
                            <span class="menu-title"> عمليات الدفع</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    
                    @yield('content')
            
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
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