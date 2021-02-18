<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerController extends Controller
{
    public function verPelicula($id)
    {
        $select = DB::select("select * from movies WHERE id='$id'");
        return view('ver')->with('movies', $select);
    }
}
