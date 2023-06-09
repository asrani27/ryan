<?php

namespace App\Http\Controllers;

use App\Models\SKP;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SKPController extends Controller
{
    public function index()
    {
        $data = SKP::orderBy('id', 'DESC')->paginate(15);
        return view('admin.skp.index', compact('data'));
    }

    public function create()
    {
        $pegawai = Pegawai::get();
        return view('admin.skp.create', compact('pegawai'));
    }
    public function edit($id)
    {
        $data = SKP::find($id);
        return view('admin.skp.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = SKP::where('tahun', $req->tahun)->where('pegawai_id', $req->pegawai_id)->first();
        if ($check != null) {
            Session::flash('error', 'SKP Pegawai untuk tahun ini sudah ada');
            return back();
        } else {
            SKP::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/skp');
        }
    }
    public function update(Request $req, $id)
    {
        $data = SKP::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/skp');
    }
    public function delete($id)
    {
        $data = SKP::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/skp');
    }
}
