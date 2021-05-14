	<!DOCTYPE html>
	<html>
	<head>
		<title>CGSS-@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/navbar.css')}}">

		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        @yield('cssfile')
	</head>
		<body>	
			<div class="wrapper" >	
				@include('navbar')
				<div class="otherpage__header" style="background: rgba(0, 0, 0, 0) url({{asset('Images/4.jpg')}}) no-repeat scroll center center / cover ;">
					<div>
					<h2>@yield('title')</h2>
					<p style="text-align: center">Home  <i class="fas fa-chevron-right"></i>  @yield('title')</p>
					</div>
				</div>
				<section>
					@yield('content')
				</section>
					
			    @include('footer')
			</div>
			{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="js/jquery.min.js" type="text/javascript" ></script>
			 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
			 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>	
			<script src="https://kit.fontawesome.com/0b73ceb758.js" crossorigin="anonymous"></script>	 --}}
			<script src="{{asset('newjsfile/navbar.js')}}"></script>
			<script
			src="https://kit.fontawesome.com/0b73ceb758.js"
			crossorigin="anonymous"
			></script>
            @yield('javascriptContent')
	</body>
	</html>