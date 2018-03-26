<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;

class BandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Band::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $where = [
            'rbw' => $request->post('rbw'),
            'points' => $request->post('points'),
            'min_freq_id' => $request->post('min_freq_id'),
            'max_freq_id' => $request->post('max_freq_id'),
            'antenna_id' => $request->post('antenna_id')
        ];
        $currentBand = Band::where($where)->first();
        if(is_null($currentBand)){
            $where["name"] = $request->post("name");
            $currentBand = Band::find(Band::insertGetId($where));
        }
        return $currentBand;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Band $band)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
        //
    }
}
