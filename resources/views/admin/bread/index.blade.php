@extends('layouts.dashboard')

@section('title', 'Bread')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('bread.create') }}" class="btn btn-primary">Add New</a>
                    
                    @include('layouts.include.msg')

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Bread Paragraph</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table" cellspacing="0" width="100%">
                                <thead class="text-primary">
                                    <th width="60%">Paragraph</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ( $breads as $key=>$bread )
                                        <tr>
                                            <td>{{ $bread->paragraph }}</td>
                                            <td>{{ $bread->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('bread.show', $bread->id) }}" class="btn btn-primary btn-sm"><i class="material-icons">visibility</i></a>
                                                <a href="{{ route('bread.edit', $bread->id) }}" class="btn btn-info btn-sm"><i class="material-icons">edit</i></a>
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
