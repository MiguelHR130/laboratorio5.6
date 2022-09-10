<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Validation\Rule;
use DB;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {   //implementa la busqueda
        $buscar = $request->buscar;
        $criterio=$request->criterio;

        if($buscar==''){
            $categoria = Categoria::orderBy('id','desc')->paginate(10);
        }else{
            $categoria = Categoria::where($criterio,'like','%'.$buscar.'%')->orderBy('id','desc')->paginate(5);
        }
       
        return [
            'pagination'=>[
                'total'=>$categoria->total(),
                'current_page'=>$categoria->currentPage(),
                'per_page'=>$categoria->perPage(),
                'last_page'=>$categoria->lastPage(),
                'from'=>$categoria->firstItem(),
                'to'=>$categoria->lastItem(),
        ],
        'categoria'=> $categoria
    ];
    }

    public function store(Request $request)
    {
       if(!$request->ajax()) return redirect('/'); 

       $categoria = new Categoria();
       $categoria->nombres = $request->nombres;
       $categoria->save();

       return response()->json(array('status' => true));
    }

    public function update(Request $request)
    {
      //$guardarResguardo = ResguardoUnidad :: where ('id',$id)->first();

        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombres = $request->nombres;
        $categoria->save();
    }
}
