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
                    <h1 class="breadcrumb-title mb-0">How to create and operate a successful Business</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb d-flex justify-content-center justify-content-sm-end ms-auto">
                        <li class="breadcrumb-item"><a href="{{ url('berita') }}"><i
                                    class="fas fa-home me-1"></i>Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('berita') }}">Berita</a></li>
                        <li class="breadcrumb-item active"><span>How to create and operate a successful Business</span></li>
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
                        <div class="blog-post-image">
                            <img class="img-fluid" src="{{ asset('finaxo/images/blog/09.jpg') }}" alt="">
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-info">
                                <div class="blog-post-author">
                                    <a href="#" class="btn btn-link"><i class="far fa-folder-open"></i>Marketing</a>
                                </div>
                                <div class="blog-post-date"><a href="#"><i class="far fa-calendar"></i>Feb 4, 2021 </a>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <p>I coach my clients to practice the 3 D’s – Defer, Delegate or Delete. Can the particular
                                    activity be done later? Defer it! Can it be done by someone else? Delegate it! Does it
                                    need to be done at all? If not, consider deleting it! Posing these questions will help
                                    to keep you focused on what is truly important</p>
                                <p class="mb-4">Imagine that a few more steps ahead there is a place where the
                                    path splits, where is goes off to the left and off to the right. Pause here for a few
                                    moments and have a think. Here, there are two different pathways, two possibilities, two
                                    ways that you could choose to go.</p>
                                <p class="mb-md-5 mb-4">You carry on doing the same things, living the same way and
                                    dealing with this thing in the same way as you have been doing. If you were choose the
                                    path to the right, the right path, there are new possibilities, achievement, freedom of
                                    mind, positive and progressive implications. Think about that as you stand at this place
                                    where the path splits. You want to make a decision and commit to one of these paths.
                                    Before you make that decision, we are going to see what each path holds for your future.
                                </p>
                                <div class="d-sm-flex bg-light border-radius p-4 p-md-5 mb-md-5 mb-4">
                                    <i class="fas fa-quote-left pe-4 fa-6x text-primary"></i>
                                    <p class="mb-0 text-dark">Politics can be attributed to his perseverance to overcome his
                                        personal liabilities, and his desire to constantly become better. Next time you
                                        really want to achieve something, take time to focus on your own personal journal.
                                        What is your temptation that is standing in your wayv to greatness.</p>
                                </div>
                                <ul class="list list-unstyled">
                                    <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Use
                                            a past defeat as a motivator. Remind yourself you have nowhere to go
                                            except</span></li>
                                    <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Give
                                            yourself the power of responsibility. </span></li>
                                    <li class="d-flex"><i
                                            class="fas fa-check pe-2 pt-1 text-primary"></i><span>Remind yourself the only
                                            thing stopping you is yourself.</span></li>
                                    <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Make
                                            a list of your achievements toward your long-term</span></li>
                                    <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>goal
                                            and remind yourself that intentions don’t count, only action’s.</span></li>
                                </ul>
                            </div>
                            <div class="blog-post-footer d-flex flex-wrap align-items-center mt-5">
                                <a href="#" class="btn btn-link">branding,</a>
                                <a href="#" class="btn btn-link">consulting,</a>
                                <a href="#" class="btn btn-link">income,</a>
                                <a href="#" class="btn btn-link">services,</a>
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
                        <div class="mt-4 mt-sm-5">
                            <nav class="navigation post-navigation">
                                <div class="nav-links">
                                    <div class="nav-previous">
                                        <a href="#"><span class="pagi-text"> PREV</span><span
                                                class="nav-title">How to find the best Marketing sites in the
                                                UK</span></a>
                                    </div>
                                    <div class="nav-next">
                                        <a href="#"><span class="nav-title">Strategies to market new-age
                                                businesses</span> <span class="pagi-text">NEXT</span></a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="mt-4 mt-sm-5">
                            <h4 class="my-4">Related Posts</h4>
                            <div class="owl-carousel" data-nav-arrow="false" data-items="2" data-md-items="2"
                                data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="30" data-autoheight="true"
                                data-autospeed="6000">
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <img class="img-fluid" src="images/blog/09.jpg" alt="">
                                        </div>
                                        <div class="blog-post-content">
                                            <div class="blog-post-info">
                                                <div class="blog-post-author">
                                                    <a href="#" class="btn btn-link"><i
                                                            class="far fa-folder-open"></i>Marketing</a>
                                                </div>
                                                <div class="blog-post-date"><a href="#"><i class="far fa-calendar"></i>Feb
                                                        4, 2021 </a></div>
                                            </div>
                                            <div class="blog-post-details">
                                                <h6 class="blog-post-title">
                                                    <a href="blog-single.html">How to create and operate a successful
                                                        Business</a>
                                                </h6>
                                                <p class="mb-0">I coach my clients to practice the 3 D’s – Defer,
                                                    Delegate or Delete. Can the particular activity be done later?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <img class="img-fluid" src="images/blog/10.jpg" alt="">
                                        </div>
                                        <div class="blog-post-content">
                                            <div class="blog-post-info">
                                                <div class="blog-post-author">
                                                    <a href="#" class="btn btn-link"><i
                                                            class="far fa-folder-open"></i>Strategy</a>
                                                </div>
                                                <div class="blog-post-date"><a href="#"><i
                                                            class="far fa-calendar"></i>August 19, 2021 </a></div>
                                            </div>
                                            <div class="blog-post-details">
                                                <h6 class="blog-post-title">
                                                    <a href="blog-single.html">How to find the best Marketing sites in the
                                                        UK</a>
                                                </h6>
                                                <p class="mb-0">So how do we get clarity? Simply by asking
                                                    ourselves lots of questions: What do I really want?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <img class="img-fluid" src="images/blog/11.jpg" alt="">
                                        </div>
                                        <div class="blog-post-content">
                                            <div class="blog-post-info">
                                                <div class="blog-post-author">
                                                    <a href="#" class="btn btn-link"><i
                                                            class="far fa-folder-open"></i>Finance</a>
                                                </div>
                                                <div class="blog-post-date"><a href="#"><i class="far fa-calendar"></i>Feb
                                                        4, 2021 </a></div>
                                            </div>
                                            <div class="blog-post-details">
                                                <h6 class="blog-post-title">
                                                    <a href="blog-single.html">Strategies to market new-age businesses</a>
                                                </h6>
                                                <p class="mb-0">For those of you who are serious about having
                                                    more, doing more, giving more and being more, </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 my-sm-5">

                    </div>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-4 mt-sm-5 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="widget">
                            <h6 class="mb-3">Pencarian </h6>
                            <form class="form-inline input-with-btn">
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-sm" placeholder="Cari berita..">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary"><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget">
                            <h6 class="mb-3">Kategori Berita</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa fa-arrow-right text-primary me-2"></i><b class="text-dark me-auto">LSP
                                        PPHI</b>
                                    <label class="mb-0">10</label>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa fa-arrow-right text-primary me-2"></i><b
                                        class="text-dark me-auto">Asesmen</b>
                                    <label class="mb-0">5</label>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa fa-arrow-right text-primary me-2"></i><b
                                        class="text-dark me-auto">Sertifikasi</b>
                                    <label class="mb-0">3</label>
                                </li>

                                <li class="d-flex align-items-center">
                                    <i class="fa fa-arrow-right text-primary me-2"></i><b
                                        class="text-dark me-auto">Informatika</b>
                                    <label class="mb-0">8</label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h6 class="mb-3">Berita Terbaru </h6>
                            <div class="row">
                                <div class="col-12 d-flex mb-3">
                                    <div class="recent-post-img avatar avatar-lg me-3">
                                        <img class="img-fluid" src="{{ asset('finaxo/images/blog/03.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <small class="d-block">June 27, 2021</small>
                                        <a class="text-dark" href="#"><b>How to find the best Marketing sites in the
                                                UK</b></a>
                                    </div>
                                </div>
                                <div class="col-12 d-flex mb-3">
                                    <div class="recent-post-img avatar avatar-lg me-3">
                                        <img class="img-fluid" src="{{ asset('finaxo/images/blog/02.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <small class="d-block">August 19, 2021</small>
                                        <a class="text-dark" href="#"><b>How to create and operate a successful
                                                Business</b></a>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="recent-post-img avatar avatar-lg me-3">
                                        <img class="img-fluid" src="{{ asset('finaxo/images/blog/04.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <small class="d-block">January 14, 2021</small>
                                        <a class="text-dark" href="#"><b>Strategies to market new-age
                                                businesses</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h6 class="mb-3">Where To Find Us </h6>
                            <div class="row">
                                <div class="col-12 d-flex mb-3">
                                    <div class="text-primary me-3">
                                        <i class="fas fa-2x fa-map-signs"></i>
                                    </div>
                                    <div class="recent-post-info">
                                        <span>17504 Carlton Cuevas Rd Gulfport, MS, 39503</span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex mb-3">
                                    <div class="text-primary me-3">
                                        <i class="far fa-2x fa-envelope"></i>
                                    </div>
                                    <div class="recent-post-info">
                                        <span>letstalk@finaxo.com<br> Mon-Fri 8:30am-6:30pm</span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="text-primary me-3">
                                        <i class="fas fa-2x fa-headphones-alt"></i>
                                    </div>
                                    <div class="recent-post-info">
                                        <span>+(704) 279-1249<br> 24 X 7 online support</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget mb-0">
                            <div class="avatar avatar-lg me-3">
                                <img class="img-fluid" src="{{ asset('logo/lsp.png') }}" alt="">
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
