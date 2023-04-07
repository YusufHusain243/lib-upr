@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="index.html" class="text-success">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.html" class="text-success">Sejarah</a></li>
                </ul>
            </nav>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="widget-box">
                        <h4 class="widget-title text-success">Sejarah Perpustakaan UPR</h4>
                        <div class="divider bg-success"></div>
                        <div class="post-content">
                            <p>
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
