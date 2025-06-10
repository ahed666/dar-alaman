<div class="item wow animate__animated animate__backInLeft" 
style="{{ $product->status === 'sold' ? 'opacity: 0.5;' : '' }}">

    <div class="box">
        <div class="img-box">
            <img src="{{Voyager::image($product->main_image)}}" alt="" />
            <a href="{{route('product.show',$product->slug)}}" class="pin_link">
                <i class="fa fa-link" aria-hidden="true"></i>
            </a>
        </div>
        <div class="detail-box">
            <h5>
                {{$product->name}}
            </h5>

            <div class="product-brand">
                <div>
                    <h6 class="pb-0">{{$product->work_hours}}<small class="mx-1">hrs</small></h6>

                </div>
                <div class="d-flex">
                    
                    <div class="mx-1 px-1">
                      @if($product->new)
                        <span class="bg-success text-white px-2 py-1 rounded fw-bold">{{__('New')}}</span>
                      @else
                      <span class="bg-warning text-black px-2 py-1 rounded fw-bold">{{__('Used')}}</span>

                      @endif
                     </div>

                     <div class="mx-1 px-1">
                      @if($product->status==='for sale')
                        <span class="bg-success text-white px-2 py-1 rounded fw-bold">{{$product->status}}</span>
                      @elseif($product->status==='sold')
                      <span class="bg-primary text-white px-2 py-1 rounded fw-bold">{{$product->status}}</span>

                      @endif
                     </div>

                    
                    <div class="mx-1 px-1">
                        <span class="bg-secondary text-white px-2 py-1 rounded fw-bold">
                            @if($product->brand)
                            {{$product->brand->brand_name}}
                            @endif
                        </span>
                    </div>
                   

                </div>
            </div>

        </div>
    </div>
</div>

<script>

</script>