<div class="form-group {{ $errors->has('typeChicken') ? 'has-error' : ''}}">
    <label for="typeChicken" class="control-label">{{ 'Jenis Ayam' }}</label>
    <input class="form-control" name="typeChicken" type="text" id="typeChicken" value="{{ isset($doc->typeChicken) ? $doc->typeChicken : old('typeChicken')}}" >
    {!! $errors->first('typeChicken', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('chickenPrice') ? 'has-error' : ''}}">
    <label for="chickenPrice" class="control-label">{{ 'Harga Ayam (Rp.)' }}</label>
    <input class="form-control" name="chickenPrice" type="number" id="chickenPrice" value="{{ isset($doc->chickenPrice) ? $doc->chickenPrice : old('chickenPrice')}}" >
    {!! $errors->first('chickenPrice', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('unit') ? 'has-error' : ''}}">
    <label for="unit" class="control-label">{{ 'Satuan' }}</label>
    <input class="form-control" name="unit" type="text" id="unit" value="{{ isset($doc->unit) ? $doc->unit : old('unit')}}" >
    {!! $errors->first('unit', '<small class="text-danger">:message</small>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Buat' }}">
</div>
