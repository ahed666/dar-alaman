@props(['sliders','categories'])
<section class="container-fluid p-0 pb-5  position-relative">
    <div class="owl-carousel header-carousel position-relative">

        @foreach($sliders as $slider)
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{Voyager::image($slider->image)}}" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-10">
                            <div class="detail-box">
                                <p class="text-white text-uppercase fw-bold mb-2">// {{$slider->title}}</p>
                                <h1 class="display-5 text-light mb-4 animated slideInDown">{{$slider->sub_title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        

    </div>
    <x-categories :categories="$categories"/>
</section>