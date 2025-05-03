<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    public function viewQuienesSomos()
    {
        return view('quienes-somos');
    }
}
