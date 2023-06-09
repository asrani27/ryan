<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyidik extends Model
{
    use HasFactory;
    protected $table = 'penyidik';
    protected $guarded = ['id'];
    public $timestamps = false;
}
