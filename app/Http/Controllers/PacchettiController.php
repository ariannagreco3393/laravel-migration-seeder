<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacchettiController extends Controller
{
    public function index() {
        return view ('pacchetti-viaggio');
    }
}
