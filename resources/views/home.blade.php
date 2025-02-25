@extends('layouts.app')

@section('title', 'Buy & Sell Heavy Equipment in UAE | '.env('APP_NAME'))
@section('description','Discover the best heavy equipment marketplace in the UAE. Buy and sell new and used construction machinery, excavators, cranes, loaders, and more at competitive prices.' )
@section('keywords','heavy equipment UAE, construction machinery UAE, buy heavy equipment, sell used machinery, excavators for sale UAE, cranes for sale, loaders, bulldozers')

@section('og_url',route('home') )
@section('og_image', asset('images/logo/main-logo.png')  )
@section('og_type','website' )

@section('t_title','Buy & Sell Heavy Equipment in UAE | Top Machinery Marketplace') 
@section('t_description', 'Discover the best heavy equipment marketplace in the UAE. Buy and sell new and used construction machinery, excavators, cranes, loaders, and more at competitive prices.' )
@section('t_url',route('home') )
@section('t_image', asset('images/logo/main-logo.png') )



@section('content')
    <!-- slider section -->
     
    <x-hero-slider :sliders="$sliders" :categories="$categories" />
    <!-- end slider section -->
    <!-- categories -->
     <!-- <x-categories :categories="$categories"/> -->
     <!-- end categories -->
    <!-- latest products -->
     <x-latest-products :latestProducts="$latestProducts" />
     <x-about-section-home />
     <x-brands :brands="$brands"/>
    <x-why-us-section :features="$features" />
    

@endsection
