<?php

namespace App\Http\Controllers;

use App\Models\Cake;

class CakeController extends Controller
{
    public function index()
    {
        return Cake::all();
    }

    public function show($id)
    {
        return Cake::find($id);
    }
}
