<?php

namespace App\Http\Controllers;

use App\Models\OnlineCourse;
use App\Http\Requests\StoreOnlineCourseRequest;
use App\Http\Requests\UpdateOnlineCourseRequest;

class OnlineCourseController extends Controller
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
     * @param  \App\Http\Requests\StoreOnlineCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOnlineCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnlineCourse  $onlineCourse
     * @return \Illuminate\Http\Response
     */
    public function show(OnlineCourse $onlineCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OnlineCourse  $onlineCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(OnlineCourse $onlineCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOnlineCourseRequest  $request
     * @param  \App\Models\OnlineCourse  $onlineCourse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOnlineCourseRequest $request, OnlineCourse $onlineCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnlineCourse  $onlineCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnlineCourse $onlineCourse)
    {
        //
    }
}
