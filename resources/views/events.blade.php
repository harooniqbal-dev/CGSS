<!DOCTYPE html>
<html>
<head>
	<title>CGSS Events</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="css/slider.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/default.css">
         <style type="text/css">
            .container{
    text-align: center;
}
        </style>

</head>
<body>

	<div>
        @include('navbar')
		<div class="ht__bradcaump__area text-center" data--black__overlay="4" style="background: rgba(0, 0, 0, 0) url(Images/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Events</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="fas fa-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Events </span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Event_info">
        	<div class="container">
        		<div class="event_title text-left">
        			<h2 class="e_title_line">
        				Events
        			
        			</h2>
        			<span class="e_line">
        				
        			</span>
        		</div>
        		<div class="row">
                    @foreach($data as $event)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="event_display">
                            <figure>
                            <img src="{{ asset('upload/events/'.$event->event_image)}}" style="width: -webkit-fill-available;height: 150px;"class="img-responsive">
                                <div class="evt_fig_title">{{$event->event_name}}</div>
                                
                        </figure>
                        <figcaption>
                            <p class="p-short">
                                {{$event->event_short}}
                                <a href="/eventdetail/{{$event->id}}" class="btn evt_btn" >Read More</a>
                            </p>
                        </figcaption>
                        </div>
                        

                    </div>
                    @endforeach

        			
        		</div>
        			
        		</div>

        		
        	</div>
        	
        </div>
        @include('footer')
         <script src="js/jquery.min.js" type="text/javascript" ></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="js/owl.carousel.min.js"type="text/javascript"></script>
	

</body>
</html>