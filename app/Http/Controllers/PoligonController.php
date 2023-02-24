<?php

namespace App\Http\Controllers;

use App\Http\Resources\PoligonResource;
use App\Models\Poligon;
use Illuminate\Http\Request;

class PoligonController extends Controller
{
    public function index()
    {
        return PoligonResource::collection(Poligon::all());
    }
}
