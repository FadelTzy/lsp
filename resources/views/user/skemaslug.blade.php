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
                    <h1 class="breadcrumb-title mb-0">Skema Sertifikasi Pelaksanaan Analisis Kimia Pendukung Manajemen Halal
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb d-flex justify-content-center justify-content-sm-end ms-auto">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Beranda</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ url('skema') }}">Skema</a></li>
                        <li class="breadcrumb-item active"><span>Skema Sertifikasi Pelaksanaan Analisis Kimia Pendukung
                                Manajemen Halal </span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <!--=================================
                                                                                                                                                                                                                                                                                                                                                                                                              Classic Left Sidebar -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-1 order-lg-1">
                    <div class="blog-post blog-details">

                        <div class="blog-post-content">
                            <h4 class="">Detail Skema</h4>
                            <h6>Kode Skema : </h6>
                            <p>skema-1-5/2022</p>
                            <h6>Judul Skema : </h6>
                            <p>Skema Sertifikasi Pelaksanaan Analisis Kimia Pendukung Manajemen Halal</p>
                            <h6>Ringkasan Skema : </h6>
                            <div class="blog-post-details">
                                <p>Skema Sertifikasi Pelaksanaan Analisis Kimia Pendukung Manajemen Halal adalah skema
                                    sertifikasi klaster yang dikembangkan oleh Komite Skema Lembaga Sertifikasi Profesi
                                    Penyelenggara Produk Halal Indonesia (LSP PPHI) untuk memenuhi kebutuhan sertifikasi
                                    kompetensi kerja di LSP PPHI. Kemasan yang digunakan mengacu pada Standar Kompetensi
                                    Kerja Nasional Indonesia berdasarkan Keputusan Menteri Ketenagakerjaan Republik
                                    Indonesia Nomor 216 Tahun 2017 Tentang Penetapan Standar Kompetensi Kerja Nasional
                                    Indonesia Kategori Aktivitas Profesional, Ilmiah, dan Teknis Golongan Pokok Aktivitas
                                    Arsitektur Dan Keinsinyuran; Analisis dan Uji Teknis Bidang Analisis Kimia Sub Bidang
                                    Bioassay dan Analisis Terkait Keamanan Kehalalan Pangan. Skema sertifikasi ini digunakan
                                    sebagai acuan pada pelaksanaan asesmen oleh Asesor kompetensi LSP PPHI dan memastikan
                                    kompetensi pada pekerjaan Pelaksanaan Analisis Kimia Pendukung Manajemen Halal.</p>



                            </div>
                            <h6>Daftar Unit Kompetensi : </h6>

                            <div class="d-sm-flex bg-light border-radius  mb-md-5 mb-4">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kode Unit</th>
                                            <th scope="col">Judul Unit Kompetensi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>M.71AKA06.017.1</td>
                                            <td>Melakukan Deteksi Porcine dengan Porcine Rapid Test Kit</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>M.71AKA06.024.1</td>
                                            <td>Melakukan Analisis Porcine Dengan Polymerase Chain Reaction (PCR)</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>M.71AKA06.010.1</td>
                                            <td>Melakukan Analisis Kandungan Alkohol Dalam Sampel Pangan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>M.71AKA06.019.1</td>
                                            <td>Melakukan Analisis Kandungan Porcine</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>M.71AKA06.012.1</td>
                                            <td>Melakukan Analisis Menggunakan Kromatograf Cair - Spektrometer Massa (LC-MS)
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="blog-post-footer d-flex flex-wrap align-items-center mt-5">

                                <div class="social-info ms-auto mt-2 mt-sm-0">
                                    <a href="#"><i class="fas fa-share-alt me-2"></i>Share</a>
                                    <ul class="social-share">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-4 mt-sm-5 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="widget">
                            <h6 class="mb-3">Pendaftaran </h6>

                            <button type="submit" class=" input-with-btn btn btn-sm btn-primary"> Daftar Skema <i
                                    class="fa fa-file"></i></button>
                            <button type="submit" class=" input-with-btn btn btn-sm btn-primary"> SKKNI <i
                                    class="fa fa-file"></i></button>
                        </div>
                        <div class="widget">
                            <h6 class="mb-3">Kontak Kami </h6>
                            <div class="row">
                                <div class="col-12 d-flex mb-3">
                                    <div class="text-primary me-3">
                                        <i class="fas fa-2x fa-map-signs"></i>
                                    </div>
                                    <div class="recent-post-info">
                                        <span>Jl. Perintis Kemerdekaan KM.9 Tamalanrea Indah</span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex mb-3">
                                    <div class="text-primary me-3">
                                        <i class="far fa-2x fa-envelope"></i>
                                    </div>
                                    <div class="recent-post-info">
                                        <span>lsppphi@gmailxo.com<br> Mon-Fri 8:30am-6:30pm</span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="text-primary me-3">
                                        <i class="fas fa-2x fa-headphones-alt"></i>
                                    </div>
                                    <div class="recent-post-info">
                                        <span>085399463149<br> 24 X 7 online support</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget mb-0">
                            <div class=" me-3">
                                <img style="width: 75%" class="img-fluid" src="{{ asset('logo/lsp.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                                                                                                                                                                                                                                                                                                                                                                                                Classic Left Sidebar -->
@endsection


@push('js')
@endpush
