@extends('layouts.app')

@section('title','Heavy Equipment for Sale in UAE | New & Used Machinery' )
@section('description',  'Browse a wide range of new and used heavy equipment for sale in the UAE. Find excavators, cranes, bulldozers, forklifts, and more for your construction needs.')
@section('keywords', 'heavy equipment for sale, used machinery UAE, construction equipment, excavators, cranes, forklifts, bulldozers, trucks')

@section('og_url',route('category.show',$category->slug))
@section('og_image',Voyager::image($category->image) )
@section('og_type', 'category')

@section('t_title','Heavy Equipment for Sale in UAE | New & Used Machinery') 
@section('t_description', ' Browse a wide range of new and used heavy equipment for sale in the UAE. Find excavators, cranes, bulldozers, forklifts, and more for your construction needs.' )
@section('t_url',route('category.show',$category->slug) )
@section('t_image', Voyager::image($category->image) )
@section('content')
@section('content')
   
<!-- products section -->
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{$category->name}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{$category->name}}</li>
                </ol>
            </nav>
        </div>
</div>

<section class="products_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          {{$category->name}}
        </h2>
      </div>
      
    <div class="grid-container">
      @if(count($category->products)==0)
      <div>There is no products ...</div>
      @endif
    @foreach($category->products as $product)
    <x-product-card :product="$product" />

    @endforeach
    </div>
    
    </div>
  </section>

  <!-- end project section -->

 

@endsection
