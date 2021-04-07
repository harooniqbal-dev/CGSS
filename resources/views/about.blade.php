@extends('app')
@section('title', 'about')
@section('content')
<section class="MV__statement" style="padding-top:40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="M__statement">
                        <h2 class="M__title">Mission</h2>
                        <p>To Achieve spiritual excellence through Academic Excellence
for Becoming Best Educational Institute Nationally and Internationally</p>
                    </div>
                    <div class="V__statement">
                        <h2 class="V__title">Vision</h2>
                        <p>To strive for becoming FRIENDS of ALLAH by creating culture of
TRUTH ( HUMANIZATION) for actualization of NOOR thereby
attaining Ahsan-i-Taqweem ( ENLIGHTENMENT OF SOUL). </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="MV__image" >
                        <img src="{{asset('Images/mission.PNG')}}" class="img-fluid">
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<!--
  ===============================
  ===  Start History section  ===
  ===============================
-->
<section class="history">
    <div class="container">
      <div class="row">
          <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
              <div class="history__content">
                  <h2 class="history__title">History</h2>
                  <p>It was in 1996 that the institution started its divine journey towards perfection. In a very short span of time, it got recognition from the educational circles and society.
                  </p>
                  <ul class="history__list">
                      <li>Formally affiliated with Federal Board of Intermediate and Secondary Education Islamabad on 2002 under the registration code 2869.</li>
                      <li>The first batch of matriculation appeared in the Federal Board of Intermediate Examination in the year 2003.</li>
                      <li>It was declared as examination center and given the recognition by British Council on 2008 under the registration code PK902.</li>
                      <li>The first formal batch of O’ level appeared in year 2008. </li>
                      <li>The Hifz-e- Quarn Program is a distinctive specialty of CGSS. It was Started in August  2006.</li>
                  </ul>
                  <p style="font-size: larger;">Click <a style="color: blue;" target="_blank" href="">here </a> for hierarchy</p>
              </div>
          </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
          <div class="history__pic">
              <img src="{{asset('Images/Capture.PNG')}}" class="img-fluid">
          </div>
      </div>
      </div>
    </div>
</section>
<!--
  ===============================
  ===   end History section   ===
  ===============================
-->
<!--
  ===============================
  ===  Start CAMPUSES section ===
  ===============================
-->
<section class="Campuses">
    <div class="container">
    <div class="Campuses__body">
             <h2 class="Campuses__title">Our Campuses</h2>
         </div>
      <div class="row">
                       <div id="owl-carousel"class="owl-carousel owl-theme">
    <div class="item"><div class="card border-bottom-0" style="width: 20rem;">
  <img src="{{asset('Images/Slider/Main.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MAIN BRANCH( SARGODHA)</h5> 
  </div>
</div></div>
    <div class="item"><div class="card border-bottom-0" style="width: 20rem;">
  <img src="{{asset('Images/Slider/Head.JPG')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HEAD OFFICE ( BOYS BRANCH,
SARGODHA)
</h5> 
  </div>
</div></div>
    <div class="item"><div class="card border-bottom-0" style="width: 20rem;">
  <img src="{{asset('Images/Slider/Jr.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jr. MATRIC BRANCH ( SARGODHA)</h5>  
  </div>
</div></div>
    <div class="item"><div class="card border-bottom-0" style="width: 20rem;">
  <img src="{{asset('Images/Slider/Ja.JPG')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">JAUHARABAD BRANCH</h5>
  </div>
</div></div>  
</div>
          </div>
      </div>
    
</section>
@endsection
@section('javascriptContent')
<script>
       $( document ).ready(function() {

    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
        autoplayTimeout:5000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})
});
    
      </script>
@endsection