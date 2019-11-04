@extends('layouts.backend')
@section('page-title')
    Video
@stop
@section('page-content')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Video</span> - List
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
        <div class="row">
            <div class="col-lg-6">
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
                        <table class="table table-striped" id="event-table">
                            <thead>
                            <tr>
                                <th><i class="icon-menu"></i></th>
                                <th>#</th>
                                <th>video</th>
                                <th>date</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="card" action="{{route('backend.video.store')}}" method="post">
                    <div class="card-header bg-light header-elements-inline">
                        <h5 class="card-title">Add Video</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label>Video URL</label>
                            <input type="text" name="url" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
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
            /*table*/
            // Setting datatable defaults
            $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                columnDefs: [{
                    orderable: false,
                    width: 100,
                    targets: [ 5 ]
                }],
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
            $('#event-table').DataTable({
                autoWidth: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: route('backend.event.list'),
                    method:'post'
                },
                columns: [
                    { data: 'action', name: 'action' ,searchable:false,orderable:false},
                    { data: 'id', name: 'id'},
                    { data: 'title', name: 'title' },
                    { data: 'date', name: 'date' },
                    { data: 'user_id', name: 'user_id' },
                    { data: 'location', name: 'location' },
                    { data: 'is_publish', name: 'is_publish' }
                ],
                "order": [[ 1, "asc" ]],
                "columnDefs": [
                    { className: "pl-2", "targets": [ 1,2,3,4] },
                    { className: "text-center", "targets": [0] },
                ],
            });
        })
    </script>
@stop
@push('css')
@endpush
@push('js')
    <script src="{{asset('backend/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
@endpush