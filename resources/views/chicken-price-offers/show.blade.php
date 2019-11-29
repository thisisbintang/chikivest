@extends('layouts.app')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Lihat Data Penawaran Harga Beli Ayam</h4>
                <div class="quick-link-wrapper ml-2 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                        <li><a href="{{route('chicken-price-offers.index')}}">Data Penawaran Harga Beli Ayam</a></li>
                        <li><strong>Data Penawaran Harga Beli Ayam</strong></li>
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
                                <th> Kode Penawaran Harga Beli Ayam</th>
                                <td> {{ $chickenpriceoffer->codePriceOffer }} </td>
                            </tr>
                            <tr>
                                <th> Penawaran Harga Beli Seekor Ayam (Rp.)</th>
                                <td> {{ $chickenpriceoffer->chickenPriceOffer }} </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
