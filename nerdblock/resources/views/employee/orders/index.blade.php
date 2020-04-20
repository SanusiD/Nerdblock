        @php
        $title = "View Orders";
        @endphp
        @extends('layouts.master')
        @section('content')
        <div class="uk-section-default uk-section">
            <div class="uk-container uk-container-large">
               <a href="/employee/" class="btn btn-default">Go Back</a>
               <div class="uk-grid-margin" uk-grid>
                <div class="uk-width-1-1@m">
                    <h1> All Orders </h1>
                    <div class="uk-margin">
                        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-match" uk-grid>
                         @foreach ($shipments as $shipment)
                         @php
                            $subscription = DB::table('customer_subscriptions')
                            ->select('*')
                            ->where('customerSubID', $shipment->customerSubID)
                            ->get();

                            $block = DB::table('blocks')
                            ->select('*')
                            ->where('blockID', $subscription[0]->blockID)
                            ->get()
                         @endphp
                         <div>
                            <a class="el-item uk-card uk-card-secondary uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-reset"
                            href="#">
                            <img class="el-image" alt
                            data-src="images\{{$block[0]->blockTheme}}_1.png"
                            data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                            uk-img>
                            <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom">
                                Invoice #: Order {{$shipment -> shipmentID}} </h3>
                                <div class="el-meta uk-h6 uk-margin-top uk-margin-remove-bottom"> Invoice Price: ${{$shipment -> blockPrice}}</div>
                                <div class="el-meta uk-h6 uk-margin-top uk-margin-remove-bottom"> {{$shipment -> shipmentDate}}</div>
                                <a class="uk-button uk-button-default" href="/view-orders/{{$shipment -> shipmentID}}">View Order</a>
                            </a>
                        </div> 
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection