<?php

namespace App\Http\Controllers;

use App\Models\Realisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RealisasiController extends Controller
{
    public function index()
    {
        $data = Realisasi::orderBy('id', 'DESC')->paginate(15);
        return view('admin.realisasi.index', compact('data'));
    }

    public function create()
    {
        return view('admin.realisasi.create');
    }
    public function edit($id)
    {
        $data = Realisasi::find($id);
        return view('admin.realisasi.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Realisasi::where('tahun', $req->tahun)->where('pegawai_id', $req->pegawai_id)->first();
        if ($check != null) {
            Session::flash('error', 'realisasi Pegawai untuk tahun ini sudah ada');
            return back();
        } else {
            Realisasi::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/realisasi');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Realisasi::find($id);
        $data->tgl_realisasi = $req->tgl_realisasi;
        $data->realisasi_kuantitas = $req->realisasi_kuantitas;
        $data->realisasi_kualitas = $req->realisasi_kualitas;
        $data->realisasi_waktu = $req->realisasi_waktu;
        $data->realisasi_biaya = $req->realisasi_biaya;
        $data->nilai_skp = $req->nilai_skp;
        $data->save();

        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/realisasi');
    }
    public function delete($id)
    {
        $data = Realisasi::find($id);
        $data->tgl_realisasi = null;
        $data->realisasi_kuantitas = null;
        $data->realisasi_kualitas = null;
        $data->realisasi_waktu = null;
        $data->realisasi_biaya = null;
        $data->nilai_skp = null;
        $data->save();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/realisasi');
    }
}
