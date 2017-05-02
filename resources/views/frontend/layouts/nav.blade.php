<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/')}}">{{$client['name']}}</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/')}}" id="home">Home</a></li>
      <li><a href="{{url('/about')}}" id="about">About</a></li>
      <li><a href="{{url('/contact')}}" id="contact" >Contact</a></li>
      <li><a href="{{url('/events')}}" id="events">Events</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('/signup')}}" id="signup" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{url('/user/login')}}" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="{{url('/login')}}" id="login"><span class="glyphicon glyphicon-log-in"></span> ClientLogin</a></li>
    </ul>
  </div>
</nav>