<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donnee extends Model
{
    protected $fillable = [
        "freq_id", "dbm_id", "band_id", "timestamp_id"
    ];

    public $timestamps = false;
}
