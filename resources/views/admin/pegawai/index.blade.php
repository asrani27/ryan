@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <i class="fa fa-users"></i><h3 class="box-title">Data Pegawai</h3>

            <div class="box-tools">
              <a href="/superadmin/pegawai/create" class="btn btn-sm bg-teal-active"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Pangkat</th>
                <th>Gol Ruang</th>
                <th>Jabatan</th>
                <th>Unit Kerja</th>
                <th>Aksi</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td>{{$data->firstItem() + $key}}</td>
                <td>{{$item->nip}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->pangkat}}</td>
                <td>{{$item->golruang}}</td>
                <td>{{$item->jabatan}}</td>
                <td>{{$item->unitkerja}}</td>
                <td>
                  <a href="/superadmin/pegawai/edit/{{$item->id}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                  <a href="/superadmin/pegawai/delete/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a>
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
