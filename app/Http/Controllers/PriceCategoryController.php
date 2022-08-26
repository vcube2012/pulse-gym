<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePriceCategoryRequest;
use App\Http\Requests\UpdatePriceCategoryRequest;
use App\Models\PriceCategory;

class PriceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePriceCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePriceCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PriceCategory  $priceCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PriceCategory $priceCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PriceCategory  $priceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PriceCategory $priceCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePriceCategoryRequest  $request
     * @param  \App\Models\PriceCategory  $priceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePriceCategoryRequest $request, PriceCategory $priceCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PriceCategory  $priceCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PriceCategory $priceCategory)
    {
        //
    }
}
