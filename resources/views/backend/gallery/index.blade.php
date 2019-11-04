@extends('layouts.backend')
@section('page-title')
    Gallery
@stop
@section('page-content')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Gallery</span>
                </h4>
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
            <form class="card" action="{{route('backend.gallery.store')}}" method="post">
                <div class="card-header bg-light header-elements-inline">
                    <h5 class="card-title">Add Gallery</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gallery</label>
                        <div id="gallery" data-input="gallery" data-preview="gallery" style="margin-top:15px;max-height:100px;">
                            <img src="{{asset('images/placeholder.png')}}" class="shadow" style="height: 5rem;">
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Save</button>
                    </div>
                </div>
            </form>
            <!-- /basic card -->
            <div class="card">
                <div class="card-header bg-light header-elements-inline">
                    <h5 class="card-title">List</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped" id="gallery-table">
                        <thead>
                        <tr>
                            <th><i class="icon-menu"></i></th>
                            <th>#</th>
                            <th>thumb</th>
                            <th>title</th>
                            <th>date</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
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
            /*table*/
            // Setting datatable defaults
            $.extend( $.fn.dataTable.defaults, {
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                language: {
                    search: '<span>Filter:</span> _INPUT_',
                    searchPlaceholder: 'Type to filter...',
                    lengthMenu: '<span>Show:</span> _MENU_',
                    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                }
            });
            // Alternative pagination
            $('.datatable-pagination').DataTable({
                pagingType: "simple",
                language: {
                    paginate: {'next': $('html').attr('dir') == 'rtl' ? 'Next &larr;' : 'Next &rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr; Prev' : '&larr; Prev'}
                }
            });

            // Scrollable datatable
            $('#gallery-table').DataTable({
                autoWidth: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: route('backend.gallery.list'),
                    method:'post'
                },
                columns: [
                    { data: 'action', name: 'action' ,searchable:false,orderable:false},
                    { data: 'id', name: 'id'},
                    { data: 'thumb', name: 'thumb' ,searchable:false,orderable:false},
                    { data: 'title', name: 'title' },
                    { data: 'created_at', name: 'created_at' }
                ],
                "order": [[ 1, "desc" ]],
                "columnDefs": [
                    { className: "pl-2", "targets": [ 1,2,3,4] },
                    { className: "text-center", "targets": [0] },
                ],
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
    <script src="{{asset('backend/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
@endpush