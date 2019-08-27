@extends('layouts.user.app')

@section('content')

    {{--How it works--}}
    <div class="main-wrapper">
        <div class="container">
            <div class="banner-page hidden-xs">
                <img src="{{asset($bannerImage->bannerUrl())}}">
            </div>
            <div class="section-breadcrumb">
                <div class="breadcrumb">
                    <a href="{{url('/')}}">Home</a>
                    <span>Contact</span>
                </div>
            </div>
            <div class="main-container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3  col-sm-8 col-sm-offset-2">
                        <div class="kt-contact-form">
                            <h3>Get in touch</h3>
                            <p>Nulla mattis mi quis elit porttitor gravida. Ut ut laoreet justo. Suspendisse nulla
                                ligula, aliquet sed cursus ut, sodales sit amet metus. </p>
                            <form action="#">
                                <div class="form-group">
                                    <label for="name">Your name <span class="special-digit">*</span></label>
                                    <input type="text" value="" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="mail">YOUR EMAIL <span class="special-digit">*</span></label>
                                    <input type="email" value="" name="mail">
                                </div>
                                <div class="form-group">
                                    <label for="message">YOUR MESSAGE <span class="special-digit">*</span></label>
                                    <textarea name="message" cols="30" rows="5"></textarea>
                                </div>
                                <div class="form-submit">
                                    <a href="#" class="kt-button">Send Us</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End How it works--}}


@endsection
