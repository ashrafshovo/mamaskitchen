@extends('layouts.dashboard')

@section('title', 'Featured Dish')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('featureddish.create') }}" class="btn btn-primary">Add New Featured Dish</a>

                    @include('layouts.include.msg')

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Featured Dish</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table" cellspacing="0" width="100%">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Dish Name</th>
                                    <th>Menu Category Name</th>
                                    <th>Description</th>
                                    <th>People</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ( $items as $key=>$item )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->menu_category->name }}</td>
                                            <td>{{ $item->about }}</td>
                                            <td>{{ $item->peo }}:{{ $item->ple }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                @if($item->status == false)
                                                    <span class="label label-primary">Normal</span>
                                                @else
                                                    <span class="label label-success">Special</span>
                                                @endif
                                            </td>
                                            
                                            <td>
                                                @if($item->status == false)

                                                    <form id="status-from-{{ $item->id }}" action="{{ route('featureddish.status', $item->id) }}" style="display:none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button class="btn btn-success btn-sm" type="button" onclick="if(confirm('Are you confirm this dish as special?')){
                                                        event.preventDefault();
                                                        document.getElementById('status-from-{{ $item->id }}').submit();
                                                    } else {
                                                        event.preventDefault();
                                                    }"><i class="material-icons">done</i></button>
                                                @else
                                                    <form id="status-from-{{ $item->id }}" action="{{ route('featureddish.unstatus', $item->id) }}" style="display:none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button class="btn btn-success btn-sm" type="button" onclick="if(confirm('Are you confirm this dish will be normal?')){
                                                        event.preventDefault();
                                                        document.getElementById('status-from-{{ $item->id }}').submit();
                                                    } else {
                                                        event.preventDefault();
                                                    }"><i class="material-icons">undo</i></button>

                                                @endif

                                                <a href="{{ route('featureddish.edit', $item->id) }}" class="btn btn-info btn-sm"><i class="material-icons">edit</i></a>

                                                <form id="delete-from-{{ $item->id }}" action="{{ route('featureddish.destroy', $item->id) }}" style="display:none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-from-{{ $item->id }}').submit();
                                                } else {
                                                    event.preventDefault();
                                                }"><i class="material-icons">delete</i></button>
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
