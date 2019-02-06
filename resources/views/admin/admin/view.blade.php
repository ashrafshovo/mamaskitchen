@extends('layouts.app')

@section('title', 'Admin || Profile')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
				<div class="col-md-10 col-md-offset-1">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <img class="img" src="{{ asset('uploads/user/'.$user->image) }}" />
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">{{ $user->role }}</h6>
                                    <h4 class="card-title">{{ $user->name }}</h4>
                                    <p class="card-content">
                                        {{ $user->about }}
                                    </p>
                            <a href="{{ URL::previous() }}" class="btn btn-primary btn-round">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')

@endpush
