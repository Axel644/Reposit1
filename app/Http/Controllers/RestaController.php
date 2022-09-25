<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaController extends Controller {
    public function vistaResta() {
        return view('resta');
    }
}