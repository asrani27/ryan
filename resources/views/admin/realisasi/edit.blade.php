@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/skp" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a> <br /><br />
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Target SKP Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" method="post" action="/superadmin/skp/edit/{{$data->id}}">
                @csrf

            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->tahun}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->pegawai->nama}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tugas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="target_tugas" value="{{$data->target_tugas}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kuantitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="target_kuantitas" value="{{$data->target_kuantitas}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kualitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="target_kualitas" value="{{$data->target_kualitas}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="target_waktu" value="{{$data->target_waktu}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Biaya</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="target_biaya" value="{{$data->target_biaya}}" readonly>
                    </div>
                </div>
            </div>
                
            </form>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Realisasi SKP Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" method="post" action="/superadmin/realisasi/edit/{{$data->id}}">
                @csrf

            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Realisasi</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_realisasi" value="{{$data->tgl_realisasi}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kuantitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="realisasi_kuantitas" value="{{$data->realisasi_kuantitas}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kualitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="realisasi_kualitas" value="{{$data->realisasi_kualitas}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="realisasi_waktu" value="{{$data->realisasi_waktu}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Biaya</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="realisasi_biaya" value="{{$data->realisasi_biaya}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nilai SKP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nilai_skp" value="{{$data->nilai_skp}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-block btn-success pull-right"><i class="fa fa-save"></i> Simpan Realisasi</button>
                    </div>
                </div>
            </div>
                
            </form>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection
@push('js')

@endpush