<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Muestra el nombre y la edad del estudiante.
     *
     * @param  string  $name
     * @param  int  $age
     * @return \Illuminate\View\View
     */
    public function show($name, $age)
    {
        return view('posts.student_info', [
            'name' => $name,
            'age' => $age
        ]);
    }
}
