<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Travel;

class PacchettiController extends Controller
{
    public function index() {
        $travels=Travel::limit(10)->get();
        dd($travels);
        return view ('pacchetti-viaggio', compact('travels'));
    }
}
