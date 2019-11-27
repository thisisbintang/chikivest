<div class="form-group {{ $errors->has('operationalCode') ? 'has-error' : ''}}">
    <label for="operationalCode" class="control-label">{{ 'Kode Operasional Peternak' }}</label>
    <input class="form-control" name="operationalCode" type="text" id="operationalCode"
           value="{{ isset($operationalgrazier->operationalCode) ? $operationalgrazier->operationalCode : $operationalCode}}"
           readonly>
    {!! $errors->first('operationalCode', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="control-label">{{ 'Biaya Operasional Peternak' }}</label>
    <input class="form-control" name="cost" type="number" id="cost"
           value="{{ isset($operationalgrazier->cost) ? $operationalgrazier->cost : old('cost')}}">
    {!! $errors->first('cost', '<small class="text-danger">:message</small>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Buat' }}">
</div>
