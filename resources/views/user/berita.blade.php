  @extends('base')

  @section('css')
  @endsection


  @section('content')
      <!--=================================
                        Inner Header -->
      <div class="inner-header bg-light">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-sm-6 text-center text-sm-start mb-2 mb-sm-0">
                      <h1 class="breadcrumb-title mb-0">Berita</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb d-flex justify-content-center justify-content-sm-end ms-auto">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}"><i
                                      class="fas fa-home me-1"></i>Beranda</a>
                          </li>
                          <li class="breadcrumb-item active"><span>Berita</span></li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>
      <!--=================================
                          Inner Header -->

      <!--=================================
                          Case Study -->
      <section class="space-ptb case-study">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                      <div class="case-study-item">
                          <div class="case-study-img">
                              <img class="img-fluid" src="{{ asset('finaxo/images/case-study/01.jpg') }}" alt="">
                              <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                          </div>
                          <div class="case-study-info">
                              <a class="case-study-category" href="{{ url('berita/slug') }}">Strategy</a>
                              <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Business activities and care
                                      for the environment</a>
                              </h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                      <div class="case-study-item">
                          <div class="case-study-img">
                              <img class="img-fluid" src="{{ asset('finaxo/images/case-study/03.jpg') }}" alt="">
                              <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                          </div>
                          <div class="case-study-info">
                              <a class="case-study-category" href="{{ url('berita/slug') }}">Operations</a>
                              <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">How an administrative system
                                      works in practice</a>
                              </h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                      <div class="case-study-item">
                          <div class="case-study-img">
                              <img class="img-fluid" src="{{ asset('finaxo/images/case-study/05.jpg') }}" alt="">
                              <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                          </div>
                          <div class="case-study-info">
                              <a class="case-study-category" href="{{ url('berita/slug') }}">Marketing</a>
                              <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Measuring the risks in making
                                      investment</a></h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                      <div class="case-study-item">
                          <div class="case-study-img">
                              <img class="img-fluid" src="{{ asset('finaxo/images/case-study/08.jpg') }}" alt="">
                              <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                          </div>
                          <div class="case-study-info">
                              <a class="case-study-category" href="{{ url('berita/slug') }}">People</a>
                              <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">The role of Investment Trusts
                                      in the industry
                                      mark</a></h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                      <div class="case-study-item">
                          <div class="case-study-img">
                              <img class="img-fluid" src="{{ asset('finaxo/images/case-study/02.jpg') }}" alt="">
                              <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                          </div>
                          <div class="case-study-info">
                              <a class="case-study-category" href="{{ url('berita/slug') }}">Strategy</a>
                              <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Competing in a highly
                                      organized environment</a></h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                      <div class="case-study-item">
                          <div class="case-study-img">
                              <img class="img-fluid" src="{{ asset('finaxo/images/case-study/04.jpg') }}" alt="">
                              <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                          </div>
                          <div class="case-study-info">
                              <a class="case-study-category" href="{{ url('berita/slug') }}">Operations</a>
                              <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Investing in natural gas:
                                      digging down into the
                                      risks</a></h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 pb-2 pb-lg-0 mb-4 mb-lg-0">
                      <div class="case-study-item">
                          <div class="case-study-img">
                              <img class="img-fluid" src="{{ asset('finaxo/images/case-study/06.jpg') }}" alt="">
                              <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                          </div>
                          <div class="case-study-info">
                              <a class="case-study-category" href="{{ url('berita/slug') }}">Marketing</a>
                              <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Promoting innovation through
                                      property rights</a></h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 pb-2 pb-lg-0 mb-4 mb-lg-0">
                      <div class="case-study-item">
                          <div class="case-study-img">
                              <img class="img-fluid" src="{{ asset('finaxo/images/case-study/07.jpg') }}" alt="">
                              <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                          </div>
                          <div class="case-study-info">
                              <a class="case-study-category" href="{{ url('berita/slug') }}">Operations</a>
                              <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Responding positively to a
                                      changing situation</a>
                              </h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <div class="case-study-item">
                          <div class="case-study-img">
                              <img class="img-fluid" src="{{ asset('finaxo/images/case-study/09.jpg') }}" alt="">
                              <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                          </div>
                          <div class="case-study-info">
                              <a class="case-study-category" href="{{ url('berita/slug') }}">People</a>
                              <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Using the cost-benefit
                                      research to investments</a>
                              </h6>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--=================================
                          Case Study -->
  @endsection


  @push('js')
  @endpush
