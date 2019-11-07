@extends('layouts.front')
@section('page-title')
    Update Activity
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">Update {{$edit->title}}</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li class="current">{{$edit->title}}</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            @if(Auth::check())
                <form action="{{route('front.academic.update.news',$edit->id)}}" method="post"
                      class="contact-form">
                    @csrf
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <div id="lfm" data-thumb="lfm" data-preview="lfm" style="margin-top:15px;max-height:100px;">
                            <img src="{{$edit->thumb}}" class="shadow" style="height: 5rem;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{$edit->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="_content" cols="30" rows="10">{{$edit->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-theme" type="submit">Update</button>
                    </div>
                </form>
            @endif
        </div>
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