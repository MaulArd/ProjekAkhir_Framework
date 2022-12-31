<li class="nav-item">
    <a href="{{ route('mahasiswa.index') }}"
       class="nav-link {{ Request::is('mahasiswa*') ? 'active' : '' }}">
        <p>Mahasiswa</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('dosen.index') }}"
       class="nav-link {{ Request::is('dosen*') ? 'active' : '' }}">
        <p>Dosen</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('nilais.index') }}"
       class="nav-link {{ Request::is('nilais*') ? 'active' : '' }}">
        <p>Nilai</p>
    </a>
</li>


