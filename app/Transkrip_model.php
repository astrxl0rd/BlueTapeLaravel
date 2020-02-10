<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transkrip_model extends Model
{
    protected $table = "transkrip_models";
    protected $primaryKey = "id";
    protected $fillable = [
        "requestByEmail",
        "requestDateTime",
        "requestType",
        "requestUsage",
        "answer",
        "answeredByEmail",
        "answeredDateTime",
        "answeredMessage"
}
