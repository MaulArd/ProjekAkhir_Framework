<div class="table-responsive">
    <table class="table" id="nilais-table">
        <thead>
        <tr>
            <th>Nim</th>
        <th>Nama Mahasiswa</th>
        <th>Wali Dosen</th>
        <th>Mata Kuliah</th>
        <th>Nilai</th>
        <th>Predikat</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nilais as $nilai)
            <tr>
                <td>{{ $nilai->nim }}</td>
            <td>{{ $nilai->nama_mahasiswa }}</td>
            <td>{{ $nilai->wali_dosen }}</td>
            <td>{{ $nilai->mata_kuliah }}</td>
            <td>{{ $nilai->nilai }}</td>
            <td>{{ $nilai->predikat }}</td>
            <td>{{ $nilai->keterangan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['nilais.destroy', $nilai->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('nilais.show', [$nilai->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('nilais.edit', [$nilai->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
