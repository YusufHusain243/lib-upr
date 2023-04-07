@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: #0c7411">{{__('tim')}}</h4>
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
