<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetaController1 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    { 
        $resta=[
            "Reseta"=>"Pizza",
            "Precio"=>"120"
        ];
        return $resta;
    }
}
