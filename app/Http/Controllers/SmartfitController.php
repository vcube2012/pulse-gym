<?php

namespace App\Http\Controllers;

use App\Http\Resources\PreviewSmartfitResource;
use App\Http\Resources\SmartfitResource;
use App\Models\Smartfit;

class SmartfitController extends Controller
{
    public function index()
    {
        return PreviewSmartfitResource::make(Smartfit::all()->first());
    }

    public function show(Smartfit $smartfit)
    {
        return SmartfitResource::make($smartfit->load(['coaches','coaches.specialization']));
    }
}
