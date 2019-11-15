@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Investor {{ $investor->id }}</div>
                <div class="card-body">

                    <a href="{{ route('investors.index') }}" title="Back">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Kembali
                        </button>
                    </a>
                    <a href="{{ route('investors.edit', $investor->id) }}" title="Edit Investor">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                  aria-hidden="true"></i> Ubah
                        </button>
                    </a>

                    <form method="POST" action="{{ route('investors.destroy', $investor->id) }}" accept-charset="UTF-8"
                          style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Investor"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                                                         aria-hidden="true"></i>
                            Hapus
                        </button>
                    </form>
                    <br/>
                    <br/>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $investor->id }}</td>
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
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
