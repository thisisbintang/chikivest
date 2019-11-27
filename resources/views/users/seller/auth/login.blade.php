<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>chikivest | Situs Investasi Ternak Ayam</title>
    <!-- plugins:css -->
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
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}"/>
</head>

<body>
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
            <div class="col-lg-4 mx-auto">
                <div class="auto-form-wrapper">
                    <form method="POST" action="{{route('seller.login')}}">
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                            <label class="label">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                            @if ($errors->has('username'))
                                <small id="" class="text-danger">
                                    {{ $errors->first('username') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                            <label class="label">Password</label>
                            <input type="password" class="form-control" placeholder="*********" name="password">
                            @if ($errors->has('password'))
                                <small id="" class="text-danger">
                                    {{ $errors->first('password') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit-btn btn-block">Masuk</button>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="form-check form-check-flat mt-0">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked> Ingat saya
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <p class="mt-2 footer-text text-center">copyright © {{date('Y')}} chikivest.com. All rights
                    reserved.</p>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{asset('js/shared/off-canvas.js')}}"></script>
<script src="{{asset('js/shared/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
</body>

</html>