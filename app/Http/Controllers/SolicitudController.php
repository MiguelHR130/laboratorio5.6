<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use \PDF;
use App\Solicitud;
use App\Registrosolicitud;



class SolicitudController extends Controller
{
    public function index(Request $request)
    {

       
       //se declara arreglo
        $arreglo=[];
        //se realiza consulta para seleccionar solicitud id, paciente y fecha
        $registrosolicitud = DB::table('solicitud')
        ->join('paciente','paciente.id','=','solicitud.idPaciente')
        ->select('solicitud.id','solicitud.fecha',DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
        ->get();
        //se recorre la consulta anterior pasando el valor a value
        foreach($registrosolicitud as $key => $value){
            $solicitud = DB::table('solicitud')
            ->join('registrosolicitud','registrosolicitud.idSolicitud','=','solicitud.id')
            ->join('categorias','categorias.id','=','registrosolicitud.idCategoria')
            ->select('categorias.nombres as nombreCategoria')
            ->where('registrosolicitud.idSolicitud','=',$value->id)
            ->get();
            //se realiza otra consulta en la que se selecciona el idSolicitud que sea igual al id iterado de tabla solicitud
            $arreglo[]=[
                'registro'=>$value,
                'categorias'=>$solicitud
            ];
           
            }
            return response()->json($arreglo);
       
     /*   $solicitud = DB::table('registrosolicitud')
       ->join('categorias','registrosolicitud.idCategoria','=','categorias.id')
       ->join('solicitud','registrosolicitud.idSolicitud','=','solicitud.id')
       ->join('paciente','paciente.id','=','solicitud.idPaciente')
       ->select('solicitud.id','categorias.nombres','solicitud.fecha','paciente.nombre')
       ->orderBy('registrosolicitud.id','desc')
       ->get();

       return response()->json($solicitud); */
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
               
                $registro = Registrosolicitud::findOrFail($solicitud->id);
                $registro->idCategoria = $value['id'];
                $registro->save();
                DB::commit();
            }  



        }   catch (Exception $e){
            DB::rollBack();
        }  
    }

    public function pdf()
    {
            $registrosolicitud = DB::table('solicitud')
            ->join('paciente','paciente.id','=','solicitud.idPaciente')
            ->select('solicitud.id','solicitud.fecha',DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))
            ->get();

            $pdf = PDF::loadView('pdf.solicitud', compact('registrosolicitud'));
            // $pdf->setPaper('A4', 'landscape');
            // return $pdf->download('cv-interno.pdf');
            return $pdf->stream();
    }
}
