<?php

namespace App\Http\Controllers;

use App\Http\Resources\PreviewSmartfitResource;
use App\Http\Resources\SmartfitResource;
use App\Models\Smartfit;

class SmartfitController extends Controller
{
    public function index()
    {
        return SmartfitResource::make(Smartfit::query()->first()->load(['coaches.specialization']));
    }

    public function show(string $smartfit)
    {
        $smartfitt=Smartfit::query()->where('slug->'.app()->getLocale(),$smartfit)->first();

        return SmartfitResource::make($smartfitt->load(['coaches.specialization']));
    }
}
