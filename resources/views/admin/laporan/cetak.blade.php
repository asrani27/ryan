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
            <td colspan=3 style="text-align:center"><br/><strong>PENILAIAN TAHUN  {{$data->tahun}}</strong></td>
        </tr>
    </table>
    <br/>
    <table border=1 cellspacing="0" cellpadding="3" width="100%">
        <tr>
            <td colspan=6>Pegawai Yang Di Nilai</td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td>{{$data->pegawaidinilai->nip}}</td>
            <td>Nilai SKP</td>
            <td>:</td>
            <td>{{$data->nilai_skp}}</td>
        </tr>
        
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{$data->pegawaidinilai->nama}}</td>
            <td>Nilai Perilaku Kerja</td>
            <td>:</td>
            <td>{{$data->nilai_perilaku}}</td>
        </tr>
        <tr>
            <td>Pangkat</td>
            <td>:</td>
            <td>{{$data->pegawaidinilai->pangkat}}</td>
            <td>Nilai Kinerja</td>
            <td>:</td>
            <td>{{$data->nilai_kinerja}}</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td>{{$data->pegawaidinilai->jabatan}}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan=6>Pejabat Penilai</td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td>{{$data->pegawaipenilai->nip}}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{$data->pegawaipenilai->nama}}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Pangkat</td>
            <td>:</td>
            <td>{{$data->pegawaipenilai->pangkat}}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td>{{$data->pegawaipenilai->jabatan}}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%">
                Pegawai Yang Dinilai,<br/>
                <br/><br/><br/><br/><br/>


                <b><u>{{$data->pegawaidinilai->nama}}</u></b><br/>
                NIP. {{$data->pegawaidinilai->nip}}
            </td>
            <td>
                Pelaihari, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                Pejabat Penilai,<br/>
                <br/><br/><br/><br/><br/>


                <b><u>{{$data->pegawaipenilai->nama}}</u></b><br/>
                NIP. {{$data->pegawaipenilai->nip}}

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