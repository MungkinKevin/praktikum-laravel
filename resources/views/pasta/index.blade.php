<html>
    <head>
        <title>@yield('title', 'Pasta')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="../js/jquery.js"></script> 
	    <script src="../js/jquery.glide.js"></script>
    
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <script type="text/javascript" src="{{ asset('js/MyJQ.js') }}"></script>
        <script src="{{ asset('js/jquery.localScroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.scrollTo.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script> 
    </head>
    <body>
        <div class="headerwrapper">
	        <div id="header" class="container">
                <div class="logo"> <a href="#"><img src="{{ asset('images/LOGO.png') }}" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
                    <nav>
                        <ul id="navigations">
                            <li><a href="http://127.0.0.1:8000/pasta">HOME</a></li>
                            <li> <a href="http://127.0.0.1:8000/pasta/about">ABOUT</a></li>
                            <li><a href="http://127.0.0.1:8000/pasta/article/1">ARTICLE</a></li>
                            <li><a href="http://127.0.0.1:8000/pasta/contact">CONTACT</a></li>
                        </ul>
                    </nav>
                </div> <!--end of header-->
            </div> <!-- end of headerwrapper-->
            <div class="sliderwrapper">
                <div id="slider" class="container">
                <div class="slider">
                    <ul class="slides">
                        <li class="slide">
                            @yield('content') 
                        </li>
                    </ul>
                </div>
            </div> <!-- End of Slider-->
        </div> <!-- end of sliderwrapper-->
        <div class="copyrightswrapper">
            <div id="copyrights" class="container">
            <p>Nothing here</p>
            </div> <!-- end of copyrights-->
        </div> <!-- end of website-->
    </body>
</html>