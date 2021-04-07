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
                <div class="oa_info">
                    <div class="container">
                        <div class="oa_title text-left">
                            <h2 class="a_title_line">
                                O/A Level Result  & Achievments

                            </h2>
                            <span class="a_line">
                                <p style="display: none;">{{$count=0}} {{$count1=0}}
                                    {{$count2=0}}
                                </p>

                            </span>
                        </div>


                        <div class="row">
                            <div class="col-lg-3 col-sm-3 col-md-3">
                                <div class="table_heading text-centre">
                                    <h2 class="t_heading_title">
                                        O Level

                                    </h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-borderd table-hover">
                                        <thead>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                          <!--   <th>Physics</th>
                                            <th>Chemistry</th>
                                            <th>Bio/Math</th> -->
                                            <th>Total</th></tr>

                                        </thead>
                                        <tbody>
                                           
                                            <tr> @foreach($dataoa as $da)
                                                
                                                @if($da->class=='O_level' && $da->year==$dataoay[0])

                                                @if($count==0)

                                                <td rowspan="{{$pendingMembers}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>


                                                @endif
                                                <p style="display: none;">{{$count++}}</p>
                                                <td>{{$da->name}}</td>
                                                <!-- <td>{{$da->phy}}</td>
                                                <td>{{$da->chem}}</td>
                                                <td>{{$da->biomath}}</td> -->
                                                <td>{{$da->total_Grades}}

                                                </td>

                                                @endif
                                            </tr>

                                            @endforeach



                                            <tr>@foreach($dataoa as $da)
                                                
                                                @if($da->class=='O_level' && $da->year==$dataoay[1])

                                                @if($count1==0)

                                                <td rowspan="{{$pendingMembers1}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>


                                                @endif
                                                <p style="display: none;">{{$count1++}}</p>
                                                <td>{{$da->name}}</td>
                                                <!-- <td>{{$da->phy}}</td>
                                                <td>{{$da->chem}}</td>
                                                <td>{{$da->biomath}}</td> -->
                                                <td>{{$da->total_Grades}}

                                                </td>

                                                @endif
                                            </tr>

                                            @endforeach

                                            <tr>@foreach($dataoa as $da)
                                                
                                                @if($da->class=='O_level' && $da->year==$dataoay[2])

                                                @if($count2==0)

                                                <td rowspan="{{$pendingMembers2}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>


                                                @endif
                                                <p style="display: none;">{{$count2++}}</p>
                                                <td>{{$da->name}}</td>
                                               <!--  <td>{{$da->phy}}</td>
                                                <td>{{$da->chem}}</td>
                                                <td>{{$da->biomath}}</td> -->
                                                <td>{{$da->total_Grades}}

                                                </td>

                                                @endif
                                            </tr>

                                            @endforeach


                                        </tbody>









                                    </table>



                                </div>

                            </div>
                            <div class="col-lg-9 col-sm-9 col-md-9">
                                <div class="table_heading text-centre">
                                    <h2 class="t_heading_title">
                                        A Level 

                                    </h2>
                                    <p style="display: none;">{{$count3=0}} {{$count4=0}}
                                        {{$count5=0}}
                                    </p>

                                </div>

                                <div class="table-responsive">
                                    <table class="table table-striped table-borderd table-hover">
                                        <thead>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Physics</th>
                                            <th>Chemistry</th>
                                            <th>Bio/Math</th>
                                            <th>Busniess Studies</th>
                                            <th>Total</th></tr>

                                        </thead>
                                        <tbody>

                                            <tr>@foreach($dataoa as $da)
                                                
                                                @if($da->class=='A_level' && $da->year==$dataay[0])

                                                @if($count3==0)

                                                <td rowspan="{{$pendingMembers3}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>


                                                @endif
                                                <p style="display: none;">{{$count3++}}</p>
                                                <td>{{$da->name}}</td>
                                                <td>{{$da->phy}}</td>
                                                <td>{{$da->chem}}</td>
                                                <td>{{$da->biomath}}</td>
                                                <td>{{$da->busniess}}</td>
                                                <td>{{$da->total_Grades}}

                                                </td>

                                                @endif
                                            </tr>

                                            @endforeach



                                            <tr> @foreach($dataoa as $da)
                                                
                                                @if($da->class=='A_level' && $da->year==$dataay[1])

                                                @if($count4==0)

                                                <td rowspan="{{$pendingMembers4}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>


                                                @endif
                                                <p style="display: none;">{{$count4++}}</p>
                                                <td>{{$da->name}}</td>
                                                <td>{{$da->phy}}</td>
                                                <td>{{$da->chem}}</td>
                                                <td>{{$da->biomath}}</td>
                                                <td>{{$da->busniess}}</td>
                                                <td>{{$da->total_Grades}}

                                                </td>

                                                @endif
                                            </tr>

                                            @endforeach

                                            <tr>@foreach($dataoa as $da)
                                                
                                                @if($da->class=='A_level' && $da->year==$dataay[2])

                                                @if($count5==0)

                                                <td rowspan="{{$pendingMembers5}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>


                                                @endif
                                                <p style="display: none;">{{$count5++}}</p>
                                                <td>{{$da->name}}</td>
                                                <td>{{$da->phy}}</td>
                                                <td>{{$da->chem}}</td>
                                                <td>{{$da->biomath}}</td>
                                                <td>{{$da->busniess}}</td>
                                                <td>{{$da->total_Grades}}

                                                </td>

                                                @endif
                                            </tr>

                                            @endforeach


                                        </tbody>

                                    </table>



                                </div>

                            </div>


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
