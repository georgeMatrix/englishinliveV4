<?php

namespace App\Http\Controllers;

use App\Colegiatura;
use Illuminate\Http\Request;

class ColegiaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('colegiaturas/colegiaturas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colegiaturas/colegiaturasCreate');
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
     * @param  \App\Colegiatura  $colegiatura
     * @return \Illuminate\Http\Response
     */
    public function show(Colegiatura $colegiatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Colegiatura  $colegiatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Colegiatura $colegiatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Colegiatura  $colegiatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colegiatura $colegiatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Colegiatura  $colegiatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colegiatura $colegiatura)
    {
        //
    }
}
