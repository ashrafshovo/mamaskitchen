@extends('layouts.app')

@section('title', 'Reservation')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                                        
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Reservations</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>



                        <div class="card-content table-responsive">
                            <table id="table" class="table" cellspacing="0" width="100%">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th style="width: 50px">Email</th>
                                    <th>Time & Date</th>
                                    {{-- <th>Message</th> --}}
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $key=>$reservation )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ $reservation->email }}</td>
                                            <td>{{ $reservation->date_and_time }}</td>
                                            {{-- <td>{{ $reservation->message }}</td> --}}
                                            <td>
                                                @if($reservation->status == true)
                                                    <span class="label label-info">Confirmed</span>
                                                @else
                                                    <span class="label label-danger">Not Confirmed Yet</span>
                                                @endif
                                            </td>
                                            <td>{{ $reservation->created_at->diffForHumans() }}</td>
                                            
                                            <td>

                                                @if($reservation->status == false)

                                                    <form id="status-from-{{ $reservation->id }}" action="{{ route('reservation.status', $reservation->id) }}" style="display:none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button class="btn btn-info btn-sm" type="button" onclick="if(confirm('Are you verify this request by phone?')){
                                                        event.preventDefault();
                                                        document.getElementById('status-from-{{ $reservation->id }}').submit();
                                                    } else {
                                                        event.preventDefault();
                                                    }"><i class="material-icons">done</i></button>

                                                @endif
                                                
                                                <form id="delete-from-{{ $reservation->id }}" action="{{ route('reservation.destroy', $reservation->id) }}" style="display:none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-from-{{ $reservation->id }}').submit();
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
    {!! Toastr::message() !!}
@endpush
