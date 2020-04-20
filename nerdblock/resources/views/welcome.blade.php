@php
$title = "Nerdblock Home";
@endphp
@extends('layouts.master')
@section('content')

<div class="uk-section-default uk-section uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;">
    <div class="uk-width-1-1">

        <div class="uk-container">
            <div class="uk-grid-margin" uk-grid uk-height-viewport="offset-top: true; offset-bottom: 20;">
                <div class="uk-width-expand@m">
                    <div class="uk-margin">
                        <img class="el-image" alt data-src="images\NerdBlock 15 items.png"
                        data-srcset="images\NerdBlock 15 items.png 4000w"
                        data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667" uk-img>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <h1 class="uk-heading-medium uk-text-center"> Nerdblock<br />Mysteries </h1>
                    <div class="uk-text-large uk-margin uk-text-center">
                        <p style="margin: 0px;"><span id="attr-314ed682-c77d-4980-92bc-a76bff4ef4aa"
                            style="letter-spacing: 0px; color: #000000; font-family: Calibri-Bold, Calibri, Calibri, ArialUnicodeMS; font-weight: bold; font-style: initial; font-variation-settings: unset; font-size: 33px; line-height: 33px; text-align: center; text-decoration: none; text-transform: none; border-collapse: separate;">Nerdblock
                            delivers collectible items from horror, sci-fi, comic books, classic
                        “nerd”culture, arcade and more right to your door!</span></p>
                    </div>
                    <div class="uk-margin uk-text-center">
                        <a class="el-content uk-button uk-button-primary uk-button-large"
                        href="/shop">
                        Shop
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section-primary uk-section">
        <div class="uk-container">
            <div class="uk-grid-margin" uk-grid>
                <div class="uk-width-1-1@m">
                    <h1> Customer Reviews </h1>
                    <div class="uk-margin">
                        <div class="uk-child-width-1-1 uk-child-width-1-3@m uk-grid-match" uk-grid>
                            <div>
                                <div class="el-item uk-panel uk-margin-remove-first-child">
                                    <div class="el-meta uk-text-meta uk-margin-top">Customer 1</div>
                                    <div class="el-content uk-panel uk-margin-top">
                                        <p><b><i>"I like Subscription more and more each day because it makes my
                                            life a lot easier. We've used Subscription for the last five
                                        years."</i></b></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="el-item uk-panel uk-margin-remove-first-child">
                                    <div class="el-meta uk-text-meta uk-margin-top">Customer 2</div>
                                    <div class="el-content uk-panel uk-margin-top">
                                        <p><b><i>"I like Subscription more and more each day because it makes my
                                            life a lot easier. We've used Subscription for the last five
                                        years."</i></b></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="el-item uk-panel uk-margin-remove-first-child">
                                    <div class="el-meta uk-text-meta uk-margin-top">Customer 3</div>
                                    <div class="el-content uk-panel uk-margin-top">
                                        <p><b><i>"I like Subscription more and more each day because it makes my
                                            life a lot easier. We've used Subscription for the last five
                                        years."</i></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection