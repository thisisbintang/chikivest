<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($breeder->name) ? $breeder->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Alamat' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($breeder->address) ? $breeder->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company_name') ? 'has-error' : ''}}">
    <label for="company_name" class="control-label">{{ 'Nama Perusahaan' }}</label>
    <input class="form-control" name="company_name" type="text" id="company_name" value="{{ isset($breeder->company_name) ? $breeder->company_name : ''}}" >
    {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company_address') ? 'has-error' : ''}}">
    <label for="company_address" class="control-label">{{ 'Alamat Perusahaan' }}</label>
    <input class="form-control" name="company_address" type="text" id="company_address" value="{{ isset($breeder->company_address) ? $breeder->company_address : ''}}" >
    {!! $errors->first('company_address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
    <label for="phone_number" class="control-label">{{ 'Nomor Telepon' }}</label>
    <input class="form-control" name="phone_number" type="text" id="phone_number" value="{{ isset($breeder->phone_number) ? $breeder->phone_number : ''}}" >
    {!! $errors->first('phone_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('actor_status') ? 'has-error' : ''}}">
    <label for="actor_status" class="control-label">{{ 'Status Aktor' }}</label>
    <input class="form-control" name="actor_status" type="text" id="actor_status" value="{{ isset($breeder->actor_status) ? $breeder->actor_status : ''}}" >
    {!! $errors->first('actor_status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('short_description') ? 'has-error' : ''}}">
    <label for="short_description" class="control-label">{{ 'Deskripsi Singkat' }}</label>
    <input class="form-control" name="short_description" type="text" id="short_description" value="{{ isset($breeder->short_description) ? $breeder->short_description : ''}}" >
    {!! $errors->first('short_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Alamat Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($breeder->email) ? $breeder->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="username" type="text" id="username" value="{{ isset($breeder->username) ? $breeder->username : ''}}" >
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="text" id="password" value="{{ isset($breeder->password) ? $breeder->password : ''}}" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
