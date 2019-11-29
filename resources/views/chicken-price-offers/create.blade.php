@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Tambah Data Penawaran Harga Beli Ayam</h4>
                <div class="quick-link-wrapper ml-2 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                        <li><a href="{{route('chicken-price-offers.index')}}">Data Penawaran Harga Beli Ayam</a></li>
                        <li><strong>Tambah Data Penawaran Harga Beli Ayam</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('chicken-price-offers.store') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('chicken-price-offers.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
