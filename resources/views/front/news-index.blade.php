@extends('layouts.front')
@section('page-title')
    News
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">News</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">News</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <div class="news-wrapper col-lg-9 col-12">
                    @foreach($news as $item)
                    <article class="news-item page-row has-divider clearfix row">
                        <figure class="thumb col-lg-2 col-md-3 col-12">
                            <img class="img-fluid" src="{{$item->thumb}}" alt="">
                        </figure>
                        <div class="details col-lg-10 col-md-9 col-12">
                            <h3 class="title"><a href="{{route('front.news.show',$item->id)}}">{{$item->title}}</a></h3>
                            <div class="desc">
                                <div class="show-less">
                                    {!! $item->content !!}
                                </div>
                                <a class="toggle-collapse btn btn-theme read-more" href="#">Toggle more +</a>
                            </div>
                        </div>
                    </article><!--//news-item-->
                    @endforeach
                    <nav class="pagination-container text-center">
                        {{ $news->links() }}
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