        @php
        $title = "Shipping";
        @endphp
        @extends('layouts.master')
        @section('content')
        <div class="uk-section-default uk-section">
            <div class="uk-container">
                <div class="uk-grid-margin" uk-grid>
                    <div class="uk-width-expand@s">
                        <h1 class="uk-h3"> Contact Information </h1>
                        <div class="uk-margin">
                            <form class="uk-grid-small" uk-grid>
                                <div class="uk-margin uk-width-1-2@s">
                                    <input class="uk-input " type="text" placeholder="First Name" value="{{ Auth::user() -> firstName}}">
                                </div>
                                <div class="uk-width-1-2@s">
                                    <input class="uk-input " type="text" placeholder="Last Name" value="{{ Auth::user() -> lastName}}">
                                </div>
                                <div class="uk-width-1-1@s">
                                    <input class="uk-input " type="text" placeholder="Phone Number" value= "{{Auth::user() -> phone}}">
                                </div>
                            </form>
                        </div>
                        <h1 class="uk-h3"> Shipping Information </h1>
                        <div class="uk-margin">
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Address"
                                    value="{{Auth::user() -> address}}">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-horizontal-text" type="text" placeholder="City" value= "{{Auth::user() -> city}}">
                                </div>
                            </div>

                            <form class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="City" value= "{{Auth::user() -> state}}">

                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-form-controls">
                                        <select class="uk-select" id="form-horizontal-select">
                                            <option disabled="">Choose Country</option>
                                            <option selected="selected">United States</option>
                                            <option>Canada</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <h1 class="uk-h3"> Payment Information </h1>
                        <div class="uk-margin">
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Card Number" value="5537773549901216">
                                </div>
                            </div>

                            <form class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-form-controls">
                                        <select class="uk-select" id="form-horizontal-select">
                                            <option>Month</option>
                                            <option selected="selected">January</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-width-1-4@s">
                                    <div class="uk-form-controls">
                                        <select class="uk-select" id="form-horizontal-select">
                                            <option>Year</option>
                                            <option selected="selected">2020</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-width-1-4@s">
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="CCV" value="768">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="uk-grid-item-match uk-width-expand@s">
                        <div class="uk-tile-muted uk-tile">
                            <div class="uk-margin">
                                <div id="page#14" class="uk-width-expand@m" uk-sticky="offset: 50; bottom: #top">
                                    <h1 class="uk-h3" data-id="page#15">Cart total</h1>

                                    <form class="uk-form-horizontal uk-margin-large">
                                        @foreach($Items as $items)
                                        @php
                                        $block = \App\Block::find($items->id);
                                        @endphp
                                        <div class="uk-margin-large">
                                            <label class="uk-form-label" for="form-horizontal-text">{{$block-> blockName}}</label>
                                        </div>
                                        <div class="uk-form-controls">
                                            <label class="uk-form-label" for="form-horizontal-text">${{$items-> price}}</label>
                                        </div>
                                        @endforeach
                                    </form>
                                </div>
                                <div class="uk-text-lead uk-margin">
                                    <form class="uk-form-horizontal uk-margin-large">
                                        <div class="uk-margin uk-padding-small-top">
                                            <label class="uk-form-label" for="form-horizontal-text">Subtotal</label>
                                            <div class="uk-form-controls">
                                                <label class="uk-form-label" for="form-horizontal-text">${{Cart::subtotal()}}</label></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="uk-text-lead uk-margin">
                                        <form class="uk-form-horizontal uk-margin-large">
                                            <div class="uk-margin uk-padding-small-top">
                                                <label class="uk-form-label" for="form-horizontal-text">Tax</label>
                                                <div class="uk-form-controls">
                                                    <label class="uk-form-label" for="form-horizontal-text">${{Cart::Tax()}}</label></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="uk-text-lead uk-margin">
                                            <form class="uk-form-horizontal uk-margin-large">
                                                <div class="uk-margin uk-padding-small-top">
                                                    <label class="uk-form-label" for="form-horizontal-text">Total</label>
                                                    <div class="uk-form-controls">
                                                        <label class="uk-form-label" for="form-horizontal-text">${{Cart::total()}}</label></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <form method="POST" action="/shipping" class="uk-form-horizontal uk-margin">
                                                {{ csrf_field() }}
                                                <button class="el-content uk-button uk-button-secondary" name="choice" value="order" type="submit" 
                                                onclick="return confirm('Are you sure?')">Complete Order</button>
                                              
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection