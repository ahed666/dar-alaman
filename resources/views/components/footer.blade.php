<section class="info_section " style="  
background-image: url('{{asset('images/website/latestproductssection.jpg')}}');">

    <div class="container">
      <x-contact-div />


      <div class="info_top ">
        <div class="row info_main_row">
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="info_logo">
              <a href="">
                <img src="{{Voyager::image(setting('site.logo'))}}" alt="">
              </a>
            </div>
        </div>
          
        <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="info_links">
            <h4>
            QUICK LINKS
            </h4>
            <div class="info_links_menu">
            <a class="" href="{{route('home')}}">Home </a>
            <a class="" href="{{route('about')}}"> About</a>
            <a class="" href="{{route('contact')}}">Contact Us</a>
            </div>
        </div>
        </div>
        <!-- categories -->
        <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="info_links">
            <h4>
            Categories
            </h4>
            <div class="info_links_menu">
              @foreach($categories as $category)
            <a class="" href="{{route('category.show',$category->slug)}}">{{$category->name}} </a>
            @endforeach
            
            </div>
        </div>
        </div>

        <!-- brands  -->
        <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="info_links">
            <h4>
            Brands
            </h4>
            <div class="info_links_menu">
              @foreach($brands as $brand)
            <a class="" href="{{route('brand.show',$brand->slug)}}">{{$brand->name}} </a>
            @endforeach
            
            </div>
        </div>
        </div>
          
        
      </div>
      <div class="mt-8 border-b-1">
                <div class="social_box">
                <a target="_blank" href="{{setting('site.facebook_link')}}">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                
                </div>
            </div>
        </div>
      
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear">2025</span> All Rights Reserved By
        <a href="{{route('home')}}">{{env('APP_NAME')}}</a>
      </p>
    </div>
  </footer>