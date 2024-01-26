@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('provinsi.updated', $prov->id)}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="kode">Kode Provinsi</label>
            <input type="text" class="form-control" id="kode" name="kode" value="{{$prov->kode}}" placeholder="Kode Provinsi">

        </div>
        <div class="form-group">
            <label for="nama_provinsi">Nama Provinsi</label>
            <input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" value="{{$prov->nama_provinsi}}" placeholder="Nama Provinsi">
        </div>
        <div class="form-group">
            <label for="active">Status Provinsi</label>
            <select class="form-control" id="active" name="active">
                @if($prov->active == 1)
                <option value="1" selected>Aktif</option>
                <option value="2">Tidak Aktif</option>
                @elseif($prov->active == 2)
                <option value="1">Aktif</option>
                <option value="2" selected>Tidak Aktif</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection