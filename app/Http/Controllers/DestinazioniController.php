<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinazioniController extends Controller
{
    public function index() {
        return view ('destinazioni');
    }
}
