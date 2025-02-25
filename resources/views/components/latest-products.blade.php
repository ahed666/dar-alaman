
<section class="products_section latest-products" >
    <div class="container">
      <div class="heading_container">
        <h2>
        new arrivals        </h2>
        <p>LATEST IN OUR STOCK
        </p>
      </div>
      <!-- style="  background-image: url('{{asset('images/website/latestproductssection.jpg')}}');" -->
    <div class="grid-container" >
        @foreach ($latestProducts as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</div>
</section>

