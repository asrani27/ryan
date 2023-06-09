@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/pegawai" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a> <br /><br />
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
            <form class="form-horizontal" method="post" action="/superadmin/pegawai/edit/{{$data->id}}">
                @csrf

            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nip" value="{{$data->nip}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Pangkat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pangkat" value="{{$data->pangkat}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">GolRuang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="golruang" value="{{$data->golruang}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jabatan" value="{{$data->jabatan}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Unit kerja</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="unitkerja"  value="{{$data->unitkerja}}" required>
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