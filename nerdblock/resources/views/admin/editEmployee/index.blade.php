        @php
        $title = "View Employees";
        @endphp
        @extends('layouts.master')
        @section('content')
        <div class="uk-section-default uk-section">
           <div class="uk-container">
               <a href="/admin/" class="btn btn-default">Go Back</a>
                <a href="/create-employee/new" class="btn btn-default" style="float:right;">Create Employee</a>
               <div class="uk-grid-margin" uk-grid>
                <div class="uk-width-1-1@m">
                    <h1 data-id="page#4"> <span style="text-decoration: underline;">Employees</span> </h1>
                    <div class="uk-overflow-auto" data-id="page#5">
                        <table class="uk-table uk-table-divider uk-table-hover uk-table-middle">
                            <thead>
                                <tr>

                                    <th class="uk-text-nowrap">Employee ID</th>
                                    <th class="uk-text-nowrap">Name</th>
                                    <th class="uk-text-nowrap">Job Title</th>
                                    <th class="uk-text-nowrap">More Information</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($employees as $employee)
                                @php
                                $employeeUser = \App\User::where('id', '=', $employee-> employeeID)->where('isEmployee', '=', '1')->get()->first();
                                @endphp
                                @if($employeeUser['isEmployee'] == "1")
                                <tr class="el-item">
                                    <td class="uk-text-nowrap uk-table-shrink">
                                        <div class="el-meta uk-h6 uk-margin-remove">{{ $employeeUser['id']}}</div>
                                    </td>
                                    
                                    <td class="uk-text-nowrap uk-table-shrink">
                                        <div class="el-title">{{ $employeeUser['firstName'] . ' ' . $employeeUser['lastName']}}</div>
                                    </td>
                                    <td>
                                        <div class="el-content uk-panel">
                                            @php
                                            $job = DB::table('jobs')
                                            ->select('jobTitle')
                                            ->where('jobID', $employee-> jobID)
                                            ->get()
                                            ->first()
                                            @endphp
                                            <p>{{$job-> jobTitle}}</p>
                                        </div>
                                    </td>
                                    <td class="uk-text-nowrap uk-table-shrink"><a
                                        class="el-link uk-button uk-button-default uk-width-1-1"
                                        href="/view-employees/{{$employee->employeeID}}">View / Edit</a>
                                    </td>
                                </tr>
                                @endif
                                @endforeach                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection