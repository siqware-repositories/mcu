@extends('layouts.backend')
@section('page-title')
    Office
@stop
@section('page-content')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Office</span> - Create
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                <div class="btn-toolbar justify-content-center">
                    <div class="btn-group mr-2">
                        <a href="{{route('user.index')}}"
                           class="btn btn-info {{request()->is('back_end/user')?'active':''}}">List</a>
                        <a href="{{route('user.create')}}"
                           class="btn btn-info {{request()->is('back_end/user/create')?'active':''}}">Add</a>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="card-body" action="{{route('user.store')}}" method="post">
                        @csrf
                        <fieldset>
                            <legend class="font-weight-semibold"><i class="icon-user mr-2"></i> Add User
                            </legend>
                            {{--Name--}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Type your name" name="name">
                                </div>
                            </div>
                            {{--Gender--}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Gender:</label>
                                <div class="col-lg-9">
                                    <select name="gender" class="form-control">
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>
                                </div>
                            </div>
                            {{--Email--}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Email:</label>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control" placeholder="Type your email" name="email">
                                </div>
                            </div>
                            {{--Password--}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Password:</label>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" placeholder="Type your password"
                                           name="password">
                                </div>
                            </div>
                            {{--Role--}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Role:</label>
                                <div class="col-lg-9">
                                    <select name="role" class="form-control">
                                        <option value="user">Select role</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                        <option value="super_admin">Super Admin</option>
                                    </select>
                                </div>
                            </div>
                            {{--Status--}}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Status:</label>
                                <div class="col-lg-9">
                                    <select class="form-control" name="status">
                                        <option value="pending">Select status</option>
                                        <option value="active">Active</option>
                                        <option value="pending">Pending</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Save</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
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
@endpush