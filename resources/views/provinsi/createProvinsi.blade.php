@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('provinsi.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="kode">Kode Provinsi</label>
            <input type="text" class="form-control" id="kode" name="kode" value="{{old('kode')}}" placeholder="Kode Provinsi">

        </div>
        <div class="form-group">
            <label for="nama_provinsi">Nama Provinsi</label>
            <input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" value="{{old('nama_provinsi')}}" placeholder="Nama Provinsi">
        </div>
        <div class="form-group">
            <label for="active">Status Provinsi</label>
            <select class="form-control" id="active" name="active">
                <option value="1">Aktif</option>
                <option value="2">Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection