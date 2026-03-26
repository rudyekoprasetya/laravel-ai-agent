<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HosseinHezami\LaravelGemini\Facades\Gemini;

class AIController extends Controller
{
    //Response API Ai Agent
    public function chat(Request $request) {
        $response = Gemini::text()->prompt($request->input('message'))->generate();

        return response()->json([$response->content()]);
    }
}
