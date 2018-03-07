<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaneRequest;
use App\Models\Lane;

class LaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lanes = Lane::all();
        return response()->json(["lanes" => $lanes], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\LaneRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaneRequest $request)
    {
        Lane::create($request->toArray());
        return response()->json(200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\LaneRequest $request
     * @param  \App\Models\Lane $lane
     * @return \Illuminate\Http\Response
     */
    public function update(LaneRequest $request, Lane $lane)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lane $lane
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lane $lane)
    {
        //
    }
}
