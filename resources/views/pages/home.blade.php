@extends('main')

@section('banner')
    @include('components/banner')
@endsection

@section('content')
    <div class="page-section" id="menu">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <h2 class="title-section" style="color: #043507"><strong>Menu Kami</strong></h2>
                <div class="divider mx-auto" style="background-color: #043507"></div>
            </div>
            <div class="row">
                @foreach ($menu as $m)
                    <div class="col-lg-3">
                        <a href="{{ $m->url }}" target="_blank">
                            <div class="card-service wow fadeInUp" style="height: 250px; background-color:#043507">
                                <div class="body">
                                    <img src="storage/images/{{ $m->logo }}" class="mb-3" height="140px"
                                        width="140px">
                                    <h6 style="color: #fbe03d">{{ $m->nama }}</h6>
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
            <div class="text-center wow fadeInUp">
                <h2 class="title-section" style="color: #043507"><strong>Informasi</strong></h2>
                <div class="divider mx-auto" style="background-color: #043507"></div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-lg-4 col-xl-4 py-12 wow zoomIn">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: green">Pengumuman</h4>
                        <div class="divider bg-success"></div>

                        @foreach ($pengumuman as $p)
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $p->id }}"">
                                            {{ $p->judul }}
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $p->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $p->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-xl-4 py-12 wow zoomIn">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: green">Berita</h4>
                        <div class="divider bg-success"></div>
                        @foreach ($berita as $b)
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/berita/{{ $b->id }}"">
                                            {{ $b->judul }}
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/berita/{{ $b->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $b->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-xl-4 py-12 wow zoomIn">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: green">Agenda</h4>
                        <div class="divider bg-success"></div>
                        @foreach ($agenda as $a)
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/agenda/{{ $a->id }}"">
                                            {{ $a->judul }}
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/agenda/{{ $a->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $a->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <h2 class="title-section" style="color: #043507">Galeri</h2>
                <div class="divider mx-auto" style="background-color: #043507"></div>
            </div>

            <div class="row mt-5">
                @foreach ($galeri as $g)
                    <div class="col-lg-3 py-3 wow fadeInUp">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-thumb">
                                    <img src="storage/images/{{ $g->foto }}" class="img-fluid">
                                </div>
                            </div>
                            <div class="body">
                                <h6 class="post-title">
                                    {{ $g->title }}
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 mt-4 text-center wow fadeInUp">
                    <a href="/galeri/0" class="btn text-white" style="background-color: #043507">View More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
