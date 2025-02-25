<div class="contact_nav">
            <a href="tel:{{ setting('site.mobile_number') }}">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                 {{ setting('site.mobile_number') }}
              </span>
            </a>
            <a target="_blank" href="https://wa.me/{{ setting('site.whatsapp') }}">
              <i class="fa fa-whatsapp" aria-hidden="true"></i>
              <span>
                 {{ setting('site.whatsapp') }}
              </span>
            </a>
            <a href="mailto:{{ setting('site.email') }}">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                 {{ setting('site.email') }}
              </span>
            </a>
            <a href="https://www.google.com/maps?q={{ setting('site.map_lat') }},{{setting('site.map_lng')  }}" target="_blank" class="icon" title="View Location">

              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
              {{setting('site.location_text')}}
              </span>
            </a>
</div>
