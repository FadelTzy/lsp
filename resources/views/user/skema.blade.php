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
                    <h1 class="breadcrumb-title mb-0">Skema</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb d-flex justify-content-center justify-content-sm-end ms-auto">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Beranda</a>
                        </li>
                        <li class="breadcrumb-item active"><span>Skema</span></li>
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
                            <a href="{{ url('skema/skema1') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a href="{{ url('skema/skema1') }}">Skema sertifikasi Juru
                                    Sembelih Halal </a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                    <div class="case-study-item">
                        <div class="case-study-img">
                            <img class="img-fluid" src="{{ asset('finaxo/images/case-study/03.jpg') }}" alt="">
                            <a href="{{ url('skema/skema1') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a href="{{ url('skema/skema1') }}">Skema sertifikasi Auditor
                                    Halal </a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                    <div class="case-study-item">
                        <div class="case-study-img">
                            <img class="img-fluid" src="{{ asset('finaxo/images/case-study/05.jpg') }}" alt="">
                            <a href="{{ url('skema/skema1') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a href="{{ url('skema/skema1') }}">Skema sertifikasi Penyelia
                                    Halal </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                    <div class="case-study-item">
                        <div class="case-study-img">
                            <img class="img-fluid" src="{{ asset('finaxo/images/case-study/08.jpg') }}" alt="">
                            <a href="{{ url('skema/skema1') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a href="{{ url('skema/skema1') }}">Skema sertifikasi Penerapan
                                    Sistem Jaminan Halal (SJH) </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 pb-2 mb-4">
                    <div class="case-study-item">
                        <div class="case-study-img">
                            <img class="img-fluid" src="{{ asset('finaxo/images/case-study/02.jpg') }}" alt="">
                            <a href="{{ url('skema/skema1') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <div class="case-study-info">
                            <h6 class="case-study-title"><a href="{{ url('skema/skema1') }}">Skema Sertifikasi
                                    Pelaksanaan Analisis Kimia Pendukung Manajemen Halal </a></h6>
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
