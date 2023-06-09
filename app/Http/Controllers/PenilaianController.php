<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenilaianController extends Controller
{
    public function skp()
    {
        $data = Penilaian::paginate(10);
        return view('admin.penilaian.skp', compact('data'));
    }
    public function skp_edit($id)
    {
        $data = Penilaian::find($id);
        return view('admin.penilaian.skp_edit', compact('data'));
    }

    public function skp_delete($id)
    {
        $data = Penilaian::find($id)->update(['nilai_skp' => null]);
        Session::flash('success', 'Berhasil');
        return back();
    }
    public function skp_update(Request $req, $id)
    {
        $data = Penilaian::find($id);
        $data->nilai_skp = $req->nilai_skp;
        $data->save();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penilaian/skp');
    }
    public function perilaku()
    {
        $data = Penilaian::paginate(10);
        return view('admin.penilaian.perilaku', compact('data'));
    }
    public function perilaku_edit($id)
    {
        $data = Penilaian::find($id);
        return view('admin.penilaian.perilaku_edit', compact('data'));
    }

    public function perilaku_delete($id)
    {
        $data = Penilaian::find($id)->update(['nilai_perilaku' => null]);
        Session::flash('success', 'Berhasil');
        return back();
    }
    public function perilaku_update(Request $req, $id)
    {
        $data = Penilaian::find($id);
        $data->nilai_perilaku = $req->nilai_perilaku;
        $data->save();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penilaian/perilaku');
    }

    public function kinerja()
    {
        $data = Penilaian::paginate(10);
        return view('admin.penilaian.kinerja', compact('data'));
    }
    public function kinerja_edit($id)
    {
        $data = Penilaian::find($id);
        return view('admin.penilaian.kinerja_edit', compact('data'));
    }

    public function kinerja_delete($id)
    {
        $data = Penilaian::find($id)->update(['nilai_kinerja' => null]);
        Session::flash('success', 'Berhasil');
        return back();
    }
    public function kinerja_update(Request $req, $id)
    {
        $data = Penilaian::find($id);
        $data->nilai_kinerja = $req->nilai_kinerja;
        $data->save();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penilaian/kinerja');
    }
}
