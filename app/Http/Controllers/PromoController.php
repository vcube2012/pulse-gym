<?php

namespace App\Http\Controllers;

use App\Http\Resources\PromoResource;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        return new PromoResource(Promo::all()->first());
    }
}
