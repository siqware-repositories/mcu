@extends('layouts.front')
@section('page-title')
    Events
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">Events</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">Events</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <div class="news-wrapper col-lg-9 col-12">
                    @foreach($events as $item)
                        <article class="events-item row page-row has-divider clearfix">
                            <div class="date-label-wrapper col-lg-1 col-md-2 col-12">
                                <p class="date-label">
                                    <span class="month">{{\Carbon\Carbon::parse($item->open)->month}}</span>
                                    <span class="date-number">{{\Carbon\Carbon::parse($item->open)->day}}</span>
                                </p>
                            </div><!--//date-label-wrapper-->
                            <div class="details col-lg-11 col-md-10 col-12">
                                <h3 class="title">{{$item->title}}</h3>
                                <p class="meta"><span class="time"><i class="far fa-clock"></i> {{\Carbon\Carbon::parse($item->open)->isoFormat('DD/MM/Y, h:mm:ss A') .' - '.\Carbon\Carbon::parse($item->close)->isoFormat('DD/MM/Y, h:mm:ss A')}} </span><span class="location"> <i class="fas fa-map-marker-alt"></i> <a href="#">{{$item->location}}</a></span></p>
                                <div class="desc">
                                    <div class="show-less">
                                        {!! $item->desc !!}
                                    </div>
                                    <a class="toggle-collapse btn btn-theme read-more" href="#">Toggle more +</a>
                                </div>
                            </div><!--//details-->
                        </article><!--//events-item-->
                    @endforeach
                    <nav class="pagination-container text-center">
                        {{ $events->links() }}
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