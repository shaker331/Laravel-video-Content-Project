
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
        <!-- Title -->
    
        <!-- Favicon -->
        <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">
    
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <script id="dsq-count-scr" src="//video-web.disqus.com/count.js" async></script>
    </head>
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-sm-4">
                        <!-- Logo Area -->
                        <div class="logo-area">
                            <a href="{{route('welcome')}}"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8">
                        <!-- Top Add Area -->
                        <div class="top-add-area text-right">
                            <a href="{{route('welcome')}}"><img src="{{asset('img/bg-img/add.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="videomag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="videomagNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                                    <li><a href="video-post.html">Videos</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('welcome')}}">Home</a></li>
                                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                                            <li><a href="{{route('about')}}">About US</a></li>
                                            <li><a href="{{route('privacy')}}">Privacy</a></li>

                                        </ul>
                                    </li>
                                   @foreach ($cats as $cat)
                                       
                                   
                                    <li><a href="{{route('showCategory',['id'=>$cat->id,'slug'=>slug($cat->name)])}}">{{$cat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="{{route('search')}}" method="GET">
                                @csrf
                                <input class="input" name="search" placeholder="Enter your search...">
                            </form>

                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
