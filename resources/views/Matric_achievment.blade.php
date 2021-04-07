<!DOCTYPE html>
    <html>
    <head>
        <title>CGSS Achievmetents</title>
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
        @include('navbar')
        <div class="ht__bradcaump__area text-center" data--black__overlay="4" style="background: rgba(0, 0, 0, 0) url(Images/4.jpg) no-repeat scroll center center / cover ;">
                <div class="ht__bradcaump__wrap text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="bradcaump__inner text-center">
                                    <h2 class="bradcaump-title">CGSS Achievments</h2>
                                    <nav class="bradcaump-inner">
                                      <a class="breadcrumb-item" href="index.html">Home</a>
                                      <span class="brd-separetor"><i class="fas fa-chevron-right"></i></span>
                                      <span class="breadcrumb-item active">Achievments </span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="matric_info">
                    <div class="matric_title text-left">
                        <h2 class="a_title_line">
                            Matriculation Result Achievments

                        </h2>
                        <span class="a_line">

                        </span>
                    </div>
                    
                </div>
               
                
                
                

                
                

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                {{$datamy2[2]}}
                                
                            </h2>
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderd table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Sr.
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Marks
                                        </th>
                                    </tr>
                                </thead>
                                @foreach($datam as $matrics)
                                @if($matrics->year == $datamy2[2])
                                <tr>

                                    <td>{{$matrics->id}}</td>
                                    <td>{{$matrics->name}}</td>
                                    <td>{{$matrics->marks}}</td>

                                    
                                </tr>
                                @endif
                                @endforeach
                            </table>
                             
                        </div>
                    

                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                 {{$datamy2[1]}}
                                
                            </h2>
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderd table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Sr.
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Marks
                                        </th>
                                    </tr>
                                </thead>
                                <tr>
                                    @foreach($datam as $matrics)
                                @if($matrics->year == $datamy2[1])
                                <tr>

                                    <td>{{$matrics->id}}</td>
                                    <td>{{$matrics->name}}</td>
                                    <td>{{$matrics->marks}}</td>

                                    
                                </tr>
                                @endif
                                @endforeach
                                </tr>
                                
                            </table>
                             
                        </div>
                    

                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                 {{$datamy2[0]}}
                                
                            </h2>
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderd table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Sr.
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Marks
                                        </th>
                                    </tr>
                                </thead>
                                <tr>
                                    @foreach($datam as $matrics)
                                @if($matrics->year == $datamy2[0])
                                <tr>

                                    <td>{{$matrics->id}}</td>
                                    <td>{{$matrics->name}}</td>
                                    <td>{{$matrics->marks}}</td>

                                    
                                </tr>
                                @endif
                                @endforeach
                                </tr>
                                
                            </table>
                             
                        </div>
                    

                    
                </div>
                
            </div>


            
        </div>
         <div class="achiev_pic">
            <div   class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 img-responsive">
                         <img src="Images/achiev1.PNG">
                        
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 img-responsive">
                        <img src="Images/achiev2.PNG">
                        
                    </div>
                    
                </div>
                
            </div>



            
        </div>
        @include('footer')
        <script src="js/jquery.min.js" type="text/javascript" ></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            
            
    </body>
    </html>
