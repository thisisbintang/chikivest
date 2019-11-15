@extends('layouts.app')

@section('content')
    <div class="row page-title-header">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Pembibit</div>
                <div class="card-body">
                    <a href="{{ route('breeders.create') }}" class="btn btn-success btn-sm" title="Add New Breeder">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tambah Baru
                    </a>
                    <form method="GET" action="{{ url('/breeders') }}" accept-charset="UTF-8"
                          class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..."
                                   value="{{ request('search') }}">
                            <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </form>

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat Rumah</th>
                                <th>Nama Perusahaan</th>
                                <th>Alamat Perusahaan</th>
                                <th>Nomor Telepon</th>
                                <th>Deskripsi Singkat</th>
                                <th>Alamat Email</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($breeders as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->company_name }}</td>
                                    <td>{{ $item->company_address }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>{{ $item->short_description }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>
                                        <a href="{{ route('breeders.show', $item->id) }}" title="View Breeder">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i> Lihat
                                            </button>
                                        </a>
                                        <a href="{{ route('breeders.edit', $item->id) }}" title="Edit Breeder">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                      aria-hidden="true"></i> Ubah
                                            </button>
                                        </a>

                                        <form method="POST" action="{{ route('breeders.destroy', $item->id) }}"
                                              accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Breeder"
                                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $breeders->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
