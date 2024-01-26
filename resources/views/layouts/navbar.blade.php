<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Syarif</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('pegawai.index')}}">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('kelurahan.index')}}">Kelurahan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('kecamatan.index')}}">Kecamatan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('provinsi.index')}}">Provinsi</a>
            </li>
        </ul>
    </div>
</nav>