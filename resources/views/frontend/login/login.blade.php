@extends('frontend.layouts.app')
@section('title')
Login
@endsection
@section('meta')
Login
@endsection
@section('content')
<div class="jumbotron jumbotron-sm">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<h1 class="h1">
				Login <small> </small></h1>
			</div>
		</div>
	</div>
</div>

<form>
	<div class="form-group">
		<label for="email">Email address:</label>
		<input type="email" class="form-control" id="email">
	</div>
	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="pwd">
	</div>
	<div class="checkbox">
		<label><input type="checkbox"> Remember me</label>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection