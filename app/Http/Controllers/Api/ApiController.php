<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Auto;

class ApiController extends Controller
{

    public function getFirstAuto() {
        // creare un'api che ritorna la prima auto nel database.

        $firstAuto = Auto::orderBy('id', 'asc')->first();

        return response()->json($firstAuto);
    }
}
