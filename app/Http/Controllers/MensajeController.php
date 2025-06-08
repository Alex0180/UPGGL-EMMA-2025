<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    // Método 1: Mostrar mensaje personalizado con argumento de ruta
    public function mensajePersonalizado($nombre)
    {
        return view('posts.mensajePersonalizado', ['nombre' => $nombre]);
    }

    // Método 2: Mostrar mensaje según la hora del día
 public function mensajeHora()
{
    // Obtener hora local en 24 horas (00-23)
    $hora = now()->setTimezone(config('app.timezone'))->format('H');

    if ($hora >= 6 && $hora < 12) {
        $mensaje = "🌅 Buenos días";
    } elseif ($hora >= 12 && $hora < 18) {
        $mensaje = "🌞 Buenas tardes";
    } elseif ($hora >= 18 && $hora < 22) {
        $mensaje = "🌇 Buenas noches";
    } else {
        $mensaje = "🌙 Hora de descansar";
    }

    return view('posts.mensajeHora', ['mensaje' => $mensaje]);
}


    // Método 3: Mostrar un saludo repetido varias veces
    public function saludoRepetido($veces)
    {
        return view('posts.saludoRepetido', ['veces' => $veces]);
    }
}
