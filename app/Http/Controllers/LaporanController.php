<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LaporanController extends Controller
{

    public function index()
    {
        $pegawai = Pegawai::get();
        return view('admin.laporan.index', compact('pegawai'));
    }
    public function cetak(Request $req)
    {
        $data = Penilaian::where('tahun', $req->tahun)->where('dinilai', $req->pegawai_id)->first();
        if ($data == null) {
            Session::flash('info', 'Tidak Ada Data');
            return back();
        } else {
            return view('admin.laporan.cetak', compact('data'));
        }
    }
    public function pegawai()
    {
        $data = Pegawai::get();
        return view('admin.laporan.cetak2', compact('data'));
    }
}
