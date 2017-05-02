@extends('frontend.layouts.app')
@section('title')
Home
@endsection
@section('meta')
Home
@endsection
@section('content')
<style>
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
width: 100%;
margin: auto;
height: 400px;
}
</style>
<div class="row"><div class="col-md-12">
{{session('email')}}
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{{asset('images/slider1.jpg')}}" alt="Chania">
			</div>
			<div class="item">
				<img src="{{asset('images/slider2.jpg')}}" alt="Chania">
			</div>
			<div class="item">
				<img src="{{asset('images/slider3.jpg')}}" alt="Flower">
			</div>
			<div class="item">
				<img src="{{asset('images/slider1.jpg')}}" alt="Flower">
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div></div>
<div class="row">
	<div class="col-md-12">
		<h1>Introduction</h1>
		<p>The blockquote element is used to present content from another source:</p>
		<blockquote>
			<p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
		</blockquote>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h1>Our Events</h1>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#up-comming-event">Upcomming</a></li>
			<li><a data-toggle="tab" href="#past-event">Past Event</a></li>
		</ul>
		<div class="tab-content">
			<div id="up-comming-event" class="tab-pane fade in active">
				<h3>Upcomming</h3>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="{{asset('images/slider1.jpg')}}">
							<img src="{{asset('images/slider1.jpg')}}" alt="Lights" style="width:100%">
						</a>
						<div class="caption">
							<h1>Event Title</h1>
							<p>Short Description of event</p>
							<blockquote>
								<ul class="list-group">
									<li class="list-group-item">Venue:Baneshwor</li>
									<li class="list-group-item">Date:2017-02-03</li>
									<li class="list-group-item">Time: 11:00 AM</li>
									<li class="list-group-item"><a href="{{url('register-for-event')}}" class="btn btn-info">Register this Event</a></li>
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
								<ul class="list-group">
									<li class="list-group-item">Venue:Baneshwor</li>
									<li class="list-group-item">Date:2017-02-03</li>
									<li class="list-group-item">Time: 11:00 AM</li>
									<li class="list-group-item"><a href="{{url('register-for-event')}}" class="btn btn-info">Register this Event</a></li>
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
								<ul class="list-group">
									<li class="list-group-item">Venue:Baneshwor</li>
									<li class="list-group-item">Date:2017-02-03</li>
									<li class="list-group-item">Time: 11:00 AM</li>
									<li class="list-group-item"><a href="{{url('register-for-event')}}" class="btn btn-info">Register this Event</a></li>
								</ul>
							</blockquote>
						</div>					
					</div>					
				</div>						
			</div>
			<div id="past-event" class="tab-pane fade">
				<h3>Past Event</h3>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="{{asset('images/slider2.jpg')}}">
							<img src="{{asset('images/slider2.jpg')}}" alt="Lights" style="width:100%">
						</a>
						<div class="caption">
							<h1>Event Title</h1>
							<p>Short Description of event</p>
							<blockquote>
								<ul class="list-group">
									<li class="list-group-item">Venue:Baneshwor</li>
									<li class="list-group-item">Date:2017-02-03</li>
									<li class="list-group-item">Time: 11:00 AM</li>
									<li class="list-group-item"><a href="{{url('register-for-event')}}" class="btn btn-info">Register this Event</a></li>
								</ul>
							</blockquote>
						</div>					
					</div>					
				</div>	

				<div class="col-md-4">
					<div class="thumbnail">
						<a href="{{asset('images/slider2.jpg')}}">
							<img src="{{asset('images/slider2.jpg')}}" alt="Lights" style="width:100%">
						</a>
						<div class="caption">
							<h1>Event Title</h1>
							<p>Short Description of event</p>
							<blockquote>
								<ul class="list-group">
									<li class="list-group-item">Venue:Baneshwor</li>
									<li class="list-group-item">Date:2017-02-03</li>
									<li class="list-group-item">Time: 11:00 AM</li>
									<li class="list-group-item"><a href="{{url('register-for-event')}}" class="btn btn-info">Register this Event</a></li>
								</ul>
							</blockquote>
						</div>					
					</div>					
				</div>		

				<div class="col-md-4">
					<div class="thumbnail">
						<a href="{{asset('images/slider2.jpg')}}">
							<img src="{{asset('images/slider2.jpg')}}" alt="Lights" style="width:100%">
						</a>
						<div class="caption">
							<h1>Event Title</h1>
							<p>Short Description of event</p>
							<blockquote>
								<ul class="list-group">
									<li class="list-group-item">Venue:Baneshwor</li>
									<li class="list-group-item">Date:2017-02-03</li>
									<li class="list-group-item">Time: 11:00 AM</li>
									<li class="list-group-item"><a href="{{url('register-for-event')}}" class="btn btn-info">Register this Event</a></li>
								</ul>
							</blockquote>
						</div>					
					</div>					
				</div>			
				
			</div>
		</div>
	</div>
</div>
@endsection