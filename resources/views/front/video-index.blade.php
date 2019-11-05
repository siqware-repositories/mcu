@extends('layouts.front')
@section('page-title')
    Events
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">Videos</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">Videos</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <div class="news-wrapper col-lg-9 col-12">
                    <div class="row">
                    @foreach($videos as $item)
                        <div class="col-lg-6 col-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-2">
                                <iframe class="embed-responsive-item"
                                        src="{{$item->url}}?rel=0&amp;wmode=transparent"
                                        frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <nav class="pagination-container text-center">
                        {{ $videos->links() }}
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