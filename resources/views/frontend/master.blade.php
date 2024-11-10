<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recycling</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
	<link href="{{url('/uploads/js/font-awesome.min')}}" rel="stylesheet" >
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://www.templateonweb.com/cache-page/tow/css/minify/global.min.css?v1.0.42" rel="stylesheet">
	<link href="{{url('/uploads/js/index.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>

<section id="top" class="bg_green pt-2 pb-2">
<div class="container-xl">
 <div class="row top_1">
  <div class="col-md-8">
   <div class="top_1l">
    <ul class="mb-0">
		<li class="text-white d-inline-block">Welcome to Electronics Recycling </li>
		<li class="text-white d-inline-block mx-2">| </li>
		<li class="d-inline-block"> <a class="text-white " href="#">How to Find Us</a> </li>
		<li class="text-white d-inline-block mx-2">| </li>
		<li class="d-inline-block"> <a class="text-white " href="#">Give Feedback</a> </li>
	</ul>
   </div>
  </div>
  <div class="col-md-4">
   <div class="top_1r text-end">
      <div class="input-group">
				<input type="text" class="form-control border-0 bg-transparent text-white" placeholder="Search Keyword">
				<span class="input-group-btn">
					<button class="btn btn-primary col_blue bg-transparent rounded-0 p-1 px-3 border-0" type="button">
						<i class="fa fa-search"></i> </button>
				</span>
		</div>
   </div>
  </div>
 </div>
</div>
</section>

@include('frontend.partials.header')

@yield('content')
   
@include('frontend.partials.footer')
<script>
window.onscroll = function() {myFunction()};
var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;
function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
	
</script>
</body>


</html>