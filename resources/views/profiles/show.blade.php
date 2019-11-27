@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Profil</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            @if(Auth::guard('investor')->check())
                                <tr>
                                    <th> Foto Profil</th>
                                    <td> {{ $investor->photo_profile }} </td>
                                </tr>
                                <tr>
                                    <th> Nama</th>
                                    <td> {{ $investor->name }} </td>
                                </tr>
                                <tr>
                                    <th> Alamat</th>
                                    <td> {{ $investor->address }} </td>
                                </tr>
                                <tr>
                                    <th> Nama Perusahaan</th>
                                    <td> {{ $investor->company_name }} </td>
                                </tr>
                                <tr>
                                    <th> Alamat Perusahaan</th>
                                    <td> {{ $investor->company_address }} </td>
                                </tr>
                                <tr>
                                    <th> Nomor Telepon</th>
                                    <td> {{ $investor->phone_number }} </td>
                                </tr>
                                <tr>
                                    <th> Deskripsi Singkat</th>
                                    <td> {{ $investor->short_description }} </td>
                                </tr>
                                <tr>
                                    <th> Alamat Email</th>
                                    <td> {{ $investor->email }} </td>
                                </tr>
                                <tr>
                                    <th> Username</th>
                                    <td> {{ $investor->username }} </td>
                                </tr>
                            @elseif(Auth::guard('breeder')->check())
                                <tr>
                                    <th> Foto Profil</th>
                                    <td> {{ $breeder->photo_profile }} </td>
                                </tr>
                                <tr>
                                    <th> Nama</th>
                                    <td> {{ $breeder->name }} </td>
                                </tr>
                                <tr>
                                    <th> Alamat</th>
                                    <td> {{ $breeder->address }} </td>
                                </tr>
                                <tr>
                                    <th> Nama Perusahaan</th>
                                    <td> {{ $breeder->company_name }} </td>
                                </tr>
                                <tr>
                                    <th> Alamat Perusahaan</th>
                                    <td> {{ $breeder->company_address }} </td>
                                </tr>
                                <tr>
                                    <th> Nomor Telepon</th>
                                    <td> {{ $breeder->phone_number }} </td>
                                </tr>
                                <tr>
                                    <th> Deskripsi Singkat</th>
                                    <td> {{ $breeder->short_description }} </td>
                                </tr>
                                <tr>
                                    <th> Alamat Email</th>
                                    <td> {{ $breeder->email }} </td>
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
                                <tr>
                                    <th> Foto Profil</th>
                                    <td>
                                        <img width="150px"
                                             src="{{ $user->photo_profile?asset('images/photo_profile/').'/'.$user->photo_profile:asset('images/photo_profile/default.png') }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th> Nama</th>
                                    <td> {{ $user->name }} </td>
                                </tr>
                                <tr>
                                    <th> Alamat Email</th>
                                    <td> {{ $user->email }} </td>
                                </tr>
                                <tr>
                                    <th> Username</th>
                                    <td> {{ $user->username }} </td>
                                </tr>
                            @endif

                            </tbody>
                        </table>
                    </div>
                    <hr>
                    @if(Auth::guard('investor')->check())
                        <a href="{{ route('investor.profile.edit', $investor->id) }}" title="Ubah Data Investor">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                      aria-hidden="true"></i> Ubah
                            </button>
                        </a>
                    @elseif(Auth::guard('breeder')->check())
                        <a href="{{ route('breeder.profile.edit', $breeder->id) }}" title="Ubah Data Investor">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                      aria-hidden="true"></i> Ubah
                            </button>
                        </a>
                    @elseif(Auth::guard('grazier')->check())
                        <a href="{{ route('grazier.profile.edit', $grazier->id) }}" title="Ubah Data Investor">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                      aria-hidden="true"></i> Ubah
                            </button>
                        </a>
                    @elseif(Auth::guard('seller')->check())
                        <a href="{{ route('seller.profile.edit', $seller->id) }}" title="Ubah Data Investor">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                      aria-hidden="true"></i> Ubah
                            </button>
                        </a>
                    @elseif(Auth::guard()->check())
                        <a href="{{ route('profile.edit', $user->id) }}" title="Ubah Data Investor">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                      aria-hidden="true"></i> Ubah
                            </button>
                        </a>
                    @endif


                </div>
            </div>
        </div>
    </div>
@endsection
