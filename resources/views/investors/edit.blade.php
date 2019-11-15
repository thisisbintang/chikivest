@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Ubah Investor #{{ $investor->id }}</div>
                <div class="card-body">
                    <a href="{{ route('investors.index') }}" title="Back">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Kembali
                        </button>
                    </a>
                    <br/>
                    <br/>

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ route('investors.update', $investor->id )}}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        @include ('investors.form', ['formMode' => 'edit'])

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
