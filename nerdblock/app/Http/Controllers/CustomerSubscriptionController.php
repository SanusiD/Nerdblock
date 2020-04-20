<?php

namespace App\Http\Controllers;

use App\CustomerSubscription;
use Illuminate\Http\Request;

use DB;
use Auth;

class CustomerSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerSubscriptions = DB::table('customer_subscriptions')->select('*')->where('id', Auth::User()->id)->get();

        return view('subscription.index', compact('customerSubscriptions'));
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
     * @param  \App\CustomerSubscription  $customerSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerSubscription $customerSubscription)
    {
        return view('subscription.show', compact('customerSubscription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerSubscription  $customerSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerSubscription $customerSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerSubscription  $customerSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customerSubscription)
    {
        $subscription = CustomerSubscription::where('customerSubID', $customerSubscription)->update(array(
            'customerOrderProgress'=>'Cancelled'
        ));
        
        $customerSubscription= \App\CustomerSubscription::find($customerSubscription);
        //dd($items);
        return view('subscription.show', compact('customerSubscription'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerSubscription  $customerSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerSubscription $customerSubscription)
    {
        //
    }
}
