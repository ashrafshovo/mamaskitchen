@extends('layouts.dashboard')

@section('title', 'Admin')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @include('layouts.include.msg')

                    <a href="{{ route('admin.create') }}" class="btn btn-primary">Add New</a>
                    
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Admin</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table" cellspacing="0" width="100%">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    @if($users->count()>0)
                                        @foreach ($users as $key=>$user )
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}
                                                <td><img class="img-responsive img-thumbnail" style="width: 100px;height: 100px;" src="{{ asset('uploads/user/'. $user->image) }}"></td>
                                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a href="{{ route('admin.show', $user->id) }}" class="btn btn-primary btn-sm"><i class="material-icons">visibility</i></a>
                                                    @if(Auth::user()->role == "admin" && Auth::user() != $user)
                                                        <a href="{{ route('admin.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="material-icons">edit</i></a>

                                                        
                                                        <form id="delete-from-{{ $user->id }}" action="{{ route('admin.destroy', $user->id) }}" style="display:none;" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        <button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-from-{{ $user->id }}').submit();
                                                        } else {
                                                            event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <h3>No Data Found.</h3>
                                    @endif
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
    {!! Toastr::message() !!}
@endpush
