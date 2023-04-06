@extends('main')

@section('banner')
    @include('components/banner')
@endsection

@section('content')
    <div class="page-section" id="menu">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <h2 class="title-section"><strong>Menu Kami</strong></h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row">
                @foreach ($data as $d)
                    <div class="col-lg-3">
                        <a href="{{ $d->url }}" target="_blank">
                            <div class="card-service wow fadeInUp" style="height: 250px; background-color:#043507">
                                <div class="body">
                                    <img src="storage/images/{{ $d->logo }}" class="mb-3" height="140px"
                                        width="140px">
                                    <h6 style="color: #fbe03d">{{ $d->nama }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="page-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-4 col-xl-4 py-12 wow zoomIn">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: green">Pengumuman</h4>
                        <div class="divider bg-success"></div>

                        <div class="blog-item">
                            <div class="content">
                                <h6 class="post-title"><a href="#">Even the all-powerful Pointing has
                                        no control</a></h6>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="content">
                                <h6 class="post-title"><a href="#">Even the all-powerful Pointing has
                                        no control</a></h6>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="content">
                                <h6 class="post-title"><a href="#">Even the all-powerful Pointing has
                                        no control</a></h6>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-xl-4 py-12 wow zoomIn">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: green">Berita</h4>
                        <div class="divider bg-success"></div>

                        <div class="blog-item">
                            <div class="content">
                                <h6 class="post-title"><a href="#">Even the all-powerful Pointing has
                                        no control</a></h6>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="content">
                                <h6 class="post-title"><a href="#">Even the all-powerful Pointing has
                                        no control</a></h6>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="content">
                                <h6 class="post-title"><a href="#">Even the all-powerful Pointing has
                                        no control</a></h6>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-xl-4 py-12 wow zoomIn">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: green">Agenda</h4>
                        <div class="divider bg-success"></div>

                        <div class="blog-item">
                            <div class="content">
                                <h6 class="post-title"><a href="#">Even the all-powerful Pointing has
                                        no control</a></h6>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="content">
                                <h6 class="post-title"><a href="#">Even the all-powerful Pointing has
                                        no control</a></h6>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="content">
                                <h6 class="post-title"><a href="#">Even the all-powerful Pointing has
                                        no control</a></h6>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <h2 class="title-section">Gallery</h2>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-3 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/assets/img/blog/blog-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/assets/img/blog/blog-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/assets/img/blog/blog-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/assets/img/blog/blog-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4 text-center wow fadeInUp">
                    <a href="blog.html" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
