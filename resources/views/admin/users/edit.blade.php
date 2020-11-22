@extends('layouts.admin')



@section('content')
	
	<h1>Edit User</h1>

	<div class="row">

		<div class="col-sm-3">
			<img src="{{$user->photo?$user->photo->file:'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
		</div>

		<div class="col-sm-9">
			<form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
				@method('PATCH')
				@csrf
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" id="name" name="name"  value="{{$user->name}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" value="{{$user->email}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="status">Status:</label>
					<select name="is_active" id="status" class="form-control">
						<option value="1" {{1==$user->is_active?"selected":''}}>Active</option>
						<option value="0" {{0==$user->is_active?"selected":''}}>Not Active</option>
					</select>
				</div>
				<div class="form-group">
					<label for="photo_id">Upload File:</label>
					<input name="photo_id" type="file" class="form-control">
				</div>
				<div class="form-group">
					<label for="role_id">Role:</label>
					<select name="role_id" id="role_id" class="form-control"  >
						@foreach ($roles as $key=>$value)

						@if ($user->role->id == $key)
							<option value="{{$key}}" selected="selected">{{$value}}</option>
						@else

						<option value="{{$key}}">{{$value}}</option>
						@endif


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

		</div>
	</div>

	<div class="row">
		@include('admin.includes.formerror')

	</div>
	



@endsection