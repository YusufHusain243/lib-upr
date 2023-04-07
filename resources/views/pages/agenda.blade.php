@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.html">Agenda</a></li>
                </ul>
            </nav>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="widget-box">
                        <h4 class="widget-title">{{ $data->judul }}</h4>
                        <span class="mai-calendar"> {{ $data->tanggal }}</span>
                        <div class="divider"></div>
                        <div class="post-content">
                            <p>
                                {!! $data->isi !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
