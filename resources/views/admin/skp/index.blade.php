@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <i class="fa fa-file"></i><h3 class="box-title">Data SKP Pegawai</h3>

            <div class="box-tools">
              <a href="/superadmin/skp/create" class="btn btn-sm bg-teal-active"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>No</th>
                <th>Tahun</th>
                <th>NIP & Nama</th>
                <th>Tugas</th>
                <th>Kuantitas</th>
                <th>Kualitas</th>
                <th>Waktu</th>
                <th>Biaya</th>
                <th>Aksi</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td>{{$data->firstItem() + $key}}</td>
                <td>{{$item->tahun}}</td>
                <td>{{$item->pegawai->nip}} - {{$item->pegawai->nama}}</td>
                <td>{{$item->target_tugas}}</td>
                <td>{{$item->target_kuantitas}}</td>
                <td>{{$item->target_kualitas}}</td>
                <td>{{$item->target_waktu}}</td>
                <td>{{$item->target_biaya}}</td>
                <td>
                  <a href="/superadmin/skp/edit/{{$item->id}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                  <a href="/superadmin/skp/delete/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a>
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
