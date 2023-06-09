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
        <div class="box">
            <div class="box-header">
                <i class="fa fa-user"></i>
                <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" method="post" action="/superadmin/pegawai/create">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nip" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pangkat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pangkat" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Gol Ruang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="golruang" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jabatan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">unit kerja</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="unitkerja" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-block bg-teal-active pull-right"><i class="fa fa-save"></i> Simpan Data</button>
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