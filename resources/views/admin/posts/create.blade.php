@extends('layouts.admin')


@section('content')



	<h1><b>Create Posts</b></h1>

	<div class="row">
		<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" id="title" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="category_id">Category:</label>
				<select name="category_id" id="category_id" class="form-control">
					<option value="1">PHP</option>
					<option value="2">Javascript</option>
				</select>
			</div>
			<div class="form-group">
				<label for="photo_id">Photo:</label>
				<input type="file" id="photo_id" name="photo_id" class="form-control">
			</div>
			<div class="form-group">
				<label for="body">Description:</label>
				<textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="create">Create Post</button>
			</div>
		</form>
	</div>

	<div class="row">
		@include('admin.includes.formerror')
	</div>
@endsection