<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenilaiController extends Controller
{
    public function index()
    {
        $data = Penilaian::orderBy('id', 'DESC')->paginate(15);
        return view('admin.penilai.index', compact('data'));
    }

    public function create()
    {
        $pegawai = Pegawai::get();
        return view('admin.penilai.create', compact('pegawai'));
    }
    public function edit($id)
    {
        $data = Penilaian::find($id);
        $pegawai = Pegawai::get();
        return view('admin.penilai.edit', compact('data', 'pegawai'));
    }
    public function store(Request $req)
    {
        Penilaian::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penilaian/penilai');
    }
    public function update(Request $req, $id)
    {
        $data = Penilaian::find($id);
        $data->tahun = $req->tahun;
        $data->penilai = $req->penilai;
        $data->dinilai = $req->dinilai;
        $data->save();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penilaian/penilai');
    }
    public function delete($id)
    {
        $data = Penilaian::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penilaian/penilai');
    }
}
