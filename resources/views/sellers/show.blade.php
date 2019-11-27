@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Lihat Data Pengepul</h4>
                <div class="quick-link-wrapper ml-2 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                        <li><a href="{{route('sellers.index')}}">Data Pengepul</a></li>
                        <li><strong>Lihat Data Pengepul</strong></li>
                    </ul>
                </div>
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
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <a href="{{ route('sellers.index') }}" title="Kembali">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Kembali
                        </button>
                    </a>
                    <a href="{{ route('sellers.edit', $seller->id) }}" title="Ubah Data Pengepul">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Ubah
                        </button>
                    </a>

                    <form method="POST" action="{{ route('sellers.destroy', $seller->id) }}" accept-charset="UTF-8"
                          style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data Pengepul"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                                                         aria-hidden="true"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
