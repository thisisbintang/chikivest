<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="name" type="text" id="name"
           value="{{ isset($seller->name) ? $seller->name : ''}}">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Alamat' }}</label>
    <input class="form-control" name="address" type="text" id="address"
           value="{{ isset($seller->address) ? $seller->address : ''}}">
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company_name') ? 'has-error' : ''}}">
    <label for="company_name" class="control-label">{{ 'Nama Perusahaan' }}</label>
    <input class="form-control" name="company_name" type="text" id="company_name"
           value="{{ isset($seller->company_name) ? $seller->company_name : ''}}">
    {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company_address') ? 'has-error' : ''}}">
    <label for="company_address" class="control-label">{{ 'Alamat Perusahaan' }}</label>
    <input class="form-control" name="company_address" type="text" id="company_address"
           value="{{ isset($seller->company_address) ? $seller->company_address : ''}}">
    {!! $errors->first('company_address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
    <label for="phone_number" class="control-label">{{ 'Nomor Telepon' }}</label>
    <input class="form-control" name="phone_number" type="text" id="phone_number"
           value="{{ isset($seller->phone_number) ? $seller->phone_number : ''}}">
    {!! $errors->first('phone_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('actor_status') ? 'has-error' : ''}}">
    <label for="actor_status" class="control-label">{{ 'Status Aktor' }}</label>
    <input class="form-control" name="actor_status" type="text" id="actor_status"
           value="{{ isset($seller->actor_status) ? $seller->actor_status : ''}}">
    {!! $errors->first('actor_status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('short_description') ? 'has-error' : ''}}">
    <label for="short_description" class="control-label">{{ 'Deskripsi Singkat' }}</label>
    <input class="form-control" name="short_description" type="text" id="short_description"
           value="{{ isset($seller->short_description) ? $seller->short_description : ''}}">
    {!! $errors->first('short_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Alamat Email' }}</label>
    <input class="form-control" name="email" type="text" id="email"
           value="{{ isset($seller->email) ? $seller->email : ''}}">
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="username" type="text" id="username"
           value="{{ isset($seller->username) ? $seller->username : ''}}">
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="text" id="password"
           value="{{ isset($seller->password) ? $seller->password : ''}}">
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <a class="btn btn-warning btn-sm" href="{{ route('sellers.index') }}" title="Kembali"><i class="fa fa-arrow-left"
                                                                                             aria-hidden="true"></i>
        Kembali
    </a>

    <input class="btn btn-primary btn-sm" type="submit"
           value="{{ $formMode === 'edit' ? 'Ubah Data Pengepul' : 'Tambah Data Pengepul' }}">
</div>
