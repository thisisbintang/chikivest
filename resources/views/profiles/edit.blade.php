@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Ubah Profil</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    @if(Auth::guard('investor')->check())
                        <form method="POST" action="{{ route('investor.profile.update', $investor->id )}}"
                              accept-charset="UTF-8"
                              class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('photo_profile') ? 'has-error' : ''}}">
                                <label for="photo_profile" class="control-label">{{ 'Foto Profil' }}</label>
                                <input class="form-control" name="photo_profile" type="file" id="photo_profile"
                                       value="{{ isset($investor->photo_profile) ? $investor->photo_profile : old('name')}}">
                                {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="name" class="control-label">{{ 'Nama' }}</label>
                                <input class="form-control" name="name" type="text" id="name"
                                       value="{{ isset($investor->name) ? $investor->name : old('name')}}">
                                {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                                <label for="address" class="control-label">{{ 'Alamat Rumah' }}</label>
                                <input class="form-control" name="address" type="text" id="address"
                                       value="{{ isset($investor->address) ? $investor->address : old('address')}}">
                                {!! $errors->first('address', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('company_name') ? 'has-error' : ''}}">
                                <label for="company_name" class="control-label">{{ 'Nama Perusahaan' }}</label>
                                <input class="form-control" name="company_name" type="text" id="company_name"
                                       value="{{ isset($investor->company_name) ? $investor->company_name : old('company_name')}}">
                                {!! $errors->first('company_name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('company_address') ? 'has-error' : ''}}">
                                <label for="company_address" class="control-label">{{ 'Alamat Perusahaan' }}</label>
                                <input class="form-control" name="company_address" type="text" id="company_address"
                                       value="{{ isset($investor->company_address) ? $investor->company_address : old('company_address')}}">
                                {!! $errors->first('company_address', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
                                <label for="phone_number" class="control-label">{{ 'Nomor Telepon' }}</label>
                                <input class="form-control" name="phone_number" type="text" id="phone_number"
                                       value="{{ isset($investor->phone_number) ? $investor->phone_number : old('phone_number')}}">
                                {!! $errors->first('phone_number', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('short_description') ? 'has-error' : ''}}">
                                <label for="short_description" class="control-label">{{ 'Deskripsi Singkat' }}</label>
                                <input class="form-control" name="short_description" type="text" id="short_description"
                                       value="{{ isset($investor->short_description) ? $investor->short_description : old('short_description')}}">
                                {!! $errors->first('short_description', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                <label for="email" class="control-label">{{ 'ALamat Email' }}</label>
                                <input class="form-control" name="email" type="text" id="email"
                                       value="{{ isset($investor->email) ? $investor->email : old('email')}}">
                                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                                <label for="username" class="control-label">{{ 'Username' }}</label>
                                <input class="form-control" name="username" type="text" id="username"
                                       value="{{ isset($investor->username) ? $investor->username : old('username')}}">
                                {!! $errors->first('username', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                <label for="password" class="control-label">{{ 'Password' }}</label>
                                <input class="form-control" name="password" type="password" id="password"
                                       value="{{ isset($investor->password) ? $investor->password : ''}}">
                                {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                            </div>


                            <div class="form-group">
                                <input class="btn btn-primary btn-sm" type="submit" value="Ubah"
                                       title="Ubah Profil">
                            </div>

                        </form>
                    @elseif(Auth::guard('breeder')->check())
                        <tr>
                            <th> Foto Profil</th>
                            <td> {{ $breederr->photo_profile }} </td>
                        </tr>
                        <tr>
                            <th> Nama</th>
                            <td> {{ $breederr->name }} </td>
                        </tr>
                        <tr>
                            <th> Alamat</th>
                            <td> {{ $breederr->address }} </td>
                        </tr>
                        <tr>
                            <th> Nama Perusahaan</th>
                            <td> {{ $breederr->company_name }} </td>
                        </tr>
                        <tr>
                            <th> Alamat Perusahaan</th>
                            <td> {{ $breederr->company_address }} </td>
                        </tr>
                        <tr>
                            <th> Nomor Telepon</th>
                            <td> {{ $breederr->phone_number }} </td>
                        </tr>
                        <tr>
                            <th> Deskripsi Singkat</th>
                            <td> {{ $breederr->short_description }} </td>
                        </tr>
                        <tr>
                            <th> Alamat Email</th>
                            <td> {{ $breederr->email }} </td>
                        </tr>
                        <tr>
                            <th> Username</th>
                            <td> {{ $breeder->username }} </td>
                        </tr>
                    @elseif(Auth::guard('grazier')->check())
                        <tr>
                            <th> Foto Profil</th>
                            <td> {{ $grazier->photo_profile }} </td>
                        </tr>
                        <tr>
                            <th> Nama</th>
                            <td> {{ $grazier->name }} </td>
                        </tr>
                        <tr>
                            <th> Alamat</th>
                            <td> {{ $grazier->address }} </td>
                        </tr>
                        <tr>
                            <th> Nama Perusahaan</th>
                            <td> {{ $grazier->company_name }} </td>
                        </tr>
                        <tr>
                            <th> Alamat Perusahaan</th>
                            <td> {{ $grazier->company_address }} </td>
                        </tr>
                        <tr>
                            <th> Nomor Telepon</th>
                            <td> {{ $grazier->phone_number }} </td>
                        </tr>
                        <tr>
                            <th> Deskripsi Singkat</th>
                            <td> {{ $grazier->short_description }} </td>
                        </tr>
                        <tr>
                            <th> Alamat Email</th>
                            <td> {{ $grazier->email }} </td>
                        </tr>
                        <tr>
                            <th> Username</th>
                            <td> {{ $grazier->username }} </td>
                        </tr>
                    @elseif(Auth::guard('seller')->check())
                        <tr>
                            <th> Foto Profil</th>
                            <td> {{ $seller->photo_profile }} </td>
                        </tr>
                        <tr>
                            <th> Nama</th>
                            <td> {{ $seller->name }} </td>
                        </tr>
                        <tr>
                            <th> Alamat</th>
                            <td> {{ $seller->address }} </td>
                        </tr>
                        <tr>
                            <th> Nama Perusahaan</th>
                            <td> {{ $seller->company_name }} </td>
                        </tr>
                        <tr>
                            <th> Alamat Perusahaan</th>
                            <td> {{ $seller->company_address }} </td>
                        </tr>
                        <tr>
                            <th> Nomor Telepon</th>
                            <td> {{ $seller->phone_number }} </td>
                        </tr>
                        <tr>
                            <th> Deskripsi Singkat</th>
                            <td> {{ $seller->short_description }} </td>
                        </tr>
                        <tr>
                            <th> Alamat Email</th>
                            <td> {{ $seller->email }} </td>
                        </tr>
                        <tr>
                            <th> Username</th>
                            <td> {{ $seller->username }} </td>
                        </tr>
                    @elseif(Auth::guard()->check())
                        <form method="POST" action="{{ route('profile.update', $user->id )}}" accept-charset="UTF-8"
                              class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('photo_profile') ? 'has-error' : ''}}">
                                <label for="photo_profile" class="control-label">{{ 'Foto Profil' }}</label>
                                <input class="form-control" name="photo_profile" type="file" id="photo_profile"
                                       value="{{ isset($user->photo_profile) ? $user->photo_profile : old('name')}}">
                                {!! $errors->first('photo_profile', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="name" class="control-label">{{ 'Nama' }}</label>
                                <input class="form-control" name="name" type="text" id="name"
                                       value="{{ isset($user->name) ? $user->name : old('name')}}">
                                {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                <label for="email" class="control-label">{{ 'Alamat Email' }}</label>
                                <input class="form-control" name="email" type="text" id="email"
                                       value="{{ isset($user->email) ? $user->email : old('email')}}">
                                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                                <label for="username" class="control-label">{{ 'Username' }}</label>
                                <input class="form-control" name="username" type="text" id="username"
                                       value="{{ isset($user->username) ? $user->username : old('username')}}">
                                {!! $errors->first('username', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-sm" type="submit" value="Ubah"
                                       title="Ubah Profil">
                            </div>

                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection