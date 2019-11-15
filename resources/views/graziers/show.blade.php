@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Peternak {{ $grazier->id }}</div>
                <div class="card-body">

                    <a href="{{ route('graziers.index') }}" title="Back">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Kembali
                        </button>
                    </a>
                    <a href="{{ route('graziers.edit', $grazier->id) }}" title="Edit Grazier">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Ubah
                        </button>
                    </a>

                    <form method="POST" action="{{ route('graziers.destroy', $grazier->id) }}" accept-charset="UTF-8"
                          style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Grazier"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                                                         aria-hidden="true"></i> Delete
                        </button>
                    </form>
                    <br/>
                    <br/>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $grazier->id }}</td>
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
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
