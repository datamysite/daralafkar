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
                <h2 class="post-title">About Lead Generation</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <p>Dar Alafkar specializes in crafting custom-made lead-generation strategies to help businesses thrive in Dubai and across the UAE. Lead Generation Dubai serves as the vital connection system that drives businesses toward potential customers eager to purchase their products. By combining advanced tools, strategic approaches, and data analytics, we ensure a steady stream of valuable leads that can help your business grow and succeed.</p>
                    
                    <br>
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-8 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
                            <div>
                              <h4 class="title">{{$val->name}}</h4>
                              <p class="description">{{$val->description}}</p>
                            </div>
                          </div>
                          <!-- End Service Item -->
                        @endforeach
                    </div>

                    <h4>Why Choose Dar Alafkar for Lead Generation Dubai?</h4>
                    <ul>
                        <li>Customised Campaigns: Our Lead Generation Dubai services focus on creating tailored campaigns that deliver exceptional results based on your specific business needs. Unlike standard marketing methods, we develop unique online strategies designed to align with your industry and target market.</li>
                        <li>High-Quality Leads: At Dar Alafkar, we prioritize quality over quantity. Our Lead Generation Dubai approach is focused on attracting the right audience, ensuring that each lead has the potential to convert into a customer.</li>
                        <li>Data-Driven Approach: We employ analytical data strategies to continuously refine and enhance your lead-generation efforts, making your marketing smarter and more effective.</li>
                        <li>Proven Results: With years of experience, Dar Alafkar has successfully expanded business customer bases using proven Lead Generation Dubai methods, delivering sustainable growth and long-term success.</li>
                    </ul>
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection