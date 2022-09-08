<?php

namespace App\Http\Controllers;

use App\Models\departements;
use Illuminate\Http\Request;

class DepartementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function show(departements $departements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, departements $departements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function destroy(departements $departements)
    {
        //
    }
}
