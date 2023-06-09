@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/penilaian/penilai" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a> <br /><br />
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
            <form class="form-horizontal" method="post" action="/superadmin/penilaian/penilai/create">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tahun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tahun" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pejabat Penilai</label>
                        <div class="col-sm-10">
                            <select name="penilai" class="form-control" required>
                                <option value="">-pilih-</option>
                            @foreach ($pegawai as $item)
                                <option value="{{$item->id}}">{{$item->nip}} - {{$item->nama}}</option>    
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Yang Di nilai</label>
                        <div class="col-sm-10">
                            <select name="dinilai" class="form-control" required>
                                <option value="">-pilih-</option>
                            @foreach ($pegawai as $item)
                                <option value="{{$item->id}}">{{$item->nip}} - {{$item->nama}}</option>    
                            @endforeach
                            </select>
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