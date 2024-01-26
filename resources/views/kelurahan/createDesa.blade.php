@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('kelurahan.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="kode">Kode Kelurahan</label>
            <input type="text" class="form-control" id="kode" name="kode" value="{{old('kode')}}" placeholder="Kode Kelurahan">

        </div>
        <div class="form-group">
            <label for="nama_kelurahan">Nama Kelurahan</label>
            <input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan" value="{{old('nama_kelurahan')}}" placeholder="Nama Kelurahan">
        </div>
        <div class="form-group">
            <label for="nama_kecamatan">Nama Kecamatan</label>
            <select class="form-control" id="nama_kecamatan" name="nama_kecamatan">
                @foreach($kecamatan as $kec)
                <option value="{{$kec->nama_kecamatan}}">{{$kec->nama_kecamatan}}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="active">Status Kelurahan</label>
            <select class="form-control" id="active" name="active">
                <option value="1">Aktif</option>
                <option value="2">Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection