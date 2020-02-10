<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerubahanKuliah extends Model
{
    protected $table = "perubahan_kuliah_models";
    protected $primaryKey = "id";
    protected $fillable = [
        "requestByEmail",
        "requestDateTime",
        "mataKuliahName",
        "mataKuliahCode",
        "class",
        "changeType",
        "fromDateTime",
        "fromRoom",
        "to",
        "remarks",
        "answer",
        "answeredByEmail",
        "answeredByDateTime",
        "answeredMessage"
    ];
}
