@extends('layouts.front')
@section('page-title')
    Gallery
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">Gallery</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">Gallery</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <div class="news-wrapper col-lg-9 col-12">
                    <div class="row">
                    @foreach($galleries as $item)
                            <div class="col-md-4 col-12">
                                <div class="album-cover px-2 pt-2" style="min-height: auto;">
                                    <div style="height: 200px;" class="w-100">
                                        <a href="{{route('front.gallery.show',$item->id)}}"><img style='height: 100%; width: 100%; object-fit: contain' src="{{$item->gallery_detail[0]->path}}" alt=""></a>
                                    </div>
                                    <div class="desc">
                                        <h4><small><a href="#">{{$item->title}}</a></small></h4>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    </div>
                    <nav class="pagination-container text-center">
                        {{ $galleries->links() }}
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