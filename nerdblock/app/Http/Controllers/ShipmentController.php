<?php

namespace App\Http\Controllers;

use App\Shipment;
use Illuminate\Http\Request;
use DB;
use App\CustomerSubscription;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Shipment $shipments)
    {
     $shipments = $shipments->all();

     return view('employee.orders.index', compact('shipments'));
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
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show(Shipment $shipment)
    {
        return view('employee.orders.show', compact('shipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipment $shipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $order)
    {
        $shipment = DB::table('shipments')
        ->select('*')
        ->where('shipmentID', $order)
        ->get();

        if($request->get('choice') == 'refund'){
            $result = CustomerSubscription::where('customerSubID', $shipment[0]->customerSubID)->update(array('customerOrderProgress'=>'refunded'));
        }elseif($request->get('choice') == 'cancel'){
            $result = CustomerSubscription::where('customerSubID', $shipment[0]->customerSubID)->update(array('customerOrderProgress'=>'cancelled'));
        }

        $shipment= \App\Shipment::find($order);

        return view('employee.orders.show', compact('shipment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipment $shipment)
    {
        //
    }
}
