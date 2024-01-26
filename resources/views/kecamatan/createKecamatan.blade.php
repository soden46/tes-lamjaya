@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('kecamatan.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="kode">Kode Kecamatan</label>
            <input type="text" class="form-control" id="kode" name="kode" value="{{old('kode')}}" placeholder="Kode Kecamatan">

        </div>
        <div class="form-group">
            <label for="nama_kecamatan">Nama Kecamatan</label>
            <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" value="{{old('nama_kecamatan')}}" placeholder="Nama Kecamatan">
        </div>
        <div class="form-group">
            <label for="active">Status Kecamatan</label>
            <select class="form-control" id="active" name="active">
                <option value="1">Aktif</option>
                <option value="2">Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection