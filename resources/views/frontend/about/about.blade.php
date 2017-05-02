@extends('frontend.layouts.app')
@section('title')
About
@endsection
@section('meta')
About
@endsection
@section('content')
<div class="jumbotron jumbotron-sm">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<h1 class="h1">
				About <small>Let's know more </small></h1>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<img class="img-responsive" src="{{asset('images/slider1.jpg')}}">

	</div>
	<div class="col-md-8">
		<h1>About us</h1>
		<p>The blockquote element is used to present content from another source:</p>
		<blockquote>
			<p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
		</blockquote>		
	</div>
</div>
@endsection