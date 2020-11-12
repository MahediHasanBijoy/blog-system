@extends('layouts.admin')



@section('content')
	
	<h1>Create User</h1>


	<form action="{{url('admin/users')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="status">Status:</label>
			<select name="is_active" id="status" class="form-control">
				<option value="1">Active</option>
				<option value="0" selected="selected">Not Active</option>
			</select>
		</div>
		<div class="form-group">
			<label for="file">Upload File:</label>
			<input name="file" type="file" class="form-control">
		</div>
		<div class="form-group">
			<label for="role_id">Role:</label>
			<select name="role_id" id="role_id" class="form-control"  >
				<option value="" selected="selected">Choose Option</option>
				@foreach ($roles as $key=>$value)
		
				<option value="{{$key}}">{{$value}}</option>
				
				@endforeach


			</select>
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" class="form-control">
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit" name="submit">Create User</button>
		</div>
	</form>


	@include('admin.includes.formerror')




@endsection