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
                <h2 class="post-title">About Sponsorships</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <p>Brand visibility, credibility enhancement, and targeted audience engagement are three powerful benefits that sponsorships can provide. Dar Alafkar offers sponsorship opportunities in Dubai that align with your brand’s vision and strategic goals. Our team ensures your brand gains optimal visibility by connecting you with key events, influencers, and community projects, delivering maximum exposure and reinforcing your brand’s presence.</p>

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

                    <h4>Our Sponsorship Services</h4>
                    <p>At Dar Alafkar, we offer a variety of sponsorship programs tailored to meet every marketing need:</p>
                    <ul>
                        <li>Event Sponsorships: Gain enhanced brand visibility by associating with prestigious events that attract a broad audience.</li>
                        <li>Media Sponsorships: Partner with leading media platforms to showcase your brand to a wide and diverse audience.</li>
                        <li>Community Sponsorships: Support local neighborhood programs to foster strong relationships and increase brand appreciation among residents.</li>
                        <li>Influencer Sponsorships: Leverage the reach and influence of key industry influencers to amplify your brand message.</li>
                        <li>Corporate Sponsorships: Expand your business reach by collaborating with respected companies, strengthening your corporate presence.</li>
                    </ul>
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection