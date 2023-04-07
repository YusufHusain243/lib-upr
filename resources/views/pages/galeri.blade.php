@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.html">Galeri</a></li>
                </ul>
            </nav>
            <div class="row my-5">
                @foreach ($data as $d)
                    <div class="col-lg-3 py-3">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-thumb">
                                    <img src="/storage/images/{{ $d->foto }}">
                                </div>
                            </div>
                            <div class="body">
                                <h6 class="post-title">
                                    {{ $d->title }}
                                </h6>
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
