<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoClubRequest;
use App\Http\Requests\UpdatePhotoClubRequest;
use App\Models\PhotoClub;

class PhotoClubController extends Controller
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
     * @param  \App\Http\Requests\StorePhotoClubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotoClubRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhotoClub  $photoClub
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoClub $photoClub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhotoClub  $photoClub
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoClub $photoClub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhotoClubRequest  $request
     * @param  \App\Models\PhotoClub  $photoClub
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotoClubRequest $request, PhotoClub $photoClub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhotoClub  $photoClub
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoClub $photoClub)
    {
        //
    }
}
