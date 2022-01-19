<?php

namespace App\Http\Controllers;

use App\Models\Wifi;
use App\Http\Requests\StoreWifiRequest;
use App\Http\Requests\UpdateWifiRequest;

class WifiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wifi.index');
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
     * @param  \App\Http\Requests\StoreWifiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWifiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function show(Wifi $wifi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function edit(Wifi $wifi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWifiRequest  $request
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWifiRequest $request, Wifi $wifi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wifi  $wifi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wifi $wifi)
    {
        //
    }
}
