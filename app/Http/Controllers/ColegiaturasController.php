<?php

namespace App\Http\Controllers;

use App\Colegiaturas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ColegiaturasController extends Controller
{
    public function getColegiaturas(){
        $colegiaturas = DB::table('colegiaturas');
        return Datatables::of($colegiaturas)
            ->addColumn('actions', 'colegiaturas/actions')
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
        $colegiaturas = Colegiaturas::orderBy('id', 'DESC')->paginate(10);
        return view('colegiaturas/colegiaturas')
            ->with('colegiaturas', $colegiaturas);
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
        Colegiaturas::create($request->all());
        return redirect('colegiaturas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Colegiaturas  $colegiaturas
     * @return \Illuminate\Http\Response
     */
    public function show(Colegiaturas $colegiaturas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Colegiaturas  $colegiaturas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colegiatura = Colegiaturas::findOrFail($id);
        return view('colegiaturas/colegiaturasEdit')
            ->with('colegiatura', $colegiatura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Colegiaturas  $colegiaturas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $colegiatura = $request->except(['_token', '_method']);
        Colegiaturas::where('id', '=', $id)->update($colegiatura);
        return redirect('colegiaturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Colegiaturas  $colegiaturas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colegiaturas $colegiaturas)
    {
        //
    }
}
