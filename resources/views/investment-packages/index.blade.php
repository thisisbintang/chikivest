@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Data Paket Investasi</h4>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('investment-packages.create') }}" class="btn btn-success btn-sm"
                       title="Add New InvestmentPackage">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tambah Baru
                    </a>

                    <form method="GET" action="{{ route('investment-packages.index') }}" accept-charset="UTF-8"
                          class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Cari..."
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
                                <th>Total Modal</th>
                                <th>Total Perkiraan Keuntungan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($investmentpackages as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->totalCapital }}</td>
                                    <td>{{ $item->income }}</td>
                                    <td>
                                        <a href="{{ route('investment-packages.show', $item->id) }}"
                                           title="View InvestmentPackage">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i> Lihat
                                            </button>
                                        </a>
                                        <a href="{{ route('investment-packages.edit', $item->id) }}"
                                           title="Edit InvestmentPackage">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                      aria-hidden="true"></i> Ubah
                                            </button>
                                        </a>

                                        <form method="POST"
                                              action="{{ route('investment-packages.destroy', $item->id) }}"
                                              accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    title="Delete InvestmentPackage"
                                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $investmentpackages->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
