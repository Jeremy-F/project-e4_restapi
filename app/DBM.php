<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBM extends Model
{
    protected $table = "dbms";

    protected $fillable = [
        "id", "value"
    ];

    protected $guarded = [];
    protected $hidden = [];
    public $timestamps = false;



}
