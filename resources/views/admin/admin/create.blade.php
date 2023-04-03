@extends('layouts.dashboard')

@section('title', 'Admin || Create')

@push('css')

	<style type="text/css">
		.danger{
			color: #bd3756;
		}
	</style>
@endpush

@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					{{-- @include('layouts.include.msg') --}}

					<div class="card">
						<div class="card-header" data-background-color="purple">
							<h4 class="title">Add New Admin</h4>
							<!-- <p class="category">Here is a subtitle for this table</p> -->
						</div>
						<div class="card-content">
							<form method="post" action="{{ route('admin.store') }}">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Name</label>
											<input type="text" class="form-control" name="name">
											@error('name')
												<span class="invalid-feedback danger" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Email</label>
											<input type="email" class="form-control" name="email">
											@error('email')
												<span class="invalid-feedback danger" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Password</label>
											<input type="password" class="form-control" name="password">
											@error('password')
												<span class="invalid-feedback danger" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
								</div>
								<a href="{{ route('admin.index') }}" class="btn btn-danger">Back</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@push('scripts')

@endpush
