<!--=================================
    Header -->
<header class="header header-sticky default">
    <div class="topbar">
        <div class="container">
            <div class="topbar-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="d-block d-md-flex align-items-center text-center">
                            <div class="me-3 d-inline-block">
                                <a href="mailto:info@example.com"><i
                                        class="fas fa-envelope me-2 fa-flip-horizontal"></i>info@example.com</a>
                            </div>
                            <div class="me-auto d-inline-block">
                                <a href="tel:1-800-555-1234"><i class="fa fa-phone me-2 fa fa-flip-horizontal"></i>(007)
                                    123 456 7890</a>
                            </div>
                            <div class="social d-inline-block">
                                <ul class="list-unstyled">
                                    <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                                    <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                                    <li><a href="#"> <i class="fab fa-pinterest-p"></i> </a></li>
                                    <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-static-top navbar-expand-xl">
        <div class="container position-relative">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i
                    class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="index.html">
                <img class="img-fluid" src="{{ asset('logo/lsp.png') }}" alt="logo">
            </a>
            <div class="navbar-collapse collapse justify-content-end justify-content-xl-center">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown @if (Request::segment(1) == '') active @endif">
                        <a class="nav-link" href="{{ url('/') }}" id="navbarDropdown"
                            role="button">Beranda</a>

                    </li>
                    <li class="dropdown nav-item @if (Request::segment(1) == 'profil') active @endif">
                        <a class="nav-link" href="{{ url('profil') }}">Profil</a>

                    </li>
                    <li class="dropdown nav-item @if (Request::segment(1) == 'skema') active @endif">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Daftar Skema<i
                                class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('skema/skema1') }}"><span>SKEMA SERTIFIKASI
                                        OKUPASIJURU
                                        SEMBELIH HALAL</span></a></li>
                            <li><a class="dropdown-item" href="{{ url('skema/skema1') }}"><span>SKEMA SERTIFIKASI
                                        OKUPASI
                                        AUDITOR HALAL
                                    </span></a></li>
                            <li><a class="dropdown-item" href="{{ url('skema/skema1') }}"><span>Skema sertifikasi
                                        Okupasi Penyelia Halal
                                    </span></a></li>
                            <li><a class="dropdown-item" href="{{ url('skema/skema1') }}"><span>Skema sertifikasi
                                        Klaster Penerapan Sistem Jaminan Halal (SJH)
                                    </span></a></li>
                            <li><a class="dropdown-item" href="{{ url('skema/skema1') }}"><span>Skema sertifikasi
                                        klaster Pelaksanaan Analisis Kimia Pendukung Manajemen Halal
                                    </span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Informasi<i
                                class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('tuk') }}"><span>Tempat Uji Kompetensi
                                        (TUK)</span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>Pengumuman
                                    </span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>Prosedur Uji Kompetensi
                                    </span></a></li>
                            <li><a class="dropdown-item" href="{{ route('faq') }}"><span>FAQ
                                    </span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item  @if (Request::segment(1) == 'berita') active @endif">
                        <a class="nav-link" href="{{ asset('berita') }}">Berita</a>
                    </li>
                    <li class="dropdown nav-item @if (Request::segment(1) == 'kontak') active @endif">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Unduh Formulir<i
                                class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="casestudy.html"><span>Formulir Pendaftaran Skema
                                        Okupasijuru
                                        Sembelih Halal</span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>Formulir Pendaftaran Skema
                                        Okupasi Auditor Halal
                                    </span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>Formulir Pendaftaran Skema
                                        Okupasi Penyelia Halal
                                    </span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>Formulir Pendaftaran Skema
                                        Klaster Penerapan Sistem Jaminan Halal (SJH)
                                    </span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>Formulir Pendaftaran Skema
                                        klaster Pelaksanaan Analisis Kimia Pendukung Manajemen Halal
                                    </span></a></li>
                            <li><a class="dropdown-item" href="casestudy.html"><span>SKKNI Skema
                                        Okupasijuru
                                        Sembelih Halal</span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>SKKNI Skema
                                        Okupasi Auditor Halal
                                    </span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>SKKNI Skema
                                        Okupasi Penyelia Halal
                                    </span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>SKKNI Skema
                                        Klaster Penerapan Sistem Jaminan Halal (SJH)
                                    </span></a></li>
                            <li><a class="dropdown-item" href="casestudy-single.html"><span>SKKNI Skema
                                        klaster Pelaksanaan Analisis Kimia Pendukung Manajemen Halal
                                    </span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item header-search">
                        <div class="search">
                            <a class="search-btn not_click" href="javascript:void(0);"></a>
                            <div class="search-box not-click">
                                <form action="https://themes.potenzaglobalsolutions.com/html/finaxo/search.html"
                                    method="get">
                                    <input type="text" class="not-click form-control" name="search"
                                        placeholder="Search.." autofocus>
                                    <button class="search-button" type="submit"> <i
                                            class="fa fa-search not-click"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <a class="btn btn-primary btn-md me-5 me-xl-0 d-none d-sm-block" href="#"> LOGIN </a>
        </div>
    </nav>
</header>
<!--=================================
    Header -->
