@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Data Peternak</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('graziers.create')}}" class="btn btn-success btn-sm" title="Tambah Baru">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tambah Baru
                    </a>
                    <form method="GET" action="{{ url('/graziers') }}" accept-charset="UTF-8"
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
                        <table class="table table-hover">
                            <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat Email</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($graziers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>
                                        <a href="{{ route('graziers.show', $item->id) }}" title="View Grazier">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i> Lihat
                                            </button>
                                        </a>
                                        <a href="{{ route('graziers.edit', $item->id) }}" title="Edit Grazier">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                      aria-hidden="true"></i> Ubah
                                            </button>
                                        </a>

                                        <form method="POST" action="{{ route('graziers.destroy',$item->id) }}"
                                              accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Grazier"
                                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $graziers->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
