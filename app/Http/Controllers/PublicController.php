<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;

class PublicController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auto = Auto::all();
        return view('auto.index', compact('auto'));
        // con il compact stiamo dicendo che $auto è la variabile da cui
        // prende il valore della variabile che si chiama "$auto" all'interno
        // della view auto.index
    }

    /**
     * Display the specified resource.
     *
     * @param  Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        return view('auto.show', compact('auto'));
    }

}
