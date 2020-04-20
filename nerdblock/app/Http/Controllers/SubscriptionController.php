<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;

class SubscriptionController extends Controller
{
	public function update(Request $request, $subscription)
	{
		// dd($request);
		if($request->get('choice') == 'refund'){
			$order = Subscription::where('customerSubID', $subscription)->update(array(
				'customerOrderProgress'=>'refunded'
			));
		}elseif($request->get('chouce') == 'cancel'){

			$order = Subscription::where('customerSubID', $subscription)->update(array(
				'customerOrderProgress'=>'cancelled'
			));
		}

		dd($order);

		// $items= \App\Shipment::find($subscription);

        // return view('employee.product.edit', compact('items'));
		
	}
}
