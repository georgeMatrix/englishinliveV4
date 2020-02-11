<?php

namespace App\Http\Controllers;

use App\Certificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CertificacionesController extends Controller
{
    public function getCertificaciones(){
        $certificaciones = DB::table('certificaciones');
        return Datatables::of($certificaciones)
            ->addColumn('actions', 'certificaciones/actions')
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
        $certificaciones = Certificaciones::orderBy('id', 'DESC')->paginate('10');
        return view('certificaciones/certificaciones')
            ->with('certificaciones', $certificaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificaciones/certificacionesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Certificaciones::create($request->all());
        return redirect('certificaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificaciones  $certificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Certificaciones $certificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificaciones  $certificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificacion = Certificaciones::find($id);
        return view('certificaciones/certificacionesEdit')
            ->with('certificacion', $certificacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certificaciones  $certificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $certificacion = $request->except(['_token', '_method']);
        Certificaciones::where('id', '=', $id)->update($certificacion);
        return redirect('certificaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificaciones  $certificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificaciones $certificaciones)
    {
        //
    }
}
