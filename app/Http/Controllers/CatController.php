<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatController extends Controller
{

    public function get()
    {
        $gatos = DB::select("SELECT * FROM gatos");
        return response()->json($gatos);
    }

  
    public function store(Request $request)
    {
        $nombre = $request->input('nombre');

        DB::insert("INSERT INTO gatos (nombre) VALUES (?)", [$nombre]);

        return response()->json(['message' => 'Gato agregado']);
    }
}

