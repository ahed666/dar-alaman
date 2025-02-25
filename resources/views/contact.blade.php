@extends('layouts.app')

@section('title','Contact Us | Buy & Sell Heavy Equipment in UAE' )
@section('description','Need help? Contact us for inquiries about buying or selling heavy equipment in the UAE. Our team is ready to assist you with the best machinery deals.' )
@section('keywords','contact heavy equipment UAE, machinery dealers UAE, get in touch, equipment inquiries, UAE construction equipment')

@section('og_url',route('contact'))
@section('og_image',asset('images/logo/main-logo.png') )
@section('og_type','website' )

@section('t_title','Contact Us | Buy & Sell Heavy Equipment in UAE') 
@section('t_description', 'Need help? Contact us for inquiries about buying or selling heavy equipment in the UAE. Our team is ready to assist you with the best machinery deals.'  )
@section('t_url', route('contact'))
@section('t_image', asset('images/logo/main-logo.png') )

@section('content')
    

<!-- contact section -->
<section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="col-lg-4 col-md-5 offset-md-1">
        <div class="heading_container">
          <h2>
            Contact Us
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container">
            <form id="contactForm" action="/submit-form" method="POST" enctype="multipart/form-data">
             @csrf
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
            <div>
                <input type="text" id="name" name="name"  placeholder="Your Name" />
              </div>
              <div>
                <input type="tel" id="phone" name="phone" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" id="email" name="email"  placeholder="Email" />
              </div>
              <div>
                <input type="text" id="message" name="message"  class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // console.log($settings);
    // Pass Laravel variables to JavaScript
    const mapConfig = {
        lat: {{ $settings->map_lat }},
        lng: {{ $settings->map_lng }},
    };

    // Check if there are any Laravel session messages
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
        });
    @endif

    @if($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            html: `
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
        });
    @endif

    /** google_map js **/
function initMap() {
 console.log(mapConfig);
    var mapProp = {
        center: new google.maps.LatLng(mapConfig.lat,mapConfig.lng),
        zoom: 18,
    };
     // Initialize the map
     var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

     // Add a marker at the specified location
     var marker = new google.maps.Marker({
         position: { lat: mapConfig.lat, lng: mapConfig.lng },
         map: map,
         title: "Company Location", // Tooltip for the marker
     });
}
</script>

     <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=initMap">
  </script>

@endsection
