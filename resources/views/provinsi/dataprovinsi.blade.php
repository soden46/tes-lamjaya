@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('provinsi.create')}}" class="btn btn-primary">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Provinsi</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($provinsi as $prov)
            <tr>
                <td>{{$prov->id}}</td>
                <td>{{$prov->kode}}</td>
                <td>{{$prov->nama_provinsi}}</td>
                <td>
                    <div class="custom-control custom-checkbox">

                        <input class="form-check-input" type="checkbox" name="active[]" value="1" {{ $prov->active? ' checked' : '' }}>
                    </div>
                </td>
                <td>
                    <div class="btn-group" style="width:135px">
                        <form action="{{route('provinsi.delete',$prov->id)}}" method="POST">
                            <a href="{{route('provinsi.edit',$prov->id)}}" class="btn btn-primary">Edit</a>
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