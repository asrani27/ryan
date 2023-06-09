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
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Edit Data</h3>
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
                        <input type="text" class="form-control" name="target_tugas" value="{{$data->target_tugas}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kuantitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="target_kuantitas" value="{{$data->target_kuantitas}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kualitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="target_kualitas" value="{{$data->target_kualitas}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Waktu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="target_waktu" value="{{$data->target_waktu}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Biaya</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="target_biaya" value="{{$data->target_biaya}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-block btn-success pull-right"><i class="fa fa-save"></i> Update Data</button>
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