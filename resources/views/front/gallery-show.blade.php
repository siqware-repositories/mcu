@extends('layouts.front')
@section('page-title')
    Gallery Detail
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">{{$gallery_details[0]->gallery->title}}</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li><a href="{{route('front.gallery')}}">Gallery</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">{{$gallery_details[0]->gallery->title}}</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <div class="news-wrapper col-lg-9 col-12">
                    <div class="row gallery-album">
                    @foreach($gallery_details as $item)
                            <div class="item col-md-3 col-6">
                                <a href="{{$item->path}}" class="w-100" style="height: 200px;">
                                    <img class="img-fluid" src="{{$item->path}}" style="height: 100%; width: 100%; object-fit: contain;">
                                </a>
                            </div><!--//item-->
                    @endforeach
                    </div>
                    <nav class="pagination-container text-center">
                        {{ $gallery_details->links() }}
                    </nav>
                </div>
                @include('layouts.front-sidebar')
            </div><!--//cols-wrapper-->
        </div>
        @include('layouts.front-corporation')
    </div><!--//content-->
@stop
@section('page-js')
    <script>
        $(function () {
            $('.toggle-collapse').click(function () {
                if ($($(this.parentNode).children()[0]).hasClass('show-less')) {
                    $($(this.parentNode).children()[0]).removeClass('show-less')
                }else {
                    $($(this.parentNode).children()[0]).addClass('show-less')
                }
                return false;
            })
        })
    </script>
@stop
@push('js')
@endpush