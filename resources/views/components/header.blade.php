<div class="hero_area"><header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">
          <x-contact-div />
           
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="{{Voyager::image(setting('site.logo'))}}" alt="">
             
            </a>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                  <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- categories -->
                <x-categories-dropdown :type="'category'" :title="'Categories'" :items="$categories"  />
                <!-- <li class="nav-item {{ Route::is('services') ? 'active' : '' }}">
                  <a class="nav-link" href="service.html">Services</a>
                </li> -->
                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                  <a class="nav-link" href="{{route('about')}}"> About</a>
                </li>

                <!-- brands -->
                <x-categories-dropdown :type="'brand'" :title="'Brands'" :items="$brands"  />

               
                
                <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                  <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
              
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
              
            </div>
          </nav>
        </div>
      </div>
    </header>
</div>