        @php
            $title = "Blocks";
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
                            <li class="el-item">

                                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">

                                    <img class="el-image" alt uk-img="target: !.uk-slideshow-items" uk-cover
                                        data-src="images\NerdBlock 15 items.png"
                                        data-srcset="images\NerdBlock 15 items.png"
                                        data-sizes="(max-aspect-ratio: 4000/2667) 150vh" 
                                        data-width="4000" data-height="2667">
                                         
                                </div>
                                <div class="uk-position-cover"
                                    uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>

                            </li>
                            <li class="el-item">

                                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">

                                    <img class="el-image" alt uk-img="target: !.uk-slideshow-items" uk-cover
                                        data-src="images\NerdBlock 15 items.png"
                                        data-srcset="images\NerdBlock 15 items.png"
                                        data-sizes="(max-aspect-ratio: 4000/2667) 150vh" 
                                        data-width="4000" data-height="2667">

                                </div>
                                <div class="uk-position-cover"
                                    uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>

                            </li>
                            <li class="el-item">

                                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">

                                    <img class="el-image" alt uk-img="target: !.uk-slideshow-items" uk-cover
                                        data-src="images\NerdBlock 15 items.png"
                                        data-srcset="images\NerdBlock 15 items.png"
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
                                    data-src="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL05lcmRibG9ja18xNV9pdGVtcy5wbmciLFtbImRvUmVzaXplIixbMTEyLDc1LDExMiw3NV1dLFsiZG9Dcm9wIixbMTAwLDc1LDYsMF1dXV0%3D&amp;hash=488d3414dd081118bca6edc8542d414a&amp;option=com_ajax&amp;style=9"
                                    data-srcset="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL05lcmRibG9ja18xNV9pdGVtcy5wbmciLFtbImRvUmVzaXplIixbMTEyLDc1LDExMiw3NV1dLFsiZG9Dcm9wIixbMTAwLDc1LDYsMF1dXV0%3D&amp;hash=488d3414dd081118bca6edc8542d414a&amp;option=com_ajax&amp;style=9 100w, /nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL05lcmRibG9ja18xNV9pdGVtcy5wbmciLFtbImRvUmVzaXplIixbMjI1LDE1MCwyMjUsMTUwXV0sWyJkb0Nyb3AiLFsyMDAsMTUwLDEyLDBdXV1d&amp;hash=daafc6eb75c856f576d2d09bb9ddf2ed&amp;option=com_ajax&amp;style=9 200w"
                                    data-sizes="(min-width: 100px) 100px" data-width="100" data-height="75" uk-img></a>
                        </li>
                        <li uk-slideshow-item="1">
                            <a href="#"><img alt
                                    data-src="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL05lcmRibG9ja18xNV9pdGVtcy5wbmciLFtbImRvUmVzaXplIixbMTEyLDc1LDExMiw3NV1dLFsiZG9Dcm9wIixbMTAwLDc1LDYsMF1dXV0%3D&amp;hash=488d3414dd081118bca6edc8542d414a&amp;option=com_ajax&amp;style=9"
                                    data-srcset="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL05lcmRibG9ja18xNV9pdGVtcy5wbmciLFtbImRvUmVzaXplIixbMTEyLDc1LDExMiw3NV1dLFsiZG9Dcm9wIixbMTAwLDc1LDYsMF1dXV0%3D&amp;hash=488d3414dd081118bca6edc8542d414a&amp;option=com_ajax&amp;style=9 100w, /nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL05lcmRibG9ja18xNV9pdGVtcy5wbmciLFtbImRvUmVzaXplIixbMjI1LDE1MCwyMjUsMTUwXV0sWyJkb0Nyb3AiLFsyMDAsMTUwLDEyLDBdXV1d&amp;hash=daafc6eb75c856f576d2d09bb9ddf2ed&amp;option=com_ajax&amp;style=9 200w"
                                    data-sizes="(min-width: 100px) 100px" data-width="100" data-height="75" uk-img></a>
                        </li>
                        <li uk-slideshow-item="2">
                            <a href="#"><img alt
                                    data-src="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL05lcmRibG9ja18xNV9pdGVtcy5wbmciLFtbImRvUmVzaXplIixbMTEyLDc1LDExMiw3NV1dLFsiZG9Dcm9wIixbMTAwLDc1LDYsMF1dXV0%3D&amp;hash=488d3414dd081118bca6edc8542d414a&amp;option=com_ajax&amp;style=9"
                                    data-srcset="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL05lcmRibG9ja18xNV9pdGVtcy5wbmciLFtbImRvUmVzaXplIixbMTEyLDc1LDExMiw3NV1dLFsiZG9Dcm9wIixbMTAwLDc1LDYsMF1dXV0%3D&amp;hash=488d3414dd081118bca6edc8542d414a&amp;option=com_ajax&amp;style=9 100w, /nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL05lcmRibG9ja18xNV9pdGVtcy5wbmciLFtbImRvUmVzaXplIixbMjI1LDE1MCwyMjUsMTUwXV0sWyJkb0Nyb3AiLFsyMDAsMTUwLDEyLDBdXV1d&amp;hash=daafc6eb75c856f576d2d09bb9ddf2ed&amp;option=com_ajax&amp;style=9 200w"
                                    data-sizes="(min-width: 100px) 100px" data-width="100" data-height="75" uk-img></a>
                        </li>
                    </ul>


                </div>




            </div>

            <div class="uk-grid-item-match uk-flex-middle uk-width-expand@m">
                <div class="uk-panel">
                    <h1 class="uk-text-center"> Nerdblock XV </h1>
                    <div class="uk-text-lead uk-margin-medium uk-width-large">
                        <p>Etiam ut rutrum eros. Phasellus tempus rutrum velit et fringilla. Duis sagittis in quam eu
                            vulputate. Nullam rutrum arcu vitae purus ornare suscipit. Quisque est eros, viverra at
                            elementum vel, iaculis in dui.</p>
                    </div>
                    <div class="uk-margin">
                        <a class="el-content uk-button uk-button-default">
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
                        <div>
                            <a class="el-item uk-inline-clip uk-transition-toggle uk-link-reset" tabindex="0"
                                uk-toggle="cls: uk-light uk-dark; mode: hover"
                                href="/nerdblock/index.php/product-detail">

                                <img class="el-image uk-transition-scale-up uk-transition-opaque" alt
                                    data-src="/images\NerdBlock 15 items.png"
                                    data-srcset="images\NerdBlock 15 items.png 768w,images\NerdBlock 15 items.png 1024w, images\NerdBlock 15 items.png 1366w, images\NerdBlock 15 items.png 1600w"
                                    data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667" uk-img>
                                <div class="uk-overlay-primary uk-transition-scale-up uk-position-cover"></div>
                                <div class="uk-position-bottom-center">
                                    <div class="uk-overlay uk-light uk-margin-remove-first-child">
                                        <h3 class="el-title uk-margin-top uk-margin-remove-bottom"> Another Box </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="el-item uk-inline-clip uk-transition-toggle uk-link-reset" tabindex="0"
                                uk-toggle="cls: uk-light uk-dark; mode: hover"
                                href="/nerdblock/index.php/product-detail">

                                <img class="el-image uk-transition-scale-up uk-transition-opaque" alt
                                    data-src="/images\NerdBlock 15 items.png"
                                    data-srcset="images\NerdBlock 15 items.png 768w,images\NerdBlock 15 items.png 1024w, images\NerdBlock 15 items.png 1366w, images\NerdBlock 15 items.png 1600w"
                                    data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667" uk-img>
                                <div class="uk-overlay-primary uk-transition-scale-up uk-position-cover"></div>
                                <div class="uk-position-bottom-center">
                                    <div class="uk-overlay uk-light uk-margin-remove-first-child">
                                        <h3 class="el-title uk-margin-top uk-margin-remove-bottom"> Another Box </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="el-item uk-inline-clip uk-transition-toggle uk-link-reset" tabindex="0"
                                uk-toggle="cls: uk-light uk-dark; mode: hover"
                                href="/nerdblock/index.php/product-detail">

                                <img class="el-image uk-transition-scale-up uk-transition-opaque" alt
                                    data-src="/images\NerdBlock 15 items.png"
                                    data-srcset="images\NerdBlock 15 items.png 768w,images\NerdBlock 15 items.png 1024w, images\NerdBlock 15 items.png 1366w, images\NerdBlock 15 items.png 1600w"
                                    data-sizes="(min-width: 4000px) 4000px" data-width="4000" data-height="2667" uk-img>
                                <div class="uk-overlay-primary uk-transition-scale-up uk-position-cover"></div>
                                <div class="uk-position-bottom-center">
                                    <div class="uk-overlay uk-light uk-margin-remove-first-child">
                                        <h3 class="el-title uk-margin-top uk-margin-remove-bottom"> Another Box </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                       
                    </div>

                </div>




            </div>
        </div>
    </div>



</div>





</div>


@endsection