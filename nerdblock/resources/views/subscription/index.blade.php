        @php
            $title = "Subscriptions";
        @endphp
@extends('layouts.master')
@section('content')

 <div class="uk-section-default uk-section">
            <div class="uk-container uk-container-large">
               <div class="uk-grid-margin" uk-grid>
                <div class="uk-width-1-1@m">
                    <h1> All Subscriptions </h1>
                    <div class="uk-margin">
                        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-match" uk-grid>
                         <div>
                            @foreach($customerSubscriptions as $customerSubscription)
                            @php
                            $block = DB::table('blocks')->select('*')->where('blockID', $customerSubscription->blockID)->get()
                            @endphp
                            <div class="el-item uk-card uk-card-primary uk-card-body">
                                <img class="el-image" alt
                                data-src="/images/{{$block[0]->blockTheme}}_1.png"
                                data-srcset="/images/{{$block[0]->blockTheme}}_1.png"
                                data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667" uk-img>
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> {{$block[0]->blockName}}</h3>
                                <div class="el-meta uk-h5 uk-margin-top uk-margin-remove-bottom">
                                    Order ID: {{$customerSubscription->customerSubID}} 
                                    &nbsp 
                                    Price: ${{$block[0]->blockPrice}}
                                </div>
                                <div class="uk-margin-top">
                                    <a href="/account/subscriptions/{{$customerSubscription->customerSubID}}" 
                                        class="el-link uk-button uk-button-default">View Order</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection