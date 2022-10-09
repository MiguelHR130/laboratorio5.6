<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategoria;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;


class SubcategoriaController extends Controller
{
    public function index(Request $request)
    {   //implementa la busqueda
        $buscar = $request->buscar;
        $criterio=$request->criterio;

        if($buscar==''){
            $subcategoria=DB::table('subcategoria')
            ->join('categorias','subcategoria.idCategorias','=','categorias.id')
            ->select('subcategoria.id','subcategoria.nombreSubcategoria','subcategoria.vminH','subcategoria.vmaxH','subcategoria.unidadMedida','subcategoria.idCategorias','categorias.nombres')
            ->orderBy('subcategoria.id','desc')
            ->paginate(10);
            //$subcategoria = Subcategoria::orderBy('id','desc')->paginate(10);
        }else{
            $subcategoria = Subcategoria::where($criterio,'like','%'.$buscar.'%')->orderBy('id','desc')->paginate(5);
        }
       
        return [
            'pagination'=>[
                'total'=>$subcategoria->total(),
                'current_page'=>$subcategoria->currentPage(),
                'per_page'=>$subcategoria->perPage(),
                'last_page'=>$subcategoria->lastPage(),
                'from'=>$subcategoria->firstItem(),
                'to'=>$subcategoria->lastItem(),
        ],
        'subcategoria'=> $subcategoria
    ];
    }
    public function store(Request $request)
    {
       if(!$request->ajax()) return redirect('/'); 

       $subcategoria = new Subcategoria();
       $subcategoria->nombreSubcategoria = $request->nombreSubcategoria;
       $subcategoria->vminH = $request->vminH;
       $subcategoria->vmaxH = $request->vmaxH;
       $subcategoria->unidadMedida = $request->unidadMedida;
       $subcategoria->idCategorias = $request->idCategorias;
       $subcategoria->save();

       return response()->json(array('status' => true));
    }

    public function update(Request $request)
    {
        if(!$request->ajax()) return redirect('/'); 

        $subcategoria = Subcategoria::findOrFail($request->id);
        $subcategoria->nombreSubcategoria = $request->nombreSubcategoria;
        $subcategoria->vminH = $request->vminH;
        $subcategoria->vmaxH = $request->vmaxH;
        $subcategoria->unidadMedida = $request->unidadMedida;
        $subcategoria->idCategorias = $request->idCategorias;
        $subcategoria->save();
 
       
    }

    public function listadeCategoria(Request $request)
    {
        $categoria = DB::table('categorias')
        ->orderBy('categorias.id','desc')
        ->select('categorias.id','categorias.nombres')
        ->get()
        ->toArray();
        return response()->json($categoria);
    }
}
