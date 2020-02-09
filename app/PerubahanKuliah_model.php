<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerubahanKuliah_model extends Model
{
    //
    protected $table = 'perubahan_kuliah';
    protected $primaryKey = 'id';
    protected $fillable = [
        'requestByEmail',
        'requestDateTime',
        'mataKulaiName',
        'mataKuliahCode',
        'class',
        'changeType',
        'fromDateTime',
        'fromRoom',
        'to',
        'remarks',
        'answer',
        'answeredByEmail',
        'answeredByDateTime',
        'answeredMessage'
    ];
}
