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
                <h2 class="post-title">About Transit Media</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <h4>Make Your Brand Unmissable with Transit Media in the UAE</h4>
                    <p>Dubai is fast-paced, and so are its people. Commuters and tourists are always on the move, scanning their surroundings as they rush from place to place. That's where transit media in the UAE comes into play. By positioning your brand in front of them at the right moment, you can catch their attention when they least expect it but need it the most.
                        <br>
                    At Dar Alafkar, we transform everyday journeys into powerful brand experiences. Whether it’s a taxi on Sheikh Zayed Road, a metro train packed with professionals, or a bus winding through busy streets, each vehicle carries your message, ensuring your brand is seen and acted upon.</p>


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

                    <h4>Why Transit Advertising in Dubai Works</h4>
                    <p>In a world where people ignore digital ads—scrolling past them, blocking them, or simply tuning them out—transit advertising offers a refreshing alternative. A bold, beautifully designed ad on a bus or a sleek, unmissable wrap on a metro is impossible to ignore. It becomes an integral part of their daily routine in a city that never slows down.</p>
                    <ul>
                        <li>You Can’t Skip It: No “close” button. No ad blockers. Just pure, in-your-face brand visibility.</li>
                        <li>People Actually Pay Attention: Whether stuck in traffic or waiting for a bus, commuters can’t help but notice their surroundings. Your brand becomes a familiar part of their day.</li>
                        <li>It Reaches the Right People: From a CEO heading to a meeting to a shopper planning their next big purchase, our transit media campaigns in the UAE place your message exactly where it matters most.</li>
                    </ul>
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection