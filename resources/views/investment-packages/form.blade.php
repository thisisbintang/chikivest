@section('script')
    <script type="text/javascript">
        var unitDoc = 0;
        var totalDocOperational = 0;
        var income = 0;
        var totalCapital = 0;
        var chickenPriceDoc = 0;
        var totalDocPrice = 0;
        var costOperational = 0;
        var chickenPriceOffer = 0;
        $(document).on('click', '#getNameBreeder', function () {
            document.getElementById('breeder_name').value = $(this).attr('data-name_breeder');
            var breeder_id = document.getElementById('breeder_id').value = $(this).attr('data-breeder_id');
            $('#breederModal').modal('hide');
            var a = document.getElementById('search_doc');
            a.disabled = false;
            document.cookie = 'breeder_id='.concat(breeder_id);
        });
        $(document).on('click', '#getTypeChicken', function () {
            document.getElementById('typeChicken').value = $(this).attr('data-type_chicken');
            unitDoc = $(this).attr('data-unit');
            chickenPriceDoc = $(this).attr('data-chicken_price_doc');
            totalDocPrice = parseInt(unitDoc) * parseInt(chickenPriceDoc);
            totalDocOperational = parseInt(totalDocPrice) + parseInt(costOperational);
            document.getElementById('totalDocOperational').value = totalDocOperational;
            document.getElementById('doc_id').value = $(this).attr('data-doc_id');
            $('#docModal').modal('hide');
        });
        $(document).on('click', '#getNameGrazier', function () {
            document.getElementById('grazier_name').value = $(this).attr('data-name_grazier');
            var grazier_id = document.getElementById('grazier_id').value = $(this).attr('data-grazier_id');
            $('#grazierModal').modal('hide');
            var a = document.getElementById('search_og');
            a.disabled = false;
            document.cookie = 'grazier_id='.concat(grazier_id);
        });
        $(document).on('click', '#getCost', function () {
            costOperational = document.getElementById('cost').value = $(this).attr('data-cost');
            totalDocOperational = parseInt(totalDocPrice) + parseInt(costOperational);
            document.getElementById('totalDocOperational').value = totalDocOperational;
            document.getElementById('og_id').value = $(this).attr('data-og_id');
            $('#ogModal').modal('hide');
        });
        $(document).on('click', '#getNameSeller', function () {
            document.getElementById('seller_name').value = $(this).attr('data-name_seller');
            var seller_id = document.getElementById('seller_id').value = $(this).attr('data-seller_id');
            $('#sellerModal').modal('hide');
            var a = document.getElementById('search_cpo');
            a.disabled = false;
            document.cookie = 'seller_id='.concat(seller_id);
        });
        $(document).on('click', '#getChickenPriceOffer', function () {
            chickenPriceOffer = document.getElementById('chickenPriceOffer').value = $(this).attr('data-chicken_price_offer');
            chickenPriceOffer = parseInt(chickenPriceOffer) * parseInt(unitDoc);
            document.getElementById('cpo_id').value = $(this).attr('data-cpo_id');
            $('#cpoModal').modal('hide');
        });
        $("#totalCapital").keyup(function () {
            document.getElementById('income').value = parseInt(chickenPriceOffer) - parseInt(document.getElementById('totalCapital').value);
        });
    </script>
@stop
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Nama Paket' }}</label>
    <div class="input-group">
        <input class="form-control" name="name" type="text" id="name"
               value="{{ isset($investmentpackage->name) ? $investmentpackage->name : old('name')}}">
    </div>
    {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('breeder_name') ? 'has-error' : ''}}">
    <label for="breeder_name" class="control-label">{{ 'Nama Pembibit' }}</label>
    <div class="input-group">
        <input class="form-control" name="breeder_name" type="text" id="breeder_name"
               value="{{ isset($investmentpackage->breeder_name) ? $investmentpackage->breeder_name : old('breeder_name')}}"
               readonly="">
        <input class="form-control" name="breeder_id" type="number" id="breeder_id"
               hidden>
        <span class="input-group-btn">
            <button type="button" class="btn btn-secondary" data-toggle="modal"
                    data-target="#breederModal"><strong>Cari Pembibit</strong> <span
                        class="fa fa-search"></span>
            </button>
        </span>
    </div>
    {!! $errors->first('breeder_name', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('typeChicken') ? 'has-error' : ''}}">
    <label for="typeChicken" class="control-label">{{ 'Jenis Ayam DOC' }}</label>
    <div class="input-group">
        <input class="form-control" name="typeChicken" type="text" id="typeChicken"
               value="{{ isset($investmentpackage->typeChicken) ? $investmentpackage->typeChicken : old('typeChicken')}}" readonly="">
        <input class="form-control" name="doc_id" type="number" id="doc_id"
               hidden>
        <span class="input-group-btn">
            <button type="button" class="btn btn-secondary" data-toggle="modal"
                    data-target="#docModal" id="search_doc" disabled><strong>Cari DOC</strong> <span
                        class="fa fa-search"></span>
            </button>
        </span>
    </div>
    {!! $errors->first('typeChicken', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('grazier_name') ? 'has-error' : ''}}">
    <label for="grazier_name" class="control-label">{{ 'Nama Peternak' }}</label>
    <div class="input-group">
        <input class="form-control" name="grazier_name" type="text" id="grazier_name"
               value="{{ isset($investmentpackage->grazier_name) ? $investmentpackage->grazier_name : old('grazier_name')}}"
               readonly="">
        <input class="form-control" name="grazier_id" type="number" id="grazier_id"
               hidden>
        <span class="input-group-btn">
            <button type="button" class="btn btn-secondary" data-toggle="modal"
                    data-target="#grazierModal"><strong>Cari Peternak</strong> <span
                        class="fa fa-search"></span>
            </button>
        </span>
    </div>
    {!! $errors->first('grazier_name', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="control-label">{{ 'Biaya Operasaional Peternak' }}</label>
    <div class="input-group">
        <input class="form-control" name="cost" type="number" id="cost"
               value="{{ isset($investmentpackage->cost) ? $investmentpackage->cost : old('cost')}}"
               readonly="">
        <input class="form-control" name="og_id" type="number" id="og_id"
               hidden>
        <span class="input-group-btn">
            <button type="button" class="btn btn-secondary" data-toggle="modal"
                    data-target="#ogModal" id="search_og" disabled><strong>Cari Operasional Peternak</strong> <span
                        class="fa fa-search"></span>
            </button>
        </span>
    </div>
    {!! $errors->first('cost', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('seller_name') ? 'has-error' : ''}}">
    <label for="seller_name" class="control-label">{{ 'Nama Pengepul' }}</label>
    <div class="input-group">
        <input class="form-control" name="seller_name" type="text" id="seller_name"
               value="{{ isset($investmentpackage->seller_name) ? $investmentpackage->seller_name : old('seller_name')}}"
               readonly="">
        <input class="form-control" name="seller_id" type="number" id="seller_id"
               hidden>
        <span class="input-group-btn">
            <button type="button" class="btn btn-secondary" data-toggle="modal"
                    data-target="#sellerModal"><strong>Cari Pengepul</strong> <span
                        class="fa fa-search"></span>
            </button>
        </span>
    </div>
    {!! $errors->first('seller_name', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('chickenPriceOffer') ? 'has-error' : ''}}">
    <label for="chickenPriceOffer" class="control-label">{{ 'Harga Penawaran Beli Seekor Ayam (Rp.)' }}</label>
    <div class="input-group">
        <input class="form-control" name="chickenPriceOffer" type="number" id="chickenPriceOffer"
               value="{{ isset($investmentpackage->chickenPriceOffer) ? $investmentpackage->chickenPriceOffer : old('chickenPriceOffer')}}"
               readonly="">
        <input class="form-control" name="cpo_id" type="number" id="cpo_id"
               hidden>
        <span class="input-group-btn">
            <button type="button" class="btn btn-secondary" data-toggle="modal"
                    data-target="#cpoModal" id="search_cpo" disabled><strong>Cari Penawaran Harga Beli Ayam</strong> <span
                        class="fa fa-search"></span>
            </button>
        </span>
    </div>
    {!! $errors->first('codePriceOffer', '<small class="text-danger">:message</small>') !!}
</div>

<div class="form-group {{ $errors->has('totalDocOperational') ? 'has-error' : ''}}">
    <label for="totalDocOperational"
           class="control-label">{{ 'Total Harga DOC dan BIaya Operasional Peternak (Rp.)' }}</label>
    <div class="input-group">
        <input class="form-control" name="totalDocOperational" type="number" id="totalDocOperational"
               value="{{ isset($investmentpackage->totalDocOperational) ? $investmentpackage->totalDocOperational : old('totalDocOperational')}}"
               disabled>
    </div>
    {!! $errors->first('totalDocOperational', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('totalCapital') ? 'has-error' : ''}}">
    <label for="totalCapital"
           class="control-label">{{ 'Total Modal (Rp.)' }}</label>
    <div class="input-group">
        <input class="form-control" name="totalCapital" type="number" id="totalCapital"
               value="{{ isset($investmentpackage->totalCapital) ? $investmentpackage->totalCapital : old('totalCapital')}}">
    </div>
    {!! $errors->first('totalCapital', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('income') ? 'has-error' : ''}}">
    <label for="income"
           class="control-label">{{ 'Total Perkiraan Keuntungan (Rp.)' }}</label>
    <div class="input-group">
        <input class="form-control" name="income" type="number" id="income"
               value="{{ isset($investmentpackage->income) ? $investmentpackage->income : old('income')}}" disabled>
    </div>
    {!! $errors->first('income', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Buat' }}">
</div>
<!-- Modal Breeder -->
<div class="modal fade bd-example-modal-lg" id="breederModal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #fff;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pembibit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>
                            Nama
                        </th>
                        <th>
                            Alamat Perusahaan
                        </th>
                        <th>
                            Nomor Telepon
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($breeders as $data)
                        <tr id="getNameBreeder" data-name_breeder="{{$data->name}}" data-breeder_id="{{$data->id}}"
                            style="cursor: pointer;">
                            <td>
                                {{$data->name}}
                            </td>
                            <td>
                                {{$data->company_address}}
                            </td>
                            <td>
                                {{$data->phone_number}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal DOC -->
<div class="modal fade bd-example-modal-lg" id="docModal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #fff;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data DOC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>
                            Jenis DOC Ayam
                        </th>
                        <th>
                            Harga Seekor DOC Ayam (Rp.)
                        </th>
                        <th>
                            Satuan (ekor)
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($docs->where('breeder_id', isset($_COOKIE['breeder_id'])?$_COOKIE['breeder_id']:'') as $data)
                        <tr id="getTypeChicken" data-type_chicken="{{$data->typeChicken}}" data-doc_id="{{$data->id}}"
                            data-unit="{{$data->unit}}" data-chicken_price_doc="{{$data->chickenPrice}}"
                            style="cursor: pointer;">
                            <td>
                                {{$data->typeChicken}}
                            </td>
                            <td>
                                {{$data->chickenPrice}}
                            </td>
                            <td>
                                {{$data->unit}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal Grazier -->
<div class="modal fade bd-example-modal-lg" id="grazierModal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #fff;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Peternak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>
                            Nama
                        </th>
                        <th>
                            Alamat Perusahaan
                        </th>
                        <th>
                            Nomor Telepon
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($graziers as $data)
                        <tr id="getNameGrazier" data-name_grazier="{{$data->name}}" data-grazier_id="{{$data->id}}"
                            style="cursor: pointer;">
                            <td>
                                {{$data->name}}
                            </td>
                            <td>
                                {{$data->company_address}}
                            </td>
                            <td>
                                {{$data->phone_number}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal OG -->
<div class="modal fade bd-example-modal-lg" id="ogModal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #fff;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Operasional Peternak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>
                            Biaya (Rp.)
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ogs->where('grazier_id', isset($_COOKIE['grazier_id'])?$_COOKIE['grazier_id']:'') as $data)
                        <tr id="getCost" data-cost="{{$data->cost}}" data-og_id="{{$data->id}}"
                            style="cursor: pointer;">
                            <td>
                                {{$data->cost}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal Seller -->
<div class="modal fade bd-example-modal-lg" id="sellerModal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #fff;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pengepul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>
                            Nama
                        </th>
                        <th>
                            Alamat Perusahaan
                        </th>
                        <th>
                            Nomor Telepon
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sellers as $data)
                        <tr id="getNameSeller" data-name_seller="{{$data->name}}" data-seller_id="{{$data->id}}"
                            style="cursor: pointer;">
                            <td>
                                {{$data->name}}
                            </td>
                            <td>
                                {{$data->company_address}}
                            </td>
                            <td>
                                {{$data->phone_number}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal CPO -->
<div class="modal fade bd-example-modal-lg" id="cpoModal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #fff;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Penawaran Harga Beli Seekor Ayam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>
                            Harga (Rp.)
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cpos->where('seller_id', isset($_COOKIE['seller_id'])?$_COOKIE['seller_id']:'') as $data)
                        <tr id="getChickenPriceOffer" data-chicken_price_offer="{{$data->chickenPriceOffer}}"
                            data-cpo_id="{{$data->id}}"
                            style="cursor: pointer;">
                            <td>
                                {{$data->chickenPriceOffer}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
