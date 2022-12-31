<!-- Nama Dosen Field -->
<div class="col-sm-12">
    {!! Form::label('nama_dosen', 'Nama Dosen:') !!}
    <p>{{ $dosen->nama_dosen }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $dosen->alamat }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $dosen->email }}</p>
</div>

<!-- No Telp Field -->
<div class="col-sm-12">
    {!! Form::label('no_telp', 'No Telp:') !!}
    <p>{{ $dosen->no_telp }}</p>
</div>

<!-- Matkul Yang Diampu Field -->
<div class="col-sm-12">
    {!! Form::label('matkul_yang_diampu', 'Matkul Yang Diampu:') !!}
    <p>{{ $dosen->matkul_yang_diampu }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dosen->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dosen->updated_at }}</p>
</div>

