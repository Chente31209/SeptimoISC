<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetaController extends Controller
{
    public function __invoke()
    {
        return view('Nosotros');
    }
}
