<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Pegawai;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::paginate(5);
        return view('pegawai.dataPegawai', compact('pegawai'));
    }


    public function create()
    {
        $kelurahan = Kelurahan::get();
        $kecamatan = Kecamatan::get();
        $provinsi = Provinsi::get();
        return view('pegawai.createPegawai', compact('kelurahan', 'kecamatan', 'provinsi'));
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'nama_pegawai' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'provinsi' => 'required',
        ]);

        Pegawai::create($ValidatedData);
        return redirect()->route('pegawai.index');
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::get();
        $kecamatan = Kecamatan::get();
        $provinsi = Provinsi::get();
        $peg = Pegawai::find($id)->first();
        return view('pegawai.editPegawai', compact('peg', 'kelurahan', 'kecamatan', 'provinsi'));
    }

    public function update(Request $request, $id)
    {
        $ValidatedData = $request->validate([
            'nama_pegawai' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'provinsi' => 'required',
        ]);

        Pegawai::find($id)->update($ValidatedData);
        return redirect()->route('pegawai.index');
    }

    public function delete($id)
    {
        Pegawai::find($id)->delete();
        return redirect()->back();
    }
}
