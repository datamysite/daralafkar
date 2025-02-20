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
                <h2 class="post-title">About Creative and CGI Advertising</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    
                    <p>Dar Alafkar uses Creative and CGI Advertising Dubai to transform static marketing into innovative interactive experiences. Our team blends cutting-edge CGI technology with creative expertise to craft stunning ads that captivate audiences and enhance brand visibility. By turning hyper-realistic 3D animations and interactive AR and VR ads into immersive solutions, Dar Alafkar ensures your brand leaves a lasting impression in the minds of your audience.</p>

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

                    
                    <h4>Why Choose Creative and CGI Advertising Dubai?</h4>
                    <p>Dar Alafkar stands out as a trusted provider of Creative Advertising Services Dubai, delivering customized and impactful campaigns for Dubai-based brands. Our approach blends strategic effectiveness with visual excellence, combining creative design and advanced technological capabilities to craft compelling advertisements.</p>
                    <ul>
                        <li>Visual Excellence: Our ads showcase stunning visuals, leveraging advanced CGI and animation technology.</li>
                        <li>Expert Designers and Animators: Our team of specialized designers and animators ensures every ad is visually captivating.</li>
                        <li>Customized Solutions: We create tailored strategies that align with your core brand identity and marketing objectives.</li>
                        <li>Long-lasting Impact: Every campaign we produce creates memorable material that resonates with your target audience.</li>
                    </ul>
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection