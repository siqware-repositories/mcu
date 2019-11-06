@extends('layouts.backend')
@section('page-title')
    News
@stop
@section('page-content')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Academic</span> - Create
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                <div class="btn-toolbar justify-content-center">
                    <div class="btn-group mr-2">
                        <a href="{{route('backend.academic.index')}}"
                           class="btn btn-info {{request()->is('back_end/academic')?'active':''}}">List</a>
                        <a href="{{route('backend.academic.create')}}"
                           class="btn btn-info {{request()->is('back_end/academic/create')?'active':''}}">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content pt-0">
        @if ($errors->any())
            <div class="alert alert-warning border-0 alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <!-- Basic card -->
        <form class="card" action="{{route('backend.academic.store')}}" method="post">
            <div class="card-header bg-light header-elements-inline">
                <h5 class="card-title">Add Academic</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Degree</label>
                            <select name="type" class="form-control">
                                <option value="Bachelor">Bachelor</option>
                                <option value="Associate">Associate</option>
                                <option value="Master">Master</option>
                                <option value="Doctor">Doctor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Faculty</label>
                            <input type="text" name="faculty" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Desc</label>
                    <textarea name="desc" id="content" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="card-footer bg-light">
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Save</button>
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
            var editor = new FroalaEditor('#content', {
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