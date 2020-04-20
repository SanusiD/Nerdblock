                @php
                $title = "Store - Blocks";
                @endphp
                @extends('layouts.master')
                @section('content')
                <div class="uk-section-default uk-section">
                    <div class="uk-container uk-container-large">
                        <div class="uk-grid-margin" uk-grid>
                            <div class="uk-width-1-1@m">
                                <h1> Best Sellers </h1>
                                <div uk-slider="finite: 1; velocity: 1.1; autoplay: 1;  autoplayInterval: 3000;"
                                class="uk-margin uk-text-center">
                                <div class="uk-position-relative">
                                    <div class="uk-slider-container">
                                        <ul class="uk-slider-items uk-grid uk-grid-medium uk-grid-match"
                                        uk-height-viewport="offset-top: true; minHeight: 450; offset-bottom: 20;">

                                        @php
                                        $bestSellingProducts = DB::table('customer_subscriptions')
                                        ->select(DB::raw('blockID, count(*) as Number_Of_Blocks'))
                                        ->groupBy('blockID')
                                        ->orderBy('Number_Of_Blocks')
                                        ->limit(5)
                                        ->get()

                                        @endphp
                                        @foreach ($bestSellingProducts as $products)
                                        @php
                                        $bestSellingProduct = DB::table('blocks')
                                        ->select(DB::raw('*'))
                                        ->where('blockID',$products->blockID)
                                        ->get()

                                        @endphp
                                        @foreach ($bestSellingProduct as $product)
                                        <li class="el-item uk-width-4-5 uk-width-1-3@m uk-width-3-5@l">
                                            <a class="uk-cover-container uk-transition-toggle uk-display-block uk-link-reset"
                                            tabindex="0" 
                                            href="/shop/{{$product-> blockID}}">

                                            <div class="uk-position-cover uk-transition-scale-up uk-transition-opaque">
                                                <img class="el-image" alt uk-img="target: !.uk-slider-items"
                                                uk-cover
                                                data-src="/images/{{$product -> blockTheme}}_1.png"
                                                data-srcset="/images/{{$product -> blockTheme}}_1.png"
                                                data-sizes="(max-aspect-ratio: 4000/2667) 150vh"
                                                data-width="4000" data-height="2667">
                                            </div>
                                            <div class="uk-position-cover"
                                            style="background-color:rgba(0, 0, 0, 0.38)"></div>
                                            <div class="uk-position-bottom-center">
                                                <div
                                                class="uk-panel uk-padding uk-light uk-margin-remove-first-child">

                                                <h3
                                                class="el-title uk-h1 uk-margin-top uk-margin-remove-bottom">
                                                {{$product->blockName}}</h3>
                                                <div
                                                class="el-meta uk-h2 uk-margin-top uk-margin-remove-bottom">
                                                {{$product->blockPrice}}</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                                @endforeach
                                
                            </ul>

                        </div>


                        <div class="uk-visible@s js-color-state"
                        uk-toggle="cls: js-color-state uk-light; mode: media; media: @xl"> <a
                        class="el-slidenav uk-slidenav-large uk-position-large uk-position-center-left-out"
                        href="#" uk-slidenav-previous uk-slider-item="previous"
                        uk-toggle="cls: uk-position-center-left-out uk-position-center-left; mode: media; media: @xl"></a>
                        <a class="el-slidenav uk-slidenav-large uk-position-large uk-position-center-right-out"
                        href="#" uk-slidenav-next uk-slider-item="next"
                        uk-toggle="cls: uk-position-center-right-out uk-position-center-right; mode: media; media: @xl"></a>
                    </div>

                </div>


            </div>




        </div>
    </div>
    <div class="uk-grid-margin" uk-grid>
        <div class="uk-width-1-1@m">
            <h1> All Products </h1>
            <div class="uk-margin">
                <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-match" uk-grid>
                    @foreach ($blocks as $block)

                    <div>
                        <a class="el-item uk-card uk-card-default uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-reset"
                        href="/shop/{{$block-> blockID}}">


                        <img class="el-image" alt                                     
                        data-src="/images/{{$block -> blockTheme}}_1.png"
                        data-srcset="/images/{{$block -> blockTheme}}_1.png"
                        data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                        uk-img>
                        <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom">
                            {{ $block -> blockName}} </h3>
                            <div class="el-meta uk-h5 uk-margin-top uk-margin-remove-bottom">${{ $block -> blockPrice}}</div>


                        </a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection