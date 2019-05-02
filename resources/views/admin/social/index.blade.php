@extends('layouts.app')

@section('title', 'Social')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('social.edit', $social->id) }}" class="btn btn-info"><i class="material-icons">edit</i></a>

                    @include('layouts.include.msg')

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Social Links</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                        </div>

                        <div class="card-content table-responsive">
                            <table id="table" class="table" cellspacing="0" width="100%">
                                <thead class="text-primary">
                                    <th>Social Provider</th>
                                    <th>Social Links</th>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>Facebook</td>
                                            <td><a  target="_blank" href="{{ $social->facebook }}">{{ $social->facebook }}</a></td>
                                        </tr>
                                        <tr>
                                            <td>Twitter</td>
                                            <td><a  target="_blank" href="{{ $social->twitter }}">{{ $social->twitter }}</a></td>
                                        </tr>
                                        <tr>
                                            <td>Google Plus</td>
                                            <td><a  target="_blank" href="{{ $social->google_plus }}">{{ $social->google_plus }}</a></td>
                                        </tr>
                                        <tr>
                                            <td>LinkedIn</td>
                                            <td><a  target="_blank" href="{{ $social->linkedin }}">{{ $social->linkedin }}</a></td>
                                        </tr>
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
