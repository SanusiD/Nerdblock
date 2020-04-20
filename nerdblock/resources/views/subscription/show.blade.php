        @php
            $title = "Subscriptions";
        @endphp
@extends('layouts.master')
@section('content')

<div class="uk-section-default uk-section">



    @php
    $subscription = DB::table('customer_subscriptions')
    ->select('*')
    ->where('customerSubID', $customerSubscription->customerSubID)
    ->get()

    @endphp

    @php
    $blocks = DB::table('blocks')
    ->select('*')
    ->where('blockID', $customerSubscription->blockID)
    ->get()
    ->first()

    @endphp


    @php
    $shipment = DB::table('shipments')
    ->select('*')
    ->where('customerSubID', $customerSubscription->customerSubID)
    ->get()
    ->first()

    @endphp
    <div class="uk-container uk-container-large">
         <a href="/account/subscriptions" class="btn btn-default">Go Back</a>
        <div class="uk-grid-margin uk-container uk-container-large">
            <div uk-grid uk-height-viewport="offset-top: true; offset-bottom: 20;">
                <div class="uk-width-expand@m">
                    <div class="uk-card uk-card-secondary uk-card-body uk-margin-remove-first-child uk-margin"
                    data-id="page#4">
                    <img class="el-image" alt
                    data-src="/images/{{{$blocks -> blockTheme}}}_1.png"
                    data-srcset="/images/{{{$blocks -> blockTheme}}}_1.png"
                    data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667" uk-img>
                </div>
            </div>

            <div class="uk-grid-item-match uk-flex-middle uk-width-expand@m">
                <div class="uk-panel">
                    <div class="uk-panel uk-margin-remove-first-child uk-margin uk-width-xxlarge uk-margin-auto uk-text-center"
                    data-id="page#6" id="page#6">
                    <div class="el-meta uk-h5 uk-margin-medium-top uk-margin-remove-bottom">
                        Product Name: Product {{{$blocks-> blockID}}} <br>
                        Invoice #: Order {{$shipment-> shipmentID}} <br>
                        TrackingID: {{$shipment-> trackingID}} <br>
                        Price #: ${{$shipment-> blockPrice}} <br>
                        Invoice Date: {{$shipment-> created_at}} <br>
                        Shipment Progress:  {{{$subscription[0]-> customerOrderProgress}}}
                    </div>
                    @if($subscription[0]-> customerOrderProgress == "ordered")
                         <div class="el-content uk-panel uk-text-lead uk-margin-top">
                            <form method="POST" action="/account/subscriptions/{{$customerSubscription->customerSubID}}" class="uk-form-horizontal uk-margin">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                <button class="uk-button uk-button-default" name="choice" value="refund" type="submit" 
                                onclick="return confirm('Are you sure?')">Cancel Subscription</button>
                            </form>
                         </div>
                    @endif               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection