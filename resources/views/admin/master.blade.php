<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')-MyCms</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta name="routeName" content="{{Route::currentRouteName()}}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> 
	<link rel="stylesheet" href ="{{ url ('/static/css/admin.css?v='.time()) }}">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js "></script>
    <script src="{{url('/static/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <script src="{{url('/static/js/admin.js?v='.time()) }}"></script>


<script>
	$(document).ready(function(){
	 $('[data-toggle="tooltip"]').tooltip()
});
</script>

</head>
<body>
	<div class="wrapper">
		<div class="col1">@include('admin.sidebar')</div>
		<div class="col2">
			<nav class="navbar navbar-expand-lg shadow">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="{{url('/admin')}}" class="nav-link">
								<i class="fas fa-home"></i> Home 
							</a>
					</li>
				</ul>
		</div>
		</nav>

	<div class="page">

		<div class="container-fluid">
			<nav aria-label="breadcrumb shadow">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="{{url('/admin')}}" class="nav-link">
								<i class="fas fa-home"></i> Home 
							</a>
					</li>
					@section('breadcrumb')
					@show 
				</ol>
			</nav>
		</div>

 @if(Session::has('message'))
  <div class="container">
 	<div class="alert alert-{{Session::get('typealert') }} mtop 16" style="display:none;">
 		{{ Session::get('message')}}
 		@if ($errors->any())
 		<ul>
 			@foreach($errors->all() as $error)
 			<li>{{ $error }}</li>
 			@endforeach
 		</ul>
 		@endif
 		<script>
 			$('.alert').slideDown();
 			setTimeout(function(){$('.alert').slideUp();},10000);
 		</script>
 	</div>
  </div>
   @endif

    @section('content')
    @show 

	</div>
</div>
</div>
</body>
</html>