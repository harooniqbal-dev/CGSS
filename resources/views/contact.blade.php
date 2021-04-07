@extends('app')
@section('title', 'contact')
@section('content')
<section class="htc__contact__area ptb--80 bg__white" style="padding-top:30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="contact__wrap">
                        <h2 class="title__style--2">Contact Info</h2>
                        <p></p>
                        <div class="htc__contact__inner">
                            <!-- Start Single Address -->
                            <div class="contact__address">
                                <div class="cont__icon">
                                    <i class="icon ion-ios-location"></i>
                                    <span>address</span>
                                </div>
                                <p>29/B PAF Link Road Sargodha</p>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="contact__address">
                                <div class="cont__icon">
                                    <i class="icon ion-android-call"></i>
                                    <span>phone</span>
                                </div>
                                <p><a href="tel:+00123456789">
048 376 9683</a></p>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="contact__address">
                                <div class="cont__icon">
                                    <i class="icon ion-android-mail"></i>
                                    <span>Email</span>
                                </div>
                                <p><a href="mailto:www.yourmail.com">cgss.sargodha@gmail.com</a></p>
                            </div>
                            <!-- End Single Address -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 sm-mt-40 xs-mt-40">
                
                    <div class="htc__contact__form__wrap">
                        <h2 class="contact__title">Send A Message</h2>
                        <div class="form-output">
                            <p class="form-messege">
                            @if(Session::has('message'))
    @component('components.alert')
    {{ Session::get('message') }}
@endcomponent
@endif
                  </p>
                        </div>
                        <div class="contact-form-wrap">

                        <form action="submitcontact" method="POST" style="margin:40px;">
    @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputname" name="name" value="{{ old('name') }}" placeholder="Your Name*">
      @error('name')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror
    </div>
<div class="form-group col-md-6">
      <input type="email" class="form-control" id="inputemail" name="email" value="{{ old('email') }}" placeholder="Your Email *">
 @error('email')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror
    </div>
  </div>
<div class="form-group">
    <input type="text" class="form-control" id="inputsubject" name="subject" value="{{ old('subject') }}" placeholder="subject">
    @error('subject')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror
  </div>
<div class="form-group">
    <textarea class="form-control" id="message" rows="4" placeholder="Message" name="message" value="{{ old('message') }}"></textarea>
    @error('message')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror   
  </div>
<div class="contact-btn">
                                    <button type="submit" class="htc__btn btn--theme" >Submit</button> 
                            
                                </div>
    </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection