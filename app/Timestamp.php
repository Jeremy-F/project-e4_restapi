<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timestamp extends Model
{
    protected $table = "timestamps";

    protected $fillable = [
        "value"
    ];

    public $timestamps = false;
}
