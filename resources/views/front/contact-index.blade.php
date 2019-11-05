@extends('layouts.front')
@section('page-title')
    About MCU
@stop
@section('page-content')
    <div class="content container page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title float-left">Contact</h1>
            <div class="breadcrumbs float-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="{{route('front.home')}}">Home</a><i class="fas fa-angle-right"></i></li>
                    <li class="current">Contact us</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <div class="contact-form col-lg-9 col-12 page-row">
                    <h3 class="title">Get in touch</h3>
                    <p>We’d love to hear from you. In order to contact us, please fill the form below and send us a message!</p>
                    <form>
                        <div class="form-group name">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" placeholder="Enter your name">
                        </div><!--//form-group-->
                        <div class="form-group email">
                            <label for="email">Email<span class="required">*</span></label>
                            <input id="email" type="email" class="form-control" placeholder="Enter your email">
                        </div><!--//form-group-->
                        <div class="form-group phone">
                            <label for="phone">Phone</label>
                            <input id="phone" type="tel" class="form-control" placeholder="Enter your contact number">
                        </div><!--//form-group-->
                        <div class="form-group message">
                            <label for="message">Message<span class="required">*</span></label>
                            <textarea id="message" class="form-control" rows="6" placeholder="Enter your message here..."></textarea>
                        </div><!--//form-group-->
                        <button type="submit" class="btn btn-theme">Send message</button>
                    </form>
                    <div class="page-row mt-2">
                        <article class="map-section">
                            <h3 class="title">How to find us</h3>
                            <div class="row">
                                <p class="adr clearfix col-lg-6 col-12">
                                    <i class="mr-2 fas fa-map-marker-alt float-left"></i>
                                    <span class="adr-group float-left">
                                    <span class="village">Banoy Village</span><br>
                                    <span class="commune">Tuek Thla Commune</span><br>
                                    <span class="city">Serei Saophoan City</span><br>
                                    <span class="province">Banteay Meanchey Province</span><br>
                                    <span class="postal">01252</span><br>
                                    <span class="country-name">Cambodia</span>
                                </span>
                                </p>
                                <div class="col-lg-6 col-12">
                                    <p class="tel col-lg-12 col-md-4 col-12"><i class="mr-2 fas fa-phone"></i>078 654 923</p>
                                    <p class="email col-lg-12 col-md-4 col-12"><i class="mr-2 fas fa-envelope"></i><a href="#">contact@mcu.edu.kh</a></p>
                                </div>
                            </div>
                            <div class="gmap-wrapper" id="map">
                                <!--//You need to embed your own google map below-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15513.111384588292!2d102.9284086!3d13.5798293!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6ae37e3dcb70f17f!2z4Z6f4Z624Z6A4Z6b4Z6c4Z634Z6R4Z-S4Z6Z4Z624Z6b4Z-Q4Z6Z4Z6Y4Z624Z6T4Z6H4Z-Q4Z6Z!5e0!3m2!1skm!2skh!4v1571560928389!5m2!1skm!2skh" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div><!--//gmap-wrapper-->
                        </article><!--//map-->
                    </div>
                </div>
                @include('layouts.front-sidebar')
            </div><!--//cols-wrapper-->
        </div>
        @include('layouts.front-corporation')
    </div><!--//content-->
@stop
@section('page-js')
    <script>
        $(function () {
            $('.toggle-collapse').click(function () {
                if ($($(this.parentNode).children()[0]).hasClass('show-less')) {
                    $($(this.parentNode).children()[0]).removeClass('show-less')
                }else {
                    $($(this.parentNode).children()[0]).addClass('show-less')
                }
                return false;
            })
        })
    </script>
@stop
@push('js')
@endpush