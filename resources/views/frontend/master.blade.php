<!DOCTYPE html>
<html lang="en-US">

<head>

	<!-- Meta
	============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

	<!-- Stylesheets
	============================================= -->
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cairo:400,400i,700,700i&subset=arabic" rel="stylesheet">
	<link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="{{ asset('frontend/images/general-elements/favicon/favicon.png')}}">
	<link rel="apple-touch-icon" href="{{ asset('frontend/images/general-elements/favicon/apple-touch-icon.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/images/general-elements/favicon/apple-touch-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/images/general-elements/favicon/apple-touch-icon-114x114.png')}}">

	<!-- Title
	============================================= -->
	<title>@yield('title')</title>

</head>

<body>
	<div id="scroll-progress"><span class="scroll-percent"></span></div>

	<!-- Website Loading
	============================================= -->
	<div id="website-loading">
		<div class="loader">
			<div class="la-ball-pulse la-2x">
			    <div></div>
			    <div></div>
			    <div></div>
			</div>
		</div><!-- .loader end -->
	</div><!-- .website-loading end -->

	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Header
		============================================= -->
        @include('frontend.body.header')
		<!-- #header end -->

		<!-- Header Sticky
		============================================= -->
        @yield('content')

		<!-- Footer Main
		============================================= -->
        @include('frontend.body.footer')
		<!-- #footer-main end -->

		<!-- Footer Mini
		============================================= -->
		<footer id="footer-mini">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyrights-message">2016 - 2017 © <span>Scour</span>. All rights reserved.</div>
						<ul class="social-icons">
							<li><a class="si-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="si-behance" href="#"><i class="fa fa-behance"></i></a></li>
							<li><a class="si-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						</ul><!-- .social-icons end -->
					</div><!-- .col-md-12 end -->
				</div><!-- .row end -->
			</div><!-- .container end -->

		</footer><!-- #footer-mini end -->

	</div><!-- #full-container end -->

	<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('frontend/js/jquery.js')}}"></script>
	<script src="{{ asset('frontend/js/jRespond.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.easing.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.fitvids.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.stellar.js')}}"></script>
	<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js')}}"></script>
	<script src="{{ asset('frontend/js/hoverIntent.js')}}"></script>
	<script src="{{ asset('frontend/js/simple-scrollbar.min.js')}}"></script>
	<script src="{{ asset('frontend/js/superfish.js')}}"></script>
	<script src="{{ asset('frontend/js/scrollIt.min.js')}}"></script>
	<script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
	<script src='{{ asset('frontend/js/jquery.magnific-popup.min.js')}}'></script>
	<script src="{{ asset('frontend/js/jquery.waitforimages.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jssocials.min.js')}}"></script>
	<script src="{{ asset('frontend/js/tweetie.min.js')}}"></script>
	<script src="{{ asset('frontend/js/instafeed.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src='{{ asset('frontend/js/jquery.validate.min.js')}}'></script>
    <script src="{{ asset('frontend/js/google-map.js')}}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1vAzZpKh9vsQvF3e4MeClkyYB-MWtnA&callback=initMap"></script>
	<script src='{{ asset('frontend/js/functions.js')}}'></script>

</body>
</html>
