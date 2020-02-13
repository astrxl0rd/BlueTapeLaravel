<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bluetape_userinfo extends Model
{
    protected $table = "bluetape_userinfos";
    protected $primaryKey = "email";
    protected $fillable = [
        "name",
        "lastUpdate"
    ];
}
