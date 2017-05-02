@extends('frontend.layouts.app')
@section('title')
Events
@endsection
@section('meta')
Events
@endsection
@section('content')
<div class="jumbotron jumbotron-sm">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<h1 class="h1">
				Event <small> we conduct</small></h1>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="thumbnail">
			<a href="{{asset('images/slider1.jpg')}}">
				<img src="{{asset('images/slider1.jpg')}}" alt="Lights" style="width:100%">
			</a>
				<div class="caption">
					<h1>Event Title</h1>
					<p>Short Description of event</p>
					<blockquote>
						<p>Main focus in event For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
					</blockquote>
					<blockquote>
						<ul class="list-group">
							<li class="list-group-item">Venue:Baneshwor</li>
							<li class="list-group-item">Date:2017-02-03</li>
							<li class="list-group-item">Time: 11:00 AM</li>
							<li class="list-group-item"><a href="{{url('register-for-event')}}" class="btn btn-info">Register For this Event</a></li>
						</ul>
					</blockquote>
				</div>			
		</div>
	</div>

	<div class="col-md-4">
		<div class="thumbnail">
			<a href="{{asset('images/slider1.jpg')}}">
				<img src="{{asset('images/slider1.jpg')}}" alt="Lights" style="width:100%">
			</a>
				<div class="caption">
					<h1>Event Title</h1>
					<p>Short Description of event</p>
					<blockquote>
						<p>Main focus in event For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
					</blockquote>
					<blockquote>
						<ul class="list-group">
							<li class="list-group-item">Venue:Baneshwor</li>
							<li class="list-group-item">Date:2017-02-03</li>
							<li class="list-group-item">Time: 11:00 AM</li>
							<li class="list-group-item"><a href="{{url('register-for-event')}}" class="btn btn-info">Register For this Event</a></li>
						</ul>
					</blockquote>
				</div>			
		</div>
	</div>

	<div class="col-md-4">
		<div class="thumbnail">
			<a href="{{asset('images/slider1.jpg')}}">
				<img src="{{asset('images/slider1.jpg')}}" alt="Lights" style="width:100%">
			</a>
				<div class="caption">
					<h1>Event Title</h1>
					<p>Short Description of event</p>
					<blockquote>
						<p>Main focus in event For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
					</blockquote>
					<blockquote>
						<ul class="list-group">
							<li class="list-group-item">Venue:Baneshwor</li>
							<li class="list-group-item">Date:2017-02-03</li>
							<li class="list-group-item">Time: 11:00 AM</li>
							<li class="list-group-item"><a href="{{url('register-for-event')}}" class="btn btn-info">Register For this Event</a></li>
						</ul>
					</blockquote>
				</div>			
		</div>
	</div>
	
</div>
@endsection