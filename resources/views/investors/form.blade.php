<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="name" type="text" id="name"
           value="{{ isset($investor->name) ? $investor->name : old('name')}}">
    {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Alamat Rumah' }}</label>
    <input class="form-control" name="address" type="text" id="address"
           value="{{ isset($investor->address) ? $investor->address : old('address')}}">
    {!! $errors->first('address', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('company_name') ? 'has-error' : ''}}">
    <label for="company_name" class="control-label">{{ 'Nama Perusahaan' }}</label>
    <input class="form-control" name="company_name" type="text" id="company_name"
           value="{{ isset($investor->company_name) ? $investor->company_name : old('company_name')}}">
    {!! $errors->first('company_name', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('company_address') ? 'has-error' : ''}}">
    <label for="company_address" class="control-label">{{ 'Alamat Perusahaan' }}</label>
    <input class="form-control" name="company_address" type="text" id="company_address"
           value="{{ isset($investor->company_address) ? $investor->company_address : old('company_address')}}">
    {!! $errors->first('company_address', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
    <label for="phone_number" class="control-label">{{ 'Nomor Telepon' }}</label>
    <input class="form-control" name="phone_number" type="text" id="phone_number"
           value="{{ isset($investor->phone_number) ? $investor->phone_number : old('phone_number')}}">
    {!! $errors->first('phone_number', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('actor_status') ? 'has-error' : ''}}">
    <label for="actor_status" class="control-label">{{ 'Status Aktor' }}</label>
    <input class="form-control" name="actor_status" type="text" id="actor_status"
           value="{{ isset($investor->actor_status) ? $investor->actor_status : old('actor_status')}}">
    {!! $errors->first('actor_status', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('short_description') ? 'has-error' : ''}}">
    <label for="short_description" class="control-label">{{ 'Deskripsi Singkat' }}</label>
    <input class="form-control" name="short_description" type="text" id="short_description"
           value="{{ isset($investor->short_description) ? $investor->short_description : old('short_description')}}">
    {!! $errors->first('short_description', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'ALamat Email' }}</label>
    <input class="form-control" name="email" type="text" id="email"
           value="{{ isset($investor->email) ? $investor->email : old('email')}}">
    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="username" type="text" id="username"
           value="{{ isset($investor->username) ? $investor->username : old('username')}}">
    {!! $errors->first('username', '<small class="text-danger">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password"
           value="{{ isset($investor->password) ? $investor->password : ''}}">
    {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
</div>


<div class="form-group">
    <a href="{{ route('investors.index') }}" title="Kembali" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                                                                                               aria-hidden="true"></i>
        Kembali
    </a>
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Buat' }}"
           title="{{ $formMode === 'edit' ? 'Ubah Data Investor' : 'Tambah Data Investor' }}">
</div>
