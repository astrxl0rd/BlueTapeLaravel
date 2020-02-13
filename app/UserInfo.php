<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = "user_info_modelss";
    protected $primaryKey = "email";
    protected $fillable = [
        "email",
        "name"
    ];
}
