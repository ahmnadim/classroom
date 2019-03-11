<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- end: Mobile Specific -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>   
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{asset('backend/img/favicon.ico')}}">
    <!-- end: Favicon -->
@stack('css')   
</head>

<body>
        <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                
                <a class="brand" href="{{route('welcome')}}"><span>Class Room</span></a>
                                
                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    
                    <ul class="navbar-nav ml-auto nav pull-right">
                        <!-- Authentication Links -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="{{route('teacher.profile.index')}}"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="halflings-icon off"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                                 </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end: Header Menu -->
                
            </div>
        </div>
    </div>
    
        <div class="container-fluid-full">
        <div class="row-fluid">
          
            <div id="content" class="span10">
            
           <div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Warning!</h4>
  <h4 class="alert-heading">To access your profile you need to authorized by admin first.</h4>
</div>

           </div>
       

    </div><!--/.fluid-container-->
    
            <!-- end: Content -->
        </div><!--/#content.span10-->
        </div><!--/fluid-row-->
        
   
    
   @include('layouts.backend.partials.footer')
    
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
        <script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>
    
        <script src="{{asset('backend/js/modernizr.js')}}"></script>
    
        <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
    
        <script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>

        <script src="{{asset('backend/js/excanvas.js')}}"></script>
    <script src="{{asset('backend/js/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
        
        <script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.noty.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>
    
        <script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
    
        <script src="{{asset('backend/js/counter.js')}}"></script>
    
        <script src="{{asset('backend/js/retina.js')}}"></script>

        <script src="{{asset('backend/js/custom.js')}}"></script>
    <!-- end: JavaScript-->
@stack('js')
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
