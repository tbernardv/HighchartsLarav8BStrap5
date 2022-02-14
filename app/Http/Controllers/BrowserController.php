<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# Importamos el modelo
use App\Models\Browser;

class BrowserController extends Controller
{
    //
    public function index(){
        $navegadores = Browser::all();

        # El array puntos lo armamos como lo utiliza la libreria hightcharts en el ejemplo
        $puntos = [];
        foreach($navegadores as $navegador){
            $puntos[] = ['name' => $navegador['nombre'], 'y' => floatval($navegador['porcentaje'])];
        }

        return view('graficos', ["data" => json_encode($puntos)]);
    }

}
