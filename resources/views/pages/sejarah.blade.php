@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.html">Sejarah</a></li>
                </ul>
            </nav>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: #0c7411">Sejarah Perpustakaan UPR</h4>
                        <div class="divider" style="background-color: #1f8926"></div>
                        <div class="post-content">
                            <p class="text-dark">
                                @if (count($data) > 0)
                                    {!! $data[0]->sejarah !!}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
