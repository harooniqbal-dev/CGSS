
<!DOCTYPE html>
<html>
<head>
	<title>CGSS School</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="css/slider.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		{{-- <link rel="stylesheet" type="text/css" href="css/default.css"> --}}
         <style type="text/css">
            .container{
    text-align: center;
}
        </style>
</head>
<body>
    @include('navbar')
	<div class="ht__bradcaump__area text-center" data--black__overlay="4" style="background: rgba(0, 0, 0, 0) url(Images/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Alumni</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="fas fa-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Alumni </span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alumni_info">
        	<div class="container">
        		<div class="alumni_title text-left">
        			<h2 class="al_title_line">
        				Alumni

        			</h2>
        			<span class="al_line">

        			</span>
        		</div>
        		<div class="row">
        			 @foreach($alumni as $alumni)
        				<div class="col-lg-3 col-md-3 col-sm-3 " >
        					<figure class="img-responsive" style="margin-bottom: 20px">
        						<img  class="img-fluid" src="{{asset('upload/alumni/'.$alumni->image)}}">

        					</figure>

        				</div>

        				<div class="col-lg-9 col-md-9 col-sm-9 " >
        					<h4 class=" al_title_c text-left">
        						{{$alumni->name}}
        					</h4>
        					<p class="alumni_p text-justify" style="margin-bottom: 20px;">
        						{{$alumni->descrip}}

        					</p>


        				</div>
                        @endforeach




        		</div>

        	</div>

        </div>
        <SECTION>
            <div class="alumni_placement">
                <div class="container">
                    <div class="alumni_title text-left">
                    <h2 class="al_title_line">
                        Placement of Alumni in national and international level

                    </h2>
                    <span class="al_line">

                    </span>
                </div>

                </div>
                <div class="Placement_info">
                    <div  class="container">
                        <div class="row">
                        <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                            <table class="table table-striped table-borderd table-hover">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Placement </th>
                                    </tr>
                                </thead>
                                <tbody>@foreach($dataplace as $placement)
                                    <tr>

                                        <td>{{$placement->student_name}}</td>
                                        <td>{{$placement->placement}}</td>

                                    </tr>@endforeach
                                </tbody>


                            </table>

                        </div>

                    </div>

                    </div>



                </div>

            </div>
        </SECTION>
        @include('footer')
            <script src="js/jquery.min.js" type="text/javascript" ></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="js/owl.carousel.min.js"type="text/javascript"></script>
</body>

</html>
