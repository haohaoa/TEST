<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield( 'title' )</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('ruiz/assets/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/vendor/simple-line-icons.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/plugins/fancy-box.css')}}">
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/plugins/jqueryui.min.css')}}">
    <link rel="stylesheet" href="{{asset('ruiz/assets/css/style.css')}}">
  

</head>

<body>
    <div id="loading-spinner" class="show"></div>
    <div class="main-wrapper">
         <header class="header">

            <div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-5">
                            <div class="logo-area">
                                <a href="{{Route('home')}}"><h1  style="color: #ffff" >CLOCK</h1></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search-box-wrapper">
                                <div class="search-box-inner-wrap">
                                    <form class="search-box-inner" method="get" action="{{route('search')}}"  >
                                        @csrf
                                        <div class="search-field-wrap">
                                            <input type="text" required class="search-field"name='search' placeholder="Search product...">

                                            <div class="search-btn">
                                                <button><i class="icon-magnifier"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right-blok-box text-white d-flex">
                                @php 
                                $total = session('dem');
                                @endphp 
                                <div class="shopping-cart-wrap">
                                    @if(Auth::check())
                                        @if(session('dem'))
                                            <a href="{{route('cart',['id' => Auth::id()])}}"><i class="icon-basket-loaded"></i> <span class="cart-total"> {{session('dem')}} </span></a>
                                        @else
                                                <a href="{{route('cart',['id' => Auth::id()])}}"><i class="icon-basket-loaded"></i></a>
                                        @endif
                                    @else
                                    <a href="{{route('login')}}"><i class="icon-basket-loaded"></i></a>
                                    @endif   
                                    @php
                                        $cart = session('cart');
                                    @endphp
                                    <ul class="mini-cart">
                                        @if(Auth::check())
                                            @foreach ($cart as $gh)
                                                <li class="cart-item">
                                                    <div class="cart-image">
                                                        <a href="#"><img alt="" src="{{ asset('ruiz/assets/images/product/' . $gh->link) }}"></a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="product-details.html">
                                                            <h4>{{$gh->name}}</h4>
                                                        </a>
                                                        <div class="quanti-price-wrap">
                                                            <span class="quantity">{{$gh->quantity}}</span>
                                                            <div class="price-box"><span class="new-price">{{number_format($gh->money)}} vnd</span></div>
                                                        </div>
                                                        <a class="remove_from_cart" href="{{route('deletecart',['id' => $gh->id])}}"><i class="icon_close"></i></a>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @if($cart->count() > 0)
                                                <li class="mini-cart-btns">
                                                    <div class="cart-btns">
                                                        <a href="{{route('cart',['id'=>auth::id()])}}">View cart</a>
                                                    </div>
                                                </li>  
                                            @else 
                                                <li class="cart-item">
                                                    <h4>No Product</h4>
                                                </li>
                                            @endif
                                        @else
                                        <li class="cart-item">
                                            <h4>Login To View Your Cart!</h4>
                                        </li>
                                        @endif
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
          
            <!-- haeader bottom Start -->
            <div class="haeader-bottom-area bg-gren header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 d-none d-lg-block">
                            <div class="main-menu-area white_text">
                                <!--  Start Mainmenu Nav-->
                                <script>
                                    function confirmDelete() {
                                        // Sử dụng hộp thoại xác nhận để hiển thị thông báo
                                        var result = confirm("Do you want to log out?");
                                        // Trả về kết quả (true nếu người dùng chọn OK, false nếu chọn Cancel)
                                        return result;
                                    }
                                </script>
                                <nav class="main-navigation text-center">
                                    <ul>
                                        <li> @if(Auth::check())
                                            @if(session()->has('user'))
                                                <a href="{{ route('logout') }}" class="active" onclick="return confirmDelete()" style="margin-left:10px; color:#ffff" > Welcome, {{ session('user')->name }}!    Log out</a>
                                            @else
                                                <div class="alert alert-warning" role="alert">
                                                    Please log in
                                                </div>
                                            @endif
                                            @else
                                            <a href="{{ route('login') }}"  class="active" style="margin-left:10px; color:#ffff" onclick="confirmLogout()">Login</a>
        
                                             @endif
                                        </li>
                                        <li class="active"><a href="{{route('home')}}">Home</a> </li>
                                        <li><a href="{{route('shop')}}">Shop</a> </li>
                                        <li><a href="{{route('index_contact')}}">Contact</a></li>
                                        @if(auth::check())
                                        <li><a href="{{route('history',['id'=> auth::user()->id])}}">history </a></li>
                                        @else
                                        <li><a href="{{route('login')}}">history </a></li>
                                        @endif
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>

                        <div class="col-5 col-md-6 d-block d-lg-none">
                            <div class="logo"><a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a></div>
                        </div>
                        
                        
                        <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                            <div class="right-blok-box text-white d-flex">
                                <div class="shopping-cart-wrap">
                                    @if(Auth::check())
                                         @if(session('dem'))
                                            <a href="{{route('cart',['id' => Auth::id()])}}"><i class="icon-basket-loaded"></i> <span class="cart-total"> {{session('dem')}} </span></a>
                                        @else
                                             <a href="{{route('cart',['id' => Auth::id()])}}"><i class="icon-basket-loaded"></i></a>
                                        @endif
                                    @else
                                    <a href="{{route('login')}}"><i class="icon-basket-loaded"></i></a>
                                    @endif                                   
                                </div>

                                <div class="mobile-menu-btn d-block d-lg-none">
                                    <div class="off-canvas-btn">
                                        <a href="#"><img src="{{asset('ruiz/assets/images/icon/bg-menu.png')}}" alt=""></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- haeader bottom End -->
            
            <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>

                    <div class="off-canvas-inner">

                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="icon-magnifier"></i></button>
                            </form>
                        </div>

                        <!-- mobile menu start -->
                        <div class="mobile-navigation">

                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="menu-item-has-children"><a href="{{route('shop')}}">Shop</a>
                                    </li>
                                    <li><a href="{{route('index_contact')}}">Contact</a></li>
                                    <li class="menu-item-has-children" > 
                                        @if(Auth::check())
                                        @if(session()->has('user'))     
                                            <a href="{{ route('logout') }}" class="active" style=" color:#000000" > Welcome, {{ session('user')->name }}!    Log out</a>
                                        @else
                                            <div class="alert alert-warning" role="alert">
                                                Please log in
                                            </div>
                                        @endif
                                        @else
                                        <a href="{{ route('login') }}"  class="active" style="color:#000000" onclick="confirmLogout()">Login</a>
    
                                         @endif
                                    </li>
                                    
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->

                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
            
        </header>
        <!--  Header Start -->

        @yield('main-content')
        <!-- footer Start -->
        <footer>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="copy-left-text">
                                <p>Copyright &copy; <a href="#">ruiz</a> 2024. All Right Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="copy-right-image">
                                <img src="{{asset('ruiz/assets/images/icon/img-payment.png')}}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer End -->
    </div>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{asset('ruiz/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>

    <!-- jquery -->		
    <script src="{{asset('ruiz/assets/js/vendor/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('ruiz/assets/js/vendor/jquery-migrate-3.4.0.min.js')}}"></script>		

    <!-- Bootstrap JS -->
    <script src="{{asset('ruiz/assets/js/vendor/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('ruiz/assets/js/plugins/slick.min.js')}}"></script>
    <script src="{{asset('ruiz/assets/js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('ruiz/assets/js/plugins/countdown.min.js')}}"></script>
    <script src="{{asset('ruiz/assets/js/plugins/image-zoom.min.js')}}"></script>
    <script src="{{asset('ruiz/assets/js/plugins/fancybox.js')}}"></script>
    <script src="{{asset('ruiz/assets/js/plugins/scrollup.min.js')}}"></script>
    <script src="{{asset('ruiz/assets/js/plugins/jqueryui.min.js')}}"></script> 
    <script src="{{asset('ruiz/assets/js/plugins/ajax-contact.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('ruiz/assets/js/main.js')}}"></script>

</body>
</html>