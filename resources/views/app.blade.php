	<!DOCTYPE html>
	<html>
	<head>
		<title>CGSS-@yield('title')</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
			
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="stylefile/owl.carousel.min.css">
		
		
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<link rel="stylesheet" type="text/css" href="css/default.css">
		<link rel="stylesheet" type="text/css" href="stylefile/style.css">


		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="stylefile/lightbox.min.css">
         


          
        </style>
	</head>
		<body>	<div class="wrapper" >
				

				@include('navbar')
				<section>
					<div class="ht__bradcaump__area text-center" data--black__overlay="4" style="background: rgba(0, 0, 0, 0) url(Images/4.jpg) no-repeat scroll center center / cover ;">
						<div class="ht__bradcaump__wrap text-center">
							<div class="container">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="bradcaump__inner text-center">
											<h2 class="bradcaump-title">@yield('title')</h2>
											<nav class="bradcaump-inner">
												<a class="breadcrumb-item" href="index.html">Home</a>
												<span class="brd-separetor"><i class="fas fa-chevron-right"></i></span>
												<span class="breadcrumb-item active">@yield('title') </span>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					@yield('content')
				</section>
					
					
						
					
	          
			    @include('footer')



				


				
				
				


			</div>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


			<script src="js/jquery.min.js" type="text/javascript" ></script>
			 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
			 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="js/owl.carousel.min.js" type="text/javascript"></script>
			
			
			
			
@yield('javascriptContent')
	</body>
	</html>