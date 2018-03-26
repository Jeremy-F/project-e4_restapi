<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antenna extends Model{
    protected $table = "antennas";
    protected $fillable = [
        "name", "place", "start", "end"
    ];
    public $timestamps = false;
}
