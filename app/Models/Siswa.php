<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected$table ='siswa';
    protected $fillable = ['nama_belakang','nama_depan','jenis_kelamin','agama','alamat'];
}
