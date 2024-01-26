<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::paginate(5);
        return view('kecamatan.dataKecamatan', compact('kecamatan'));
    }

    public function create()
    {
        return view('kecamatan.createKecamatan');
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'kode' => 'required',
            'nama_kecamatan' => 'required',
            'active' => 'required'
        ]);

        Kecamatan::create($ValidatedData);
        return redirect()->route('kecamatan.index');
    }

    public function edit($id)
    {
        $kec = Kecamatan::find($id)->first();
        return view('kecamatan.editKecamatan', compact('kec'));
    }

    public function update(Request $request, $id)
    {
        $ValidatedData = $request->validate([
            'kode' => 'required',
            'nama_kecamatan' => 'required',
            'active' => 'required'
        ]);

        Kecamatan::find($id)->update($ValidatedData);
        return redirect()->route('kecamatan.index');
    }

    public function delete($id)
    {
        Kecamatan::find($id)->delete();
        return redirect()->back();
    }
}
