<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use \PDF;
use App\Solicitud;
use App\Registrosolicitud;
use App\Resultado;



class SolicitudController extends Controller
{
    public function index(Request $request)
    {
       //se declara arreglo
        $arreglo=[];
        //se realiza consulta para seleccionar solicitud id, paciente y fecha
        $registrosolicitud = DB::table('solicitud')
        ->join('paciente','paciente.id','=','solicitud.idPaciente')
        ->select('solicitud.id','solicitud.fecha as fecha',DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"), 'paciente.id AS paciente_id')
        ->orderBy('solicitud.id','desc')
        ->get();
        //se recorre la consulta anterior pasando el valor a value
        foreach($registrosolicitud as $key => $value){
            $arreglo_child = [];
            $solicitud = DB::table('solicitud')
            ->join('registrosolicitud','registrosolicitud.idSolicitud','=','solicitud.id')
            ->join('categorias','categorias.id','=','registrosolicitud.idCategoria')
            ->join('paciente','paciente.id','=','solicitud.idPaciente')
            ->select('categorias.nombres as nombreCategoria','categorias.id','registrosolicitud.id AS registroSolicitud','solicitud.idPaciente','registrosolicitud.observaciones',
            DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
            ->where('registrosolicitud.idSolicitud','=',$value->id)
            ->get();

            foreach ($solicitud as $key_child => $value_child) {
                # code...
                $solicitud_registro = $value_child->registroSolicitud;
                $partidas = DB::table('subcategoria AS s')
                ->leftJoin('resultado', function($leftJoin)use($solicitud_registro)
                  {
                    $leftJoin->on('s.id', '=', 'resultado.idSubcategoria');
                    $leftJoin->on(DB::raw('resultado.idRegistrosolicitud'), DB::raw('='),DB::raw("'".$solicitud_registro."'"));
                  })
                ->where('s.idCategorias',$value_child->id)
                ->select('s.*','resultado.descripcionResultado')
                ->get();
                $arreglo_child [] = [
                    'categoria' => $value_child,
                    'partidas' => $partidas
                ];
                // $partidas;
            }
            //se realiza otra consulta en la que se selecciona el idSolicitud que sea igual al id iterado de tabla solicitud
            $arreglo[]=[
                'registro'=>$value,
                'categorias'=> $arreglo_child
            ];

            }
            return response()->json($arreglo);
    }

    public function listadoPaciente(Request $request)
    {
        $paciente = DB::table('paciente')
        ->select('paciente.id','paciente.nombre','paciente.apPaterno','paciente.apMaterno','paciente.edad',
            DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
        ->orderBy('paciente.id','desc')
        ->get()
        ->toArray();

        return response()->json($paciente);

       /*  $subcategoria = DB::table('subcategoria')
        ->select("subcategoria.id")
        ->where('subcategoria.idCategorias', '=', $id)
        ->get();
        return response()->json($subcategoria); */

    }

    public function store(Request $request)
    {
        if(!$request->ajax()) return redirect('/');

        try{
            DB::beginTransaction();
            $solicitud = new Solicitud();
            $solicitud->fecha=$request->fecha;
            $solicitud->idPaciente=$request->paciente;
            $solicitud->save();

              $valores=$request->categoriaArray;

            foreach($valores as $key =>$value){

                $registro = new Registrosolicitud();
                $registro->idSolicitud = $solicitud->id;
                $registro->idCategoria = $value['id'];
                $registro->save();
                DB::commit();
            }

        }
           catch (Exception $e){
            DB::rollBack();
        }

    }

    public function update(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try{
            DB::beginTransaction();
          /*   $user = User::findOrFail($request->id);
            $persona = Persona::findOrFail($user->id); */
            $solicitud = Solicitud::findOrFail($request->id);
            $solicitud->fecha=$request->fecha;
            $solicitud->idPaciente=$request->paciente;
            $solicitud->save();

              $valores=$request->categoriaArray;

            foreach($valores as $key =>$value){

                $registro = Registrosolicitud::where('idSolicitud',$request->id)->first();
                $registro->idCategoria = $value['id'];
                $registro->save();
                DB::commit();
            }



        }   catch (Exception $e){
            DB::rollBack();
        }
    }

    public function pdf($id)
    {
            //se declara arreglo
      $arreglo=[];
      //se realiza consulta para seleccionar solicitud id, paciente y fecha
      $registrosolicitud = DB::table('solicitud')
      ->join('paciente','paciente.id','=','solicitud.idPaciente')
      ->join('registrosolicitud','registrosolicitud.idSolicitud','=','solicitud.id')
      ->join('categorias','categorias.id','=','registrosolicitud.idCategoria')
      ->select('registrosolicitud.id','solicitud.fecha as fecha',DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"), 'paciente.id AS paciente_id','paciente.edad','paciente.sexo')
      ->where('registrosolicitud.id','=',$id)
      ->orderBy('solicitud.id','desc')
      ->get();

    
      //se recorre la consulta anterior pasando el valor a value
      foreach($registrosolicitud as $key => $value){
          $arreglo_child = [];
          $solicitud = DB::table('solicitud')
          ->join('registrosolicitud','registrosolicitud.idSolicitud','=','solicitud.id')
          ->join('categorias','categorias.id','=','registrosolicitud.idCategoria')
          ->join('paciente','paciente.id','=','solicitud.idPaciente')
          ->select('categorias.nombres as nombreCategoria','categorias.id','registrosolicitud.id AS registroSolicitud','solicitud.idPaciente','registrosolicitud.observaciones',DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
          ->where('registrosolicitud.id','=',$value->id)
          ->get();

        $fecha = $value->fecha;

          foreach ($solicitud as $key_child => $value_child) {
              # code...
              $solicitud_registro = $value_child->registroSolicitud;
              $partidas = DB::table('subcategoria AS s')
              ->leftJoin('resultado', function($leftJoin)use($solicitud_registro)
                {
                  $leftJoin->on('s.id', '=', 'resultado.idSubcategoria');
                  $leftJoin->on(DB::raw('resultado.idRegistrosolicitud'), DB::raw('='),DB::raw("'".$solicitud_registro."'"));
                })
              ->where('s.idCategorias',$value_child->id)
              ->select('s.*','resultado.descripcionResultado')
              ->get();
              $arreglo_child [] = [
                  'categoria' => $value_child,
                  'partidas' => $partidas
              ];
              // $partidas;
          }
          //se realiza otra consulta en la que se selecciona el idSolicitud que sea igual al id iterado de tabla solicitud
          $arreglo[]=[
              'registro'=>$value,
              'categorias'=> $arreglo_child
          ];
          }

          /* 
          dia_ingreso = substr($fecha_ingreso,8,2);
          $mes_ingreso=substr($fecha_ingreso,5,2);
          $anio_ingreso=substr($fecha_ingreso,0,4);
          $fecha_final_ingreso= $this->dias($dia_ingreso).' días del mes de '.$this->meses($mes_ingreso).' del '.substr($fecha_ingreso,0,4); */

          $dia = substr($fecha,8,2);
          $mes = substr($fecha,5,2);
          $anio = substr($fecha,0,4);
          $fecha_final= $dia.' / '.$this->meses($mes).' / '.$anio;

            $pdf = PDF::loadView('pdf.solicitud', compact('arreglo','fecha','fecha_final'));
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
            // return $pdf->download('cv-interno.pdf');
            return $pdf->stream();
    }

    public function resultado(Request $request,$id)
    {
      //se declara arreglo
      $arreglo=[];
      //se realiza consulta para seleccionar solicitud id, paciente y fecha
      $registrosolicitud = DB::table('solicitud')
      ->join('paciente','paciente.id','=','solicitud.idPaciente')
      ->join('registrosolicitud','registrosolicitud.idSolicitud','=','solicitud.id')
      ->join('categorias','categorias.id','=','registrosolicitud.idCategoria')
      ->select('registrosolicitud.id','solicitud.fecha',DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"), 'paciente.id AS paciente_id')
      ->where('registrosolicitud.id','=',$id)
      ->orderBy('solicitud.id','desc')
      ->get();
      //se recorre la consulta anterior pasando el valor a value
      foreach($registrosolicitud as $key => $value){
          $arreglo_child = [];
          $solicitud = DB::table('solicitud')
          ->join('registrosolicitud','registrosolicitud.idSolicitud','=','solicitud.id')
          ->join('categorias','categorias.id','=','registrosolicitud.idCategoria')
          ->join('paciente','paciente.id','=','solicitud.idPaciente')
          ->select('categorias.nombres as nombreCategoria','categorias.id','registrosolicitud.id AS registroSolicitud','registrosolicitud.observaciones','solicitud.idPaciente',DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
          ->where('registrosolicitud.id','=',$value->id)
          ->get();

          foreach ($solicitud as $key_child => $value_child) {
              # code...
              $solicitud_registro = $value_child->registroSolicitud;
              $partidas = DB::table('subcategoria AS s')
              ->leftJoin('resultado', function($leftJoin)use($solicitud_registro)
                {
                  $leftJoin->on('s.id', '=', 'resultado.idSubcategoria');
                  $leftJoin->on(DB::raw('resultado.idRegistrosolicitud'), DB::raw('='),DB::raw("'".$solicitud_registro."'"));
                })
              ->where('s.idCategorias',$value_child->id)
              ->select('s.*','resultado.descripcionResultado')
              ->get();
              $arreglo_child [] = [
                  'categoria' => $value_child,
                  'partidas' => $partidas
              ];
              // $partidas;
          }
          //se realiza otra consulta en la que se selecciona el idSolicitud que sea igual al id iterado de tabla solicitud
          $arreglo[]=[
              'registro'=>$value,
              'categorias'=> $arreglo_child
          ];

          }
          return response()->json($arreglo);
    }

    public function guardarResultado(Request $request)
    {
      // Resultado();
      $find = Resultado::where('idRegistrosolicitud',$request->idRegistro)->where('idSubcategoria',$request->idCategoria)->first();
      if (isset($find)) {
        $find->descripcionResultado = $request->data;
        $find->save();
      }else {
        $new = new Resultado();
        $new->idRegistrosolicitud = $request->idRegistro;
        $new->idSubcategoria = $request->idCategoria;
        $new->descripcionResultado = $request->data;
        $new->save();
      }

      return response()->json(['status' => true]);
      // code...
    }

    public function guardarObservaciones(Request $request)
    {
      // Resultado();
      $find = Registrosolicitud::where('id',$request->idRegistro)->where('idCategoria',$request->idCategoria)->first();
      if (isset($find)) {
        $find->observaciones = $request->data;
        $find->save();
      }

      return response()->json(['status' => true]);
      // code...
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
