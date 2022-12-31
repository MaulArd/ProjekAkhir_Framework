<div class="table-responsive">
    <table class="table" id="dosen-table">
        <thead>
        <tr>
        <th>Nama Dosen</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telp</th>
        <th>Matkul Yang Diampu</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dosen as $dosen)
            <tr>
            <td>{{ $dosen->nama_dosen }}</td>
            <td>{{ $dosen->alamat }}</td>
            <td>{{ $dosen->email }}</td>
            <td>{{ $dosen->no_telp }}</td>
            <td>{{ $dosen->matkul_yang_diampu }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dosen.destroy', $dosen->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dosen.show', [$dosen->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dosen.edit', [$dosen->id]) }}"
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
