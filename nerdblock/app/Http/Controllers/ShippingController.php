<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
Use Cart;
Use DB;
use App\User;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $Items= Cart::content();
             return view('cart.shipping', compact('Items'));
        }
        // $Items = Cart::content();
        return view('login');
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
        $Items= Cart::content();
        

        foreach($Items as $items){
            $subscription = new \App\CustomerSubscription;
            $subscription->id = Auth::User()->id;
            $subscription->blockID = $items->id;
            $subscription->customerOrderPurchaseDate = \Carbon\Carbon::now();
            $subscription->customerOrderProgress = 'ordered';
            $subscription->save();
        }

        Cart::destroy();

        $customerSubscriptions = DB::table('customer_subscriptions')->select('*')->where('id', Auth::User()->id)->get();

        return view('subscription.index', compact('customerSubscriptions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
