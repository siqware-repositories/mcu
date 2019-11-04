@extends('layouts.backend')
@section('page-title')
    News
@stop
@section('page-content')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">News</span> - Edit
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                <div class="btn-toolbar justify-content-center">
                    <div class="btn-group mr-2">
                        <a href="{{route('backend.news.index')}}" class="btn btn-info {{request()->is('back_end/news')?'active':''}}">List</a>
                        <a href="{{route('backend.news.create')}}" class="btn btn-info {{request()->is('back_end/news/create')?'active':''}}">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content pt-0">
        <!-- Basic card -->
        <form class="card" action="{{route('backend.news.update',$news->id)}}" method="post">
            <div class="card-header bg-light header-elements-inline">
                <h5 class="card-title">Add News</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                    @csrf
                <input type="hidden" name="_method" value="put">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <div id="lfm" data-thumb="lfm" data-preview="lfm" style="margin-top:15px;max-height:100px;">
                                    <img src="{{asset($news->thumb)}}" class="shadow" style="height: 5rem;">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{$news->title}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" id="example" cols="30" rows="10">{{$news->content}}</textarea>
                    </div>
            </div>
            <div class="card-footer bg-light">
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>
        </form>
        <!-- /basic card -->

    </div>
    <!-- /content area -->
@stop
@section('page-script')
    <script>
        $(function () {
            var editor = new FroalaEditor('#example', {
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
            $('#lfm').filemanager('file');
            $('#gallery').filemanager('file');
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