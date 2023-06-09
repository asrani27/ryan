@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <i class="fa fa-file"></i><h3 class="box-title">Data Penilaian SKP</h3>

            <div class="box-tools">
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Penilai</th>
                <th>Yg Dinilai</th>
                <th>Nilai SKP</th>
                <th>Aksi</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td>{{$data->firstItem() + $key}}</td>
                <td>{{$item->tahun}}</td>
                <td>{{$item->pegawaipenilai->nama}}</td>
                <td>{{$item->pegawaidinilai->nama}}</td>
                <td>{{$item->nilai_skp}}</td>
                <td>
                  <a href="/superadmin/penilaian/skp/edit/{{$item->id}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Nilai SKP</a>
                  <a href="/superadmin/penilaian/skp/delete/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Hapus Nilai</a>
                </td>
              </tr>
              @endforeach
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
        {{$data->links()}}
        <!-- /.box -->
      </div>
</div>

@endsection
@push('js')

@endpush
