@extends('layouts.app')

@section('title', 'Have Slider')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('haveslider.create') }}" class="btn btn-primary">Add New</a>

                    @include('layouts.include.msg')

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Have Slider</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table" cellspacing="0" width="100%">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $key=>$slider )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $slider->title }}</td>
                                            <td><img class="img-responsive img-thumbnail" style="width: 100px;height: 100px;" alt="thumbnail" src="{{ asset('uploads/haveslider/'.$slider->image) }}"></td>
                                            <td>{{ $slider->created_at->diffForHumans() }}</td>
                                            <td>{{ $slider->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('haveslider.edit', $slider->id) }}" class="btn btn-info btn-sm"><i class="material-icons">edit</i></a>

                                                <form id="delete-from-{{ $slider->id }}" action="{{ route('haveslider.destroy', $slider->id) }}" style="display:none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-from-{{ $slider->id }}').submit();
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
