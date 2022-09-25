<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller {
    public function mostrarSuma(request $request) {
        $request->validate([
            'Numero1'=>'required',
            'Numero2'=>'required'
        ]);

        $elemento1 = $request->Numero1;
        $elemento2 = $request->Numero2;

        return redirect()->route('suma')->with('success','El resultado de la suma es: '.$elemento1+$elemento2);
    }
    public function vistaSuma() {
        return view('suma');
    }
}
