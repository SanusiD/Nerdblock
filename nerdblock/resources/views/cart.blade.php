        @php
            $title = "Cart";
        @endphp
@extends('layouts.master')
@section('content')



<div class="uk-section-default uk-section">
    <div class="uk-container">
        <div class="uk-grid-margin" uk-grid>
            <div class="uk-width-1-1@m">
                <h1 class="uk-text-center"> Shopping Cart </h1>
            </div>
        </div>
    </div>
</div>

<div class="uk-section-default uk-section">
    <div class="uk-container">
        <div class="uk-grid-margin" uk-grid>
            <div class="uk-grid-item-match uk-width-large@m">
                <div class="uk-tile-muted uk-tile">
                    <div class="uk-card uk-card-default uk-card-body uk-margin-remove-first-child uk-margin">
                        <img class="el-image" alt
                                            data-src="images\NerdBlock 15 items.png"
                                            data-srcset="images\NerdBlock 15 items.png"
                                            data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                                            uk-img>

                        <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> Product 1 </h3>
                        <div class="el-meta uk-text-meta uk-margin-top">$22.44</div>
                    </div>
                    <div class="uk-card uk-card-default uk-card-body uk-margin-remove-first-child uk-margin">
                        <img class="el-image" alt
                                            data-src="images\NerdBlock 15 items.png"
                                            data-srcset="images\NerdBlock 15 items.png"
                                            data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                                            uk-img>

                        <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> Product 1 </h3>
                        <div class="el-meta uk-text-meta uk-margin-top">$22.44</div>
                    </div>
                    <div class="uk-card uk-card-default uk-card-body uk-margin-remove-first-child uk-margin">
                        <img class="el-image" alt
                                            data-src="images\NerdBlock 15 items.png"
                                            data-srcset="images\NerdBlock 15 items.png"
                                            data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                                            uk-img>

                        <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> Product 1 </h3>
                        <div class="el-meta uk-text-meta uk-margin-top">$22.44</div>
                    </div>
                    <div class="uk-card uk-card-default uk-card-body uk-margin-remove-first-child uk-margin">
                        <img class="el-image" alt
                                            data-src="images\NerdBlock 15 items.png"
                                            data-srcset="images\NerdBlock 15 items.png"
                                            data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                                            uk-img>

                        <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> Product 1 </h3>
                        <div class="el-meta uk-text-meta uk-margin-top">$22.44</div>
                    </div>
                    <div class="uk-card uk-card-default uk-card-body uk-margin-remove-first-child uk-margin">
                        <img class="el-image" alt
                                            data-src="images\NerdBlock 15 items.png"
                                            data-srcset="images\NerdBlock 15 items.png"
                                            data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                                            uk-img>

                        <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> Product 1 </h3>
                        <div class="el-meta uk-text-meta uk-margin-top">$22.44</div>
                    </div>
                    <div class="uk-card uk-card-default uk-card-body uk-margin-remove-first-child uk-margin">
                        <img class="el-image" alt
                                            data-src="images\NerdBlock 15 items.png"
                                            data-srcset="images\NerdBlock 15 items.png"
                                            data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                                            uk-img>

                        <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> Product 1 </h3>
                        <div class="el-meta uk-text-meta uk-margin-top">$22.44</div>
                    </div>
                </div>

            </div>

            <div class="uk-width-expand@m">
                <div class="total uk-margin">
                    <div id="page#14" uk-sticky="offset: 50; bottom: #top" class="uk-width-expand@m">
                        <h1 class="uk-h3" data-id="page#15">Cart total</h1>
                        <table
                            class="uk-table uk-table-divider uk-table-large uk-table-middle uk-table-responsive uk-text-center"
                            data-id="page#16">
                            <tbody>
                                <tr class="el-item">
                                    <td class="uk-text-nowrap uk-table-shrink">
                                        <div class="el-title uk-h4">Subtotal</div>
                                    </td>
                                    <td>
                                        <div class="el-content uk-panel">${{$cart->subtotal}}</div>
                                    </td>
                                </tr>
                                <tr class="el-item">
                                    <td class="uk-text-nowrap">
                                        <div class="el-title uk-h4">Tax</div>
                                    </td>
                                    <td>
                                        <div class="el-content uk-panel">${{Cart::Tax()}}</div>
                                    </td>
                                </tr>
                                <tr class="el-item">
                                    <td class="uk-text-nowrap">
                                        <div class="el-title uk-h4">Total</div>
                                    </td>
                                    <td>
                                        <div class="el-content uk-panel">{{$cart->total}}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="uk-margin" data-id="page#17"><a class="el-content uk-button uk-button-default">
                                Complete Order </a></div>
                    </div>
                </div>



            </div>
        </div>
    </div>



</div>





</div>

@endsection