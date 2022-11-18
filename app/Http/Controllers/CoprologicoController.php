<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use \PDF;
use App\Coprologico;
use App\Paciente;

class CoprologicoController extends Controller
{
    public function index(Request $request)
    {
        $copro = DB::table('coprologico')
        ->join('paciente','paciente.id','=','coprologico.idPaciente')
        ->select('coprologico.*', DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
        ->orderBy('coprologico.id','desc')
        ->get()
        ->toArray();

        return response()->json($copro);
    }

    public function store(Request $request)
    {
        if(!$request->ajax()) return redirect('/'); 

       $copro = new Coprologico();
       $copro->idPaciente  = $request->paciente;
       $copro->fecha = $request->fecha;
       $copro->save();

       return response()->json(array('status' => true));
    }

    public function guardarColor(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->color = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarOlor(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->olor = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarRestos(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->restos_alimenticios = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarConsistencia(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->consistencia = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarElementos(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->elementos_macroscopicos = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarMoco(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->moco_fecal = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarPehache(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->ph = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarSangre(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->sangre_oculta = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarPigmentos(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->pig_biliares = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarAzucares(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->azucares_reductores = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarOtros(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->otros = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarFibra(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->fibras_digeridas = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarFibrano(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->fibras_nodigeridas = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarFibraveg(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->fibras_vegetales = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarGrasa(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->grasas = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarAlmidon(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->almidones = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarLeuco(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->leucocitos = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarEri(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->eritrocitos = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarLevadura(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->levaduras = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarCristal(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->cristales = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarParasito(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->parasitos = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarObservacion(Request $request)
    {
      // Resultado();
      $find = Coprologico::where('idPaciente',$request->idPaciente)->first();
      if (isset($find)) {
        $find->observaciones = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function pdf($id)
    {
        $otropdf = DB::table('coprologico')
        ->join('paciente','paciente.id','=','coprologico.idPaciente')
        ->select('coprologico.*','paciente.sexo as sexo','paciente.fecnac', DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"),DB::raw('TIMESTAMPDIFF(YEAR,paciente.fecnac,CURDATE()) AS edad'),)
        ->orderBy('coprologico.id','desc')
        ->where('coprologico.idPaciente','=',$id)
        ->get()
        ->first();
        
        $fecha = $otropdf->fecha;
        $fechaCumple = $otropdf->fecnac;

        $dia = substr($fecha,8,2);
        $mes = substr($fecha,5,2);
        $anio = substr($fecha,0,4);
        $fecha_final= $dia.' / '.$this->meses($mes).' / '.$anio;

        $diac = substr($fechaCumple,8,2);
        $mesc = substr($fechaCumple,5,2);
        $anioc = substr($fechaCumple,0,4);
        $fecha_finalc= $diac.' / '.$this->meses($mesc).' / '.$anioc;

        $pdf = PDF::loadView('pdf.copro', compact('otropdf','fecha_final','fecha_finalc'));
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
