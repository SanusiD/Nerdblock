        @php
        $title = "Edit Employee";
        @endphp
        @extends('layouts.master')
        @section('content')
        <div class="uk-section-default uk-section">

           @php
           $employee = DB::table('employees')
           ->select('jobID')
           ->where('employeeID', $employeeUser-> id)
           ->get()
           ->first();

           $job = DB::table('jobs')
           ->select('jobTitle')
           ->where('jobID', $employee-> jobID)
           ->get()
           ->first();
           @endphp



           <div class="uk-container">
            <a href="/view-employees/" class="btn btn-default">Go Back</a>
            <div class="uk-grid-margin" uk-grid>
                <div class="uk-width-1-1@m">
                    <h1 > Update {{$employeeUser-> firstName . ' ' . $employeeUser-> lastName}}'s Information </h1>
                    <div class="uk-margin-large uk-margin-remove-bottom" data-id="page#5">
                     
                        <form class="uk-form-horizontal uk-margin" method="POST" action="/view-employees/{{$employeeUser-> id}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="uk-margin"><label class="uk-form-label" for="form-horizontal-text">First
                            Name</label>
                            <div class="uk-form-controls"><input id="form-horizontal-text" class="uk-input"
                                name="firstName" type="text" placeholder="First Name" value="{{$employeeUser-> firstName}}" /></div>
                            </div>
                            <div class="uk-margin"><label class="uk-form-label" for="form-horizontal-text">Last Name</label>
                                <div class="uk-form-controls"><input id="form-horizontal-text" class="uk-input"
                                    name="lastName" type="text" placeholder="Last Name" value="{{$employeeUser-> lastName}}"/></div>
                                </div>
                                                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Job Title</label>
                    <div class="uk-form-controls">
                        @php
                            $jobs = \App\Jobs::select('jobTitle')->groupBy('jobTitle')->get();

                        @endphp
                        <select>
                            <option class="uk-input" selected="selected" id="form-horizontal-text" name="jobTitle" disabled="disabled">{{$job-> jobTitle}}</option>
                            @foreach($jobs as $jobChoice)
                            @if($jobChoice->jobTitle != $job-> jobTitle)
                            <option class="uk-input" id="form-horizontal-text" name="jobTitle">{{$jobChoice->jobTitle}}</option>
                            @endif
                            @endforeach
                        </select>
                </div>



                                    <div class="uk-margin"><label class="uk-form-label" for="form-horizontal-text">Email
                                    Address</label>
                                    <div class="uk-form-controls"><input id="form-horizontal-text" class="uk-input" name="email"
                                        type="text" placeholder="Email Address" value="{{$employeeUser-> email}}"/></div>
                                    </div>
                                    <div class="uk-margin uk-width-1-2@s"><label class="uk-form-label"
                                        for="form-horizontal-text">Phone Number</label>
                                        <div class="uk-form-controls"><input id="form-horizontal-text" class="uk-input"
                                            name="phoneNumber" type="text" placeholder="Phone Number" value="{{$employeeUser-> phone}}"/></div>
                                        </div>
                                        <div class="uk-margin uk-width-1-2@s"><label class="uk-form-label"
                                            for="form-horizontal-text">Address</label>
                                            <div class="uk-form-controls"><input id="form-horizontal-text" class="uk-input"
                                                name="address" type="text" placeholder="Address" value="{{$employeeUser-> address}}"/></div>
                                            </div>
                                            <div class="uk-margin uk-width-1-2@s"><label class="uk-form-label"
                                                for="form-horizontal-text">City</label>
                                                <div class="uk-form-controls"><input id="form-horizontal-text" class="uk-input" name="city"
                                                    type="text" placeholder="City" value="{{$employeeUser-> city}}"/></div>
                                                </div>
                                                <div class="uk-margin uk-width-1-2@s"><label class="uk-form-label"
                                                    for="form-horizontal-text">State/Province Name</label>
                                                    <div class="uk-form-controls"><input id="form-horizontal-text" class="uk-input" name="state"
                                                        type="text" placeholder="State/Province" value="{{$employeeUser-> state}}"/></div>
                                                    </div>
                                                    <div class="uk-margin uk-width-1-2@s"><label class="uk-form-label"
                                                        for="form-horizontal-text">Country</label>
                                                        <div class="uk-form-controls"><input id="form-horizontal-text" class="uk-input"
                                                            name="country" type="text" placeholder="Country" value="United States"/></div>
                                                        </div>
                                                    </div>
                                                    <div data-id="page#6" class="uk-margin">
                                                        <div class="uk-flex-middle uk-grid-small uk-child-width-auto" uk-grid>

                                                           
                                                            
                                                            {{-- <a class="uk-button uk-button-default" type="submit">Administer Refund</a> --}}
                                                            <button class="el-content uk-button uk-button-secondary" name="choice" value="update" type="submit" 
                                                            onclick="return confirm('Are you sure?')">Update Emplyoee</button>

                                                            <button class="el-content uk-button uk-button-default" style="margin-left:50px;" name="choice"  value="delete" type="submit"
                                                            onclick="return confirm('Are you sure?')">Remove Employee</button>
                                                            {{-- <a class="uk-button uk-button-default" type="submit">Cancel Order</a> --}}
                                                        </form>


                                                    </div>

                                                </div>




                                            </div>
                                        </div>
                                    </div>



                                </div>





                            </div>


                            @endsection