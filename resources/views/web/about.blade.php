@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    <section id="service-cards" class="about-section section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
	          	<p>
                    Founded in 2021 and located in Dubai, UAE, Dar Alafkar is a leading marketing agency specializing in brand storytelling, influencer collaborations, and strategic media placements. We cut through the noise, ensuring brands don’t just blend in but truly shine in an ever-competitive market.
                    <br><br>
                    Our expertise includes:<br>
                    <strong>Celebrity Management & Influencers</strong> – Partnering brands with key celebrities and influencers to boost visibility, foster credibility, and engage with targeted audiences.
                    <br><br>  
                    <strong>Public Relations & Media Coverage</strong> – Securing premium placements in top UAE publications to elevate brand image and build strong media presence.
                    <br><br>
                    <strong>Outdoor Advertising (OOH)</strong> – Strategically placing your brand in high-traffic locations to maximize visibility and make a lasting impression.
                </p>
                <h3>Vision</h3>
                <p>
                    To be the go-to growth partner for businesses, helping them elevate their brand and reach their fullest potential.
                </p>
                <h3>Mission</h3>
                <p>
                    To craft innovative, data-driven marketing strategies that help our clients’ brands break through the noise, ensuring consistent growth and unmatched brand recognition.
                </p>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section>
        <section class="section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100"> 
                    
                <div class="row">
                    <div class="col-lg-7">
                        <span class="text-theme">MAKE APPOINTMENT</span>
                        <h3 class="text-bold">Access our services effortlessly</h3>
                        <div class="hide-mobile" style="height: 50px;"></div>

                        @include('web.includes.elements.contact')
                    </div>
                    <div class="col-lg-5">
                        <br>
                        @include('web.includes.elements.contact-form')
                    </div>
                </div>
              </div><!-- End Card Item -->

            </div>

          </div>

        </section>

	</main>


@endsection