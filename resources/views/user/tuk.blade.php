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
                    <h1 class="breadcrumb-title mb-0">Tempat Uji Kompetensi (TUK)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb d-flex justify-content-center justify-content-sm-end ms-auto">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Beranda</a>
                        </li>
                        <li class="breadcrumb-item active"><span>TUK</span></li>
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
                            <img class="img-fluid" src="{{ asset('gambar/polipangkep.jpeg') }}" alt="">
                            <a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9"><i
                                    class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9">TUK
                                    PT. Ahmad Putra
                                    Sejahtera Training Center, Makassar</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                    <div class="case-study-item">
                        <div class="case-study-img">
                            <img class="img-fluid" src="{{ asset('gambar/polipangkep.jpeg') }}" alt="">
                            <a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9"><i
                                    class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9">TUK
                                    Halal Science
                                    Center
                                    Politeknik Pertanian Negeri Pangkep, Pangkep</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                    <div class="case-study-item">
                        <div class="case-study-img">
                            <img class="img-fluid" src="{{ asset('gambar/polipangkep.jpeg') }}" alt="">
                            <a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9"><i
                                    class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9">TUK
                                    RPH Manggala,
                                    Makassar</a>
                            </h6>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="case-study-item">
                        <div class="case-study-img">
                            <img class="img-fluid" src="{{ asset('gambar/polipangkep.jpeg') }}" alt="">
                            <a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9"><i
                                    class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9">TUK
                                    Politeknik
                                    Negeri Ujung
                                    Pandang, Makassar</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="case-study-item">
                        <div class="case-study-img">
                            <img class="img-fluid" src="{{ asset('gambar/polipangkep.jpeg') }}" alt="">
                            <a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9"><i
                                    class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a target="_blank" href="https://goo.gl/maps/bhx9e6KpUEdtDzzH9">TUK
                                    Fakultas Sains
                                    UIN
                                    Alauddin, Makassar</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                                                                                                                                Case Study -->
    <section class="space-pb ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-light text-center p-4 p-md-5">
                        <h4>Interested in becoming a partner?</h4>
                        <p>Interested in becoming a partner? We would love to know more about your company and why you
                            believe a partnership would be profitable!</p>
                        <a class="btn btn-primary btn-flat mt-3" href="{{ url('kontak') }}">Kontak Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('js')
@endpush
