{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@php
$title = "Register";
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
                    <form class="uk-form-stacked" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="uk-margin {{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label class="uk-form-label" for="name">First Name</label>
                            <div class="uk-form-controls">
                                <input name="firstName" class="uk-input" id="firstName" type="text"
                                placeholder="John Doe" required autofocus>

                                @if ($errors->has('firstName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstName') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="uk-margin {{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label class="uk-form-label" for="name">Last Name</label>
                            <div class="uk-form-controls">
                                <input name="lastName" class="uk-input" id="lastName" type="text"
                                placeholder="Doe" required autofocus>

                                @if ($errors->has('lastName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastName') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="uk-margin {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="uk-form-label" for="email">Email Address</label>
                            <div class="uk-form-controls">
                                <input name="email" class="uk-input" id="email" type="text"
                                placeholder="john@doe.com" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="uk-margin {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="uk-form-label" for="password">Password</label>
                            <div class="uk-form-controls">
                                <input name="password"class="uk-input" id="password" type="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="password-confirm">Confirm Password</label>
                            <div class="uk-form-controls">
                                <input name="password_confirmation" class="uk-input" id="password-confirm" type="password" required>
                            </div>
                        </div>

                        <button type="submit" class="uk-width-1-1 uk-button uk-button-secondary">Register</button>

                        <div class="uk-width-1-1 uk-margin" uk-grid>
                            <div class="uk-width-1-2@s">
                            </div>
                            <div class="uk-width-1-2@s  uk-text-right"><label class="uk-form-label">Already a Member?</label>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin" uk-grid>
                            <div class="uk-width-1-2@s">
                            </div>
                            <div class="uk-width-1-2@s  uk-text-right"><a href="/login"><i><label class="uk-form-label">Login Now</label></i></a>
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