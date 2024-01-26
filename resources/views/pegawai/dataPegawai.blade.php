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
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $kar)
            <tr>
                <td>{{$kar->id}}</td>
                <td>{{$kar->kode}}</td>
                <td>{{$kar->nama_kecamatan}}</td>

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