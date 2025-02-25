@extends('layouts.app')

@php
$images=$product->images;
@endphp

@section('title',$product->name.' for Sale in UAE | Best Price & Quality' )
@section('keywords',$product->name.' for sale, heavy machinery UAE, construction equipment, buy [product type], used
'.$product->name.' UAE' )
@section('description','Get the best deals on '.$product->name.' in the UAE. High-quality, durable heavy equipment at
the best prices. Contact us for more details!')

@section('og_url',route('product.show',$product->slug))
@section('og_image',Voyager::image($product->main_image) )
@section('og_type','product' )

@section('t_title',$product->name.' for Sale in UAE | Best Price & Quality' )
@section('t_description',$product->name.' for sale, heavy machinery UAE, construction equipment, buy [product type],
used '.$product->name.' UAE' )
@section('t_url',route('product.show',$product->slug) )
@section('t_image', Voyager::image($product->main_image) )

@section('content')
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">{{$product->name}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">{{__('Home')}}</a></li>

                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('brand.show',$product->brand->slug)}}">{{$product->brand->name}}</a></li>

                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('category.show',$product->category->slug)}}">{{$product->category->name}}</a></li>


                <li class="breadcrumb-item text-primary active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>
</div>
<section class="product-detail-section">
    <div class="product-detail-container">
        <div class="row">
            <!-- Main Product Image -->
            <div class="product-images col-12 col-md-6 col-lg-6">
                <img id="main-image" src="{{Voyager::image($product->main_image)}}" alt="Main Product Image">

                <!-- Thumbnails for Additional Images -->
                <div class="product-thumbnails">
                    <img src="{{Voyager::image($product->main_image)}}" alt="Thumbnail 1"
                        onclick="updateMainImage(this)">

                    @if($product->images)
                    @foreach($product->images as $image)
                    <img src="{{Voyager::image($image)}}" alt="Thumbnail 1" onclick="updateMainImage(this)">

                    @endforeach
                    @endif
                </div>
            </div>

            <!-- Product Details -->
            <div class="product-info col-sm-12 col-md-6 col-lg-6">
                <h1 class="product-name">{{$product->name}}</h1>
                <p class="product-price">{{$product->price}} AED</p>
                <div class="m-1 px-1">
                    @if($product->new)
                    <span class="bg-success text-white px-2 py-1 rounded fw-bold">{{__('New')}}</span>
                    @else
                    <span class="bg-warning text-black px-2 py-1 rounded fw-bold">{{__('Used')}}</span>

                    @endif
                </div>
                <p class="product-description">
                    {{$product->description}}
                </p>
                <div class="product-features">
                    <!-- <li>Feature 1: High-quality material</li>
          <li>Feature 2: Durable and long-lasting</li>
          <li>Feature 3: Available in multiple colors</li> -->
                    {!!$product->features!!}
                </div>
                <!-- <button class="buy-now-btn">Buy Now</button> -->
            </div>
        </div>
    </div>
</section>
<script>
function updateMainImage(thumbnail) {
    const mainImage = document.getElementById("main-image");
    mainImage.src = thumbnail.src; // Update the main image source
}
</script>


@endsection