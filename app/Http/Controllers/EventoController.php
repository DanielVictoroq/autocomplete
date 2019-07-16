<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GuzzleController;
use App\Evento;

class EventoController extends Controller
{
    public function dados(){

        foreach(Evento::all() as $item){
            $data[] = $item->evento;
        }
        return $data;
    }
    public function registrarEvento(Request $request){
        $guzzle = new GuzzleController(); 
        return response()->json($guzzle->cadastroEvento($request->input('evento')));
    }
    
}
