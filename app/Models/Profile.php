<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable = ['namasaya', 'tentangsaya', 'namapendidikan', 'jurusan','tahun', 'namausaha', 'posisi', 'keteranganusaha','nohp', 'email','instagram', 'alamat'];
}
