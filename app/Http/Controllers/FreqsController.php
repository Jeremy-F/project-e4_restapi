<?php

namespace App\Http\Controllers;

use App\Freq;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FreqsController extends ValuesController{
    public static $modelClass = Freq::class;
}
