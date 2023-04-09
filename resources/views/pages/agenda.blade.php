@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: #0c7411">
                            @if (session('locale') !== null && session('locale') == 'id')
                                {{ $data->judul }}
                            @else
                                {{ $data->judul_en }}
                            @endif
                        </h4>
                        <span class="mai-calendar"> {{ $data->tanggal }}</span>
                        <div class="divider" style="background-color: #1f8926"></div>
                        <div class="post-content">
                            <p>
                                @if (session('locale') !== null && session('locale') == 'id')
                                    {!! $data->isi !!}
                                @else
                                    {!! $data->isi_en !!}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
