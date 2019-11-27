@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">InvestmentPackage {{ $investmentpackage->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/investment-packages') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/investment-packages/' . $investmentpackage->id . '/edit') }}" title="Edit InvestmentPackage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('investmentpackages' . '/' . $investmentpackage->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete InvestmentPackage" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $investmentpackage->id }}</td>
                                    </tr>
                                    <tr><th> Breeder Id </th><td> {{ $investmentpackage->breeder_id }} </td></tr><tr><th> Grazier Id </th><td> {{ $investmentpackage->grazier_id }} </td></tr><tr><th> Seller Id </th><td> {{ $investmentpackage->seller_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
