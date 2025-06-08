<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    /**
     * Suma dos números y muestra el resultado.
     *
     * @param  float  $a
     * @param  float  $b
     * @return \Illuminate\View\View
     */
    public function sum($a, $b)
    {
        $result = $a + $b;
        return view('posts.result', [
            'operation' => 'Suma',
            'a' => $a,
            'b' => $b,
            'result' => $result
        ]);
    }

    /**
     * Resta dos números y muestra el resultado.
     *
     * @param  float  $a
     * @param  float  $b
     * @return \Illuminate\View\View
     */
    public function subtract($a, $b)
    {
        $result = $a - $b;
        return view('posts.result', [
            'operation' => 'Resta',
            'a' => $a,
            'b' => $b,
            'result' => $result
        ]);
    }

    /**
     * Multiplica dos números y muestra el resultado.
     *
     * @param  float  $a
     * @param  float  $b
     * @return \Illuminate\View\View
     */
    public function multiply($a, $b)
    {
        $result = $a * $b;
        return view('posts.result', [
            'operation' => 'Multiplicación',
            'a' => $a,
            'b' => $b,
            'result' => $result
        ]);
    }
}
