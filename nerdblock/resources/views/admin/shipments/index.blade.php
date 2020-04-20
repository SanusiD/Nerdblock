        @php
        $title = "Shipments";
        @endphp
        @extends('layouts.master')
        @section('content')
        <div class="uk-section-default uk-section">
         <div class="uk-container">
             <a href="/admin/" class="btn btn-default">Go Back</a>
             <div class="uk-grid-margin" uk-grid>
                <div class="uk-width-1-1@m">
                    <h1 data-id="page#4"> <span style="text-decoration: underline;">View Shipments</span> </h1>
                    <div class="uk-overflow-auto" data-id="page#5">
                        <table class="uk-table uk-table-divider uk-table-hover uk-table-middle">
                            <thead>
                                <tr>

                                    <th class="uk-text-nowrap">Shipment ID</th>
                                    <th class="uk-text-nowrap">Store Address</th>
                                    <th class="uk-text-nowrap">Store Phone</th>
                                    <th class="uk-text-nowrap">Store Manager</th>
                                    <th class="uk-text-nowrap">Shipment Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $storeShipments = \App\StoreShipment::all()
                                @endphp
                                <tr class="el-item">
                                    @foreach($storeShipments as $storeShipment)
                                    @php
                                    $store = \App\Stores::find($storeShipment-> storeID)
                                    @endphp
                                    <td>
                                        <div class="el-content uk-panel">
                                            <p>{{$storeShipment->storeShipmentID}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="el-content uk-panel">
                                            <p>{{$store->storeAddress}} <br> 
                                                {{$store->StoreCity}}, {{$store->storeState}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="el-content uk-panel">
                                            <p>{{$store->storePhoneNumber}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="el-content uk-panel">
                                            <p>{{$store->storeManager}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="el-content uk-panel">
                                            <p>{{$storeShipment->storeShipmentDate}}</p>
                                        </div>
                                    </td>                                   
                                </tr>    

                                @endforeach                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection