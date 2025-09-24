<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function get()
    {
            return dog::all();
    }
    public function store(request $request)
    {
        $dog =dog::create($request->only('nombre'));
        return response()->json($dog,201);
    }
}
