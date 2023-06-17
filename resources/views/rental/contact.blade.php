@extends('rental')

@section('content')
<main class="bg_gray">
	
    <div class="container margin_60">
        <div class="main_title">
            <h2>Contact Us</h2>
            <p>Need an expert? you are more than welcomed to leave your contact info and we will be in touch shortly</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="box_contacts">
                    <i class="ti-support"></i>
                    <h2>CiliwungCamp Help Center</h2>
                    <a href="wa.me/+6285103965552">0851-0396-5552</a> - <a href="mailto:info@ciliwungcamp.com">info@ciliwungcamp.com</a>
                    <small>SUN to SAT 8am-8pm</small>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_contacts">
                    <i class="ti-map-alt"></i>
                    <h2>CiliwungCamp Office</h2>
                    <div>Jl. Ciliwung I No.76, Malang, 65126, ​East Java - Indonesia</div>
                    <small>SUN to SAT 8am-8pm</small>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="box_contacts">
                    <i class="ti-package"></i>
                    <h2>CiliwungCamp Orders</h2>
                    <a href="#0">+94 423-23-221</a> - <a href="#0">order@allaia.com</a>
                    <small>SUN to SAT 8am-8pm</small>
                </div>
            </div> --}}
        </div>
        <!-- /row -->				
    </div>
    <!-- /container -->
<div class="bg_white">
    <div class="container margin_60_35">
        <h4 class="pb-3">Our Location</h4>
        <div class="row">
            {{-- <div class="col-lg-4 col-md-6 add_bottom_25">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name *">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email *">
                </div>
                <div class="form-group">
                    <textarea class="form-control" style="height: 150px;" placeholder="Message *"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn_1 full-width" type="submit" value="Submit">
                </div>
            </div> --}}
            <div class="col-lg-8 col-md-6 add_bottom_25">
            <iframe class="map_contact" src="https://maps.google.com/maps?q=ciliwungcamp&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near" style="border: 0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_white -->
</main>
@endsection

@push('css')
<link href="{{asset ('assets/userNew/css/contact.css')}}" rel="stylesheet">
@endpush