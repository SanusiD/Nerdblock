        @php
        $title = "Store";
        @endphp
        @extends('layouts.master')
        @section('content')

        <div class="uk-section-default uk-section">
            <div class="uk-container">
                <div class="uk-grid-margin" uk-grid>
                    <div class="uk-width-expand@m">
                        <div uk-slideshow="ratio: false; animation: push;" class="uk-margin">
                            <div class="uk-position-relative">
                                <ul class="uk-slideshow-items"
                                uk-height-viewport="offset-top: true; minHeight: 300; offset-bottom: 20;">
                                <li>
                                    <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                                        <img class="el-image" alt uk-img="target: !.uk-slideshow-items" uk-cover
                                        data-src="/images/{{$block -> blockTheme}}_1.png"
                                        data-srcset="/images/{{$block -> blockTheme}}_1.png"
                                        data-sizes="(max-aspect-ratio: 4000/2667) 150vh" 
                                        data-width="4000" data-height="2667">
                                    </div>
                                    <div class="uk-position-cover"
                                    uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
                                </li>
                                <li class="el-item">
                                    <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                                        <img class="el-image" alt uk-img="target: !.uk-slideshow-items" uk-cover
                                        data-src="/images/{{$block -> blockTheme}}_2.png"
                                        data-srcset="/images/{{$block -> blockTheme}}_2.png">
                                    </div>
                                    <div class="uk-position-cover"
                                    uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
                                </li>
                                <li class="el-item">
                                    <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                                        <img class="el-image" alt uk-img="target: !.uk-slideshow-items" uk-cover
                                        data-src="/images/{{$block -> blockTheme}}_3.png"
                                        data-srcset="/images/{{$block -> blockTheme}}_3.png"
                                        data-sizes="(max-aspect-ratio: 4000/2667) 150vh" 
                                        data-width="4000" data-height="2667">
                                    </div>
                                    <div class="uk-position-cover"
                                    uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
                                </li>
                            </ul>
                        </div>



                        <ul class="el-nav uk-thumbnav uk-flex-center uk-margin-top uk-visible@s" uk-margin>
                            <li uk-slideshow-item="0">
                                <a href="#"><img alt
                                    data-src="/images/{{$block -> blockTheme}}_1.png"
                                    data-srcset="/images/{{$block -> blockTheme}}_1.png"
                                    data-sizes="(min-width: 100px) 100px" width="100" height="75" uk-img></a>
                                </li>

                                <li uk-slideshow-item="1">
                                    <a href="#"><img alt
                                        data-src="/images/{{$block -> blockTheme}}_2.png"
                                        data-srcset="/images/{{$block -> blockTheme}}_2.png"
                                        data-sizes="(max-aspect-ratio: 100/75)"
                                        data-sizes="(min-width: 100px) 100px" width="100" height="75" uk-img></a>
                                    </li>

                                    <li uk-slideshow-item="2">
                                        <a href="#"><img alt
                                            data-src="/images/{{$block -> blockTheme}}_3.png"
                                            data-srcset="/images/{{$block -> blockTheme}}_3.png"
                                            data-sizes="(min-width: 100px) 100px" width="100" height="75" uk-img></a>
                                        </li>
                                    </ul>


                                </div>




                            </div>

                            <div class="uk-grid-item-match uk-flex-middle uk-width-expand@m">
                                <div class="uk-panel">
                                    <h1 class="uk-text-left"> {{$block -> blockName}} &nbsp;-&nbsp; ${{$block -> blockPrice}} </h1>
                                    <div class="uk-text-lead uk-margin-medium uk-width-large">
                                        <p>{{$block -> blockDescription}}.</p>
                                    </div>
                                    <div class="uk-margin">
                                        <a href= "/cart/{{$block->blockID}}" class="el-content uk-button uk-button-default">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-section-default uk-section">
                    <div class="uk-container">
                        <div class="uk-grid-margin" uk-grid>
                            <div class="uk-width-2-3@m">
                                <h1> Related Products </h1>
                            </div>

                            <div class="uk-width-expand@m">
                            </div>

                        </div>
                        <div class="uk-grid-margin" uk-grid>
                            <div class="uk-width-1-1@m">
                                <div class="uk-margin uk-text-center">
                                    <div class="uk-child-width-1-1 uk-child-width-1-3@m" uk-grid>
                                        @php
                                        $blocks = DB::table('blocks')
                                        ->select('*')
                                        ->where('blockTheme', $block->blockTheme)
                                        ->limit(3)
                                        ->get()

                                        @endphp
                                        @foreach ($blocks as $relatedBlock)
                                        @if($relatedBlock->blockID != $block->blockID)
                                        <div>
                                            <a class="el-item uk-inline-clip uk-transition-toggle uk-link-reset" tabindex="0"
                                            uk-toggle="cls: uk-light uk-dark; mode: hover" href="/shop/{{$relatedBlock-> blockID}}">


                                            <img class="el-image uk-transition-scale-up uk-transition-opaque" alt
                                            data-src="/images/{{$relatedBlock -> blockTheme}}_1.png"
                                            data-srcset="/images/{{$relatedBlock -> blockTheme}}_1.png"
                                            data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667" uk-img>
                                            <div class="uk-overlay-primary uk-transition-scale-up uk-position-cover"></div>
                                            <div class="uk-position-bottom-center">
                                                <div class="uk-overlay uk-light uk-margin-remove-first-child">
                                                    <h3 class="el-title uk-margin-top uk-margin-remove-bottom"> {{$relatedBlock->blockName}}</h3>
                                                    <h5 class="el-title uk-margin-top uk-margin-remove-bottom"> {{$relatedBlock->blockPrice}}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach      
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>





        </div>


        @endsection