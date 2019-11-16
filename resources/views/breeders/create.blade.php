@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Tambah Data Pembibit</h4>
                <div class="quick-link-wrapper ml-2 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                        <li><a href="{{route('breeders.index')}}">Data Pembibit</a></li>
                        <li><strong>Tambah Data Pembibit</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ route('breeders.store') }}" accept-charset="UTF-8"
                          class="form-horizontal"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('breeders.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
