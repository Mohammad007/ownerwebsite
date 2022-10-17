<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<title>{{ $settings[0]->value }}</title>

	<meta name="description" content="{{ $settings[0]->value }}" >

	<meta name="author" content="{{ $settings[10]->value }}">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Import Themify icon Style -->
	<link href="{{ asset('assets/assets/css/themify-icons.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/assets/css/style.css') }}"> <!-- Resource style -->

	<link rel="stylesheet" href="{{ asset('assets/assets/css/headlines.css') }}"> <!-- Resource style -->

	<link rel="stylesheet" href="{{ asset('assets/assets/css/menu.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/assets/css/animsition.min.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/assets/css/awwwards.css') }}">

	<!--[if lt IE 8]><!-->
	<link rel="stylesheet" href="{{ asset('assets/assets/css/ie7/ie7.css') }}">
	<!--<![endif]-->

	<!--- Favicons -->
	<link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114.png') }}">

  </head>
  <body class="homepage">


  	<div class="container index-page">
  		<div class="wrapper"><!-- wrapper needed for scroll -->
  			<div class="main clearfix">
  				<div class="column">
  					<p><button id="trigger-overlay" class="showMenu"><span class="ti-menu"></span></button></p>
  				</div>

  				<div class="overlay overlay-genie" data-steps="m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z;m 698.9986,728.03569 41.23353,0 -3.41953,77.8735 -34.98557,0 z;m 687.08153,513.78234 53.1506,0 C 738.0505,683.9161 737.86917,503.34193 737.27015,806 l -35.90067,0 c -7.82727,-276.34892 -2.06916,-72.79261 -14.28795,-292.21766 z;m 403.87105,257.94772 566.31246,2.93091 C 923.38284,513.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 455.17312,480.07689 403.87105,257.94772 z;M 51.871052,165.94772 1362.1835,168.87863 C 1171.3828,653.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 31.173122,513.78234 51.871052,165.94772 z;m 52,26 1364,4 c -12.8007,666.9037 -273.2644,483.78234 -322.7299,776 l -633.90062,0 C 359.32034,432.49318 -6.6979288,733.83462 52,26 z;m 0,0 1439.999975,0 0,805.99999 -1439.999975,0 z">
  					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1440 806" preserveAspectRatio="none">
  						<path class="overlay-path" d="m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z"/>
  					</svg>
  					<button type="button" class="overlay-close"><span class="ti-close"></span></button>

  					{{-- <a href="index.html"><img class="menu-logo" src="{{ asset('assets/images/logo-white.png') }}" data-rjs="3" alt="Site Logo"></a> --}}
  					<nav>
  						<ul>
  							<li><a href="#" id="homelink">Home</a></li>
  							<li><a href="#" id="aboutlink">About</a></li>
  							<li><a href="#" id="serviceslink">Services</a></li>
  							<li><a href="#" id="teamlink">Team</a></li>
  							<li><a href="#" id="portfoliolink">Portfolio</a></li>							
  							<li><a href="#" id="contactlink">Contact</a></li>
  						</ul>
  					</nav>
  				</div>

  				<section id="home-section" class="home-section cd-section">
  					<div class="cd-block">
  						<img class="site-logo" src="{{ url('storage/app/public/'.$settings[2]->value) }}" alt="Site Logo">
  						<div class="cd-intro">
  							<h1 class="cd-headline rotate-1 main-title">
  								<span>Dapper Developer</span>
  								<span class="cd-words-wrapper">
  									<b class="is-visible">Software Developer</b>
  									<b>Android Developer</b>
  									<b>Website Developer</b>
  									<b>Web Developer</b>
  									<b>Desktop Developer</b>										
  								</span>
  							</h1>
  							<h4 class="sub-title">Web Design &amp; Web Develop</h4>
  							<div class="next-section">
  								<button id="go-to-next"><span class="ti-mouse"></span></button>
  							</div>	
  						</div> <!-- cd-intro -->
  					</div>
  				</section> <!-- .cd-section -->

  				<section id="about" class="cd-section about-section">
  					<div class="cd-block">
  						<div class="cd-half-block left-side"></div>
  						<div class="cd-half-block right-side">
  							<h2 class="section-title">About Us</h2>
  							<p class="section-description">This is your chance to focus on your company’s “why.” It could be what sets you apart from other competitors on the market.</p>
  							<div class="about-details">
                                @forelse ($aboutlist as $item)
                                <div class="item">
									<h4 class="item-title">{{ $item->title }}</h4>
									<p class="item-details">{{ $item->content }}</p>
								  </div>
                                @empty
                                <div class="item"></div>
                                @endforelse
  							</div>
  						</div>
  					</div>
  				</section>

  				<section id="service" class="cd-section service-section">
  					<div class="cd-block">
  						<div class="cd-half-block left-side"></div>

  						<div class="cd-half-block right-side">
  							<h2 class="section-title">Services</h2>
  							<p class="section-description">Various startups, business, and enterprises are targeting versatile platform to outreach maximum user base at all available platforms.</p>
  							<div class="service-details">
                                @forelse ($serviceslist as $item)
                                <div class="item">
                                    <div class="icon-container">
                                        <span class="item-icon ti-ruler-pencil"></span>
                                    </div>
                                    <h4 class="item-title">{{ $item->title }}</h4>
                                    <p class="item-details">{{ $item->content }}</p>
                                </div>
                                @empty
                                <div class="item"></div>
                                @endforelse
  							</div>
  						</div>
  					</div><!-- /.cd-block -->
  				</section><!-- /#service -->

  				<section id="team" class="cd-section team-section">
  					<div class="cd-block">
  						<div class="cd-half-block left-side"></div>
  						<div class="cd-half-block right-side">
  							<h2 class="section-title">Team</h2>
  							<p class="section-description">Out of the box alternative for the 'meet our team' page. The company decided to show all their staff from tip to toe.</p>
                            <div class="team-details">
                            @forelse ($teamlist as $item)
                                <div class="member">
                                    <span class="member-avatar"><img src="{{ url('storage/app/public/'.$item->logo) }}" alt="{{ $item->name }}"></span>
                                    <h4 class="member-name">{{ $item->name }}</h4>
                                    <span class="member-position">{{ $item->position }}</span>
                                </div>
                            @empty
                            </div> 
                            <div class="team-details"></div>
                            @endforelse

  						</div>
  					</div>
  				</section>


  				<section id="portfolio" class="cd-section portfolio-section">
  					<div class="cd-block">
  						<div class="cd-half-block left-side"></div>
  						<div class="cd-half-block right-side">
  							<h2 class="section-title">portfolio</h2>
  							<p class="section-description">This portfolio website example is creative and keeps the visitors engaged.</p>
  							<div class="portfolio-details">
                                @forelse ($portfolioslist as $item)
  								<figure class="item col-md-6">
  									<img src="{{ url('storage/app/public/'.$item->logo) }}" alt="Portfolio Image">
                                    <a href="{{ $item->url }}" target="_blank">
  									<figcaption>
  										<h4 class="item-title">{{ $item->title }}</h4>
  										<span class="member-position">{{ $item->technology }}</span>
  									</figcaption>	
                                    </a>										
  								</figure>
                                @empty
                                <figure class="item col-md-6">										
                                </figure>
                                @endforelse

  							</div><!-- /.about-details -->
  						</div>
  					</div><!-- /#portfolio -->
  				</section> <!-- .cd-section -->


  				<section id="contact" class="cd-section contact-section">
  					<div class="cd-block">
  						<div class="cd-half-block left-side">
  							<div id="google-map" class="google-map">
  								<div class="map-container">
  									<div id="googleMaps" class="google-map-container"></div>
  								</div><!-- /.map-container -->
  							</div><!-- /#google-map -->
  						</div>

  						<div class="cd-half-block right-side">
  							<h2 class="section-title">Contact</h2>
  							<p class="section-description">If you face any problem with MAMA, Please contact Us. We will support you free. </p>
  							<div class="contact-details">
  								<div id="contact-form" class="contact-form">
  									<form action="#" method="post" id="contactform" class="contactform">
  										<input id="author" class="" name="author" type="text" placeholder="Name*" value="" required>
  										<input id="email" class=" pull-right" name="email" type="email" placeholder="Email*" value="" required>
  										<input id="subject" class=" pull-right" name="subject" type="text" placeholder="Subject*" value="" required>
  										<textarea id="message" class="" name="message" placeholder="Message" rows="3" required></textarea>
  										<button name="submit" class="submit-btn" type="submit" id="submit"><span class="ti-shift-right"></span>Send Now</button>
  									</form><!-- /#contactform -->
  								</div><!-- /#leave-contact -->
  							</div><!-- /.contact-details -->

  							<div class="address-details">
  								<div class="item">
  									<div class="contact-icon">
  										<span class="ti-direction-alt"></span>
  									</div><!-- /.contact-icon -->
  									<address>
  										<p class="street-address">{{ $settings[11]->value }}</p>
  									</address>
  								</div>
  								<div class="item">
  									<div class="contact-icon">
  										<span class="ti-mobile"></span>
  									</div><!-- /.contact-icon -->
  									<div class="mobile">
  										<span class="mobile-no">{{ $settings[12]->value }}</span>
  									</div><!-- /.mobile -->
  								</div>
  								<div class="item">
  									<ul class="social-list">
  										<li><a class="facebook" href="#"><i class="ti-facebook"></i></a></li>
  										<li><a class="twitter" href="#"><i class="ti-twitter"></i></a></li>
  										<li><a class="linkedin" href="#"><i class="ti-linkedin"></i></a></li>
  										<li><a class="dribbble" href="#"><i class="ti-instagram"></i></a></li>
  									</ul><!-- /.social-list -->			
  								</div>
  							</div><!-- /.address-details -->
  							
  							<footer class="contact-bottom">
  								<div class="copy-right">
  									&copy; <a href="#">DD</a> @php echo date('Y') @endphp - All Reserves. Developed by <a href="#">Dapper Developer</a>
  								</div>
  								<div class="page-link">
  									<ul class="pagination">
  										<a href="#home-section">Home</a>
  										<a href="#about">About</a>						
  									</ul><!-- /.pagination -->
  								</div><!-- /.page-link -->
  							</footer><!-- /.contact-bottom -->

  						</div>
  					</div>
  				</section> <!-- .cd-section -->
  			</div><!-- /main -->
  		</div><!-- wrapper -->
  	</div><!-- /container -->


  	<nav>
  		<ul class="cd-vertical-nav">
  			<li><a href="#0" class="cd-prev inactive"><span class="ti-arrow-right"></span></a></li>
  			<li><a href="#0" class="cd-next"><span class="ti-arrow-right"></span></a></li>
  		</ul>
  	</nav> <!-- .cd-vertical-nav -->

  	<!-- Include modernizr-2.8.3.min.js -->
  	<script src="{{ asset('assets/assets/js/modernizr-2.8.3.min.js') }}"></script>

  	<!-- Include jquery.min.js plugin -->
  	<script src="{{ asset('assets/assets/js/jquery-2.1.3.min.js') }}"></script>

  	<!-- Google Maps Script -->
  	<script src="https://maps.google.com/maps/api/js?sensor=true"></script>

  	<!-- Gmap3.js For Static Maps -->
  	<script src="{{ asset('assets/assets/js/gmap3.js') }}"></script>

  	<script src="{{ asset('assets/assets/js/plugins.js') }}"></script>

  	<script src="{{ asset('assets/assets/js/snap.svg-min.js') }}"></script>

  	<script src="{{ asset('assets/assets/js/main.js') }}"></script>


  	<script type="text/javascript">

      window.devicePixelRatio = 2;

      $(document).ready(function() {


      	$('#go-to-next').on('click', function(event) {	      	
      		event.preventDefault();
      		$.scrollTo($(".about-section"), {
      			axis : 'y',
      			duration : 500
      		});
		      	return false;
		    });
      });


      function isMobile() { 
      	return ('ontouchstart' in document.documentElement);
      }

      function init_gmap() {
      	if ( typeof google == 'undefined' ) return;
      	var options = {
      		center: [29.607981, 78.342674],
      		zoom: 15,
      		mapTypeControl: true,
      		mapTypeControlOptions: {
      			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
      		},
      		navigationControl: true,
      		scrollwheel: false,
      		streetViewControl: true
      	}

      	if (isMobile()) {
      		options.draggable = false;
      	}

      	$('#googleMaps').gmap3({
      		map: {
      			options: options
      		},
      		marker: {
      			latLng: [29.607981, 78.342674],
      			options: { icon: 'images/mapicon.png' }
      		}
      	});
      }

      init_gmap();

</script>
</body>
</html>

