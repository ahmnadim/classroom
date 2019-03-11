<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Learn IT Education</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- start: CSS -->
        <link rel="stylesheet" href="{{asset('frontend/vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/vendors/popup/magnific-popup.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	@include('layouts.frontend.partials.top_header')
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        @yield('slider')
        <!--================End Home Banner Area =================-->
        @yield('content')
        <!--================Finance Area =================-->
        @yield('finance')
        <!--================End Finance Area =================-->
        
        <!--================Courses Area =================-->
        @yield('courses')
        <!--================End Courses Area =================-->
        
        <!--================Team Area =================-->
        @yield('team')
        <!--================End Team Area =================-->
        
        <!--================Testimonials Area =================-->
        @yield('testimoni')
        <!--================End Testimonials Area =================-->
        
        <!--================Pagkages Area =================-->
       @yield('pakages')
        <!--================End Pagkages Area =================-->
        
        <!--================Latest Blog Area =================-->
        <section class="latest_blog_area p_120">
        	@include('layouts.frontend.partials.blog')
        </section>
        <!--================End Latest Blog Area =================-->
        
        <!--================Impress Area =================-->
        <section class="impress_area p_120">
        	@include('layouts.frontend.partials.impress')
        </section>
        <!--================End Impress Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area p_120">
           @include('layouts.frontend.partials.footer')
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
            <!-- start: JavaScript-->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
         <script>
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{$error}}','Error',{
                    clseButton:true,
                    progressBar:true
                });
            @endforeach
        @endif
    </script>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('frontend/js/popper.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/stellar.js')}}"></script>
        <script src="{{asset('frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/vendors/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('frontend/vendors/counter-up/jquery.counterup.js')}}"></script>
        <script src="{{asset('frontend/js/mail-script.js')}}"></script>
        <script src="{{asset('frontend/js/theme.js')}}"></script>
    </body>
</html>