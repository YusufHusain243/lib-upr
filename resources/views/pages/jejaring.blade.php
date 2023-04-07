@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.html">Jejaring Kerja Sama Perpustakaan UPR</a></li>
                </ul>
            </nav>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="widget-box">
                        <h4 class="widget-title">Jejaring Kerja Sama Perpustakaan UPR</h4>
                        <div class="divider"></div>
                        <div class="post-content">
                            @foreach ($data as $d)
                                <div class="blog-item">
                                    <a class="post-thumb" href="">
                                        <img src="/storage/images/{{$d->logo}}" class="img-fluid">
                                    </a>
                                    <div class="content ml-5">
                                        <h6 class="post-title">
                                            <a href="{{$d->url}}">
                                               {{$d->nama}}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
