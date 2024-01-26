@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('kelurahan.create')}}" class="btn btn-primary">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Kelurahan</th>
                <th>Nama Kecamatan</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelurahan as $des)
            <tr>
                <td>{{$des->id}}</td>
                <td>{{$des->kode}}</td>
                <td>{{$des->nama_kelurahan}}</td>
                <td>{{$des->nama_desamatan}}</td>
                <td>
                    <div class="custom-control custom-checkbox">

                        <input class="form-check-input" type="checkbox" name="active[]" value="1" {{ $des->active? ' checked' : '' }}>
                    </div>
                </td>
                <td>
                    <div class="btn-group" style="width:135px">
                        <form action="{{route('kelurahan.delete',$des->id)}}" method="POST">
                            <a href="{{route('kelurahan.edit',$des->id)}}" class="btn btn-primary">Edit</a>
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