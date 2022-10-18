<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use \PDF;
use App\Otrosresultados;
use App\Paciente;


class OtrosresultadosController extends Controller
{

    public function index(Request $request)
    {
        $otroindice = DB::table('otrosresultados')
        ->join('paciente','paciente.id','=','otrosresultados.idPaciente')
        ->select('otrosresultados.*','paciente.edad', DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
        ->orderBy('otrosresultados.id','desc')
        ->get()
        ->toArray();

        return response()->json($otroindice);
    }

    public function store(Request $request)
    {
        if(!$request->ajax()) return redirect('/'); 

       $otros = new Otrosresultados();
       $otros->idPaciente  = $request->paciente;
       $otros->fecha = $request->fecha;
       $otros->save();

       return response()->json(array('status' => true));
    }

    public function guardarEncabezado(Request $request)
    {
      // Resultado();
      $find = Otrosresultados::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->encabezado = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarCuerpo(Request $request)
    {
      // Resultado();
      $find = Otrosresultados::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->cuerpo = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function pdf($id)
    {
        $otropdf = DB::table('otrosresultados')
        ->join('paciente','paciente.id','=','otrosresultados.idPaciente')
        ->select('otrosresultados.*','paciente.edad as edad','paciente.sexo as sexo', DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
        ->orderBy('otrosresultados.id','desc')
        ->where('otrosresultados.idPaciente','=',$id)
        ->get()
        ->first();
        
        $fecha = $otropdf->fecha;

        $dia = substr($fecha,8,2);
        $mes = substr($fecha,5,2);
        $anio = substr($fecha,0,4);
        $fecha_final= $dia.' / '.$this->meses($mes).' / '.$anio;

        $pdf = PDF::loadView('pdf.otro', compact('otropdf','fecha_final'));
        $pdf->setPaper('A4', 'portrait');
        // return $pdf->download('cv-interno.pdf');
        return $pdf->stream();
    }

    public function pdfsobre($id)
    {
      $paciente=DB::table('paciente')
      ->select(DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
      ->where('paciente.id','=',$id)
      ->get();
      
      $pdf = PDF::loadView('pdf.sobre', compact('paciente'));
            $pdf->setPaper(array(0,0,640.187,312.98), 'portrait');
           
            return $pdf->stream();
    }

    public static function meses($mes){
        $resultado='';
        $mes = $mes.'';
        switch ($mes) {
          case '01'; case '1'; $resultado='Enero'; break;
          case '02'; case '2'; $resultado='Febrero'; break;
          case '03'; case '3'; $resultado='Marzo'; break;
          case '04'; case '4'; $resultado='Abril'; break;
          case '05'; case '5'; $resultado='Mayo'; break;
          case '06'; case '6'; $resultado='Junio'; break;
          case '07'; case '7'; $resultado='Julio'; break;
          case '08'; case '8'; $resultado='Agosto'; break;
          case '09'; case '9'; $resultado='Septiembre'; break;
          case '10': $resultado='Octubre'; break;
          case '11': $resultado='Noviembre'; break;
          case '12': $resultado='Diciembre'; break;
        }
        return $resultado;
      }
}
