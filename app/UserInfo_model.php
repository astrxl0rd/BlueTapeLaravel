<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo_model extends Model
{
    /protected $table = "jadwal_dosen";
    protected $primaryKey = "email";
    protected $fillable = [
        "email",
        "name"s
}
