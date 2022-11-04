<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;


class PacienteController extends Controller
{
    public function index(Request $request)
    {
/*         //$paciente = DB::table('paciente')->paginate(15)->get()->toArray();
        $buscar = $request->buscar;
        $criterio=$request->criterio;

        if($buscar==''){
            $paciente = DB::table('paciente')->select('paciente.id','paciente.nombre','paciente.apPaterno','paciente.apMaterno','paciente.edad','paciente.sexo','paciente.fecnac',DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"))->orderBy('paciente.id','desc')->paginate(10)->items();
            //$paciente = Paciente::orderBy('id','desc')->paginate(10);
            //$paciente = Paciente::select("paciente.*", DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombre"))->paginate(10)->first();
            $fecha=$paciente;
            $dia = substr($fecha,8,2);
            $mes = substr($fecha,5,2);
            $anio = substr($fecha,0,4);
            $fecha_final= $dia.' / '.$this->meses($mes).' / '.$anio;
        }else{
            $paciente = Paciente::where($criterio,'like','%'.$buscar.'%')->orderBy('id','desc')->paginate(5);

        }
       
        return [
            'pagination'=>[
                'total'=>$paciente->total(),
                'current_page'=>$paciente->currentPage(),
                'per_page'=>$paciente->perPage(),
                'last_page'=>$paciente->lastPage(),
                'from'=>$paciente->firstItem(),
                'to'=>$paciente->lastItem(),
        ],
        'paciente'=> $paciente
    ]; */

        $paciente = DB::table('paciente')
        ->select('paciente.*', DB::raw("CONCAT(paciente.nombre,' ',paciente.apPaterno,' ',paciente.apMaterno) AS nombreConcatenado"),DB::raw('TIMESTAMPDIFF(YEAR,fecnac,CURDATE()) AS edad'))
        ->get();

        return response()->json($paciente);

    }

    public function store(Request $request)
    {
       if(!$request->ajax()) return redirect('/'); 

       $paciente = new Paciente();
       $paciente->nombre = $request->nombre;
       $paciente->apPaterno = $request->apPaterno;
       $paciente->apMaterno = $request->apMaterno;
       $paciente->sexo = $request->sexo;
       $paciente->fecnac = $request->fecha;
       $paciente->save();

       return response()->json(array('status' => true));
    }

    public function update(Request $request)
    {
      //$guardarResguardo = ResguardoUnidad :: where ('id',$id)->first();

        $paciente = Paciente::findOrFail($request->id);
        $paciente->nombre = $request->nombre;
        $paciente->apPaterno = $request->apPaterno;
        $paciente->apMaterno = $request->apMaterno;
        $paciente->sexo = $request->sexo;
        $paciente->fecnac = $request->fecha;
        $paciente->save();
    }

      public function eliminar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $eliminarPaciente = Paciente::findOrFail($request->id);
        $eliminarPaciente->delete();

        return response()->json(array(
            'status' => true
        ));
    }
}
