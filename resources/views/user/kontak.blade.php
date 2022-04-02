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
                    <h1 class="breadcrumb-title mb-0">Kontak Kami</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb d-flex justify-content-center justify-content-sm-end ms-auto">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Beranda</a>
                        </li>
                        <li class="breadcrumb-item active"><span>Kontak</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
                                                    Inner Header -->

    <!--=================================
                                                    Contact Address -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pe-md-5 border-end border-md-none">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15895.078138292582!2d119.4825194!3d-5.1407661!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbfa02069ac5b9f72!2sLSP%20PPHI%20(Penyelenggara%20Produk%20Halal%20Indonesia)!5e0!3m2!1sid!2sid!4v1647765474890!5m2!1sid!2sid"
                        style="border:0; width: 100%; height: 300px;" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-4 ps-md-5 mt-md-0 mt-4">
                    <h6 class="mb-4"><strong> Get in touch with us</strong></h6>
                    <p>With all the distractions in our lives? Willpower is a good start, but it’s very difficult to stay on
                        track simply through willpower.</p>
                    <hr class="my-4 my-lg-5">
                    <p class="mb-0">Pusat Pertokoan Sumber Rejeki No.8 Lt.2 Jl. Perintis Kemerdekaan KM.9
                        Tamalanrea Indah, Makassar. Sulawesi Selatan 90245</p>
                    <div><strong>Telephone:</strong><span class="text-primary ms-1"> 085399463149</span></div>
                    <div><strong>E-mail:</strong><span class="text-primary ms-1">lsppphi@gmai.com</span></div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                                    Contact Address -->
@endsection


@push('js')
@endpush
