@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Lihat Data DOC</h4>
                <div class="quick-link-wrapper ml-2 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                        <li><a href="{{route('d-o-cs.index')}}">Data DOC</a></li>
                        <li><strong>Lihat Data DOC</strong></li>
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
                                <th> Jenis Ayam</th>
                                <td> {{ $doc->typeChicken }} </td>
                            </tr>
                            <tr>
                                <th> Harga Ayam (Rp.)</th>
                                <td> {{ $doc->chickenPrice }} </td>
                            </tr>
                            <tr>
                                <th> Satuan</th>
                                <td> {{ $doc->unit }} </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr>
                    <a href="{{ route('d-o-cs.index') }}" title="Kembali">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Kembali
                        </button>
                    </a>
                    <a href="{{ route('d-o-cs.edit', $doc->id) }}" title="Ubah Data DOC">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                  aria-hidden="true"></i> Ubah
                        </button>
                    </a>

                    <form method="POST" action="{{ route('d-o-cs.destroy', $doc->id) }}" accept-charset="UTF-8"
                          style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data DOC"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                                                         aria-hidden="true"></i>
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
