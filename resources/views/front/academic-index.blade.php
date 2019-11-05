@extends('layouts.front')
@section('page-title')
    Academic
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">Academic</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">Academic</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <section class="widget p-2">
                <h3 class="title">Bachelor Degree</h3>
                <ul class="job-list custom-list-style">
                    @foreach($academics_bachelor as $item)
                        <li><i class="fas fa-caret-right"></i><a href="{{route('front.academic.show',$item->id)}}">{{$item->faculty}}</a></li>
                    @endforeach
                </ul>
                <h3 class="title">Associate Degree</h3>
                <ul class="job-list custom-list-style">
                    @foreach($academics_associate as $item)
                        <li><i class="fas fa-caret-right"></i><a href="{{route('front.academic.show',$item->id)}}">{{$item->faculty}}</a></li>
                    @endforeach
                </ul>
                <h3 class="title">Master Degree</h3>
                <ul class="job-list custom-list-style">
                    @foreach($academics_master as $item)
                        <li><i class="fas fa-caret-right"></i><a href="{{route('front.academic.show',$item->id)}}">{{$item->faculty}}</a></li>
                    @endforeach
                </ul>
                <h3 class="title">Doctor Degree</h3>
                <ul class="job-list custom-list-style">
                    @foreach($academics_doctor as $item)
                        <li><i class="fas fa-caret-right"></i><a href="{{route('front.academic.show',$item->id)}}">{{$item->faculty}}</a></li>
                    @endforeach
                </ul>
            </section>
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