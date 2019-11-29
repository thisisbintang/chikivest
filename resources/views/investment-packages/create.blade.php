@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Tambah Data Paket Investasi</h4>
                <div class="quick-link-wrapper ml-2 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                        <li><a href="{{route('investment-packages.index')}}">Data Paket Investasi</a></li>
                        <li><strong>Tambah Data Paket Investasi</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Tambah Data Paket Investasi</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('investment-packages.store') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('investment-packages.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
