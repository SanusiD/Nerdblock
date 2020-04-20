        @php
            $title = "Log In";
        @endphp
@extends('layouts.master')
@section('content')

<div class="uk-section-default uk-section uk-padding-remove-vertical uk-flex uk-flex-middle"
    tm-header-transparent="light" uk-height-viewport="offset-top: true;">
    <div class="uk-width-1-1">

        <div class="uk-grid-margin" uk-grid uk-height-viewport="offset-top: true;">
            <div class="uk-grid-item-match uk-width-expand@m">
                <div class="uk-grid-item-match">
                    <div class="uk-tile uk-padding-remove uk-background-norepeat uk-background-cover uk-background-center-center"
                        data-src="/images/kyle-nieber-siMO8TWzLYM-unsplash.jpg"
                        data-srcset="/images/kyle-nieber-siMO8TWzLYM-unsplash.jpg 768w,
                                     /images/kyle-nieber-siMO8TWzLYM-unsplash.jpg 1024w,
                                     /images/kyle-nieber-siMO8TWzLYM-unsplash.jpg 1366w,
                                     /images/kyle-nieber-siMO8TWzLYM-unsplash.jpg 1600w,
                                     /images/kyle-nieber-siMO8TWzLYM-unsplash.jpg 1920w,
                                     /images/kyle-nieber-siMO8TWzLYM-unsplash.jpg 3920w"
                        data-sizes="(max-aspect-ratio: 3920/4900) 80vh" uk-img>
                    </div>
                </div>
            </div>

            <div class="uk-grid-item-match uk-flex-middle uk-width-expand@m">
                <div class="uk-panel">
                    <div class="uk-panel uk-margin-remove-first-child uk-margin" data-id="page#5">
                        <div class="el-content uk-panel uk-margin-top">
                            <form class="uk-form-stacked" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="uk-margin {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                                    <div class="uk-form-controls">
                                        <input name="email" class="uk-input" id="email" type="text"
                                            placeholder="john@doe.com">
                                             @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>

                                <div class="uk-margin {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                                    <div class="uk-form-controls">
                                        <input name="password"class="uk-input" id="password" type="password">
                                         @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <button class="uk-width-1-1 uk-button uk-button-secondary" type="submit">Login Now</button>

                                <div class="uk-width-1-1 uk-margin" uk-grid>
                                    <div class="uk-width-1-2@s">
                                    </div>
                                    <div class="uk-width-1-2@s  uk-text-right"><label class="uk-form-label">Not a Member yet?</label>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-margin" uk-grid>
                                    <div class="uk-width-1-2@s">
                                    </div>
                                    <div class="uk-width-1-2@s  uk-text-right"><a href="/register"><i><label class="uk-form-label">Register Now</label><i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection