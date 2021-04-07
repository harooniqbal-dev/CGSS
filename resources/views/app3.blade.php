<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="{{asset('stylefile/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('stylefile/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('stylefile/lightbox.min.css')}}">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>CGSS - @yield('title')</title>
    <style>
        body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{asset('Images/Capture.PNG')}}");
  height: 60%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
.container{
  
}
/* @media (min-width: 990px) and (max-width: 600px){
  .hero-image{
    height: 60%;
  } */
}

    </style>
</head>

<body>
  @include('navbar')
    <!-- Start Bradcaump area -->
    <div class="hero-image">
        <div class="hero-text">
        <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">@yield('title')</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item homelink" href="index.html">Home</a>
                            <span class="brd-separetor text-white"><i class="fa fa-angle-double-right"></i></span>
                            <span class="breadcrumb-item active" style="color: #fff;
    font-family: 'Roboto Slab';font-size: 15px;font-weight: 400; text-transform: capitalize;">@yield('title')</span>
                        </nav>
                    </div>
        </div>
      </div>
    @yield('content')
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('footer')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{asset('javascript/lightbox-plus-jquery.min.js')}}"></script>
    <script src="{{asset('javascript/owl.carousel.min.js')}}"></script>
    @yield('javascriptContent')
</body>

</html>