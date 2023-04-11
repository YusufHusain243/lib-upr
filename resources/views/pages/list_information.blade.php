@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item">
                        <p style="color: #043507">Home</p>
                    </li>
                    <li class="breadcrumb-item">
                        <p style="color: #043507">{{__($page)}}</p>
                    </li>
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
                                <a href="/{{$page}}/{{ $d->id }}">
                                    <h6 class="post-title">
                                        @if (session('locale') !== null && session('locale') == 'id')
                                            {{ $d->judul }}
                                        @else
                                            {{ $d->judul_en }}
                                        @endif
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                    @if ($pageAktif > 1)
                        <li class="page-item">
                            <a class="page-link" href="/page/{{ $page }}/{{ $pageAktif - 1 }}">Previous</a>
                        </li>
                    @endif

                    @for ($i = 1; $i <= $pageAmount; $i++)
                        @if ($pageAktif == $i)
                            <li class="page-item active"><a
                                    class="page-link"href="/page/{{ $page }}/{{ $i }}">{{ $i }}</a>
                            </li>
                        @else
                            <li class="page-item"><a
                                    class="page-link"href="/page/{{ $page }}/{{ $i }}">{{ $i }}</a>
                            </li>
                        @endif
                    @endfor

                    @if ($pageAktif < $pageAmount)
                        <li class="page-item">
                            <a class="page-link" href="/page/{{ $page }}/{{ $pageAktif + 1 }}">Next</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endsection
