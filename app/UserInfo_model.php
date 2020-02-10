<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo_model extends Model
{
    protected $table = "user_info_modelss";
    protected $primaryKey = "email";
    protected $fillable = [
        "email",
        "name"
    ];
}
