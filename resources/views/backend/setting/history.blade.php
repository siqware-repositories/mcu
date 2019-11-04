@extends('layouts.backend')
@section('page-title')
    Setting
@stop
@section('page-content')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Setting</span> - History
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                <div class="btn-toolbar justify-content-center">
                    <div class="btn-group mr-2">
                        <a href="{{route('backend.history.index')}}" class="btn btn-info {{request()->is('back_end/setting-history')?'active':''}}">History</a>
                        <a href="{{route('backend.founder.index')}}" class="btn btn-info {{request()->is('back_end/setting-founder')?'active':''}}">Founder</a>
                        <a href="{{route('backend.rector.index')}}" class="btn btn-info {{request()->is('back_end/setting-rector')?'active':''}}">Rector</a>
                        <a href="{{route('backend.corporation.index')}}" class="btn btn-info {{request()->is('back_end/setting-corporation')?'active':''}}">Corporation</a>
                        <a href="{{route('backend.commitment.index')}}" class="btn btn-info {{request()->is('back_end/setting-commitment')?'active':''}}">Commitment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content pt-0">
        <!-- Basic card -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">History</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('backend.history.update',$history->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{$history->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" id="example" cols="30" rows="10">{{$history->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
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
            $('#lfm').filemanager('image');
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
    <script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
@endpush