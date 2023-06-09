@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <i class="fa fa-file"></i><h3 class="box-title">Data Realisasi SKP Pegawai</h3>

            <div class="box-tools">
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>No</th>
                <th>Tahun</th>
                <th>NIP & Nama</th>
                <th>Target</th>
                <th>Realisasi</th>
                <th>Aksi</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td>{{$data->firstItem() + $key}}</td>
                <td>{{$item->tahun}}</td>
                <td>{{$item->pegawai->nip}} - {{$item->pegawai->nama}}</td>
                <td>
                  <table width=100%>
                    <tr>
                      <td>Tugas</td>
                      <td>:</td>
                      <td>{{$item->target_tugas}}</td>
                    </tr>
                    <tr>
                      <td>Kuantitas</td>
                      <td>:</td>
                      <td>{{$item->target_kuantitas}}</td>
                    </tr>
                    <tr>
                      <td>Kualitas</td>
                      <td>:</td>
                      <td>{{$item->target_kualitas}}</td>
                    </tr>
                    <tr>
                      <td>Waktu</td>
                      <td>:</td>
                      <td>{{$item->target_waktu}}</td>
                    </tr>
                    <tr>
                      <td>Biaya</td>
                      <td>:</td>
                      <td>{{$item->target_biaya}}</td>
                    </tr>
                  </table>
                </td>
                <td>
                  <table width=100%>
                    <tr>
                      <td>Tgl Realisasi</td>
                      <td>:</td>
                      <td>{{$item->tgl_realisasi}}</td>
                    </tr>
                    <tr>
                      <td>Kuantitas</td>
                      <td>:</td>
                      <td>{{$item->realisasi_kuantitas}}</td>
                    </tr>
                    <tr>
                      <td>Kualitas</td>
                      <td>:</td>
                      <td>{{$item->realisasi_kualitas}}</td>
                    </tr>
                    <tr>
                      <td>Waktu</td>
                      <td>:</td>
                      <td>{{$item->realisasi_waktu}}</td>
                    </tr>
                    <tr>
                      <td>Biaya</td>
                      <td>:</td>
                      <td>{{$item->realisasi_biaya}}</td>
                    </tr>
                    <tr>
                      <td>Nilai SKP</td>
                      <td>:</td>
                      <td>{{$item->nilai_skp}}</td>
                    </tr>
                  </table>
                </td>
                <td>
                  <a href="/superadmin/realisasi/edit/{{$item->id}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Realisasi</a>
                  <a href="/superadmin/realisasi/delete/{{$item->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Hapus Realisasi</a>
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
