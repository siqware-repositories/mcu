@extends('layouts.front')
@section('page-title')
    Academic
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">{{$academic->type}}</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li><a href="{{route('front.academic')}}">Academic</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">{{$academic->faculty}}</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="featured-courses tabbed-info page-row">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab">Home</a></li>
                        @foreach($academic->academic_detail as $item)
                            <li class="nav-item"><a class="nav-link" href="#{{$item->major}}" data-toggle="tab">{{$item->major}}</a></li>
                        @endforeach
                    <li class="nav-item"><a class="nav-link" href="#add" data-toggle="tab">+ Add</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <form action="#">
                            <div class="form-group">
                                <textarea name="content" class="_content" cols="30" rows="10">{{$academic->desc}}</textarea>
                            </div>
                        </form>
                    </div>
                    @foreach($academic->academic_detail as $item)
                        <div class="tab-pane" id="{{$item->major}}">
                            {{--sub tab--}}
                            <div class="featured-courses tabbed-info page-row">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" href="#sub-home-{{$item->id}}" data-toggle="tab">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#course-{{$item->id}}" data-toggle="tab">Course</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#schedule-{{$item->id}}" data-toggle="tab">Schedule</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#teacher-{{$item->id}}" data-toggle="tab">Teacher</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#document-{{$item->id}}" data-toggle="tab">Document</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="sub-home-{{$item->id}}">
                                        desc
                                    </div>
                                    <div class="tab-pane" id="course-{{$item->id}}">
                                        Course
                                    </div>
                                    <div class="tab-pane" id="schedule-{{$item->id}}">
                                        schedule
                                    </div>
                                    <div class="tab-pane" id="teacher-{{$item->id}}">
                                        teacher
                                    </div>
                                    <div class="tab-pane" id="document-{{$item->id}}">
                                        document
                                    </div>
                                </div>
                            </div>
                            {{--sub tab--}}
                        </div>
                    @endforeach
                    <div class="tab-pane" id="add">
                        <form action="{{route('front.academic.major.add',$academic->id)}}" method="post" class="contact-form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Major</label>
                                <div class="input-group">
                                    <input type="text" name="major" placeholder="Enter major" class="form-control">
                                    <button type="submit" class="btn btn-sm btn-theme input-group-append"><i class="fas fa-save"></i></button>
                                </div>
                            </div>
                        </form>
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
                }
            });
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
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css" rel="stylesheet"
          type="text/css"/>
@endpush
@push('js')
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/js/froala_editor.pkgd.min.js"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
@endpush