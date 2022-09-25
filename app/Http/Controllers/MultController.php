<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultController extends Controller {
    public function vistaMult() {
        return view('mult');
    }
}