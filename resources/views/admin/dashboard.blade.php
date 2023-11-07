<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Gawe Ayu">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/assets')}}/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Gawe Ayu</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{url('/assets')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{url('/assets')}}/css/style.css" rel="stylesheet" />
    <link href="{{url('/assets')}}/css/plugins.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{url('/assets')}}/css/icons.css" rel="stylesheet" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{url('/assets')}}/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('admin.template.header')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @include('admin.template.sidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <!-- <div class="page-header">
                                <div>
                                    <h1 class="page-title">Dashboard 01</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                    </ol>
                                </div>
                                <div class="ms-auto pageheader-btn">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-icon text-white me-2">
                                        <span>
                                                <i class="fe fe-plus"></i>
                                            </span> Add Account
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-success btn-icon text-white">
                                        <span>
                                                <i class="fe fe-log-in"></i>
                                            </span> Export
                                    </a>
                                </div>
                            </div> -->
                        <!-- PAGE-HEADER END -->
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>


        <!-- FOOTER -->
        @include('admin.template.footer')
        <!-- FOOTER END -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{url('/assets')}}/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{url('/assets')}}/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{url('/assets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="{{url('/assets')}}/js/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{url('/assets')}}/js/circle-progress.min.js"></script>

    <!-- CHARTJS CHART JS-->
    <script src="{{url('/assets')}}/plugins/chart/Chart.bundle.js"></script>
    <script src="{{url('/assets')}}/plugins/chart/utils.js"></script>

    <!-- PIETY CHART JS-->
    <script src="{{url('/assets')}}/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="{{url('/assets')}}/plugins/peitychart/peitychart.init.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{url('/assets')}}/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{url('/assets')}}/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{url('/assets')}}/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{url('/assets')}}/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- ECHART JS-->
    <script src="{{url('/assets')}}/plugins/echarts/echarts.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{url('/assets')}}/plugins/sidemenu/sidemenu.js"></script>

    <!-- Sticky js -->
    <script src="{{url('/assets')}}/js/sticky.js"></script>

    <!-- SIDEBAR JS -->
    <script src="{{url('/assets')}}/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{url('/assets')}}/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="{{url('/assets')}}/plugins/p-scroll/pscroll.js"></script>
    <script src="{{url('/assets')}}/plugins/p-scroll/pscroll-1.js"></script>

    <!-- APEXCHART JS -->
    <script src="{{url('/assets')}}/js/apexcharts.js"></script>

    <!-- INDEX JS -->
    <script src="{{url('/assets')}}/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="{{url('/assets')}}/js/themeColors.js"></script>

    <!-- swither styles js -->
    <script src="{{url('/assets')}}/js/swither-styles.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{url('/assets')}}/js/custom.js"></script>


    <script src="{{ url('/assets') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/assets') }}/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{ url('/assets') }}/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('/assets') }}/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="{{ url('/assets') }}/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="{{ url('/assets') }}/js/table-data.js"></script>

    @include('sweetalert::alert')


</body>

</html>
