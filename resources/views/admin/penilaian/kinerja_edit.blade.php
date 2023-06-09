@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/penilaian/kinerja" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a> <br /><br />
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Nilai kinerja</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" method="post" action="/superadmin/penilaian/kinerja/edit/{{$data->id}}">
                @csrf

            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->tahun}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Penilai</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->pegawaipenilai->nama}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Yang Dinilai</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$data->pegawaidinilai->nama}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nilai Kinerja</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nilai_kinerja" value="{{$data->nilai_kinerja}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-block btn-success pull-right"><i class="fa fa-save"></i> Simpan Nilai</button>
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