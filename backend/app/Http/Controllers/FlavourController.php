<?php

namespace App\Http\Controllers;

use App\Models\Flavour;

class FlavourController extends Controller
{
    public function index()
    {
        return Flavour::all();
    }

    public function show($id)
    {
        return Flavour::find($id);
    }
}
