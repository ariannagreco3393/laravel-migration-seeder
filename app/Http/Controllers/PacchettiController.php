<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;


class PacchettiController extends Controller
{
    public function index() {
        $travels=Travel::all();
        //dd($travels);
        return view ('pacchetti-viaggio', compact('travels'));
    }
}
