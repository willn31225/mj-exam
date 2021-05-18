<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beverage;

class BeverageController extends Controller
{
    public function index()
    {
        return Beverage::all();
    }

    public function show($id)
    {
        return Beverage::findOrFail($id);
    }
}
