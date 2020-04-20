        @php
            $title = "Customer Profile";
        @endphp
@extends('layouts.master')
@section('content')
<div class="uk-section-default uk-section">
   <div class="uk-container">
       <form class="uk-form-horizontal uk-margin-large" method="POST" >
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{Auth::User()->id}}">
        <h1> Update your Information </h1>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">First Name</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="firstName" type="text"
                placeholder="First Name" value="{{Auth::User()->firstName}}">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Last Name</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="lastName" type="text"
                placeholder="Last Name" value="{{Auth::User()->lastName}}">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Email Address</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="email" type="text"
                placeholder="Email Address" value="{{Auth::User()->email}}">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Phone Number</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="phone" type="text"
                placeholder="Phone Number" value="{{Auth::User()->phone}}">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Address</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="address" type="text"
                placeholder="Address" value="{{Auth::User()->address}}">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">City</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="city" type="text"
                placeholder="City" value="{{Auth::User()->city}}">
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">State / Province</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="state" type="text"
                placeholder="State/Province" value="{{Auth::User()->state}}">
            </div>
        </div>
        <div class="uk-margin">
            <button class="el-content uk-button uk-button-secondary" type="submit"
            onclick="return confirm('Are you sure?')">Update Information</button>
        </div>
    </form>
</div>
</div>
@endsection