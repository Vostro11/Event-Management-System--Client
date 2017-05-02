<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

@include('frontend.layouts.nav')
  
<div class="container">
  @yield('content')
</div>
@include('frontend.layouts.footer')
</body>
<script type="text/javascript">
$(document).ready(function () {  
    $(".nav li").removeClass("active");
    var page = location.pathname.split('/').pop();
    $('#'+page).parent().addClass('active');   
    //alert(page);
});

</script>
</html>
