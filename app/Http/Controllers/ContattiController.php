<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContattiController extends Controller
{
    public function index() {
        return view ('contatti');
    }
}
