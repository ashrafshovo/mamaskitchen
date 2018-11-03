@extends('layouts.app')

@section('title', 'Slider')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="col-md-6 col-md-offset-3">
					
<form id="LoginValidation" action="" method="">
    <div class="card ">
	    <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">contacts</i>
            </div>
            <h4 class="card-title">Login Form</h4>
        </div>
        <div class="card-body ">
            <div class="form-group">
            	<label for="exampleEmails" class="bmd-label-floating"> Email Address *</label>
            	<input type="email" class="form-control" id="exampleEmails" required="true" name="emailadress">
    	    </div>
	        <div class="form-group">
	            <label for="examplePasswords" class="bmd-label-floating"> Password *</label>
	            <input type="password" class="form-control" id="examplePasswords" required="true" name="password">
	        </div>
        	<div class="category form-category">* Required fields</div>
    	</div>
        <div class="card-footer ml-auto mr-auto">
        	<button type="submit" class="btn btn-rose">Login</button>
         </div>
    </div>
</form>
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




