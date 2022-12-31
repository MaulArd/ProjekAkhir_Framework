<!-- Nim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nim', 'Nim:') !!}
    {!! Form::text('nim', null, ['class' => 'form-control','maxlength' => 25]) !!}
</div>

<!-- Nama Mahasiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_mahasiswa', 'Nama Mahasiswa:') !!}
    {!! Form::text('nama_mahasiswa', null, ['class' => 'form-control','maxlength' => 50]) !!}
</div>

<!-- Wali Dosen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wali_dosen', 'Wali Dosen:') !!}
    {!! Form::text('wali_dosen', null, ['class' => 'form-control','maxlength' => 50]) !!}
</div>

<!-- Mata Kuliah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mata_kuliah', 'Mata Kuliah:') !!}
    {!! Form::text('mata_kuliah', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai', 'Nilai:') !!}
    {!! Form::number('nilai', null, ['class' => 'form-control','max' => 100]) !!}
</div>

<!-- Predikat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('predikat', 'Predikat:') !!}
    {!! Form::select('predikat', ['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Keterangan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('keterangan', 'Keterangan', ['class' => 'form-check-label']) !!}
    <label class="form-check">
    {!! Form::radio('keterangan', "Lulus", null, ['class' => 'form-check-input']) !!} Lulus
</label>

<label class="form-check">
    {!! Form::radio('keterangan', "Tidak Lulus", null, ['class' => 'form-check-input']) !!} Tidak Lulus
</label>

</div>
