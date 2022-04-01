@extends('layouts.dashboard')

@section('title', 'Bread || View')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
				<div class="col-md-10 col-md-offset-1">
                    <div class="card card-profile">
                        <div class="content">
                            <h4 class="card-title">Bread Paragraph</h4>
                            <p class="card-content">
                                {{ $bread->paragraph }}
                            </p>
                            <a href="{{ route('bread.index') }}" class="btn btn-primary btn-round">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')

@endpush
