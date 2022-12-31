<!-- Nama Dosen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_dosen', 'Nama dosen:') !!}
    {!! Form::text('nama_dosen', null, ['class' => 'form-control','maxlength' => 50]) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- No Telp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_telp', 'No Telp:') !!}
    {!! Form::text('no_telp', null, ['class' => 'form-control','maxlength' => 15]) !!}
</div>

<!-- Mata Kuliah Yang Diampu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matkul_yang_diampu', 'Matkul Yang Diampu:') !!}
    {!! Form::text('matkul_yang_diampu', null, ['class' => 'form-control']) !!}
</div>