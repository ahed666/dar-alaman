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

                @if($product->brand)
                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('brand.show',$product->brand->slug)}}">{{$product->brand->name}}</a>
                </li>
                @endif

                @if($product->category)
                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('category.show',$product->category->slug)}}">{{$product->category->name}}</a></li>
                @endif

                <li class="breadcrumb-item text-primary active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>
</div>
<section class="product-detail-section">
    <div class="product-detail-container">
        <div class="row">
            <!-- Main Product Image -->
          
           <div class="gallery" id="product-gallery">
            <a href="{{ Voyager::image($product->main_image) }}" data-pswp-width="400" data-pswp-height="300" target="_blank">
                <img src="{{ Voyager::image($product->main_image) }}"   width="300" 
         height="200" 
         style="object-fit: cover; aspect-ratio: 4/3; display: block;"  alt="Main Image">
            </a>

            @foreach ($product->images as $image)
                <a href="{{ Voyager::image($image) }}" data-pswp-width="400" data-pswp-height="300" target="_blank">
                <img src="{{ Voyager::image($image) }}" width="100" 
     height="75" 
     style="object-fit: cover; aspect-ratio: 4/3; display: block;"  alt="Thumbnail"  />
                </a>
            @endforeach
            </div>

            <!-- Product Details -->
            <div class="product-info col-sm-12 col-md-6 col-lg-6">
                <h1 class="product-name">{{$product->name}}</h1>
                <p class="product-price">{{$product->price}} AED</p>

                <div class="d-flex gap-2 flex-wrap m-1 px-1">
                    @if($product->new)
                        <span class="bg-success text-white px-2 py-1 rounded fw-bold">{{ __('New') }}</span>
                    @else
                        <span class="bg-warning text-dark px-2 py-1 rounded fw-bold">{{ __('Used') }}</span>
                         
                    @endif

                    @if($product->status === 'for sale')
                        <span class="bg-success text-white ml-1 px-2 py-1 rounded fw-bold text-capitalize">{{ $product->status }}</span>
                    @elseif($product->status === 'sold')
                        <span class="bg-secondary text-white ml-1 px-2 py-1 rounded fw-bold text-capitalize">{{ $product->status }}</span>
                    @endif

                </div>
                @if(!$product->new)
                <div class="mt-2 px-3 py-2 bg-light border-start border-4 border-warning rounded">
                    <small class="text-muted d-block">Work Hours</small>
                    <span class="fw-bold fs-5 text-dark">
                        {{$product->work_hours}}
                        <small class="text-secondary">hrs</small>
                    </span>
                </div>
                @endif
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
<script type="module">
function updateMainImage(thumbnail) {
    const mainImage = document.getElementById("main-image");
    mainImage.src = thumbnail.src; // Update the main image source
}
import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.min.js';

  const lightbox = new PhotoSwipeLightbox({
    gallery: '#product-gallery',
    children: 'a',
    pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js'),
  });

  lightbox.init();
</script>


@endsection