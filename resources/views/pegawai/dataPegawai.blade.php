@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('pegawai.create')}}" class="btn btn-primary">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Provinsi</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $kar)
            <tr>
                <td>{{$kar->id}}</td>
                <td>{{$kar->nama_pegawai}}</td>
                <td>{{$kar->tempat_lahir}}</td>
                <td>{{$kar->tgl_lahir}}</td>
                <td>{{$kar->tempat_lahir}}</td>
                <td>{{$kar->jenis_kelamin}}</td>
                <td>{{$kar->agama}}</td>
                <td>{{$kar->alamat}}</td>
                <td>{{$kar->kelurahan}}</td>
                <td>{{$kar->kecamatan}}</td>
                <td>{{$kar->provinsi}}</td>
                <td>
                    <div class="btn-group" style="width:135px">
                        <form action="{{route('pegawai.delete',$kar->id)}}" method="POST">
                            <a href="{{route('pegawai.edit',$kar->id)}}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection