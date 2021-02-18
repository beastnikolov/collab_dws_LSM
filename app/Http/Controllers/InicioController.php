<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InicioController extends Controller
{
    public function inicio()
    {

        $ultimosTitulos = DB::select('select * from movies order by añoestreno DESC');
        $top10 = DB::select('select * from movies order by nota DESC');
        //return view('inicio');

        return view ('inicio',['ultimosTitulos'=>$ultimosTitulos],['top10'=>$top10]);
    }
}
