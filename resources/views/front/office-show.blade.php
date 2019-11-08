@extends('layouts.front')
@section('page-title')
    Office
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">{{$office->office}}</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">{{$office->office}}</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="featured-courses tabbed-info page-row">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab">Home</a></li>
                    @if(Auth::check())
                    <li class="nav-item"><a class="nav-link" href="#post-news" data-toggle="tab">+ Add Activity</a></li>
                        @endif
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        @if(Auth::check())
                            <form action="{{route('front.academic.update.home',$office->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <textarea name="content" class="_content" cols="30"
                                              rows="10">{{$office->content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-theme">Update</button>
                                </div>
                            </form>
                        @endif
                        <div class="fr-view">
                            {!! $office->content !!}
                        </div>
                            <h4>Activities</h4>
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
                                            <a class="btn btn-sm btn-outline-info read-more" href="{{route('front.academic.edit.news',$item->id)}}">Edit</a>
                                            <a class="btn btn-sm btn-outline-warning read-more" href="{{route('front.academic.remove.news',$item->id)}}">Remove</a>
                                        </div>
                                    </div>
                                </article><!--//news-item-->
                            @endforeach
                            <nav class="pagination-container text-center">
                                {{ $news->links() }}
                            </nav>
                    </div>
                    <div class="tab-pane" id="post-news">
                        @if(Auth::check())
                            <form action="{{route('front.office.store.news',$office->id)}}" method="post"
                                  class="contact-form">
                                @csrf
                                <div class="form-group">
                                    <label>Thumbnail</label>
                                    <div id="lfm" data-thumb="lfm" data-preview="lfm" style="margin-top:15px;max-height:100px;">
                                        <img src="{{asset('images/placeholder.png')}}" class="shadow" style="height: 5rem;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" class="_content" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-sm btn-theme" type="submit">Post</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.front-corporation')
    </div><!--//content-->
@stop
@section('page-js')
    <script>
        $(function () {
            var editor = new FroalaEditor('._content', {
                heightMin: 300,
                imageMove: true,
                imageUploadParam: 'file',
                imageUploadMethod: 'post',
                // Set the image upload URL.
                imageUploadURL: route('media.store'),
                // Set the load images request URL.
                imagesLoadURL: route('media.list'),
                imageUploadParams: {
                    froala: 'true', // This allows us to distinguish between Froala or a regular file upload.
                    _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
                },
            });
            $('#lfm').filemanager('file');
            $('.toggle-collapse').click(function () {
                if ($($(this.parentNode).children()[0]).hasClass('show-less')) {
                    $($(this.parentNode).children()[0]).removeClass('show-less')
                } else {
                    $($(this.parentNode).children()[0]).addClass('show-less')
                }
                return false;
            })
        })
    </script>
@stop
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css" rel="stylesheet"
          type="text/css"/>
@endpush
@push('js')
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/js/froala_editor.pkgd.min.js"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
@endpush