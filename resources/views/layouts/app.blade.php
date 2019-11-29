<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>chikivest | Situs Investasi Ternak Ayam</title>
    <!-- plugins:css -->
    {{--    <link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/shared/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}"/>
</head>

<body>
@if(\Illuminate\Support\Facades\Auth::check())
    <div class="container-scroller">
        @section('navbar')
            @include('layouts.navbar')
        @show
        <div class="container-fluid page-body-wrapper">
            @section('sidebar')
                @include('layouts.sidebar')
            @show
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @section('footer')
                    @include('layouts.footer')
                @show
            </div>
        </div>
    </div>
@else
    @yield('content')
@endif
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/shared/off-canvas.js')}}"></script>
<script src="{{asset('js/shared/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
@yield('script')
<!-- End custom js for this page-->
</body>

</html>