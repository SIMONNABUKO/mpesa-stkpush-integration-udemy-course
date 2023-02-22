<header>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <ul class="topleft-info">
                        <li><i class="fa fa-phone"></i> +254726582228</li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                        <ul class="topleft-info">
                                
                        </ul>
                    </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div id="sb-search" class="sb-search">
                        <form>
                            <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search" title="Click to start searching"></span>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}" alt="" width="150" height="52" /></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a href="/" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Home </a>
                        {{-- <ul class="dropdown-menu">
                            <li><a href="index.html">Home slider 1</a></li>
                            <li><a href="index2.html">Home slider 2</a></li>

                        </ul> --}}

                    </li>
                    {{-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features </a>
                        <ul class="dropdown-menu">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="pricing-box.html">Pricing box</a></li>
  
                        </ul>
                    </li> --}}
                    <li><a href="/admin/product/index">Products</a></li>
                <li><a href="{{url('cart/index')}}">Shopping Cart <i class=" shop fa fa-shopping-cart"><span style="background-color:#eee; color:red" class="badge background-light">{{Cart::count()}}</span></i></a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">User Management</a>
                        <ul class="dropdown-menu">
                                @if (Route::has('login'))
                
                                @auth
                                 <li><a href="{{ url('/') }}">Home</a></li>
                                 <li><a href="{{ url('/') }}">My Profile</a></li>
                                <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
            
                                        <form id="logout-form" action="{{ route('logout') }}" 
                                        method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    
                                </li>
                                @else
                                   <li><a href="{{ route('login') }}">Login</a></li>
            
                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                            
                        @endif
                            
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</header>



