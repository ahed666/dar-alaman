<section class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us?
        </h2>
      </div>
      <div class="why_us_container container row">
        @foreach($features as $idx=> $feature)
        <div class="box ">
          <div class="icon-box">
            {{$idx+1}}
          </div>
          <div class="detail-box">
            <h5>
              {{$feature['title']}}
            </h5>
            <!-- <p>
              {{$feature['description']}}
            </p> -->
          </div>
        </div>
        @endforeach
        
      </div>

      <div class="d-flex justify-content-center items-aligns-center mt-4">
      <a class=" rounded btn text-light bg-secondary" href="{{route('about')}}">
        Read More
      </a>
      </div>
      
    </div>
  </section>