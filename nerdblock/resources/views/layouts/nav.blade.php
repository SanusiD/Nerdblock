
    <div class="tm-page">
        <div class="tm-header-mobile uk-hidden@m">
            <nav class="uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-toggle" href="#tm-mobile" uk-toggle>
                        <div uk-navbar-toggle-icon></div>
                    </a>
                </div>

                <div class="uk-navbar-center">
                    <a class="uk-navbar-item uk-logo" href="/">
                        <img alt="NerdBlock" data-src="images/NerdBlock-03.png"  
                                height="60" 
                                width="48" uk-img>
                </div>
            </nav>

            <div id="tm-mobile" uk-offcanvas mode="slide" overlay>
                <div class="uk-offcanvas-bar">
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <div class="uk-child-width-1-1" uk-grid>
                        <div>
                            <div class="uk-panel" id="module-0">
                                <ul class="uk-nav uk-nav-default">
                                    <li class="uk-active"><a href="/">Home</a></li>
                                    <li><a href="/shop">Store</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="/cart">Cart</a></li>
                                    <li><a href="/product">Product detail</a></li>
                                    <li><a href="/login">Product detail</a></li>
                                    <li><a href="/register">Product detail</a></li>
                                    <li class="uk-parent"><a href="#">Account</a>
                                        <ul class="uk-nav-sub">
                                            <li><a href="/account/personal-information.html">Personal
                                                    Information</a></li>
                                            <li><a href="/account/subscriptions.html">Subscriptions</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tm-header uk-visible@m" uk-header>
            <div class="uk-navbar-container">
                <div class="uk-container uk-container-expand">
                    <nav class="uk-navbar"
                        uk-navbar="{&quot;align&quot;:&quot;left&quot;,&quot;boundary&quot;:&quot;!.uk-navbar-container&quot;}">

                        <div class="uk-navbar-left">
                            <a href="/" class="uk-navbar-item uk-logo">
                                <img alt="NerdBlock" data-src="images/NerdBlock-03.png"  
                                height="60" 
                                width="48" uk-img>
                            </a>
                        </div>
                        <script>
                            var path = window.location.pathname.substring(1);
                             $('.uk-navbar-nav>li>a[href="' + path + '"]').parent().addClass('uk-active');
                        </script>
                        <div class="uk-navbar-center">
                            <ul class="uk-navbar-nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="/shop">Store</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/contact">Contact</a></li>
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="/cart"><span class="uk-margin-small-right" uk-icon="icon: cart; ratio: 1"></span>
                                    <span> {{Cart::count()}}</span></a></li>
                                @else
                                <li><a href="/cart"><span class="uk-margin-small-right" uk-icon="icon: cart; ratio: 1"></span>
                                    <span> {{Cart::count()}}</span></a></li>
                                    @if(Auth::user()->isEmployee == 1)
                                    @php
                                        $loginTime = \Carbon\Carbon::now();
                                    @endphp
                                    
                                        <li class="uk-parent"><a  href="/employee">Employee Panel</a>
                                            <div class="uk-navbar-dropdown">
                                                <div class="uk-navbar-dropdown-grid uk-child-width-1-1" uk-grid>
                                                    <div>
                                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                                            <li><a href="/view-orders">View Order</a></li>
                                                            <li><a href="/view-products">View Products</a></li>
                                                            <li><a href="/update-customer-profile">View Customer Information</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @php

                                        $employee = \App\Employee::find(Auth::user()->id);
                                    @endphp
                                    @if($employee != null)
                                        @if($employee->isAdmin == 1)
                                        <li class="uk-parent"><a  href="/admin">Admin Panel</a>
                                            <div class="uk-navbar-dropdown">
                                                <div class="uk-navbar-dropdown-grid uk-child-width-1-1" uk-grid>
                                                    <div>
                                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                                            <li><a href="/view-employees">View Employees</a></li>
                                                            <li><a href="/view-shipments">View Shipments</a></li>
                                                            <li><a href="/reports">View Reports</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @endif
                                    
                                <li class="uk-parent"><a href="#">{{ Auth::user()->firstName . ' ' . Auth::user()->lastName }}</a>                                     
                                    <div class="uk-navbar-dropdown">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-1" uk-grid>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    @if(Auth::user()->confirmed == 1)
                                                        <li>
                                                            <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                                Logout
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                {{ csrf_field() }}
                                                            </form>
                                                        </li>    
                                                        @else 
                                                            @if(Auth::user()->confirmed == 0)
                                                                <li><a href="/account/personal-information">Personal
                                                                Information</a></li>
                                                                <li><a href="/account/subscriptions">Subscriptions</a></li>
                                                                
                                                                <li>
                                                                    <a href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                                        Logout
                                                                    </a>

                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                                    </form>
                                                                </li>
                                                            @endif
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div id="system-message-container">
        </div>