@extends('main')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="widget-box">
                        <h4 class="widget-title" style="color: #0c7411">{{__('sejarah')}}</h4>
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
