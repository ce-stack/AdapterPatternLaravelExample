<?php

namespace App\Http\Controllers;

use App\Models\OfflineCourse;
use App\Http\Requests\StoreOfflineCourseRequest;
use App\Http\Requests\UpdateOfflineCourseRequest;

class OfflineCourseController extends Controller
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
     * @param  \App\Http\Requests\StoreOfflineCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOfflineCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfflineCourse  $offlineCourse
     * @return \Illuminate\Http\Response
     */
    public function show(OfflineCourse $offlineCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfflineCourse  $offlineCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(OfflineCourse $offlineCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfflineCourseRequest  $request
     * @param  \App\Models\OfflineCourse  $offlineCourse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfflineCourseRequest $request, OfflineCourse $offlineCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfflineCourse  $offlineCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfflineCourse $offlineCourse)
    {
        //
    }
}
