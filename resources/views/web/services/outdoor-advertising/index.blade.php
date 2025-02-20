@extends('web.includes.master')

@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}');">
            <div class="container">
              <h1>{{$service->name}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('services')}}">Services</a></li>
                  <li class="current">{{$service->name}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->

        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                <h2 class="post-title">Outdoor Advertising in Dubai with Dar Alafkar</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <h4>Maximize Your Brand’s Reach with High-Impact Outdoor Advertising</h4>

                    <p>Dubai's vibrant landscape is the perfect stage for your brand’s message. With strategically placed outdoor advertising, your brand gains maximum exposure, ensuring consistent recognition across key business districts. At Dar Alafkar, we specialize in innovative outdoor advertising solutions designed to elevate your business to new heights.</p>

                    <h4>Why Invest in Outdoor Advertising in Dubai?</h4>
                    <p>Outdoor advertising in the UAE turns your marketing investment into tangible results. From eye-catching digital screens to premium static billboards, your brand remains visible in high-traffic, decision-making zones.
                        <br><br>
                    Our expertise ensures your message reaches the right audience at the right time, building sustained brand awareness. Here’s why outdoor advertising is a game-changer for your business:</p>

                    <br>
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
                            <div>
                              <h4 class="title">{{$val->name}}</h4>
                              <p class="description">{{$val->description}}</p>
                            </div>
                          </div>
                          <!-- End Service Item -->
                        @endforeach
                    </div>
                    <br>

                    <h3>Maximize Brand Awareness with Strategic Outdoor Advertising</h3>
                    
                    <h4>Premium Locations for Maximum Engagement</h4>
                    Your brand deserves the best visibility. Placing your advertisement in prime locations like Sheikh Zayed Road, Downtown Dubai, and Dubai Marina ensures unmatched footfall and high engagement. With these premium spots, your message stays in front of your audience, driving recognition and recall.

                    <h4>Tailored Outdoor Media Campaigns</h4>
                    Every brand has a unique story—outdoor advertising helps you tell it effectively. From static billboards to dynamic LED screens, each format presents a fresh opportunity to connect with your target audience. Well-placed messaging builds consumer trust and encourages engagement.

                    <h4>24/7 Brand Exposure & Consistent Visibility</h4>
                    Unlike digital ads that can be skipped, outdoor advertising remains visible around the clock. Whether day or night, your message is always in sight, ensuring top-of-mind awareness. Premium placements across Dubai’s busiest commercial districts guarantee ongoing brand exposure.

                    <h4>High-Impact Billboard Marketing</h4>
                    Outdoor billboards offer immediate, large-scale visibility. Whether towering above highways or strategically positioned in busy intersections, they place your brand directly in view of thousands every day—enhancing recall value and credibility.

                    <h4>Seamless Integration with Digital Strategies</h4>
                    A powerful campaign merges offline and online marketing. Outdoor advertising directs traffic to your website, social media, and stores. QR codes, hashtags, and interactive elements encourage immediate action, enhancing engagement and conversions.

                    <h4>Turning High Traffic into Revenue</h4>
                    Outdoor media campaigns in Dubai have a proven impact on business growth. UAE residents frequently notice billboards during their daily commute, keeping your brand in their minds for over 18 hours a day. Digital billboards even allow real-time message adjustments for greater impact.

                    <h4>Expand Beyond Dubai – Reach the GCC Market</h4>
                    Dubai is just the beginning. The best outdoor advertising solutions in the GCC extend your brand’s influence beyond city limits, ensuring visibility across the Gulf region for stronger credibility and market expansion.

                    <h4>Outdoor Advertising That Delivers ROI</h4>
                    Every marketing investment should drive results. Outdoor advertising services in the UAE boost brand recall, enhance customer engagement, and increase sales. Whether launching a new product or reinforcing brand awareness, strategic placements deliver measurable growth.

                    <h3>Partner with Dar Alafkar for Unmatched Visibility</h3>
                    <h4>Expert Location Selection for Maximum Reach</h4>
                    Choosing the right location is key to success. Dar Alafkar identifies high-footfall areas in Dubai to ensure your brand reaches the right audience, improving engagement and conversions.

                    <h4>Comprehensive Campaign Execution</h4>
                    From concept development to final execution, Dar Alafkar manages every detail, ensuring eye-catching designs, strategic placement, and ongoing campaign monitoring for optimal impact.

                    <h4>Data-Driven Insights for Smarter Advertising</h4>
                    We use advanced analytics to monitor audience interaction, providing data-driven insights to refine strategies, optimize placements, and maximize advertising effectiveness.

                    <h4>Make Your Brand Unforgettable</h4>
                    Your brand deserves to be seen. Invest in premium outdoor advertising in Dubai and connect with your audience where they live and work.

                    📞 Contact Dar Alafkar today to secure prime advertising space and make your brand impossible to ignore.


                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection