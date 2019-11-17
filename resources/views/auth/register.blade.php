@extends('layouts.app')
@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <h2 class="text-center mb-4">Daftar</h2>
                    <div class="auto-form-wrapper">
                        <form method="POST" action="{{route('register')}}">
                            {{csrf_field()}}
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <input type="text"
                                       class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                       placeholder="Nama Lengkap" name="name"
                                       value="{{old('name')}}">
                                @if ($errors->has('name'))
                                    <small id="" class="text-danger">
                                        {{ $errors->first('name') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                <input type="text"
                                       class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                                       placeholder="Alamat Email"
                                       name="email" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                    <small id="" class="text-danger">
                                        {{ $errors->first('email') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                                <input type="text"
                                       class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}"
                                       placeholder="Username" name="username" value="{{old('username')}}">
                                @if ($errors->has('username'))
                                    <small id="" class="text-danger">
                                        {{ $errors->first('username') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                <input type="password"
                                       class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
                                       placeholder="Password"
                                       name="password" value="{{old('password')}}">
                                @if ($errors->has('password'))
                                    <small id="" class="text-danger">
                                        {{ $errors->first('password') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('password_confirmation') ? 'has-error' : ''}}">
                                <input type="password"
                                       class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}"
                                       placeholder="Confirm Password"
                                       name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <small id="" class="text-danger">
                                        {{ $errors->first('password_confirmation') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('policy') ? 'has-error' : ''}}">
                                <div class="form-group row">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label {{$errors->has('policy') ? 'text-danger' : ''}}">
                                            <input type="checkbox"
                                                   class="form-check-input"
                                                   name="policy"> Saya setuju
                                            dengan
                                        </label>
                                    </div>
                                    <div class="mt-1">
                                        <label class="form-check-label {{$errors->has('policy') ? 'text-danger' : ''}}"><a
                                                    href="#">&nbsp;ketentuan & persyaratan</a></label>
                                    </div>
                                </div>
                                @if ($errors->has('policy'))
                                    <small id="" class="text-danger">
                                        {{ $errors->first('policy') }}
                                    </small>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary submit-btn btn-block">Masuk</button>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Sudah punya akun?</span>
                                <a href="{{route('login')}}" class="text-black text-small">Masuk</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
@endsection