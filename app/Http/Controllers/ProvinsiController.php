<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::paginate(5);
        return view('provinsi.dataprovinsi', compact('provinsi'));
    }

    public function create()
    {
        return view('provinsi.createProvinsi');
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'kode' => 'required',
            'nama_provinsi' => 'required',
            'active' => 'required'
        ]);

        Provinsi::create($ValidatedData);
        return redirect()->route('provinsi.index');
    }

    public function edit($id)
    {
        $prov = Provinsi::find($id)->first();
        return view('provinsi.editProvinsi', compact('prov'));
    }

    public function update(Request $request, $id)
    {
        $ValidatedData = $request->validate([
            'kode' => 'required',
            'nama_provinsi' => 'required',
            'active' => 'required'
        ]);

        Provinsi::find($id)->update($ValidatedData);
        return redirect()->route('provinsi.index');
    }

    public function delete($id)
    {
        Provinsi::find($id)->delete();
        return redirect()->back();
    }
}
