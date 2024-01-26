@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('kelurahan.updated', $des->id)}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="kode">Kode Kelurahan</label>
            <input type="text" class="form-control" id="kode" name="kode" value="{{$des->kode}}" placeholder="Kode Kelurahan">

        </div>
        <div class="form-group">
            <label for="nama_kelurahan">Nama Kelurahan</label>
            <input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan" value="{{$des->nama_kelurahan}}" placeholder="Nama Kelurahan">
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
                @if($des->active == 1)
                <option value="1" selected>Aktif</option>
                <option value="2">Tidak Aktif</option>
                @elseif($des->active == 2)
                <option value="1">Aktif</option>
                <option value="2" selected>Tidak Aktif</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection