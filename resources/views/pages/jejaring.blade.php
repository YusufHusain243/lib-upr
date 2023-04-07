@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: #0c7411">{{__('jaringan')}}</h4>
                        <div class="divider" style="background-color: #1f8926"></div>
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
