@extends('layouts.front')
@section('page-title')
    Founder
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">{{$founder->title}}</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">{{$founder->title}}</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <div class="news-wrapper col-lg-9 col-12">
                    <p class="featured-image"><img class="img-fluid w-100" src="{{$founder->profile}}" alt=""></p>
                    {!! $founder->content !!}
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