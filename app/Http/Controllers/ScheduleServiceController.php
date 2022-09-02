<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScheduleServiceRequest;
use App\Http\Requests\UpdateScheduleServiceRequest;
use App\Models\ScheduleService;

class ScheduleServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreScheduleServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScheduleServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScheduleService  $scheduleService
     * @return \Illuminate\Http\Response
     */
    public function show(ScheduleService $scheduleService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScheduleService  $scheduleService
     * @return \Illuminate\Http\Response
     */
    public function edit(ScheduleService $scheduleService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScheduleServiceRequest  $request
     * @param  \App\Models\ScheduleService  $scheduleService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScheduleServiceRequest $request, ScheduleService $scheduleService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScheduleService  $scheduleService
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScheduleService $scheduleService)
    {
        //
    }
}
