<footer id="footer" class="footer light-background">
    @if(!empty($sub_footer))
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Our Services</h3>
          </div>
        </div>
        <div class="row gy-1">
          @foreach($header_services as $val)
            <div class="col-lg-3">
              <a href="{{URL::to('/'.$val->slug)}}"><i class="{{$val->icon}}"></i> {{$val->name}}</a>
            </div>
            @foreach($val->subServices as $sub)
              <div class="col-lg-3 hide-mobile">
                <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}"><i class="{{$sub->icon}}"></i> {{$sub->name}}</a>
              </div>
            @endforeach
          @endforeach
        </div>
      </div>
    </div>
    @endif
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-2 col-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <!-- <li><a href="{{route('blogs')}}">Blogs</a></li> -->
              <li><a href="{{route('services')}}">Services</a></li>
              <li><a href="{{route('about')}}">About Us</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Support</h4>
            <ul>
              <li><a href="{{route('contact')}}">Contact Us</a></li>
              <li><a href="{{route('faq')}}">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-about">
            <a href="{{URL::to('/')}}" class="logo d-flex align-items-center" aria-label="Home">
              <img src="{{URL::to('/public/dar-logo-white.png')}}" alt="Footer Logo">
            </a>
            <p>Intelligent Marketing, Exceptional Results.<br><br>Increase Brand Exposure, Optimize Campaign Success</p>
            
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start" style="padding: 30px 20px;">
            <h4>Subscribe Our Newsletter</h4>
            <p>Stay Ahead in the World of Marketing! <br>Sign up now and get the edge!</p>
            <form id="newsletterForm" action="{{route('newsletter.subscribe')}}">
              @csrf
              <div class="row footer-subscribe">
                <div class="col-lg-9">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Your Email" required>
                </div>
                <div class="col-lg-3">
                  <button class="btn btn-lg btn-primary subscribe-btn">SUBSCRIBE</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container copyright text-center">
      <p><span>Copyright ©</span> <a href="https://daralafkarmarketingllc.com/" target="_blank"><strong>Dar Alafkar Marketing LLC.</strong></a> {{date('Y')}}. <span>All Rights Reserved.</p>
    </div>

  </footer>


  <!-- Preloader -->
  <div id="preloader"></div>