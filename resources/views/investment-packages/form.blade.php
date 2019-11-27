<div class="form-group {{ $errors->has('breeder_id') ? 'has-error' : ''}}">
    <label for="breeder_id" class="control-label">{{ 'Breeder Id' }}</label>
    <input class="form-control" name="breeder_id" type="number" id="breeder_id" value="{{ isset($investmentpackage->breeder_id) ? $investmentpackage->breeder_id : ''}}" >
    {!! $errors->first('breeder_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grazier_id') ? 'has-error' : ''}}">
    <label for="grazier_id" class="control-label">{{ 'Grazier Id' }}</label>
    <input class="form-control" name="grazier_id" type="number" id="grazier_id" value="{{ isset($investmentpackage->grazier_id) ? $investmentpackage->grazier_id : ''}}" >
    {!! $errors->first('grazier_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('seller_id') ? 'has-error' : ''}}">
    <label for="seller_id" class="control-label">{{ 'Seller Id' }}</label>
    <input class="form-control" name="seller_id" type="number" id="seller_id" value="{{ isset($investmentpackage->seller_id) ? $investmentpackage->seller_id : ''}}" >
    {!! $errors->first('seller_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
