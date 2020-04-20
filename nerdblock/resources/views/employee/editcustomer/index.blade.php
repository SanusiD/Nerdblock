@php
$title = "Customer Profile";
@endphp
@extends('layouts.master')
@section('content')

<div class="uk-section-default uk-section">





    <div class="uk-container">
        <div class="uk-grid-margin" uk-grid>
            <div class="uk-width-1-1@m">
            <a href="/employee" class="btn btn-default">Go Back</a>




                <h1 data-id="page#4"> All Customers </h1>
                <div class="uk-overflow-auto" data-id="page#5">
                    <table class="uk-table uk-table-striped uk-table-hover uk-table-middle">
                    
                        <tbody>
                               <thead>
                            <tr>

                                <th class="uk-text-nowrap">Customer ID</th>
                                <th class="uk-text-nowrap">Customer Name</th>
                                <th class="uk-text-nowrap">Customer Address</th>
                                <th class="uk-text-nowrap">Customer Phone</th>
                                <th class="uk-text-nowrap">More information</th>
                            </tr>
                        </thead>
                            @foreach ($users as $user)
                                <tr class="el-item">
                                <td class="uk-text-nowrap uk-table-shrink">
                                    <div class="el-meta uk-h6 uk-margin-remove">{{$user-> id}}</div>
                                </td>
                                <td class="uk-text-nowrap uk-table-shrink">
                                    <div class="el-title">{{$user-> firstName}} {{$user -> lastName}}</div>
                                </td>
                                <td>
                                    <div class="el-content uk-panel">
                                        <p>{{$user -> address}}, {{$user -> city}}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="el-content uk-panel">
                                        <p>{{$user -> phone}}</p>
                                    </div>
                                </td>
                                <td class="uk-text-nowrap uk-table-shrink">
                                   {{--  <button class="el-link uk-button uk-button-default uk-width-1-1" name="choice"  value="cancel" type="submit">Cancel Order</button> --}}
                                    <a
                                        class="el-link uk-button uk-button-default uk-width-1-1" href="/update-customer-profile/{{$user-> id}}">View / Edit</a></td>
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