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
                <h2 class="post-title">About Digital Advertising</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <h4>High-Impact Digital Advertising for Businesses in Dubai</h4>
                    <p>
                        The difference between ordinary ads and high-ROI digital advertising is simple: engagement. It’s not about spending more—it’s about making every dirham count. The right strategy ensures your brand appears where your audience already is—whether they’re streaming, scrolling, or commuting.<br>
                        Success comes from going where the attention is. Whether it’s on Netflix, in an elevator, or on a premium digital screen, Dar Alafkar ensures your brand captures the right audience at the right moment. 

                    </p>
                    <br>
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
                            <div>
                              <h4 class="title">{{$val->name}}</h4>
                              <p class="description">{{$val->description}}</p>
                            </div>
                          </div>
                          <!-- End Service Item -->
                        @endforeach
                    </div>

                    <h4>Why Choose Our Digital Advertising Services in Dubai?</h4>
                    <p>Most ads get ignored. People skip them, scroll past them, or tune them out.

                        But what if your ad wasn’t something to avoid? What if it felt natural, relevant, and even helpful?<br>

                        That’s where our best digital ad campaigns in Dubai make a difference. Instead of shouting into the void, they place your brand in the right moments, with the right message, in front of the right people.<br><br>

                        Your audience already watches streaming content—so meet them there.<br>
                        They already visit malls and hotels—so show up where they walk.<br>
                        They already ride elevators—so make them notice your brand while they wait.<br>

                        This isn’t about disrupting. It’s about fitting seamlessly into their world.</p>
                        <p>We do not run ads for the sake of running ads. Our online marketing solutions in the GCC involve the creation of impactful campaigns that get seen, remembered, and acted on.</p>
                    <h4>Our Digital Advertising Services: Where Visibility Meets Conversion</h4>
                    <ol>
                        <li>
                            <h5>OTT Advertising (Streaming Ads That Do Not Get Skipped)</h5>
                            <p>No one watches traditional TV anymore. They stream. And that’s exactly where your brand needs to be.
                                <br>
                            With OTT advertising, your brand appears on platforms like Netflix, Hulu, and Amazon Prime Video—inside premium content, not buried in social media noise.</p>

                            <h6>Why OTT Works?</h6>
                            <ul>
                                <li>Your Ad Cannot Be Skipped – Unlike YouTube, these ads get watched.</li>
                                <li>Laser-Targeted Reach – Ads are shown based on demographics, interests, and habits.</li>
                                <li>Measured Performance – Every impression, view, and action is tracked.</li>
                                <li>This is digital advertising without the waste.</li>
                            </ul>
                        </li>
                        <li>
                            <h5>DOOH Advertising (Digital Billboards That Actually Work)</h5>
                                <p>Most billboards are background noise. People glance at them and move on.
                                    <br>
                                Our DOOH (Digital Out-of-Home) advertising changes that. High-resolution, animated, and strategically placed in Dubai’s busiest locations, these screens demand attention.</p>

                                <h6>Why DOOH Advertising Delivers?</h6>
                                <ul>
                                    <li>Your Audience is Engaged – No distractions, no skipping.</li>
                                    <li>24/7 Brand Visibility – Ads run around the clock in prime locations.</li>
                                    <li>Elevated Brand Positioning – Your brand is placed next to premium experiences.</li>
                                </ul>
                        </li>
                        <li>
                            <h5>Elevator Advertising (The Ad That Cannot Be Ignored)</h5>
                            <p>What did you do the last time you were in an elevator? Probably nothing. Maybe you checked your phone or stared at the door.
                                <br>
                            Now imagine if, in that silent, distraction-free moment, a well-placed ad caught your eye. That’s why elevator digital advertising works. No one can skip or ignore it.</p>

                            <h6>Why It’s So Effective?</h6>
                            <ul>
                                <li>Captive Audience – People are stuck in a small space with your ad.</li>
                                <li>High Daily Exposure – Office workers, residents, and visitors see it multiple times a day.</li>
                                <li>Hyper-Local Targeting – Choose specific buildings to reach your ideal customers.</li>
                            </ul>
                        </li>
                    </ol>
                    <br>
                    <p>
                        This is not just visibility. It is repeated, unavoidable visibility.
                        <br>
                        Are you ready to make every dirham count? If you’re done wasting money on ads no one notices, it’s time for a smarter approach. Call Dar Alafkar today to launch high-ROI digital advertising in Dubai.
                    </p>
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection