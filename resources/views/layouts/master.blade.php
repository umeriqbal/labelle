<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <!-- Bootstrap -->
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        @yield('styles')
    </head>
    <body>
        @include('includes.frontend.header')
        <!-- <div class="main"> -->
            @yield('content')
        <!-- </div> -->
        @include('includes.frontend.footer')
    </body>
</html>
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script> 
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script> 
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script>
	 $('.navmenu-fixed-left').offcanvas({
	     placement: 'left',
	     autohide: 'true',						
	     recalc: 'true'
	 });
	 $('.navbar-fixed-top').on('click', function(){
	 	$('.dropdown-toggle-close').css('display' , 'none');
	 });
</script>
<style>
	button.navbar-toggle{
		position: absolute;
		top : -90px;
		right: 10px;
	}
	
	.navbar-default .navbar-toggle{
		background:none;
		position:absolute;
		top:-120px;
		right:5px;
	}
	.padding-left-indent{
		margin-left:15px !important;
	}
</style>
@yield('footerjs')