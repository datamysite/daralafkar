@extends('web.includes.master')

@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug).'.png'}}');">
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
                <h2 class="post-title">About Influencer Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <p>In today’s digital age, brands need more than just traditional advertising to establish a strong presence. Influencer marketing in Dubai has revolutionized the game by driving credibility, brand awareness, and conversions. When executed correctly, Dubai social media influencers can amplify your message, reaching a vast and targeted audience.
                        <br><br>
                    At Dar Alafkar, we focus on one goal: to build, launch, and execute high-impact influencer campaigns that are both effective and measurable. Whether you're working with influencers in Dubai for a product launch, brand awareness, or direct conversions, we take a data-driven approach to maximize your ROI.</p>

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

                    <h4>Influencer Marketing Dubai is Essential for Brands</h4>
                    <p>Dubai, a hub of luxury, innovation, and business growth, provides the perfect environment for influencer-driven campaigns. It’s no surprise that consumers trust recommendations from influencers more than traditional paid advertisements. Here are some distinct advantages that brands can enjoy when working with social media influencers in Dubai:</p>
                    <ul>
                        <li>Higher Engagement and Brand Credibility: Influencers help foster meaningful connections that boost brand credibility.</li>
                        <li>Increased Web Traffic & Lead Generation: A strong influencer campaign drives quality traffic and generates valuable leads.</li>
                        <li>Enhanced Customer Trust & Loyalty: Influencer endorsements build trust and establish long-lasting customer loyalty.</li>
                        <li>Increased Sales & Conversions: Targeted influencer strategies lead to higher sales and measurable conversions.</li>
                    </ul>
                    By partnering with the best influencer marketing agency in Dubai, your brand can easily form authentic connections with a premium audience, enhancing your market presence. 
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection