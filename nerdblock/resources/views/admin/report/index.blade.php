        @php
        $title = "Reports";
        @endphp
        @extends('layouts.master')
        @section('content')

        <div class="uk-section-secondary uk-section" tm-header-transparent="light" tm-header-transparent-placeholder>
            <div class="uk-container">
               <a href="/admin/" class="btn btn-default">Go Back</a>
               <div class="uk-grid-margin" uk-grid>
                <div class="uk-width-1-1@m">
                    <div class="uk-margin">
                        <h1>Reports</h1>
                        <ul class="el-nav uk-margin" uk-tab="connect: #js-90c; animation: uk-animation-fade;">
                            <li>
                                <a href="#">Blocks Statistics</a>
                            </li>
                            <li>
                                <a href="#">Employee Statistics</a>
                            </li>
                            <li>
                                <a href="#">Subscriber Statistics</a>
                            </li>
                        </ul>
                        <ul id="js-90c" class="uk-switcher" uk-height-match="row: false">
                            <li class="el-item uk-margin-remove-first-child">
                                @php
                                $bestSellingProducts = DB::table('customer_subscriptions')
                                ->select(DB::raw('blockID, count(*) as Number_Of_Blocks'))
                                ->groupBy('blockID')
                                ->orderBy('Number_Of_Blocks', 'desc')
                                ->limit(10)
                                ->get()
                                @endphp
                                <h3 class="el-title uk-margin-top uk-margin-remove-bottom"> Highest Selling Blocks </h3>
                                <div class="el-meta uk-text-meta uk-margin-top">Most popular and highest sold Blocks. </div>
                                <div class="el-content uk-panel uk-text-lead uk-margin-top">
                                    <table class="uk-table uk-table-divider uk-table-hover uk-table-middle uk-text-uppercase">
                                        <thead>
                                            <tr>
                                                <th class="uk-text-nowrap">Block Name</th>
                                                <th class="uk-text-nowrap">Block Theme</th>
                                                <th class="uk-text-nowrap">Block Price</th>
                                                <th class="uk-text-nowrap">Block Launch Date</th>
                                                <th class="uk-text-nowrap">Subscription Sold</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bestSellingProducts as $products)
                                            @php
                                            $bestSellingProduct = DB::table('blocks')
                                            ->select(DB::raw('*'))
                                            ->where('blockID',$products->blockID)
                                            ->get()
                                            @endphp
                                            @foreach ($bestSellingProduct as $product)
                                            <tr class="el-item">
                                                <td class="uk-text-nowrap uk-table-shrink">
                                                    <div class="el-title">{{$product -> blockName}}</div>
                                                </td>

                                                <td class="uk-text-nowrap uk-table-shrink">
                                                    <div class="el-title">{{$product -> blockTheme}}</div>
                                                </td>
                                                <td class="uk-text-nowrap uk-table-shrink">
                                                    <div class="el-title">${{$product -> blockPrice}}</div>
                                                </td>
                                                <td class="uk-text-nowrap uk-table-shrink">
                                                    <div class="el-title">{{ \Carbon\Carbon::parse($product->blockLaunchDate)->format('d/m/Y')}}</div>
                                                </td>
                                                <td>
                                                    @php
                                                    $quantity = \App\CustomerSubscription::select(DB::raw('blockID, count(*) as Number_Of_Blocks'))
                                                    ->where('blockID', '=', $product->blockID)
                                                    ->groupBy('blockID')
                                                    ->orderBy('Number_Of_Blocks', 'desc')
                                                    ->get()
                                                    ->first();
                                                    @endphp
                                                    <div class="el-content uk-panel">
                                                        <p>{{ $quantity['Number_Of_Blocks'] }}</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endforeach                            
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li class="el-item uk-margin-remove-first-child">
                                @php
                                $employees = DB::table('employees')
                                ->select(DB::raw('*'))
                                ->get()
                                @endphp
                                <h3 class="el-title uk-margin-top uk-margin-remove-bottom"> Employee Report </h3>
                                <div class="el-meta uk-text-meta uk-margin-top">Employee Information</div>
                                <div class="el-content uk-panel uk-text-lead uk-margin-top">
                                    <table class="uk-table uk-table-divider uk-table-hover uk-table-middle uk-text-uppercase">
                                        <thead>
                                            <tr>
                                                <th class="uk-text-nowrap">First Name</th>
                                                <th class="uk-text-nowrap">Last Theme</th>
                                                <th class="uk-text-nowrap">Job Title</th>
                                                <th class="uk-text-nowrap">Monthly Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employees as $employee)
                                            @php
                                            $job = \App\Jobs::select(DB::raw('jobTitle, jobSalary'))
                                            ->where('jobID', '=', $employee->jobID)
                                            ->get()
                                            ->first();
                                            @endphp


                                            @php
                                            $users = DB::table('users')
                                            ->select(DB::raw('*'))
                                            ->where('id',$employee->employeeID)
                                            ->where('isEmployee', '1')
                                            ->get()
                                            @endphp

                                            @foreach ($users as $user)
                                            <tr class="el-item">
                                                <td class="uk-text-nowrap uk-table-shrink">
                                                    <div class="el-title">{{$user -> firstName}}</div>
                                                </td>

                                                <td class="uk-text-nowrap uk-table-shrink">
                                                    <div class="el-title">{{$user -> lastName}}</div>
                                                </td>
                                                <td class="uk-text-nowrap uk-table-shrink">
                                                    <div class="el-title">{{$job-> jobTitle}}</div>
                                                </td>
                                                <td>
                                                    <div class="el-content uk-panel">
                                                        <p>${{ $job->jobSalary/100 }}.00</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endforeach                            
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li class="el-item uk-margin-remove-first-child">
                             @php
                             $mostActiveCustomers = DB::table('customer_subscriptions')
                             ->select(DB::raw('id, count(*) as mostActiveUserCount'))
                             ->groupBy('id')
                             ->orderBy('mostActiveUserCount', 'desc')
                             ->limit(10)
                             ->get()
                             @endphp
                             <h3 class="el-title uk-margin-top uk-margin-remove-bottom"> Longest Active Subscribers </h3>
                             <div class="el-meta uk-text-meta uk-margin-top">Most loyal and longest active customers.</div>
                             <div class="el-content uk-panel uk-text-lead uk-margin-top">
                                <table class="uk-table uk-table-divider uk-table-hover uk-table-middle uk-text-uppercase">
                                    <thead>
                                        <tr>
                                            <th class="uk-text-nowrap">Customer First Name</th>
                                            <th class="uk-text-nowrap">Customer Last Name</th>
                                            <th class="uk-text-nowrap">Registered Since</th>
                                            <th class="uk-text-nowrap">Number of Subscription Bought</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mostActiveCustomers as $customer)
                                        @php
                                        $customers = DB::table('users')
                                        ->select(DB::raw('*'))
                                        ->where('id',$customer->id)
                                        ->orderBy('created_at', 'desc')
                                        ->get()
                                        @endphp
                                        @foreach ($customers as $activeCustomer)                                       
                                        <tr class="el-item">
                                            <td class="uk-text-nowrap uk-table-shrink">
                                                <div class="el-title">{{$activeCustomer -> firstName}}</div>
                                            </td>
                                            <td class="uk-text-nowrap uk-table-shrink">
                                                <div class="el-title">{{$activeCustomer -> lastName}}</div>
                                            </td>
                                            <td class="uk-text-nowrap uk-table-shrink">
                                                <div class="el-title">{{ \Carbon\Carbon::parse($activeCustomer->created_at)->format('d/m/Y')}}</div>
                                            </td>
                                            <td>
                                                @php
                                                $quantity = \App\CustomerSubscription::select(DB::raw('id, count(*) as mostActiveUserCount'))
                                                ->where('id', '=', $activeCustomer->id)
                                                ->groupBy('id')
                                                ->orderBy('mostActiveUserCount', 'desc')
                                                ->get()
                                                ->first();
                                                @endphp
                                                <div class="el-content uk-panel">
                                                    <p>{{ $quantity['mostActiveUserCount'] }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endforeach                           
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection