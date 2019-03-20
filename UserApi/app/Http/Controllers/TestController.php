<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function Teste(){
        return response()->json([
            'message' => 'I`m online!'
        ], 201);
    }
}
