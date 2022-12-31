<div class="table-responsive">
    <table class="table" id="mahasiswa-table">
        <thead>
        <tr>
            <th>Nim</th>
        <th>Nama mahasiswa</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telp</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahasiswa as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama_mahasiswa }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->no_telp }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mahasiswa.destroy', $mahasiswa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mahasiswa.show', [$mahasiswa->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mahasiswa.edit', [$mahasiswa->id]) }}"
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
