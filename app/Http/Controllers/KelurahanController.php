<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $kelurahan = Kelurahan::paginate(5);
        return view('kelurahan.dataDesa', compact('kelurahan'));
    }

    public function create()
    {
        $kecamatan = Kecamatan::get();
        return view('kelurahan.createDesa', compact('kecamatan'));
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'kode' => 'required',
            'nama_kelurahan' => 'required',
            'nama_kecamatan' => 'required',
            'active' => 'required'
        ]);

        Kelurahan::create($ValidatedData);
        return redirect()->route('kelurahan.index');
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::get();
        $kel = Kelurahan::find($id)->first();
        return view('kelurahan.editDesa', compact('kel', 'kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $ValidatedData = $request->validate([
            'kode' => 'required',
            'nama_kelurahan' => 'required',
            'nama_kecamatan' => 'required',
            'active' => 'required'
        ]);

        Kelurahan::find($id)->update($ValidatedData);
        return redirect()->route('kelurahan.index');
    }

    public function delete($id)
    {
        Kelurahan::find($id)->delete();
        return redirect()->back();
    }
}
