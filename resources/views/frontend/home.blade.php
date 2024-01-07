<!DOCTYPE html>
<html lang="en">

<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the apple mobile web app capable -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the apple mobile web app status bar style -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- set the description -->
	<meta name="author" content="Rahul - webwolfrahul@gmail.com - Lead Generation Marketing Landing Page">
	<!-- Page Title -->
	<title>Metro Properties - Lead Generation Marketing Landing Page</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cUbuntu:400,700" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('frontend/css/fonts-icons.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('frontend/css/plugin-resets.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('frontend/css/color.css')}}">
	
	<style class="color_css">
		/* don't delete this blank tag*/
		.newimg {
			width: 180px;
			transform: scale(1.2)translateX(10px);
		}

		#header {
			padding-top: 20px;
		}

		footer .logo img.img-responsive {
			height: 60px;
		}

		.counter-section .txt.text-uppercase {
			font-size: 18px;
		}
	</style>
</head>

<body>
	<div id="wrapper">
		<div class="loader-container" id="loader">
			<div class="holder">
				<div class="la-line-scale la-2x">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
		<!-- header of the page start here -->
		<header id="header" class="dark-bg" data-scroll-index="0">
			<div class="container">
				<div class="row" style="display: flex;align-items: center">
					<div class="col-xs-12 col-sm-4">
						<!-- header logo -->
						<div class="logo pull-left">
							<a href="home.html">
								<img src="{{asset('frontend/images/logo-metal.png')}}" alt="swam lake" class="img-responsive newimg">
							</a>
						</div>
						<a href="#" class="nav-opener pull-right"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>
					<div class="col-xs-12 col-sm-8">
						<!-- top list -->
						<ul class="list-inline text-right top-list">
							<li>
								<i class="fa fa-envelope main-color"></i>
								<strong>Contact US :</strong>
								<a href="mailto:Mail@Example.com">Gaurav@metroproperties.com.au</a>
							</li>
							<li>
								<i class="fa fa-phone main-color"></i>
								<strong>Call Us :</strong>
								<a href="tel:+201093515252">0405 555 510</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- page navigation start here -->
			<nav id="nav">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<ul class="nav-list list-inline">
								<li><a href="#" data-scroll-nav="0" class="smooth">Home</a></li>
								<li><a href="#" data-scroll-nav="2" class="smooth">About Us</a></li>
								<li><a href="#" data-scroll-nav="3" class="smooth">Our Services</a></li>
								<!-- <li><a href="#" data-scroll-nav="4" class="smooth">Pricing Table</a></li> -->
								<li><a href="mailto:Mail@Example.com">Contact Us</a></li>
								<li class="button"><a href="#"
										class="btn btn-default main-bg-color text-uppercase smooth"
										data-scroll-nav="1">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<!-- page navigation end here -->
		</header>
		<!-- header of the page end here -->
		<!-- main content wrapping section start here -->
		<main id="main">
			<!-- main banner section start here -->
			<section class="bg-img-full main-banner bg-img-parallax" style="background-image: url('{{asset('frontend/images/img05.jpg')}}"
				data-scroll-index="0">
				<span class="overlay"></span>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-7">
							<span class="title">Leading Real Estate Consultant in Australia</span>
							<h1 class="heading text-uppercase">Find Your Dream Home <span class="main-color">With Metro
									Properties</span></h1>
							<span class="divider white"></span>
							<div class="btn-holder">
								<a href="#" class="btn btn-default main-bg-color text-uppercase"
									data-scroll-nav="2">Call Now</a>
							</div>
							<span class="arrow" style="background-image: url('{{ asset('frontend/images/arrow.png') }}')"></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-5">
							<!-- quote form start here -->
							<section class="quote-form" style="background-image: url('{{asset('frontend/images/img02.jpg')}}"
								data-scroll-index="1">
								<h2 class="form-heading text-center text-uppercase">Find A Perfect Property</h2>
								<span class="form-title text-center">Contact us now</span>
								<form id="form1" >
									@csrf
									<fieldset>
										<div class="form-group">
											<input type="text" name="name" id="name" placeholder="Your Name" class="form-control required">
											<span id="error_form1_name" class="error"></span>
										</div>
										<div class="form-group">
											<input type="email" name="email" id="email" placeholder="Your Email" class="form-control required">
											<span id="error_form1_email" class="error"></span>
										</div>
										<div class="form-group">
											<input type="tel" name="phone" id="phone" placeholder="Phone Number" class="form-control required">
											<span id="error_form1_phone" class="error"></span>
										</div>
										<div id="msgSubmit" class="form-message hidden"></div>
										<span class="info"><i class="fa fa-info-circle main-color"
												aria-hidden="true"></i> We will never share your personal info</span>
										<button class="btn btn-default main-bg-color" type="button" onclick="validateForm(1)" id="">GET
											A QUOTE</button>
										</fieldset>
										<span id="success_form1" class="error"></span>
								</form>
							</section>
							<!-- quote form end here -->
						</div>
					</div>
				</div>
			</section>
			<!-- main banner section end here -->
			<!-- about section start here -->
			<section class="about-section pad-top-lg pad-bottom-sm" data-scroll-index="2">
				<div class="container">
					<!-- main heading start here -->
					<header class="main-heading row">
						<div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
							<h2 class="heading text-uppercase"><span class="main-color">about</span> Metro Properties
							</h2>
							<span class="divider center"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard dummy text ever since the 1500s</p>
						</div>
					</header>
					<div class="row">
						<!-- about box start here -->
						<div class="col-xs-12 col-sm-6 col-md-3 about-box pad-bottom-sm">
							<span class="num main-color">01.</span>
							<span class="title text-uppercase">the company</span>
							<span class="divider"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been indust...</p>
							<a href="#" class="more main-color text-uppercase">READ MORE...</a>
						</div>
						<!-- about box end here -->
						<!-- about box start here -->
						<div class="col-xs-12 col-sm-6 col-md-3 about-box pad-bottom-sm">
							<span class="num main-color">02.</span>
							<span class="title text-uppercase">our vision</span>
							<span class="divider"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been indust...</p>
							<a href="#" class="more main-color text-uppercase">READ MORE...</a>
						</div>
						<!-- about box end here -->
						<!-- about box start here -->
						<div class="col-xs-12 col-sm-6 col-md-3 about-box pad-bottom-sm">
							<span class="num main-color">03.</span>
							<span class="title text-uppercase">Our mission</span>
							<span class="divider"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been indust...</p>
							<a href="#" class="more main-color text-uppercase">READ MORE...</a>
						</div>
						<!-- about box end here -->
						<!-- about box start here -->
						<div class="col-xs-12 col-sm-6 col-md-3 about-box pad-bottom-sm">
							<span class="num main-color">04.</span>
							<span class="title text-uppercase">our process</span>
							<span class="divider"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been indust...</p>
							<a href="#" class="more main-color text-uppercase">READ MORE...</a>
						</div>
						<!-- about box end here -->
					</div>
				</div>
			</section>
			<!-- about section end here -->
			<!-- counter section start here -->
			<div class="counter-section text-center bg-img-full pad-top-lg pad-bottom-lg"
				style="background-image: url('{{asset('frontend/images/img04.jpg')}}" data-scroll-index="2">
				<div class="container pad-top-xs">
					<div class="row">
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">246</span>
							<span class="txt text-uppercase">Apartments</span>
						</div>
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">390</span>
							<span class="txt text-uppercase">Townhouse</span>
						</div>
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">56</span>
							<span class="txt text-uppercase">Land & Houses</span>
						</div>
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">470</span>
							<span class="txt text-uppercase">Offices</span>
						</div>
					</div>
				</div>
			</div>
			<!-- counter section end here -->
			<!-- services section starts here -->
			<section class="services-section pad-top-lg pad-bottom-sm" data-scroll-index="3">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-6 col-md-push-6 pad-bottom-sm">
							<div class="txt-box">
								<!-- main heading start here -->
								<header class="main-heading">
									<h2 class="heading text-uppercase"><span class="main-color">our Great</span> Offers
									</h2>
									<span class="divider"></span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem
										Ipsum has been standard. Lorem Ipsum has been the industry's standard dummy text
										ever since the 1500s</p>
								</header>
								<ul class="list list-unstyled">
									<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Apartments</li>
									<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Townhouse</li>
									<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Offices</li>
									<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Land & Houses
									</li>
									<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Under
										Developments</li>
									<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Many More</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 col-md-pull-6 pad-bottom-sm">
							<!-- services box start here -->
							<ul class="services-box list-unstyled text-center"
								style="background-image: url('{{asset('frontend/images/img03.jpg')}}">
								<li>
									<div class="over">
										<span class="icomoon icon-document main-color"></span>
										<span class="title text-uppercase main-color">Apartments</span>
										<span class="divider white center"></span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ever
											since the 1500s.</p>
									</div>
								</li>
								<li>
									<div class="over">
										<span class="icomoon icon-mobile main-color"></span>
										<span class="title text-uppercase main-color">Townhouse</span>
										<span class="divider white center"></span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ever
											since the 1500s.</p>
									</div>
								</li>
								<li>
									<div class="over">
										<span class="icomoon icon-layers main-color"></span>
										<span class="title text-uppercase main-color">Land & Houses</span>
										<span class="divider white center"></span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ever
											since the 1500s.</p>
									</div>
								</li>
								<li>
									<div class="over">
										<span class="icomoon icon-gears main-color"></span>
										<span class="title text-uppercase main-color">Full Support</span>
										<span class="divider white center"></span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ever
											since the 1500s.</p>
									</div>
								</li>
							</ul>
							<!-- services box end here -->
						</div>
					</div>
				</div>
			</section>
			<!-- services section end here -->
			<!-- price section start here -->
			<section class="bg-img-full price-section pad-top-lg pad-bottom-sm"
				style="background-image: url('{{asset('frontend/images/img02.jpg')}}" data-scroll-index="4">
				<div class="container">
					<!-- main heading start here -->
					<header class="main-heading row">
						<div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
							<h2 class="heading text-uppercase"><span class="main-color">Great</span> Pricing Table</h2>
							<span class="divider center"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard dummy text ever since the 1500s</p>
						</div>
					</header>
					<!-- main heading end here -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4 pad-bottom-sm">
							<!-- price box start here -->
							<div class="price-box">
								<header class="header">
									<img src="{{asset('frontend/images/part1.png')}}" alt=""
										style="width: 100%;margin-bottom: 26px;transform: scale(1.18)translate(0,-3px)">
									<strong class="title text-uppercase">Apartments</strong>
									<span class="price-txt">
										<span class="price main-color">$12K - $111K</span>
									</span>
									<p>Best package for small awesome team</p>
								</header>
								<div class="box">
									<h3 class="text-uppercase">Small awesome team</h3>
									<span class="divider"></span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been indust...</p>
									<a href="#popup1" class="order text-uppercase lightbox">Enquire now...</a>
								</div>
							</div>
							<!-- price box end here -->
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 pad-bottom-sm">
							<!-- price box start here -->
							<div class="price-box">
								<header class="header">
									<img src="{{asset('frontend/images/part2.png')}}" alt=""
										style="width: 100%;margin-bottom: 26px;transform: scale(1.18)translate(0,-3px)">
									<strong class="title text-uppercase">Houses</strong>
									<span class="price-txt">
										<span class="price main-color">$225K - $2.5M</span>
									</span>
									<p>Best package for single people</p>
								</header>
								<div class="box">
									<h3 class="text-uppercase">single people User</h3>
									<span class="divider"></span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been indust...</p>
									<a href="#popup1" class="order text-uppercase lightbox">Enquire now...</a>
								</div>
							</div>
							<!-- price box end here -->
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 pad-bottom-sm">
							<!-- price box start here -->
							<div class="price-box">
								<header class="header">
									<img src="{{asset('frontend/images/part3.png')}}" alt=""
										style="width: 100%;margin-bottom: 26px;transform: scale(1.18)translate(0,-3px)">
									<strong class="title text-uppercase">Offices</strong>
									<span class="price-txt">
										<span class="price main-color">$1M - $5M</span>
									</span>
									<p>Best package for big awesome team</p>
								</header>
								<div class="box">
									<h3 class="text-uppercase">big awesome team</h3>
									<span class="divider"></span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been indust...</p>
									<a href="#popup1" class="order text-uppercase lightbox">Enquire now...</a>
								</div>
							</div>
							<!-- price box end here -->
						</div>
					</div>
				</div>
			</section>
			<!-- price section end here -->
			<!-- quote section start here -->
			<section class="bg-img-full bg-img-parallax quote-section pad-top-lg pad-bottom-lg"
				style="background-image: url('{{asset('frontend/images/img01.jpg')}}">
				<span class="overlay"></span>
				<div class="container">
					<div class="row">
						<div class="col-cs-12 col-sm-10 col-lg-8 col-sm-push-1 col-lg-push-2 text-center">
							<span class="subtitle">Find Your Dream House Here</span>
							<h2 class="main-color text-uppercase">Find A Perfect Property</h2>
							<span class="divider white center"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard dummy text ever since the 1500s</p>
							<button class="btn btn-default main-bg-color text-uppercase smooth"
								data-scroll-nav="1">Click here</button>
						</div>
					</div>
				</div>
			</section>
			<!-- quote section end here -->
		</main>
		<!-- main content wrapping section end here -->
		<!-- footer of the page start here -->
		<footer id="footer" class="dark-bg pad-top-xs pad-bottom-xs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<!-- footer logo -->
						<div class="logo pull-left">
							<a href="home.html">
								<img src="https://i.ibb.co/VjQ2vxK/white-log.png" alt="swam lake"
									class="img-responsive">
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-8">
						<!-- top list -->
						<ul class="list-inline text-right top-list">
							<li>
								<i class="fa fa-envelope main-color"></i>
								<strong>Contact US :</strong>
								<a href="mailto:Mail@Example.com">Gaurav@metroproperties.com.au</a>
							</li>
							<li>
								<i class="fa fa-phone main-color"></i>
								<strong>Call Us :</strong>
								<a href="tel:+201093515252">0405 555 510</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<!-- footer bottom container -->
					<div class="col-xs-12 col-sm-6 bottom">
						<p>2023 © Copyright RAHUL. All rights reserved.</p>
					</div>
					<!-- footer bottom container -->
					<div class="col-xs-12 col-sm-6 bottom">
						<ul class="list-inline text-right mt-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer of the page end here -->
		<!-- Back Top of the page -->
		<span id="back-top" class="fa fa-angle-up main-bg-color"></span>
		<div class="popup-holder">
			<div id="popup1" class="lightbox">
				<!-- quote form start here -->
				<section class="quote-form" style="background-image: url('{{asset('frontend/images/img02.jpg')}}">
					<h2 class="form-heading text-center text-uppercase">register now</h2>
					<span class="form-title text-center">Take your free trial</span>
					<form id="form2" >
						@csrf
						<fieldset>
							<div class="form-group">
								<input type="text" name="name" id="name2" placeholder="Your Name" class="form-control required">
								<span id="error_form2_name" class="error"></span>
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email2" placeholder="Your Email" class="form-control required" >
								<span id="error_form2_email" class="error"></span>
							</div>
							<div class="form-group">
								<input type="tel" name="phone" id="phone2" placeholder="Phone Number" class="form-control required" >
								<span id="error_form2_phone" class="error"></span>
							</div>
							<div id="msgSubmit2" class="form-message hidden"></div>
							<span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> We will
								never share your personal info</span>
							<button class="btn btn-default main-bg-color" type="button" onclick="validateForm(2)" id="">GET A
								QUOTE</button>
						</fieldset>
						<span id="success_form2" class="error"></span>
					</form>
				</section>
				<!-- quote form end here -->
			</div>
		</div>
	</div>
	<script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/plugins.js')}}" defer></script>
	<script src="{{asset('frontend/js/jquery.main.js')}}" defer></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('frontend/js/form_data.js')}}"></script>
	<div id="style-changer" data-src="style-changer.html"></div>
</body>

</html>