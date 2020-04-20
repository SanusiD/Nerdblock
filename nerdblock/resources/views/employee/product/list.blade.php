@php
$title = "Blocks";
@endphp
        @extends('layouts.master')
        @section('content')
        <div class="uk-section-default uk-section">
            <div class="uk-container uk-container-large">
                 <a href="/employee/" class="btn btn-default">Go Back</a>
                 <a href="/view-products/new" class="btn btn-default" style="float:right;">Create Product</a>
                <div class="uk-grid-margin" uk-grid>
                    <div class="uk-width-1-1@m">
                        <h1> All Products </h1>
                        <div class="uk-margin">
                            <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-match" uk-grid>
                                @foreach ($products as $product)

                                       <div>
                                    <a class="el-item uk-card uk-card-default uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-reset"
                                        href="#">

                                        <img class="el-image" alt
                                            data-src="/images/{{$product -> blockTheme}}_1.png"
                                            data-srcset="/images/{{$product -> blockTheme}}_1.png"
                                            data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667"
                                            uk-img>
                                         <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom">
                                            {{ $product -> blockName}} </h3>
                                        <div class="el-meta uk-h5 uk-margin-top uk-margin-remove-bottom">${{ $product -> blockPrice}}</div>
                                        <a class="uk-button uk-button-default" href="/edit/{{$product-> blockID}}">Edit Item</a>


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