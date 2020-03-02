<?php

namespace App\Http\Controllers;

use App\BaseDeDatos;
use App\Http\Requests\BaseDeDatosRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BaseDeDatosController extends Controller
{
    public function eliminar($id){
        $baseDeDatos = BaseDeDatos::where('id','=', $id)->update(['status' => 'inactive']);
    }

    public function getBaseDeDatos(){
        $baseDeDatos = DB::table('base_de_datos')->where('status', '=', 'active');
        return Datatables::of($baseDeDatos)
            ->addColumn('actions', 'baseDeDatos/actions')
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
        $baseDatos = BaseDeDatos::orderBy('id', 'DESC')->paginate(10);
        return view('baseDeDatos/baseDeDatos')->with('baseDatos', $baseDatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('baseDeDatos/baseDeDatosCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BaseDeDatosRequest $request)
    {
        //return $request;
        BaseDeDatos::create($request->all());
        return redirect('baseDeDatos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function show(BaseDeDatos $baseDeDatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baseDeDatos = BaseDeDatos::findOrFail($id);
        //dd($baseDeDatos);
        return view('baseDeDatos/baseDeDatosEdit')
            ->with('baseDeDatos', $baseDeDatos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function update(BaseDeDatosRequest $request, $id)
    {
        $baseDatos = $request->except(['_token', '_method']);
        BaseDeDatos::where('id', '=', $id)->update($baseDatos);
        return redirect('baseDeDatos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BaseDeDatos  $baseDeDatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaseDeDatos $baseDeDatos)
    {
        //
    }
}
