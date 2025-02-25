@extends('layouts.app')

@section('title','About Us | Leading Heavy Equipment Marketplace in UAE' )
@section('description','Learn more about our trusted marketplace for buying and selling heavy equipment in the UAE. We connect buyers and sellers for the best deals on machinery.' )
@section('keywords','about heavy equipment UAE, construction machinery suppliers UAE, our story, equipment dealers, UAE heavy machinery market')

@section('og_url',route('about'))
@section('og_image',asset('images/logo/main-logo.png') )
@section('og_type','website' )

@section('t_title','About Us | Leading Heavy Equipment Marketplace in UAE') 
@section('t_description', 'Learn more about our trusted marketplace for buying and selling heavy equipment in the UAE. We connect buyers and sellers for the best deals on machinery.'  )
@section('t_url', route('about'))
@section('t_image', asset('images/logo/main-logo.png') )

@section('content')

<header class="bg-secondary text-white text-center py-5">
    <div class="container">
        <h1>About Us</h1>
        <p>Your Trusted Partner in Heavy Equipment Solutions in the UAE</p>
    </div>
</header>
<section class="container my-5">
    <div class="row align-items-center">
        <div class="col-12">
            <h2 class="text-primary">Who We Are</h2>
            <p>We are a leading provider of heavy equipment sales, rentals, and services in the UAE. With years of experience, we cater to the construction, industrial, and logistics sectors by offering high-quality machinery and equipment.</p>
            <p>Our mission is to deliver reliable, durable, and cost-effective solutions that enhance your productivity and efficiency.</p>
        </div>
        <img src="{{asset('/images/website/about-page.jpg')}}" class="img-fluid rounded" alt="Heavy Equipment">
        <div class="col-md-6">
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Our History</h2>
        <p class="text-center">A journey of excellence in the heavy equipment industry.</p>
        <div class="row">
            
            <div class="col-md-6">
                <h4>2015 - Expansion</h4>
                <p>Expanded operations across UAE and added sales services.</p>
            </div>
            <div class="col-md-6">
                <h4>2022 - Leading Provider</h4>
                <p>Recognized as a trusted supplier for major construction projects.</p>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Our Core Values</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Integrity</h4>
                <p>We operate with transparency and honesty in every transaction.</p>
            </div>
            <div class="col-md-4">
                <h4>Quality</h4>
                <p>We ensure all equipment meets the highest industry standards.</p>
            </div>
            <div class="col-md-4">
                <h4>Customer Focus</h4>
                <p>Your satisfaction is our top priority.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
    <h2 class="text-center text-primary mb-4">Why Choose US</h2>
        <div class="row">
@foreach($features as $feature)
        <div class="box col-lg-6 col-md-6 col-sm-12">
          
          <div class="detail-box">
            <h5>
            <i class="fa fa-quote-left text-primary" aria-hidden="true"></i>
            {{$feature['title']}}
            </h5>
            <p>
              {{$feature['description']}}
            </p>
          </div>
        </div>
        @endforeach
</div>
</div>
</section>


<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-primary">Our Mission</h2>
                <p>To provide high-quality, durable, and cost-effective heavy equipment solutions that enhance productivity and efficiency in the UAE’s growing industries.</p>
            </div>
            <div class="col-md-6">
                <h2 class=" text-primary">Our Vision</h2>
                <p>To be the leading provider of heavy machinery in the region, setting industry standards for quality, safety, and customer service.</p>
            </div>
        </div>
    </div>
</section>



@endsection
