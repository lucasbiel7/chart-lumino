<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Grafico;
class GraficosController extends Controller
{
    //

    function dados(){

    	return response()->json(Grafico::all());
    }
}
