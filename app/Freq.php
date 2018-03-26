<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freq extends Model{
    protected $table = "freqs";

    protected $fillable = [
        "value"
    ];

    public $timestamps = false;

}
