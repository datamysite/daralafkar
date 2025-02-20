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
                <h2 class="post-title">About Event Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <h4>Maximise the Impact of Your Brand with Event Marketing in Dubai</h4>
                    <p>In the competitive market of Dubai, visibility is key. Event marketing goes beyond hosting simple gatherings—it creates memorable experiences that leave a lasting impression. Whether it's a corporate event or a product launch, well-executed campaigns drive engagement and enhance your brand’s identity.
                        <br>
                    At Dar Alafkar, we design impactful event strategies that are tailored to your specific audience. With our expertise, we ensure your event not only captures attention but also delivers measurable results, helping your brand stand out in the market.</p>

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

                    
                    <h4>Why Invest in Event Marketing in Dubai?</h4>
                    <p>Dubai stands as a bustling business hub of innovation and connection, making it the ideal place for impactful event marketing. Corporate gatherings in the city offer unparalleled opportunities to network with influential professionals. Our strategic event planning transforms ordinary meetings into powerful marketing tools.
                        <br><br>
                    Meticulously crafted corporate event marketing in Dubai delivers exceptional results:</p>
                    <ul>
                        <li>Brand Awareness: Create memorable experiences that resonate with attendees and spark ongoing conversations.</li>
                        <li>Lead Generation: Attract key decision-makers and potential investors through targeted networking opportunities.</li>
                        <li>Customer Engagement: Design interactive sessions that foster meaningful relationships and build trust.</li>
                        <li>Return on Investment: Implement marketing strategies that turn connections into long-term partnerships.</li>
                    </ul>
                    <p>
                        At Dar Alfkar, we believe successful corporate events go beyond traditional networking. They serve as strategic platforms for market presence, credibility, and expanding professional opportunities in Dubai's dynamic business environment.
                    </p>
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection