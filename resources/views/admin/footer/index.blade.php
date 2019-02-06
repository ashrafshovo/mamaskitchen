@extends('layouts.app')

@section('title', 'Footer')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{-- <a href="{{ route('footer.create') }}" class="btn btn-primary">Add New</a> --}}

                    @include('layouts.include.msg')

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Footer Information</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table" cellspacing="0" width="100%">
                                <thead class="text-primary">
                                    <th>Site Name</th>
                                    <th>Developer Link</th>
                                    <th>Developer Name</th>
                                    <th>Theme Link</th>
                                    <th>Theme Name</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ( $footers as $key=>$footer )
                                        <tr>
                                            <td>{{ $footer->app_name }}</td>
                                            <td>{{ $footer->developer_link }}</td>
                                            <td>{{ $footer->developer_name }}</td>
                                            <td>{{ $footer->theme_by }}</td>
                                            <td>{{ $footer->theme_by_name }}</td>
                                            <td>
                                                <a href="{{ route('footer.edit', $footer->id) }}" class="btn btn-info btn-sm"><i class="material-icons">edit</i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endpush
