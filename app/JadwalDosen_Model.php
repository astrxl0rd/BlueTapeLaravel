<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalDosen_Model extends Model
{
    //
    protected $table = "jadwal_dosen";
    protected $primaryKey = "id";
    protected $fillable = [
        "user",
        "hari",
        "jam_mulai",
        "durasi",
        "jenis",
        "label",
        "lastUpdate"
    ];


}
