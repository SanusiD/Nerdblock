        @php
            $title = "Contact Us";
        @endphp
@extends('layouts.master')
@section('content')

<div class="uk-section-default uk-section">
    <div class="uk-container">
        <div class="uk-grid-margin" uk-grid>
            <div class="uk-width-expand@s">
                <h1 class="uk-h3 uk-text-center"> Cotact Us </h1>
                <div class="uk-margin">
                    <div>
                     <h1 class="uk-h3"> Support Ticket </h1>
                     <div class="uk-margin">
                        <form class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input " type="text" placeholder="First Name" value="{{ Auth::user() -> firstName}}">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input " type="text" placeholder="Last Name" value="{{ Auth::user() -> lastName}}">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input " type="text" placeholder="Phone Number" value="{{ Auth::user() -> phone}}">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input " type="text" placeholder="Email Address" value="{{ Auth::user() -> email}}">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input " type="text" placeholder="Subject">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input " type="text" placeholder="Department - Optional">
                            </div>
                            <div class="uk-width-1-1@s">
                                <input class="uk-input" style="height:200px; text-align: left; vertical-align: top;" type="text" placeholder="Message">
                            </div>
                            <div class="uk-margin">
                                <a class="el-content uk-button uk-button-secondary">
                                    Submit Support Ticket
                                </a>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection