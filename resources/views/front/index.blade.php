@extends('layouts.front')
@section('page-title')
    Home
@stop
@section('page-content')
    <div class="content container page-wrapper">
        @include('layouts.front-slide')
        <section class="section-content pt-3">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h4 class="title"><a href="{{route('front.rector.show')}}">{{$rector->title}}</a></h4>
                    <div class="desc">
                        <div class="show-less">
                            {!! $rector->content !!}
                        </div>
                        <a class="toggle-collapse" href="#">Toggle more +</a>
                    </div>
                    <div class="d-flex pb-3">
                        <div class="pt-3">
                            <h4 class="m-0 text-info">{{$rector->name}}</h4>
                            <span class="title">Rector of Mean Chey University</span>
                        </div>
                        <img class="ml-1" src="{{$rector->profile}}" alt="" width="70" height="70">
                    </div>
                </div>
                <div class="col-lg-6 col-12 pt-3" style="background: #4CAF50;">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="http://www.unicamedu.com/index.php?lang=en" class="card-title">
                                        UNICAM
                                    </a>
                                    <div class="card-text">
                                        Implementing quality of education & training of the Young
                                        Universities in rural area of CAMbodia - Unicam
                                    </div>
                                </div>
                                <div class="card-img">
                                    <img class="w-100" src="http://www.ajaes.org/img/logo.png" alt="unicam">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="http://tactic.muni.cz/" class="card-title">
                                        TACTIC
                                    </a>
                                    <div class="card-text">
                                        Through Academic Cooperation Towards Innovative Capacity
                                    </div>
                                </div>
                                <div class="card-img">
                                    <img class="w-100" src="http://tactic.muni.cz/thumbs/1180tactic-logo.png" alt="unicam">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--//row-->
        </section><!--//promo-->
        <section class="news">
            <h1 class="section-heading text-highlight"><span class="line">Latest News</span></h1>
            <div class="section-content clearfix">
                <div id="news-carousel" class="news-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                @foreach($news as $item)
                                <div class="col-lg-4 col-12 news-item">
                                    <h2 class="title"><a href="{{route('front.news.show',$item->id)}}">{{$item->title}}</a></h2>
                                    <img class="thumb" src="{{$item->thumb}}" width="100" alt=""/>
                                    <div class="desc">
                                        <div class="show-less">
                                            {!! $item->content !!}
                                        </div>
                                        <a class="toggle-collapse" href="#">Toggle more +</a>
                                    </div>
                                </div><!--//news-item-->
                                @endforeach
                            </div><!--//row-->
                        </div><!--//item-->
                    </div><!--//carousel-inner-->
                </div><!--//news-carousel-->
                <a class="read-more" href="events.html">All news<i class="fas fa-chevron-right"></i></a>
            </div><!--//section-content-->
        </section><!--//news-->
        <div class="row cols-wrapper">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <section class="events">
                            <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
                            <div class="section-content">
                                @foreach($events as $item)
                                <div class="event-item">
                                    <p class="date-label">
                                        <span class="month">{{\Carbon\Carbon::parse($item->open)->month}}</span>
                                        <span class="date-number">{{\Carbon\Carbon::parse($item->open)->day}}</span>
                                    </p>
                                    <div class="details">
                                        <h2 class="title">{{$item->title}}</h2>
                                        <div class="d-flex">
                                            <p class="time"><i class="far fa-clock"></i> {{\Carbon\Carbon::parse($item->open)->isoFormat('DD/MM/Y, h:mm:ss A') .' - '.\Carbon\Carbon::parse($item->close)->isoFormat('DD/MM/Y, h:mm:ss A')}}</p>
                                            <p class="location"><i class="fas fa-map-marker-alt"></i>
                                                <a href="#">{{$item->location}}</a>
                                            </p>
                                        </div>
                                    </div><!--//details-->
                                    <div class="desc">
                                        <div class="show-less">
                                            {!! $item->desc !!}
                                        </div>
                                        <a class="toggle-collapse" href="#">Toggle more +</a>
                                    </div>
                                </div><!--event-item-->
                                @endforeach
                                <a class="read-more" href="events.html">All events<i
                                            class="fas fa-chevron-right"></i></a>
                            </div><!--//section-content-->
                        </section><!--//events-->
                    </div><!--//col-md-3 event-->
                    <div class="col-lg-12 col-12">
                        <section class="video">
                            <h1 class="section-heading text-highlight"><span class="line">Latest Video</span></h1>
                            <div class="section-content">
                                <div id="videos-carousel" class="videos-carousel carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item item active">
                                            <div class="row">
                                                @foreach($videos as $item)
                                                    <div class="col-lg-4 col-12">
                                                        <div class="embed-responsive embed-responsive-16by9 mb-2">
                                                            <iframe class="embed-responsive-item"
                                                                    src="{{$item->url}}?rel=0&amp;wmode=transparent"
                                                                    frameborder="0" allowfullscreen=""></iframe>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                            </div>
                                        </div><!--//item-->
                                    </div><!--//carousel-inner-->
                                </div><!--//videos-carousel-->
                                <a class="read-more" href="events.html">All videos<i class="fas fa-chevron-right"></i></a>
                                <p class="description">All video from mcu.</p>
                            </div><!--//section-content-->
                        </section><!--//video-->
                    </div>
                </div>
            </div>
            @include('layouts.front-sidebar')
        </div><!--//cols-wrapper-->
        <section class=" page-content" style="background: #fff;">
            <h1 class="section-heading text-highlight"><span class="line">Gallery</span></h1>
            <div class="section-content clearfix">
                <div id="news-carousel" class="news-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                @foreach($galleries as $item)
                                <div class="col-md-4 col-12">
                                    <div class="album-cover px-2 pt-2" style="min-height: auto;">
                                        <div style="height: 200px;" class="w-100">
                                            <a href="gallery-album.html"><img style='height: 100%; width: 100%; object-fit: contain' src="{{$item->gallery_detail[0]->path}}" alt=""></a>
                                        </div>
                                        <div class="desc">
                                            <h4><small><a href="#">{{$item->title}}</a></small></h4>
                                        </div>
                                    </div>
                                </div><!--//gallery-item-->
                                    @endforeach
                            </div><!--//row-->
                        </div><!--//item-->
                    </div><!--//carousel-inner-->
                </div><!--//news-carousel-->
                <a class="read-more" href="events.html">All Gallery<i class="fas fa-chevron-right"></i></a>
            </div><!--//section-content-->
        </section><!--//gallery-->
        <section class="testimonials">
            <h1 class="section-heading text-highlight"><span class="line"> Testimonials</span></h1>
            <div class="carousel-controls">
                <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
            </div><!--//carousel-controls-->
            <div class="section-content">
                <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item item active">
                            <div class="row">
                                @foreach($testimonials_one as $item)
                                <div class="col-lg-6 col-12">
                                    <blockquote class="quote">
                                        <p><i class="fas fa-quote-left"></i>{!! $item->content !!}</p>
                                    </blockquote>
                                    <div class="source">
                                        <p class="people"><span class="name">{{$item->name}}</span><br/><span
                                                    class="title">{{$item->major}}</span></p>
                                        <img class="profile" src="{{$item->profile}}" alt=""/>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div><!--//item-->
                        <div class="carousel-item item">
                            <div class="row">
                                @foreach($testimonials_two as $item)
                                    <div class="col-lg-6 col-12">
                                        <blockquote class="quote">
                                            <p><i class="fas fa-quote-left"></i>{!! $item->content !!}</p>
                                        </blockquote>
                                        <div class="source">
                                            <p class="people"><span class="name">{{$item->name}}</span><br/><span
                                                        class="title">{{$item->major}}</span></p>
                                            <img class="profile" src="{{$item->profile}}" alt=""/>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div><!--//item-->

                    </div><!--//carousel-inner-->
                </div><!--//testimonials-carousel-->
            </div><!--//section-content-->
        </section><!--//testimonials-->
        <!-- Corporation-->
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