<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Class ValuesController
 * @package App\Http\Controllers
 */
class ValuesController extends Controller{
    /** @var Model */
    public static $modelClass;

    /**
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(Request $request)
    {
        return call_user_func(array(static::$modelClass, 'all'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentModel = static::$modelClass::where(["value" => $request->post("value")])->first();
        if(is_null($currentModel)){
            $currentModel = static::$modelClass::create($request->all());
        }
        return $currentModel;
    }

    /**
     * @param int $id
     */
    public function show(int $id)
    {
        $currentModel = static::$modelClass::find($id);
        return $currentModel;
    }

    /**
     * @param int $dbm
     * @return Freq
     */
    public function showByValue(int $dbm)
    {
        $arr = ["value" => $dbm];
        $currentModel = static::$modelClass::where($arr)->get()->first();
        if(is_null($currentModel)){
            return static::$modelClass::create($arr);
        }
        return $currentModel;
    }
}
