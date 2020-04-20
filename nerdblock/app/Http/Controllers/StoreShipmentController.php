<?php

namespace App\Http\Controllers;

use App\StoreShipment;
use Illuminate\Http\Request;

class StoreShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shipments.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StoreShipment  $storeShipment
     * @return \Illuminate\Http\Response
     */
    public function show(StoreShipment $storeShipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreShipment  $storeShipment
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreShipment $storeShipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreShipment  $storeShipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreShipment $storeShipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreShipment  $storeShipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreShipment $storeShipment)
    {
        //
    }
}