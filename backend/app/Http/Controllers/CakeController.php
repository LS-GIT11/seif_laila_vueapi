<?php

namespace App\Http\Controllers;

use App\Models\Cake;

class CakeController extends Controller
{
    public function index()
    {
        return Cake::orderBy('name')->get();
    }

    public function show($id)
    {
        return Cake::find($id);
    }
}
