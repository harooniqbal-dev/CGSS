@extends('app')
@section('title', 'Training Session')
@section('content')
<section class="internal" style="padding-top: 30px;">
         <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="internal__head">
                        <h2 class="internal__title">Internal Workshop</h2>
                        <p class="External__para">
                          The internal workshop is conducted by Research
                          and Development Cell
                        </p>
                    </div>
                </div>
            </div>
             <div class="row">
                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                 <div class="category__1">
                     <h3 class="category1__title"> CGSS Philosophy</h3>
                      <div class="icon"><i class="material-icons" >star</i>
                     <h4 class="category1__outline">Training Outline</h4></div>
                     <ul class="cate__list">
                         <li>Vision of CGSS</li>
                         <li>Truth theory for CGSS Vision</li>
                         <li>Educational Philosophy of CGSS (VKS)</li>
                         <li>Theory of Leadership </li>
                     </ul>
                 </div>
                 </div>
                  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                 <div class="category__1">
                     <h3 class="category2__title"> Educational Theory</h3>
                     <div class="icon"><i class="material-icons" >star</i>
                     <h4 class="category1__outline">Training Outline</h4></div>
                     <ul class="cate__list">
                         <li>Theories of education</li>
                         <li>Blooms taxonomy of educational objectives</li>
                         <li>Theory of Assessments</li>
                         <li>Lesson Planning </li>
                         <li>Jean Piaget’s theory of cognitive development </li>
                         <li>Theory of behaviourism   </li>
                         <li>Howard Gardeners theory of multiple intelligence </li>
                         <li>Theory of personality </li>
                         <li>Theory of cognitive development </li>
                         <li>Theory of Multisensory teaching </li>
                         <li>Differentiated Learning </li>
                         <li>Theory of metacognition</li>
                         <li>Learning styles </li>
                         <li>STEM </li>
                         <li>Whole brain Teaching </li>
                     </ul>
                 </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="External__Workshop">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                     <div class="External__body">
                     <h2 class="External__title">External Workshop</h2>
                     <p class="External__para">We are very Concerned about teachers’ up-gradation of knowledge. Every Year subject teachers &amp; Senior Team members are sent by the institution for Cambridge introductory / Extension / Professional Development Courses.</p>
                     </div>     
                     <div class="container">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-responsive">
      <thead class="thead-dark">
        <tr>
          <th>Year</th>
          <th>Teacher</th>
          <th>Subject</th>
          <th>Level / Course</th>
        </tr>
      </thead>
      <tbody style="color:#747474;">

      @foreach ($data as $data)
      <tr>
          <td>{{$data->year}}</td>
          <td>{{$data->Teacher}}</td>
          <td>{{$data->Subject}}</td>
          <td>{{$data->Level}}</td>  
        </tr>
@endforeach
      </tbody>
    </table>
  </div>
</div>
                 </div>
             </div>
         </div>
     </section>
@endsection
