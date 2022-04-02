@extends('base')

@section('css')
@endsection


@section('content')
    <!--=================================
                                                                                                                                                                                                                                                                                                                                    Banner -->
    <section class="slider-03">
        <div id="main-slider" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-01"
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(gambar/profil-back.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="container h-100">
                        <div class="row d-flex h-100 justify-content-center">
                            <div class="col-lg-8 col-md-10 col-sm-12 text-center align-self-center">
                                <div class="banner-content">
                                    <img class="img-fluid" data-swiper-animation="zoomIn" data-duration="2.0s"
                                        data-delay="0.2s" src="{{ asset('finaxo/images/slider/home-03/03.png') }}"
                                        alt="#">
                                    <div class="content">
                                        <h6 class="text-white mb-0 lead fw-bold" data-swiper-animation="fadeInDown"
                                            data-duration="2.0s" data-delay="0.4s">Whatever your business calls, we are here
                                            to help.</h6>
                                        <h2 class="animated mb-0 text-white h1" data-swiper-animation="fadeInDown"
                                            data-duration="2.0s" data-delay="0.6s">Selamat Datang di Website LSP PPHI</h2>
                                        <a class="animated btn btn-light mt-3" data-swiper-animation="fadeInUp"
                                            data-duration="2.0s" data-delay="0.8s" href="#">Profil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slide-03"
                    style="background-image: url(finaxo/images/slider/home-03/03.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="container h-100">
                        <div class="row d-flex h-100 justify-content-start">
                            <div class="col-lg-8 col-md-10 col-sm-12 align-self-center">
                                <div class="banner-content">
                                    <img class="img-fluid" data-swiper-animation="fadeInLeft" data-duration="2.0s"
                                        data-delay="0.2s" src="{{ asset('finaxo/images/slider/home-03/03.png') }}"
                                        alt="#">
                                    <div class="content content-left">
                                        <h6 class="mb-0 lead fw-bold text-white" data-swiper-animation="fadeInDown"
                                            data-duration="2.0s" data-delay="0.4s">Outsourced Service In-house Feel</h6>
                                        <h2 class="animated mb-0 text-white h1" data-swiper-animation="fadeInRight"
                                            data-duration="2.0s" data-delay="0.6s">Better organizations,<br> Better Results.
                                        </h2>
                                        <a class="animated btn btn-dark btn-flat mt-3" data-swiper-animation="fadeInUp"
                                            data-duration="2.0s" data-delay="0.8s" href="#">Get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slide-02"
                    style="background-image: url(finaxo/images/slider/home-03/02.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="container h-100">
                        <div class="row d-flex h-100 justify-content-end">
                            <div class="col-lg-8 col-md-10 col-sm-12 text-end align-self-center">
                                <div class="banner-content">
                                    <img class="img-fluid" data-swiper-animation="fadeInRight" data-duration="1.0s"
                                        data-delay="1.0s" src="{{ asset('finaxo/images/slider/home-03/03.png') }}"
                                        alt="#">
                                    <div class="content content-right">
                                        <h6 class="mb-0 lead fw-bold" data-swiper-animation="fadeInDown"
                                            data-duration="1.50s" data-delay="1.50s">Truly ideal solutions for your
                                            business.</h6>
                                        <h2 class="animated mb-0 h1" data-swiper-animation="fadeInLeft"
                                            data-duration="1.50s" data-delay="2.0s">Finaxo
                                            Finance <br> Consulting</h2>
                                        <a class="animated btn btn-dark btn-flat mt-3" data-swiper-animation="fadeInUp"
                                            data-duration="2.0s" data-delay="2.20s" href="#">Get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i
                    class="fa fa-angle-left" aria-hidden="true"></i> </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="fa fa-angle-right"
                    aria-hidden="true"></i></div>

        </div>
    </section>
    <!--=================================
                                                                                                                                                                                                                                                                                                                                      Banner -->

    <!--=================================
                                                                                                                                                                                                                                                                                                        Results -->
    <section class="py-lg-5 pt-md-0 position-relative">
        <div class="py-lg-5 pt-md-0 half-overlay left-position">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-lg-0 mb-4 position-relative">
                        <div class="row">
                            <div class="col-sm-5 mb-sm-0 mb-4">
                                <img class="img-fluid rounded pb-2" src="{{ asset('finaxo/images/about/03.jpg') }}"
                                    alt="logo">
                                <img class="img-fluid rounded pb-2" src="{{ asset('finaxo/images/about/03.jpg') }}"
                                    alt="logo">
                            </div>
                            <div class="col-sm-7">
                                <img class="img-fluid rounded" src="{{ asset('finaxo/images/about/04.jpg') }}" alt="logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title">
                            <span class="pre-title">Tentang Kami </span>
                            <h2>LSP PPHI </h2>
                        </div>
                        <p class="lead">Lembaga Sertifikasi Profesi (LSP) Penyelenggara Produk Halal Indonesia
                            (PPHI) adalah lembaga yang telah memiliki lisensi dari Badan Nasional Sertifikasi Profesi (BNSP)
                            sejak tahun 2007 (BNSP-LSP-018-ID) untuk melakukan proses pembuktian bahwa seorang tenaga kerja
                            yang profesional benar-benar telah kompeten pada bidangnya. Sehingga tenaga profesional tersebut
                            mendapatkan pengakuan atas Kompetensi Profesi yang dimilikinya baik secara Nasional maupun
                            Internasional.</p>

                        <div class="row">
                            <div class="col-sm-6 mb-sm-0 mb-4">
                                <img class="img-fluid rounded" src="{{ asset('finaxo/images/about/signechar.png') }}"
                                    alt="logo">
                            </div>
                            <div class="col-sm-6">
                                <h6>LSP PPHI</h6>
                                <span class="text-primary">Ketua of LSP PPHI </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                                                                                                                                                                                                                                                                                          Results -->

    <!--=================================
                                                                                                                                                                                                                                                                                                                                      Feature Info -->
    <section class="space-ptb">
        <div class="container" style="background-image: url('finaxo/images/bg/pattern-01.png');">

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="section-title">
                        <span class="pre-title"> </span>
                        <h2>Kebijakan Mutu</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 mb-sm-0 mb-4">
                            <img class="img-fluid rounded" src="{{ asset('logo/lsp.png') }}" alt="logo">
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="feature-info feature-info-style-1">
                        <div class="feature-info-icon">
                            <img class="img-fluid" src="{{ asset('finaxo/images/service/feature-icon/01.svg') }}"
                                alt="logo">
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title">Memberikan jaminan kualitas (quality insurance) dan jaminan
                                keselamatan (saffety insurance) dalam proses sertifikasi kompetensi kerja dari LSP-PPHI yang
                                independen sesuai pedoman BNSP.</h6>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="feature-info feature-info-style-1">
                        <div class="feature-info-icon">
                            <img class="img-fluid" src="{{ asset('finaxo/images/service/feature-icon/02.svg') }}"
                                alt="logo">
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title">Menjadikan LSP-PPHI berkualitas, komitmen dan konsisten
                                terhadap moral, ramah, berintegritas dan professional serta taat hukum.</h6>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--=================================
                                                                                                                                                                                                                                                                                                                                      Feature Info -->
    <!--=================================
                                                                                                                                                                                                                                                                        Services -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="section-title">
                        <span class="pre-title">We're Good At </span>
                        <h2>Skema Sertifikasi </h2>
                    </div>
                    <a class="btn btn-outline-primary" href="{{ url('skema') }}">Daftar Skema</a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-sm-5">
                    <div class="feature-info feature-info-style-2 h-100">
                        <div class="feature-info-icon">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title">SKEMA SERTIFIKASI OKUPASIJURU SEMBELIH HALAL</h6>

                            <div class="d-grid">
                                <a href="{{ url('skema/skema1') }}" class="btn btn-primary">Detail Skema</a>
                            </div>
                        </div>
                        <div class="feature-info-bg" style="background-image: url('finaxo/images/service/01.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-sm-5">
                    <div class="feature-info feature-info-style-2 h-100">
                        <div class="feature-info-icon">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title">SKEMA SERTIFIKASI OKUPASIJURU SEMBELIH HALAL</h6>

                            <div class="d-grid">
                                <a href="{{ url('skema/skema1') }}" class="btn btn-primary">Detail Skema</a>
                            </div>
                        </div>
                        <div class="feature-info-bg" style="background-image: url('finaxo/images/service/01.jpg');"></div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4 mb-sm-5 mb-lg-0">
                    <div class="feature-info feature-info-style-2 h-100">
                        <div class="feature-info-icon">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title">SKEMA SERTIFIKASI OKUPASIJURU SEMBELIH HALAL</h6>

                            <div class="d-grid">
                                <a href="{{ url('skema/skema1') }}" class="btn btn-primary">Detail Skema</a>
                            </div>
                        </div>
                        <div class="feature-info-bg" style="background-image: url('finaxo/images/service/01.jpg');"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4 mb-sm-5 mb-md-0">
                    <div class="feature-info feature-info-style-2 h-100">
                        <div class="feature-info-icon">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title">SKEMA SERTIFIKASI OKUPASIJURU SEMBELIH HALAL</h6>

                            <div class="d-grid">
                                <a href="{{ url('skema/skema1') }}" class="btn btn-primary">Detail Skema</a>
                            </div>
                        </div>
                        <div class="feature-info-bg" style="background-image: url('finaxo/images/service/01.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-info feature-info-style-2 h-100">
                        <div class="feature-info-icon">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title">SKEMA SERTIFIKASI OKUPASIJURU SEMBELIH HALAL</h6>

                            <div class="d-grid">
                                <a href="{{ url('skema/skema1') }}" class="btn btn-primary">Detail Skema</a>
                            </div>
                        </div>
                        <div class="feature-info-bg" style="background-image: url('finaxo/images/service/01.jpg');"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--=================================
                                                                                                                                                                                                                                                                          Services -->

    <!--=================================
                                                                                                                                                                                                                                                                    Case Study -->
    <section class="case-study-section mb-5">
        <div class="space-ptb bg-holder bg-primary" style="background-image: url('finaxo/images/bg/pattern-01.png');">
            <div class="container">
                <div class="section-title text-center pb-5 pb-lg-3">
                    <span class="pre-title text-white">Berita</span>
                    <h2 class="text-white">Berita Terbaru</h2>
                </div>
            </div>
        </div>
        <div class="case-study mt-n6">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
                        <div class="case-study-item">
                            <div class="case-study-img">
                                <img class="img-fluid" src="{{ asset('finaxo/images/case-study/01.jpg') }}" alt="">
                                <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                            </div>
                            <div class="case-study-info">
                                <a class="case-study-category" href="#">Strategy</a>
                                <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Competing in a highly
                                        organized environment</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
                        <div class="case-study-item">
                            <div class="case-study-img">
                                <img class="img-fluid" src="{{ asset('finaxo/images/case-study/02.jpg') }}" alt="">
                                <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                            </div>
                            <div class="case-study-info">
                                <a class="case-study-category" href="#">Marketing</a>
                                <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Promoting innovation
                                        through
                                        property rights</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="case-study-item">
                            <div class="case-study-img">
                                <img class="img-fluid" src="{{ asset('finaxo/images/case-study/03.jpg') }}" alt="">
                                <a href="{{ url('berita/slug') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
                            </div>
                            <div class="case-study-info">
                                <a class="case-study-category" href="#">Finance</a>
                                <h6 class="case-study-title"><a href="{{ url('berita/slug') }}">Responding positively to
                                        a
                                        changing situation</a></h6>
                            </div>
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
