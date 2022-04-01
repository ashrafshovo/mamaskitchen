@extends('layouts.dashboard')

@section('title', 'Contact')

@push('css')
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {!! Toastr::message() !!}
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">{{ $contact->subject }}</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Name: {{ $contact->name }}</strong><br>
                                    <b>Email: {{ $contact->email }}</b><br>
                                    <strong>Message:</strong><hr>
                                    <p>{{ $contact->message }}</p><hr>

                                </div>
                            </div>
                            <a href="{{ route('contact.index') }}" class="btn btn-danger">Back</a>
                            <div class="clearfix"></div>
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
@endpush
