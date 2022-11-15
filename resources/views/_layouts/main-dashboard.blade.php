<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TOKOH BU SENITI</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets_Admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets_Admin/css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body id="page-top">
    @yield('navbar')
    @yield('content1'),
    @yield('content2'),
    @yield('content3'),
    @yield('content4')

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets_Admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets_Admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets_Admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets_Admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets_Admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets_Admin/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>