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
                <h2 class="post-title">About Celebrity Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                        At Dar Alafkar, we provide businesses the opportunity to collaborate with Bollywood stars and sports personalities through our Celebrity Marketing Dubai service. Celebrities leverage their powerful influence to amplify brand visibility across various platforms, building credibility and fostering strong emotional connections with their fans. We craft tailored strategies to spotlight your brand during product launches and promotional campaigns, ensuring maximum impact and engagement.

                    </p>
                    
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
                    <br>
                    
                    <h4>Why Choose Celebrity Marketing Dubai?</h4>
                    <p>In today’s competitive marketing landscape, Celebrity Marketing Dubai offers businesses a unique opportunity to stand out. By partnering with well-known personalities, brands can achieve market distinction and create lasting impressions. When executed properly, celebrity collaborations increase audience reach, build deeper trust, and strengthen emotional connections with consumers.</p>

                    <h4>Key Benefits of Celebrity Marketing</h4>
                    <p>Through Celebrity Marketing Dubai, you gain several key advantages:</p>
                    <ul>
                        <li>Maximum Exposure: Leverage the attention of popular celebrities to boost your brand's visibility across diverse channels.</li>
                        <li>Increased Trust: Consumers place trust in brands endorsed by celebrities, who already have strong relationships with their fanbase.</li>
                        <li>Reach Diverse Audiences: Celebrity endorsements allow you to appeal to different demographics and regions, broadening your market.</li>
                        <li>Stronger Consumer Connections: Celebrity-backed brands foster deeper emotional bonds with audiences, enhancing loyalty and engagement.</li>
                    </ul>
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection