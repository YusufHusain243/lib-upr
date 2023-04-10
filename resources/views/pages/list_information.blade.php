@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.html">{{url()->current()}}</a></li>
                </ul>
            </nav>
            <div class="row my-5">
                    @foreach ($data as $d)
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="blog-item">
                                <div class="content">
                                    <h6 class="post-title">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            @if (session('locale') !== null && session('locale') == 'id')
                                                {{ $d->judul }}
                                            @else
                                                {{ $d->judul_en }}
                                            @endif
                                        </a>
                                    </h6>
                                    <div class="meta">
                                        <a href="/pengumuman/{{ $d->id }}">
                                            <span class="mai-calendar"></span>
                                            {{ $d->tanggal }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>

            {{-- @if (count($data) > 8)
                <nav aria-label="Page Navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            @endif --}}
        </div>
    </div>
@endsection
