@php
$title = "New Employee";
@endphp
@extends('layouts.master')
@section('content')
<div class="uk-section-default uk-section">
    <div class="uk-container"><div class="uk-grid-margin" uk-grid>
        <div class="uk-width-1-1@m">
            
            
            
            <form class="uk-form-horizontal uk-margin-large" method="POST" action="/create-employee/new">
                {{ csrf_field() }}
                <h2> Add new Employee</h2>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">First name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" name="employeeFirstName"type="text" placeholder="Jane">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Last name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" name="employeeLastName" type="text" placeholder="Doe">
                    </input>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Phone Number</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" name="employeePhoneNumber" type="text" placeholder="123 456 7890">
                    </input>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Address</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" name="employeeAddress" type="text" placeholder="1230 madden rd">
                    </input>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">City</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" name="employeeCity" type="text" placeholder="Nottun">
                    </input>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">State</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" name="employeeState" type="text" placeholder="Ohio">
                    </input>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Email Address</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" name="emailAddress" type="text" placeholder="jane@jane.com">
                    </input>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Job Title</label>
                    <div class="uk-form-controls">
                        @php
                            $jobs = \App\Jobs::select('jobTitle')->groupBy('jobTitle')->get();

                        @endphp
                        <select>
                            <option class="uk-input" selected="selected" id="form-horizontal-text" name="jobTitle" disabled="disabled">Job Title</option>
                            @foreach($jobs as $job)
                            <option class="uk-input" id="form-horizontal-text" name="jobTitle">{{$job->jobTitle}}</option>
                            @endforeach
                        </select>
                </div>


                <button class="uk-button uk-button-default" type="submit">Add Employee</button>
            </form>

        </div></div></div>
        @endsection