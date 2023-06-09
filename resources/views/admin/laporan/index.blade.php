@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Laporan Penilaian Pegawai</h3>

            <div class="box-tools">
              
            </div>
          </div>
          <!-- /.box-header -->
          <form method="post" action="/superadmin/laporan/penilaian" target="_blank">
          @csrf
            <div class="box-body table-responsive">
              <div class="form-group">
                <label class="col-sm-2 control-label">Tahun</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Pegawai</label>
                <div class="col-sm-10">
                    <select name="pegawai_id" class="form-control" required>
                        <option value="">-pilih-</option>
                    @foreach ($pegawai as $item)
                        <option value="{{$item->id}}">{{$item->nip}} - {{$item->nama}}</option>    
                    @endforeach
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tahun</label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-sm bg-teal-active">Cetak</button>
                </div>
              </div>
              
            </div>
          </form>
          <!-- /.box-body -->
        </div>
        
        <!-- /.box -->
    </div>

    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <i class="ion ion-clipboard"></i><h3 class="box-title">Laporan Pegawai</h3>

          <div class="box-tools">
            
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
              
              <a href="/superadmin/laporan/pegawai" target="_blank" class="btn btn-sm bg-teal-active">LAP. PEGAWAI</a> 
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
@push('js')

@endpush
