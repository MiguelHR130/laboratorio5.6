<?php

namespace App\Http\Controllers;
use App\Rol;

use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(Request $request)
    {
        {   //implementa la busqueda
            $buscar = $request->buscar;
            $criterio=$request->criterio;
    
            if($buscar==''){
                $roles = Rol::orderBy('id','desc')->paginate(10);
            }else{
                $roles = Rol::where($criterio,'like','%'.$buscar.'%')->orderBy('id','desc')->paginate(5);
            }
           
            return [
                'pagination'=>[
                    'total'=>$roles->total(),
                    'current_page'=>$roles->currentPage(),
                    'per_page'=>$roles->perPage(),
                    'last_page'=>$roles->lastPage(),
                    'from'=>$roles->firstItem(),
                    'to'=>$roles->lastItem(),
            ],
            'roles'=> $roles
        ];
        }
    }

    public function selectRol(Request $request)
    {
        $roles = Rol::where('condicion','=','1')
        ->select('id','nombre')
        ->orderBy('nombre','asc')->get();

        return ['roles'=>$roles];
    }
}
