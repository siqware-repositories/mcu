@extends('layouts.backend')
@section('page-title')
    Office
@stop
@section('page-content')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Office</span> - List
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                <div class="btn-toolbar justify-content-center">
                    <div class="btn-group mr-2">
                        <a href="{{route('backend.office.index')}}"
                           class="btn btn-info {{request()->is('back_end/office')?'active':''}}">List</a>
                        <a href="{{route('backend.office.create')}}"
                           class="btn btn-info {{request()->is('back_end/office/create')?'active':''}}">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content pt-0">
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
                <table class="table table-striped" id="office-table">
                    <thead>
                    <tr>
                        <th><i class="icon-menu"></i></th>
                        <th>#</th>
                        <th>office</th>
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
            $('#profile').filemanager('file');
            /*table*/
            // Setting datatable defaults
            $.extend($.fn.dataTable.defaults, {
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                language: {
                    search: '<span>Filter:</span> _INPUT_',
                    searchPlaceholder: 'Type to filter...',
                    lengthMenu: '<span>Show:</span> _MENU_',
                    paginate: {
                        'first': 'First',
                        'last': 'Last',
                        'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;',
                        'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;'
                    }
                }
            });
            // Alternative pagination
            $('.datatable-pagination').DataTable({
                pagingType: "simple",
                language: {
                    paginate: {
                        'next': $('html').attr('dir') == 'rtl' ? 'Next &larr;' : 'Next &rarr;',
                        'previous': $('html').attr('dir') == 'rtl' ? '&rarr; Prev' : '&larr; Prev'
                    }
                }
            });

            // Scrollable datatable
            $('#office-table').DataTable({
                autoWidth: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: route('backend.office.list'),
                    method: 'post'
                },
                columns: [
                    {data: 'action', name: 'action', searchable: false, orderable: false},
                    {data: 'id', name: 'id'},
                    {data: 'office', name: 'office'},
                    {data: 'created_at', name: 'created_at'}
                ],
                "order": [[1, "desc"]],
                "columnDefs": [
                    {className: "pl-2", "targets": [1, 2, 3]},
                    {className: "text-center", "targets": [0]},
                ],
            });
        })
    </script>
@stop
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css"
          rel="stylesheet"
          type="text/css"/>
@endpush
@push('js')
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/js/froala_editor.pkgd.min.js"></script>
    <script src="{{asset('backend/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
@endpush