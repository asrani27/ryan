<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table border=0 width="100%">
        <tr>
            <td width="15%" style="text-align: right">
                <img src="/logo/tl.svg.png" width="50%">
            </td>
            <td style="text-align: center">
                <b>PEMERINTAH KABUPATEN TANAH LAUT<br/>
                DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL<br/></b>
                

            </td>
            <td width="15%" style="text-align: right">
                
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><br/><strong>LAPORAN DATA PEGAWAI</strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>GolRuang</th>
            <th>Jabatan</th>
            <th>Unit Kerja</th>
        </tr>
        @php
            $no=1;
        @endphp
        @foreach ($data as $item)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->nip}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->pangkat}}</td>
                <td>{{$item->golruang}}</td>
                <td>{{$item->jabatan}}</td>
                <td>{{$item->unitkerja}}</td>
            </tr>
        @endforeach
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%">
            </td>
            <td>
                Pelaihari, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                Admin,<br/>
                <br/><br/><br/><br/><br/>


                <b><u>Andini</u></b><br/>
                NIP. 19902301102230102001

            </td>
        </tr>
    </table>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

$(document).ready(function(){
    window.print();
});
</script>
</html>