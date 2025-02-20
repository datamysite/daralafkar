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
                <h2 class="post-title">Public Relations (PR) Coverage </h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                        In today’s digital landscape, securing Public Relations (PR) coverage is essential for businesses looking to establish credibility and authority. Increased visibility not only enhances brand trust but also positions you as a leader in your industry.
                        <br>
                        At Dar Alafkar, we specialize in securing high-impact PR coverage across 30 leading media houses in the UAE. Through powerful storytelling and strategic media placements, we ensure your brand reaches the right audience, strengthening your reputation and influence.
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

                    <h4>Our Public Relations (PR Coverage) Services</h4>
                    <p>Here's what we offer: </p>
                    <ol>
                        <li><strong>Media Relations</strong>: Our team has strong relationships with prominent journalists, editors, and influential media outlets across the UAE. We specialize in securing brand placements in leading newspapers, top magazines, and digital platforms, significantly boosting your brand's visibility. Our expertise includes securing coverage in key publications like Gulf News and Khaleej Times, helping businesses achieve premium exposure.</li>
                        <li><strong>Press Release Writing & Distribution</strong>: We craft compelling press releases that capture media attention and generate extensive PR coverage. Our tailored approach ensures your organization gains enhanced brand awareness and drives engagement by distributing press releases to specialized media channels.</li>
                        <li><strong>Crisis Communication</strong>: Reputation management is essential. We provide expert crisis communication services to manage public perception and mitigate negative exposure in challenging situations. Our team takes responsibility for preserving your brand's integrity and credibility in times of crisis.</li>
                        <li><strong>Leadership & Executive Positioning</strong>: A strong PR strategy goes beyond advertising—it positions your executive leaders as industry influencers. Through interviews, opinion pieces, and guest articles in top publications like Forbes, we help build your leadership’s authority and establish them as trusted voices in your sector.</li>
                    </ol>

                    
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection