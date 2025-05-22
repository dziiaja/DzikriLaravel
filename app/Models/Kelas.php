<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model {

    public $table = "t_tugas";

    protected $fillable = [
        'nama_kelas', 'jurusan', 'lokasi_ruangan', 'nama_wali_kelas'
    ];
}

