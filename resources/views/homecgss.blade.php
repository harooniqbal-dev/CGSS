@extends('layouts.front')
@section('title')
 CGSS School
 @endsection
 @section('content')
		<div class="wrapper" >

					<div id="owl-c" class="owl-carousel owl-theme"  >
						 <div class="item">
						 	<img loading=lazy style="display: block;height: 600px;width: 100%;"
						 	src="Images/Slider/Main.jpg" alt="The Last of us">
						 	<div class="item-caption" >
						 		<h1 class="animated heartBeat">Welcome to CGSS </h1>
						 		<p class="animated bounceInLeft">CGSS is one of the Pakistani’s Leading  school with a national & internatioal reputation & its  motto is striving for  Ahsan – e- Taqweem </p>

						 	</div>
						 </div>
						 <div class="item"><img loading=lazy  style="display: block;height: 600px;width: 100%;"
						 	src="Images/Slider/Jr.jpg" alt="Main">
						 	<div class="item-caption">
						 		<h1 class="animated heartBeat">Welcome to CGSS</h1>
						 		<p class="animated bounceInLeft">CGSS is one of the Pakistani’s Leading  school with a national & internatioal reputation & its  motto is striving for  Ahsan – e- Taqweem </p>

						 	</div>

						 </div>
						 <div class="item"><img loading=lazy  style="display: block;height: 600px;width: 100%;"
						 	src="Images/Slider/Ja.JPG" alt="Mirror Edge">
						 	<div class="item-caption">
						 		<h1  class="animated heartBeat">Welcome to CGSS</h1>
						 		<p class="animated bounceInLeft">CGSS is one of the Pakistani’s Leading  school with a national & internatioal reputation & its  motto is striving for  Ahsan – e- Taqweem </p>

						 	</div>
						 </div>
						 <div class="item"><img loading=lazy  style="display: block;height: 600px;width: 100%;"
						 	src="Images/Slider/Head.JPG" alt="Mirror Edge">
						 	<div class="item-caption">
						 		<h1 class="animated heartBeat">Welcome to CGSS</h1>
						 		<p class="animated bounceInLeft">CGSS is one of the Pakistani’s Leading  school with a national & internatioal reputation & its  motto is striving for  Ahsan – e- Taqweem </p>

						 	</div>
						 </div>

					</div>
					<section class="site-section">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="section_title text-left">
										<h2 class="title_line">
											Chairman Message
										</h2>

									</div>

								</div>


							</div>
							<div class="row Mission_wrapper">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-justify">
									<p>
										Connoisseur grammar school system (CGSS) is about to complete its journey of three decades. The institution is blessed with a very dedicated and a professional team which has proved its metal over a period of time. CGSS is an institute with a special blend of educational excellence and character development. It is our keen focus to develop a balanced emotionally stable knowledgeable self-confident expressive and useful individuals for the mankind. Connoisseurians willingly take interest in Co-curricular and extracurricular activities. Charity work is also significant role of our students which inculcate humanity love and care. We are proud to have our slogan "Once a connoisseurian always a connoisseurian"
                                            Quranic language Recitation of Quran with proper tjweed and makharij, hifz of Quran and seerat-un-Nabi (SAWW) is another plume of success worth mentioning
									</p>

									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
										<div class="Mission_thumb">
											<!-- <img loading=lazy src="Images/Mi.jpg"> -->
											<img loading=lazy class="img-responsive" src="Images/Chairman.jpg" style="height: 400px;">
										</div>

									</div>




							</div>


						</div>

					</section>
					<section class="site-section">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="section_title text-left">
										<h2 class="title_line">
											Mission & Vision
										</h2>

									</div>

								</div>


							</div>
							<div class="row Mission_wrapper">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
										<div class="section_title_2 text-left">
											<h4 class="title_line_2">
												Mission
											</h4>
											<p class="Mission_details">
												To Achieve spiritual excellence through Academic  Excellence for Becoming Best Educational Institute Nationally and Internationally
											</p>
											<h4 class="title_line_2">
												Vision
											</h4>
											<p class="Vision_details">
												To strive for becoming FRIENDS of ALLAH by creating culture of TRUTH ( HUMANIZATION) for actualization of NOOR thereby attaining Ahsan-i-Taqweem ( ENLIGHTENMENT OF SOUL).
											</p>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
										<div class="Mission_thumb">
											<!-- <img loading=lazy src="Images/Mi.jpg"> -->
											<img loading=lazy src="Images/Vision2.jpg">
										</div>

									</div>




							</div>


						</div>

					</section>
	            <div>
	            	<div id="map"></div>


				</div>
		@endsection














			</div>
			<input type="text" style="display: none;" id="activi" value="{{$data->Active}}" name="">

			<div class="modal fade" style="top: 129px;" id="show_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#167ac6;      ">
							<h5 class="modal-title" id="exampleModalLabel">Notifications</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<textarea id="about" rows="2"  name="about" cols="20" style="display: none;">{{$data->Description}}</textarea>
							<div id="container" ></div>
						</div>

					</div>
				</div>
			</div>

