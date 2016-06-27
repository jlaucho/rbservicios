<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GuardarFacturaController extends Controller
{
    public function store(Request $request)
    {
    	dd($request->all());
    }
}
