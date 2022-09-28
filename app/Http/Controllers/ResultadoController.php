<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Resultado;
use App\Registrosolicitud;

class ResultadoController extends Controller
{
    public function index (Request $request)
    {
        $arreglo=[];

        $resultado = DB::table('registrosolicitud')
        ->join('solicitud','solicitud.id','=','registrosolicitud.idSolicitud')
        ->join('categorias','categorias.id','=','registrosolicitud.idCategoria')
        ->join('paciente','paciente.id','=','solicitud.idPaciente')
        ->select('registrosolicitud.idCategoria','registrosolicitud.idSolicitud','registrosolicitud.id','solicitud.idPaciente','paciente.nombre')
        ->get();

        foreach($resultado as $key => $value){
            $subcategoria = DB::table('subcategoria')
            ->select('subcategoria.id','subcategoria.nombreSubcategoria')
            ->where('subcategoria.idCategorias','=',$value->idCategoria)
            ->get();

            $arreglo[]=[
                'registros'=>$value,
                'subcategorias'=>$subcategoria
            ];
        }

        return response()->json($arreglo);
    }
}
