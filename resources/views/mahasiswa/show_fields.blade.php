<!-- Nim Field -->
<div class="col-sm-12">
    {!! Form::label('nim', 'Nim:') !!}
    <p>{{ $mahasiswa->nim }}</p>
</div>

<!-- Nama Mahasiswa Field -->
<div class="col-sm-12">
    {!! Form::label('nama_mahasiswa', 'Nama Mahasiswa:') !!}
    <p>{{ $mahasiswa->nama_mahasiswa }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $mahasiswa->alamat }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $mahasiswa->email }}</p>
</div>

<!-- No Telp Field -->
<div class="col-sm-12">
    {!! Form::label('no_telp', 'No Telp:') !!}
    <p>{{ $mahasiswa->no_telp }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mahasiswa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mahasiswa->updated_at }}</p>
</div>

