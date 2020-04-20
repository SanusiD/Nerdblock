        @php
        $title = "Edit Customer";
        @endphp
        @extends('layouts.master')
        @section('content')



        <div class="uk-section-default uk-section">
            <div class="uk-container">
                <a href="/update-customer-profile/" class="btn btn-default">Go Back</a>
                <form class="uk-form-horizontal uk-margin-large" method="POST" >
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    @php
                    $customer = DB::table('users')
                    ->select('*')
                    ->where('id', $user)
                    ->get()

                    @endphp
                    <h1> Update '{{$customer[0]-> firstName}} {{$customer[0]-> lastName}}' Information </h1>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">First Name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="firstName" type="text"
                            placeholder="First Name" value={{$customer[0]-> firstName}}>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Last Name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="lastName" type="text"
                            placeholder="Last Name" value={{$customer[0]-> lastName}}>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Email Address</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="email" type="text"
                            placeholder="Email Address" value={{$customer[0]-> email}}>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Phone Number</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="phone" type="text"
                            placeholder="Phone Number" value={{$customer[0]-> phone}}>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Address</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="address" type="text"
                            placeholder="Address" value="{{$customer[0]-> address}}">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">City</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="city" type="text"
                            placeholder="City" value={{$customer[0]-> city}}>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">State</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="state" type="text"
                            placeholder="State/Province" value={{$customer[0]-> state}}>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Country</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" name="country" type="text"
                            placeholder="Country" value="United States">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <button class="el-content uk-button uk-button-secondary"  href="/update-customer-profile/1" type="submit"
                        onclick="return confirm('Are you sure?')">Update Customer Information</button>
                    </div>
                </form>
            </div>
        </div>

    </div>




    @endsection