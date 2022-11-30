@extends('includes.master')
@section('main-container')
<section class="hero-wrap hero-wrap-2" style="background-image:url(assets/images/banner.jpg)"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{url('/')}}">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Contact Us <i
                            class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">Contact Us</h2>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper px-md-4">
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p><span>Address:</span> 6th floor Hzratgunj Lucknow </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><span>Phone:</span> <a href="{{url('+917860980084')}}">+91 7860980084</a></p>
                                    <p><span>Phone:</span> <a href="{{url('+916306987022')}}">+91 6306987022</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a href="{{url('mailto:shivam786098jais00@.com')}}"><span
                                                class="__cf_email__"
                                                data-cfemail="5f363139301f26302a2d2c362b3a713c3032">shivam786098jais00@.com</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a href="{{url('jaiswalsweets.com')}}">jaiswalsweets.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Contact Us</h3>
                                @if(Session::has('enquiry'))
                                <div class="alert {!! Session('status') !!}" role="alert">
                                    <strong>Thank You!</strong> {!! Session('enquiry') !!}
                                </div>
                                @endif
                                <form method="POST" action="{{url('/save')}}" id="contactForm" name="contactForm"
                                    class="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Name">
                                                @if($errors->has('name'))
                                                <span style="color: red;">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                                @if($errors->has('email'))
                                                <span style="color: red;">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Mobile No</label>
                                                <input type="text" class="form-control" name="mobile" id="subject"
                                                    placeholder="Enter Mobile No">
                                                @if($errors->has('mobile'))
                                                <span style="color: red;">{{ $errors->first('mobile') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30"
                                                    rows="4" placeholder="Message"></textarea>
                                                @if($errors->has('message'))
                                                <span style="color: red;">{{ $errors->first('message') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 order-md-first d-flex align-items-stretch">
                            <div id="map" class="map">
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14238.481965570181!2d80.93919477297246!3d26.852020524582365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd09c18f1e13%3A0xbf01e68d3158fb37!2sHazratganj%2C%20Lucknow%2C%20Uttar%20Pradesh%20226001!5e0!3m2!1sen!2sin!4v1640239562084!5m2!1sen!2sin" width="148%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.580064380841!2d83.74203711448958!3d25.452299377550524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398df9ec917abc37%3A0xcc5c943b1cbd31cf!2sSatramganj%20Bazar%2C%20Bhadaura%2C%20Uttar%20Pradesh%20232333!5e0!3m2!1sen!2sin!4v1641284388650!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection