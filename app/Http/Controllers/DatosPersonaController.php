<?php

namespace App\Http\Controllers;

use App\DatosPersona;
use Illuminate\Http\Request;

class DatosPersonaController extends Controller
{
    public function respuesta () {
        $nuevo = DatosPersona::all();
        return \DataTables::of($nuevo)->make('true');
    }
}
