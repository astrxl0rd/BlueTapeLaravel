<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalDosen_model extends Model
{
    protected $table = "jadwal_dosen_models";
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
