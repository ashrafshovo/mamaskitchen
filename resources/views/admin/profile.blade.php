@extends('layouts.dashboard')

@section('title', 'Admin || Profile')

@push('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
			<div class="col-md-8">
				{{-- @include('layouts.include.msg') --}}

				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="card-title">Edit Profile</h4>
						<p class="card-category">Complete your profile</p>
					</div>
					<div class="card-content">
						<form method="post" action="{{ route('profile.update') }}">
							@csrf
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="bmd-label-floating"> Name</label>
										<input name="name" type="text" class="form-control" value="{{ Auth::user()->name }}">

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
									<div class="form-group">
										<label class="bmd-label-floating">Email address</label>
										<input name="email" type="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
									</div>
								</div>
							</div>
							
							{{-- <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Password</label>
										<input name="password" type="password" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Confirm Password</label>
										<input name="password_confirmation" type="password" class="form-control">
									</div>
								</div>
							</div> --}}

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>About Me</label>
										<div class="form-group">
											<label class="bmd-label-floating"></label>
											<textarea name="about" id="mytextarea">{{ Auth::user()->about }}</textarea>
										</div>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary pull-right">Update Profile</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-profile">
					<div class="card-avatar">
						<a href="javascript:;">
							<img class="img" src="{{ asset('uploads/user/'.Auth::user()->image) }}" />
						</a>
					</div>
					<div class="card-body">
						<h6 class="card-category text-gray">CEO / Co-Founder</h6>
						<h4 class="card-title">{{ Auth::user()->name }}</h4>
						<p class="card-description">
							{!! Auth::user()->about !!}
						</p>
						<a href="{{ route('admin.profile.picture') }}" class="btn btn-primary btn-round">Change Picture</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
	<script src="{{ asset('back/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

	{{-- <script src="https://cdn.tiny.cloud/1/u5hgn4ma1o9chnh0cn9vs2lgn8pjwy78klq2hc4yan5k8u3e/tinymce/6/tinymce.min.js" referrerpolicy="origin"> --}}
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').DataTable();
		});
	</script>

	<script>

			tinymce.init({

				selector: '#mytextarea',

				plugins: [

					'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',

					'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',

					'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'

				],

				toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +

					'alignleft aligncenter alignright alignjustify | ' +

					'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'

			});

		</script>
		{!! Toastr::message() !!}
		
@endpush
