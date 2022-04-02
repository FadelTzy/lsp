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
                    <h1 class="breadcrumb-title mb-0">Profil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb d-flex justify-content-center justify-content-sm-end ms-auto">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Beranda</a>
                        </li>
                        <li class="breadcrumb-item active"><span>Profil</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
                                                                                                                                                                Inner Header -->
    <!--=================================
                                                                                                              Tab -->
    <section class="space-ptb">
        <div class="container">
            <div class="row d-flex align-content-center flex-wrap">

                <div class="col-md-12 align-self-center ps-3 ps-lg-12">
                    <div class="row">
                        <div class="col-md-5 col-lg-4 col-xl-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-who-we-are-tab" data-bs-toggle="pill"
                                    href="#v-pills-who-we-are" role="tab" aria-controls="v-pills-who-we-are"
                                    aria-selected="true">LSP PPHI</a>
                                <a class="nav-link" id="v-pills-our-vision-tab" data-bs-toggle="pill"
                                    href="#v-pills-our-vision" role="tab" aria-controls="v-pills-our-vision"
                                    aria-selected="false">Visi</a>
                                <a class="nav-link" id="v-pills-our-mission-tab" data-bs-toggle="pill"
                                    href="#v-pills-our-mission" role="tab" aria-controls="v-pills-our-mission"
                                    aria-selected="false">Misi</a>
                                <a class="nav-link" id="v-pills-our-history-tab" data-bs-toggle="pill"
                                    href="#v-pills-our-history" role="tab" aria-controls="v-pills-our-history"
                                    aria-selected="false">Kebijakan Mutu</a>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 col-xl-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-who-we-are" role="tabpanel"
                                    aria-labelledby="v-pills-who-we-are-tab">
                                    <div class="row">
                                        <p>Untuk memberi kepastian hukum tentang jaminan produk halal yang termaktub dalam
                                            UU Nomor 33 Tahun 2014 dan UU Nomor 11 Tahun 2020 tentang Cipta Kerja yang
                                            diikuti dengan terbitnya PP Nomor 39 Tahun 2021 tentang Penyelenggaraan Jaminan
                                            Produk Halal yang mewajibkan Negara menjamin setiap pemeluk agama Islam
                                            mendapatkan perlindungan dan jaminan tentang kehalalan suatu produk.</p>
                                        <p>
                                            Tahap pertama, kewajiban ini akan diberlakukan terlebih dahulu kepada produk
                                            makanan dan minuman, serta produk jasa yang terkait dengan keduanya. Prosesnya
                                            sertifikasi akan berlangsung dari 17 Oktober 2019 sampai 17 Oktober 2024. Tahap
                                            kedua, kewajiban sertifikasi akan diberlakukan untuk selain produk makanan dan
                                            minuman, tahap kedua ini akan dimulai 17 Oktober 2021.</p>
                                        <p>
                                            Agar penerapan sistem jaminan halal pada industri makanan dan minuman dapat
                                            berjalan dengan baik, diperlukan SDM yang memiliki kualifikasi sesuai dengan
                                            Standar Kompetensi Kerja Nasional Indonesia yang ditetapkan oleh pemerintah.
                                            Berdasarkan UU No. 13 tahun 2003 tentang Ketenagakerjaan dan PP Nomor 10 tahun
                                            2018 BNSP adalah Lembaga otoritas sertifikasi kompetensi personil yang dapat
                                            didelegasikan kepada Lembaga Sertifikasi Profesi (LSP) sesuai bidang kompetensi
                                            terkait setelah mendapatkan lisensi dari BNSP.</p>
                                        <p>
                                            Berdasarkan hal tersebut di atas, maka beberapa praktisi, akademisi dan asosiasi
                                            bidang halal serta lembaga pelatihan kerja bidang halal sepakat mendirikan
                                            Lembaga Sertifikasi Profesi (LSP) Penyelenggara Produk Halal Indonesia (PPHI).
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-our-vision" role="tabpanel"
                                    aria-labelledby="v-pills-our-vision-tab">
                                    <h6 class="mb-3">Visi</h6>
                                    <p>Menjadi Lembaga Sertifikasi Profesi di bidang halal yang professional, unggul,
                                        terpercaya dan berdaya saing global di tahun 2030.</p>

                                </div>
                                <div class="tab-pane fade" id="v-pills-our-mission" role="tabpanel"
                                    aria-labelledby="v-pills-our-mission-tab">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <h6 class="mb-3">Misi </h6>
                                            <ul class="list">
                                                <li><i class="fas fa-check"></i> Menyelenggarakan sertifikasi kompetensi
                                                    bagi penyelenggara produk halal yang professional dan independent </li>
                                                <li><i class="fas fa-check"></i>Memelihara dan meningkatkan kompetensi
                                                    personil LSP untuk mendukung penerapan pelayanan prima </li>
                                                <li><i class="fas fa-check"></i> Memelihara dan mengembangkan skema
                                                    sertifikasi kompetensi sesuai kebutuhan industri </li>
                                                <li><i class="fas fa-check"></i> Memelihara dan mengembangkan tempat uji
                                                    kompetensi sesuai kebutuhan skema sertifikasi. </li>
                                                <li><i class="fas fa-check"></i> Mengembangkan system manajemen berbasis
                                                    IT untuk peningkatkan kinerja pelayanan </li>
                                                <li><i class="fas fa-check"></i> Menjalin kerjasama dengan berbagai pihak
                                                    dalam rangka mewujudkan Indonesia kompeten dan ekosistem halal</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-our-history" role="tabpanel"
                                    aria-labelledby="v-pills-our-history-tab">
                                    <h6 class="mb-3">Kebijakan Mutu</h6>
                                    <ul class="list">
                                        <li><i class="fas fa-check"></i> 1. Memberikan jaminan kualitas (quality
                                            insurance) dan jaminan keselamatan (saffety insurance) dalam proses sertifikasi
                                            kompetensi kerja dari LSP-PPHI yang independen sesuai pedoman BNSP </li>
                                        <li><i class="fas fa-check"></i>M2. Menjadikan LSP-PPHI berkualitas, komitmen dan
                                            konsisten terhadap moral, ramah, berintegritas dan professional serta taat hukum
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                                                                                              Tab -->



    <!--=================================
                                                                                                              Team -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <span class="pre-title">List of people</span>
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel team owl-nav-bottom-center" data-nav-dots="false" data-nav-arrow="true"
                        data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xx-items="1"
                        data-space="30" data-autoheight="true">
                        <div class="item">
                            <div class="team team-style-2">
                                <div class="team-img">
                                    <img class="img-fluid" src="{{ asset('finaxo/images/team/01.jpg') }}" alt="">
                                </div>
                                <div class="team-info">
                                    <h6 class="team-title">Michael Bean</h6>
                                    <span class="team-designation">Marketing Expert</span>
                                    <a class="btn-link" href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team team-style-2">
                                <div class="team-img">
                                    <img class="img-fluid" src="{{ asset('finaxo/images/team/02.jpg') }}" alt="">
                                </div>
                                <div class="team-info">
                                    <h6 class="team-title">Mellissa Doe</h6>
                                    <span class="team-designation">Sales and Marketing</span>
                                    <a class="btn-link" href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team team-style-2">
                                <div class="team-img">
                                    <img class="img-fluid" src="{{ asset('finaxo/images/team/05.jpg') }}" alt="">
                                </div>
                                <div class="team-info">
                                    <h6 class="team-title">Alice Williams</h6>
                                    <span class="team-designation">Marketing Expert</span>
                                    <a class="btn-link" href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team team-style-2">
                                <div class="team-img">
                                    <img class="img-fluid" src="{{ asset('finaxo/images/team/03.jpg') }}" alt="">
                                </div>
                                <div class="team-info">
                                    <h6 class="team-title">Paul Flavius</h6>
                                    <span class="team-designation">Tax Consultant</span>
                                    <a class="btn-link" href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team team-style-2">
                                <div class="team-img">
                                    <img class="img-fluid" src="{{ asset('finaxo/images/team/05.jpg') }}" alt="">
                                </div>
                                <div class="team-info">
                                    <h6 class="team-title">Alice Williams</h6>
                                    <span class="team-designation">Marketing Expert</span>
                                    <a class="btn-link" href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                                                                                              Team -->
@endsection


@push('js')
@endpush
