<section class="project_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Brands
        </h2>
        <p>
        Authorized distributors for some of the best equipment brands
        </p>
      </div>
      <div class="carousel-wrap ">
        

        <div class="owl-carousel brands_carousel">
         @foreach($brands as $brand)
         <div class="owl-carousel-item brand-item text-center">
         <a href="{{route('brand.show',$brand->slug)}}" class="item ">
            <div class="box">
              <div class="img-box">
                <img src="{{Voyager::image($brand->logo)}}" alt="" />
                
              </div>
             
            </div>
          </a>
          </div>
          
         @endforeach
        </div>
      </div>
    </div>
  </section>