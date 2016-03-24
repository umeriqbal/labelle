<header class="main__header">
	<div class="container">
		<nav class="navbar navbar-default" role="navigation"> 
		  <!-- Brand and toggle get grouped for better mobile display --> 
		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="navbar-header">
		    <h1 class="navbar-brand"><a href="/"><img src="{{ URL::asset('images/logo.png') }}"></a></h1>
		    <!--<a href="#" onClick="javascript.void()" class="submenu">Menus</a></div>-->
		  	<!--<div class="call-now"><h1><a href="tel:0208 111 2223">0208 111 2223</a></h1></div>-->
		  <div class="menuBar">
		    @include('includes.frontend.menu')
		  </div>
		  <!-- /.navbar-collapse -->
		</nav>
		<nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
		  <a class="navmenu-brand" href="#">Labelle Beauty Lounge</a>
		  <ul class="nav navmenu-nav">
		    <li class="active"><a href="/">Home</a></li>
		    <li><a href="#">Treatments</a></li>
		    <li><a href="/eye-treatments" class="padding-left-indent">- Eye Treatments</a></li>
		      <li><a href="/facials" class="padding-left-indent">- Skin Care</a></li>
		      <li><a href="/waxing" class="padding-left-indent">- Waxing</a></li>
		      <li><a href="/manicure-and-pedicure" class="padding-left-indent">- Manicure and Pedicure</a></li>
		      <li><a href="/massage-services" class="padding-left-indent">- Massage</a></li>
		   		<li><a href="/prices">Prices</a></li>
			  <li><a href="/book-an-appointment">Book your appointment</a></li>
			  <li><a href="/about-us">About Us</a></li>
			  <li><a href="/contact-us">Contact us</a></li>
		  </ul>
		</nav>
		<div class="navbar navbar-default navbar-fixed-top" style="min-height:0px !important">
		  <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </button>
		</div>
	</div>
</header>

