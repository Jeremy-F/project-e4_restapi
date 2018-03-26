<?php

namespace App\Http\Controllers;

use App\Timestamp;
use Illuminate\Http\Request;

class TimestampsController extends ValuesController {
    public static $modelClass = Timestamp::class;
}
