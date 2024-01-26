@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('kecamatan.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama_pegawai">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{old('nama_pegawai')}}" placeholder="Nama Pegawai">

        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}" placeholder="Tempat Lahir">
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir')}}" placeholder="Tanggal Lahir">
        </div>
        <div class="form-group">
            <label for="active">Jenis Kelamin</label>
            <select class="form-control" id="active" name="active">
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" value="{{old('agama')}}" placeholder="Agama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10">{{old('alamat')}}</textarea>
        </div>
        <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <select class="form-control" id="kelurahan" name="kelurahan">
                @foreach($kelurahan as $kel)
                <option value="{{$kel->nama_kelurahan}}">{{$kel->nama_kelurahan}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <select class="form-control" id="kecamatan" name="kecamatan">
                @foreach($kecamatan as $kec)
                <option value="{{$kec->nama_kecamatan}}">{{$kec->nama_kecamatan}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <select class="form-control" id="provinsi" name="provinsi">
                @foreach($provinsi as $prov)
                <option value="{{$prov->nama_provinsi}}">{{$prov->nama_provinsi}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection