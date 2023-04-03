@extends('main')

@section('banner')
    @include('components/banner')
@endsection

@section('content')
    @include('modules/home/widgets/menu')
    @include('modules/home/widgets/information')
    @include('modules/home/widgets/gallery')
@endsection