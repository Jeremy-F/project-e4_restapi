<?php

namespace App\Http\Controllers;

use App\DBM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbmsController extends ValuesController{
    public static $modelClass = DBM::class;
}
