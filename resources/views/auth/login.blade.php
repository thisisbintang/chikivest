{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8 col-md-offset-2">--}}
{{--                <div class="panel panel-default">--}}
{{--                    <div class="panel-heading">Login</div>--}}

{{--                    <div class="panel-body">--}}
{{--                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
{{--                            {{ csrf_field() }}--}}

{{--                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" class="form-control" name="email"--}}
{{--                                           value="{{ old('email') }}" required autofocus>--}}

{{--                                    @if ($errors->has('email'))--}}
{{--                                        <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--                                <label for="password" class="col-md-4 control-label">Password</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password" class="form-control" name="password" required>--}}

{{--                                    @if ($errors->has('password'))--}}
{{--                                        <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <div class="col-md-6 col-md-offset-4">--}}
{{--                                    <div class="checkbox">--}}
{{--                                        <label>--}}
{{--                                            <input type="checkbox"--}}
{{--                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <div class="col-md-8 col-md-offset-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        Login--}}
{{--                                    </button>--}}

{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        Forgot Your Password?--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
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
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form method="POST" action="{{route('login')}}">
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
                                <a href="{{route('password.request')}}" class="text-small forgot-password text-black">Lupa
                                    Password</a>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Belum penya akun?</span>
                                <a href="{{route('register')}}" class="text-black text-small">Buat akun</a>
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
</div>
@endsection