@extends('base')

@section('css')
@endsection


@section('content')

    <!--=================================
    Banner -->
    <section class="slider-01">
        <div id="main-slider" class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-01">
                <div class="container">
                  <div class="slide-inner">
                    <div class="row align-items-center">
                      <div class="col-md-6 col-xl-5">
                        <div class="slide-content">
                          <h1 class="animated text-white mb-4" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="0.2s">Interesting, Relevant and Different</h1>
                          <a class="animated btn btn-light" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="0.4s" href="#">Learn more</a>
                        </div>
                      </div>
                      <div class="col-md-5 col-xl-6 offset-xl-1 d-none d-md-block position-relative z-index-1">
                        <img class="animated img-fluid rounded-lg" data-swiper-animation="fadeInRight" data-duration="2.0s" data-delay="0.6s" src="images/slider/home-01/03.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-02">
                <div class="container">
                  <div class="slide-inner">
                    <div class="row align-items-center">
                      <div class="col-md-5 col-lg-5 col-xl-6 d-none d-md-block position-relative z-index-1">
                        <img class="animated img-fluid rounded-lg" data-swiper-animation="fadeInLeft" data-duration="2.0s" data-delay="0.2s" src="images/slider/home-01/02.jpg" alt="">
                      </div>
                      <div class="col-md-7 col-lg-7 col-xl-5">
                        <div class="slide-content me-0 me-lg-5 mt-0 mt-lg-2 mt-xl-4">
                          <h2 class="animated text-white mb-3 pt-0 pt-lg-5" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="0.4s">Outsourced Service In-house Feel</h2>
                          <h5 class="animated text-white mb-4" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="0.6s">Over 500 clients and 5,000 Projects across financial services</h5>
                          <a class="animated btn btn-outline-primary" data-swiper-animation="fadeInUp" data-duration="2.0s" data-delay="0.8s" href="#">Learn more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination swiper-pagination-left"></div>
        </div>
      </section>
      <!--=================================
      Banner -->
  
      <!--=================================
      Feature Info -->
      <section class="space-ptb">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title">
                <span class="pre-title">What we do</span>
                <h2>We do things differently</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-md-0 mb-4">
              <div class="feature-info feature-info-style-1">
                <div class="feature-info-icon">
                  <img class="img-fluid" src="images/service/feature-icon/01.svg" alt="logo">
                </div>
                <div class="feature-info-content">
                  <h6 class="feature-info-title">Licensing Management and Contract Compliance</h6>
                  <p>Make a list of your achievements toward your long-term goal and remind yourself that intentions don’t count, only actions.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4">
              <div class="feature-info feature-info-style-1">
                <div class="feature-info-icon">
                  <img class="img-fluid" src="images/service/feature-icon/02.svg" alt="logo">
                </div>
                <div class="feature-info-content">
                  <h6 class="feature-info-title">Sustainability and Responsible Business Advisory</h6>
                  <p>Do it today. Remind yourself of someone you know who died suddenly and the fact that there is no guarantee that tomorrow.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="feature-info feature-info-style-1">
                <div class="feature-info-icon">
                  <img class="img-fluid" src="images/service/feature-icon/03.svg" alt="logo">
                </div>
                <div class="feature-info-content">
                  <h6 class="feature-info-title">Integrated finance Solutions - Digital Operations</h6>
                  <p>Let success motivate you. Find a picture of what epitomizes success to you and then pull it out when you are in need.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Feature Info -->
@endsection


@push('js')
@endpush
