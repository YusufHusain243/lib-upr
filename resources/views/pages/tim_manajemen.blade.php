@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.html">Tim Manajemen</a></li>
                </ul>
            </nav>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: #0c7411">Tim Manajemen</h4>
                        <div class="divider" style="background-color: #1f8926"></div>
                        <div class="post-content">
                            @foreach ($data as $d)
                                <div class="blog-item">
                                    <img src="/storage/images/{{$d->foto}}" class="post-thumb">
                                    <div class="content ml-5">
                                        <h6 class="text-dark"><strong>{{$d->nama}}</strong></h6>
                                        <h6 class="post-title">{{$d->jabatan}}</h6>
                                        <h6>Email : <a href="#">{{$d->email}}</a></h6>
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
