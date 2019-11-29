<div class="form-group {{ $errors->has('codePriceOffer') ? 'has-error' : ''}}">
    <label for="codePriceOffer" class="control-label">{{ 'Kode Penawaran Harga Beli Ayam' }}</label>
    <input class="form-control" name="codePriceOffer" type="text" id="codePriceOffer"
           value="{{ isset($chickenpriceoffer->codePriceOffer) ? $chickenpriceoffer->codePriceOffer : $offerCode}}" readonly>
    {!! $errors->first('codePriceOffer', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('chickenPriceOffer') ? 'has-error' : ''}}">
    <label for="chickenPriceOffer" class="control-label">{{ 'Penawaran Harga Beli Seekor Ayam (Rp.)' }}</label>
    <input class="form-control" name="chickenPriceOffer" type="number" id="chickenPriceOffer"
           value="{{ isset($chickenpriceoffer->chickenPriceOffer) ? $chickenpriceoffer->chickenPriceOffer : ''}}">
    {!! $errors->first('chickenPriceOffer', '<small class="text-danger">:message</small>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Buat' }}">
</div>
