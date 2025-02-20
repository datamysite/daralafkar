@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    <section id="service-cards" class="faq-section service-cards section">

	      <div class="container">

	        <div class="row gy-4 first-row">
	          <div class="col-lg-9" data-aos="fade-up" data-aos-delay="400">

                <div class="faq " id="accordion">
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">1</span>What services does Dar Alafkar offer in Dubai, UAE?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                            <div class="card-body">
                                <p>Dar Alafkar provides a wide range of marketing and advertising services tailored to businesses in Dubai and across the UAE. Our offerings include digital advertising, outdoor advertising, public relations, influencer marketing, event marketing, transit media, creative advertising, and lead generation. Each service is crafted to meet the unique needs of our clients, ensuring maximum brand visibility, audience engagement, and business growth in the ever-evolving market.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">2</span>How can Dar Alafkar help my business grow in Dubai?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                            <div class="card-body">
                                <p>At Dar Alafkar, we specialize in crafting customized marketing strategies designed specifically for the Dubai market. By leveraging cutting-edge techniques in digital advertising, influencer marketing, and public relations, we help businesses enhance brand awareness, drive traffic, and ultimately boost sales. Our approach ensures that each campaign is perfectly aligned with the dynamic needs of the market, delivering measurable and impactful results.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge">3</span>Does Dar Alafkar work with small businesses in Dubai?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                            <div class="card-body">
                                <p>Yes, We work with businesses of all sizes, from startups to established enterprises, providing scalable solutions that align with both your budget and goals. Whether you're just starting out or looking to expand your market presence, our tailored services ensure that you get the best return on your investment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">4</span>What industries does Dar Alafkar serve in the UAE?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                            <div class="card-body">
                                <p>We serve a diverse range of industries, including retail, real estate, automotive, hospitality, technology, healthcare, and more. Our tailored marketing solutions are designed to meet the unique needs of each sector, ensuring maximum effectiveness in reaching and engaging your target audience.</p>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="faqHeading-5">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                    <span class="badge">5</span>Can Dar Alafkar manage PR campaigns for businesses in Dubai?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                            <div class="card-body">
                                <p>Absolutely! We offer comprehensive PR coverage, including placements in leading UAE publications like Gulf News, Khaleej Times, and Arabian Business, to enhance your brand's reputation and visibility. Our team ensures your message reaches the right audience through effective storytelling and strategic media placements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                    <br><br>
                    <h4>Contact Us</h4>
                    <p style="padding: 10px 0px;">If you have more questions or need tailored marketing solutions for your business in Dubai, reach out to <a href="{{route('contact')}}">Dar Alafkar</a> today!</p>
                    <br><br>
	          </div><!-- End Card Item -->

                <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
                </div>
	        </div>

	      </div>

	    </section>


	</main>


@endsection