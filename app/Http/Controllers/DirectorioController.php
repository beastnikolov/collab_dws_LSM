<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectorioController extends Controller
{
    public function directorio()
    {
        $select = DB::select('select * from movies ORDER BY nota DESC');
        return view('directorio')->with('movie',$select);
    }

    public function buscar(Request $request) {
        $texto = $request->input('text');


        $movies = DB::table('movies')->where('titulo', 'like', "%$texto%")->get();
       // $movies = DB::table('movies')->get();

        return response()->json($movies);
    }

    public function sort(Request $request) {
        $filtro = $request->input('filtro');

        $movies = DB::select("select * from movies ORDER BY $filtro DESC");

        return response()->json($movies);
    }
}
