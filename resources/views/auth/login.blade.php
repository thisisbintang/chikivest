@extends('layouts.app')
@section('content')
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
@endsection