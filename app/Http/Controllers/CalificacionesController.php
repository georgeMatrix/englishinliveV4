<?php

namespace App\Http\Controllers;

use App\Calificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CalificacionesController extends Controller
{
    //getCalificaciones
    public function getCalificaciones(){
        $calificaciones = DB::table('calificaciones');
        return Datatables::of($calificaciones)
            ->addColumn('actions', 'calificaciones/actions')
            ->rawColumns(['actions'])
            ->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificaciones = Calificaciones::all();
        return view('calificaciones/calificaciones')
            ->with('calificaciones', $calificaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calificaciones/calificacionesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Calificaciones::create($request->all());
        return redirect('calificaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Calificaciones $calificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calificacion = Calificaciones::findOrFail($id);
        return view('calificaciones/calificacionesEdit')
            ->with('calificacion', $calificacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $calificacion = $request->except(['_token', '_method']);
        Calificaciones::where('id', '=', $id)->update($calificacion);
        return redirect('calificaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calificaciones  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calificaciones $calificaciones)
    {
        //
    }
}
