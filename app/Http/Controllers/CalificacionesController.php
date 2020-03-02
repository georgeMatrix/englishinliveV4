<?php

namespace App\Http\Controllers;

use App\Calificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPExcel_Worksheet_Drawing;
use Yajra\DataTables\Facades\DataTables;

class CalificacionesController extends Controller
{
    private function promedio5($cal1, $cal2, $cal3, $cal4, $cal5){
        $suma = $cal1 + $cal2 + $cal3 + $cal4 + $cal5;
        $promedio = $suma/5;
        return $promedio;
    }
    private function promedio4($cal1, $cal2, $cal3, $cal4){
        $suma = $cal1 + $cal2 + $cal3 + $cal4;
        $promedio = $suma/4;
        return $promedio;
    }

    public function getPdf($id, $adultoNino){
        //return $adultoNino;
        $calificaciones = Calificaciones::where('id', $id)->first();
        $resultado1 = $this->promedio5($calificaciones->icInicial1stTest, $calificaciones->icInicial2stTest, $calificaciones->icInicial3stTest, $calificaciones->workbook, $calificaciones->icInicialPlataformaYtareas);
        $resultado2 = $this->promedio4($calificaciones->icbSuperior1stTest, $calificaciones->icbSuperior2stTest, $calificaciones->icbSuperior3stTest, $calificaciones->icbSuperiorPlataformaYtareas);
        $resultado3 = $this->promedio4($calificaciones->icpIntermedio1stTest, $calificaciones->icpIntermedio2stTest, $calificaciones->icpIntermedio3stTest, $calificaciones->icpIntermedioPlataformaYtareas);
        $resultado4 = $this->promedio4($calificaciones->icIntermedio1stTest, $calificaciones->icIntermedio2stTest, $calificaciones->icIntermedio3stTest, $calificaciones->icIntermedioPlataformaYtareas);
        $total = ($resultado1 + $resultado2 + $resultado3 + $resultado4)/4;
        //dd($calificaciones);
        if ($adultoNino == 'nino'){
            \Excel::load('ENGLISH_N.xlsx', function($reader) use($calificaciones, $resultado1, $resultado2, $resultado3, $resultado4, $total){
//logos
                $reader->sheet('Hoja1', function($sheet){
                    $objDrawing = new PHPExcel_Worksheet_Drawing;
                    $objDrawing->setPath(public_path('lineasArriba.png')); //your image path
                    $objDrawing->setCoordinates('A1');
                    $objDrawing->setHeight(143);
                    $objDrawing->setWorksheet($sheet);
                });
                $reader->sheet('Hoja1', function($sheet){
                    $objDrawing = new PHPExcel_Worksheet_Drawing;
                    $objDrawing->setPath(public_path('mickey.png')); //your image path
                    $objDrawing->setCoordinates('G4');
                    $objDrawing->setHeight(100);
                    $objDrawing->setWorksheet($sheet);
                });
                $reader->sheet('Hoja1', function($sheet){
                    $objDrawing = new PHPExcel_Worksheet_Drawing;
                    $objDrawing->setPath(public_path('lineasAbajo.png')); //your image path
                    $objDrawing->setCoordinates('A43');
                    //$objDrawing->setWidth(288);
                    $objDrawing->setHeight(158);
                    $objDrawing->setWorksheet($sheet);
                });

                $reader->sheet('Hoja1', function($sheet) use($calificaciones, $resultado1, $resultado2, $resultado3, $resultado4, $total) {
                    $sheet->cell('B10', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->alumno);
                    });
                    $sheet->cell('D16', function($cell) use($resultado1) {
                        // manipulate the cell
                        $cell->setValue($resultado1);
                    });
                    $sheet->cell('E16', function($cell) use($resultado2) {
                        // manipulate the cell
                        $cell->setValue($resultado2);
                    });
                    $sheet->cell('F16', function($cell) use($resultado3) {
                        // manipulate the cell
                        $cell->setValue($resultado3);
                    });
                    $sheet->cell('G16', function($cell) use($resultado4) {
                        // manipulate the cell
                        $cell->setValue($resultado4);
                    });
                    $sheet->cell('E22', function($cell) use($total) {
                        // manipulate the cell
                        $cell->setValue($total);
                    });
                    $sheet->cell('I32', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->icInicialParticipation);
                    });
                    $sheet->cell('I34', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->icInicialUnderstanding);
                    });
                    $sheet->cell('I36', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->icInicialApplication);
                    });
                    $sheet->cell('I38', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->icInicialPresentation);
                    });
                });
            })->download();
        }else{
            \Excel::load('ENGLISH.xlsx', function($reader) use($calificaciones, $resultado1, $resultado2, $resultado3, $resultado4, $total){
                $reader->sheet('Hoja1', function($sheet) use($calificaciones, $resultado1, $resultado2, $resultado3, $resultado4, $total) {
                    $sheet->cell('B10', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->alumno);
                    });
                    $sheet->cell('D16', function($cell) use($resultado1) {
                        // manipulate the cell
                        $cell->setValue($resultado1);
                    });
                    $sheet->cell('E16', function($cell) use($resultado2) {
                        // manipulate the cell
                        $cell->setValue($resultado2);
                    });
                    $sheet->cell('F16', function($cell) use($resultado3) {
                        // manipulate the cell
                        $cell->setValue($resultado3);
                    });
                    $sheet->cell('G16', function($cell) use($resultado4) {
                        // manipulate the cell
                        $cell->setValue($resultado4);
                    });
                    $sheet->cell('E22', function($cell) use($total) {
                        // manipulate the cell
                        $cell->setValue($total);
                    });
                    $sheet->cell('I32', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->icInicialParticipation);
                    });
                    $sheet->cell('I34', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->icInicialUnderstanding);
                    });
                    $sheet->cell('I36', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->icInicialApplication);
                    });
                    $sheet->cell('I38', function($cell) use($calificaciones) {
                        // manipulate the cell
                        $cell->setValue($calificaciones->icInicialPresentation);
                    });
                });
            })->download();
        }
        /*$nombre = "jorge";
        \Excel::load('ENGLISH.xlsx', function($reader) use($nombre){
            $reader->sheet('Hoja1', function($sheet) use($nombre) {
                $sheet->cell('B10', function($cell) use($nombre) {
                    // manipulate the cell
                    $cell->setValue($nombre);
                });
            });
        })->download();*/
    }

    public function eliminar($id){
        $calificaciones = Calificaciones::where('id','=', $id)->update(['status' => 'inactive']);
    }

    public function getCalificaciones(){
        $calificaciones = DB::table('calificaciones')->where('status', '=', 'active');
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
