<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'penilaian';
    protected $guarded = ['id'];

    public function pegawaipenilai()
    {
        return $this->belongsTo(Pegawai::class, 'penilai');
    }

    public function pegawaidinilai()
    {
        return $this->belongsTo(Pegawai::class, 'dinilai');
    }
}
