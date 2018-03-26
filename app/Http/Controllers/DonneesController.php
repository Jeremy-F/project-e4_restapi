<?php

namespace App\Http\Controllers;

use App\Donnee;
use Illuminate\Http\Request;

class DonneesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store(Request $request){
        $donnees = array();
        if(is_array($request->all()) && count($request->all()) > 0){
            if(isset($request->all()[0]) && is_array($request->all()[0])){
                foreach($request->all() as $data){
                    $donnees[] = Donnee::create($data);
                }
            }else{
                $donnees = Donnee::create($request->all());
            }
        }
        return $donnees;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donnee  $donnee
     * @return \Illuminate\Http\Response
     */
    public function show(Donnee $donnee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donnee  $donnee
     * @return \Illuminate\Http\Response
     */
    public function edit(Donnee $donnee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donnee  $donnee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donnee $donnee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donnee  $donnee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donnee $donnee)
    {
        //
    }
}
