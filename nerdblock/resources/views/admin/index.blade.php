        @php
        $title = "Admin Panel";
        @endphp
        @extends('layouts.master')
        @section('content')


        <div class="uk-section-default uk-section uk-section-small">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-margin" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div uk-slider data-id="page#4" class="uk-margin-small uk-text-center">
                            <div class="uk-position-relative">
                                <ul class="uk-slider-items uk-grid uk-grid-large uk-grid-match"
                                uk-height-viewport="offset-top: true; minHeight: 300;">
                                <li class="el-item uk-width-1-1 uk-width-1-3@m">
                                    <a class="uk-cover-container uk-display-block uk-link-reset"
                                    href="/view-employees">

                                    <img class="el-image" alt uk-img="target: !.uk-slider-items" uk-cover
                                    data-src="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFszOTIwLDQ5MDAsMzkyMCw0OTAwXV1dXQ%3D%3D&amp;hash=e2c2aa12379806a7c9595265c999bcba&amp;option=com_ajax&amp;style=9"
                                    data-srcset="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFs3NjgsOTYwLDc2OCw5NjBdXSxbImRvQ3JvcCIsWzc2OCw5NjAsMCwwXV1dXQ%3D%3D&amp;hash=cb278cd2226aa5ee9578824f4ba8a96c&amp;option=com_ajax&amp;style=9 768w, /nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFsxMDI0LDEyODAsMTAyNCwxMjgwXV0sWyJkb0Nyb3AiLFsxMDI0LDEyODAsMCwwXV1dXQ%3D%3D&amp;hash=346ed779b804aa55a42dbb61dfa36641&amp;option=com_ajax&amp;style=9 1024w, /nerdblock/templates/yootheme/cache/kyle-nieber-siMO8TWzLYM-unsplash-e79296ae.jpeg 1366w, /nerdblock/templates/yootheme/cache/kyle-nieber-siMO8TWzLYM-unsplash-abe87c5d.jpeg 1600w, /nerdblock/templates/yootheme/cache/kyle-nieber-siMO8TWzLYM-unsplash-2c6f9769.jpeg 1920w, /nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFszOTIwLDQ5MDAsMzkyMCw0OTAwXV1dXQ%3D%3D&amp;hash=e2c2aa12379806a7c9595265c999bcba&amp;option=com_ajax&amp;style=9 3920w"
                                    data-sizes="(max-aspect-ratio: 3920/4900) 80vh" data-width="3920"
                                    data-height="4900">

                                    <div class="uk-position-cover" style="background-color:rgba(0, 0, 0, 0.71)"></div>
                                    <div class="uk-position-center">
                                        <div class="uk-panel uk-padding uk-margin-remove-first-child">
                                            <h3
                                            class="el-title uk-heading-primary uk-text-warning uk-margin-top uk-margin-remove-bottom">
                                        View Employees </h3>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="el-item uk-width-1-1 uk-width-1-3@m">
                            <a class="uk-cover-container uk-display-block uk-link-reset"
                            href="/view-shipments">

                            <img class="el-image" alt uk-img="target: !.uk-slider-items" uk-cover
                            data-src="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFszOTIwLDQ5MDAsMzkyMCw0OTAwXV1dXQ%3D%3D&amp;hash=e2c2aa12379806a7c9595265c999bcba&amp;option=com_ajax&amp;style=9"
                            data-srcset="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFs3NjgsOTYwLDc2OCw5NjBdXSxbImRvQ3JvcCIsWzc2OCw5NjAsMCwwXV1dXQ%3D%3D&amp;hash=cb278cd2226aa5ee9578824f4ba8a96c&amp;option=com_ajax&amp;style=9 768w, /nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFsxMDI0LDEyODAsMTAyNCwxMjgwXV0sWyJkb0Nyb3AiLFsxMDI0LDEyODAsMCwwXV1dXQ%3D%3D&amp;hash=346ed779b804aa55a42dbb61dfa36641&amp;option=com_ajax&amp;style=9 1024w, /nerdblock/templates/yootheme/cache/kyle-nieber-siMO8TWzLYM-unsplash-e79296ae.jpeg 1366w, /nerdblock/templates/yootheme/cache/kyle-nieber-siMO8TWzLYM-unsplash-abe87c5d.jpeg 1600w, /nerdblock/templates/yootheme/cache/kyle-nieber-siMO8TWzLYM-unsplash-2c6f9769.jpeg 1920w, /nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFszOTIwLDQ5MDAsMzkyMCw0OTAwXV1dXQ%3D%3D&amp;hash=e2c2aa12379806a7c9595265c999bcba&amp;option=com_ajax&amp;style=9 3920w"
                            data-sizes="(max-aspect-ratio: 3920/4900) 80vh" data-width="3920"
                            data-height="4900">

                            <div class="uk-position-cover" style="background-color:rgba(0, 0, 0, 0.71)"></div>
                            <div class="uk-position-center">
                                <div class="uk-panel uk-padding uk-margin-remove-first-child">
                                    <h3
                                    class="el-title uk-heading-primary uk-text-warning uk-margin-top uk-margin-remove-bottom">
                                View Shipments </h3>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="el-item uk-width-1-1 uk-width-1-3@m">
                    <a class="uk-cover-container uk-display-block uk-link-reset"
                    href="/reports">

                    <img class="el-image" alt uk-img="target: !.uk-slider-items" uk-cover
                    data-src="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFszOTIwLDQ5MDAsMzkyMCw0OTAwXV1dXQ%3D%3D&amp;hash=e2c2aa12379806a7c9595265c999bcba&amp;option=com_ajax&amp;style=9"
                    data-srcset="/nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFs3NjgsOTYwLDc2OCw5NjBdXSxbImRvQ3JvcCIsWzc2OCw5NjAsMCwwXV1dXQ%3D%3D&amp;hash=cb278cd2226aa5ee9578824f4ba8a96c&amp;option=com_ajax&amp;style=9 768w, /nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFsxMDI0LDEyODAsMTAyNCwxMjgwXV0sWyJkb0Nyb3AiLFsxMDI0LDEyODAsMCwwXV1dXQ%3D%3D&amp;hash=346ed779b804aa55a42dbb61dfa36641&amp;option=com_ajax&amp;style=9 1024w, /nerdblock/templates/yootheme/cache/kyle-nieber-siMO8TWzLYM-unsplash-e79296ae.jpeg 1366w, /nerdblock/templates/yootheme/cache/kyle-nieber-siMO8TWzLYM-unsplash-abe87c5d.jpeg 1600w, /nerdblock/templates/yootheme/cache/kyle-nieber-siMO8TWzLYM-unsplash-2c6f9769.jpeg 1920w, /nerdblock/index.php?p=theme%2Fimage&amp;src=WyJpbWFnZXNcL2t5bGUtbmllYmVyLXNpTU84VFd6TFlNLXVuc3BsYXNoLmpwZyIsW1siZG9SZXNpemUiLFszOTIwLDQ5MDAsMzkyMCw0OTAw
                    XV1dXQ%3D%3D&amp;hash=e2c2aa12379806a7c9595265c999bcba&amp;option=com_ajax&amp;style=9 3920w"
                    data-sizes="(max-aspect-ratio: 3920/4900) 80vh" data-width="3920"
                    data-height="4900">

                    <div class="uk-position-cover" style="background-color:rgba(0, 0, 0, 0.71)"></div>

                    <div class="uk-position-center">
                        <div class="uk-panel uk-padding uk-margin-remove-first-child">

                            <h3
                            class="el-title uk-heading-primary uk-text-warning uk-margin-top uk-margin-remove-bottom">
                        View Reports </h3>
                    </div>
                </div>

            </a></li>
        </ul>
        <div class="uk-visible@s"> <a class="el-slidenav uk-position-medium uk-position-center-left"
            href="#" uk-slidenav-previous uk-slider-item="previous"></a> <a
            class="el-slidenav uk-position-medium uk-position-center-right" href="#"
            uk-slidenav-next uk-slider-item="next"></a></div>
        </div>
        <ul class="el-nav uk-slider-nav uk-dotnav uk-flex-center uk-margin-top uk-visible@s" uk-margin></ul>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection