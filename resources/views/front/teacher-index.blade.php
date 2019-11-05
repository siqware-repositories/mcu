@extends('layouts.front')
@section('page-title')
    Staff | Teacher
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">Staff | Teacher</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">Staff | Teacher</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <div class="team-wrapper col-lg-9 col-12">
                    @foreach($staffs as $item)
                        <div class="row page-row">
                        <figure class="thumb col-lg-3 col-4">
                            <img class="img-fluid" src="{{$item->profile}}" alt="">
                        </figure>
                        <div class="details col-lg-9 col-8">
                            <h3 class="title">{{$item->name}}</h3>
                            <h4>{{$item->position}}</h4>
                            <div class="footer-col-inner">
                                <div class="row">
                                    <p class="tel col-lg-12 col-md-4 col-12"><i class="fas fa-phone mr-2"></i>{{$item->tel}}</p>
                                    <p class="email col-lg-12 col-md-4 col-12"><i class="fas fa-envelope mr-2"></i><a href="#">{{$item->email}}</a>
                                    <p class="email col-lg-12 col-md-4 col-12"><i class="fab fa-facebook mr-2"></i><a href="#">{{$item->fb}}</a>
                                    </p>
                                </div>
                            </div><!--//footer-col-inner-->
                        </div>
                    </div>
                    @endforeach
                    {{$staffs->links()}}
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