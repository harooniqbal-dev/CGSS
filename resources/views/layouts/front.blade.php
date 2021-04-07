<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="css/slider.css">


        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="css/default.css">
		<link rel="stylesheet" type="text/css" href="css/owl.css">
</head>
<body>


    @include('navbar')
    @yield('content')



    @include('footer')
    @include('layouts.scripts')
</body>
</html>
