@extends('web.includes.master')
@section('content')

	<main class="main">

	    <!-- Hero Section -->
	    <section id="hero" class="hero section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/background/banner.jpeg" alt="Hero Image">

	      <div class="container">
	        <div class="row">
	          <div class="col-xl-1 hide-mobile">
	          	<p class="hero-title">DarAlafkar</p>
	          </div>
	          <div class="col-xl-4">
	          	<div class="hero-img">
		          	<img src="{{URL::to('/public')}}/assets/img/background/banner2.png" alt="Dar Alafkar - Dubai UAE">
		          </div>
	          </div>
	          <div class="col-xl-5 hero-title-sec">
	          	<div class="hero-spacing"></div>
	          	<h6 class="text-theme text-bold">Dar Alafkar</h6>
	            <h1>The Future of Advertising</h1>
	            <blockquote>
	              <p>People don’t just purchase products or services; <br>they invest in connections, narratives, and experiences that feel magical.</p>
	            </blockquote>

	          </div>
	        </div>
	      </div>

	    </section><!-- /Hero Section -->



	    <!-- Services Section -->
	    <!-- <section class="home-business">

	      <div class="container">

	        <div class="row gy-4">

	          <div class="col-lg-3 business-first" data-aos="fade-up" data-aos-delay="100">
	            <div>
	              <h5 class="text-theme">Dar Alafkar</h5>
	              <h2 class="text-bold" style="font-size:40px">Our Products</h2>
	            </div>
	          </div>
	         

	          <div class="col-lg-4 business-item business-item-2" data-aos="fade-up" data-aos-delay="200">
	          	<a href="https://datamysite.com/">
		          	<img src="https://datamysite.com/public/assets/img/logo.png" alt="Datamysite">
		          </a>
		          	<p><a href="https://datamysite.com/"><strong>Datamysite</strong></a> is a premier marketing agency specializing in brand storytelling, experiential marketing, and strategic brand placement.</p>
	          </div>
	          <div class="col-lg-1 business-item-and" data-aos="fade-up" data-aos-delay="200"><strong>&</strong></div>
	          <div class="col-lg-4 business-item  business-item-2" data-aos="fade-up" data-aos-delay="200">
	          	<a href="https://dealsandcouponsmena.ae">
		          	<img src="https://dealsandcouponsmena.ae/public/web_assets/images/logo/dcm-logo-r.png" alt="DCM">
		          </a>
	          	<p><a href="https://dealsandcouponsmena.ae"><strong>DCM</strong></a> empowers businesses and delights customers through smart marketing, seamless shopping, and zero commission sales.</p>
	           
	          </div>

	        </div>
	    		<hr>
	    		<br>
	      </div>

	    </section> -->
	    <!-- /Services Section -->


	    <!-- Services Section -->
	    <section class="home-business">

	      <div class="container">

	        <div class="row gy-4">

	          <div class="col-lg-3 business-first" data-aos="fade-up" data-aos-delay="100">
	            <div>
	              <h5 class="text-theme">BEST SOLUTIONS</h5>
	              <h2 class="text-bold" style="font-size:40px">For Your Business</h2>
	            </div>
	          </div>
	          <!-- End Service Item -->

	          <div class="col-lg-3 business-item" data-aos="fade-up" data-aos-delay="200">

	          	<img src="{{URL::to('/public/assets/img/service/1.png')}}" alt="Taxi advertising dubai uae">
	          	<p class="business-title">TAXI</p>
	          	<p>A mobile billboard that showcases your brand to a constantly moving audience, day and night.</p>
	           
	          </div><!-- End Service Item -->

	          <div class="col-lg-3 business-item" data-aos="fade-up" data-aos-delay="200">

	          	<img src="{{URL::to('/public/assets/img/service/2.png')}}" alt="Radio advertising dubai uae">
	          	<p class="business-title">RADIO</p>
	          	<p>Engage with audiences throughout the Emirates and connect with them in their everyday moments.</p>
	           
	          </div><!-- End Service Item -->

	          <div class="col-lg-3 business-item" data-aos="fade-up" data-aos-delay="200">

	          	<img src="{{URL::to('/public/assets/img/service/3.png')}}" alt="Transit media advertising dubai uae">
	          	<p class="business-title">Transit Media</p>
	          	<p>From airport displays to in-flight promotions, we handle it all.</p>
	           
	          </div><!-- End Service Item -->

	        </div>

	      </div>

	    </section><!-- /Services Section -->

	     <!-- Service Cards Section -->
	    <section id="service-cards" class="service-cards section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
	          	<div class="row">
	          		<div class="col-lg-4 col-sm-6 col-xs-6">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="87"></span>
					        </div>
					      </div>
					    </div>
					    <p>Digital Media Buying</p>
	          		</div>

	          		<div class="col-lg-4 col-sm-6 col-xs-6">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="96"></span>
					        </div>
					      </div>
					    </div>
					    <p>OOH Media Buying</p>
	          		</div>

	          		<div class="col-lg-4 col-sm-6 col-xs-6 service-card-last">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="80"></span>
					        </div>
					      </div>
					    </div>
					    <p>Strategic planning</p>
	          		</div>
	          	</div>
	          </div><!-- End Card Item -->

	          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
	            <span class="text-theme">WHAT WE DO</span>
	            <h2>Strategic Marketing Solutions to Elevate Your Business</h2>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section><!-- /Service Cards Section -->


		@include('web.includes.elements.clients')


	     <!-- Service Cards Section -->
	    <section id="service-cards" class="service-cards section">

	      <div class="container">

	        <div class="row">
          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="1219"></div><label>+</label>
				      <span>Succesfull Project</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="15"></div><label>+</label>
				      <span>Years Experience</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="5"></div><label>+</label>
				      <span>Winning Awards</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="81"></div><label>+</label>
				      <span>Satisfied Clients</span>
				    </div>
          		</div>
          	</div>

	      </div>

	    </section><!-- /Service Cards Section -->

	    
	    
    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-theme">Our Services</h2>
        <p class="service-p">Enhance Your Brand Presence and Drive Sales Growth</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row service-row gy-4">

        	@foreach($header_services as $val)
	          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
	            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
	            <div>
	              <h4 class="title">{{$val->name}}</h4>
	              <p class="description">{{$val->description}}</p>
	              <a href="{{URL::to('/'.$val->slug)}}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
	            </div>
	          </div>
	          <!-- End Service Item -->
          @endforeach
          
        </div>

      </div>

    </section><!-- /Services Section -->


	    <!-- Call To Action Section -->
	    <section id="call-to-action" class="call-to-action section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/background/call-to.jpg" alt="Call to action background">

	      <div class="container">
	        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
	          <div class="col-xl-10">
	          	<div class="hero-spacing hide-mobile"></div>
	            <div class="text-center">
	              <p class="text-theme" style="text-transform: uppercase;">Schedule Your Appointment Today</p>
	              <h3>Seize This Chance to Take <br>Your Advertising to the Next Level!</h3>
	              <br>
	              <p><span class="text-theme">Intelligent Marketing, Exceptional Results.</span>
					<br>Increase Brand Exposure, Optimize Campaign Success</p>
	              <a class="cta-btn" href="{{route('contact')}}">Contact Us</a>
	            </div>
	          	<div class="hero-spacing hide-mobile"></div>
	          </div>
	        </div>
	      </div>

	    </section><!-- /Call To Action Section -->

	</main>


@endsection