@extends('app')
@section('title', 'gallery')
@section('content')
                     <div class="container">
                     <div class="External__body">
                     <h2 class="External__title">CGSS Gallery</h2>
                     </div> 

<div class="row">

    <div class="col-lg-12">
    <ul class="filters text-center" style='padding:0px;margin:0px;'>
          <li class="active" data-filter="*"><a href="#!">All</a></li>
          <li class="active" data-filter=".youtube"><a href="#!">Videos</a></li>
            @foreach ($data_title as $data)
         <li data-filter=".class{{$data->id}}"><a href="#!">{{$data->Title}}</a></li>
@endforeach
        </ul>  
        <div class="projects">

            <div class="row">
                
            @foreach ($data_array as $gallery_data)
@foreach ($gallery_data as $data)
<div class="col-lg-4 item class{{$data->title_id}}">                
                <div class="card">
                    <div class="card-head" style=" overflow: hidden; cursor: zoom-in;">
                    <a href="{{asset('upload/gallery/'.$data->photo)}}" data-lightbox="mygallery" data-title="@php
$posts= App\Title::find($data->title_id);
echo $posts->Title;
@endphp"> <img src="upload/gallery/{{$data->photo}}" alt="Mountains" style="height:200px;width:100%"></a>    
                    </div>


                </div>
            </div>
@endforeach
@endforeach
<div class="item youtube">
    <div class="row ">
     <?php 
//Get videos from channel by YouTube Data API
     $API_key    = 'AIzaSyBGrI5mdHSxIrhwNPWub4sFbPqT5iwSwTw';
     $channelID  = 'UC8F-_9Ldh4yXmlk1_-AwYKQ';
     $maxResults = 20;
     ini_set("allow_url_fopen", 1);

     $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
     foreach($videoList->items as $item){
    //Embed video
        
        if(isset($item->id->videoId)){
            echo '<div class="col">
            <iframe "width="400" height="200" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
            <h2>'. $item->snippet->title .'</h2>
            </div>';
        }
    }
    ?>
        
    </div>
    
</div>
                
            </div>

        </div>

    </div>

</div>

</div>



   <!-- <div class="container">
    <div class="External__body">
       <h2 class="External__title" style="    margin-top: 0px;
       margin-bottom: 5px;
       padding-bottom: 0px;">Event Videos</h2>
   </div> 
</div> -->
<!-- <div class="main" style="padding:0px 0px;"> 
    <div class="row publication">
        <div class="column" style="overflow:hidden;padding:0px">
            <div class="content">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/ZOgVVDRc6r0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="column" style="overflow:hidden;padding:0px">
            <div class="content">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/WyDPMaw01oI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="column" style="overflow:hidden;padding:0px">
            <div class="content">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/shRX3575kMY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="column" style="overflow:hidden;padding:0px">
            <div class="content">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/shRX3575kMY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <!-- END GRID -->
    </div>
    <!-- END MAIN -->
</div> -->

@endsection
@section('javascriptContent')

    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/isotope.min.js" type="text/javascript"></script>
    
<script>
      $(document).ready(function(){

'use strict';


var $projects = $('.projects');

$projects.isotope({
    itemSelector: '.item',
    layoutMode: 'fitRows'
});

$('ul.filters > li').on('click', function(e){

    e.preventDefault();

    var filter = $(this).attr('data-filter');

    $('ul.filters > li').removeClass('active');
    $(this).addClass('active');

    $projects.isotope({filter: filter});

});
$('.card').mouseenter(function(){
    $(this).find('.card-hover').css({'top':'0'});

}).mouseleave(function(){
    $(this).find('.card-hover').css({'top':'100%'});

});
});
</script>

@endsection